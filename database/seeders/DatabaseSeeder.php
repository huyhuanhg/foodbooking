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
                'gender' => 1,
                'birthday' => '1995-01-10',
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
                'gender' => 1,
                'birthday' => '1995-01-10',
                'active' => 1
            ],
            [
                'email' => 'shop@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => 2,
                'first_name' => 'Phạm',
                'last_name' => "Hải",
                'phone' => '0962184651',
                'address' => 'Nông Cống - Thanh Hóa',
                'gender' => 0,
                'birthday' => '1996-09-20',
                'active' => 1
            ],
        ];
        $demoStores = [
            [
                'store_name' => 'H&H1',
                'store_address' => 'Thôn Đông',
                'phone_contact' => '0985356050',
                'store_owner' => 2,
            ],
            [
                'store_name' => 'H&H2',
                'store_address' => 'Thôn Đông',
                'phone_contact' => '0985356050',
                'store_owner' => 2,
            ],
            [
                'store_name' => 'H&H3',
                'store_address' => 'Thôn Đông',
                'phone_contact' => '0985356050',
                'store_owner' => 2,
            ],
            [
                'store_name' => 'H&H4',
                'store_address' => 'Thôn Đông',
                'phone_contact' => '0985356050',
                'store_owner' => 2,
            ],
            [
                'store_name' => 'H&H5',
                'store_address' => 'Thôn Đông',
                'phone_contact' => '0985356050',
                'store_owner' => 2,
            ],
            [
                'store_name' => 'H&H6',
                'store_address' => 'Thôn Đông',
                'phone_contact' => '0985356050',
                'store_owner' => 2,
            ],
            [
                'store_name' => 'H&H7',
                'store_address' => 'Thôn Đông',
                'phone_contact' => '0985356050',
                'store_owner' => 2,
            ],
            [
                'store_name' => 'H&H8',
                'store_address' => 'Thôn Đông',
                'phone_contact' => '0985356050',
                'store_owner' => 2,
            ],
            [
                'store_name' => 'H&H9',
                'store_address' => 'Thôn Đông',
                'phone_contact' => '0985356050',
                'store_owner' => 2,
            ],
            [
                'store_name' => 'H&H10',
                'store_address' => 'Thôn Đông',
                'phone_contact' => '0985356050',
                'store_owner' => 2,
            ],
            [
                'store_name' => 'H&H11',
                'store_address' => 'Thôn Đông',
                'phone_contact' => '0985356050',
                'store_owner' => 2,
            ],
        ];

        $demoFoods = [
            [
                'store_id' => 1,
                'category_id' => 1,
                'food_name' => 'Cơm rang',
                'food_not_mark' => 'com-rang',
                'food_active' => 1,
                'price' => 20000,
                'food_description' => 'Cơm rang các loại',
            ],
            [
                'store_id' => 2,
                'category_id' => 2,
                'food_name' => 'Thịt bò',
                'food_not_mark' => 'thit-bo',
                'food_active' => 1,
                'price' => 80000,
                'food_description' => 'Thịt bò sạch',
            ],
            [
                'store_id' => 3,
                'category_id' => 3,
                'food_name' => 'Trà sữa',
                'food_not_mark' => 'tra-sua',
                'food_active' => 1,
                'price' => 20000,
                'food_description' => 'Trà sữa các loại',
            ],
        ];

        $categories = [
            [
                'category_name' => "Thức ăn",
                'category_not_mark' => 'thuc-an',
                'category_description' => 'Thức ăn',
                'category_active' => 1,
            ],
            [
                'category_name' => "Thực phẩm",
                'category_not_mark' => 'thuc-pham',
                'category_description' => 'Thực phẩm',
                'category_active' => 1,
            ],
            [
                'category_name' => "Đồ uống",
                'category_not_mark' => 'do-uong',
                'category_description' => 'Đồ uống',
                'category_active' => 1,
            ],
            [
                'category_name' => "Thức ăn sẵn",
                'category_not_mark' => 'thuc-an-san',
                'category_description' => 'Đồ ăn sẵn',
                'category_active' => 0,
            ],
        ];


        DB::table('roles')->insert($role);
        DB::table('users')->insert($defaultUser);
        DB::table('admins')->insert($defaultSupperUser);
        DB::table('categories')->insert($categories);
        DB::table('stores')->insert($demoStores);
        DB::table('foods')->insert($demoFoods);
    }
}
