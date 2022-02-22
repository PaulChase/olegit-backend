<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Link;
use App\Models\Query;
use App\Models\Vote;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // get pending comments
        $comments = Comment::query()->where('status', Comment::COMMENT_PENDING)->get();

        $totalLinks = Link::query()->select(['id'])->get()->count();
        $totalVotes = Vote::query()->select(['id'])->get()->count();
        $totalQueries = Query::query()->select(['id'])->get()->count();
        $totalComments = Comment::query()->select(['id'])->get()->count();

        return response()->json([
            'comments' => $comments,
            'stats' => ['totalLinks' => $totalLinks, 'totalLinks' => $totalLinks, 'totalVotes' => $totalVotes, 'totalQueries' => $totalQueries, 'totalComments' => $totalComments]
        ]);
    }
}
