<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Carbon\Carbon;

class AuthorController extends Controller
{
    public function getAuthors()
    {
        $authors = Author::all();
        return view("create", ['authors' => $authors]);
    }
    public function getTopAuthors()
    {
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        $topAuthors = Author::withCount('articles')
            ->whereHas('articles', function ($query) use ($startOfWeek, $endOfWeek) {
                $query->whereBetween('articles.created_at', [$startOfWeek, $endOfWeek]);
            })
            ->orderByDesc('articles_count')
            ->take(3)
            ->get();
        return view("top", ['authors' => $topAuthors]);
    }
}
 