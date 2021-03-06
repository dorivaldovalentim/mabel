<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Portifolio;
use Illuminate\Http\Request;

class PortifolioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('auth.admin')->only('index');
        $this->middleware('auth.super_admin')->only('create');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portifolios = Portifolio::all();
        return view('admin.portifolio.index', compact('portifolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portifolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portifolio = new Portifolio();
        $portifolio->name = $request->name;
        $portifolio->description = $request->description;
        
        if ($request->hasFile('file')) {
            $portifolio->file = $request->file->store('public/'. $portifolio->name);
            $portifolio->typeFile = $request->typeFile;

        }
        
        if ($portifolio->save()) {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portifolio  $portifolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portifolio $portifolio)
    {
        return view('admin.portifolio.show', compact('portifolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portifolio  $portifolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portifolio $portifolio)
    {
        return view('admin.portifolio.edit', compact('portifolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portifolio  $portifolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portifolio $portifolio)
    {
        $portifolio->name = $request->name;
        $portifolio->description = $request->description;
        
        if ($request->hasFile('file')) {
            $portifolio->file = $request->file->store('public/'. $request->name);
            $portifolio->typeFile = $request->typeFile;
        }
        
        if ($portifolio->save()) {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portifolio  $portifolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portifolio $portifolio)
    {
        if ($portifolio->delete()) {
            return redirect()->back();
        }
    }
}
