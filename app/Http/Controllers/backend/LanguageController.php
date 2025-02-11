<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Auth;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $language = Language::create($request->all());

        $notification = [
            'message' => 'Languages ' . $language->name . ' added successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('images.create')->with($notification);

    }

    /**
     * Display the specified resource.
     */
    public function show(Language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id)
    {
        $language = Language::where('user_id', $id)->first();

        return view('backend.languages.edit', compact('language'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Language::findOrFail($id)->update($request->all());

        $notification = [
            'message' => 'Languages updated successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        //
    }
}
