<?php

namespace App\Http\Controllers;

use App\News;

use Validator;

use Illuminate\Http\Request;

use App\Http\Requests;

class NewsController extends Controller
{

    //validation 
     protected $rules = [
             'title' => 'bail|required|unique:news|max:255',
             'content' => 'required',
             'author' => 'required',
         ];
        
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create()
    {
        return view('news.create'); 
    }

    /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
    public function store(Request $request)
    {
         $this->validate($request, $this->rules);

        // The blog post is valid, store in database...
        $news = new News();

        $input = $request->all();
        $news->fill($input)->save();

        return redirect('news');
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function show($id)
    {
        $news = News::find($id);
        return view('news.show', compact('news'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function edit($id)
    {
        $news = News::find($id);
        return view('news.edit', compact('news'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function update(Request $request, $id)
    {
         $this->validate($request, $this->rules);
        
        $newsUpdate = $request->all();
        $news = News::find($id);
        $news->update($newsUpdate);
        
        return redirect('news/{{ id }}',  ['id' => $id] );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function destroy($id)
    {
        News::find($id)->delete();
        return redirect('news');
    }

    /**
    * {@inheritdoc}
    */
    protected function formatErrors(Validator $validator)
    {
       return $validator->errors()->all();
    }
}
