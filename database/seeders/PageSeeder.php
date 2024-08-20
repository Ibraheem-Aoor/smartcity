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
        $sub_pages = $this->getSubPages();
        foreach ($sub_pages as $page) {
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
                'theme' => 'ABOUT',
            ],
            // ACADEMIC AND RESEARCH HUB Dropdown
            [
                'title' => 'Our Branches',
                'slug' => 'our-branches',
                'content' => file_get_contents(public_path('html/core-services.html')),
                'meta_title' => 'Our Branches',
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
                'theme' => 'SMART TRAINING',
            ],
            [
                'title' => 'SMART Training and Development',
                'slug' => 'smart-training-development',
                'content' => file_get_contents(public_path('html/smart-training-development.html')),
                'meta_title' => 'SMART Training and Development',
                'meta_description' => 'Find out more about our SMART Training and Development programs.',
                'theme' => 'SMART TRAINING',
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

            [
                'title' => 'Our History',
                'slug' => 'history',
                'content' => file_get_contents(public_path('html/our-history.html')),
                'meta_title' => 'Our History',
                'meta_description' => 'Explore the history of our organization.',
                'theme' => 'ABOUT',
            ],
            [
                'title' => 'Executive Team',
                'slug' => 'executive-team',
                'content' => file_get_contents(public_path('html/executive-team.html')),
                'meta_title' => 'Executive Team',
                'meta_description' => 'Meet the executive team behind our organization.',
                'theme' => 'ABOUT',
            ],
            [
                'title' => 'Board of Trustees',
                'slug' => 'board-trustees',
                'content' => file_get_contents(public_path('html/board-of-trustees.html')),
                'meta_title' => 'Board of Trustees',
                'meta_description' => 'Learn about the members of our Board of Trustees.',
                'theme' => 'ABOUT',
            ],
            [
                'title' => 'Board of Consultants',
                'slug' => 'board-consultants',
                'content' => file_get_contents(public_path('html/board-of-consultants.html')),
                'meta_title' => 'Board of Consultants',
                'meta_description' => 'Get to know our Board of Consultants.',
                'theme' => 'ABOUT',
            ],
            [
                'title' => 'International British Universities',
                'slug' => 'international-british-universities',
                'content' => file_get_contents(public_path('html/international-british-universities.html')),
                'meta_title' => 'International British Universities',
                'meta_description' => 'International British Universities',
                'theme' => 'ACADEMIC AND RESEARCH HUB',
            ],
            [
                'title' => 'International American Universities',
                'slug' => 'international-american-universities',
                'content' => file_get_contents(public_path('html/international-american-universities.html')),
                'meta_title' => 'International american Universities',
                'meta_description' => 'International American Universities',
                'theme' => 'ACADEMIC AND RESEARCH HUB',
            ],

        ];
    }

    private function getSubPages(): array
    {
        return [
            [
                'title' => 'Exellence Center',
                'slug' => 'exellence-center',
                'content' => file_get_contents(public_path('html/exellence-center.html')),
                'meta_title' => 'Spaces',
                'meta_description' => 'Discover The British FAM Exellence Center',
                'theme' => 'british-fam-college',
                'parent_id' => Page::whereSlug('british-fam-college')->first()->id,
            ],
            [
                'title' => 'Academic Programs',
                'slug' => 'academic-programs',
                'content' => file_get_contents(public_path('html/academic-programs.html')),
                'meta_title' => 'Spaces',
                'meta_description' => 'Discover The British FAM Academic Programs',
                'theme' => 'british-fam-college',
                'parent_id' => Page::whereSlug('british-fam-college')->first()->id,
            ],
            // --- START GLOBAL ENGAGEMENT RELATED PAGES ----
            [
                'title' => 'International Business Development',
                'slug' => 'international-business-development',
                'content' => file_get_contents(public_path('html/international-business-development.html')),
                'meta_title' => 'international-business-development',
                'meta_description' => 'Discover The international-business-development',
                'theme' => 'GLOBAL ENGAGEMENT',
                'parent_id' => Page::whereSlug('business-partnerships')->first()->id,
            ],
            [
                'title' => 'Export and Import Services',
                'slug' => 'export-and-import-services',
                'content' => file_get_contents(public_path('html/export-and-import-services.html')),
                'meta_title' => 'export-and-import-services',
                'meta_description' => 'Comprehensive support for businesses looking to expand internationally, including trade agreements, customs procedures, and financial assistance.',
                'theme' => 'GLOBAL ENGAGEMENT',
                'parent_id' => Page::whereSlug('business-partnerships')->first()->id,
            ],
            [
                'title' => 'intellectual-property-protection',
                'slug' => 'intellectual-property-protection',
                'content' => file_get_contents(public_path('html/intellectual-property-protection.html')),
                'meta_title' => 'intellectual-property-protection',
                'meta_description' => 'Guidance on protecting intellectual property rights in international markets, including patent, trademark, and copyright registration, and dispute resolution mechanisms.',
                'theme' => 'GLOBAL ENGAGEMENT',
                'parent_id' => Page::whereSlug('business-partnerships')->first()->id,
            ],
            [
                'title' => 'Language Training and Translation Services',
                'slug' => 'language-training-and-translation-services',
                'content' => file_get_contents(public_path('html/language-training-and-translation-services.html')),
                'meta_title' => 'Language Training and Translation Services',
                'meta_description' => 'Tailored language courses and professional translation services to support international students and businesses.',
                'theme' => 'GLOBAL ENGAGEMENT',
                'parent_id' => Page::whereSlug('communication-platforms')->first()->id,
            ],
            [
                'title' => 'Cross-Cultural Training',
                'slug' => 'cross-cultural-training',
                'content' => file_get_contents(public_path('html/cross-cultural-training.html')),
                'meta_title' => 'Cross-Cultural Training',
                'meta_description' => 'Programs to enhance cultural awareness, communication skills, and etiquette for international interactions.',
                'theme' => 'GLOBAL ENGAGEMENT',
                'parent_id' => Page::whereSlug('communication-platforms')->first()->id,
            ],
            [
                'title' => 'Virtual Collaboration Tools',
                'slug' => 'virtual-collaboration-tools',
                'content' => file_get_contents(public_path('html/virtual-collaboration-tools.html')),
                'meta_title' => 'Virtual Collaboration Tools',
                'meta_description' => 'Access to advanced communication and collaboration platforms, online meeting tools, and virtual classrooms.',
                'theme' => 'GLOBAL ENGAGEMENT',
                'parent_id' => Page::whereSlug('communication-platforms')->first()->id,
            ],

            [
                'title' => 'International Research Partnerships',
                'slug' => 'international-research-partnerships',
                'content' => file_get_contents(public_path('html/international-research-partnerships.html')),
                'meta_title' => 'International Research Partnerships',
                'meta_description' => 'Explore opportunities for collaborative research with international institutions.',
                'theme' => 'GLOBAL ENGAGEMENT',
                'parent_id' => Page::whereSlug('global-collaborations')->first()->id,
            ],
            [
                'title' => 'Student Exchange Programs',
                'slug' => 'student-exchange-programs',
                'content' => file_get_contents(public_path('html/student-exchange-programs.html')),
                'meta_title' => 'Student Exchange Programs',
                'meta_description' => 'Find out about partnerships, funding, and cultural immersion programs for students.',
                'theme' => 'GLOBAL ENGAGEMENT',
                'parent_id' => Page::whereSlug('global-collaborations')->first()->id,

            ],
            [
                'title' => 'Faculty and Staff Exchange',
                'slug' => 'faculty-and-staff-exchange',
                'content' => file_get_contents(public_path('html/faculty-and-staff-exchange.html')),
                'meta_title' => 'Faculty and Staff Exchange',
                'meta_description' => 'Opportunities for faculty and staff to teach, research abroad, and professional development programs.',
                'theme' => 'GLOBAL ENGAGEMENT',
                'parent_id' => Page::whereSlug('global-collaborations')->first()->id,

            ],
            [
                'title' => 'International Academic Conferences',
                'slug' => 'international-academic-conferences',
                'content' => file_get_contents(public_path('html/international-academic-conferences.html')),
                'meta_title' => 'International Academic Conferences',
                'meta_description' => 'Details on hosting and participating in international academic conferences and networking opportunities.',
                'theme' => 'GLOBAL ENGAGEMENT',
                'parent_id' => Page::whereSlug('global-collaborations')->first()->id,

            ],
            //---- END GLOBAL ENGAGEMENT RELATED PAGES ---

            //---- START SMART CONSULTING PAGES ---

            [
                'title' => 'Strategic Consulting',
                'slug' => 'strategic-consulting',
                'content' => file_get_contents(public_path('html/strategic-consulting.html')),
                'meta_title' => 'Strategic Consulting',
                'meta_description' => 'Expert guidance in business strategy development, market research, competitive intelligence, and operational efficiency.',
                'theme' => 'BUSINESS AND INNOVATION ECOSYSTEM',
                'parent_id' => Page::whereSlug('smart-consultancies')->first()->id,
            ],
            [
                'title' => 'Technology Consulting',
                'slug' => 'technology-consulting',
                'content' => file_get_contents(public_path('html/technology-consulting.html')),
                'meta_title' => 'Technology Consulting',
                'meta_description' => 'Assistance with digital transformation, IT strategy, cybersecurity, and data analytics.',
                'theme' => 'BUSINESS AND INNOVATION ECOSYSTEM',
                'parent_id' => Page::whereSlug('smart-consultancies')->first()->id,
            ],
            [
                'title' => 'Innovation Consulting',
                'slug' => 'innovation-consulting',
                'content' => file_get_contents(public_path('html/innovation-consulting.html')),
                'meta_title' => 'Innovation Consulting',
                'meta_description' => 'Support in innovation management, idea generation, intellectual property strategy, and technology commercialization.',
                'theme' => 'BUSINESS AND INNOVATION ECOSYSTEM',
                'parent_id' => Page::whereSlug('smart-consultancies')->first()->id,
            ],
            [
                'title' => 'Sustainability Consulting',
                'slug' => 'sustainability-consulting',
                'content' => file_get_contents(public_path('html/sustainability-consulting.html')),
                'meta_title' => 'Sustainability Consulting',
                'meta_description' => 'Guidance on adopting sustainable business practices, environmental impact assessments, and green technology solutions.',
                'theme' => 'BUSINESS AND INNOVATION ECOSYSTEM',
                'parent_id' => Page::whereSlug('smart-consultancies')->first()->id,
            ],
            //---- END SMART CONSULTING PAGES ---

        ];
    }
}
