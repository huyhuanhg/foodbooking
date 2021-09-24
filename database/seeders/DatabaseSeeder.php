<?php

namespace Database\Seeders;

use App\Models\User;
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

        $randomAddress = [
            [
                ['name' => 'Thanh Hóa', 'code' => 38],
                ['name' => 'Nông Cống', 'code' => 404],
                [
                    [
                        "name" => "TT Nông Cống",
                        "code" => 16279,
                    ],
                    [
                        "name" => "Tân Phúc",
                        "code" => 16282,
                    ],
                    [
                        "name" => "Tân Thọ",
                        "code" => 16285,
                    ],
                    [
                        "name" => "Hoàng Sơn",
                        "code" => 16288,
                    ],
                    [
                        "name" => "Tân Khang",
                        "code" => 16291,
                    ],
                    [
                        "name" => "Hoàng Giang",
                        "code" => 16294,
                    ],
                    [
                        "name" => "Trung Chính",
                        "code" => 16297,
                    ],
                    [
                        "name" => "Trung Thành",
                        "code" => 16303,
                    ],
                    [
                        "name" => "Tế Thắng",
                        "code" => 16309,
                    ],
                    [
                        "name" => "Tế Lợi",
                        "code" => 16315,
                    ],
                    [
                        "name" => "Tế Nông",
                        "code" => 16318,
                    ],
                    [
                        "name" => "Minh Nghĩa",
                        "code" => 16321,
                    ],
                    [
                        "name" => "Minh Khôi",
                        "code" => 16324,
                    ],
                    [
                        "name" => "Vạn Hòa",
                        "code" => 16327,
                    ],
                    [
                        "name" => "Trường Trung",
                        "code" => 16330,
                    ],
                    [
                        "name" => "Vạn Thắng",
                        "code" => 16333,
                    ],
                    [
                        "name" => "Trường Giang",
                        "code" => 16336,
                    ],
                    [
                        "name" => "Vạn Thiện",
                        "code" => 16339,
                    ],
                    [
                        "name" => "Thăng Long",
                        "code" => 16342,
                    ],
                    [
                        "name" => "Trường Minh",
                        "code" => 16345,
                    ],
                    [
                        "name" => "Trường Sơn",
                        "code" => 16348,
                    ],
                    [
                        "name" => "Thăng Bình",
                        "code" => 16351,
                    ],
                    [
                        "name" => "Công Liêm",
                        "code" => 16354,
                    ],
                    [
                        "name" => "Tượng Văn",
                        "code" => 16357,
                    ],
                    [
                        "name" => "Thăng Thọ",
                        "code" => 16360,
                    ],
                    [
                        "name" => "Tượng Lĩnh",
                        "code" => 16363,
                    ],
                    [
                        "name" => "Tượng Sơn",
                        "code" => 16366,
                    ],
                    [
                        "name" => "Công Chính",
                        "code" => 16369,
                    ],
                    [
                        "name" => "Yên Mỹ",
                        "code" => 16375,
                    ]

                ]
            ],
            [
                ['name' => 'Quảng Bình', 'code' => 44],
                ['name' => 'Bố Trạch', 'code' => 455],
                [
                    [
                        "name" => "TT Hoàn Lão",
                        "code" => 19111
                    ],
                    [
                        "name" => "TT NT Việt Trung",
                        "code" => 19114
                    ],
                    [
                        "name" => "Xuân Trạch",
                        "code" => 19117
                    ],
                    [
                        "name" => "Mỹ Trạch",
                        "code" => 19120
                    ],
                    [
                        "name" => "Hạ Trạch",
                        "code" => 19123
                    ],
                    [
                        "name" => "Bắc Trạch",
                        "code" => 19126
                    ],
                    [
                        "name" => "Lâm Trạch",
                        "code" => 19129
                    ],
                    [
                        "name" => "Thanh Trạch",
                        "code" => 19132
                    ],
                    [
                        "name" => "Liên Trạch",
                        "code" => 19135
                    ],
                    [
                        "name" => "Phúc Trạch",
                        "code" => 19138
                    ],
                    [
                        "name" => "Cự Nẫm",
                        "code" => 19141
                    ],
                    [
                        "name" => "Hải Phú",
                        "code" => 19144
                    ],
                    [
                        "name" => "Thượng Trạch",
                        "code" => 19147
                    ],
                    [
                        "name" => "Sơn Lộc",
                        "code" => 19150
                    ],
                    [
                        "name" => "Hưng Trạch",
                        "code" => 19156
                    ],
                    [
                        "name" => "Đồng Trạch",
                        "code" => 19159
                    ],
                    [
                        "name" => "Đức Trạch",
                        "code" => 19162
                    ],
                    [
                        "name" => "TT Phong Nha",
                        "code" => 19165
                    ],
                    [
                        "name" => "Vạn Trạch",
                        "code" => 19168
                    ],
                    [
                        "name" => "Phú Định",
                        "code" => 19174
                    ],
                    [
                        "name" => "Trung Trạch",
                        "code" => 19177
                    ],
                    [
                        "name" => "Tây Trạch",
                        "code" => 19180
                    ],
                    [
                        "name" => "Hòa Trạch",
                        "code" => 19183
                    ],
                    [
                        "name" => "Đại Trạch",
                        "code" => 19186
                    ],
                    [
                        "name" => "Nhân Trạch",
                        "code" => 19189
                    ],
                    [
                        "name" => "Tân Trạch",
                        "code" => 19192
                    ],
                    [
                        "name" => "Nam Trạch",
                        "code" => 19195
                    ],
                    [
                        "name" => "Lý Trạch",
                        "code" => 19198
                    ]
                ]
            ],
            [
                ['name' => 'Đà Nẵng', 'code' => 48],
                ['name' => 'Liên Chiểu', 'code' => 490],
                [
                    [
                        "name" => "Hòa Hiệp Bắc",
                        "code" => 20194
                    ],
                    [
                        "name" => "Hòa Hiệp Nam",
                        "code" => 20195
                    ],
                    [
                        "name" => "Hòa Khánh Bắc",
                        "code" => 20197
                    ],
                    [
                        "name" => "Hòa Khánh Nam",
                        "code" => 20198
                    ],
                    [
                        "name" => "Hòa Minh",
                        "code" => 20200
                    ]

                ]
            ]
        ];
        $randomName = [
            [
                'first_name' => 'Huy',
                'last_name' => 'Huấn',
                'avatar' => '/images/uploads/user-avatar/user-1.jpeg',
                'birthday' => '1995-01-10',
                'phone' => '0935906860',
                'gender' => 1,
            ],
            [
                'first_name' => 'Huy',
                'last_name' => "Hưng",
                'phone' => '0935006544',
                'gender' => 1,
                'avatar' => '/images/uploads/user-avatar/hung.jpg'
            ],
            [
                'first_name' => 'Huy',
                'last_name' => "Thành",
                'phone' => '0934885882',
                'gender' => 1,
                'avatar' => '/images/uploads/user-avatar/thanh.jpg'
            ],
            [
                'first_name' => 'Huy',
                'last_name' => "Tư",
                'phone' => '0973242102',
                'gender' => 1,
                'avatar' => '/images/uploads/user-avatar/tu.jpg'
            ],
            [
                'first_name' => 'Nguyễn',
                'last_name' => "Thanh",
                'phone' => '0935985006',
                'gender' => 0,
                'avatar' => '/images/uploads/user-avatar/me-thanh.jpg'
            ],
            [
                'first_name' => 'Thu',
                'last_name' => "Hồng",
                'phone' => '0942422244',
                'gender' => 0,
                'avatar' => '/images/uploads/user-avatar/hong.jpg'
            ],
            [
                'first_name' => 'Thu',
                'last_name' => "Hằng",
                'phone' => '0935906861',
                'gender' => 0,
                'avatar' => '/images/uploads/user-avatar/hang.jpg'
            ],
            [
                'first_name' => 'Phạm',
                'last_name' => "Hải",
                'phone' => '0982184651',
                'gender' => 0,
                'avatar' => '/images/uploads/user-avatar/hai.jpg',
                'birthday' => '1996-09-20',
            ],
            [
                'first_name' => 'Phạm',
                'last_name' => "Toản",
                'phone' => '0983452515',
                'gender' => 1,
                'avatar' => '/images/uploads/user-avatar/bo-toan.jpg'
            ],
            [
                'first_name' => 'Đậu',
                'last_name' => "Duyên",
                'phone' => '0983152515',
                'gender' => 0,
                'avatar' => '/images/uploads/user-avatar/me-duyen.jpg'
            ],
            [
                'first_name' => 'Tuấn',
                'last_name' => "Kiệt",
                'phone' => '0935906069',
                'gender' => 1,
                'avatar' => '/images/uploads/user-avatar/bap.jpg',
                'birthday' => '2020-12-01',
            ],
        ];
        $user = new User();
        $user->first_name = 'Huy';
        $user->last_name = 'Huấn';
        $user->avatar = '/images/uploads/user-avatar/user-1.jpeg';
        $user->birthday = '1995-01-10';
        $user->phone = '0935906860';
        $user->gender = 1;
        $user->email = "client@gmail.com";
        $user->password = bcrypt('123456');
        $user->description = 'Đam mê ăn uống';
        $user->active = 1;
        $user->address = 'Vạn Trạch - Bố Trạch - Quảng Bình';
        $user->province_code = 44;
        $user->district_code = 455;
        $user->ward_code = 19168;
        $user->save();

        for ($i = 1; $i <= 50; $i++) {
            $user = new User();
            $person = $randomName[rand(0, count($randomName) - 1)];
            $address = $randomAddress[rand(0, count($randomAddress) - 1)];
            $ward = $address[2][rand(0, count($address[2]) - 1)];
            foreach ($person as $key => $value) {
                $user->$key = $value;
            }

            $user->email = "client$i@gmail.com";
            $user->password = bcrypt('123456');
            $user->description = 'Vui là chính';
            $user->active = 1;
            $user->address = $ward['name'] . ' - ' . $address[1]['name'] . ' - ' . $address[0]['name'];
            $user->province_code = $address[0]['code'];
            $user->district_code = $address[1]['code'];
            $user->ward_code = $ward['code'];
            $user->save();
        }

        $role = [
            [
                'role_type' => "MASTER",
                'role_description' => 'Admin Master',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'role_type' => "SHOP",
                'role_description' => 'Admin Shop',
                'created_at' => now(),
                'updated_at' => now()
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
                'created_at' => now(),
                'active' => 1
            ],
            [
                'email' => 'shop1@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => 2,
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
                'created_at' => now(),
                'active' => 1
            ],
            [
                'email' => 'shop2@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => 2,
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
                'created_at' => now(),
                'active' => 1
            ],
            [
                'email' => 'shop3@gmail.com',
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
                'avatar' => '/images/uploads/user-avatar/hai.jpg',
                'description' => 'Vui là chính',
                'created_at' => now(),
                'active' => 1
            ],
            [
                'email' => 'shop4@gmail.com',
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
                'avatar' => '/images/uploads/user-avatar/hai.jpeg',
                'description' => 'Vui là chính',
                'created_at' => now(),
                'active' => 1
            ],
            [
                'email' => 'shop5@gmail.com',
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
                'avatar' => '/images/uploads/user-avatar/hai.jpeg',
                'description' => 'Vui là chính',
                'created_at' => now(),
                'active' => 1
            ],
        ];

        DB::table('roles')->insert($role);
        DB::table('admins')->insert($defaultSupperUser);

        $this->call([
            StoresCategoriesTableSeeder::class,
            FoodTagsTableSeeder ::class,
            StoresTableSeeder::class,

            FoodsTableSeeder::class,

            FoodTagDetailTableSeeder::class,
            CommentsTableSeeder::class,
            PromotionTableSeeder::class,

            BookmarkTableSeeder::class,
            LikeTableSeeder::class,
            RateTableSeeder::class,
            OrderTableSeeder::class,
        ]);
    }
}
