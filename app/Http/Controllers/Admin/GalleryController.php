<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use App\Portifolio;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portifolios = Portifolio::all();
        return view('admin.gallery.index', compact('portifolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery = new Gallery();
        $gallery->portifolio_id = 2;

        /** Buscar dados do portifolio */
        $portifolio = Portifolio::find($gallery->portifolio_id);
        if ($request->hasFile('images')) {
            for ($i = 0; $i < count($request->allFiles()['images']); $i++) { 
                $file = $request->allFiles()['images'][$i];
                $gallery->path = $file->store('public/'. $portifolio->name . '/'. 'gallery');
                $gallery->save();
            }
        }
        // dd($gallery);
        // if ($gallery->save()) {
        //     return redirect()->back();
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        return view('admin.gallery.show', compact('gallery') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $gallery->portifolio_id = 1;

        /** Buscar dados do portifolio */
        $portifolio = Portifolio::find($request->portifolio_id);

        if ($request->hasFile('images')) {
            for ($i = 0; $i < count($request->allFiles()); $i++) { 
                $file = $request->allFiles()['images'][$i];
                $gallery->path = $file->store('public/'. $portifolio->name . '/'. 'gallery/');
            }
        }
        
        if ($gallery->save()) {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        if ($gallery->delete()) {
            return redirect()->back();
        }
    }
}
