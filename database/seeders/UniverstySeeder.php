<?php

namespace Database\Seeders;

use App\Enum\UniversityTypeEnum;
use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniverstySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $universities = $this->getDataToSeed();
        University::query()->delete();
        foreach ($universities as $university) {
            University::create($university);
        }
    }

    public function getDataToSeed(): array
    {
        return [
            [
                getCurrentLocale() => [
                    'name' => 'International Americn University',
                    'description' => fake()->paragraph(3),
                ],
                'image' => 'https://img.freepik.com/premium-photo/college-campus-indiana-university-exterior-limestone-architecture_501731-5673.jpg?w=360',
                'type' => UniversityTypeEnum::INTERNATIONAL,
                'status' => true,
            ],
            [
                getCurrentLocale() => [
                    'name' => 'International Birtish University',
                    'description' => fake()->paragraph(3),
                ],
                'image' => 'https://img.freepik.com/free-photo/vertical-shot-radcliffe-camera-oxford-england_181624-2116.jpg?t=st=1724527183~exp=1724530783~hmac=c7af16c95d1a244f4914450e30608a0c6bc0bbec50a09d6be56b4772a4905210&w=360',
                'type' => UniversityTypeEnum::INTERNATIONAL,
                'status' => true,


            ]
        ];
    }
}
