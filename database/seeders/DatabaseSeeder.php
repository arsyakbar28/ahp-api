<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kost;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Kost::create(
            [
                'name' => 'Kost Rumah Rizal Taman Sidoarjo',
                'address' => 'Jln. Gilang 2 no. 19 ds. Gilang kec Taman kab Sidoarjo',
                'price' => 375000,
                'number_of_rooms' => 10,
                'room_size' => 9,
                'rating' => 4.0,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Rizki Tipe A Taman Sidoarjo',
                'address' => 'Desa Sadang, Gg Waras No. MR 7 RT 05 RW 02 kec. Taman',
                'price' => 400000,
                'number_of_rooms' => 16,
                'room_size' => 12,
                'rating' => 4.3,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Azzahra 1 Tipe A1 Taman Sidoarjo',
                'address' => 'RT III RW V Bringin Wetan, Bringinbendo kec. Taman',
                'price' => 700000,
                'number_of_rooms' => 10,
                'room_size' => 12,
                'rating' => 4.1,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Terima Tipe Vvip Taman Sidoarjo',
                'address' => 'jln raya trosobo kec. Taman',
                'price' => 550000,
                'number_of_rooms' => 13,
                'room_size' => 12,
                'rating' => 4.1,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Yuli Tipe VIP Taman Sidoarjo',
                'address' => 'jln patimura kletek kec. Taman',
                'price' => 550000,
                'number_of_rooms' => 13,
                'room_size' => 12,
                'rating' => 4.2,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Agatha Taman Sidoarjo',
                'address' => 'jln.Kalijaten timur, kalijaten kec. Taman',
                'price' => 850000,
                'number_of_rooms' => 9,
                'room_size' => 21,
                'rating' => 4.5,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Casa',
                'address' => 'Jl. Nangka I/II Gg. D No. 9 Geluran Taman',
                'price' => 310000,
                'number_of_rooms' => 18,
                'room_size' => 12,
                'rating' => 4.2
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Pak Sutopo 2',
                'address' => 'Jl. Rambutan Rt. 06 Rw. 02 No. 17 Geluran, Kec. Taman',
                'price' => 300000,
                'number_of_rooms' => 13,
                'room_size' => 9,
                'rating' => 3.9,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Teddy',
                'address' => 'Jalan Nangka 1 Meloko Selatan Gg. 2 no. 02.RT 37 RW 03 Kel. Geluran Kec. Taman',
                'price' => 400000,
                'number_of_rooms' => 7,
                'room_size' => 12,
                'rating' => 3.8,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Ruslan',
                'address' => 'Jl. Swadaya I Desa Tawangsari RT 4 RW 1 Kec Taman Sidoarjo',
                'price' => 400000,
                'number_of_rooms' => 8,
                'room_size' => 12,
                'rating' => 4.4,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Rumah Jati VVIP',
                'address' => 'Jl. Raya Geluran J no 34, Geluran, Kec. Taman',
                'price' => 1000000,
                'number_of_rooms' => 15,
                'room_size' => 12,
                'rating' => 4.8,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Bu Lilik',
                'address' => 'Jl. Tawangsari no. 23 B, RT. 02/ RW. 01, Kelurahan Tawangsari, Kecamatan Taman',
                'price' => 650000,
                'number_of_rooms' => 11,
                'room_size' => 15,
                'rating' => 4.9,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Bu Made Wiyatra Tipe B',
                'address' => 'Bringin Wetan RT 08 RW 06 Desa Bringin Bendo, Taman',
                'price' => 600000,
                'number_of_rooms' => 17,
                'room_size' => 21,
                'rating' => 4.4,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Bu Made Wiyarta Tipe C Taman Sidoarjo',
                'address' => 'Bringin Wetan no.74A RT 08 RW 06 Desa Bringin Bendo, Taman',
                'price' => 900000,
                'number_of_rooms' => 17,
                'room_size' => 25,
                'rating' => 4.8,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Tawangsari Tipe VVIP Taman Sidoarjo',
                'address' => 'Gg. Sami Rukun blok kavling mushola No.38, Tawangsari,Taman',
                'price' => 600000,
                'number_of_rooms' => 12,
                'room_size' => 12,
                'rating' => 4.5,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Cemara Gilang Permai Taman',
                'address' => 'Gang Lebar, no 85, RT.07, RW.02, Kecamatan Taman',
                'price' => 550000,
                'number_of_rooms' => 14,
                'room_size' => 20,
                'rating' => 4.6,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Echi Tipe A Taman Sidoarjo',
                'address' => 'Jalan Kalibader No.67, Kecamatan Taman, Kabupaten Sidoarjo',
                'price' => 450000,
                'number_of_rooms' => 14,
                'room_size' => 9,
                'rating' => 4.3,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Bu Denik Mistiana Sepanjang',
                'address' => 'Sawunggaling I gang kavlingan RT 15 RW 3 No D6, Jemundo Taman',
                'price' => 450000,
                'number_of_rooms' => 8,
                'room_size' => 9,
                'rating' => 4.4,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Miauw Tipe Standart Taman',
                'address' => 'Perumahan town house f no 4 sepanjang',
                'price' => 600000,
                'number_of_rooms' => 23,
                'room_size' => 12,
                'rating' => 4.8,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Lindawati Kletek Taman',
                'address' => 'Jl. Kletek III No.146 Taman Sidoarjo',
                'price' => 550000,
                'number_of_rooms' => 14,
                'room_size' => 8,
                'rating' => 4.3,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Mama Standard Taman Sidoarjo',
                'address' => 'jln kalijaten Gg. II No.37a RT 06 RW 01, Kalijaten, Kec. Taman',
                'price' => 400000,
                'number_of_rooms' => 12,
                'room_size' => 9,
                'rating' => 4.4,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Kenanga Taman Sidoarjo',
                'address' => 'Kalijaten Timur, Kalijaten, Kec. Taman',
                'price' => 400000,
                'number_of_rooms' => 23,
                'room_size' => 9,
                'rating' => 4.6,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Mezanine Taman Sidoarjo',
                'address' => 'Sadang rt 02 rw 01 Taman',
                'price' => 1000000,
                'number_of_rooms' => 16,
                'room_size' => 21,
                'rating' => 4.8,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Sholikin Taman Sidoarjo',
                'address' => 'Kav. Kalibader, Korlap 4, RT 21/RW 03, Kel. Kalijaten, Taman',
                'price' => 650000,
                'number_of_rooms' => 18,
                'room_size' => 12,
                'rating' => 4.6,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Pak Yo Bakso Taman',
                'address' => 'Jl. Beringin Kulon No.10, RT.07/RW.04, Bringin Wetan, Taman',
                'price' => 375000,
                'number_of_rooms' => 9,
                'room_size' => 12,
                'rating' => 4.3
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Arief Syariah Taman',
                'address' => 'Jl. Sawunggaling VI, Balongbiru Rt 13 Rw 04, Sadang, Kec. Taman',
                'price' => 450000,
                'number_of_rooms' => 8,
                'room_size' => 20,
                'rating' => 4.5
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Diana Tipe Executive Taman',
                'address' => 'Jl. Pattimura IV Gg. Kasuari, RT.14/RW.06, Kec. Taman',
                'price' => 550000,
                'number_of_rooms' => 11,
                'room_size' => 12,
                'rating' => 4.4,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Juna 2 Bringinbendo Tipe A Taman',
                'address' => 'Jl. Bringin Bendo No.2, Bringin Kulon, Bringinbendo, Kec. Taman',
                'price' => 500000,
                'number_of_rooms' => 15,
                'room_size' => 20,
                'rating' => 4.8,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Vira Taman Sidoarjo',
                'address' => 'Bringin Wetan RT 009 RW 006, Bringinbendo, Kec. Taman',
                'price' => 450000,
                'number_of_rooms' => 5,
                'room_size' => 24.5,
                'rating' => 4.6,
            ]
        );
        Kost::create(
            [
                'name' => 'Kost Bapak Susiyanto Taman',
                'address' => 'Jl. Tawangsari Barat RT 14 RW 03, Taman',
                'price' => 450000,
                'number_of_rooms' => 17,
                'room_size' => 9,
                'rating' => 4.9,
            ]
        );
    }
}
