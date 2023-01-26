<?php

namespace App\Http\Controllers;

use App\Models\contenir;
use App\Models\cong;
use App\Models\typeconge;
use App\Models\jour;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;


class ContenirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        
        $contenirs = contenir::join('jours', 'jours.id', '=', 'contenirs.jour_id')
        ->join('congs','congs.id',"=",'contenirs.cong_id')
        ->join('typeconges','congs.typeconge_id',"=",'typeconges.id')
        ->select('contenirs.*','date_debut','date_fin','titre','libelle_type')
        ->get();

       return view('contenirs.index', compact('contenirs'));  
    }
   
     public function join(){
         return DB::table('contenirs')
            ->join('personnels','contenirs.personnel_id',"=",'personnels.id')
            
            ->get();
     }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contenirs.create');
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
            contenir::create($input);
            return redirect('/contenir')->with('flash_message', 'contenir Addedd!'); 

        }
    } 
    public function store(Request $request)
    {
        $requestData = $request->all();

        contenir::create($requestData);

        
        return redirect('/contenir')->with('flash_message', 'contenir Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contenir  $contenir
     * @return \Illuminate\Http\Response
     */
    // public function show(contenir $contenir)
    // {
    //     //
    // }
    public function show($id)
    {
        $contenir = contenir::find($id);
        return view('contenirs.show')->with('contenirs', $contenir);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contenir  $contenir
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contenirs = contenir::find($id);
        return view('contenirs.edit')->with('contenirs', $contenirs);
    }
    public function edit1(contenir $contenir)
    {
        $contenirs = contenir::all();
        return view('contenirs.edit')->with('contenirs', $contenirs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contenir  $contenir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contenir = contenir::find($id);
        $input = $request->all();
        $contenir->update($input);
        return redirect('/contenir')->with('flash_message', 'contenir Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contenir  $contenir
     * @return \Illuminate\Http\Response
     */
    public function destroy1($id)
    {
        contenir::destroy($id);
        return redirect('/contenir')->with('flash_message', 'service deleted!'); 
    }
    public function destroy(contenir $contenir)
    {
        $contenir->delete();

       
        return redirect('/contenir');
    }
    public function search(Request $request)
    {
        $query = $request->search;
        $contenirs = contenir::OrderBy('id','DESC')->where('nom_s','LIKE','%'.$query.'%')->paginate(20);
        return view('contenirs.search',compact('contenir'));
    }
}
