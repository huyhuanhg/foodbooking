<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Store;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $demoStores = [
            [
                'store_name' => 'Quán ăn vặt đóng hộp',
                'phone_contact' => '0985356050',
                'store_image' => '/images/uploads/store-avatar/an-vat-1.jpeg',
                'store_specific_address' => 'Thôn Đông',
                'store_description' => "Quán ăn vặt đóng hộp"
            ],
            [
                'store_name' => 'Bánh tráng kẹp Mis-Thy',

                'phone_contact' => '0985356050',
                'store_image' => '/images/uploads/store-avatar/banh-trang-kep.jpg',
                'store_specific_address' => 'Thôn Đông',
                'store_description' => "Bánh tráng kẹp Mis-Thy"
            ],
            [
                'store_name' => 'Cafe Thiên Đường',
                'phone_contact' => '0982184651',
                'store_image' => '/images/uploads/store-avatar/cafe-1.jpg',
                'store_specific_address' => 'Quỳnh Tiến',
                'store_description' => "Cafe Thiên Đường"
            ],
            [
                'store_name' => 'Cafe Lung Linh',
                'phone_contact' => '0982184651',
                'store_image' => '/images/uploads/store-avatar/cafe-2.jpg',
                'store_specific_address' => 'Quỳnh Tiến',
                'store_description' => "Cafe Lung Linh"
            ],
            [
                'store_name' => 'Tiệm bánh ngọt',
                'phone_contact' => '0982184651',
                'store_image' => '/images/uploads/store-avatar/cheese.jpg',
                'store_specific_address' => 'Quỳnh Tiến',
                'store_description' => "Chuyên bánh sinh nhật, bánh ngọt, bánh kem, bánh bông lan, ..."
            ],
            [
                'store_name' => 'CHRIS Cheese Hotdog',
                'phone_contact' => '0985356050',
                'store_image' => '/images/uploads/store-avatar/cheese-hotdog.jpg',
                'store_specific_address' => 'Thôn Đông',
                'store_description' => "CHRIS Cheese Hotdog"
            ],
            [
                'store_name' => 'Kim Bắp Hàn Quốc',
                'phone_contact' => '0985356050',
                'store_image' => '/images/uploads/store-avatar/kim-bap.jpg',
                'store_specific_address' => 'Thôn Đông',
                'store_description' => "Kim Bắp Hàn Quốc"
            ],
            [
                'store_name' => 'Mì Quảng Ba Vị',
                'phone_contact' => '0985356050',
                'store_image' => '/images/uploads/store-avatar/mi-quang-ba-vi.jpg',
                'store_specific_address' => 'Thôn Đông',
                'store_description' => "Mì Quảng Ba Vị"
            ],
            [
                'store_name' => 'Món chiên Thiên Kim',
                'phone_contact' => '0982184651',
                'store_image' => '/images/uploads/store-avatar/mon-chien.jpeg',
                'store_specific_address' => 'Quỳnh Tiến',
                'store_description' => "Chuyên các món ăn chiên giòn"
            ],
            [
                'store_name' => 'Quán ăn Thần Tiên',
                'phone_contact' => '0982184651',
                'store_image' => '/images/uploads/store-avatar/quan-an.jpg',
                'store_specific_address' => 'Quỳnh Tiến',
                'store_description' => "Quán ăn Thần Tiên"
            ],
            [
                'store_name' => 'Nhà hàng Vạn Lộc',
                'phone_contact' => '0982184651',
                'store_image' => '/images/uploads/store-avatar/quan-an-2.jpg',
                'store_specific_address' => 'Quỳnh Tiến',
                'store_description' => "Vui lòng khách đến vừa lòng khách đi!"
            ],
            [
                'store_name' => 'Cafe Thôi Kệ',
                'phone_contact' => '0985356050',
                'store_image' => '/images/uploads/store-avatar/thoi-ke.jpg',
                'store_specific_address' => 'Thôn Đông',
                'store_description' => "Bỏ qua mọi thứ, thôi kệ mà chơi"
            ],
            [
                'store_name' => 'Nhà hàng Năm Xưa',
                'phone_contact' => '0985356050',
                'store_image' => '/images/uploads/store-avatar/quan-co.jpg',
                'store_specific_address' => 'Thôn Đông',
                'store_description' => "Vì lý tưởng duy nhất, phục vụ khách hàng bằng cả tấm lòng!"
            ],
            [
                'store_name' => 'Cơm sường Tấm Cám',
                'phone_contact' => '0982184651',
                'store_image' => '/images/uploads/store-avatar/quan-com-suon.jpg',
                'store_specific_address' => 'Quỳnh Tiến',
                'store_description' => "Kinh doanh chỉ là đam mê, khách hàng vui lòng mới là niềm vui lớn nhất"
            ],
            [
                'store_name' => 'Mì Quảng Hoàng Gia',
                'phone_contact' => '0985356050',
                'store_image' => '/images/uploads/store-avatar/quan-mi-quang.jpg',
                'store_specific_address' => 'Thôn Đông',
                'store_description' => "Vì lý tưởng duy nhất, phục vụ khách hàng bằng cả tấm lòng!"
            ],
            [
                'store_name' => 'Pizza The Love',
                'phone_contact' => '0982184651',
                'store_image' => '/images/uploads/store-avatar/quan-pizza.jpg',
                'store_specific_address' => 'Quỳnh Tiến',
                'store_description' => "Kinh doanh chỉ là đam mê, khách hàng vui lòng mới là niềm vui lớn nhất"
            ],
            [
                'store_name' => 'Trà sữa King',
                'phone_contact' => '0985356050',
                'store_image' => '/images/uploads/store-avatar/quan-tra-sua-king.jpg',
                'store_specific_address' => 'Thôn Đông',
                'store_description' => "Vì lý tưởng duy nhất, phục vụ khách hàng bằng cả tấm lòng!"
            ],
            [
                'store_name' => 'Bánh kem Út Mô Tô',
                'phone_contact' => '0982184651',
                'store_image' => '/images/uploads/store-avatar/tiem-banh-kem-ut-mo-to.jpg',
                'store_specific_address' => 'Quỳnh Tiến',
                'store_description' => "Kinh doanh chỉ là đam mê, khách hàng vui lòng mới là niềm vui lớn nhất"
            ],
            [
                'store_name' => 'Bánh ngọt Như Ý',
                'phone_contact' => '0985356050',
                'store_image' => '/images/uploads/store-avatar/tiem-banh-ngot.jpg',
                'store_specific_address' => 'Thôn Đông',
                'store_description' => "Vì lý tưởng duy nhất, phục vụ khách hàng bằng cả tấm lòng!"
            ],
            [
                'store_name' => 'Quán Rau má Thanh Hóa',
                'phone_contact' => '0982184651',
                'store_image' => '/images/uploads/store-avatar/tiem-rau-ma.jpg',
                'store_specific_address' => 'Quỳnh Tiến',
                'store_description' => "Kinh doanh chỉ là đam mê, khách hàng vui lòng mới là niềm vui lớn nhất"
            ],
            [
                'store_name' => 'HIGHLANDS',
                'phone_contact' => '0985356050',
                'store_image' => '/images/uploads/store-avatar/tra-sua-1.jpg',
                'store_specific_address' => 'Thôn Đông',
                'store_description' => "Vì lý tưởng duy nhất, phục vụ khách hàng bằng cả tấm lòng!"
            ],
            [
                'store_name' => 'Nước ngon cho bạn',
                'phone_contact' => '0982184651',
                'store_image' => '/images/uploads/store-avatar/tra-sua-2.jpeg',
                'store_specific_address' => 'Quỳnh Tiến',
                'store_description' => "Kinh doanh chỉ là đam mê, khách hàng vui lòng mới là niềm vui lớn nhất"
            ],
            [
                'store_name' => 'Bà Béo',
                'phone_contact' => '0985356050',
                'store_image' => '/images/uploads/store-avatar/tra-sua-ba-beo.jpg',
                'store_specific_address' => 'Thôn Đông',
                'store_description' => "Vì lý tưởng duy nhất, phục vụ khách hàng bằng cả tấm lòng!"
            ],
            [
                'store_name' => 'XingFu Cha',
                'phone_contact' => '0982184651',
                'store_image' => '/images/uploads/store-avatar/tra-sua-xingfu.jpg',
                'store_specific_address' => 'Quỳnh Tiến',
                'store_description' => "Kinh doanh chỉ là đam mê, khách hàng vui lòng mới là niềm vui lớn nhất"
            ],
        ];
        $randomAddress = [
            //nông cống
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
            //bố trạch
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
            //liên chiểu
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
        for ($i = 1; $i < 4; $i++) {
            foreach ($demoStores as $demoStore) {
                $address = $randomAddress[rand(0, count($randomAddress) - 1)];
                $ward = $address[2][rand(0, count($address[2]) - 1)];
                $randMin = rand(0, 1) * 30;
                $store = new Store();
                $store->store_category = Category::all()->random()->id;
                $store->store_address = $demoStore['store_specific_address'] . ' - ' . $ward['name'] . ' - ' . $address[1]['name'] . ' - ' . $address[0]['name'];;
                $store->store_province_code = $address[0]['code'];
                $store->store_district_code = $address[1]['code'];
                $store->store_ward_code = $ward['code'];
                $store->owner = rand(2, 6);
                $store->open_time = str_pad(rand(7, 15), 2, '0', STR_PAD_LEFT) . ':' . ($randMin === 0 ? '00' : $randMin);
                $store->close_time = rand(18, 23) . ':' . ($randMin === 0 ? '00' : $randMin);
                $store->store_not_mark = vi_not_mark($demoStore['store_name']);
                foreach ($demoStore as $key => $value) {
                    if ($key == 'store_name') {
                        $store->$key = $value . ($i === 1 ? ' I' : ($i === 2 ? ' II' : ' III'));
                    } else {
                        $store->$key = $value;
                    }
                }
                $store->save();
            }
        }
    }
}
