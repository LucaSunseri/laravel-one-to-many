<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['PHP', 'HTML', 'CSS', 'JavaScript'];

        foreach ($data as $category) {

            $new_category = new Category();

            $new_category->name = $category;
            $new_category->slug = Str::slug($new_category->name,  '-');

            $new_category->save();
        }
    }
}
