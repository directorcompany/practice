<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\User;
class PostController extends Controller
{
    
    public function index()
    {
        //

        $arrays=[];
        $increment=0;
        $posts=Post::all();
        foreach($posts as $post) {
            if(($post->created_at->format('Y')==date('Y') && 
            $post->created_at->format('m')==date('m')) ||
            $post->created_at->format('d')==date('d') || $post->created_at->format('d')==(date('d')-1)) {
             $arrays[$increment]=$post;
             $increment++;
             }
        }
      
    
          $categories= Category::get()->toTree();
    
          return view('home.index',compact('arrays','posts','categories'));
    }


    // public function info() {
    //     $posts=Post::all();
    // return view('article.index',compact('posts'));
    // }
    public function about() {
        $categories= Category::get()->toTree();
        return view('about.index',compact('categories'));
    }

    public function post() {
        $posts=Post::all();
       
        return view('article.index',compact('posts'));
    }

    public function article_list() {
        return view('article_list.index');
    }

    public function message() {
        return view('article.feedback');
    }


    public function profi() {
        return view('home.profi');
    }

    public function book($id) {
        $detail=Post::find($id)->comments;
       
        $list=Post::find($id);
        return view('article.detail',compact('list','detail'));
    }
    public function comment() {
   $comment= new Comment();
            $comment->fio=request()->fio;
            $comment->title= request()->title;
            $comment->post_id=request()->book_id;
            $comment->email = request()->email;
            $comment->comment = request()->comment;
    $comment->save();
    if(auth()->guest()) {
      if(empty(request()->book_id))  return redirect()->route('book',request()->book_id)->with('success','Добавлено комментария');
    
    }

else {
    if(empty(request()->book_id))  return redirect()->route('desc.show',request()->article_id)->with('success','Добавлено комментария');
      
    else return redirect()->route('book.show',request()->book_id)->with('success','Добавлено комментария');

}
}
    public function inv() {
     
         Feedback::create(['fio' => request()->fio, 'title'=> request()->theme,'email' => request()->email, 'message'=> request()->msg]);
       
           return redirect()->route('message')->with('success','Добавлено комментария');
         }    
}