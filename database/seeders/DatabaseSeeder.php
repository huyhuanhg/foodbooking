<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $role = [
            [
                'role_type' => "MASTER",
                'role_description' => 'Admin Master'
            ],
            [
                'role_type' => "SHOP",
                'role_description' => 'Admin Shop'
            ],

        ];
        $defaultUser = [
            [
                'email' => 'client@gmail.com',
                'password' => bcrypt('123456'),
                'first_name' => 'Huy',
                'last_name' => "Huấn",
                'phone' => '0935906860',
                'address' => 'Vạn Trạch - Bố Trạch - Quảng Bình',
                'province_code' => 44,
                'district_code' => 455,
                'ward_code' => 19168,
                'gender' => 1,
                'birthday' => '1995-01-10',
                'avatar' => '/images/uploads/user-avatar/user-1.jpeg',
                'description' => 'Vui là chính',
                'active' => 1
            ],
        ];
        $defaultSupperUser = [
            [
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => 1,
                'first_name' => 'Huy',
                'last_name' => "Huấn",
                'phone' => '0935906860',
                'address' => 'Vạn Trạch - Bố Trạch - Quảng Bình',
                'province_code' => 44,
                'district_code' => 455,
                'ward_code' => 19168,
                'gender' => 1,
                'birthday' => '1995-01-10',
                'avatar' => '/images/uploads/user-avatar/user-1.jpeg',
                'description' => 'Vui là chính',
                'active' => 1
            ],
            [
                'email' => 'shop@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => 2,
                'first_name' => 'Phạm',
                'last_name' => "Hải",
                'phone' => '0962184651',
                'address' => 'Tượng Văn - Nông Cống - Thanh Hóa',
                'province_code' => 38,
                'district_code' => 404,
                'ward_code' => 16357,
                'gender' => 0,
                'birthday' => '1996-09-20',
                'avatar' => '/images/uploads/user-avatar/user-1.jpeg',
                'description' => 'Vui là chính',
                'active' => 1
            ],
        ];


        DB::table('roles')->insert($role);
        DB::table('users')->insert($defaultUser);
        DB::table('admins')->insert($defaultSupperUser);

        $this->call([
            StoresCategoriesTableSeeder::class,
            StoresTableSeeder::class,
            FoodsTableSeeder::class,
            FoodTabsTableSeeder ::class,
            FoodTabDetailTableSeeder::class,
        ]);
    }
}
