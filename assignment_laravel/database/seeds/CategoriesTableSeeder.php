<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('categories')->truncate();
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                'name'=>'Quần áo nam',
                'description'=>'Quần áo và phụ kiện cho nam giới',
                'images'=>'https://pnf.vn/wp-content/uploads/2018/05/AVL.313-3.jpg'
            ],
            [
                'name'=>'Quần áo nữ',
                'description'=>'Quần áo và phụ kiện cho nữ giới',
                'images'=>'https://pnf.vn/wp-content/uploads/2018/05/AVL.313-3.jpg'
            ],
            [
                'name'=>'Quần áo trẻ em',
                'description'=>'Quần áo và phụ kiện cho trẻ em',
                'images'=>'https://www.bexinhshop.vn/image/data/30-6-2018/akhaockhunglong1.jpg'
            ],
            [
                'name'=>'Quần áo đi dã ngoại',
                'description'=>'Quần áo và phụ kiện để đi dã ngoại',
                'images'=>'https://pnf.vn/wp-content/uploads/2018/05/AVL.313-3.jpg'
            ],
            [
                'name'=>'Quần áo ngủ',
                'description'=>'Quần áo ngủ',
                'images'=>'https://image2.tin247.com/pictures/2015/02/01/nco1422757103.jpg'
            ]
        ]);

    }
}
