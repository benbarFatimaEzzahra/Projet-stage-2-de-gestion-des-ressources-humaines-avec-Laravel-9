<?php

namespace App\Http\Controllers;

use App\Models\jour;
use Illuminate\Http\Request;

class JourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jours = jour::all();
        return view('jours.index')->with('jours', $jours);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jours.create');
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
            jour::create($input);
            return redirect('/jour')->with('flash_message', 'jour Addedd!'); 

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jour  $jour
     * @return \Illuminate\Http\Response
     */
    // public function show(jour $jour)
    // {
    //     //
    // }
    public function show($id)
    {
        $jour = jour::find($id);
        return view('jours.show')->with('jours', $jour);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jour  $jour
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jour = jour::find($id);
        return view('jours.edit')->with('jours', $jour);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jour  $jour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jour = jour::find($id);
        $input = $request->all();
        $jour->update($input);
        return redirect('/jour')->with('flash_message', 'jour Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jour  $jour
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        jour::destroy($id);
        return redirect('/jour')->with('flash_message', 'jour deleted!'); 
    }
    public function search(Request $request)
    {
        $query = $request->search;
        $jours = jour::OrderBy('id','DESC')->where('nom_s','LIKE','%'.$query.'%')->paginate(20);
        return view('jours.search',compact('jour'));
    }
}
