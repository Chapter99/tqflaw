<?php

namespace App\Http\Controllers;

use App\Model\Tqf;
use App\Model\Course;
use App\Model\Alltqf;
use Illuminate\Http\Request;

class AlltqfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tqfs = Tqf::latest()->paginate(10);
        // dd($categorys);
        return view('backend.pages.alltqfs.index', compact('tqfs'))->with('i', (request()->input('page', 1) -1 ) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\alltqfs  $all_tqfs
     * @return \Illuminate\Http\Response
     */
    public function show(Alltqf $alltqfs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\alltqfs  $all_tqfs
     * @return \Illuminate\Http\Response
     */
    public function edit(Alltqf $alltqf)
    {
        //
        $tqf = Tqf::all(); 
        $coures = Course::all();              
        return view('backend.pages.alltqfs.edit', compact('tqfs'))
        ->with(compact('coures'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\alltqfs  $all_tqfs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alltqf $Alltqfs)
    {
        //
        return "This is Update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\all_tqfs  $all_tqfs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alltqf $alltqf)
    {
        //
    }
}
