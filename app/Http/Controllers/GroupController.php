<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::all();
        dd($groups);
        Log::info($groups);
        var_dump($groups);
        return view('student.groupCreate', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.groupCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $group = new Group;
        $group->teamName = $request->input('teamName');
        $group->teamLeader = $request->input('teamLeader');
        $group->course = $request->input('course');
        $group->section = $request->input('section');
        $group->lastName1 = $request->input('lastName1');
        $group->firstName1 = $request->input('firstName1');
        $group->mI1 = $request->input('mI1');
        $group->lastName2 = $request->input('lastName2');
        $group->firstName2 = $request->input('firstName2');
        $group->mI2 = $request->input('mI2');
        $group->lastName3 = $request->input('lastName3');
        $group->firstName3 = $request->input('firstName3');
        $group->mI3 = $request->input('mI3');
        $group->save();
        return redirect()->back()->with('status','Successfully created group');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }
}
