<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article; 
use Session;
use App\Http\Requests\ArticleRequest;
use DB;

class Articles extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view("articles.index")->with("articles", $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("articles.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        Article::create($request->all());
        Session::flash("notice", "Artikel berhasil disimpan !");
        return redirect()->route("articles.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        $comments = Article::find($id)->comments->sortBy('Comment.created_at');

        return view("articles.show")
            ->with('article', $article)
            ->with('comments', $comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view("articles.edit")->with("article", $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        Article::find($id)->update($request->all());
        Session::flash("notice", "Artikel berhasil diubah !");
        return redirect()->route("articles.show", $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);
        Session::flash("notice", "Artikel telah dihapus ..");
        return redirect()->route("articles.index");
    }

    public function search(Request $request)
    {
        // $query = Request::input('search');
        $query = $request->input('search');
        $articles = Article::where('title', 'LIKE', '%' . $query . '%')
        ->get();
        // $articles = Article::where('title', "$query");
        // $articles = DB::table('articles')->where('title', 'LIKE', '%' . $query . '%');
        return view('articles.result', compact('articles', 'query'));
        

        // $articles = DB::table('articles')->where('article_id', '==', '%' . $query . '%');
        // $articles =  Article::find($query);  
        // return view("articles.result")->with("articles", $articles);
    }
}
