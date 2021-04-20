<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lists = Post::paginate(10);

        return view('article_list.index-book', compact('lists'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('article_list.book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
     $validate = Validator::make($request->all(),[
      'fio' => ['required','string'],
      'title' => ['required','string'],
      'desc' => ['required','string'],
      'file' => ['required','image','mimes:jpeg,png,jpg,gif','max:2048'],]);

        if ($validate->fails()) {
          
             return back()->with('error','Ошибка');
        } 
         if ($request->hasFile('file') && $request->file('file')->isValid()) {
           $imageName = time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('images'), $imageName);
       
         Post::create([
            'fio' => $request->fio,
            'user_id' => auth()->id(),
            'status'=> 0,
            'title' => $request->title,
            'description' => $request->desc,
            'image' => $imageName,
        ]);
        }
       
           return redirect()->route('book.create')->with('success','Данные успешно добавлены');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $detail=Post::find($id)->comments;
       
        $list=Post::find($id);
        return view('article.detail',compact('list','detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $book=Post::find($id);
        return view('article_list.edit-book',compact('book'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

       
        $validate = Validator::make($request->all(),[
            'fio' => ['required','string'],
            'theme' => ['required','string'],
            'message' => ['required','string'],
            'image' => ['required','image','mimes:jpeg,png,jpg,gif','max:2048',]]);
      
              if ($validate->fails()) {
                
                   return back()->with('error','Ошибка');
              }
           
              if (request()->hasFile('image') && request()->file('image')->isValid()) {
                
                $imageName = time().'.'.$request->image->extension();  
        
             $request->image->move(public_path('images'), $imageName); 
        $book=Post::find($id);
        $book->update(['fio'=> $request->fio, 'title'=> $request->theme, 'description'=> $request->message,'image'=> $imageName]);
              }
        return redirect()->route('book.edit',$id)->with('success', 'Данные изменены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $d=Post::find($id);
        $d->delete();

       return redirect()->route('book.index')
            ->with('success', 'Успешно удалено');

    }
}
