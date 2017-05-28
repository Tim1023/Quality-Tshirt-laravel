<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
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
	        	'name'			=>		'Deyang',
	        	'last_name'		=>		'Zhao',
	        	'email'			=>		'4143920@qq.com',
	        	'user'			=>		'Deyang Zhao',
	        	'password'		=>		\Hash::make('admin@xD'),
	        	'type'			=>		'admin',
	        	'active'		=>		1,
	        	'state'			=>		'NZ',
	        	'city'			=>		'Auckland',
	        	'cp'			=>		'1025',
	        	'address'		=>		'taumata rd',
	        	'created_at'	=>		new DateTime,
	        	'updated_at'	=>		new DateTime
        	],
        	[
	        	'name'			=>		'Veronica',
	        	'last_name'		=>		'Martinez Rosales',
	        	'email'			=>		'test@test.com',
	        	'user'			=>		'test',
	        	'password'		=>		\Hash::make('test123456'),
	        	'type'			=>		'user',
	        	'active'		=>		1,
	        	'state'			=>		'Distrito Federal',
	        	'city'			=>		'Gustavo Madero',
	        	'cp'			=>		'07189',
	        	'address'		=>		'Ahuehuetes 982',
	        	'created_at'	=>		new DateTime,
	        	'updated_at'	=>		new DateTime        			
        	],
        );
		User::insert($data);			
    }
}
