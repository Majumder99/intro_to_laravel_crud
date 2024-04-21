<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        echo "<h1>index</h1>";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        echo "<h1>create</h1>";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(blog $blog) {
        echo "<h1>show</h1>";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $blog) {
        echo "<h1>edit</h1>";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog $blog) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $blog) {
        //
    }
}
