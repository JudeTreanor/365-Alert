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
            'river' => 'Sûre',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '79',
            'type' => 'Green',
            'location' => 'Bissen',
            'river' => 'Attert',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '67',
            'type' => 'Green',
            'location' => 'Bollendorf',
            'river' => 'Sûre',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '63',
            'type' => 'Green',
            'location' => 'Diekirch',
            'river' => 'Sûre',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '59',
            'type' => 'Green',
            'location' => 'Ettelbruck',
            'river' => 'Wark',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '61',
            'type' => 'Green',
            'location' => 'Ettelbruck',
            'river' => 'Alzette',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '57',
            'type' => 'Green',
            'location' => 'Hesperange',
            'river' => 'Alzette',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '25',
            'type' => 'Green',
            'location' => 'Hunnebuer',
            'river' => 'Eisch',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '53',
            'type' => 'Green',
            'location' => 'Mersch',
            'river' => 'Alzette',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '33',
            'type' => 'Green',
            'location' => 'Pfqffenthal',
            'river' => 'Alzette',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '45',
            'type' => 'Green',
            'location' => 'Reichlange',
            'river' => 'Attert',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '5',
            'type' => 'Green',
            'location' => 'Stadtbredimus',
            'river' => 'Moselle',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '41',
            'type' => 'Green',
            'location' => 'Steinsel',
            'river' => 'Alzette',
            'water_level' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
