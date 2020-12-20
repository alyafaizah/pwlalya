<?php

use Illuminate\Database\Seeder;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('barangs')->insert([
            'id'=>1;
            'nama'=>'Dunhil Icon';
            'gambar'=>'image/c1.png';
            'harga'=>'538000';
            'detail'=>'Eau de Parfum 100ml (WITH BOX)';
            'deskripsi'=>'Succan absolute (purified rum extract) and honey. At the core of this creation (made of "corporeal floral notes.") is Tom Fords distinctive, timeless signature - an imaginary accord of black orchid blended with notes of velvet orchid, which gives the perfume its name, with intense Turkish rose oil';
        ]);
    }
}
