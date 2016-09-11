<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\User;

class UserManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderby('name')->paginate(config('paginate.user.normal'));
        return view('admin.user-manager', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $currentUser = Auth::user();
        // $user = User::findOrFail($id);
        // $activity = Activity::where('user_id', $user->id)
        //     ->orderBy('created_at', 'desc')
        //     ->paginate(config('fels.activity_paginate'));

        // return view('user.show', compact('user', 'currentUser', 'activity'));
        $user = User::find($id);
        return view('admin.user-profile', compact('user'));
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
        $user = User::find($id);

        if ($user->delete()) {
            return redirect()->action('UserManagerController@index')->withSuccess(trans('admin/users.user_delete_success'));
        }

        return redirect()->back()
            ->withErrors(trans('admin/users.user_delete_fail'));
    }
}
