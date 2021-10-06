<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = isSuperAdmin() ? Portfolio::withTrashed()->orderBy('name')->paginate(20) : Portfolio::orderBy('name')->paginate(20);
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
            $portfolio['file'] = $request->file->store('public/' . Str::slug($portfolio['name'], '_'));
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
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolios.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolios.edit', compact('portfolio'));
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
        $request->validate([
            'name' => 'required|max:255|string',
            'client' => 'nullable|string|max:255',
            'type' => 'nullable',
            'description' => 'required',
            'begins_at' => 'nullable',
            'ends_at' => 'nullable',
            'file' => 'nullable'
        ], [
            'required' => 'Este campo é obrigatório'
        ]);

        $portfolio = (array) [];
        $portfolio['name'] = $request->name;
        $portfolio['client'] = $request->client;
        $portfolio['type'] = $request->type;
        $portfolio['begins_at'] = $request->begins_at;
        $portfolio['ends_at'] = $request->ends_at;
        $portfolio['description'] = $request->description;

        if ($request->hasFile('file')) {
            $portfolio['file'] = $request->file->store('public/' . Str::slug($portfolio['name'], '_'));
            $portfolio['file'] = str_replace('public', 'storage', $portfolio['file']);
            $portfolio['file_type'] = $request->file_type;
        }

        if (Portfolio::findOrFail($id)->fill($portfolio)->update()) {
            return redirect()->back()->with(['type' => 'success', 'message' => 'Sucesso ao actualizar portfólio']);
        } else {
            return redirect()->back()->with(['type' => 'error', 'message' => 'Erro ao actualizar portfólio']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Portfolio::findOrFail($id)->delete()) {
            return redirect()->back()->with(['type' => 'success', 'message' => 'Portfólio eliminado']);
        } else {
            return redirect()->back()->with(['type' => 'error', 'message' => 'Erro ao eliminado portfólio']);
        }
    }
}
