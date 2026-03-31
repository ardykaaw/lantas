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

    public function berita()
    {
        $posts = Post::where('status', 'published')
                     ->with(['category', 'user'])
                     ->latest()
                     ->paginate(9);

        return view('public.berita', compact('posts'));
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
