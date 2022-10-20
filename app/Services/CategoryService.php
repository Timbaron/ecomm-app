<?php
namespace App\Services;

use App\Models\Category;

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

}


?>
