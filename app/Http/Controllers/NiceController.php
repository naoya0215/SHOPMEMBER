<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class NiceController extends Controller
{
    public function store($postId)
    {
        Auth::user()->nice($postId);
        return 'ok!'; //レスポンス内容
    }

    public function destroy($postId)
    {
        Auth::user()->unnice($postId);
        return 'ok!'; //レスポンス内容
    }
}
