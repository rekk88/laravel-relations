<?php

use Illuminate\Database\Seeder;
use App\Category; //includo il model Category
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories =['html','css','php','js','vue cli'];
        foreach ($categories as $category) {
          $newCategory = new Category();
          $newCategory->name = $category;
          $newCategory->slug = Str::slug($category, '-');

          $newCategory->save();
        }
    }
}
