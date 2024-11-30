<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
                DB::table('users')->insert([
                    ["name" => "AdminEdward","email"=>"edward007@binus.ac.id","password"=>Hash::make("adminEdward"),"phone"=>"081289434641","role"=>"admin"],
                    ["name" => "AdminAnsel","email"=>"ansellino@binus.ac.id","password"=>Hash::make("adminAnsel"),"phone"=>"081229574140","role"=>"admin"],
                    ["name" => "Member001","email"=>"member001@gmail.com","password"=>Hash::make("member001"),"phone"=>"089509772528","role"=>"member"],
                    ["name" => "Member002","email"=>"member002@gmail.com","password"=>Hash::make("member002"),"phone"=>"089509772528","role"=>"member"]
                ]);
                DB::table('categories')->insert([
                    ["name" => "CSR Program"],
                    ["name" => "Research and Dedication"],
                    ["name" => "Product and Tour"],
                    ["name" => "News and Blog"],
                    ["name" => "Update Website"],
                    ["name" => "Others"]
                ]);
                DB::table('articles')->insert([
                    ["user_id" => "1",
                     "category_id"=>"6",
                     "title"=>"copyright",
                     "description"=>"dibuat oleh ansel dan edward",
                     "image"=>"About-Us.jpg",
                     "created_at"=>"2024-11-29 08:25:19",
                     "updated_at"=>"2024-11-29 08:25:19"]
                ]);
                DB::table('articles')->insert([
                    ["user_id" => "1",
                     "category_id"=>"4",
                     "title"=>"Eksplorasi Mangrove",
                     "description"=>"Ikuti tur berpemandu untuk menjelajahi hutan mangrove, belajar tentang keanekaragaman hayati, dan memahami pentingnya konservasi mangrove.",
                     "image"=>"explorasi-mangrove.jpg",
                     "created_at"=>"2024-11-29 08:25:19",
                     "updated_at"=>"2024-11-29 08:25:19"]
                ]);
                DB::table('articles')->insert([
                    ["user_id" => "1",
                     "category_id"=>"4",
                     "title"=>"Petualangan Laut",
                     "description"=>"Rasakan ketenangan alam laut dan hutan mangrove, cocok untuk pecinta alam dan fotografi. Ada juga paket snorkeling dan lainnya untuk pecinta laut.",
                     "image"=>"petualangan-laut.jpg",
                     "created_at"=>"2024-11-29 08:25:19",
                     "updated_at"=>"2024-11-29 08:25:19"]
                ]); DB::table('articles')->insert([
                    ["user_id" => "1",
                     "category_id"=>"4",
                     "title"=>"Pengalaman Edukasi",
                     "description"=>"Ambil bagian dalam kegiatan seperti penanaman mangrove dan pelatihan tentang praktik berkelanjutan yang mendukung lingkungan dan masyarakat.",
                     "image"=>"pengalaman-edukasi.jpg",
                     "created_at"=>"2024-11-29 08:25:19",
                     "updated_at"=>"2024-11-29 08:25:19"]
                ]);
                DB::table('articles')->insert([
                    ["user_id" => "2",
                     "category_id"=>"2",
                     "title"=>"open to all research & dedication initiatives!",
                     "description"=>"Lembur Mangrove Patikang di Desa Citeureup adalah kawasan yang kaya akan potensi untuk kegiatan penelitian dan pengabdian masyarakat. Sebagai desa wisata berbasis konservasi dan pemberdayaan, kami membuka peluang kolaborasi dengan universitas dan institusi akademik untuk bersama-sama menciptakan dampak positif melalui ilmu pengetahuan dan aksi nyata.

Lembur Mangrove percaya bahwa sinergi antara dunia akademik dan komunitas lokal dapat menjadi fondasi yang kuat untuk menciptakan perubahan berkelanjutan. Kami berkomitmen menyediakan fasilitas dan akses yang mendukung keberhasilan program penelitian dan pengabdian di kawasan ini.

Jika universitas atau institusi Anda tertarik untuk bekerja sama, silakan hubungi kami melalui kontak resmi kami untuk informasi lebih lanjut. Bersama, mari kita tingkatkan pemahaman dan kontribusi terhadap pelestarian lingkungan dan kesejahteraan masyarakat di Lembur Mangrove.",
                     "image"=>"research.jpg",
                     "created_at"=>"2024-11-29 08:25:19",
                     "updated_at"=>"2024-11-29 08:25:19"]
                ]);

        Schema::enableForeignKeyConstraints();

    }
}
