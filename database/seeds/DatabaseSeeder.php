<?php

use Illuminate\Database\Seeder;
use App\Person;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $people = [
            [
                'age' => 10,
                'name' => 'Alicia',
                'occupation' => 'Being a child',
            ],

            [
                'age' => 20,
                'name' => 'George',
                'occupation' => 'Student',
            ],

            [
                'age' => 45,
                'name' => 'Martin',
                'occupation' => 'Midlife crisis',
            ],
            [
                'age' => 45,
                'name' => 'Shelly',
                'occupation' => 'Developers',
            ],
            [
                'age' => 79,
                'name' => 'Dennis Ritchie',
                'occupation' => 'Being a badass',
            ],
            [
                'age' => 79,
                'name' => 'Harriot',
                'occupation' => 'Testing',
            ],
        ];


        collect($people)->each(function($person) {
            Person::create($person);
        });
    }
}
