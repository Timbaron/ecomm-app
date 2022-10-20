<?php
namespace App\Services;

use App\Models\Category;
use App\Models\FoodItem;

class CategoryService {

    /**
     * It returns all the categories from the database
     *
     * @return The categories table from the database.
     */
    public static function getCategories()
    {
        $categories = Category::all();
        return $categories;
    }

    public static function getFoodItems(){
        // get all fooditems and group them by category
        $foodItems = FoodItem::all()->groupBy('category');
        return $foodItems;

    }

}


?>
