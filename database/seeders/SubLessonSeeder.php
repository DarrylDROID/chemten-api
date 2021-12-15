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
            'sublesson_topic' => 'Hukum Lavoisier',
            'sublesson_description' => 'Hukum kekekalan massa atau dikenal juga sebagai hukum Lomonosov-Lavoisier adalah suatu hukum 
            yang menyatakan massa dari suatu sistem tertutup akan konstan meskipun terjadi berbagai macam proses di dalam sistem 
            tersebut (dalam sistem tertutup Massa zat sebelum dan sesudah reaksi adalah sama (tetap/konstan). Pernyataan yang umum 
            digunakan untuk menyatakan hukum kekekalan massa adalah massa dapat berubah bentuk tetapi tidak dapat diciptakan atau 
            dimusnahkan. Untuk suatu proses kimiawi di dalam suatu sistem tertutup, massa dari reaktan harus sama dengan massa produk. 
            Hukum kekekalan massa digunakan secara luas dalam bidang-bidang seperti kimia, teknik kimia, mekanika, dan dinamika fluida. 
            Berdasarkan ilmu relativitas spesial, kekekalan massa adalah pernyataan dari kekekalan energi. Massa partikel yang tetap 
            dalam suatu sistem ekuivalen dengan energi momentum pusatnya. Pada beberapa peristiwa radiasi, dikatakan bahwa terlihat 
            adanya perubahan massa menjadi energi. Hal ini terjadi ketika suatu benda berubah menjadi energi kinetik/energi potensial 
            dan sebaliknya. Karena massa dan energi berhubungan, dalam suatu sistem yang mendapat/mengeluarkan energi, massa dalam 
            jumlah yang sangat sedikit akan tercipta/hilang dari sistem. Namun, dalam hampir seluruh peristiwa yang melibatkan perubahan 
            energi, hukum kekekalan massa dapat digunakan karena massa yang berubah sangatlah sedikit.
            Contoh soal hukum kekekalan massa
            Hukum kekekalan massa berlaku pada reaksi kimia, di mana massa pereaksi harus sama dengan massa produk. Hukum kekekalan massa dapat terlihat pada reaksi pembentukan hidrogen dan oksigen dari air. Bila hidrogen dan oksigen dibentuk dari 36 g air, maka bila reaksi berlangsung hingga seluruh air habis, akan diperoleh massa campuran produk hidrogen dan oksigen sebesar 36 g. Bila reaksi masih menyisakan air, maka massa campuran hidrogen, oksigen dan air yang tidak bereaksi tetap sebesar 36 g.

            Air    -> Hidrogen + Oksigen (+ Air)
            (36 g)               (36 g)',
            'sublesson_image' => 'Photo',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_sublesson')->insert([
            'lesson_id' => '2',
            'sublesson_topic' => 'Hukum Proust',
            'sublesson_description' => 'Dalam kimia, hukum perbandingan tetap atau hukum Proust (diambil dari nama kimiawan Prancis 
            Joseph Proust) adalah hukum yang menyatakan bahwa suatu senyawa kimia terdiri dari unsur-unsur dengan perbandingan massa 
            yang selalu tepat sama.[1] Dengan kata lain, setiap sampel suatu senyawa memiliki komposisi unsur-unsur yang tetap. 
            Misalnya, air terdiri dari 8/9 massa oksigen dan 1/9 massa hidrogen. Bersama dengan hukum perbandingan berganda 
            (hukum Dalton), hukum perbandingan tetap adalah hukum dasar stoikiometri.
            Contoh soal hukum perbandingan tetap
            Kawat tembaga dibakar sehingga terbentuk tembaga oksida (CuO). Perhatikan reaksi berikut.

            32g Cu(s) + 8g O2(g) → 40g CuO(s)
                8     +     2    :  10  
            
            Maka perbandingannya adalah 8 + 2 : 10',
            'sublesson_image' => 'Photo',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_sublesson')->insert([
            'lesson_id' => '3',
            'sublesson_topic' => 'Hukum Dalton',
            'sublesson_description' => 'Dalam kimia, hukum perbandingan berganda adalah salah satu hukum dasar stoikiometri. 
            Hukum ini juga kadang-kadang disebut hukum Dalton (diambil dari nama kimiawan Inggris John Dalton), tetapi biasanya hukum 
            Dalton merujuk kepada hukum tekanan parsial. Hukum ini menyatakan bahwa apabila dua unsur bereaksi membentuk dua atau lebih 
            senyawa, maka perbandingan berat salah satu unsur yang bereaksi dengan berat tertentu dari unsur yang lain pada kedua senyawa 
            selalu merupakan perbandingan bilangan bulat sederhana.[1] Misalnya karbon bereaksi dengan oksigen membentuk karbondioksida 
            (CO2) dan karbonmonoksida (CO). Jika jumlah karbon yang bereaksi pada masing-masing adalah 1 gram, maka diamati bahwa pada 
            karbonmonoksida yang terbentuk akan terdapat 1,33 gram oksigen dan 2,67 gram oksigen pada karbondioksida. Perbandingan massa 
            oksigen mendekati 2:1,yang perbandingan bilangan bulat sederhana, mematuhi hukum perbandingan berganda. Pengamatan serupa 
            juga terjadi pada reaksi-reaksi lain, seperti hidrogen dan oksigen membentuk air (H2O) dan hidrogen peroksida (H2O2). 
            Jika hidrogen yang bereaksi masing-masing 1 gram, H2O yang terbentuk akan mengandung 4 gram oksigen, dan 8 gram pada H2O2.
            Contoh soal hukum perbandingan ganda
            A dan B bereaksi membentuk dua senyawa. Untuk senyawa pertama 1,4 gram A bereaksi dengan 3,2 gram B. 
            Untuk senyawa kedua 0,7 gram A bereaksi dengan 0,4 gram B. Berapakah perbandingan unsur A dalam senyawa pertama terhadap unsur A dalam senyawa kedua?
                          A           B
            Senyawa I  1.4 gram   3,2 gram
            Semyawa II 0,7 gram   0,4 gram
            Perbandingan A pada senyawa I dan II adalah :

            A : B = 1,4/0,7 : 3,2/0,4
                  = 14/7 : 32/4 -> x 1/x 8
                  = 14/56 : 32/32
            Perbandingan A = 14 : 56
                           = 1 : 4 
            Jadi, perbandingan unsur A dalam senyawa pertama terhadap unsur A dalam senyawa kedua adalah 1 : 4.',
            'sublesson_image' => 'Photo',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_sublesson')->insert([
            'lesson_id' => '4',
            'sublesson_topic' => 'Hukum Gay Lussac',
            'sublesson_description' => 'Hukum perbandingan volume atau hukum Gay Lussac adalah sebuah hukum kimia yang menyatakan 
            bahwa sejumlah gas yang direaksikan dengan volume konstan atau tetap akan berbanding lurus dengan nilai suhunya.
            Saat suhu gas dalam sebuah wadah yang kaku dinaikkan, maka tekanan dari gas tersebut akan ikut meningkat. 
            Meningkatnya energi kinetik dalam wadah tersebut mengakibatkan molekul-molekul gas bertabrakan dengan dinding wadah 
            yang memiliki gaya lebih kuat. Kondisi tersebut menyebabkan tekanan yang lebih besar lagi. Seorang ahli kimia asal 
            Perancis bernama lengkap Joseph Gay-Lussac menyebutkan bahwa ada hubungan antara tekanan sebuah gas dengan suhu tertentu. 
            Hukum Gay Lussac memiliki kemiripan dengan hukum Charles, yang membedakan antara dua hukum tersebut adalah wadahnya saja. 
            Dalam percobaannya, Gay Lussac menggunakan wadah yang bersifat kaku dan keras Sementara itu, Charles menggunaan wadah yang 
            fleksibel.
            Contoh soal hukum perbandingan volume

            Sepuluh liter gas hidrogen bromida terurai sebagai berikut,
            2 HBr(g) → H2(g) + Br2(g)
            Pada suhu dan tekanan yang sama, tentukan volume gas hidrogen yang dihasilkan!
            
            Volume gas hidrogen
            Volume H2/volume HBr = Koefisien H2/Koefisien HBr
            Volume H2 = Koefisien H2/Koefisien HBr x Volume HBr
                      = 1/2 x 10 L
                      = 5 L',
            'sublesson_image' => 'Photo',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_sublesson')->insert([
            'lesson_id' => '5',
            'sublesson_topic' => 'Hukum Avogadro',
            'sublesson_description' => 'Hukum Avogadro (terkadang dirujuk sebagai hipotesis Avogadro atau prinsip Avogadro) adalah 
            suatu hukum gas eksperimen yang mengaitkan volume gas dengan jumlah zat gas tersebut.[1] Hukum ini merupakan kasus hukum 
            gas ideal yang spesifik. Hukum ini berbunyi: Hukum Avogadro menyatakan bahwa, "Gas-gas yang memiliki volume yang sama, 
            pada suhu dan tekanan yang sama, memiliki jumlah molekul yang sama pula."
            Untuk massa dari suatu gas ideal tertentu, volume sebanding dengan jumlah (mol) gas tersebut jika diukur pada suhu dan 
            tekanan konstan. Hukum ini dinamai dari Amedeo Avogadro yang, pada tahun 1811, menyatakan hipotesis bahwa dua sampel gas 
            ideal, dengan volume yang sama dan pada suhu dan tekanan sama, memiliki jumlah molekul yang sama. Sebagai contoh volume 
            sebanding dari hidrogen dan nitrogen molekuler mengandung jumlah molekul yang sama ketika berada pada suhu dan tekanan 
            yang sama, serta diamati berperilaku seperti gas ideal. Pada prakteknya, gas-gas nyata memperlihatkan penyimpangan kecil dari 
            perilaku ideal dan hukum tersebut hanya merupakan pendekatan saja, tetapi tetap berguna bagi para peneliti.
            Contoh soal hukum avogadro
            
            Pada tekanan dan suhu yang sama, diketahui sebuah persamaan reaksi seperti berikut

            N2(g) + 3H2(g) = 2NH3(g)
            
            Tentukan berapa perbandingan jumlah volume gas yang terlibat dalam reaksi tersebut!
            nN2 : nH2 = nH3
            2 : 3 = 2',
            'sublesson_image' => 'Photo',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
