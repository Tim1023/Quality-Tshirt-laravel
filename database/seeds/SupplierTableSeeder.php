<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class SupplierTableSeeder extends Seeder
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
                'name'        =>   'Super one',
                'slug'        =>   'MT',
                'description' => 'That is for man...',
                'modelo'      =>   'APPOFI'
            ],
            [
                'name'        =>   'Super two',
                'slug'        =>   'WT',
                'description' =>   'That is for woman',
                'modelo'      =>   'APPHOG'                
            ]
        );

        Supplier::insert($data);
    }
}