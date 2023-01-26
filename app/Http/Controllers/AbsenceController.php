<?php

namespace App\Http\Controllers;

use App\Models\absence;
use App\Models\personnel;
use App\Models\service;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;


class AbsenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        
        $absences = absence::join('personnels', 'personnels.id', '=', 'absences.personnel_id')
        ->join('services','personnels.service_id',"=",'services.id')
        ->select('absences.*','nom','prenom','nom_s')
           ->get();

       return view('absences.index', compact('absences'));  
    }
   
     public function join(){
         return DB::table('absences')
            ->join('personnels','absences.personnel_id',"=",'personnels.id')
            
            ->get();
     }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('absences.create');
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
            absence::create($input);
            return redirect('/absence')->with('flash_message', 'absence Addedd!'); 

        }
    } 
    public function store(Request $request)
    {
        $requestData = $request->all();

        absence::create($requestData);
        
        return redirect('/absence')->with('flash_message', 'absence Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\absence  $absence
     * @return \Illuminate\Http\Response
     */
    // public function show(absence $absence)
    // {
    //     //
    // }
    public function show($id)
    {
        $absence = absence::find($id);
        return view('absences.show')->with('absences', $absence);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\absence  $absence
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $absences = absence::find($id);
        return view('absences.edit')->with('absences', $absences);
    }
    public function edit1(absence $absence)
    {
        $absences = absence::all();
        return view('absences.edit')->with('absences', $absences);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\absence  $absence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $absence = absence::find($id);
        $input = $request->all();
        $absence->update($input);
        return redirect('/absence')->with('flash_message', 'absence Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\absence  $absence
     * @return \Illuminate\Http\Response
     */
    public function destroy1($id)
    {
        absence::destroy($id);
        return redirect('/absence')->with('flash_message', 'service deleted!'); 
    }
    public function destroy(absence $absence)
    {
        $absence->delete();

       
        return redirect('/absence');
    }
    public function search(Request $request)
    {
        $query = $request->search;
        $absences = absence::OrderBy('id','DESC')->where('nom_s','LIKE','%'.$query.'%')->paginate(20);
        return view('absences.search',compact('absence'));
    }
}
