<?php

namespace App\Http\Controllers;

use App\Models\cong;
use App\Models\typeconge;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;


class CongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //    $congs = cong::all();
        //  return view('congs.index')->with('congs', $congs);
         // $congs = cong::with('services')->get();
        //  return view('congs.index', compact('congs'));
        $congs = cong::join('typeconges', 'typeconges.id', '=', 'congs.typeconge_id')
                   ->select('congs.*','libelle_type')
              		->get();
        // return view('congs.index')->with('congs', $congs);
        return view('congs.index', compact('congs'));
    }
     public function join(){
         return DB::table('congs')
            ->join('services','congs.service_id',"=",'services.id')
            ->get();
     }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('congs.create');
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
            cong::create($input);
            return redirect('/cong')->with('flash_message', 'cong Addedd!'); 

        }
    } 
    public function store(Request $request)
    {
        $requestData = $request->all();

        
        cong::create($requestData);
        typeconge::create($requestData);
        return redirect('/cong')->with('flash_message', 'cong Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cong  $cong
     * @return \Illuminate\Http\Response
     */
    // public function show(cong $cong)
    // {
    //     //
    // }
    public function show($id)
    {
        $cong = cong::find($id);
        return view('congs.show')->with('congs', $cong);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cong  $cong
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cong = cong::find($id);
        return view('congs.edit')->with('congs', $cong);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cong  $cong
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cong = cong::find($id);
        $input = $request->all();
        $cong->update($input);
        return redirect('/cong')->with('flash_message', 'cong Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cong  $cong
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        cong::destroy($id);
        
        return redirect('/cong')->with('flash_message', 'service deleted!'); 
    }

    public function search(Request $request)
    {
        $query = $request->search;
        $congs = cong::OrderBy('id','DESC')->where('type_libelle','LIKE','%'.$query.'%')->paginate(20);
        return view('congs.search',compact('cong'));
    }
}
