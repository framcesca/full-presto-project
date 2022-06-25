<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=[
            'Elettronica','Motori','Per la casa','Moda','Sport','Bricolage','Libri e musica','Videogiochi'
        ];

        $imgs=[
            '/../media/categoryElettronica.png','/../media/categoryMotori.png','/../media/categoryPerLaCasa.png','/../media/categoryModa.png','/../media/categorySport.png','/../media/categoryBricolage.png','/../media/categoryLibri.png','/../media/categoryVideogiochi.png'
        ];

        $index=0;

        foreach($categories as $category){
            
            DB::table('categories')->insert([
                'category' =>$category,
                'img' =>$imgs[$index],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]);
            $index++;
        }
    }
}
