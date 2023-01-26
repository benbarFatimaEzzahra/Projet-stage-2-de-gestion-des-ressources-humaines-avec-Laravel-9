<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\demander;
use App\Models\cong;
use App\Models\typeconge;
use App\Models\jour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class DemanderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        
        $demanders = demander::join('congs', 'congs.id', '=', 'demanders.cong_id')
        ->join('typeconges','congs.typeconge_id',"=",'typeconges.id')
        ->join('personnels','personnels.id',"=",'demanders.personnel_id')
        ->join('services', 'services.id', '=', 'personnels.service_id')
        ->select('demanders.*','nom','prenom','nom_s','date_debut','date_fin','libelle_type')
        ->get();

       return view('demanders.index', compact('demanders'));  
    }
   
     public function join(){
         return DB::table('demanders')
            ->join('personnels','demanders.personnel_id',"=",'personnels.id')
            
            ->get();
     }
     public function pdf() {
        
        $demanders =demander::join('congs', 'congs.id', '=', 'demanders.cong_id')
        ->join('typeconges','congs.typeconge_id',"=",'typeconges.id')
        ->join('personnels','personnels.id',"=",'demanders.personnel_id')
        ->join('services', 'services.id', '=', 'personnels.service_id')
        
        ->select('demanders.*','nom','prenom','nom_s','date_debut','date_fin','libelle_type');
        view()->share('demanders',$demanders);
        $pdf = PDF::loadView('demanders.pdf',$demanders);
        
        return $pdf->download($demanders->nom . '_' .$demanders->prenom . 'pdf.pdf');
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demanders.create');
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
            demander::create($input);
            return redirect('/demander')->with('flash_message', 'demander Addedd!'); 

        }
    } 
    public function store(Request $request)
    {
        $requestData = $request->all();

        demander::create($requestData);

        
        return redirect('/demander')->with('flash_message', 'demander Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\demander  $demander
     * @return \Illuminate\Http\Response
     */
    // public function show(demander $demander)
    // {
    //     //
    // }
    public function show($id)
    {
        $demander = demander::find($id);
        return view('demanders.show')->with('demanders', $demander);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\demander  $demander
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $demanders = demander::find($id);
        return view('demanders.edit')->with('demanders', $demanders);
    }
    public function edit1(demander $demander)
    {
        $demanders = demander::all();
        return view('demanders.edit')->with('demanders', $demanders);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\demander  $demander
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $demander = demander::find($id);
        $input = $request->all();
        $demander->update($input);
        return redirect('/demander')->with('flash_message', 'demander Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\demander  $demander
     * @return \Illuminate\Http\Response
     */
    public function destroy1($id)
    {
        demander::destroy($id);
        return redirect('/demander')->with('flash_message', 'service deleted!'); 
    }
    public function destroy(demander $demander)
    {
        $demander->delete();

       
        return redirect('/demander');
    }
    public function search(Request $request)
    {
        $query = $request->search;
        $demanders = demander::OrderBy('id','DESC')->where('nom_s','LIKE','%'.$query.'%')->paginate(20);
        return view('demanders.search',compact('demander'));
    }
}
