<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Career;

class CareerSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $careers = [
            'Web Developer',
            'Web Designer',
            'Frontend Developer',
            'Backend Developer',
            'Fullstack Developer',
            'UI/UX Designer',
            'Product Designer',
            'UX Designer',
            'UI Designer',
            'Designer',
        ];

        for ($i = 0; $i < 10; $i++) {
            Career::create([
                'name' => $careers[$i],
                'description' => 'We are looking for a Web Developer to join our team.',
                'requirements' => 'Experience in web development, knowledge of HTML, CSS, and JavaScript.',
                'benefits' => 'Competitive salary, health insurance, and paid time off.',
            ]);
        }
    }
}
