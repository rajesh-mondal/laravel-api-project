<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller {
    function getAllArticles() {
        return Article::all();
    }

    function getArticle( Article $article ) {
        //return Article::findOrFail($id);
        return $article;
    }

    function createArticle( Request $request ) {
        $title = $request->title;
        $content = $request->title;
        $user = $request->user();

        $article = new Article();
        $article->title = $title;
        $article->content = $content;
        $article->user_id = $user->id;
        $article->save();
        return $article;
    }
}
