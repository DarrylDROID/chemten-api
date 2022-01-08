<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SubLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kim10_sublesson')->insert([
            'lesson_id' => '1',
            'sublesson_topic' => 'Pengantar',
            'sublesson_description' => '<blockquote><ul><li><strong>Hukum kekekalan massa </strong>atau dikenal juga sebagai hukum Lomonosov-Lavoisier adalah suatu hukum yang menyatakan massa dari suatu sistem tertutup akan konstan meskipun terjadi berbagai macam proses di dalam sistem tersebut (dalam sistem tertutup Massa zat sebelum dan sesudah reaksi adalah sama (tetap/konstan).&nbsp;</li><li>Pernyataan yang umum digunakan untuk menyatakan hukum kekekalan massa adalah massa dapat berubah bentuk tetapi tidak dapat diciptakan atau dimusnahkan.&nbsp;</li><li>Untuk suatu proses kimiawi di dalam suatu sistem tertutup, massa dari reaktan harus sama dengan massa produk.&nbsp;</li><li>Hukum kekekalan massa digunakan secara luas dalam bidang-bidang seperti kimia, teknik kimia, mekanika, dan dinamika fluida.</li><li>Berdasarkan ilmu relativitas spesial, kekekalan massa adalah pernyataan dari kekekalan energi.&nbsp;</li><li>Massa partikel yang tetap dalam suatu sistem ekuivalen dengan energi momentum pusatnya.&nbsp;</li><li>Pada beberapa peristiwa radiasi, dikatakan bahwa terlihat adanya perubahan massa menjadi energi.&nbsp;</li><li>Hal ini terjadi ketika suatu benda berubah menjadi energi kinetik/energi potensial dan sebaliknya.&nbsp;</li><li>Karena massa dan energi berhubungan, dalam suatu sistem yang mendapat/mengeluarkan energi, massa dalam jumlah yang sangat sedikit akan tercipta/hilang dari sistem.&nbsp;</li><li>Namun, dalam hampir seluruh peristiwa yang melibatkan perubahan energi, hukum kekekalan massa dapat digunakan karena massa yang berubah sangatlah sedikit.&nbsp;</li><li>Contoh soal hukum kekekalan massa&nbsp;</li></ul>Hukum kekekalan massa berlaku pada reaksi kimia, di mana massa pereaksi harus sama dengan massa produk. Hukum kekekalan massa dapat terlihat pada reaksi pembentukan hidrogen dan oksigen dari air. Bila hidrogen dan oksigen dibentuk dari 36 g air, maka bila reaksi berlangsung hingga seluruh air habis, akan diperoleh massa campuran produk hidrogen dan oksigen sebesar 36 g. Bila reaksi masih menyisakan air, maka massa campuran hidrogen, oksigen dan air yang tidak bereaksi tetap sebesar 36 g.<br>&nbsp;<br><em>Air -&gt; Hidrogen + Oksigen (+ Air)&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(36 g)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(36 g)</em></blockquote>',
            'sublesson_image' => 'lavoisier.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_sublesson')->insert([
            'lesson_id' => '1',
            'sublesson_topic' => 'Observasi',
            'sublesson_description' => '<ol><li>Sediakan larutan KI pada labu erlenmeyer besar dan Pb(NO3)2 pada tabung reaksi kecil yang diikat dengan benang.&nbsp;</li><li>Masukkan tabung reaksi berisi larutan Pb(NO3)2 dengan hati-hati ke dalam labu seperti pada gambar (Hati-hati kedua larutan jangan tercampur).&nbsp;</li><li>Sumbat labu kemudian timbang.&nbsp;</li><li>Miringkan tabung reaksi sampai kedua larutan bereaksi.&nbsp;</li><li>Timbang kembali seluruh alat dan hasil reaksi tersebut.</li></ol>',
            'sublesson_image' => 'observasi_lavoisier.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_sublesson')->insert([
            'lesson_id' => '1',
            'sublesson_topic' => 'Latihan',
            'sublesson_description' => '<div>Berikut ini tabel reaksi antara tembaga dan belerang (sulfur) yang menghasilkan tembaga(II) sulfida berdasarkan Hukum Kekekalan Massa.&nbsp;<br>Salin tabel, lengkapi, dan tulis persamaan reaksinya.</div>',
            'sublesson_image' => 'latihan_lavoisier.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_sublesson')->insert([
            'lesson_id' => '2',
            'sublesson_topic' => 'Pengantar',
            'sublesson_description' => '<ul><li>Dalam kimia,<strong> hukum perbandingan tetap </strong>atau<strong> hukum Proust</strong> (diambil dari nama kimiawan Prancis Joseph Proust) adalah hukum yang menyatakan bahwa suatu senyawa kimia terdiri dari unsur-unsur dengan perbandingan massa yang selalu tepat sama.</li><li>Dengan kata lain, setiap sampel suatu senyawa memiliki komposisi unsur-unsur yang tetap.&nbsp;</li><li>Misalnya, air terdiri dari 8/9 massa oksigen dan 1/9 massa hidrogen.&nbsp;</li><li>Bersama dengan hukum perbandingan berganda (hukum Dalton), hukum perbandingan tetap adalah hukum dasar stoikiometri.&nbsp;</li><li>Contoh soal hukum perbandingan tetap&nbsp;</li></ul><div>Kawat tembaga dibakar sehingga terbentuk tembaga oksida (CuO).&nbsp;<br>Perhatikan reaksi berikut.&nbsp;<br><br>32g Cu(s) + 8g O2(g) → 40g CuO(s)&nbsp;<br>&nbsp; &nbsp; &nbsp;8&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;+&nbsp; &nbsp; &nbsp; 2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; &nbsp; 10&nbsp;<br><br>Maka perbandingannya adalah 8 + 2 : 10</div>',
            'sublesson_image' => 'proust.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_sublesson')->insert([
            'lesson_id' => '2',
            'sublesson_topic' => 'Observasi',
            'sublesson_description' => '<div>Perhatikan data massa besi dan belerang pada senyawanya yaitu besi belerang atau besi sulfida berikut ini.</div>',
            'sublesson_image' => 'observasi_proust.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_sublesson')->insert([
            'lesson_id' => '2',
            'sublesson_topic' => 'Latihan',
            'sublesson_description' => '<div>Logam natrium jika direaksikan dengan gas oksigen akan dihasilkan natrium oksida. Data beberapa percobaannya adalah sebagai berikut.&nbsp;<br>a. Tentukan perbandingan massa natrium dengan massa oksigen pembentuk senyawa pada setiap percobaan.&nbsp;<br>b. Apakah data tersebut sesuai dengan hukum perbandingan tetap? Jelaskan!&nbsp;<br>c. Tulis reaksi pada percobaan tersebut!</div>',
            'sublesson_image' => 'latihan_proust.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_sublesson')->insert([
            'lesson_id' => '3',
            'sublesson_topic' => 'Pengantar',
            'sublesson_description' => '<ul><li>Dalam kimia, <strong>hukum perbandingan berganda</strong> adalah salah satu hukum dasar stoikiometri.&nbsp;</li><li>Hukum ini juga kadang-kadang disebut <strong>hukum Dalton</strong> (diambil dari nama kimiawan Inggris John Dalton), tetapi biasanya hukum Dalton merujuk kepada hukum tekanan parsial.&nbsp;</li><li>Hukum ini menyatakan bahwa apabila dua unsur bereaksi membentuk dua atau lebih senyawa, maka perbandingan berat salah satu unsur yang bereaksi dengan berat tertentu dari unsur yang lain pada kedua senyawa selalu merupakan perbandingan bilangan bulat sederhana.</li><li>Misalnya karbon bereaksi dengan oksigen membentuk karbondioksida (CO2) dan karbonmonoksida (CO).&nbsp;</li><li>Jika jumlah karbon yang bereaksi pada masing-masing adalah 1 gram, maka diamati bahwa pada karbonmonoksida yang terbentuk akan terdapat 1,33 gram oksigen dan 2,67 gram oksigen pada karbondioksida.&nbsp;</li><li>Perbandingan massa oksigen mendekati 2:1, yang perbandingan bilangan bulat sederhana, mematuhi hukum perbandingan berganda.&nbsp;</li><li>Pengamatan serupa juga terjadi pada reaksi-reaksi lain, seperti hidrogen dan oksigen membentuk air (H2O) dan hidrogen peroksida (H2O2).&nbsp;</li><li>Jika hidrogen yang bereaksi masing-masing 1 gram, H2O yang terbentuk akan mengandung 4 gram oksigen, dan 8 gram pada H2O2.&nbsp;</li><li>Contoh soal hukum perbandingan ganda&nbsp;</li></ul><div>A dan B bereaksi membentuk dua senyawa. Untuk senyawa pertama 1,4 gram A bereaksi dengan 3,2 gram B. Untuk senyawa kedua 0,7 gram A bereaksi dengan 0,4 gram B. Berapakah perbandingan unsur A dalam senyawa pertama terhadap unsur A dalam senyawa kedua?<br>&nbsp;<br><em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;A&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; B <br>Senyawa I&nbsp; &nbsp; &nbsp;1.4 gram&nbsp; &nbsp; &nbsp; &nbsp; 3,2 gram <br>Senyawa II&nbsp; &nbsp; &nbsp;0,7 gram&nbsp; &nbsp; &nbsp; &nbsp;0,4 gram<br><em> </em><br>Perbandingan A pada senyawa I dan II adalah :&nbsp;<br><br>A : B = 1,4/0,7 : 3,2/0,4&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; = 14/7 : 32/4 -&gt; x 1/x 8&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; = 14/56 : 32/32&nbsp;<br><br>Perbandingan A = 14 : 56 = 1 : 4&nbsp;<br><br>Jadi, perbandingan unsur A dalam senyawa pertama terhadap unsur A dalam senyawa kedua adalah 1 : 4.</div>',
            'sublesson_image' => 'john_dalton.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_sublesson')->insert([
            'lesson_id' => '3',
            'sublesson_topic' => 'Observasi',
            'sublesson_description' => '<div>Dari data ternyata perbandingan massa oksigen yang terikat oleh karbon dengan massa yang sama yaitu 1 : 2.&nbsp;<br>Perbandingan ini merupakan perbandingan yang sederhana.</div>',
            'sublesson_image' => 'observasi_dalton.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_sublesson')->insert([
            'lesson_id' => '3',
            'sublesson_topic' => 'Latihan',
            'sublesson_description' => '<div>Perbandingan massa N dan O dalam senyawa NO dan NO2 adalah sebagai berikut.&nbsp;<br>Buktikan apakah kedua rumus senyawa tersebut memenuhi Hukum Kelipatan Perbandingan?</div>',
            'sublesson_image' => 'latihan_dalton.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_sublesson')->insert([
            'lesson_id' => '4',
            'sublesson_topic' => 'Pengantar',
            'sublesson_description' => '<ul><li><strong>Hukum perbandingan volume</strong> atau <strong>hukum Gay Lussac</strong> adalah sebuah hukum kimia yang menyatakan bahwa sejumlah gas yang direaksikan dengan volume konstan atau tetap akan berbanding lurus dengan nilai suhunya.&nbsp;</li><li>Saat suhu gas dalam sebuah wadah yang kaku dinaikkan, maka tekanan dari gas tersebut akan ikut meningkat.&nbsp;</li><li>Meningkatnya energi kinetik dalam wadah tersebut mengakibatkan molekul-molekul gas bertabrakan dengan dinding wadah yang memiliki gaya lebih kuat. Kondisi tersebut menyebabkan tekanan yang lebih besar lagi.&nbsp;</li><li>Seorang ahli kimia asal Perancis bernama lengkap Joseph Gay-Lussac menyebutkan bahwa ada hubungan antara tekanan sebuah gas dengan suhu tertentu.&nbsp;</li><li>Hukum Gay Lussac memiliki kemiripan dengan hukum Charles, yang membedakan antara dua hukum tersebut adalah wadahnya saja.&nbsp;</li><li>Dalam percobaannya, Gay Lussac menggunakan wadah yang bersifat kaku dan keras Sementara itu, Charles menggunaan wadah yang fleksibel.&nbsp;</li><li>Contoh soal hukum perbandingan volume&nbsp;</li></ul><div>Sepuluh liter gas hidrogen bromida terurai sebagai berikut,&nbsp;<br><br>2 HBr(g) → H2(g) + Br2(g)&nbsp;<br><br>Pada suhu dan tekanan yang sama, tentukan volume gas hidrogen yang dihasilkan!<br><br>Volume gas hidrogen&nbsp;<br><br>Volume H2/volume HBr = Koefisien H2/Koefisien HBr&nbsp;<br>Volume H2 = Koefisien H2/Koefisien HBr x Volume HBr&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 1/2 x 10 L&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 5 L</div>',
            'sublesson_image' => 'gay_lussac.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_sublesson')->insert([
            'lesson_id' => '4',
            'sublesson_topic' => 'Observasi',
            'sublesson_description' => '<div>Dalton berhasil menyelidiki hubungan massa antara zat-zat yang membentuk suatu senyawa.&nbsp;Pada tahun 1808 Joseph Louis Gay Lussac dari Perancis menyelidiki hubungan antara volum gas-gas dalam suatu reaksi kimia.&nbsp;Ia menemukan bahwa pada suhu dan tekanan yang sama, satu volum gas oksigen bereaksi dengan dua volum gas hidrogen menghasilkan dua volum uap air</div>',
            'sublesson_image' => 'observasi_gaylussac.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_sublesson')->insert([
            'lesson_id' => '4',
            'sublesson_topic' => 'Latihan',
            'sublesson_description' => '<div>Tentukan:&nbsp;<br>a. volum gas O2 yang diperlukan;&nbsp;<br>b. volum gas CO2 yang dihasilkan;&nbsp;<br>c. volum uap air yang dihasilkan.</div>',
            'sublesson_image' => 'latihan_gaylussac.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_sublesson')->insert([
            'lesson_id' => '5',
            'sublesson_topic' => 'Pengantar',
            'sublesson_description' => '<ul><li><strong>Hukum Avogadro </strong>(terkadang dirujuk sebagai hipotesis Avogadro atau prinsip Avogadro) adalah suatu hukum gas eksperimen yang mengaitkan volume gas dengan jumlah zat gas tersebut.</li><li>Hukum ini merupakan kasus hukum gas ideal yang spesifik.&nbsp;</li><li>Hukum ini berbunyi: Hukum Avogadro menyatakan bahwa, "Gas-gas yang memiliki volume yang sama, pada suhu dan tekanan yang sama, memiliki jumlah molekul yang sama pula."&nbsp;</li><li>Untuk massa dari suatu gas ideal tertentu, volume sebanding dengan jumlah (mol) gas tersebut jika diukur pada suhu dan tekanan konstan.&nbsp;</li><li>Hukum ini dinamai dari Amedeo Avogadro yang, pada tahun 1811, menyatakan hipotesis bahwa dua sampel gas ideal, dengan volume yang sama dan pada suhu dan tekanan sama, memiliki jumlah molekul yang sama.&nbsp;</li><li>Sebagai contoh volume sebanding dari hidrogen dan nitrogen molekuler mengandung jumlah molekul yang sama ketika berada pada suhu dan tekanan yang sama, serta diamati berperilaku seperti gas ideal.&nbsp;</li><li>Pada prakteknya, gas-gas nyata memperlihatkan penyimpangan kecil dari perilaku ideal dan hukum tersebut hanya merupakan pendekatan saja, tetapi tetap berguna bagi para peneliti.&nbsp;</li><li>Contoh soal hukum avogadro&nbsp;</li></ul><div>Pada tekanan dan suhu yang sama, diketahui sebuah persamaan reaksi seperti berikut&nbsp;<br><br>N2(g) + 3H2(g) = 2NH3(g)&nbsp;<br><br>Tentukan berapa perbandingan jumlah volume gas yang terlibat dalam reaksi tersebut!&nbsp;<br>nN2 : nH2 = nH3&nbsp;<br>&nbsp; 2&nbsp; &nbsp; : &nbsp; 3&nbsp; &nbsp;= &nbsp; 2</div>',
            'sublesson_image' => 'avogadro.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_sublesson')->insert([
            'lesson_id' => '5',
            'sublesson_topic' => 'Observasi',
            'sublesson_description' => '<div>Data percobaan pengukuran volum pada suhu dan tekanan standar. Dari data tersebut ternyata dalam volum yang sama dan keadaan yang sama terdapat jumlah molekul yang sama pula.&nbsp;Hipotesis ini dijadikan suatu hukum, yang dikenal sebagai Hukum Avogadro.</div>',
            'sublesson_image' => 'observasi_avogadro.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_sublesson')->insert([
            'lesson_id' => '5',
            'sublesson_topic' => 'Latihan',
            'sublesson_description' => '<div>Pada suhu dan tekanan tertentu dalam 1 L gas O2 terdapat 3 x 10^22 molekul.&nbsp;<br>Berapa jumlah molekul yang terdapat di dalam 2 liter gas CO2 pada suhu dan tekanan tersebut?</div>',
            'sublesson_image' => 'latihan_avogadro.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
