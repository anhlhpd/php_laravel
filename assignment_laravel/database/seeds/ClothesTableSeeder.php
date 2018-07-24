<?php

use Illuminate\Database\Seeder;

class ClothesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('clothes')->truncate();
        \Illuminate\Support\Facades\DB::table('clothes')->insert([
            [ 'categoryId'=>'2','description'=>'Đầm xòe có bèo ở cổ',
                'images'=>'https://20again.vn/media/catalog/product/cache/26/thumbnail/355x497/9df78eab33525d08d6e5fb8d27136e95/o/1/o118n-dea870-mxx8-5.jpg',

                'name'=>'Đầm xòe bèo cổ',

                'price'=>'585000'

            ],
            ['categoryId'=>'2','description'=>'Áo sơ mi tay ngắn form cơ bản thanh lịch và hiện đại',
                'images'=>'https://product.hstatic.net/1000122945/product/trang__3__79779755dba44d5a9f5a70747842dfa3_master.jpg',

                'name'=>'Áo sơ mi tay ngắn nẹp tay',

                'price'=>'290000'

            ],
            [ 'categoryId'=>'2','description'=>'Quần dài có túi hai bên sườn hiện đại',
                'images'=>'https://product.hstatic.net/1000122945/product/9_5a7b2b5cf6d44a3a8f1c73ea10bc7fc4_master.jpg',

                'name'=>'Quần dài thô suông ống bèo',

                'price'=>'450000',

            ],
            ['categoryId'=>'1','description'=>'Áo khoác vải gió hai lớp chắn gió, giữ nhiệt tốt, kiểu dáng trẻ trung',
                'images'=>'https://pnf.vn/wp-content/uploads/2017/12/AKD.183-4.jpg',
                'name'=>'Áo khoác gió vàng nhạt',
                'price'=>'789000'


            ],
            ['categoryId'=>'1','description'=>'Áo sơ mi ca rô chìm màu xanh ngọc mềm mịn thoáng mát',
                'images'=>'https://pnf.vn/wp-content/uploads/2018/03/SMC.130-4.jpg',
                'name'=>'Sơ  mi ca rô xanh ngọc',
                'price'=>'529000'


            ],
            [ 'categoryId'=>'2','description'=>'Chân váy phù hợp với môi trường công sở',
                'images'=>'https://20again.vn/media/catalog/product/cache/26/thumbnail/9df78eab33525d08d6e5fb8d27136e95/o/1/o118n-jda1123-mxx1-0.jpg',

                'name'=>'Chân váy dài xếp ly',

                'price'=>'385000'

            ],
            ['categoryId'=>'1','description'=>'Áo vest chất liệu cao cấp kiểu dáng trẻ trung lịch lãm',
                'images'=>'https://pnf.vn/wp-content/uploads/2018/05/AVL.313-3.jpg',
                'name'=>'Áo vest màu ghi sáng',

                'price'=>'1190000'


            ],
            ['categoryId'=>'1','description'=>'Quần sooc kiểu dáng trẻ trung',
                'images'=>'https://pnf.vn/wp-content/uploads/2018/07/QSD.061-3-683x1024.jpg',
                'name'=>'Quần sooc kaki vàng nhạt',

                'price'=>'459000'


            ],
            [ 'categoryId'=>'3','description'=>'Áo khoác nón cực dễ thương cho các bé ngày mưa',
                'images'=>'https://www.bexinhshop.vn/image/data/30-6-2018/akhaockhunglong1.jpg',
                'name'=>'Áo khoác nón da cá khủng long',

                'price'=>'129000'


            ],
            ['categoryId'=>'1','description'=>'Quần dài kiểu dáng trẻ trung chất liệu co dãn',
                'images'=>'https://pnf.vn/wp-content/uploads/2018/07/QKK.068-2.jpg',
                'name'=>'Quần kaki tím than',

                'price'=>'529000'


            ],
            ['categoryId'=>'3','description'=>'Giày búp bê dễ thương phù hợp để các bé đi học, đi chơi...',
                'images'=>'https://www.bexinhshop.vn/image/data/03-08-2014/PHỤ%20KIỆN%202/bupbe9.jpg',
                'name'=>'Giày búp bê nơ đính hạt',

                'price'=>'154000',


            ],
            [

                'categoryId'=>'3','description'=>'Ba lô cho bé đi học, đi chơi...',
                'images'=>'https://www.bexinhshop.vn/image/data/19-3-2017/balobongchaydo.jpg',
                'name'=>'Ba lô bóng chày',
                'price'=>'195000'


            ],
            ['categoryId'=>'3','description'=>'Áo thun phối yếm thun giả quần jeans',
                'images'=>'https://www.bexinhshop.vn/image/data/quan-ao-so-sinh-2017/setyemjeanGAI1.jpg',
                'name'=>'Set áo thun kèm quần yếm',

                'price'=>'175000'


            ],
            ['categoryId'=>'2','description'=>'Quần dài có túi hai bên sườn hiện đại',
                'images'=>'https://product.hstatic.net/1000122945/product/9_5a7b2b5cf6d44a3a8f1c73ea10bc7fc4_master.jpg',

                'name'=>'Quần dài thô suông ống bèo',

                'price'=>'450000'

            ],
            ['categoryId'=>'3','description'=>'Chất liệu thoáng mát, kèm nón dễ thương',
                'images'=>'https://www.bexinhshop.vn/image/data/16-3-2016/boboibegaicarodo.jpg',
                'name'=>'Đồ bơi 2 mảnh cho bé gái',

                'price'=>'219000'


            ],
            ['categoryId'=>'3','description'=>'Mũ lưỡi trai chấm bi mặt cười',
                'images'=>'https://www.bexinhshop.vn/image/data/03-08-2014/phụ%20kiện%2002/nón/DSC_0289.jpg',
                'name'=>'Mũ lưỡi trai cho bé',

                'price'=>'68000'


            ],
            [
                'categoryId'=>'5',
                'description'=>'Pyjama với nhiều loại động vật dễ thương',
                'images'=>'https://image2.tin247.com/pictures/2015/02/01/nco1422757103.jpg',
                'name'=>'Pyjama con thú',

                'price'=>'150000'


            ],
            ['categoryId'=>'4',
                'description'=>'Áo khoác gió mỏng nhiều màu',
                'images'=>'https://wetrek.vn/pic/products/Ao-khoac-gio-mong-TNF-7847-Xanh-la_HasThumb.jpg',
                'name'=>'Áo khoác gió mỏng',

                'price'=>'240000'


            ],
            [
                'categoryId'=>'4',
                'description'=>'Khăn rằn chuyên dùng để đi phượt',
                'images'=>'https://wetrek.vn/pic/products/Khan-Camp_635131962011884497_HasThumb.jpg',
                'name'=>'Khăn rằn Campuchia',

                'price'=>'49000'


            ],
            [
                'categoryId'=>'2',
                'description'=>'Quần dài có túi hai bên sườn hiện đại',
                'images'=>'https://product.hstatic.net/1000122945/product/9_5a7b2b5cf6d44a3a8f1c73ea10bc7fc4_master.jpg',
                'name'=>'Quần dài thô suông ống bèo',
                'price'=>'450000'


            ]
        ]);
    }
}
