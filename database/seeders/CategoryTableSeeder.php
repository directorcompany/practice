<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      $categories =  [
         [
          'name'=>'Новости компании',
          'children'=> [
          [ 
              'name'=> 'Новости о проектах'
          ],
         
          [ 
            'name'=> 'Новости о сотрудниках',
            'children' => [
               ['name'=> 'Новости о достижениях'],
             ],
          ],
         
        ]
        ]
      ];

        foreach($categories as $category)
        {
            \App\Models\Category::create($category);
        }

    }
}
