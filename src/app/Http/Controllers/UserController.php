<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Category;
use App\Models\Contact;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function entry(UserRequest $request)
    {
        $user = $request->all();
        User::create($user);

        return view('login');
    }

    public function admin(UserRequest $request)
    {
        $categories = Category::all();
        $contacts = Contact::all();
        return view('admin',compact('categories','contacts'));
    }

    public function index()
    {
        $categories = Category::all();
        $contacts = Contact::all();
        return view('admin',compact('categories','contacts'));
    }
}
