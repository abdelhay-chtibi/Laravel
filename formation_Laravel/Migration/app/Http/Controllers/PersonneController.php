<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $pers=DB::table('personnes')->get();
        //return response($pers, 200);
        return response()->view('personnes.index',['personnes'=>$pers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()->view('personnes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        DB::table('personnes')->insert([
            'nom'=>$request->nom,
            "date_naiss"=>$request->date_naiss
        ]);
        return to_route('personnes.index');
        // return redirect()->route('personnes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
