<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
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
    public function show(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }

    public function users_to_post()
    {
        return $this->hasMany(post::class, 'users');
    }

public function users_to_comment()
    {
        return $this->hasMany(comment::class, 'users');
    }

public function users_posts_to_users()
    {
        return $this->hasMany(post::class, 'users');
    }

public function users_posts_to_past_comments()
    {
        return $this->hasMany(comment_replies::class, 'users');
    }


}
