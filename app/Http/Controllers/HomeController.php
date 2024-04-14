<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Renders the admin index view.
public function index() {
        return view('admin.index');
    }
}
