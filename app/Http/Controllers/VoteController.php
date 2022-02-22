<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(['link_id' => 'required|integer', 'vote' => 'required|boolean']);

        $comment = Vote::create($request->all());

        return response('vote saved sucessfully');
    }
}
