<?php

use Illuminate\Database\Seeder;
use App\Categories;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create(array('name'=>'sports','display_name'=>'Sports'));
        Categories::create(array('name'=>'featured_news','display_name'=>'Featured News'));
        Categories::create(array('name'=>'politics','display_name'=>'Politics'));
        Categories::create(array('name'=>'entertainment','display_name'=>'Entertainment'));
    }
}
