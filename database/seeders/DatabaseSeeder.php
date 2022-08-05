<?php

namespace Database\Seeders;
use App\Models\Teacher;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

       Teacher::create([
            'title' => 'KEPSEK DAN TIM PKS',
            'guru1' => 'ROJAI, M.Pd',
            'guru2' => 'EUIS KURNIATI, S.Pd',
            'guru3' => 'DEDE KUSMAYADI, S.Pd',
            'guru4' => 'YOYO SUNARYO, S.Pd',
            'guru6' => '',
            'guru5' =>'',
          'image' => 'img/timguruedit/guru1.png'
          
        ]);
        Teacher::create([
            'title' => 'TIM PERPUS',
            'guru1' => 'ANIS PUSPITA, S.Pd',
            'guru2' => 'IKA KRISTIANINGSIH, S.Pd',
            'guru3' => 'ROJAI, M.Pd',
            'guru4' => '',
            'guru5' =>'',
            'guru6' => '',

          'image' => 'img/timguruedit/guru2 1.png'
          
        ]);

        Teacher::create([
            'title' => 'TIM IPS',
            'guru1' => 'ANWAR HIDAYAT, S.E.',
            'guru2' => 'MARIANI, S.Pd.',
            'guru3' => 'SITI AISAH NUR A, S.Pd.',
            'guru4' => 'ENUY GUSTINI, S.E',
            'guru6' => '',
            'guru5' =>'',
          'image' => 'img/timguruedit/guru3 1.png'
          
        ]);

        Teacher::create([
            'title' => 'TIM PAI',
            'guru1' => 'HJ. SAMROH, S.Pd.',
            'guru2' => 'H. AMONG SUPARMAN, S.Pd',
            'guru3' => 'DRS. TB. AGUS MULYADI',
            'guru4' => '',
            'guru6' => '',
            'guru5' =>'',
          'image' => 'img/timguruedit/guru4 1.png'
          
        ]);

        Teacher::create([
            'title' => 'TIM PPKN',
            'guru1' => 'MURSHAL KHOTOB, S.AG, M.Pd.',
            'guru2' => 'KAMALUDINM S.Pd.',
            'guru3' => 'ASEP SETIANA, SPd.',
            'guru4' => '',
            'guru5' =>'',
            'guru6' => '',

          'image' => 'img/timguruedit/guru5 1.png'
          
        ]);

        Teacher::create([
            'title' => 'TIM IPA',
            'guru1' => 'CECE SUMEDI S.Pd.',
            'guru2' => 'EUIS KURNIATI, S.Pd.',
            'guru3' => 'DWI MULYA W, S.Pd.',
            'guru4' => 'ALFI MARDIAHNUR, S.Pd',
            'guru6' => '',
            'guru5' =>'DADANG PERMANA, S.Pd',

          'image' => 'img/timguruedit/guru6 1.png'
          
        ]);

        Teacher::create([
            'title' => 'TIM BAHASA SUNDA',
            'guru1' => 'ANEU NURLEALA, S.Pd.',
            'guru2' => 'ASEP SETIANA, S.Pd.',
            'guru3' => 'IDA, S.Pd.',
            'guru4' => '',
            'guru5' =>'',
            'guru6' => '',
          'image' => 'img/timguruedit/guru7 1.png'
          
        ]);


        Teacher::create([
            'title' => 'TIM BAHASA INDONESIA',
            'guru1' => 'H. YOYO SUNARYO, S.Pd',
            'guru2' => 'ENI NURAENI, S.Pd.',
            'guru3' => 'IKA KRISTIANINGSIH, S.Pd.',
            'guru4' => 'GANIS RENGGOWATI, S.Pd',
            'guru5' =>'lIA LESTARI, S.Pd.',
            'guru6' => 'SRI ASTUTI, S.Pd.',
          'image' => 'img/timguruedit/guru8 1.png'
          
        ]);

        Teacher::create([
            'title' => 'TIM BAHASA INGGRIS',
            'guru1' => 'DEDE KKUSMAYADI, S.PD, MM',
            'guru2' => 'DIAH SRI U, S.Pd.',
            'guru3' => 'M.ABDUL HAKIM, S.Pd, MM.',
            'guru4' => 'ASEP APRIYANTO, S.S.',
            'guru5' =>'ASTITRI OKTAPIANI, S.Pd.',
            'guru6' => 'DEWI KARTIKA, S.Pd.',
          'image' => 'img/timguruedit/guru9 1.png'
          
        ]);

        Teacher::create([
            'title' => 'TIM MATEMATIKA',
            'guru1' => 'PURWANINGSIH, A.Md',
            'guru2' => 'TB. M .AULIA RACHMAN, S.Pd.',
            'guru3' => 'RIFA SYAHFITRI, S.Pd.',
            'guru4' => 'SITI PATIMAH, S.Pd.',
            'guru5' =>'YUNI FITRIA KURNIATI, S.Pd',
            'guru6' => '',
          'image' => 'img/timguruedit/guru10 1.png'
          
        ]);


        
        Teacher::create([
            'title' => 'TIM BP/BK',
            'guru1' => 'DRA. DELIMA SIGANA',
            'guru2' => 'TJATUR WANINGSIH, S.Pd.',
            'guru3' => 'ROSYALINA N, S.Pd.',
            'guru4' => '',
            'guru5' =>'',
            'guru6' => '',
          'image' => 'img/timguruedit/guru11 1.png'
          
        ]);

        
        
        Teacher::create([
            'title' => 'TIM SENI BUDAYA',
            'guru1' => 'RIKI, S.Pd.',
            'guru2' => 'UTAMI S. DIANTIKA P, S.Pd.',
            'guru3' => '',
            'guru4' => '',
            'guru5' =>'',
            'guru6' => '',
          'image' => 'img/timguruedit/guru12 1.png'
          
        ]);

        Teacher::create([
            'title' => 'TIM PJOK',
            'guru1' => 'SUKMAWATI, S.Pd.',
            'guru2' => 'HENDRI YUSTANDI, S.Pd.',
            'guru3' => 'GAMAL PAHRU ROZI, S.I.Kom',
            'guru4' => '',
            'guru5' =>'',
            'guru6' => '',
          'image' => 'img/timguruedit/guru13 1.png'
          
        ]);


        Teacher::create([
            'title' => 'TIM TATA USAHA',
            'guru1' => 'AMING, S.E.',
            'guru2' => 'PAPAT, S.Pd.',
            'guru3' => 'SITI ROHMAH',
            'guru4' => 'YANTI LESTARI',
            'guru5' =>'ANIS PUSPITA',
            'guru6' => '',
          'image' => 'img/timguruedit/guru14 1.png'
          
        ],);


        Teacher::create([
            'title' => 'SECURITY',
            'guru1' => 'BADAR',
            'guru2' => 'OPUN',
            'guru3' => '',
            'guru4' => '',
            'guru5' =>'',
            'guru6' => '',
          'image' => 'img/timguruedit/guru15 1.png'
          
        ]);

    



        


    }
}
