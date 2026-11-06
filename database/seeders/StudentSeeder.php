<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    private $arrayEstudiants = array(
        array(
            'name' => 'Juan',
            'email' => 'juan@hotmail.com',
            'address' => 'Sant elias 25,Reus',
            ),
            array(
            'name' => 'Jose',
            'email' => 'jose@hotmail.com',
            'address' => 'Sant elias 22,Reus',
            )
    );
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::factory(10)->create();

         foreach ($this->arrayEstudiants as $estudiant) {
             $e = new Student;
             $e->name = $estudiant['name'];
             $e->email = $estudiant['email'];
             $e->address = $estudiant['address'];
             $e->save();
         }
    }
}
