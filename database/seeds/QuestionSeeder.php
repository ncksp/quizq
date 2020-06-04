<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();

        $id_material = [
            'mrMpeGIc8ZQxyhRuif89',
            'wzowJCL6d23dzaSlotZA',
            'A4NIDlvAWEtTqRv56Zos',
            'NI65csuvaD5vQUEx9Bze',
            'ajxpt5zpTIthzqf9TZOP',
            '1YsmPgpyTtCneScncQFc',
            'gcT974i8jzfUyU8UNrcZ',
            'dgt8IvJpwLksYS7xXVst',
            'c4yYdAgvynsTPcN8Pgas',
            'avLDG82jkMwrMVqzS0Vi',
            'XB0fc4e5mddhO7Wbmgi8',
        ];
        $anwers = ['A','B','C','D'];
        for ($i=0; $i < count($id_material); $i++) {
            for ($j=0; $j < 10; $j++) {
                DB::table('questions')->insert([
                    'id_material' => $id_material[$i],
                    'question' => Str::random(25),
                    'option_a' => Str::random(25),
                    'option_b' => Str::random(25),
                    'option_c' => Str::random(25),
                    'option_d' => Str::random(25),
                    'answer' => $anwers[$faker->numberBetween(0,3)],
                ]);
            }
        }
    }
}
