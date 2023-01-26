<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\dmander;
use App\Models\cong;
use App\Models\typeconge;
use App\Models\personnel;
use App\Models\jour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class DmanderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        
        $dmanders = dmander::join('congs', 'congs.id', '=', 'dmanders.cong_id')
        ->join('typeconges','congs.typeconge_id',"=",'typeconges.id')
        ->join('personnels','personnels.id',"=",'dmanders.personnel_id')
        ->join('services', 'services.id', '=', 'personnels.service_id')
        ->select('dmanders.*','nom','prenom','nom_s','date_debut','date_fin','libelle_type')
        ->get();

       return view('dmanders.index', compact('dmanders'));  
    }
   
     public function join(){
         return DB::table('dmanders')
            ->join('personnels','dmanders.personnel_id',"=",'personnels.id')
            
            ->get();
     }
     public function pdf() {
        
        $dmanders =dmander::join('congs', 'congs.id', '=', 'dmanders.cong_id')
        ->join('typeconges','congs.typeconge_id',"=",'typeconges.id')
        ->join('personnels','personnels.id',"=",'dmanders.personnel_id')
        ->join('services', 'services.id', '=', 'personnels.service_id')
        
        ->select('dmanders.*','nom','prenom','nom_s','date_debut','date_fin','libelle_type');
        view()->share('dmanders',$dmanders);
        $pdf = PDF::loadView('dmanders.pdf',$dmanders);
        
        return $pdf->download($dmanders->nom . '_' .$dmanders->prenom . 'pdf.pdf');
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dmanders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        {
            $input = $request->all();
            dmander::create($input);
            return redirect('/dmander')->with('flash_message', 'dmander Addedd!'); 

        }
    } 
    public function store(Request $request)
    {
        $requestData = $request->all();

        dmander::create($requestData);

        
        return redirect('/dmander')->with('flash_message', 'dmander Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dmander  $dmander
     * @return \Illuminate\Http\Response
     */
    // public function show(dmander $dmander)
    // {
    //     //
    // }
    public function show($id)
    {
        $dmander = dmander::find($id);
        return view('dmanders.show')->with('dmanders', $dmander);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dmander  $dmander
     * @return \Illuminate\Http\Response
     */
    public function edit2($id)
    {
        $dmanders = dmander::find($id);
        return view('dmanders.edit')->with('dmanders', $dmanders);
    }
    public function edit1(dmander $dmander)
    {
        $dmanders = dmander::all();
        return view('dmanders.edit')->with('dmanders', $dmanders);
    }
    public function edit($id)
    {
        $congs = cong::find($id);
        $personnels = personnel::find($id);
        $dmanders = dmander::all();
        return view('dmanders.edit', compact('congs','personnels','dmanders'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dmander  $dmander
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $dmander = dmander::find();
        $input = $request->all();
        $dmander->update($input);
        return redirect('/dmander')->with('flash_message', 'dmander Updated!');
    }
    public function update1(Request $request, Trainer $trainer)
    {
      $data = $request->all();

      $trainer->update($data);

      $trainer->courses()->detach($data['course_id']);
      $trainer->courses()->attach($data['course_id']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dmander  $dmander
     * @return \Illuminate\Http\Response
     */
    public function destroy1($cong_id,$personnel_id)
    {
        dmander::destroy($cong_id,$personnel_id);
        return redirect('/dmander')->with('flash_message', 'service deleted!'); 
    }
    public function destroy(dmander $dmander)
    {
        $dmander->delete();

       
        return redirect('/dmander');
    }
    public function search(Request $request)
    {
        $query = $request->search;
        $dmanders = dmander::OrderBy('id','DESC')->where('nom_s','LIKE','%'.$query.'%')->paginate(20);
        return view('dmanders.search',compact('dmander'));
    }
}
