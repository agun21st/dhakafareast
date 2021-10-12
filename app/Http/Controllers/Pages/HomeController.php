<?php

namespace App\Http\Controllers\Pages;

use  App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Pvtl\VoyagerBlog\BlogPost;

class HomeController extends Controller
{
    public function home()
    {
        $type = "All";
        $products = Product::orderBy('created_at', 'DESC')->paginate(16);
    	return view('pages.home',compact('products','type'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function sewing()
    {
        return view('pages.sewing');
    }

    public function cutting()
    {
        return view('pages.cutting');
    }

    public function finishing()
    {
    	return view('pages.finishing');
    }

    public function service()
    {
    	return view('pages.service');
    }

    public function service_details()
    {
    	return view('pages.service_details');
    }
    public function privacy_policy(){
        return view('pages.privacy_and_policy');
    }



    public function clients()
    {
    	return view('pages.clients');
    }

    public function contact()
    {
    	return view('pages.contact');
    }

    public function sitemap()
    {
    	return view('pages.sitemap');
    }

    public function blog()
    {
        // Get featured post
        /*$featuredPost = BlogPost::where([
            ['status', '=', 'PUBLISHED'],
            ['featured', '=', '1'],
        ])->whereDate('published_date', '<=', Carbon::now())
            ->orderBy('created_at', 'desc')
            ->first();
        $featuredPostId = $featuredPost ? $featuredPost->id : 0;*/

        // Get all posts
        $posts = BlogPost::where([
            ['status', '=', 'PUBLISHED'],
            /*['id', '!=', $featuredPostId],*/
        ])->whereDate('published_date', '<=', Carbon::now())
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        return view('pages.blog', [
            'posts' => $posts,
        ]);
    }
    public function blog_details($slug)
    {
        // The post
        $post = BlogPost::where([
            ['slug', '=', $slug],
            ['status', '=', 'PUBLISHED'],
        ])->whereDate('published_date', '<=', Carbon::now())
            ->firstOrFail();

        // Related posts (based on tags)
        /*$relatedPosts = array();
        if (!empty(trim($post->tags))) {
            $tags = explode(',', $post->tags);
            $relatedPosts = BlogPost::where([
                ['id', '!=', $post->id],
            ])->where(function ($query) use ($tags) {
                foreach ($tags as $tag) {
                    $query->orWhere('tags', 'LIKE', '%'.trim($tag).'%');
                }
            })->limit(4)
                ->orderBy('created_at', 'desc')
                ->get();
        }*/

        return view('pages.blog_details', [
            'post' => $post,
        ]);
    }
    
    public function pageNotFound()
    {
        return view('pages.pageNotFound');
    }

}
