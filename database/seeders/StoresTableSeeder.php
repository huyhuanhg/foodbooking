<?php

namespace Database\Seeders;

use App\Models\Category;
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
                'store_not_mark' => "quan-an-vat-dong-hop",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Thôn Đông - Vạn Trạch - Bố Trạch - Quảng Bình',
                'phone_contact' => '0985356050',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/an-vat-1.jpeg',
                'store_province_code' => 44,
                'store_district_code' => 455,
                'store_ward_code'=>19168,
                'store_specific_address' => 'Thôn Đông',
                'open_time' => '15:00',
                'close_time' => '21:00',
                'avg_rate' => 0,
                'store_description' => "Quán ăn vặt đóng hộp",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Bánh tráng kẹp Mis-Thy',
                'store_not_mark' => "banh-trang-kep-mis-thy",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Thôn Đông - Vạn Trạch - Bố Trạch - Quảng Bình',
                'phone_contact' => '0985356050',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/banh-trang-kep.jpg',
                'store_province_code' => 44,
                'store_district_code' => 455,
                'store_ward_code'=>19168,
                'store_specific_address' => 'Thôn Đông',
                'open_time' => '17:00',
                'close_time' => '22:00',
                'avg_rate' => 0,
                'store_description' => "Bánh tráng kẹp Mis-Thy",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Cafe Thiên Đường',
                'store_not_mark' => "cafe-thien-duong",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Quỳnh Tiến - Tượng Văn - Nông Cống - Thanh Hóa',
                'phone_contact' => '0982184651',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/cafe-1.jpg',
                'store_province_code' => 38,
                'store_district_code' => 404,
                'store_ward_code'=>16357,
                'store_specific_address' => 'Quỳnh Tiến',
                'open_time' => '14:00',
                'close_time' => '22:00',
                'avg_rate' => 0,
                'store_description' => "Cafe Thiên Đường",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Cafe Lung Linh',
                'store_not_mark' => "cafe-lung-linh",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Quỳnh Tiến - Tượng Văn - Nông Cống - Thanh Hóa',
                'phone_contact' => '0982184651',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/cafe-2.jpg',
                'store_province_code' => 38,
                'store_district_code' => 404,
                'store_ward_code'=>16357,
                'store_specific_address' => 'Quỳnh Tiến',
                'open_time' => '15:00',
                'close_time' => '23:00',
                'avg_rate' => 0,
                'store_description' => "Cafe Lung Linh",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Tiệm bánh ngọt',
                'store_not_mark' => "tiem-banh-ngot",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Quỳnh Tiến - Tượng Văn - Nông Cống - Thanh Hóa',
                'phone_contact' => '0982184651',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/cheese.jpg',
                'store_province_code' => 38,
                'store_district_code' => 404,
                'store_ward_code'=>16357,
                'store_specific_address' => 'Quỳnh Tiến',
                'open_time' => '07:00',
                'close_time' => '22:00',
                'avg_rate' => 0,
                'store_description' => "Chuyên bánh sinh nhật, bánh ngọt, bánh kem, bánh bông lan, ...",
                'store_active' => 1,
            ],
            [
                'store_name' => 'CHRIS Cheese Hotdog',
                'store_not_mark' => "chris-cheese-hotdog",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Thôn Đông - Vạn Trạch - Bố Trạch - Quảng Bình',
                'phone_contact' => '0985356050',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/cheese-hotdog.jpg',
                'store_province_code' => 44,
                'store_district_code' => 455,
                'store_ward_code'=>19168,
                'store_specific_address' => 'Thôn Đông',
                'open_time' => '07:00',
                'close_time' => '23:00',
                'avg_rate' => 0,
                'store_description' => "CHRIS Cheese Hotdog",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Kim Bắp Hàn Quốc',
                'store_not_mark' => "kim-bap-han-quoc",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Thôn Đông - Vạn Trạch - Bố Trạch - Quảng Bình',
                'phone_contact' => '0985356050',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/kim-bap.jpg',
                'store_province_code' => 44,
                'store_district_code' => 455,
                'store_ward_code'=>19168,
                'store_specific_address' => 'Thôn Đông',
                'open_time' => '15:00',
                'close_time' => '21:00',
                'avg_rate' => 0,
                'store_description' => "Kim Bắp Hàn Quốc",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Mì Quảng Ba Vị',
                'store_not_mark' => "mi-quang-ba-vi",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Thôn Đông - Vạn Trạch - Bố Trạch - Quảng Bình',
                'phone_contact' => '0985356050',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/mi-quang-ba-vi.jpg',
                'store_province_code' => 44,
                'store_district_code' => 455,
                'store_ward_code'=>19168,
                'store_specific_address' => 'Thôn Đông',
                'open_time' => '17:00',
                'close_time' => '22:00',
                'avg_rate' => 0,
                'store_description' => "Mì Quảng Ba Vị",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Món chiên Thiên Kim',
                'store_not_mark' => "mon-chien-thien-kim",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Quỳnh Tiến - Tượng Văn - Nông Cống - Thanh Hóa',
                'phone_contact' => '0982184651',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/mon-chien.jpeg',
                'store_province_code' => 38,
                'store_district_code' => 404,
                'store_ward_code'=>16357,
                'store_specific_address' => 'Quỳnh Tiến',
                'open_time' => '14:00',
                'close_time' => '22:00',
                'avg_rate' => 0,
                'store_description' => "Chuyên các món ăn chiên giòn",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Quán ăn Thần Tiên',
                'store_not_mark' => "quan-an-than-tien",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Quỳnh Tiến - Tượng Văn - Nông Cống - Thanh Hóa',
                'phone_contact' => '0982184651',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/quan-an.jpg',
                'store_province_code' => 38,
                'store_district_code' => 404,
                'store_ward_code'=>16357,
                'store_specific_address' => 'Quỳnh Tiến',
                'open_time' => '15:00',
                'close_time' => '23:00',
                'avg_rate' => 0,
                'store_description' => "Quán ăn Thần Tiên",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Nhà hàng Vạn Lộc',
                'store_not_mark' => "nha-hang-van-loc",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Quỳnh Tiến - Tượng Văn - Nông Cống - Thanh Hóa',
                'phone_contact' => '0982184651',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/quan-an-2.jpg',
                'store_province_code' => 38,
                'store_district_code' => 404,
                'store_ward_code'=>16357,
                'store_specific_address' => 'Quỳnh Tiến',
                'open_time' => '07:00',
                'close_time' => '22:00',
                'avg_rate' => 0,
                'store_description' => "Vui lòng khách đến vừa lòng khách đi!",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Cafe Thôi Kệ',
                'store_not_mark' => "cafe-thoi-ke",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Thôn Đông - Vạn Trạch - Bố Trạch - Quảng Bình',
                'phone_contact' => '0985356050',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/thoi-ke.jpg',
                'store_province_code' => 44,
                'store_district_code' => 455,
                'store_ward_code'=>19168,
                'store_specific_address' => 'Thôn Đông',
                'open_time' => '07:00',
                'close_time' => '23:00',
                'avg_rate' => 0,
                'store_description' => "Bỏ qua mọi thứ, thôi kệ mà chơi",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Nhà hàng Năm Xưa',
                'store_not_mark' => "nha-hang-nam-xua",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Thôn Đông - Vạn Trạch - Bố Trạch - Quảng Bình',
                'phone_contact' => '0985356050',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/quan-co.jpg',
                'store_province_code' => 44,
                'store_district_code' => 455,
                'store_ward_code'=>19168,
                'store_specific_address' => 'Thôn Đông',
                'open_time' => '07:00',
                'close_time' => '23:00',
                'avg_rate' => 0,
                'store_description' => "Vì lý tưởng duy nhất, phục vụ khách hàng bằng cả tấm lòng!",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Cơm sường Tấm Cám',
                'store_not_mark' => "com-suon-tam-cam",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Quỳnh Tiến - Tượng Văn - Nông Cống - Thanh Hóa',
                'phone_contact' => '0982184651',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/quan-com-suon.jpg',
                'store_province_code' => 38,
                'store_district_code' => 404,
                'store_ward_code'=>16357,
                'store_specific_address' => 'Quỳnh Tiến',
                'open_time' => '07:00',
                'close_time' => '22:00',
                'avg_rate' => 0,
                'store_description' => "Kinh doanh chỉ là đam mê, khách hàng vui lòng mới là niềm vui lớn nhất",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Mì Quảng Hoàng Gia',
                'store_not_mark' => "mi-quang-hoang-gia",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Thôn Đông - Vạn Trạch - Bố Trạch - Quảng Bình',
                'phone_contact' => '0985356050',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/quan-mi-quang.jpg',
                'store_province_code' => 44,
                'store_district_code' => 455,
                'store_ward_code'=>19168,
                'store_specific_address' => 'Thôn Đông',
                'open_time' => '07:00',
                'close_time' => '23:00',
                'avg_rate' => 0,
                'store_description' => "Vì lý tưởng duy nhất, phục vụ khách hàng bằng cả tấm lòng!",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Pizza The Love',
                'store_not_mark' => "pizza-the-love",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Quỳnh Tiến - Tượng Văn - Nông Cống - Thanh Hóa',
                'phone_contact' => '0982184651',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/quan-pizza.jpg',
                'store_province_code' => 38,
                'store_district_code' => 404,
                'store_ward_code'=>16357,
                'store_specific_address' => 'Quỳnh Tiến',
                'open_time' => '07:00',
                'close_time' => '22:00',
                'avg_rate' => 0,
                'store_description' => "Kinh doanh chỉ là đam mê, khách hàng vui lòng mới là niềm vui lớn nhất",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Trà sữa King',
                'store_not_mark' => "tra-sua-king",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Thôn Đông - Vạn Trạch - Bố Trạch - Quảng Bình',
                'phone_contact' => '0985356050',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/quan-tra-sua-king.jpg',
                'store_province_code' => 44,
                'store_district_code' => 455,
                'store_ward_code'=>19168,
                'store_specific_address' => 'Thôn Đông',
                'open_time' => '07:00',
                'close_time' => '23:00',
                'avg_rate' => 0,
                'store_description' => "Vì lý tưởng duy nhất, phục vụ khách hàng bằng cả tấm lòng!",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Bánh kem Út Mô Tô',
                'store_not_mark' => "banh-kem-ut-mo-to",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Quỳnh Tiến - Tượng Văn - Nông Cống - Thanh Hóa',
                'phone_contact' => '0982184651',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/tiem-banh-kem-ut-mo-to.jpg',
                'store_province_code' => 38,
                'store_district_code' => 404,
                'store_ward_code'=>16357,
                'store_specific_address' => 'Quỳnh Tiến',
                'open_time' => '07:00',
                'close_time' => '22:00',
                'avg_rate' => 0,
                'store_description' => "Kinh doanh chỉ là đam mê, khách hàng vui lòng mới là niềm vui lớn nhất",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Bánh ngọt Như Ý',
                'store_not_mark' => "banh-ngot-nhu-y",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Thôn Đông - Vạn Trạch - Bố Trạch - Quảng Bình',
                'phone_contact' => '0985356050',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/tiem-banh-ngot.jpg',
                'store_province_code' => 44,
                'store_district_code' => 455,
                'store_ward_code'=>19168,
                'store_specific_address' => 'Thôn Đông',
                'open_time' => '07:00',
                'close_time' => '23:00',
                'avg_rate' => 0,
                'store_description' => "Vì lý tưởng duy nhất, phục vụ khách hàng bằng cả tấm lòng!",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Quán Rau má Thanh Hóa',
                'store_not_mark' => "quan-rau-ma-thanh-hoa",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Quỳnh Tiến - Tượng Văn - Nông Cống - Thanh Hóa',
                'phone_contact' => '0982184651',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/tiem-rau-ma.jpg',
                'store_province_code' => 38,
                'store_district_code' => 404,
                'store_ward_code'=>16357,
                'store_specific_address' => 'Quỳnh Tiến',
                'open_time' => '07:00',
                'close_time' => '22:00',
                'avg_rate' => 0,
                'store_description' => "Kinh doanh chỉ là đam mê, khách hàng vui lòng mới là niềm vui lớn nhất",
                'store_active' => 1,
            ],
            [
                'store_name' => 'HIGHLANDS',
                'store_not_mark' => "highlands",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Thôn Đông - Vạn Trạch - Bố Trạch - Quảng Bình',
                'phone_contact' => '0985356050',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/tra-sua-1.jpg',
                'store_province_code' => 44,
                'store_district_code' => 455,
                'store_ward_code'=>19168,
                'store_specific_address' => 'Thôn Đông',
                'open_time' => '07:00',
                'close_time' => '23:00',
                'avg_rate' => 0,
                'store_description' => "Vì lý tưởng duy nhất, phục vụ khách hàng bằng cả tấm lòng!",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Nước ngon cho bạn',
                'store_not_mark' => "nuo-ngon-cho-ban",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Quỳnh Tiến - Tượng Văn - Nông Cống - Thanh Hóa',
                'phone_contact' => '0982184651',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/tra-sua-2.jpeg',
                'store_province_code' => 38,
                'store_district_code' => 404,
                'store_ward_code'=>16357,
                'store_specific_address' => 'Quỳnh Tiến',
                'open_time' => '07:00',
                'close_time' => '22:00',
                'avg_rate' => 0,
                'store_description' => "Kinh doanh chỉ là đam mê, khách hàng vui lòng mới là niềm vui lớn nhất",
                'store_active' => 1,
            ],
            [
                'store_name' => 'Bà Béo',
                'store_not_mark' => "ba-beo",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Thôn Đông - Vạn Trạch - Bố Trạch - Quảng Bình',
                'phone_contact' => '0985356050',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/tra-sua-ba-beo.jpg',
                'store_province_code' => 44,
                'store_district_code' => 455,
                'store_ward_code'=>19168,
                'store_specific_address' => 'Thôn Đông',
                'open_time' => '07:00',
                'close_time' => '23:00',
                'avg_rate' => 0,
                'store_description' => "Vì lý tưởng duy nhất, phục vụ khách hàng bằng cả tấm lòng!",
                'store_active' => 1,
            ],
            [
                'store_name' => 'XingFu Cha',
                'store_not_mark' => "xingfu-cha",
                'store_category' => Category::all()->random()->id,
                'store_address' => 'Quỳnh Tiến - Tượng Văn - Nông Cống - Thanh Hóa',
                'phone_contact' => '0982184651',
                'owner' => 2,
                'store_image' => '/images/uploads/store-avatar/tra-sua-xingfu.jpg',
                'store_province_code' => 38,
                'store_district_code' => 404,
                'store_ward_code'=>16357,
                'store_specific_address' => 'Quỳnh Tiến',
                'open_time' => '07:00',
                'close_time' => '22:00',
                'avg_rate' => 0,
                'store_description' => "Kinh doanh chỉ là đam mê, khách hàng vui lòng mới là niềm vui lớn nhất",
                'store_active' => 1,
            ],
        ];

        DB::table('stores')->insert($demoStores);
    }
}
