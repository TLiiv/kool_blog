<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PublicController extends Controller
{
    public function index(){
        // $page = (int)request()->input('page');
        // $offset= 12 *($page-1);
        // $posts= Post::take(12)->offset($offset)->get();
        // $postCount = Post::count();
        // $pagesCount = ceil($postCount / 12); //ceil ümardab üles
        $user = User::find(3);
        $posts = $user->posts()->withCount('comments')->simplePaginate(12);
        
        return view('welcome',compact('posts'));
    }

    public function post($post){
        $post = Post::findOrFail($post);
        return view('post',compact('post'));
    }
    public function page1(){
        return view('page1');
    }
    public function page2(){
        return view('page2');
    }
}
