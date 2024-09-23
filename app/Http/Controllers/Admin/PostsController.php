<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostsController extends Controller
{
    private $category;
    private $post;

    public function __construct(Category $category, Post $post){
        $this->category = $category;
        $this->post = $post; //$this->post = new Post();
    }

    public function index(request $request)
    {
        if($request->search){
            //search data
            $all_posts = $this->post->latest()->withTrashed()
                                    ->where('description', 'LIKE', '%'.$request->search.'%')
                                    ->peginate(10);
            //SELECT * .... WHERE description LIKE '%keyword%'
            //RegEx - patterns
        }else{

            $all_posts = $this->post->latest()->withTrashed()->paginate(10);

        }
        return view('admin.posts.index')->with('all_posts', $all_posts)
                                    ->with('search', $request->search);
    }

    public function hide($id){
        $this->post->destroy($id);

        return redirect()->back();
    }

    public function visible($id){
        $this->post->onlyTrashed()->findOrFail($id)->restore();

        return redirect()->back();
    }
}