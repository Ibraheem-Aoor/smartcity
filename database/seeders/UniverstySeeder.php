<?php

namespace Database\Seeders;

use App\Enum\UniversityTypeEnum;
use App\Models\University;
use App\Models\UniversityProgramCategory;
use App\Models\UniversityProgram;
use Illuminate\Database\Seeder;

class UniverstySeeder extends Seeder
{
    public function run(): void
    {
        $universities = $this->getDataToSeed();
        University::query()->delete();

        foreach ($universities as $university) {
            $parentUniversity = University::create($university['university']);
            if (isset($university['sub_universities'])) {
                foreach ($university['sub_universities'] as $subUniversity) {
                    $subUniversity['parent_id'] = $parentUniversity->id;
                    $createdSubUniversity = University::create($subUniversity);

                    // Seed programs and categories based on the university name
                    $this->seedBritishUniversityPrograms($createdSubUniversity);
                }
            }
            // Seed Programs and Categories for American University
            if ($parentUniversity->name === 'American University') {
                $this->seedProgramsAndCategories($parentUniversity);
            }
        }
    }

    public function getDataToSeed(): array
    {
        return [
            [
                'university' => [
                    getCurrentLocale() => [
                        'name' => 'British Universities',
                        'description' => 'British universities are globally recognized for their academic excellence and innovation, offering world-class education and research opportunities across a wide range of disciplines.',
                    ],
                    'image' => 'https://img.freepik.com/free-photo/vertical-shot-radcliffe-camera-oxford-england_181624-2116.jpg',
                    'type' => UniversityTypeEnum::INTERNATIONAL,
                    'status' => true,
                ],
                'sub_universities' => [
                    [
                        getCurrentLocale() => [
                            'name' => 'University of London',
                            'description' => 'The University of London is a world-renowned university providing flexible and distance learning to students across the globe.',
                        ],
                        'image' => 'https://demo.htmlcodex.com/1427/online-courses-html-template/img/cat-1.jpg',
                        'type' => UniversityTypeEnum::INTERNATIONAL,
                        'status' => true,
                    ],
                    [
                        getCurrentLocale() => [
                            'name' => 'University of Edinburgh',
                            'description' => 'Located in the heart of Scotland, the University of Edinburgh is one of the most prestigious universities globally.',
                        ],
                        'image' => 'https://demo.htmlcodex.com/1427/online-courses-html-template/img/cat-2.jpg',
                        'type' => UniversityTypeEnum::INTERNATIONAL,
                        'status' => true,
                    ],
                    [
                        getCurrentLocale() => [
                            'name' => 'University of Oxford',
                            'description' => 'As one of the oldest universities in the world, Oxford has a rich tradition of academic excellence.',
                        ],
                        'image' => 'https://demo.htmlcodex.com/1427/online-courses-html-template/img/cat-3.jpg',
                        'type' => UniversityTypeEnum::INTERNATIONAL,
                        'status' => true,
                    ],
                    [
                        getCurrentLocale() => [
                            'name' => 'University of Cambridge',
                            'description' => 'The University of Cambridge is celebrated for its long-standing history of academic excellence and groundbreaking research.',
                        ],
                        'image' => 'https://demo.htmlcodex.com/1427/online-courses-html-template/img/cat-4.jpg',
                        'type' => UniversityTypeEnum::INTERNATIONAL,
                        'status' => true,
                    ],
                ],
            ],
            [
                'university' => [
                    getCurrentLocale() => [
                        'name' => 'American University',
                        'description' => 'The American University is a globally recognized institution offering dynamic, interdisciplinary academic programs.',
                    ],
                    'image' => 'https://img.freepik.com/free-photo/vertical-shot-radcliffe-camera-oxford-england_181624-2116.jpg',
                    'type' => UniversityTypeEnum::INTERNATIONAL,
                    'status' => true,
                ],
            ],
        ];
    }

