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
                'image' => '23',
                'type' => UniversityTypeEnum::INTERNATIONAL,
                'status' => true,
            ],
            [
                getCurrentLocale() => [
                    'name' => 'International Birtish University',
                    'description' => fake()->paragraph(3),
                ],
                'image' => '23',
                'type' => UniversityTypeEnum::INTERNATIONAL,
                'status' => true,


            ]
        ];
    }
}
