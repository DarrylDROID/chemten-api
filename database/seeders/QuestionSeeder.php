<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class QuestionSeeder extends Seeder
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
        DB::table('kim10_question')->insert([
            'exercise_id' => '1',
            'question_topic' => "Hukum Lavoisier",
            'question_description' => 'Hukum ini berbunyi “Dalam setiap reaksi kimia, jumlah massa zat-zat sebelum dan sesudah reaksi adalah sama”. Hal ini dikemukakan oleh ….',
            'qchoice1' => 'Avogadro',
            'qchoice2' => 'Proust',
            'qchoice3' => 'Dalton',
            'qchoice4' => 'Lavoisier',
            'correctanswer' => 'Lavoisier',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 2
        DB::table('kim10_question')->insert([
            'exercise_id' => '1',
            'question_topic' => "Hukum Lavoisier",
            'question_description' => 'Terdapat dua senyawa yang pertama adalah Na dengan massa 3,315 gram direaksikan dengan senyawa kedua Cl dengan massa 4,970 gram. Hitung Massa NaCl sesudah direaksikan … gram',
            'qchoice1' => '1,655 gram',
            'qchoice2' => '8,285 gram',
            'qchoice3' => '4,970 gram',
            'qchoice4' => '3,315 gram',
            'correctanswer' => '8,285 gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 3
        DB::table('kim10_question')->insert([
            'exercise_id' => '1',
            'question_topic' => "Hukum Lavoisier",
            'question_description' => 'Terdapat dua senyawa yang pertama adalah Hg dengan massa 530 gram direaksikan dengan senyawa kedua O dengan massa 42,4 gram. Hitung Massa 2HgO sesudah direaksikan … gram',
            'qchoice1' => '572,4 gram',
            'qchoice2' => '530 gram',
            'qchoice3' => '1104,8 gram',
            'qchoice4' => '574,2 gram',
            'correctanswer' => '572,4 gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 4
        DB::table('kim10_question')->insert([
            'exercise_id' => '1',
            'question_topic' => "Hukum Lavoisier",
            'question_description' => 'Terdapat dua senyawa yang pertama 
            adalah H dengan massa 0,6 gram direaksikan dengan senyawa kedua O 
            dengan massa 1,2 gram. Hitung Massa H2O sesudah direaksikan … gram',
            'qchoice1' => '1,8 gram',
            'qchoice2' => '2,4 gram',
            'qchoice3' => '1,2 gram',
            'qchoice4' => '0,6 gram',
            'correctanswer' => '1,8 gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 5
        DB::table('kim10_question')->insert([
            'exercise_id' => '1',
            'question_topic' => "Hukum Lavoisier",
            'question_description' => 'Terdapat senyawa HCl dengan massa 36,5 gram. Diketahui senyawa H memiliki massa 0,6 gram. Maka massa senyawa Cl adalah … gram',
            'qchoice1' => '37,1 gram',
            'qchoice2' => '6,13 gram',
            'qchoice3' => '35,9 gram',
            'qchoice4' => '21,9 gram',
            'correctanswer' => '35,9 gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 6
        DB::table('kim10_question')->insert([
            'exercise_id' => '1',
            'question_topic' => "Hukum Lavoisier",
            'question_description' => 'Terdapat dua senyawa yang pertama adalah H dengan massa 0,6 gram direaksikan dengan senyawa kedua Br dengan massa 79,9 gram. Hitung Massa HBr sesudah direaksikan … gram',
            'qchoice1' => '80,5 gram',
            'qchoice2' => '85,9 gram',
            'qchoice3' => '79,3 gram',
            'qchoice4' => '73,9 gram',
            'correctanswer' => '80,5 gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 7
        DB::table('kim10_question')->insert([
            'exercise_id' => '1',
            'question_topic' => "Hukum Lavoisier",
            'question_description' => '   Mg	  +       Br         ->   MgBr
            93 gram + 79,9 gram 	-> … kilogram',
            'qchoice1' => '172,9 gram',
            'qchoice2' => '17,29 gram',
            'qchoice3' => '0,1729 kilogram',
            'qchoice4' => '1,729 kilogram',
            'correctanswer' => '0,1729 kilogram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 8
        DB::table('kim10_question')->insert([
            'exercise_id' => '1',
            'question_topic' => "Hukum Lavoisier",
            'question_description' => '    N	  +       O        ->   NO2
            28 gram + 1,2 gram 	-> … gram',
            'qchoice1' => '0,292 kilogram',
            'qchoice2' => '29,2 gram',
            'qchoice3' => '29,2 kilogram',
            'qchoice4' => '2,92 gram',
            'correctanswer' => '29,2 gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 9
        DB::table('kim10_question')->insert([
            'exercise_id' => '1',
            'question_topic' => "Hukum Lavoisier",
            'question_description' => '    S	  +       O        ->   SO2
            53 x 10^-4 kilogram + 12 x 10^-4 kilogram -> … gram',
            'qchoice1' => '0,0065 kilogram',
            'qchoice2' => '6,5 gram',
            'qchoice3' => '6,5 kilogram',
            'qchoice4' => '0,65 gram',
            'correctanswer' => '6,5 gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 10
        DB::table('kim10_question')->insert([
            'exercise_id' => '1',
            'question_topic' => "Hukum Lavoisier",
            'question_description' => '   C	  +       Cl       ->   CCl4
            2 x 10^-3 kilogram + … gram	-> 7,9 gram',
            'qchoice1' => '59 x 10^-3 kilogram',
            'qchoice2' => '59 x 10^-2 gram',
            'qchoice3' => '59 x 10^-4 kilogram',
            'qchoice4' => '59 x 10^-1 gram',
            'correctanswer' => '59 x 10^-1 gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 2 Proust
        // No 1
        DB::table('kim10_question')->insert([
            'exercise_id' => '2',
            'question_topic' => 'Hukum Proust',
            'question_description' => 'Hukum ini berbunyi “Perbandingan massa unsur-unsur penyusun suatu senyawa selalu tetap”. Hal ini dikemukakan oleh ….',
            'qchoice1' => 'Avogadro',
            'qchoice2' => 'Proust',
            'qchoice3' => 'Dalton',
            'qchoice4' => 'Lavoisier',
            'correctanswer' => 'Proust',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 2
        DB::table('kim10_question')->insert([
            'exercise_id' => '2',
            'question_topic' => 'Hukum Proust',
            'question_description' => 'Untuk membentuk FeS, 28 gram belerang bereaksi dengan besi. Berapakah massa mula-mula Besi yang bereaksi membentuk Besi (II) sulfida (FeS) jika pada akhir reaksi terdapat 3 gram besi? (Ar Fe = 56; S = 32)',
            'qchoice1' => '52 gram',
            'qchoice2' => '46 gram',
            'qchoice3' => '31 gram',
            'qchoice4' => '49 gram',
            'correctanswer' => '52 gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 3
        DB::table('kim10_question')->insert([
            'exercise_id' => '2',
            'question_topic' => 'Hukum Proust',
            'question_description' => 'Tentukan perbandingan massa nitrogen dan oksigen dalam NO2 jika diketahui Ar.N = 14 dan Ar.=16',
            'qchoice1' => '7 : 16',
            'qchoice2' => '7 : 18',
            'qchoice3' => '8 : 10',
            'qchoice4' => '8 : 15',
            'correctanswer' => '7 : 16',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 4
        DB::table('kim10_question')->insert([
            'exercise_id' => '2',
            'question_topic' => 'Hukum Proust',
            'question_description' => '8 gram tembaga dapat bereaksi dengan 4 gram belerang membentuk tembaga sulfida. jika direaksikan 20 gram tembaga dengan 20 gram belerang, hitunglah tembaga sulfida yang terbentuk ?',
            'qchoice1' => '30 gram Cu',
            'qchoice2' => '40 gram Cu',
            'qchoice3' => '20 gram Cu',
            'qchoice4' => '50 gram Cu',
            'correctanswer' => '50 gram Cu',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 5
        DB::table('kim10_question')->insert([
            'exercise_id' => '2',
            'question_topic' => 'Hukum Proust',
            'question_description' => 'Dalam ruang tertutup 75 gram karbon dibakar secara sempurna dalam 250 gram oksigen menghasilkan karbondioksida. Perbandingan massa karbon dan oksigen dalam CO2 adalah 3 : 8. Berapa massa CO2 yang dihasilkan ?',
            'qchoice1' => '300 gram CO2',
            'qchoice2' => '350 gram CO2',
            'qchoice3' => '275 gram CO2',
            'qchoice4' => '250 gram CO2',
            'correctanswer' => '275 gram CO2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 6
        DB::table('kim10_question')->insert([
            'exercise_id' => '2',
            'question_topic' => 'Hukum Proust',
            'question_description' => 'Diketahui, besi (Fe) dan belerang (S) yang menyusun senyawa besi sulfida (FeS) memiliki perbandingan massa sebanyak 7:4. Diperlukan 28 gram besi (Fe) untuk menyusun senyawa besi sulfida (FeS) tanpa ada sisa reaktan, maka hitunglah massa belerang (S) yang diperlukan ?',
            'qchoice1' => '16 gram',
            'qchoice2' => '24 gram',
            'qchoice3' => '8 gram',
            'qchoice4' => '4 gram',
            'correctanswer' => '16 gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 7
        DB::table('kim10_question')->insert([
            'exercise_id' => '2',
            'question_topic' => 'Hukum Proust',
            'question_description' => 'Kawat tembaga dibakar sehingga terbentuk tembaga oksida (CuO). Perhatikan reaksi berikut.
            32g Cu(s) + 8g O2(g) → 40g CuO(s)
            Berapa perbandingan massa unsur Cu : O dalam senyawa CuO ?',
            'qchoice1' => '4 : 1 gram',
            'qchoice2' => '3 : 6 gram',
            'qchoice3' => '5 : 2 gram',
            'qchoice4' => '4 : 8 gram',
            'correctanswer' => '4 : 1 gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 8
        DB::table('kim10_question')->insert([
            'exercise_id' => '2',
            'question_topic' => 'Hukum Proust',
            'question_description' => 'Berapa gram NH3 yang terbentuk dari 14 g N2 dan 14 g H2? Diketahui NH3 tersusun atas 82% N dan 18% H.',
            'qchoice1' => '10 gram NH3',
            'qchoice2' => '17 gram NH3',
            'qchoice3' => '8 gram NH3',
            'qchoice4' => '13 gram NH3',
            'correctanswer' => '17 gram NH3',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 9
        DB::table('kim10_question')->insert([
            'exercise_id' => '2',
            'question_topic' => 'Hukum Proust',
            'question_description' => 'Perbandingan unsur nitrogen dan hidrogen pada pembentukan amonia adalah 14 : 3. Jika 28 gram gas nitrogen dan 9 gram gas hidrogen direaksikan, maka massa amonia yang terbentuk dan banyak zat yang bersisa berturut-turut adalah ….',
            'qchoice1' => '34 gram amonia dan 6 gram hidrogen',
            'qchoice2' => '34 gram amonia dan 3 gram hidrogen',
            'qchoice3' => '34 gram amonia dan 6 gram nitrogen',
            'qchoice4' => '34 gram amonia dan 3 gram nitrogen',
            'correctanswer' => '34 gram amonia dan 3 gram hidrogen',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 10
        DB::table('kim10_question')->insert([
            'exercise_id' => '2',
            'question_topic' => 'Hukum Proust',
            'question_description' => 'Perbandingan massa karbon terhadap oksigen dalam senyawa CO2 adalah 3 : 8. Jika digunakan 18 gram unsur C dan 40 gram unsur O maka massa senyawa CO2 yang terbentuk dan sisa pereaksi berturut-turut adalah ….',
            'qchoice1' => '55 gram CO2 dan 3 gram unsur O',
            'qchoice2' => '55 gram CO2 dan 5 gram unsur O',
            'qchoice3' => '55 gram CO2 dan 3 gram unsur C',
            'qchoice4' => '5 gram CO2 dan 55 gram unsur O',
            'correctanswer' => '55 gram CO2 dan 3 gram unsur O',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 3 Dalton
        // No 1
        DB::table('kim10_question')->insert([
            'exercise_id' => '3',
            'question_topic' => 'Hukum Dalton',
            'question_description' => 'Hukum ini berbunyi “Jika ada dua senyawa yang dibentuk dari dua unsur yang sama dan massa satu unsur pada kedua senyawa itu sama maka massa unsur yang lainnya mempunyai angka perbandingan yang sederhana dan bulat”. Hal ini dikemukakan oleh',
            'qchoice1' => 'Avogadro',
            'qchoice2' => 'Proust',
            'qchoice3' => 'Dalton',
            'qchoice4' => 'Lavoisier',
            'correctanswer' => 'Dalton',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 2
        DB::table('kim10_question')->insert([
            'exercise_id' => '3',
            'question_topic' => 'Hukum Dalton',
            'question_description' => 'A dan B bereaksi membentuk dua senyawa. Untuk senyawa pertama 1,4 gram A bereaksi dengan 3,2 gram B. Untuk senyawa kedua 0,7 gram A bereaksi dengan 0,4 gram B. Berapakah perbandingan unsur A dalam senyawa pertama terhadap unsur A dalam senyawa kedua?',
            'qchoice1' => '1 : 4',
            'qchoice2' => '1 : 2',
            'qchoice3' => '1 : 1',
            'qchoice4' => '4 : 1',
            'correctanswer' => '1 : 4',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 3
        DB::table('kim10_question')->insert([
            'exercise_id' => '3',
            'question_topic' => 'Hukum Dalton',
            'question_description' => 'Unsur A dan B bereaksi membentuk dua senyawa yang berbeda. 6,62 gram senyawa pertama mengandung 5,29 gram unsur A dan 14,3 gram senyawa kedua mengandung 1,6 gram unsur B. Berapakah perbandingan unsur A dalam senyawa pertama terhadap unsur A dalam senyawa kedua?',
            'qchoice1' => '2 : 1',
            'qchoice2' => '1 : 3',
            'qchoice3' => '1 : 2',
            'qchoice4' => '3 : 1',
            'correctanswer' => '1 : 2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 4
        DB::table('kim10_question')->insert([
            'exercise_id' => '3',
            'question_topic' => 'Hukum Dalton',
            'question_description' => 'Dua senyawa terbentuk dari unsur fosfor dan oksigen. Salah satu senyawa terdiri dari 0,845 gram fosfor dan 0,655 gram oksigen. Jika senyawa lain terdiri dari 1,69 gram fosfor, massa oksigen yang diperlukan untuk memenuhi hukum perbandingan berganda adalah  . . . . . gram',
            'qchoice1' => '0,655',
            'qchoice2' => '0,745',
            'qchoice3' => '0,855',
            'qchoice4' => '0,985',
            'correctanswer' => '0,655',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 5
        DB::table('kim10_question')->insert([
            'exercise_id' => '3',
            'question_topic' => 'Hukum Dalton',
            'question_description' => 'Unsur P dan Q dapat membentuk dua senyawa. Senyawa I memiliki Massa P yaitu 3,2 gram dan Massa Q 3,2 gram. Senyawa II memiliki Massa P yaitu 0,8 gram dan Massa Q 1,2 gram. Menurut Hukum Kelipatan Perbandingan dari Dalton, perbandingan massa Q pada senyawa I dan massa Q pada senyawa II adalah . . . .',
            'qchoice1' => '1 : 2',
            'qchoice2' => '2 : 5',
            'qchoice3' => '1 : 3',
            'qchoice4' => '2 : 3',
            'correctanswer' => '2 : 3',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 6
        DB::table('kim10_question')->insert([
            'exercise_id' => '3',
            'question_topic' => 'Hukum Dalton',
            'question_description' => 'Unsur x dan y membentuk dua senyawa. Senyawa 1 mengandung 60 gram x dan 320 gram senyawa y. Senyawa 2 mengandung 45 gram x dan 120 gram y. Berapa perbandingan massa unsur sesuai hukum Dalton ?',
            'qchoice1' => '1 : 2',
            'qchoice2' => '3 : 8',
            'qchoice3' => '2 : 1',
            'qchoice4' => '2 : 5',
            'correctanswer' => '2 : 1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 7
        DB::table('kim10_question')->insert([
            'exercise_id' => '3',
            'question_topic' => 'Hukum Dalton',
            'question_description' => 'Unsur O dan Q membentuk 3 senyawa. Senyawa 1 mengandung 15 gram O dan 80 gram Q. Senyawa 2 mengandung 45 gram O dan 120 gram Q. Senyawa 3 mengandung 135 gram O dan 180 gram Q. Berapa perbandingan berganda massa unsur sesuai hukum Dalton ?',
            'qchoice1' => '2 : 1',
            'qchoice2' => '1 : 2',
            'qchoice3' => '3 : 4',
            'qchoice4' => '3 : 2',
            'correctanswer' => '2 : 1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 8
        DB::table('kim10_question')->insert([
            'exercise_id' => '3',
            'question_topic' => 'Hukum Dalton',
            'question_description' => 'Unsur A dan B membentuk dua senyawa. Senyawa 1 mengandung 45 gram A dan 80 gram B. Senyawa 2 mengandung 135 gram A dan 720 gram B. Berapa perbandingan massa unsur sesuai hukum Dalton ?',
            'qchoice1' => '2 : 1',
            'qchoice2' => '1 : 2',
            'qchoice3' => '3 : 1',
            'qchoice4' => '1 : 3',
            'correctanswer' => '3 : 1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 9
        DB::table('kim10_question')->insert([
            'exercise_id' => '3',
            'question_topic' => 'Hukum Dalton',
            'question_description' => 'Terdapat dua senyawa. Senyawa 1 mengandung massa nitrogen 28 gram dan massa oksigen 32 gram. Senyawa 2 mengandung massa nitrogen 28 gram dan massa oksigen 64 gram. Tentukan perbandingan massa oksigen sesuai hukum Dalton !',
            'qchoice1' => '2 : 1',
            'qchoice2' => '1 : 3',
            'qchoice3' => '3 : 1',
            'qchoice4' => '1 : 2',
            'correctanswer' => '1 : 2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 10
        DB::table('kim10_question')->insert([
            'exercise_id' => '3',
            'question_topic' => 'Hukum Dalton',
            'question_description' => 'Terdapat dua senyawa yang pertama NO dan yang kedua NO2. Senyawa NO memiliki massa N sebanyak 21 gram dan O sebanyak 24 gram. Senyawa NO2 memiliki massa N sebanyak 28 gram dan massa O sebanyak 64 gram. Jika massa N pada senyawa NO disamakan dengan massa N pada NO2 yaitu 28, maka massa O pada NO adalah . . . .',
            'qchoice1' => '22 gram',
            'qchoice2' => '32 gram',
            'qchoice3' => '16 gram',
            'qchoice4' => '28 gram',
            'correctanswer' => '32 gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 4 Gay Lussac
        // No 1
        DB::table('kim10_question')->insert([
            'exercise_id' => '4',
            'question_topic' => 'Hukum Gay Lussac',
            'question_description' => 'Hukum ini berbunyi “Pada temperatur dan tekanan yang sama, perbandingan volum gas-gas yang bereaksi dan gas hasil reaksi merupakan bilangan bulat dan sederhana”. Hal ini dikemukakan oleh ….',
            'qchoice1' => 'Avogadro',
            'qchoice2' => 'Gay Lussac',
            'qchoice3' => 'Dalton',
            'qchoice4' => 'Lavoisier',
            'correctanswer' => 'Gay Lussac',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 2
        DB::table('kim10_question')->insert([
            'exercise_id' => '4',
            'question_topic' => 'Hukum Gay Lussac',
            'question_description' => 'Sepuluh liter gas hidrogen bromida terurai sebagai berikut,
            2 HBr(g) → H2(g) + Br2(g)
            Pada suhu dan tekanan yang sama, tentukan volume gas hidrogen yang dihasilkan!',
            'qchoice1' => '10 L',
            'qchoice2' => '1,5 L',
            'qchoice3' => '5 L',
            'qchoice4' => '4,8 L',
            'correctanswer' => '5 L',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 3
        DB::table('kim10_question')->insert([
            'exercise_id' => '4',
            'question_topic' => 'Hukum Gay Lussac',
            'question_description' => 'Lima liter gas N2O5 terurai sesuai reaksi berikut.
            2 N2O5(g) → 2 N2(g) + 5 O2(g)
            Pada suhu dan tekanan yang sama, tentukan volume gas nitrogen dan volume gas oksigen yang terbentuk !',
            'qchoice1' => '10 L',
            'qchoice2' => '15 L',
            'qchoice3' => '12,5 L',
            'qchoice4' => '14,5 L',
            'correctanswer' => '12,5 L',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 4
        DB::table('kim10_question')->insert([
            'exercise_id' => '4',
            'question_topic' => 'Hukum Gay Lussac',
            'question_description' => 'Sejumlah gas pada mulanya mempunyai tekanan P dan suhu T. Jika gas tersebut mengalami proses isokhorik sehingga tekanannya menjadi 4 kali tekanan semula maka Suhu gas sekarang…',
            'qchoice1' => 'Semua Pilihan Salah',
            'qchoice2' => 'Tetap',
            'qchoice3' => '2 Kali',
            'qchoice4' => '4 Kali',
            'correctanswer' => '4 Kali',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 5
        DB::table('kim10_question')->insert([
            'exercise_id' => '4',
            'question_topic' => 'Hukum Gay Lussac',
            'question_description' => 'Gas berada di dalam bejana tertutup pada mulanya bersuhu 27°C. Agar tekanannya menjadi 2 kali semula, maka suhu ruangan tersebut adalah…',
            'qchoice1' => '273 K',
            'qchoice2' => '300 °C',
            'qchoice3' => '327 °C',
            'qchoice4' => '255 °R',
            'correctanswer' => '327 °C',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 6
        DB::table('kim10_question')->insert([
            'exercise_id' => '4',
            'question_topic' => 'Hukum Gay Lussac',
            'question_description' => 'Sebanyak 4 L CH4 dibakar habis dengan gas oksigen sesuai persamaan reaksi:
            CH4(g) + 2 O2(g)→ CO2(g) + 2 H2O(l)
       Pada suhu dan tekanan yang sama. Volume gas CO2 yang dihasilkan adalah ....',
            'qchoice1' => '2 L',
            'qchoice2' => '6 L',
            'qchoice3' => '4 L',
            'qchoice4' => '1 L',
            'correctanswer' => '4 L',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 7
        DB::table('kim10_question')->insert([
            'exercise_id' => '4',
            'question_topic' => 'Hukum Gay Lussac',
            'question_description' => 'Berapakah volume nitrogen yang bereaksi dengan 6 liter hidrogen (pada suhu dan tekanan yang sama) untuk membentuk amonia berdasarkan reaksi berikut :
            N2 + 3H2 → 2NH3  adalah',
            'qchoice1' => '12 L',
            'qchoice2' => '2 L',
            'qchoice3' => '4 L',
            'qchoice4' => '18 L',
            'correctanswer' => '2 L',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 8
        DB::table('kim10_question')->insert([
            'exercise_id' => '4',
            'question_topic' => 'Hukum Gay Lussac',
            'question_description' => 'Karbon disulfida bereaksi dengan oksigen berdasarkan reaksi berikut:
            CS2(g) + 3O2(g) → CO2(g) + 2SO2(g)
            2 L karbon disulfida dibakar dengan 10 L oksigen, kemudian semua gas dialirkan ke dalam larutan NaOH berlebih. Berapakah persentase gas yang tersisa setelah dialirkan ke dalam NaOH?',
            'qchoice1' => '40 %',
            'qchoice2' => '20 %',
            'qchoice3' => '60 %',
            'qchoice4' => '75 %',
            'correctanswer' => '40 %',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 9
        DB::table('kim10_question')->insert([
            'exercise_id' => '4',
            'question_topic' => 'Hukum Gay Lussac',
            'question_description' => '12 liter gas nitrogen direaksikan dengan sejumlah gas hidrogen menghasilkan amonia. Berapa volume gas hidrogen yang diperlukan serta amonia yang dihasilkan bila kondisi reaksi (suhu dan tekanan) dijaga konstan?
            N2(g) + 3H2(g) → 2NH3(g)',
            'qchoice1' => '18 L',
            'qchoice2' => '24 L',
            'qchoice3' => '12 L',
            'qchoice4' => '6 L',
            'correctanswer' => '18 L',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 10
        DB::table('kim10_question')->insert([
            'exercise_id' => '4',
            'question_topic' => 'Hukum Gay Lussac',
            'question_description' => 'Diketahui sebuah gas memiliki tekanan awal sejumlah P, sementara suhu awalnya adalah T. Kemudian, gas tersebut mengalami perubahan tekanan menjadi 6P.
            Berapakah suhu gas tersebut sekarang ?
            N2(g) + 3H2(g) → 2NH3(g)',
            'qchoice1' => '3 T',
            'qchoice2' => '6 T',
            'qchoice3' => '4 T',
            'qchoice4' => '7 T',
            'correctanswer' => '6 T',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 5 Avogadro
        // No 1
        DB::table('kim10_question')->insert([
            'exercise_id' => '5',
            'question_topic' => 'Hukum Avogadro',
            'question_description' => 'Hukum ini berbunyi “Pada temperatur dan tekanan yang sama, semua gas pada volum yang sama mengandung jumlah molekul yang sama pula”. Hal ini dikemukakan oleh ….',
            'qchoice1' => 'Avogadro',
            'qchoice2' => 'Gay Lussac',
            'qchoice3' => 'Dalton',
            'qchoice4' => 'Lavoisier',
            'correctanswer' => 'Avogadro',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 2
        DB::table('kim10_question')->insert([
            'exercise_id' => '5',
            'question_topic' => 'Hukum Avogadro',
            'question_description' => 'Pada tekanan dan suhu yang sama, diketahui sebuah persamaan reaksi seperti berikut

            N2(g) + 3H2(g) = 2NH3(g)
            
            Tentukan berapa perbandingan jumlah volume gas yang terlibat dalam reaksi tersebut!',
            'qchoice1' => '2 : 1 = 3',
            'qchoice2' => '3 : 1 = 2',
            'qchoice3' => '2 : 3 = 2',
            'qchoice4' => '3 : 2 = 1',
            'correctanswer' => '2 : 3 = 2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 3
        DB::table('kim10_question')->insert([
            'exercise_id' => '5',
            'question_topic' => 'Hukum Avogadro',
            'question_description' => 'Pada suatu tabung 5 L terdapat 2 x 10^22 molekul gas karbon dioksida. Pada suhu dan tekanan yang sama, berapakah jumlah molekul gas nitrogen dalam tabung bervolume 4 L?',
            'qchoice1' => '1,4 x 10^22 molekul',
            'qchoice2' => '1,6 x 10^22 molekul',
            'qchoice3' => '1,2 x 10^22 molekul',
            'qchoice4' => '1,8 x 10^22 molekul',
            'correctanswer' => '1,6 x 10^22 molekul',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 4
        DB::table('kim10_question')->insert([
            'exercise_id' => '5',
            'question_topic' => 'Hukum Avogadro',
            'question_description' => 'Suatu hidrokarbon sebanyak 5 liter dibakar sempurna, dimana dibutuhkan 15 L oksigen dan dihasilkan 10 L karbon dioksida. Tentukanlah rumus molekul untuk hidrokarbon tersebut!',
            'qchoice1' => 'C8H4',
            'qchoice2' => 'C10H20',
            'qchoice3' => 'C15H18',
            'qchoice4' => 'C2H4',
            'correctanswer' => 'C10H20',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 5
        DB::table('kim10_question')->insert([
            'exercise_id' => '5',
            'question_topic' => 'Hukum Avogadro',
            'question_description' => 'Suatu tabung pada P dan T tertentu diisi gas argon (Ar = 18) hingga penuh dan ditimbang massanya. Tabung itu dikosongkan dan kemudian diisi dengan gas etana, (C2H6) (ArC2H6=30) hingga penuh pada P dan T yang sama. Jika dalam gas etana tersebut mengandung 2×10^23 atom, berapakah massa gas argon tersebut ?',
            'qchoice1' => '6 gram',
            'qchoice2' => '10 gram',
            'qchoice3' => '0,75 gram',
            'qchoice4' => '22,5 gram',
            'correctanswer' => '0,75 gram',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 6
        DB::table('kim10_question')->insert([
            'exercise_id' => '5',
            'question_topic' => 'Hukum Avogadro',
            'question_description' => 'Dinitrogen pentoksida (N2O5) mengalami reaksi dekomposisi berdasarkan reaksi berikut. 

            N2O5(g) -> NO2(g) + O2(g) (belum setara)
            
            Pada reaksi tersebut hanya 75% N2O5 yang terurai dan diperoleh 1,5 L gas O2. Tentukan volume awal N2O5! (dalam L) ?',
            'qchoice1' => '4 L',
            'qchoice2' => '2 L',
            'qchoice3' => '3 L',
            'qchoice4' => '1 L',
            'correctanswer' => '4 L',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 7
        DB::table('kim10_question')->insert([
            'exercise_id' => '5',
            'question_topic' => 'Hukum Avogadro',
            'question_description' => 'Diketahui suatu gas X2 pada suhu ruang (25°C) dan tekanan 760 cmHg memiliki volume 12 L. Bila diketahui pula gas lainnya, Y2 berada pada suhu yang sama namun dengan konsentrasi 2 kali lebih besar pada tekanan 5 atm, berapakah volume gas Y2 yang akan teramati ?',
            'qchoice1' => '48 L',
            'qchoice2' => '12 L',
            'qchoice3' => '32 L',
            'qchoice4' => '24 L',
            'correctanswer' => '48 L',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 8
        DB::table('kim10_question')->insert([
            'exercise_id' => '5',
            'question_topic' => 'Hukum Avogadro',
            'question_description' => 'Seorang ilmuwan mengamati reaksi pembakaran di dalam sebuah reaktor yang ia rancang secara khusus. Pada percobaan pertama ia membakar LPG yang mengandung 85% (v/v) butana sebanyak 30 L menghasilkan 132 gram karbondioksida. Apabila pada percobaan kedua ia menggunakan LNG (75% butana v/v) berapa banyak yang ia perlukan untuk menghasilkan karbondioksida yang sama banyak?',
            'qchoice1' => '76,5 L',
            'qchoice2' => '90 L',
            'qchoice3' => '81,5 L',
            'qchoice4' => '102 L',
            'correctanswer' => '102 L',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 9
        DB::table('kim10_question')->insert([
            'exercise_id' => '5',
            'question_topic' => 'Hukum Avogadro',
            'question_description' => 'Berapakah volume 23 gram NO2 (Ar N = 14, Ar O = 16) pada keadaan suhu 273°K dengan tekanan 1 atm ?',
            'qchoice1' => '11,2 liter',
            'qchoice2' => '15,4 liter',
            'qchoice3' => '10.5 liter',
            'qchoice4' => '13,3 liter',
            'correctanswer' => '11,2 liter',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // No 10
        DB::table('kim10_question')->insert([
            'exercise_id' => '5',
            'question_topic' => 'Hukum Avogadro',
            'question_description' => 'Berapakah jumlah mol 33,6 liter gas H2 pada suhu O°C dan tekanan 76 cmHg ?',
            'qchoice1' => '2,5 mol',
            'qchoice2' => '1,6 mol',
            'qchoice3' => '1,5 mol',
            'qchoice4' => '3,2 mol',
            'correctanswer' => '1,5 mol',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
