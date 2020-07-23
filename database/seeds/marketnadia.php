<?php

use Illuminate\Database\Seeder;

class marketnadia extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $batas = 5;
        for ($i=0; $i < $batas; $i++) { 
            DB::table('marketns')->insert([
                'namaBarang' => Str::random(10),
                'jenisBarang' => Str::random(20),
                'Brand' => Str::random(8),
                'Desc_Barang' => Str::random(5),
            ]);
    }
}
}