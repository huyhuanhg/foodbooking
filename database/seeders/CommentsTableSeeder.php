<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Seeder;

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

            'Đồ ăn ngon ơi là ngon. Sau khi ăn còn được tặng tráng miệng cũng ngon không kém. Mì ý ngon, hải sản tươi ngon. Nhiều món lạ miệng do toàn là món hy lạp mà mình chưa thử bao giờ nhưng rất đáng để ăn'
        ];
        $storeCount = Store::all()->count();
        for ($i = 1; $i <= $storeCount; $i++) {
            $content = $contentComment[rand(0, count($contentComment) - 1)];
            $comment = new Comment();
            $comment->store_id = $i;
            $comment->user_id = User::all()->random()->id;
            $comment->content = $content;
            $comment->save();
        }
    }
}