    private function seedProgramsAndCategories(University $university)
    {
        // Seed categories for American University
        $dbaCategory = UniversityProgramCategory::create([
            getCurrentLocale() => [
                'name' => 'Doctor of Business Administration (DBA)',
                'description' => 'Advanced business administration programs designed to provide high-level expertise in management.',
            ],
            'image' => 'https://img.freepik.com/free-photo/caucasian-businessman-sitting-desk-front-computer-writing-document-folder_1098-20576.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid'
        ]);

        $mbaCategory = UniversityProgramCategory::create([
            getCurrentLocale() => [
                'name' => 'Master of Business Administration (MBA)',
                'description' => 'Graduate-level programs focusing on developing business leadership and management skills.',
            ],
            'image' => 'https://img.freepik.com/free-photo/modern-office-composition-with-businessman_23-2147900141.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid'
        ]);

        // Seed programs for both DBA and MBA
        $programs = [
            'Doctor of Management (DM)' => 'https://img.freepik.com/free-photo/caucasian-businessman-sitting-desk-front-computer-writing-document-folder_1098-20576.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
            'Agribusiness DBA' => 'https://img.freepik.com/free-photo/bearded-male-researcher-studies-plants-with-tablet-standing-greenhouse_8353-7155.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
            'Beauty Management DBA' => 'https://img.freepik.com/premium-photo/attractive-caucasian-middle-aged-woman-white-terry-bathrobe-medical-appointment-cosmetological-wellness-spa-clinic-getting-ready-receive-professional-skin-body-care_328764-8714.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
            'Business Analytics DBA' => 'https://img.freepik.com/free-photo/bar-graph-statistics-analysis-business-concept_53876-128027.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
            'Economics Finance DBA' => 'https://img.freepik.com/premium-photo/chart-analyze_948100-1526.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
            'Healthcare Administration DBA' => 'https://img.freepik.com/premium-photo/medical-technology-concepts-medical-students-use-mobile-phones-search-information-modern-office-morning-desk_533890-529.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
            'Agribusiness MBA' => 'https://img.freepik.com/free-photo/bearded-male-researcher-studies-plants-with-tablet-standing-greenhouse_8353-7155.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
            'Beauty Management MBA' => 'https://img.freepik.com/premium-photo/attractive-caucasian-middle-aged-woman-white-terry-bathrobe-medical-appointment-cosmetological-wellness-spa-clinic-getting-ready-receive-professional-skin-body-care_328764-8714.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
        ];

        foreach ($programs as $program => $image) {
            $category = str_contains($program, 'DBA') ? $dbaCategory : $mbaCategory;
            UniversityProgram::create([
                'status' => true,
                'category_id' => $category->id,
                'university_id' => $university->id,
                'image' => $image,
                getCurrentLocale() => [
                    'name' => $program,
                    'description' => fake()->paragraph(2),
                ]
            ]);
        }
    }

