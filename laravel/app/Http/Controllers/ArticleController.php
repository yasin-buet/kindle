<?php
namespace App\Http\Controllers;



class ArticleController extends Controller
{
    public function showIndex()
    {
        return view('simple');
    }

    public function showSingle($articleId)
    {
        return View('again controller');
    }
}