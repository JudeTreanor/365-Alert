<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AlertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alerts')->insert([
            'id' => '81',
            'type' => 'Green',
            'location' => 'Bigonville',
            'trend' => 'rest',
            'river' => 'Sûre',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '79',
            'type' => 'Green',
            'location' => 'Bissen',
            'trend' => 'rest',
            'river' => 'Attert',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '67',
            'type' => 'Green',
            'location' => 'Bollendorf',
            'trend' => 'rest',
            'river' => 'Sûre',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '63',
            'type' => 'Green',
            'location' => 'Diekirch',
            'trend' => 'rest',
            'river' => 'Sûre',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '59',
            'type' => 'Green',
            'location' => 'Ettelbruck',
            'trend' => 'rest',
            'river' => 'Wark',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '61',
            'type' => 'Green',
            'location' => 'Ettelbruck',
            'trend' => 'rest',
            'river' => 'Alzette',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '57',
            'type' => 'Green',
            'location' => 'Hesperange',
            'trend' => 'rest',
            'river' => 'Alzette',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '25',
            'type' => 'Green',
            'location' => 'Hunnebuer',
            'trend' => 'rest',
            'river' => 'Eisch',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '53',
            'type' => 'Green',
            'location' => 'Mersch',
            'trend' => 'rest',
            'river' => 'Alzette',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '33',
            'type' => 'Green',
            'location' => 'Pfqffenthal',
            'trend' => 'rest',
            'river' => 'Alzette',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '45',
            'type' => 'Green',
            'location' => 'Reichlange',
            'trend' => 'rest',
            'river' => 'Attert',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '5',
            'type' => 'Green',
            'location' => 'Stadtbredimus',
            'trend' => 'rest',
            'river' => 'Moselle',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '41',
            'type' => 'Green',
            'location' => 'Steinsel',
            'trend' => 'rest',
            'river' => 'Alzette',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
