<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorityRequest;
use App\Models\Authority;
use Illuminate\Http\Request;

class AuthorityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authorities = Authority::latest()->paginate(10);
        return view('authorities.index', compact('authorities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authorities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorityRequest $request)
    {
        Authority::create($request->validated());
        return redirect()->route('authorities.index')->with('message', 'Authority Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Authority $authority
     * @return \Illuminate\Http\Response
     */
    public function show(Authority $authority)
    {
        return view('authorities.show', compact('authority'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Authority $authority
     * @return \Illuminate\Http\Response
     */
    public function edit(Authority $authority)
    {
        return view('authorities.edit', compact('authority'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Authority $authority
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorityRequest $request, Authority $authority)
    {
        $authority->update([
            'auth_code' => $request->auth_code,
            'auth_name' => $request->auth_name,
            'usrn_start' => $request->usrn_start,
            'usrn_end' => $request->usrn_end,
            'lad_code' => $request->lad_code,
            'lad_name' => $request->lad_name,
        ]);

        return redirect()->route('authorities.index')->with('message', 'Authority Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Authority $authority
     * @return \Illuminate\Http\Response
     */
    public function destroy(Authority $authority)
    {
        $authority->delete();
        return redirect()->route('authorities.index')->with('message', 'Authority Deleted Successfully');
    }
}
