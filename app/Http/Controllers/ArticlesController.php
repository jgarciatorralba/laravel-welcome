<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Bring in the model
use App\Article;
// Bring in the helper methods class
use Illuminate\Support\Str;
// Bring in the authentication facade
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(2);
        return view('articles.articles')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'summary' => 'required',
            'content' => 'required|min:2000'
        ]);

        $article = new Article();
        $article->title = $request->input('title');
        $article->summary = $request->input('summary');
        $article->content = $request->input('content');
        $article->slug = Str::slug($article->title, '-');
        $article->user_id = Auth::id();
        $article->save();

        return redirect('/articles')->with('success', 'Article created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $articles = Article::where('slug', $slug)->get();
        if (count($articles) > 0){
            return view('articles.article')->with('article', $articles[0]);
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $articles = Article::where('slug', $slug)->get();

        // Check for the correct user
        if (Auth::id() !== $articles[0]->user_id) {
            return redirect('/articles')->with('error', 'Unauthorized page');
        }

        if (count($articles) > 0){
            return view('articles.edit')->with('article', $articles[0]);
        } else {
            abort(404);
        }
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
        $this->validate($request, [
            'title' => 'required',
            'summary' => 'required',
            'content' => 'required|min:2000'
        ]);

        $article = Article::find($id);
        $article->title = $request->input('title');
        $article->summary = $request->input('summary');
        $article->content = $request->input('content');
        $article->slug = Str::slug($article->title, '-');
        $article->save();

        return redirect('/articles')->with('success', 'Article updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);

        // Check for the correct user
        if (Auth::id() !== $article->user_id) {
            return redirect('/articles')->with('error', 'Unauthorized page');
        }

        $article->delete();

        return redirect('/articles')->with('success', 'Article removed!');
    }
}
