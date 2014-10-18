<?php

class NewsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('news')->delete();

        for($i = 0; $i < 10; $i++)
        {
            News::create(array(
                'title' => "Блогозапись 0$i",
                'text'  => "Текст блогозаписи."
            ));
        }

    }
}