    private function seedBritishUniversityPrograms(University $university)
    {
        // Define categories and programs with images for British universities
        $universityCategories = [
            'University of London' => [
                'categories' => [
                    [
                        'name' => 'Business Administration',
                        'description' => 'Programs designed to equip students with leadership and management skills in business, these courses are meticulously crafted to offer both theoretical foundations and practical, hands-on experiences. Students will learn about key areas such as finance, marketing, human resources, and strategic management. Whether you are aiming to climb the corporate ladder or manage your own business, these programs provide the essential knowledge needed to navigate the complexities of today’s business environment.',
                        'image' => 'https://img.freepik.com/free-photo/business-man-financial-inspector-secretary-making-report-calculating-checking-balance-internal-revenue-service-inspector-checking-document-audit-concept_1423-126.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'Master of Business Administration (MBA)',
                                'description' => 'The MBA program is designed for professionals aiming to develop advanced management skills and business acumen. The curriculum blends academic theory with practical business experience, covering leadership, strategic planning, financial management, and operations. Graduates of this program are prepared for leadership roles in both global corporations and entrepreneurial ventures, giving them the flexibility to adapt to various business environments.',
                                'image' => 'https://img.freepik.com/free-photo/modern-office-composition-with-businessman_23-2147900141.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ],
                            [
                                'name' => 'Bachelor of Business Administration (BBA)',
                                'description' => 'The BBA offers a comprehensive education in business fundamentals, ideal for those looking to start a career in business or move into more advanced studies like the MBA. This program focuses on innovation, entrepreneurship, and global business practices, providing students with an in-depth understanding of the commercial world and how to succeed in a competitive marketplace.',
                                'image' => 'https://img.freepik.com/premium-photo/successful-business-man-office-working-with-laptop_158518-536.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ],
                            [
                                'name' => 'Diploma in Business Management (DBM)',
                                'description' => 'This diploma program focuses on equipping students with essential management skills needed for entry-level management positions or entrepreneurship. The DBM covers crucial areas such as team leadership, project management, and business communications, preparing students for real-world challenges in the fast-paced business environment.',
                                'image' => 'https://img.freepik.com/premium-photo/business-iso-certification-process-quality-management-business-companies-control_1006743-380.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ],
                    [
                        'name' => 'Healthcare Management',
                        'description' => 'These programs are designed to prepare students for leadership roles in the healthcare sector. Covering everything from healthcare policies to operations management, these courses provide the necessary tools to manage healthcare organizations efficiently while focusing on improving patient care and navigating the complex regulatory environment of the healthcare industry.',
                        'image' => 'https://img.freepik.com/free-photo/man-working-laptop-network-graphic-overlay_53876-123687.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'Master of Healthcare Administration (MHA)',
                                'description' => 'The MHA is an advanced program aimed at professionals who are looking to step into leadership roles within the healthcare industry. This program covers essential topics such as healthcare operations, finance, human resource management, and healthcare laws. Graduates will be equipped to lead healthcare institutions effectively and make decisions that enhance the quality of patient care.',
                                'image' => 'https://img.freepik.com/premium-photo/healthcare-business-medical-data-growth-graph-business-chart-doctor-work-with-professional-team_1101054-31360.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ],
                            [
                                'name' => 'Diploma in Healthcare Management (DHM)',
                                'description' => 'This program focuses on the foundational aspects of managing healthcare institutions. Students will gain practical insights into healthcare finance, operations, and patient services. Designed for individuals who want to quickly step into healthcare management roles, the DHM provides the skills needed to ensure smooth and efficient operations in healthcare settings.',
                                'image' => 'https://img.freepik.com/free-photo/medical-banner-with-doctor-wearing-stethoscope_23-2149611228.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ]
                ]
            ],
            'University of Edinburgh' => [
                'categories' => [
                    [
                        'name' => 'Entrepreneurship',
                        'description' => 'Designed to foster innovative thinking and business startup strategies, these programs offer students the skills needed to successfully launch and scale businesses. Focusing on entrepreneurship and management, these courses cover topics such as venture creation, innovation, and funding strategies. Students will leave with the tools to turn their ideas into viable business ventures.',
                        'image' => 'https://img.freepik.com/free-photo/start-up-business-goals-strategy_53876-124798.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'Master of Entrepreneurship (ME)',
                                'description' => 'This program is designed for individuals aiming to launch or grow their businesses. The ME program offers in-depth instruction on entrepreneurial strategy, venture capital, innovation management, and leadership. Graduates will be equipped to create business plans, attract investors, and manage business growth, making it a perfect fit for aspiring entrepreneurs and business leaders.',
                                'image' => 'https://img.freepik.com/free-photo/start-up-business-goals-strategy_53876-124798.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ],
                            [
                                'name' => 'Diploma in Startup Management (DSM)',
                                'description' => 'The DSM is a hands-on program that teaches practical skills required to launch a business. From creating business models to securing funding, this diploma equips students with a roadmap to navigate the challenges of starting and running a successful startup. It is perfect for aspiring entrepreneurs seeking to turn ideas into profitable businesses.',
                                'image' => 'https://img.freepik.com/free-photo/businessman-pointing-graphs-symbols_1232-917.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt
                        ais_hybrid',
                            ]
                        ],
                    ],
                    [
                        'name' => 'Finance',
                        'description' => 'Focused on financial analysis, investment strategies, and global market leadership, these programs offer students the opportunity to develop a robust understanding of the financial world. Students will learn about financial markets, investment banking, portfolio management, and risk analysis, equipping them with the skills to excel in careers such as financial advisors, analysts, and corporate finance leaders.',
                        'image' => 'https://img.freepik.com/free-photo/stacks-coins-arranged-bar-graph_35913-2518.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'Global Master in Finance (GMF)',
                                'description' => 'The GMF program is designed for individuals seeking to gain a deep understanding of the global financial system. Covering topics such as international finance, investment strategies, risk management, and economic trends, this program prepares students for high-level financial positions in multinational corporations, financial institutions, and investment firms.',
                                'image' => 'https://img.freepik.com/free-photo/business-man-financial-inspector-secretary-making-report-calculating-checking-balance-internal-revenue-service-inspector-checking-document-audit-concept_1423-126.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ]
                ]
            ]
        ];


        if (isset($universityCategories[$university->name])) {
            foreach ($universityCategories[$university->name]['categories'] as $categoryData) {
                $category = UniversityProgramCategory::create([
                    getCurrentLocale() => [
                        'name' => $categoryData['name'],
                        'description' => $categoryData['description'],
                    ],
                    'image' => $categoryData['image']
                ]);

                foreach ($categoryData['programs'] as $programData) {
                    UniversityProgram::create([
                        'status' => true,
                        'category_id' => $category->id,
                        'university_id' => $university->id,
                        'image' => $programData['image'],
                        getCurrentLocale() => [
                            'name' => $programData['name'],
                            'description' => $programData['description'],
                        ]
                    ]);
                }
            }
        }
    }
}
