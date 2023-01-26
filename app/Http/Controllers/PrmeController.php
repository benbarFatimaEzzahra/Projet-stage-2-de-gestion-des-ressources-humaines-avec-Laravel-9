<?php

namespace App\Http\Controllers;

use App\Models\prme;
use App\Models\personnel;
use App\Models\service;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;


class PrmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        
        $prmes = prme::join('personnels', 'personnels.id', '=', 'prmes.personnel_id')
        ->join('services','personnels.service_id',"=",'services.id')
        ->select('prmes.*','nom','prenom','nom_s')
        ->get();

       return view('prmes.index', compact('prmes'));  
    }
   
     public function join(){
         return DB::table('prmes')
            ->join('personnels','prmes.personnel_id',"=",'personnels.id')
            
            ->get();
     }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prmes.create');
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
            prme::create($input);
            return redirect('/prme')->with('flash_message', 'prme Addedd!'); 

        }
    } 
    public function store(Request $request)
    {
        $requestData = $request->all();

        prme::create($requestData);

        return redirect('/prme')->with('flash_message', 'prme Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prme  $prme
     * @return \Illuminate\Http\Response
     */
    // public function show(prme $prme)
    // {
    //     //
    // }
    public function show($id)
    {
        $prme = prme::find($id);
        return view('prmes.show')->with('prmes', $prme);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prme  $prme
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prmes = prme::find($id);
        return view('prmes.edit')->with('prmes', $prmes);
    }
    public function edit1(Prme $prme)
    {
        $prmes = prme::all();
        return view('prmes.edit')->with('prmes', $prmes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prme  $prme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prme = prme::find($id);
        $input = $request->all();
        $prme->update($input);
        return redirect('/prme')->with('flash_message', 'prme Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prme  $prme
     * @return \Illuminate\Http\Response
     */
    public function destroy1($id)
    {
        prme::destroy($id);
        return redirect('/prme')->with('flash_message', 'service deleted!'); 
    }
    public function destroy(prme $prme)
    {
        $prme->delete();

       
        return redirect('/prme');
    }
    public function search(Request $request)
    {
        $query = $request->search;
        $prmes = prme::OrderBy('id','DESC')->where('nom_s','LIKE','%'.$query.'%')->paginate(20);
        return view('prmes.search',compact('prme'));
    }
}
