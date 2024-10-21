<?php

namespace App\Http\Controllers;



use App\Models\view;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function showViewPage()
    {
        // Get or create a row to store the views
        $view = View::firstOrCreate([], ['view_count' => 0]);

        // Increment the view count
        $view->increment('view_count');
        $view->save();

        // Pass the view count to the view
        return view('welcome', ['viewCount' => $view->view_count]);
    }
}


