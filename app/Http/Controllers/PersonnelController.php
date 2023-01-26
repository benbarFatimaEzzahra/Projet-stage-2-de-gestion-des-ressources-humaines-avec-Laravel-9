<?php

namespace App\Http\Controllers;

use App\Models\personnel;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //    $personnels = personnel::all();
        //  return view('personnels.index')->with('personnels', $personnels);
         // $personnels = personnel::with('services')->get();
        //  return view('personnels.index', compact('personnels'));

        $personnels = personnel::join('services', 'services.id', '=', 'personnels.service_id')
                   ->select('personnels.*','nom_s')
              		->get();
        // return view('personnels.index')->with('personnels', $personnels);
        return view('personnels.index', compact('personnels'));
    }
     public function join(){
        $service = DB::table('services')->count();
        $absence = DB::table('absences')->count();
        $personnel = DB::table('personnels')->count();
        $demander=DB::table('demanders')->where('commentaires_dem','=','Validé')->count();
        $personnels = DB::table('personnels')
        ->leftjoin('services', 'services.id', '=', 'personnels.service_id')
        ->leftjoin('demanders','demanders.personnel_id',"=",'personnels.id')
        ->leftjoin('congs', 'congs.id', '=', 'demanders.cong_id')
        ->leftjoin('typeconges','congs.typeconge_id',"=",'typeconges.id')
        
        ->leftjoin('prmes', 'personnels.id', '=', 'prmes.personnel_id')
        ->leftjoin('absences', 'personnels.id', '=', 'absences.personnel_id')
        
        ->select('personnels.*','nom','prenom','nom_s','date_debut','date_fin','libelle_type','commentaires','commentaires_dem','dscription')
        ->get();
           return view('personnels.join', compact('personnels','personnel','service','absence','demander'));
     }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personnels.create');
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
            personnel::create($input);
            return redirect('/personnel')->with('flash_message', 'personnel Addedd!'); 

        }
    } 
    public function store(Request $request)
    {
        $input = $request->all();
        if($request->hasFile('photo'))
        {
            $destination_path='public/images';
            $photo=$request->file('photo');
            $photo_name=$photo->getClientOriginalName();
            $path=$request->file('photo')->storeAs($destination_path,$photo_name);
            $input['photo']=$photo_name;
        }
        personnel::create($input);
        return redirect('/personnel')->with('flash_message', 'personnel Addedd!');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    // public function show(personnel $personnel)
    // {
    //     //
    // }
    public function show($id)
    {
        $personnel = personnel::find($id);
        return view('personnels.show')->with('personnels', $personnel);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personnel = personnel::find($id);
        return view('personnels.edit')->with('personnels', $personnel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $personnel = personnel::find($id);
        $input = $request->all();
        if($request->hasFile('photo'))
        {
            $destination_path='public/images';
            $photo=$request->file('photo');
            $photo_name=$photo->getClientOriginalName();
            $path=$request->file('photo')->storeAs($destination_path,$photo_name);
            $input['photo']=$photo_name;
        
        }
        $personnel->update($input);
        return redirect('/personnel')->with('flash_message', 'personnel Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        personnel::destroy($id);
        
        return redirect('/personnel')->with('flash_message', 'service deleted!'); 
    }

    public function search(Request $request)
    {
        $query = $request->search;
        $personnels = personnel::OrderBy('id','DESC')->where('nom_s','LIKE','%'.$query.'%')->paginate(20);
        return view('personnels.search',compact('personnel'));
    }
}
