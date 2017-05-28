<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductTableSeeder extends Seeder
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
                'name'          =>  'One',
                'slug'          =>  'O',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad!',
                'extract'       =>  'Lorem ipsum dolor sit amet.',
                'price'         =>  1200.50,
                'image'         =>  'http://www.ascolour.co.nz/media/catalog/product/cache/1/small_image/360x/9df78eab33525d08d6e5fb8d27136e95/5/0/5001_staple_tee_navy_thumb.jpg',
                'visible'       =>  1,
                'created_at'    =>  new DateTime,
                'updated_at'    =>  new DateTime,
                'category_id'   =>  1
            ],
            [
                'name'          =>  'Two',
                'slug'          =>  'T',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad!',
                'extract'       =>  'Lorem ipsum dolor sit amet.',
                'price'         =>  1300.50,
                'image'         =>  'http://www.ascolour.co.nz/media/catalog/product/cache/1/small_image/360x/9df78eab33525d08d6e5fb8d27136e95/5/0/5001_staple_tee_grey_marle_thumb.jpg',
                'visible'       =>  1,
                'created_at'    =>  new DateTime,
                'updated_at'    =>  new DateTime,
                'category_id'   =>  1
            ],
            [
                'name'          =>  'Three',
                'slug'          =>  'TH',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad!',
                'extract'       =>  'Lorem ipsum dolor sit amet.',
                'price'         =>  1300.50,
                'image'         =>  'http://www.ascolour.co.nz/media/catalog/product/cache/1/small_image/360x/9df78eab33525d08d6e5fb8d27136e95/5/0/5011_shadow_tee_burgundy_thumb.jpg',
                'visible'       =>  1,
                'created_at'    =>  new DateTime,
                'updated_at'    =>  new DateTime,
                'category_id'   =>  1
            ],            
            [
                'name'          =>  'Four',
                'slug'          =>  'THO',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad!',
                'extract'       =>  'Lorem ipsum dolor sit amet.',
                'price'         =>  1300.50,
                'image'         =>  'http://www.ascolour.co.nz/media/catalog/product/cache/1/small_image/360x/9df78eab33525d08d6e5fb8d27136e95/5/0/5010_staple_pocket_tee_grey_marle_black_thumb_3.jpg',
                'visible'       =>  1,
                'created_at'    =>  new DateTime,
                'updated_at'    =>  new DateTime,
                'category_id'   =>  1
            ],
            [
                'name'          =>  'Five',
                'slug'          =>  'THO',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad!',
                'extract'       =>  'Lorem ipsum dolor sit amet.',
                'price'         =>  1300.50,
                'image'         =>  'http://scene7.zumiez.com/is/image/zumiez/pdp_hero/Empyre-Fancy-89-V-Neck-T-Shirt-_253927.jpg',
                'visible'       =>  1,
                'created_at'    =>  new DateTime,
                'updated_at'    =>  new DateTime,
                'category_id'   =>  1
            ]
        );

        Product::insert($data);
    }
}

