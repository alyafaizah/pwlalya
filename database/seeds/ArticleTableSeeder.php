<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'id'=>1,
            'title'=>'New Normal',
            'content'=>'Menghadapi New Normal',
            'featured_image'=>' '
        ]);
    }
}
