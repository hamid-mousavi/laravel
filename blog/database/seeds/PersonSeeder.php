<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Provider\en_AU;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

          for ($i=1;$i<10;++$i){
              DB::table('person')->insert([
                  'name'=> Str::random(10),
                  'family'=>Str::random(14),
                  'age'=>39
              ]);
          }

    }
}
