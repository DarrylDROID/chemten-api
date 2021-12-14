<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Level 1 Lavoisier
        // No 1
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Lavoisier',
            'exercise_level' => "Level 1",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Hukum ini berbunyi “Dalam setiap reaksi kimia, jumlah massa zat-zat sebelum dan sesudah reaksi adalah sama”. Hal ini dikemukakan oleh ….',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 2
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Lavoisier',
            'exercise_level' => "Level 1",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Terdapat dua senyawa yang pertama adalah Na dengan massa 3,315 gram direaksikan dengan senyawa kedua Cl dengan massa 4,970 gram. Hitung Massa NaCl sesudah direaksikan … gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 3
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Lavoisier',
            'exercise_level' => "Level 1",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Terdapat dua senyawa yang pertama adalah Hg dengan massa 530 gram direaksikan dengan senyawa kedua O dengan massa 42,4 gram. Hitung Massa 2HgO sesudah direaksikan … gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 4
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Lavoisier',
            'exercise_level' => "Level 1",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Terdapat dua senyawa yang pertama adalah H dengan massa 0,6 gram direaksikan dengan senyawa kedua O dengan massa 1,2 gram. Hitung Massa H2O sesudah direaksikan … gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 5
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Lavoisier',
            'exercise_level' => "Level 1",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Terdapat senyawa HCl dengan massa 36,5 gram. Diketahui senyawa H memiliki massa 0,6 gram. Maka massa senyawa Cl adalah … gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 6
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Lavoisier',
            'exercise_level' => "Level 1",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Terdapat dua senyawa yang pertama adalah H dengan massa 0,6 gram direaksikan dengan senyawa kedua Br dengan massa 79,9 gram. Hitung Massa HBr sesudah direaksikan … gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 7
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Lavoisier',
            'exercise_level' => "Level 1",
            'exercise_image' => 'Photo',
            'exercise_description' => '    Mg	  +       Br         ->   MgBr
            93 gram + 79,9 gram 	-> … kilogram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 8
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Lavoisier',
            'exercise_level' => "Level 1",
            'exercise_image' => 'Photo',
            'exercise_description' => '    N	  +       O        ->   NO2
            28 gram + 1,2 gram 	-> … gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 9
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Lavoisier',
            'exercise_level' => "Level 1",
            'exercise_image' => 'Photo',
            'exercise_description' => '    S	  +       O        ->   SO2
            53 x 10^-4 kilogram + 12 x 10^-4 kilogram -> … gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 10
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Lavoisier',
            'exercise_level' => "Level 1",
            'exercise_image' => 'Photo',
            'exercise_description' => '      C	  +       Cl       ->   CCl4
            2 x 10^-3 kilogram + … gram	-> 7,9 gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 2 Proust
        // No 1
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Proust',
            'exercise_level' => "Level 2",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Hukum ini berbunyi “Perbandingan massa unsur-unsur penyusun suatu senyawa selalu tetap”. Hal ini dikemukakan oleh ….',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 2
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Proust',
            'exercise_level' => "Level 2",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Untuk membentuk FeS, 28 gram belerang bereaksi dengan besi. Berapakah massa mula-mula Besi yang bereaksi membentuk Besi (II) sulfida (FeS) jika pada akhir reaksi terdapat 3 gram besi? (Ar Fe = 56; S = 32)',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 3
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Proust',
            'exercise_level' => "Level 2",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Tentukan perbandingan massa nitrogen dan oksigen dalam NO2 jika diketahui Ar.N = 14 dan Ar.=16',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 4
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Proust',
            'exercise_level' => "Level 2",
            'exercise_image' => 'Photo',
            'exercise_description' => '8 gram tembaga dapat bereaksi dengan 4 gram belerang membentuk tembaga sulfida. jika direaksikan 20 gram tembaga dengan 20 gram belerang, hitunglah tembaga sulfida yang terbentuk ?',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 5
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Proust',
            'exercise_level' => "Level 2",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Dalam ruang tertutup 75 gram karbon dibakar secara sempurna dalam 250 gram oksigen menghasilkan karbondioksida. Perbandingan massa karbon dan oksigen dalam CO2 adalah 3 : 8. Berapa massa CO2 yang dihasilkan ?',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 6
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Proust',
            'exercise_level' => "Level 2",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Diketahui, besi (Fe) dan belerang (S) yang menyusun senyawa besi sulfida (FeS) memiliki perbandingan massa sebanyak 7:4. Diperlukan 28 gram besi (Fe) untuk menyusun senyawa besi sulfida (FeS) tanpa ada sisa reaktan, maka hitunglah massa belerang (S) yang diperlukan ?',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 7
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Proust',
            'exercise_level' => "Level 2",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Kawat tembaga dibakar sehingga terbentuk tembaga oksida (CuO). Perhatikan reaksi berikut.
            32g Cu(s) + 8g O2(g) → 40g CuO(s)
            Berapa perbandingan massa unsur Cu : O dalam senyawa CuO ?',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 8
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Proust',
            'exercise_level' => "Level 2",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Berapa gram NH3 yang terbentuk dari 14 g N2 dan 14 g H2? Diketahui NH3 tersusun atas 82% N dan 18% H.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 9
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Proust',
            'exercise_level' => "Level 2",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Perbandingan unsur nitrogen dan hidrogen pada pembentukan amonia adalah 14 : 3. Jika 28 gram gas nitrogen dan 9 gram gas hidrogen direaksikan, maka massa amonia yang terbentuk dan banyak zat yang bersisa berturut-turut adalah ….',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 10
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Proust',
            'exercise_level' => "Level 2",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Perbandingan massa karbon terhadap oksigen dalam senyawa CO2 adalah 3 : 8. Jika digunakan 18 gram unsur C dan 40 gram unsur O maka massa senyawa CO2 yang terbentuk dan sisa pereaksi berturut-turut adalah ….',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 3 Dalton
        // No 1
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Dalton',
            'exercise_level' => "Level 3",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Hukum ini berbunyi “Jika ada dua senyawa yang dibentuk dari dua unsur yang sama dan massa satu unsur pada kedua senyawa itu sama maka massa unsur yang lainnya mempunyai angka perbandingan yang sederhana dan bulat”. Hal ini dikemukakan oleh ….',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 2
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Dalton',
            'exercise_level' => "Level 3",
            'exercise_image' => 'Photo',
            'exercise_description' => 'A dan B bereaksi membentuk dua senyawa. Untuk senyawa pertama 1,4 gram A bereaksi dengan 3,2 gram B. Untuk senyawa kedua 0,7 gram A bereaksi dengan 0,4 gram B. Berapakah perbandingan unsur A dalam senyawa pertama terhadap unsur A dalam senyawa kedua?',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 3
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Dalton',
            'exercise_level' => "Level 3",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Unsur A dan B bereaksi membentuk dua senyawa yang berbeda. 6,62 gram senyawa pertama mengandung 5,29 gram unsur A dan 14,3 gram senyawa kedua mengandung 1,6 gram unsur B. Berapakah perbandingan unsur A dalam senyawa pertama terhadap unsur A dalam senyawa kedua?',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 4
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Dalton',
            'exercise_level' => "Level 3",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Dua senyawa terbentuk dari unsur fosfor dan oksigen. Salah satu senyawa terdiri dari 0,845 gram fosfor dan 0,655 gram oksigen. Jika senyawa lain terdiri dari 1,69 gram fosfor, massa oksigen yang diperlukan untuk memenuhi hukum perbandingan berganda adalah  . . . . . gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 5
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Dalton',
            'exercise_level' => "Level 3",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Unsur P dan Q dapat membentuk dua senyawa. Senyawa I memiliki Massa P yaitu 3,2 gram dan Massa Q 3,2 gram. Senyawa II memiliki Massa P yaitu 0,8 gram dan Massa Q 1,2 gram. Menurut Hukum Kelipatan Perbandingan dari Dalton, perbandingan massa Q pada senyawa I dan massa Q pada senyawa II adalah . . . .',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 6
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Dalton',
            'exercise_level' => "Level 3",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Unsur x dan y membentuk dua senyawa. Senyawa 1 mengandung 60 gram x dan 320 gram senyawa y. Senyawa 2 mengandung 45 gram x dan 120 gram y. Berapa perbandingan massa unsur sesuai hukum Dalton ?',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 7
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Dalton',
            'exercise_level' => "Level 3",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Unsur O dan Q membentuk 3 senyawa. Senyawa 1 mengandung 15 gram O dan 80 gram Q. Senyawa 2 mengandung 45 gram O dan 120 gram Q. Senyawa 3 mengandung 135 gram O dan 180 gram Q. Berapa perbandingan berganda massa unsur sesuai hukum Dalton ?',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 8
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Dalton',
            'exercise_level' => "Level 3",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Unsur A dan B membentuk dua senyawa. Senyawa 1 mengandung 45 gram A dan 80 gram B. Senyawa 2 mengandung 135 gram A dan 720 gram B. Berapa perbandingan massa unsur sesuai hukum Dalton ?',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 9
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Dalton',
            'exercise_level' => "Level 3",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Terdapat dua senyawa. Senyawa 1 mengandung massa nitrogen 28 gram dan massa oksigen 32 gram. Senyawa 2 mengandung massa nitrogen 28 gram dan massa oksigen 64 gram. Tentukan perbandingan massa oksigen sesuai hukum Dalton !',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 10
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Dalton',
            'exercise_level' => "Level 3",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Terdapat dua senyawa yang pertama NO dan yang kedua NO2. Senyawa NO memiliki massa N sebanyak 21 gram dan O sebanyak 24 gram. Senyawa NO2 memiliki massa N sebanyak 28 gram dan massa O sebanyak 64 gram. Jika massa N pada senyawa NO disamakan dengan massa N pada NO2 yaitu 28, maka massa O pada NO adalah . . . .',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 4 Gay Lussac
        // No 1
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Gay Lussac',
            'exercise_level' => "Level 4",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Hukum ini berbunyi “Pada temperatur dan tekanan yang sama, perbandingan volum gas-gas yang bereaksi dan gas hasil reaksi merupakan bilangan bulat dan sederhana”. Hal ini dikemukakan oleh ….',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 2
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Gay Lussac',
            'exercise_level' => "Level 4",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Sepuluh liter gas hidrogen bromida terurai sebagai berikut,
            2 HBr(g) → H2(g) + Br2(g)
            Pada suhu dan tekanan yang sama, tentukan volume gas hidrogen dan volume gas bromin yang dihasilkan!',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 3
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Gay Lussac',
            'exercise_level' => "Level 4",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Lima liter gas N2O5 terurai sesuai reaksi berikut.
            2 N2O5(g) → 2 N2(g) + 5 O2(g)
            Pada suhu dan tekanan yang sama, tentukan volume gas nitrogen dan volume gas oksigen yang terbentuk !',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 4
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Gay Lussac',
            'exercise_level' => "Level 4",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Sejumlah gas pada mulanya mempunyai tekanan P dan suhu T. Jika gas tersebut mengalami proses isokhorik sehingga tekanannya menjadi 4 kali tekanan semula maka Suhu gas sekarang…',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 5
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Gay Lussac',
            'exercise_level' => "Level 4",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Gas berada di dalam bejana tertutup pada mulanya bersuhu 27°C. Agar tekanannya menjadi 2 kali semula, maka suhu ruangan tersebut adalah… ',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 6
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Gay Lussac',
            'exercise_level' => "Level 4",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Sebanyak 4 L CH4 dibakar habis dengan gas oksigen sesuai persamaan reaksi:
            CH4(g) + 2 O2(g)→ CO2(g) + 2 H2O(l)
       Pada suhu dan tekanan yang sama. Volume gas CO2 yang dihasilkan adalah ....',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 7
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Gay Lussac',
            'exercise_level' => "Level 4",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Berapakah volume nitrogen yang bereaksi dengan 6 liter hidrogen (pada suhu dan tekanan yang sama) untuk membentuk amonia berdasarkan reaksi berikut : ',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 8
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Gay Lussac',
            'exercise_level' => "Level 4",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Karbon disulfida bereaksi dengan oksigen berdasarkan reaksi berikut:
            CS2(g) + 3O2(g) → CO2(g) + 2SO2(g)
            2 L karbon disulfida dibakar dengan 10 L oksigen, kemudian semua gas dialirkan ke dalam larutan NaOH berlebih. Berapakah persentase gas yang tersisa setelah dialirkan ke dalam NaOH?',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 9
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Gay Lussac',
            'exercise_level' => "Level 4",
            'exercise_image' => 'Photo',
            'exercise_description' => '12 liter gas nitrogen direaksikan dengan sejumlah gas hidrogen menghasilkan amonia. Berapa volume gas hidrogen yang diperlukan serta amonia yang dihasilkan bila kondisi reaksi (suhu dan tekanan) dijaga konstan?
        N2(g) + 3H2(g) → 2NH3(g)',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 10
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Gay Lussac',
            'exercise_level' => "Level 4",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Diketahui sebuah gas memiliki tekanan awal sejumlah P, sementara suhu awalnya adalah T. Kemudian, gas tersebut mengalami perubahan tekanan menjadi 6P.
        Berapakah suhu gas tersebut sekarang ?
        N2(g) + 3H2(g) → 2NH3(g)',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 5 Avogadro
        // No 1
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Avogadro',
            'exercise_level' => "Level 5",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Hukum ini berbunyi “Pada temperatur dan tekanan yang sama, semua gas pada volum yang sama mengandung jumlah molekul yang sama pula”. Hal ini dikemukakan oleh ….',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 2
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Avogadro',
            'exercise_level' => "Level 5",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Pada tekanan dan suhu yang sama, diketahui sebuah persamaan reaksi seperti berikut

            N2(g) + 3H2(g) = 2NH3(g)
            
            Tentukan berapa perbandingan jumlah volume gas yang terlibat dalam reaksi tersebut!',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 3
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Avogadro',
            'exercise_level' => "Level 5",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Pada suatu tabung 5 L terdapat 2 x 10^22 molekul gas karbon dioksida. Pada suhu dan tekanan yang sama, berapakah jumlah molekul gas nitrogen dalam tabung bervolume 4 L?',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 4
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Avogadro',
            'exercise_level' => "Level 5",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Suatu hidrokarbon sebanyak 5 liter dibakar sempurna, dimana dibutuhkan 15 L oksigen dan dihasilkan 10 L karbon dioksida. Tentukanlah rumus molekul untuk hidrokarbon tersebut!',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 5
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Avogadro',
            'exercise_level' => "Level 5",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Suatu tabung pada P dan T tertentu diisi gas argon (Ar = 18) hingga penuh dan ditimbang massanya. Tabung itu dikosongkan dan kemudian diisi dengan gas etana, (C2H6) (ArC2H6=30) hingga penuh pada P dan T yang sama. Jika dalam gas etana tersebut mengandung 2x10^23 atom, berapakah massa gas argon tersebut ?',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 6
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Avogadro',
            'exercise_level' => "Level 5",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Dinitrogen pentoksida (N2O5) mengalami reaksi dekomposisi berdasarkan reaksi berikut. 

            N2O5(g) -> NO2(g) + O2(g) (belum setara)
            
            Pada reaksi tersebut hanya 75% N2O5 yang terurai dan diperoleh 1,5 L gas O2. Tentukan volume awal N2O5! (dalam L) ?
            ',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 7
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Avogadro',
            'exercise_level' => "Level 5",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Diketahui suatu gas X2 pada suhu ruang (25°C) dan tekanan 760 cmHg memiliki volume 12 L. Bila diketahui pula gas lainnya, Y2 berada pada suhu yang sama namun dengan konsentrasi 2 kali lebih besar pada tekanan 5 atm, berapakah volume gas Y2 yang akan teramati ?',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 8
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Avogadro',
            'exercise_level' => "Level 5",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Seorang ilmuwan mengamati reaksi pembakaran di dalam sebuah reaktor yang ia rancang secara khusus. Pada percobaan pertama ia membakar LPG yang mengandung 85% (v/v) butana sebanyak 30 L menghasilkan 132 gram karbondioksida. Apabila pada percobaan kedua ia menggunakan LNG (75% butana v/v) berapa banyak yang ia perlukan untuk menghasilkan karbondioksida yang sama banyak?',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 9
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Avogadro',
            'exercise_level' => "Level 5",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Berapakah volume 23 gram NO2 (Ar N = 14, Ar O = 16) pada keadaan suhu 273°K dengan tekanan 1 atm ?',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 10
        DB::table('exercise')->insert([
            'exercise_topic' => 'Hukum Avogadro',
            'exercise_level' => "Level 5",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Berapakah jumlah mol 33,6 liter gas H2 pada suhu O°C dan tekanan 76 cmHg ?',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
