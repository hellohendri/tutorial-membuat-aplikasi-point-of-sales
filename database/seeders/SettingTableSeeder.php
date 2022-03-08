<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'id_setting' => 1,
            'nama_perusahaan' => 'Abimanyu Strudel',
            'alamat' => 'Perum New Watugede Kav.12B',
            'telepon' => ' 082142844722',
            'tipe_nota' => 1, // kecil
            'diskon' => 5,
            'path_logo' => '/img/LOGO-110PX.png',
            'path_kartu_member' => '/img/member.png',
        ]);
    }
}
