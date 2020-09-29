<?php


namespace App\Http\Controllers;


use App\Article;
use App\Project;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.articles', [
            'articles'  => $articles,
        ]);
    }


    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        \request()->validate([
            'title'=>['required', 'min:3'],
            'body'=>'required'
        ]);
        $article = new Article();
        $article->title = \request('title');
        $article->body = \request('body');
        $article->save();
        return redirect('/articles');
    }

    public function show($id)
    {
        $article = Article::where('id',$id)->first();
        return view('articles.show',['article'=>$article]);
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id)
    {
        $article = Article::find($id);
        $article->title = \request('title');
        $article->body = \request('body');
        $article->save();
        return redirect('/articles/' . $article->id);
    }

    public function destroy()
    {
    }
}
