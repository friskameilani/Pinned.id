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
                'answer' => "Berikut adalah size chart yang dapat digunakan sebagai acuan dalam pembuatan kaos dan kemeja: KAOS PRIA: S = 43 x 63; M = 52 x 70; L = 55 x 73; XL = 57 x 75; XXL = 60 x 79; XXXL = 63 x 82;
                KAOS WANITA: S = 39 x 55; M = 42 x 58; L = 45 x 61; XL = 48 x 64; XXL = 51 x 67; XXXL = 64 x 70;
                KEMEJA PRIA: S = 48 x 66; M = 51 x 69; L = 54 x 72; XL = 57 x 75; XXL = 60 x 78; XXXL = 63 x 81;
                KEMEJA WANITA: S = 45 x 63; M = 48 x 66; L = 51 x 69; XL = 54 x 72; XXL = 57 x 75; XXXL = 60 x 78;
                
                Pengukuran dapat dilakukan secara custom, yakni dengan menginput besar detail ukuran pakaian yang diinginkan seperti: Lebar Dada, Lebar Pinggang, Lebar Pinggul, Panjang Lengan dan Tinggi Badan (untuk pembuatan kemeja/kaos) dan Tinggi Kaki, Lebar Pinggang, Lebar Pinggul, Lingkar Betis, dan Lingkar Paha (untuk pembuatan rok/celana)",
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
