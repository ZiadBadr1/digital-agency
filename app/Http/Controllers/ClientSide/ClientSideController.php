<?php

namespace App\Http\Controllers\ClientSide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientSideController extends Controller
{
    public function home()
    {
        return view('client-side.index');
    }


    public function services()
    {
        return view('client-side.service');
    }

    public function about()
    {
        return view('client-side.about');
    }

    public function contact()
    {
        return view('client-side.contact');
    }

    public function projects()
    {
        return view('client-side.project');
    }
}
