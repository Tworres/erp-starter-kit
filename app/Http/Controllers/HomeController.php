<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Attributes\Teste;

#[Teste]
class HomeController extends Controller
{

    #[Teste]
    public function index($string = ''): View
    {
        return view('contents.home');
    }
}
