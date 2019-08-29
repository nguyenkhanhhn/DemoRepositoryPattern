<?php

use App\Students;
use Illuminate\Database\Seeder;


class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            $student = new Students();
            $data = [
                'name' => str_random(),
                'email' => str_random(12).'@gmail.com',
                'age' => mt_rand(10, 30),
                'address' => str_random(20)
            ];
            $student->create($data);
        }

    }
}
