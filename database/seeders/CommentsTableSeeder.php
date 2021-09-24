<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\CommentPicture;
use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contentComment = [
            'Tuy ko nổi tiếng nhưng bạn sẽ ko thất vọng vì quá ngon',

            'Đôi dòng về quán:
            - Vị trí: nằm trong hẻm nhưng khá dễ tìm, trung tâm Hội An
            - Không gian: rộng rãi, thoáng mát do có nhiều cây xanh trong quán
            - Món ăn: bày trí đẹp mắt, đồ ăn ngon miệng và hợp khẩu vị. Có thể chọn ăn riêng từng món hoặc set combo tuỳ theo số lượng khách',

            'Một trải nghiệm cực kì tệ. Có gián đã chết trong chén nước chấm và có lẽ vì bị nấu quá lâu nên gián đã bị nát khi gắp ra kiểm tra. Sau khi nói vấn đề này với chủ quán thì nhận được một câu trả lời khá thú vị và không có hành động xin lỗi nào thay vì bào chữa cho vấn đề của mình “ Chuyện này bình thường thôi em ơi, quán nào cũng có vấn đề về chuyện như ri hết”. Và một câu nói chắc nịch của anh chủ quán là “ anh đảm bảo với em nồi nước chấm của anh nấu bên trong nhà không có gián, chỉ có con gián này mới bay vào thau phụ ni đây thôi”.',

            'Sống cà phê Tên rất ý nghĩa và đúng như cái tên của nó. Không gian dường như rất sống động, rất đẹp, buổi trưa mát mẻ, không gian vui tươi, người người ra ra vào vào sống động, nhân viên dêc thương lắm luôn, sẽ ghé lại quán lần nữa.',

            'Trong quán đi uống thấy chất vãi cái slogan được in khắp quán. "Sống là phải cà phê" tên quán cũng là Sống phù hợp ghê.
            Mà mình vô thì uống trà đào váng sữa hehe. tại thấy món lạ mà
            Quán này nằm ở trục đường từ Đà Nẵng vô Hội An đường Trần Thủ Độ. Ở khu này chắc quán ni là nhìn đẹp và chất nhất.
            Menu món cũng phong phú nữa. Chỉ có điều là nhà mình không gần đây nên khó đi uống thôi. Lâu lâu có dịp vô Hội An chơi chắc ghé lại quán',

            'Cháo nghêu Cô gió không bao giờ làm em thất vọng các***ạ , lụt lội mà cũng vào ăn , vì thèm quá
            Cháo Nghêu Cô Gió ngon lắm các***ạ , trời mưa to gió lớn cũng vào ăn vì thèm quá',

            'Lần đầu tiên được thử cháo nghêu cô Gió, ở đây có tới 3 loại là cháo xương, bò, nghêu. Tầm 4h đến là cháo xương hết rồi nhé, mình thấy có cháo đuôi bò hơi bị hấp dẫn nhưng ăn 1 tô cháo nghêu là đã no căng rồi',

            'Mình được bạn dẫn đến ăn, có nhiều loại thịt và sốt. Chủ là người Tây vô cùng thân thiện, nhân viên cv luôn. Tuyệt vời',

            'Lần đầu biết tới đồ ăn Hy Lạp do chính tay người Hy lạp làm.
            Cái đầu tiên làm mình ấn tượng nhất là giá cả. Ăn tầm 10 người mà chỉ 1.0tr-1.5tr thôi, quá đã cho 1 bữa ăn xã láng.',

            'Đồ ăn ngon ơi là ngon. Sau khi ăn còn được tặng tráng miệng cũng ngon không kém. Mì ý ngon, hải sản tươi ngon. Nhiều món lạ miệng do toàn là món hy lạp mà mình chưa thử bao giờ nhưng rất đáng để ăn',

            'Vô Tam Kì chơi được bạn dẫn đến quán này, ghé vào buổi trưa nên khá yên tĩnh, tha hồ tám chuyện với bạn bè. Quán có một cái kệ sách với nhiều thể loại hợp cho bạn nào có sở thích đọc truyện ^^^ Không gian tương đối rộng rãi, điều hoà mát rượi, quán cũng có vài góc chụp tha hồ sống ảo nhưng mình lười quá nên cũng không chụp choẹt gì nhiều. Đồ uống cũng tạm tạm, mình gọi ô long kem sữa, kem sữa có vị gì gì ấy hơi khó uống. Sẽ đến quán lần sau nếu có cơ hội.',

            'Có đợt cuối tuần về Tam Kỳ quê bạn chơi 2 ngày, sau màn đi ăn mỳ cay thì bạn dẫn mình tới quán cafe này để sống ảo. Ở Tam Kỳ thì có cafe cute như này cũng gọi là ổn lắm rùi đó
            Không gian nhỏ nhắn xinh xắn, thấy màu chủ đạo là màu hồng thì phải, mà cũng nhiều ko gian cho chị em sống ảo đó, ai ko ưng chụp choẹt thì có dãy bàn phía ngoài để ngồi nc hóng gió cho mát
            Menu ở đây đa dạng lắm nha, nước uống ăn vặt gì cũng có cả. Chất lượng cũng rất ok nữa
            Nếu có dịp về quê bạn chơi sẽ lại ghé quán này nữa',

            'Quán thì đẹp đẽ sang trọng nhưng đồ uống thì quá tệ. Uống thì nhạt nhẽo mà mình còn chả hiểu tại sao nhân viên lại dám phục vụ khách bằng cốc thuỷ tinh. Uống trà sữa bằng cốc thuỷ tinh nó chả ra cái vị gì cả. Quá đáng vcd',

            'Tối nay mình đặt 1 ly trà sữa Thiết***TRÂN CHÂU . mà thấy thất vọng thật sự , khi mở ra uống thì vị trsua cũng được , nhưng khi uống hết r mới phát hiện rằng k thấy trân châu đâu . bỏ tiền ra uống mà cuối cùng như vậy đây. Mik mong lần sau nhân viên sẽ cẩn thận hơn chứ làm vậy phí tiền người mua lắm đấy ạ!',

            'Thấy nhiều food blogger review khen quá nên nhân dịp quán giảm giá mình mua về ăn thử. Quán phục vụ rất nhanh, chị shipper giao cho mình cũng dễ thương nữa. M
            Lần đầu ăn món mì Indo thấy lạ miệng, chất lượng, nhiều topping dù vị khá bình thường. Sữa tươi nướng trân châu xào vị ổn nhưng hơi nhạt so với mình, với lại mình chả thấy trân châu xào này khác gì trân châu bình thường mà giá cả lại đắt và cũng ít nữa . Nếu không có khuyến mãi chắc mình cũng không đặt nữa đâu vì giá khá mắc so với chất lượng.',

            'Hoảng hồn , thấy có khuyến mãi 0d mình cũng thử xem vị ra sao. Quá lỏng lẽo còn thua trà sữa bthg . Ko có 1 cái vị gì.',

            'Món sugar baby này vừa ngon vừa bổ, uống k lo béo nha mn',

            'Mình đặt Matcha thì lại nhận Cacao ngọt kinh khủng, hơi đắng và toàn mùi***cao đậm. Đã vậy còn dán tem "matcha đường nâu sữa". Vứt nguyên ly vào sọt rác luôn. Buôn bán mở mắt to ra dùm nhé. Sẽ không quay lại',

            'Đặt đường nâu kem chese mà không thấy kem chese đâu !!!! ???
            Trân châu thì cứng Hỏi bên ship thì bảo không biết buôn bán như này thì dẹp quán cho rồi ? Ghi rõ ràng trên giấy dán là kem chese vẫn không thấy một miếng kem chese nào ?? Mong quán đọc được và rút kinh nghiệm !!',

            'mình đặt ở đây khá nhiều lần mà lần này phải nói thấy vọng, mua thêm trân châu mà trân châu như đã để lâu ấy, bũn ra mềm không có độ dai luôn, còn đổi hẳn sàn màu đỏ chứ. chán thật sự',

            'Mình toàn order vì nhiều ưu đãi nè phải nói uống sữa tươi chân châu đường đen kem cheese ở đây rồi là uống chỗ nào cũng thấy dỡ nói chung là đường nâu thơm, chân châu dai đậm vị cùng sữa tươi là chuẩn bài luôn. Khi nào thèm là quất size L uống phê luôn ấy tại bị nghiện kem cheese ở đây. Kem cheese không phải quá xuất xắc nhưng thơm tinh tế nha, càng uống càng ghiền. Sữa tươi chân châu matcha ổn, sữa tươi chân châu đường đen cũng ngon. Nói chung duyệt duyệt.'
        ];

        $picPath = '/images/uploads/comment-pictures/cm-';

        $storeCount = Store::all()->count();
        for ($i = 1; $i <= $storeCount; $i++) {
            $commentCount = rand(1, count($contentComment));
            $commentContents = [];
            for ($j = 1; $j <= $commentCount; $j++) {
                $randomContent = rand(0, count($contentComment) - 1);
                while (true) {
                    $exist = array_filter($commentContents, function ($content) use ($randomContent) {
                        return $content['id'] === $randomContent;
                    });
                    if (empty($exist)) {
                        break;
                    }
                    $randomContent = rand(0, count($contentComment) - 1);
                }

                $pictures = [];
                $pictureCount = rand(0, 8);
                for ($k = 0; $k < $pictureCount; $k++) {
                    $pictureId = rand(1, 13);
                    while (in_array($pictureId, $pictures)) {
                        $pictureId = rand(1, 13);
                    }
                    array_push($pictures, $pictureId);
                }

                array_push($commentContents, [
                    'id' => $randomContent,
                    'content' => $contentComment[$randomContent],
                    'pictures' => $pictures
                ]);
            }
            foreach ($commentContents as $value) {
//                add comment
                $content = $value['content'];
                $comment = new Comment();
                $comment->store_id = $i;
                $comment->user_id = User::all()->random()->id;
                $comment->content = $content;
                $comment->save();
//                add pictures
                foreach ($value['pictures'] as $val) {
                    $picture = new CommentPicture();
                    $picture->picture_path = "$picPath$val.jpg";
                    $picture->save();
                    DB::table('comment_picture_detail')->insert(['comment_id' => $comment->id, 'comment_picture_id' => $picture->id]);
                }
            }
        }
    }
}
