<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactMessages;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function home()
    {
        return view('frontend.pages.index');
    }
    public function about_us()
    {
        return view('frontend.pages.about_us');
    }
    public function services()
    {
        return view('frontend.pages.services');
    }
    public function products()
    {
        return view('frontend.pages.products');
    }
    public function news_updates()
    {
        return view('frontend.pages.news_updates');
    }
    public function contact_us()
    {
        return view('frontend.pages.contact_us');
    }

    public function msg_post(Request $request)
    {
        $model = new ContactMessages();
        $model->f_name = $request->f_name;
        $model->l_name = $request->l_name;
        $model->email = $request->email;
        $model->phone = $request->phone;
        $model->address = $request->address;
        $model->message = $request->message;
        $model->save();
        return back()->with('message', 'Message has been sent...!');
    }
}
