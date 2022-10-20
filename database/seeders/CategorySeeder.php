<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* Creating two arrays for each category names and images*/
        $names = [
            0 => 'Fruits & nuts',
            1 => 'Packaged Food',
            2 => 'Food Stuff',
            3 => 'Vegetables',
            4 => 'Protein Foods',
            5 => 'Grains'
        ];
        $images = [
            0 => 'https://cdn.britannica.com/36/123536-050-95CB0C6E/Variety-fruits-vegetables.jpg',
            1 => 'https://upload.wikimedia.org/wikipedia/commons/6/6d/Good_Food_Display_-_NCI_Visuals_Online.jpg',
            2 => 'https://post.healthline.com/wp-content/uploads/2020/09/healthy-eating-ingredients-732x549-thumbnail.jpg',
            3 => 'https://pharmanewsonline.com/wp-content/uploads/2016/02/Non-healthy-dood.jpg',
            4 => 'https://cdn2.howtostartanllc.com/images/business-ideas/business-idea-images/fast-food.jpg',
            5 => 'https://images.immediate.co.uk/production/volatile/sites/30/2020/08/chorizo-mozarella-gnocchi-bake-cropped-9ab73a3.jpg?quality=90&resize=768,574'
        ];

        /* Merging the two arrays into one array of objects. */
        $merged = collect($names)->zip($images)->transform(function ($values) {
            return [
                'name' => $values[0],
                'image' => $values[1],
                'slug' => Str::slug($values[0]) // Generatig slug for each category
            ];

        });

        $datas = $merged->all();
        /* Updating or creating a new category if it does not exist. */
        foreach($datas as $data){
            Category::updateOrCreate($data, ['name' => $data['name']]);
        }
    }
}
