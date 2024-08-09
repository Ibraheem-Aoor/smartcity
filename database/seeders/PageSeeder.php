<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run()
    {
        $pages = $this->getDataToSeed();
        foreach ($pages as $page) {
            Page::updateOrCreate([
                'slug' => $page['slug'],
            ], $page);
        }
    }

    protected function getDataToSeed(): array
    {
        return [
            // 1- about page
            [
                'title' => 'About',
                'slug' => 'about',
                'content' => file_get_contents(public_path('html/about.html')),
            ],
            // ACADEMIC AND RESEARCH HUB Dropdown
            [
                'title' => 'Core Services',
                'slug' => 'core-services',
                'content' => file_get_contents(public_path('html/core-services.html')),
                'meta_title' => 'Core Services',
                'meta_description' => 'Explore our core services including academic support, research facilities, and more.',
                'theme' => 'ACADEMIC AND RESEARCH HUB',
            ],
            [
                'title' => 'International Partnerships',
                'slug' => 'international-partnerships',
                'content' => file_get_contents(public_path('html/international-partnerships.html')),
                'meta_title' => 'International Partnerships',
                'meta_description' => 'Discover our international partnerships and collaborative opportunities.',
                'theme' => 'ACADEMIC AND RESEARCH HUB',
            ],
            [
                'title' => 'Local Universities',
                'slug' => 'local-universities',
                'content' => file_get_contents(public_path('html/local-universities.html')),
                'meta_title' => 'Local Universities',
                'meta_description' => 'Learn about our connections with local universities and academic institutions.',
                'theme' => 'ACADEMIC AND RESEARCH HUB',
            ],
            [
                'title' => 'Academic Venues',
                'slug' => 'academic-venues',
                'content' => file_get_contents(public_path('html/academic-venues.html')),
                'meta_title' => 'Academic Venues',
                'meta_description' => 'Find information on various academic venues we are associated with.',
                'theme' => 'ACADEMIC AND RESEARCH HUB',
            ],
            [
                'title' => 'Graduate School of Business & Entrepreneurship',
                'slug' => 'graduate-school-business-entrepreneurship',
                'content' => file_get_contents(public_path('html/graduate-school-business-entrepreneurship.html')),
                'meta_title' => 'Graduate School of Business & Entrepreneurship',
                'meta_description' => 'Explore our Graduate School of Business and Entrepreneurship programs.',
                'theme' => 'ACADEMIC AND RESEARCH HUB',
            ],
            [
                'title' => 'British FAM College',
                'slug' => 'british-fam-college',
                'content' => file_get_contents(public_path('html/british-fam-college.html')),
                'meta_title' => 'British FAM College',
                'meta_description' => 'Get details about British FAM College and its offerings.',
                'theme' => 'ACADEMIC AND RESEARCH HUB',
            ],
            // BUSINESS AND INNOVATION ECOSYSTEM Dropdown
            [
                'title' => 'SMART Consultancies',
                'slug' => 'smart-consultancies',
                'content' => file_get_contents(public_path('html/smart-consultancies.html')),
                'meta_title' => 'SMART Consultancies',
                'meta_description' => 'Learn about SMART Consultancies and how they can help your business.',
                'theme' => 'BUSINESS AND INNOVATION ECOSYSTEM',
            ],
            [
                'title' => 'SMART Incubators',
                'slug' => 'smart-incubators',
                'content' => file_get_contents(public_path('html/smart-incubators.html')),
                'meta_title' => 'SMART Incubators',
                'meta_description' => 'Explore our SMART Incubators and their benefits.',
                'theme' => 'BUSINESS AND INNOVATION ECOSYSTEM',
            ],
            [
                'title' => 'Remote Freelancing Platform',
                'slug' => 'remote-freelancing-platform',
                'content' => file_get_contents(public_path('html/remote-freelancing-platform.html')),
                'meta_title' => 'Remote Freelancing Platform',
                'meta_description' => 'Discover our remote freelancing platform and its features.',
                'theme' => 'BUSINESS AND INNOVATION ECOSYSTEM',
            ],
            [
                'title' => 'SMART Training and Development',
                'slug' => 'smart-training-development',
                'content' => file_get_contents(public_path('html/smart-training-development.html')),
                'meta_title' => 'SMART Training and Development',
                'meta_description' => 'Find out more about our SMART Training and Development programs.',
                'theme' => 'BUSINESS AND INNOVATION ECOSYSTEM',
            ],
            // GLOBAL ENGAGEMENT Dropdown
            [
                'title' => 'Business Partnerships',
                'slug' => 'business-partnerships',
                'content' => file_get_contents(public_path('html/business-partnerships.html')),
                'meta_title' => 'Business Partnerships',
                'meta_description' => 'Learn about our global business partnerships.',
                'theme' => 'GLOBAL ENGAGEMENT',
            ],
            [
                'title' => 'Communication Platforms',
                'slug' => 'communication-platforms',
                'content' => file_get_contents(public_path('html/communication-platforms.html')),
                'meta_title' => 'Communication Platforms',
                'meta_description' => 'Explore our communication platforms for global engagement.',
                'theme' => 'GLOBAL ENGAGEMENT',
            ],
            [
                'title' => 'Global Collaborations',
                'slug' => 'global-collaborations',
                'content' => file_get_contents(public_path('html/global-collaborations.html')),
                'meta_title' => 'Global Collaborations',
                'meta_description' => 'Discover our global collaboration opportunities.',
                'theme' => 'GLOBAL ENGAGEMENT',
            ],
            // SMART TRAINING Dropdown
            [
                'title' => 'Conventional Training',
                'slug' => 'conventional-training',
                'content' => file_get_contents(public_path('html/conventional-training.html')),
                'meta_title' => 'Conventional Training',
                'meta_description' => 'Learn about our conventional training programs.',
                'theme' => 'SMART TRAINING',
            ],
            [
                'title' => 'Professional Training',
                'slug' => 'professional-training',
                'content' => file_get_contents(public_path('html/professional-training.html')),
                'meta_title' => 'Professional Training',
                'meta_description' => 'Explore our professional training programs.',
                'theme' => 'SMART TRAINING',
            ],
            [
                'title' => 'Accredited Training',
                'slug' => 'accredited-training',
                'content' => file_get_contents(public_path('html/accredited-training.html')),
                'meta_title' => 'Accredited Training',
                'meta_description' => 'Find information on accredited training programs.',
                'theme' => 'SMART TRAINING',
            ],
            [
                'title' => 'E-training',
                'slug' => 'e-training',
                'content' => file_get_contents(public_path('html/e-training.html')),
                'meta_title' => 'E-training',
                'meta_description' => 'Discover our e-training solutions.',
                'theme' => 'SMART TRAINING',
            ],
            // REMOTE FREELANCING ARENA Dropdown
            [
                'title' => 'Remote Freelancing Platforms',
                'slug' => 'remote-freelancing-platforms',
                'content' => file_get_contents(public_path('html/remote-freelancing-platforms.html')),
                'meta_title' => 'Remote Freelancing Platforms',
                'meta_description' => 'Explore various remote freelancing platforms available.',
                'theme' => 'REMOTE FREELANCING ARENA',
            ],
            [
                'title' => 'Support',
                'slug' => 'support',
                'content' => file_get_contents(public_path('html/support.html')),
                'meta_title' => 'Support',
                'meta_description' => 'Get support for remote freelancing.',
                'theme' => 'REMOTE FREELANCING ARENA',
            ],
            [
                'title' => 'Training',
                'slug' => 'training',
                'content' => file_get_contents(public_path('html/training.html')),
                'meta_title' => 'Training',
                'meta_description' => 'Find training resources for remote freelancing.',
                'theme' => 'REMOTE FREELANCING ARENA',
            ],
            [
                'title' => 'Spaces',
                'slug' => 'spaces',
                'content' => file_get_contents(public_path('html/spaces.html')),
                'meta_title' => 'Spaces',
                'meta_description' => 'Discover spaces available for remote freelancing.',
                'theme' => 'REMOTE FREELANCING ARENA',
            ],
        ];

    }
}
