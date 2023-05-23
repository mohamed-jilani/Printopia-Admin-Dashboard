<?php

namespace App\Http\Controllers;

use App\Models\Reclamation;
use Illuminate\Http\Request;

class ReclamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reclams=Reclamation::with('user')->get();
        return view('dash.reclammation',['reclams'=>$reclams]);
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show($id)
    {
        $reclam = Reclamation::find($id);
        return view('dash/reclamDetails',['reclam'=>$reclam]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */


    public function destroy($id)
    {
        Reclamation::destroy($id);

        return redirect()->route('reclam')->with('success', 'Reclamation deleted successfully.');
    }

}
