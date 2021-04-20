<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validate;
use App\Models\Post;
use App\Models\User;
use App\Models\Feedback;
use Illuminate\Support\Facades\Validator;
use Hash;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         return view('home');
    }

    public function status($id)
    {
        $post=Post::find($id);
        $post->status=1;
        $post->save();
        return redirect()->route('book.index');
    
    }
public function name() {

  $validate= Validator(request()->all(),['name' => 'required|string',],['name.*'=>'Ваш имя должен содержать ',]);
  if ($validate->fails()) {
    return back()->withErrors('Ваш Имя должен быть');
}
  $user = auth()->user();
  $user->name=request()->name;
  $user->save();
   return redirect()->route('profi')->with('success','Имя успешно изменен');
}

public function email() {

     $validate= Validator(request()->all(),['email' => 'required|string|email',],['email.*'=>'Ваш email должен содержать ',]);
     if ($validate->fails()) {
        return back()->withErrors('Ваш email должен быть ');
    }
    $user = auth()->user();
    $user->email=request()->email;
    $user->save();
      return redirect()->route('profi')->with('success','Email успешно изменен');
  }

  public function password() {
    $validate= Validator(request()->all(),['pasword' => 'required|string|min:6','password' => 'required|string|min:6|confirmed',],['password.*'=>'Повторяющийся пароль не совпадает','password.*'=>'Ваш пароль должен быть минимум 6 символов',]);

    if ($validate->fails()) {
        return back()->with('error','Ваш пароль должен быть минимум 6 символов или должны совпадать');
    }
    if(!Hash::check(request()->input('pasword'),Auth::user()->password)) {
        return back()->with('error','Старый пароль не совпадает');  
    }
    if(strcmp(request()->input('pasword'),request()->input('password'))==0) {
        return back()->with('error','Старый пароль не должно равняться новым паролем');
    }
   

    $user=Auth::user();
    $user->password= Hash::make(request()->input('password'));
    $user->save();
    return redirect()->route('profi')->with('success','Ваш пароль успешно изменен');

}

public function inv() {
    $inv=Feedback::paginate(10);
    return view('article_list.inv',compact('inv'))
    ->with('i', (request()->input('page', 1) - 1) * 5);
}


public function search() {
   
        $year=request()->year;
        $month=request()->month;
        $order=request()->order;
        
      
         $posts=Post::whereYear('created_at','LIKE',"%{$year}%")
              ->whereMonth('created_at','LIKE',"%{$month}%")
              ->orderBy('created_at',$order)->paginate(10); 
      
           return view('article.index',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

  

}