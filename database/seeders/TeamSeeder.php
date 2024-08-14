<?php

namespace Database\Seeders;

use App\Models\TeamMemberCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorries = $this->getCategoriesToSeed();
        foreach ($categorries as $category) {
            $created_category = TeamMemberCategory::query()->updateOrCreate(['order' => $category['order']], $category);
            $created_category->members()->delete();
            $created_category->members()->createMany($this->getMembersToSeed());
        }
    }

    public function getCategoriesToSeed(): array
    {
        return [
            // 1
            [
                getCurrentLocale() => [
                    'name' => 'Executive Team',
                ],
                'order' => 1,
                'show_in_home' => true,
            ],
            // 1
            [
                getCurrentLocale() => [
                    'name' => 'Board of Trustees',
                ],
                'order' => 2,
                'show_in_home' => true,
            ],
            // 1
            [
                getCurrentLocale() => [
                    'name' => 'Board of Consultants',
                ],
                'order' => 3,
                'show_in_home' => true,
            ],
        ];
    }

    /**
     * fake data
     * @return array
     */
    private function getMembersToSeed(): array
    {
        $members = [];
        for ($i = 0; $i < 4; $i++) {

            $members[] = [
                    'image' => '232',
                    'name' => fake()->name('male')->len,
                    'designation' => fake()->jobTitle(),
                    'facebook' => fake()->url(),
                    'instagram' => fake()->url(),
                    'twitter' => fake()->url(),
                    'linkedin' => fake()->url(),
            ];
        }
        return $members;
    }
}
