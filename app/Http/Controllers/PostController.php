<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\post;


class PostController extends Controller
{
    public function index(Post $post)
    {
        return $post->get();
    }
}