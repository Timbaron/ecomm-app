<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategoryService;

class HomeController extends Controller
{
    public function index(){
        /* Calling the static getCategories() method in the CategoryService class and passing the result to
        the welcome view. */
        $categories = CategoryService::getCategories();
        return view('welcome', compact('categories'));
    }
}
