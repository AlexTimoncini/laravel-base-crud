<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shore;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shores = Shore::all();

        return view('admin.index', compact('shores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->has('has_volley_field')){
            $request['has_volley_field'] = true;
        } else {
            $request['has_volley_field'] = false;
        };

        if($request->has('has_soccer_field')){
            $request['has_soccer_field'] = true;
        } else {
            $request['has_soccer_field'] = false;
        };
        $data = $request->validate([
            'name' => ['required', 'min:3', 'unique:shores'],
            'location' => ['required', 'min:5'],
            'beach_umbrella' => ['required', 'integer'],
            'beach_bed' => ['required', 'integer'],
            'daily_price' => ['required', 'decimal:2,4'],
            'opening_date' => ['required', 'date_format:Y-m-d'],
            'closing_date' => ['required', 'date_format:Y-m-d'],
            'has_volley_field' => ['boolean'],
            'has_soccer_field' => ['boolean'],
        ]);
        $newShore = new Shore();
        $newShore->fill($data);
        $newShore->save();

        return redirect()->route('admin.show', $newShore->id); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shore = Shore::findOrFail($id);
        return view('admin.show', compact('shore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shore = Shore::findOrFail($id);
        return view('admin.edit', compact('shore'));
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
        if($request->has('has_volley_field')){
            $request['has_volley_field'] = true;
        } else {
            $request['has_volley_field'] = false;
        };

        if($request->has('has_soccer_field')){
            $request['has_soccer_field'] = true;
        } else {
            $request['has_soccer_field'] = false;
        };

        $data = $request->validate([
            'name' => ['required', 'min:3', 'unique:shores'],
            'location' => ['required', 'min:5'],
            'beach_umbrella' => ['required', 'integer'],
            'beach_bed' => ['required', 'integer'],
            'daily_price' => ['required', 'decimal:2,4'],
            'opening_date' => ['required', 'date_format:Y-m-d'],
            'closing_date' => ['required', 'date_format:Y-m-d'],
            'has_volley_field' => ['boolean'],
            'has_soccer_field' => ['boolean'],
        ]);
        $newShore = Shore::findOrFail($id);
        $newShore->update($data);

        return redirect()->route('admin.show', $newShore->id); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shore = Shore::findOrFail($id);
        $shore->delete();

        return redirect()->route('admin.index')->with('deleted', $shore->name);
    }
}
