<?php

use Illuminate\Database\Seeder;
use App\Goods;
class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Goods::insert([
            ['name'=>"i'm robot",'cost'=>100000],
            ['name'=>"i'm robot",'cost'=>100000],
            ['name'=>"i'm robot",'cost'=>100000],
            ['name'=>"i'm robot",'cost'=>100000],
            ['name'=>"i'm robot",'cost'=>100000],
            ['name'=>"i'm robot",'cost'=>100000],
            ['name'=>"i'm robot",'cost'=>100000],
            ['name'=>"i'm robot",'cost'=>100000],
            ['name'=>"i'm robot",'cost'=>100000],
            ['name'=>"i'm robot",'cost'=>100000],
            ['name'=>"i'm robot",'cost'=>100000],
            ['name'=>"i'm robot",'cost'=>100000]
        ]);
    }
}
