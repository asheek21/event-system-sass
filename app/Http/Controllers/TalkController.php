<?php

namespace App\Http\Controllers;

use App\Enums\TalkType;
use App\Models\Talk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class TalkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $talks = Auth::user()->talks()->get() ;

        return view('talks.index', compact('talks')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = TalkType::cases() ;

        return view('talks.create', compact('types')) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'length' => 'required|integer',
            'type' => ['required', Rule::enum(TalkType::class)],
            'abstract' => 'required',
            'organizer_notes' => 'required',
        ]);

        Auth::user()->talks()->create($validated) ;

        return redirect()->route('talks.index') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Talk $talk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Talk $talk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Talk $talk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Talk $talk)
    {
        //
    }
}
