<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function skills()
    {
        return view('admin.skills.skills');
    }
    public function subscriber()
    {
        return view('admin.subscriber.subscriber');
    }

    public function counter()
    {
        return view('admin.counter.counter');
    }
    public function settings()
    {
        return view('admin.settings.setting');
    }
    public function service()
    {
        return view('admin.services.service');
    }
    public function messages()
    {
        return view('admin.messages.message');
    }
    public function categories()
    {
        return view('admin.category.category');
    }
    public function projects()
    {
        return view('admin.project.project');
    }

    public function testimonials()
    {
        return view('admin.testmonial.testmonial');
    }

    public function members()
    {
        return view('admin.member.members');
    }

}
