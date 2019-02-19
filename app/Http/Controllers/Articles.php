<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article; 
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\Paginator;
// use Illuminate\Pagination\LengthAwarePaginator;
use Session;
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
        // $articles = Article::all();
        $articles = Article::paginate(5);
        return view("articles.index")->with("articles", $articles)
        ;
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
        $comments = Article::find($id)->comments->sortBy("Comment.created_at");

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
        $query = $request->input('search');
        $articles = Article::where('title', 'LIKE', '%' . $query . '%')->get();
        return view('articles.result', compact('articles', 'query')); 
    }

    public function sort(Request $request)
    {    
        // $action = dd(Input::get('action'));
        $action = Input::get('action', 'none');
        if ($action == "oldest") {
            // $articles = Article::all()->sortByDesc("created_at")->paginate(5);
            $articles = Article::all()->sortByDesc("created_at");
            return view('articles.result', compact('articles', 'action'));
        } elseif ($action == "newest") {
            $articles = Article::all()->sortBy("created_at");           
            return view('articles.result', compact('articles', 'action'));
        }
    }
}
