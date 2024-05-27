<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Validation\Rules\Unique;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.k
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $prefix = 'C030322';
        $faker = \Faker\Factory::create(); // Create a Faker instance
        $randomdigits = $faker->unique()->numberBetween(100, 200);
    
        return [
            'nama'=>fake()->name(),
            'npm'=>$prefix. $randomdigits,
            'no_hp'=>fake()->phoneNumber(),
            'mata_kuliah'=>fake()->randomElement(['Pemrograman Internet dan E-Commerce','Pemrograman Berorientasi Objek','Sistem Operasi','Grafika Komputasi','Metode Numerik','Teori Bahasa Automata','Bahasa Inggris']),
            'jam'=>fake()->randomElement(['08:00','09:00','10:00','11:00','12:00']),
            'saran_komentar'=>$this->generateComment($faker)
        ];
    }
    private function generateComment(Faker $faker): string
    {
        return $faker->sentence(3);
    }
}
