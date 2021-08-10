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
                'password' => bcrypt('1'),
                'first_name' => 'Huy',
                'last_name' => "Huấn",
                'phone' => '0985356050',
                'address' => 'Vạn Trạch - Bố Trạch - Quảng Bình',
                'gender' => 1,
                'birthday' => '1995-01-10'
            ],
        ];
        $defaultSupperUser = [
            [
                'email' => 'admin@gmail.com',
                'password' => bcrypt('1'),
                'role_id' => 1,
                'first_name' => 'Huy',
                'last_name' => "Huấn",
                'phone' => '0985356050',
                'address' => 'Vạn Trạch - Bố Trạch - Quảng Bình',
                'gender' => 1,
                'birthday' => '1995-01-10'
            ],
            [
                'email' => 'shop@gmail.com',
                'password' => bcrypt('1'),
                'role_id' => 2,
                'first_name' => 'Phạm',
                'last_name' => "Hải",
                'phone' => '0962184651',
                'address' => 'Nông Cống - Thanh Hóa',
                'gender' => 0,
                'birthday' => '1996-09-20'
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
        DB::table('roles')->insert($role);
        DB::table('users')->insert($defaultUser);
        DB::table('admins')->insert($defaultSupperUser);
        DB::table('stores')->insert($demoStores);
    }
}
