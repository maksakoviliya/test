<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('Ru_RU');
        $qnt = 10;
        foreach (range(1, $qnt) as $i) {
            $parent_node = new Category([
               'name' => $faker->sentence(2),
               'slug' => $faker->slug,
               'description' => $faker->text,
               'image' => 'category.png'
            ]);
            $parent_node->save();
            
            foreach (range(1, mt_rand(0,5)) as $j) {
                $node = new Category([
                   'name' => $faker->sentence,
                   'slug' => $faker->slug,
                   'description' => $faker->text,
                   'image' => 'category.png'
                ]);
            $node->save();
            $node->appendToNode($parent_node)->save();
            }
        }
    }
}
