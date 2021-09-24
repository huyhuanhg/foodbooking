<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookmarkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $contents = [
            'thật luôn ấy :) 41k mì cay bạch tuộc và 15k bò thêm ???',
            'Đặt 2 món cũng gần 100k :)))) ăn takoyaki mà tưởng đang ăn cái bột bánh *** có cái ** gì trong cả sợ thật sự luôn đấy . Ăn gần hết mới đc 1 cái có nhân mà nhân là cái cọng râu mực nhỏ xíu ??? :D ??????? Mua 1 lần khiếp luôn hôm sau bê * né chứ * ai dám ăn lại',
            'Hong biết số mấy bạn xui hay sao mình toàn đọc review xấu. đây là phần mình mua về, và phần mình ăn tại quán. Giá now thì 45k giá quán 43k. :))) mình gọi cấp 1. Cay vừa phải. Tôm tươi. Mực cũng tươi. Nấu vừa ăn. Nói chung là ok. Phần ship về còn ngon hơn ăn ở quán :))). Có điều nhân viên hơi ko thân thiện lắm. sẽ ủng hộ thường xuyên',
            'Cảm giác sasin chất lượng ngày càng tệ. Sasin bên***ngon hơn nhiều so với ở đây. Mì cay ở đây sợi cứng, nước nêm nhạt quá. Trà đào thì miếng đào như bị úng. Nói chung là tệ',
            'Mới ăn lần đầu tại đây nhưng về thấy khác ngon! Không gian rộng rãi ok.',
            'Hôm trước mình đi gọi mì cấp 2 thấy mì có vị ngọt còn hôm nay gọi c1 thì mì có vẻ nhạt nhẽo lắm luôn bạn mình gọi mì xào nhưng bàn mình đến 30’ vẫn chưa có hỏi thì mới đem ra thì mì xào bở hết cả rồi còn tô mì c1 của mình thì nhạt nhẽo khỏi phải nói mọi hôm mình ăn c1 ở cơ sở khác vẫn bình thường và hải sản thì hình như ko đc tươi lắm, quán xem lại nhé còn nhân viên thì phục vụ nhiệt tình ko phải chê vào đâu cả mong quán khắc phục nhược điểm mình nói nhé',
            'Mới phát hiện ra quán mới khai trương gần nhà. Phần mình kêu là hải sản đặc biệt thì phải- 59k, gồm hải sản và bò. Mình thấy chất lượng quán tốt hơn bên Nguyễn Văn Linh, hải sản tươi hơn, bò nhiều hơn. Lưu ý là cấp độ cay bên này cay hơn, mình ăn cấp độ 1 mà cay quá là cay',
            'Uống Bông từ lúc Bông mới mở đến nay cũng lâu lắm rồi',
            'Mở ly trà sữa ra hoang mang vì ko có gì ngoài nước vs vài viên popping vs vài viên thạch nhà làm',
            'Mình có thanh toán trên mạng cho ly ts mình đặt mà bh ko có ai giao sao ah',
            'Cảm ơn Chúa đã cho tôi sống tiếp.',
            'Order quadn nhiều lần rồi mà khá thất vọng. Kít sp không khớp làm đổ nước hết. Mong quán sẽ chú ý hơn',
            'Trước giờ muốn ăn cao lầu thì mình toàn vô hội ăn để ăn thôi hà,',
            'Địa điểm : gần cuối đường Thái Thị Bôi, quán nhỏ, hơi tối, vắng.',
            'Quá ngon cho một cuộc tềnh:))!!'
        ];
        $count = rand(25, Store::all()->count());
        $storeIds = [];
        for ($i = 0; $i < $count; $i++) {
            $storeId = Store::all()->random()->id;
            while (in_array($storeId, $storeIds)) {
                $storeId = Store::all()->random()->id;
            }
            array_push($storeIds, $storeId);
        }

        foreach ($storeIds as $storeId) {
            DB::table('bookmarks')->insert(
                [
                    'store_id' => $storeId,
                    'user_id' => 1,
                    'description' => $contents[rand(0, count($contents) - 1)],
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );
        }


    }
}
