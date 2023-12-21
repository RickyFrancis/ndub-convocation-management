<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;


class GraduateListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {

            $account_clearance = $faker->boolean;
            $due_amount = $account_clearance ? $faker->randomFloat(2, 0, 5000) : 0;
            $academic_year = $faker->numberBetween(2016, 2020);
            $admission_year = $faker->numberBetween(2012, 2016);
            $result_publish_date = $faker->dateTimeBetween('-2 years', 'now');
            $programs = ['BSc. in Computer Science & Engineering', 'Bachelor of Business Administration (BBA)', 'Bachelor of Arts in English Language & Literature', 'Bachelor of Laws [LL.B.(Hons.)]'];
            $trimesters = ['FALL', 'SPRING', 'SUMMER'];


            DB::table('graduate_lists')->insert([
                'name' => $faker->name,
                'student_id' => $faker->unique()->numerify('###'),
                'program' => $faker->randomElement($programs),
                'batch' => $faker->randomElement(['BBA 12', 'CSE 7', 'ELL 8', 'LLB 15']),
                'department' => $faker->randomElement(['BBA', 'CSE', 'ELL', 'LLB', 'MBA', 'MCSE']),
                'major' => $faker->randomElement(['Marketing', 'HRM', 'Management', 'Finance']),
                'minor' => $faker->randomElement(['Accounting', 'Business Math', 'Statistics', 'Economics']),
                'academic_year' => $academic_year,
                'admission_year' => $admission_year,
                'ssc_passing_year' => $academic_year,
                'hsc_passing_year' => $academic_year,
                'admission_semester' => $academic_year,
                'father_name' => $faker->name('male'),
                'mother_name' => $faker->name('female'),
                'phone' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'blood_group' => $faker->randomElement(['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-']),
                'credit_earned' => $faker->numberBetween(120, 150),
                'birth_certificate_no' => $faker->numberBetween(100, 130),
                'cgpa' => $faker->randomFloat(2, 2.5, 4.0),
                'ssc_result' => $faker->randomFloat(2.5, 3.5, 5.0),
                'hsc_result' => $faker->randomFloat(2.5, 3.5, 5.0),
                'cgpa' => $faker->randomFloat(2, 2.5, 4.0),
                'result_publish_date' => $result_publish_date,
                'dob' => $result_publish_date,
                'passing_trimester' => $faker->randomElement($trimesters) . ' ' . ($academic_year + 4),
                'account_clearance' => $account_clearance,
                'due_amount' => $due_amount,
                'library_clearance' => $faker->boolean,
                'administrative_clearance' => $faker->boolean,
                'department_clearance' => $faker->boolean,
            ]);
        }
    }
}
