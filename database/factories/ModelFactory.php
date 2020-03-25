<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Note;
use App\Student;
use App\Subject;
use App\Teacher;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});


$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(Subject::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle,
        'teacher_id' => factory('App\Teacher')->create()
    ];
});

$factory->define(Note::class, function (Faker $faker) {
    return [
        'note' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10) ,
        'subject_id' => factory('App\Subject')->create(),
        'student_id' => factory('App\Student')->create(),
    ];
});

