<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::paginate(20);
        return view('admin.portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'client' => 'nullable|string|max:255',
            'type' => 'nullable',
            'description' => 'required',
            'begins_at' => 'nullable',
            'ends_at' => 'nullable',
            'file' => 'required'
        ], [
            'required' => 'Este campo é obrigatório'
        ]);

        $portfolio = (array) $request->all();

        if ($request->hasFile('file')) {
            $portfolio['file'] = $request->file->store('public/' . $portfolio['name']);
            $portfolio['file'] = str_replace('public', 'storage', $portfolio['file']);
            $portfolio['file_type'] = $request->file_type;
        }

        if ($request->user()->portfolios()->create($portfolio)) {
            return redirect()->back()->with([ 'type' => 'success', 'message' => 'Sucesso ao cadastrar portfólio' ]);
        } else {
            return redirect()->back()->with(['type' => 'error', 'message' => 'Erro ao cadastrar portfólio']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (auth()->user()->portfolios()->findOrFail($id)->delete()) {
            return redirect()->back()->with(['type' => 'success', 'message' => 'Portfólio eliminado']);
        } else {
            return redirect()->back()->with(['type' => 'error', 'message' => 'Erro ao eliminado portfólio']);
        }
    }
}
