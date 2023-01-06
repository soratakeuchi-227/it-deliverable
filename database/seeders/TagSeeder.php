<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name'=>'貧困',
            'content'=>'日本の子供の7人に1人が貧困状態にある現状'
           
        ]);
        DB::table('tags')->insert([
            'name'=>'人口減少',
            'content'=>'2100年には現在の半分の人口に！？'
           
        ]);
        
        DB::table('tags')->insert([
            'name'=>'高齢化',
            'content'=>'世界一の高齢人口割合を記録している日本'
           
        ]);
        
        DB::table('tags')->insert([
            'name'=>'介護',
            'content'=>'親族の介護のためにキャリアを諦める現状'
           
        ]);
        
        DB::table('tags')->insert([
            'name'=>'過疎化',
            'content'=>'自治体の約半分が過疎化状態にある！？'
           
        ]);
        

    }
}
