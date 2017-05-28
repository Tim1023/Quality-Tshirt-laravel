<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name'        =>   'Man T-shirt',
                'slug'        =>   'MT',
                'description' => 'That is for man...',
                'modelo'      =>   'APPOFI'
            ],
            [
                'name'        =>   'Woman T-shirt',
                'slug'        =>   'WT',
                'description' =>   'That is for woman',
                'modelo'      =>   'APPHOG'                
            ]
        );

        Category::insert($data);
    }
}