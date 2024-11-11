<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index(){
        $categories = Category::all();

        return view ('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first_name','last_name','gender','email','tel1','tel2','tel3','address','building','detail','category_id']);
        $categories = Category::all();
        return view('confirm',compact('contact', 'categories'));
    }

    public function process(Request $request)
    {
        if($request->input('action') === 'send'){
            $form = $request->all();
            Contact::create($form);
            return view('thanks');
        } else {
            return redirect('/')->withInput();
        }

    }

    public function thanks(){
        return view('thanks');
    }

    public function search(Request $request)
    {
        $contacts = Contact::with('category')->Category($request->category_id)->Keyword($request->keyword)->Gender($request->gender)->Date($request->date)->get();
        $categories = Category::all();

        return view('admin', compact('contacts','categories'));
    }
}
