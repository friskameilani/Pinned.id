<?php

use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            
            [
                'ask' => 'Bagaimana cara pengukurannya?',
                'answer' => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. ",
            ],

            [
                'ask' => 'Bagaimana cara pemesanan?',
                'answer' => "Terdapat dua cara pemesanan produk, yakni melalui 'Katalog' dan 'Pesanan Khusus'.",
            ],

            [
                'ask' => 'Bagaimana cara pesan produk melalui Katalog?',
                'answer' => "1. Register / login terlebih dahulu,
                2. Pilih menu 'Katalog' dan pilih produk yang ingin dipesan, 
                3. Lihat rincian dari produk,
                4. Klik tombol 'Pesan',
                5. Isi form pemesanan,
                6. Buat pesanan,
                7. Membayar produk dan lakukan konfirmasi pembayaran",
            ],

            [
                'ask' => "Bagaimana cara pesan produk melalui Pesanan Khusus?",
                'answer' => "1. Register / login terlebih dahulu,
                2. Cari penjahit yang diinginkan melalui menu 'Katalog',
                3. Lihat rincian dari produk yang dibuat oleh penjahit tujuan,
                4. Lakukan komunikasi dengan penjahit (opsional),
                5. Pilih menu 'Pesanan Khusus' untuk memesan produk,
                6. Isi form pemesanan,
                7. Buat pesanan,
                8. Membayar produk dan lakukan konfirmasi pembayaran",
            ],

            [
                'ask' => 'Bagaimana cara melakukan konfirmasi pembayaran?',
                'answer' => "1. Register / login terlebih dahulu,
                2. Pastikan Anda sudah pernah membuat pesanan sebelumnya,
                3. Pilih menu 'Riwayat Pesanan',
                4. Pilih pesanan yang ingin dibayar,
                5. Klik tombol 'Konfirmasi Pembayaran',
                6. Mengisi form konfirmasi pembayaran,
                7. Kirimkan konfirmasi pembayaran",
            ],

            [
                'ask' => 'Berapa lama pengerjaannya?',
                'answer' => "Pemesanan akan dikerjakan setelah melakukan konfirmasi pembayaran. Estimasi pengerjaan pesanan melalui 'Katalog' adalah sekitar 7-14 hari. Sedangkan estimasi pengerjaan 'Pesanan Khusus' akan disesuaikan dengan kesepakatan yang telah dibuat antara pelanggan dan penjahit.",
            ],

            [
                'ask' => 'Bagaimana cara pengirimannya?',
                'answer' => "Pengiriman dilakukan atas kesepakatan antara pelanggan dan penjahit. Biaya pengiriman ditanggung oleh pelanggan.",
            ]
        ]);        
    }
}
