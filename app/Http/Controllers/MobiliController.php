<?php

namespace App\Http\Controllers;

use App\Models\Mobili;
use Illuminate\Http\Request;

class MobiliController extends Controller
{
    




    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mobili $mobili)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mobili $mobili)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mobili $mobili)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mobili $mobili)
    {
        //
    }
}
