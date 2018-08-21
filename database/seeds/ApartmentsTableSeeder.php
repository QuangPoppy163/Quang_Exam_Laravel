<?php

use Illuminate\Database\Seeder;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('apartments')->truncate();
        \Illuminate\Support\Facades\DB::table('apartments')->insert([
            [
                'ten'=>'Chung cu LandMark81',
                'diachi'=>'Quan 1',
                'gia'=>'200000',
                'thongtinchung'=>'View nhin ra song Sai Gon',
                'thongtinchitiet'=>'Chung cu dep nhat Sai Gon',
                'anh'=>'https://blog.trangdangtin.com/wp-content/uploads/2018/03/TOP-20-trang-%C4%91%C4%83ng-tin-b%E1%BA%A5t-%C4%91%E1%BB%99ng-s%E1%BA%A3n-mi%E1%BB%85n-ph%C3%AD-hi%E1%BB%87u-qu%E1%BA%A3.jpg'
            ],[
                'ten'=>'ParkCity',
                'diachi'=>'Ha Dong',
                'gia'=>'200000',
                'thongtinchung'=>'Nha giua cong vien',
                'thongtinchitiet'=>'Dien tich nho',
                'anh'=>'http://www.parkcityhanoi.com.vn/assets/img/pchanoi-hero.jpg'
            ],[
                'ten'=>'Landmark 72',
                'diachi'=>'Ha Noi',
                'gia'=>'300000',
                'thongtinchung'=>'Toa nha cao nhi Viet Nam',
                'thongtinchitiet'=>'Can ho cao cap',
                'anh'=>'http://vngo.vn/uploads/source/khach-san/CalidasLandmark/78929009.jpg'
            ],[
                'ten'=>'Lotte',
                'diachi'=>'Lieu Giai',
                'gia'=>'100000',
                'thongtinchung'=>'Nha o cao cap',
                'thongtinchitiet'=>'Khong gian dep',
                'anh'=>'http://lottemart.com.vn/wp-content/uploads/2017/03/lotte-ha-noi-center.jpg'
            ],[
                'ten'=>'Chung cu HimLam',
                'diachi'=>'Sai Gon',
                'gia'=>'200000',
                'thongtinchung'=>'Nha dep',
                'thongtinchitiet'=>'Noi that dep',
                'anh'=>'http://lottemart.com.vn/wp-content/uploads/2017/03/lotte-ha-noi-center.jpg'
            ],[
                'ten'=>'Chung cu Anna',
                'diachi'=>'Ha Noi',
                'gia'=>'400000',
                'thongtinchung'=>'Nha rong',
                'thongtinchitiet'=>'Gan khu trung tam',
                'anh'=>'http://vngo.vn/uploads/source/khach-san/CalidasLandmark/78929009.jpg'
            ],[
                'ten'=>'To hop Wonderland',
                'diachi'=>'Saei Gon',
                'gia'=>'5000000',
                'thongtinchung'=>'Chung cu cao cap',
                'thongtinchitiet'=>'Nha dep nhung dat',
                'anh'=>'http://vngo.vn/uploads/source/khach-san/CalidasLandmark/78929009.jpg'
            ],[
                'ten'=>'Chung cu River',
                'diachi'=>'Ha Noi',
                'gia'=>'150000',
                'thongtinchung'=>'Nha dep',
                'thongtinchitiet'=>'Nha gan song',
                'anh'=>'http://newstarland.com/wp-content/uploads/2015/12/00052.jpg'
            ],[
                'ten'=>'Chung cu PinkGarden',
                'diachi'=>'Sai Gon',
                'gia'=>'100000',
                'thongtinchung'=>'Nha co vuon',
                'thongtinchitiet'=>'Vuon nhieu cay',
                'anh'=>'http://newstarland.com/wp-content/uploads/2015/12/00052.jpg'
            ],[
                'ten'=>'Chung cu Loop',
                'diachi'=>'Ha Noi',
                'gia'=>'150000',
                'thongtinchung'=>'Nha dep cao cap',
                'thongtinchitiet'=>'To hop vui choi',
                'anh'=>'http://www.parkcityhanoi.com.vn/assets/img/pchanoi-hero.jpg'
            ],[
                'ten'=>'CoCo Bay',
                'diachi'=>'Ha Noi',
                'gia'=>'100000',
                'thongtinchung'=>'Nha o cao cap',
                'thongtinchitiet'=>'Nha gan song',
                'anh'=>'http://www.parkcityhanoi.com.vn/assets/img/pchanoi-hero.jpg'
            ],[
                'ten'=>'Chung cu JamJa',
                'diachi'=>'Sai Gon',
                'gia'=>'120000',
                'thongtinchung'=>'Nha o phuc hop',
                'thongtinchitiet'=>'Gan trung tam',
                'anh'=>'http://www.parkcityhanoi.com.vn/assets/img/pchanoi-hero.jpg'
            ],[
                'ten'=>'Chung cu Plasma',
                'diachi'=>'Sai Gon',
                'gia'=>'130000',
                'thongtinchung'=>'Nha o cao cap',
                'thongtinchitiet'=>'Chung cu co rap chieu phim',
                'anh'=>'http://lottemart.com.vn/wp-content/uploads/2017/03/lotte-ha-noi-center.jpg'
            ],[
                'ten'=>'Chung cu MaMa',
                'diachi'=>'Ha Noi',
                'gia'=>'100000',
                'thongtinchung'=>'Nha o Tu do',
                'thongtinchitiet'=>'Thich o cho nao thi o',
                'anh'=>'http://lottemart.com.vn/wp-content/uploads/2017/03/lotte-ha-noi-center.jpg'
            ],[
                'ten'=>'Chung cu ASD',
                'diachi'=>'Sai Gon',
                'gia'=>'140000',
                'thongtinchung'=>'Nha o tap trung',
                'thongtinchitiet'=>'Co cho vui choi',
                'anh'=>'http://lottemart.com.vn/wp-content/uploads/2017/03/lotte-ha-noi-center.jpg'
            ],[
                'ten'=>'Nha o Rice',
                'diachi'=>'Ha Noi',
                'gia'=>'230000',
                'thongtinchung'=>'Khu nha o',
                'thongtinchitiet'=>'Nha o tap trung',
                'anh'=>'http://lottemart.com.vn/wp-content/uploads/2017/03/lotte-ha-noi-center.jpg'
            ],[
                'ten'=>'Chung cu Moon',
                'diachi'=>'Sai Gon',
                'gia'=>'210000',
                'thongtinchung'=>'Nha o hinh tron',
                'thongtinchitiet'=>'Chung cu dep',
                'anh'=>'http://lottemart.com.vn/wp-content/uploads/2017/03/lotte-ha-noi-center.jpg'
            ],[
                'ten'=>'Chung cu NightOut',
                'diachi'=>'Ha Noi',
                'gia'=>'160000',
                'thongtinchung'=>'Nha o cao cap',
                'thongtinchitiet'=>'Chung cu dat nhat',
                'anh'=>'http://lottemart.com.vn/wp-content/uploads/2017/03/lotte-ha-noi-center.jpg'
            ],[
                'ten'=>'Chung cu Lobster',
                'diachi'=>'Sai Gon',
                'gia'=>'110000',
                'thongtinchung'=>'Nha o hinh con tom',
                'thongtinchitiet'=>'Duoc an tom suot',
                'anh'=>'http://lottemart.com.vn/wp-content/uploads/2017/03/lotte-ha-noi-center.jpg'
            ], [
                'ten'=>'Chung cu HinHin',
                'diachi'=>'Ha Noi',
                'gia'=>'170000',
                'thongtinchung'=>'Chung cu cao cap',
                'thongtinchitiet'=>'Chung cu gia dat',
                'anh'=>'http://lottemart.com.vn/wp-content/uploads/2017/03/lotte-ha-noi-center.jpg'
            ]
        ]);
    }
}
