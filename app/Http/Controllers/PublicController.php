<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class PublicController extends Controller
{
    public function home()
    {
        // Fetch 4 latest published posts for the homepage (1 featured, 3 sidebar)
        $posts = Post::where('status', 'published')
                     ->with(['category', 'user'])
                     ->latest()
                     ->take(4)
                     ->get();

        // Instagram Posts handle by Widget (EmbedSocial/Elfsight)
        return view('home', compact('posts'));
    }

    public function berita(Request $request)
    {
        $query = Post::where('status', 'published')
                     ->with(['category', 'user'])
                     ->latest();

        // Filter by category if requested
        if ($request->has('category')) {
            $query->whereHas('category', function($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        $posts = $query->paginate(9);
        $categories = \App\Models\Category::all();

        return view('public.berita', compact('posts', 'categories'));
    }

    public function showBerita($slug)
    {
        $post = Post::where('slug', $slug)
                    ->where('status', 'published')
                    ->with(['category', 'user'])
                    ->firstOrFail();
                    
        $recentPosts = Post::where('status', 'published')
                            ->where('id', '!=', $post->id)
                            ->latest()
                            ->take(4)
                            ->get();

        return view('public.berita-show', compact('post', 'recentPosts'));
    }
    public function cctv()
    {
        return view('public.cctv');
    }
}
