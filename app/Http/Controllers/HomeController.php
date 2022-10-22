<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategoryService;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index(){
        /* Calling the static getCategories() method in the CategoryService class and passing the result to
        the welcome view. */
        $categories = CategoryService::getCategories();
        /* Calling the static getFoodItems() method in the CategoryService class and passing the result
        to the welcome view. */
        // $foodItems = CategoryService::getFoodItems();
        /* Taking the first 12 items from the pally, shop and recommended collections. */
        // $pally = $foodItems['pally']->take($currentPage);
        // $shop = $foodItems['shop']->take($currentPage);
        // $recommended = $foodItems['Recommended']->take($currentPage);
        return view('welcome', compact('categories'));
    }

    public function getItem($item){
        $items = CategoryService::getItem($item);
        return response()->json($items);
    }
}
