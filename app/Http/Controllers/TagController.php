<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tags;

class TagController extends Controller
{
    public function store(Request $request)
    {
        $tag::create($request->all());

        return redirect('/');
    }
}
