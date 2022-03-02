<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=10;++$i){
            DB::table('articles')->insert([
                'title'=> Str::random(6),
                'slug'=>Str::random(6),
                'content'=>Str::random(100)

            ]);
        }
    }
}
