<?php

namespace App\Http\Controllers;

use App\Models\typeconge;
use Illuminate\Http\Request;

class TypecongeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeconges = typeconge::all();
        return view('typeconges.index')->with('typeconges', $typeconges);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('typeconges.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $input = $request->all();
            typeconge::create($input);
            return redirect('/typeconge')->with('flash_message', 'typeconge Addedd!'); 

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\typeconge  $typeconge
     * @return \Illuminate\Http\Response
     */
    // public function show(typeconge $typeconge)
    // {
    //     //
    // }
    public function show($id)
    {
        $typeconge = typeconge::find($id);
        return view('typeconges.show')->with('typeconges', $typeconge);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\typeconge  $typeconge
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typeconge = typeconge::find($id);
        return view('typeconges.edit')->with('typeconges', $typeconge);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\typeconge  $typeconge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $typeconge = typeconge::find($id);
        $input = $request->all();
        $typeconge->update($input);
        return redirect('/typeconge')->with('flash_message', 'typeconge Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\typeconge  $typeconge
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        typeconge::destroy($id);
        return redirect('/typeconge')->with('flash_message', 'typeconge deleted!'); 
    }
    public function search(Request $request)
    {
        $query = $request->search;
        $typeconges = typeconge::OrderBy('id','DESC')->where('nom_s','LIKE','%'.$query.'%')->paginate(20);
        return view('typeconges.search',compact('typeconge'));
    }
}
