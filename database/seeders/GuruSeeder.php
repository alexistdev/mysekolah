<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');
        $guru = array(
            array('user_id'=> 3,'name' => 'guru','nip'=>'23456789','gender'=> 'Laki','created_at' => $date,'updated_at' => $date),
        );
        Guru::insert($guru);
    }
}
