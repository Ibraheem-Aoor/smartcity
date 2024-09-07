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
                    'image' => 'https://img.freepik.com/premium-photo/college-campus-indiana-university-exterior-limestone-architecture_501731-5673.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
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

        $programs = [
            'Doctor of Management (DM)' => [
                'image' => 'https://img.freepik.com/free-photo/caucasian-businessman-sitting-desk-front-computer-writing-document-folder_1098-20576.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'description' => 'The Doctor of Management (DM) program equips leaders with advanced strategic management and decision-making skills. It focuses on innovation, leadership, and business transformation to foster successful organizational growth.'
            ],
            'Agribusiness DBA' => [
                'image' => 'https://img.freepik.com/free-photo/bearded-male-researcher-studies-plants-with-tablet-standing-greenhouse_8353-7155.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'description' => 'The Agribusiness DBA provides advanced knowledge in agricultural economics, supply chain management, and sustainable farming practices. It prepares professionals to lead in the global agricultural business sector.'
            ],
            'Beauty Management DBA' => [
                'image' => 'https://img.freepik.com/premium-photo/attractive-caucasian-middle-aged-woman-white-terry-bathrobe-medical-appointment-cosmetological-wellness-spa-clinic-getting-ready-receive-professional-skin-body-care_328764-8714.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'description' => 'The Beauty Management DBA focuses on the business aspects of the beauty and wellness industry. It prepares professionals to lead and innovate in areas such as cosmetic production, salon management, and brand development.'
            ],
            'Business Analytics DBA' => [
                'image' => 'https://img.freepik.com/free-photo/bar-graph-statistics-analysis-business-concept_53876-128027.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'description' => 'The Business Analytics DBA trains executives to apply data-driven decision-making and predictive analytics to business strategies. Graduates will gain expertise in advanced data analysis, big data, and AI-driven solutions for business challenges.'
            ],
            'Economics Finance DBA' => [
                'image' => 'https://img.freepik.com/premium-photo/chart-analyze_948100-1526.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'description' => 'The Economics Finance DBA program provides in-depth expertise in financial markets, risk management, and economic policy. It is designed to develop leaders in finance who can manage complex economic systems and drive financial innovation.'
            ],
            'Healthcare Administration DBA' => [
                'image' => 'https://img.freepik.com/premium-photo/medical-technology-concepts-medical-students-use-mobile-phones-search-information-modern-office-morning-desk_533890-529.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'description' => 'The Healthcare Administration DBA prepares executives for leadership roles in healthcare organizations. The program covers healthcare management, policy, and administration to improve operational efficiency and patient care outcomes.'
            ],
            'Agribusiness MBA' => [
                'image' => 'https://img.freepik.com/free-photo/bearded-male-researcher-studies-plants-with-tablet-standing-greenhouse_8353-7155.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'description' => 'The Agribusiness MBA provides professionals with the skills needed to manage agricultural enterprises. It emphasizes agribusiness economics, sustainable practices, and the global food supply chain, preparing graduates for leadership roles.'
            ],
            'Beauty Management MBA' => [
                'image' => 'https://img.freepik.com/premium-photo/attractive-caucasian-middle-aged-woman-white-terry-bathrobe-medical-appointment-cosmetological-wellness-spa-clinic-getting-ready-receive-professional-skin-body-care_328764-8714.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'description' => 'The Beauty Management MBA focuses on the intersection of business and beauty. It covers topics such as beauty brand management, marketing, and entrepreneurship, giving students the tools to succeed in the growing beauty industry.'
            ],
        ];

        foreach ($programs as $program => $data) {
            $category = str_contains($program, 'DBA') ? $dbaCategory : $mbaCategory;
            UniversityProgram::create([
                'status' => true,
                'category_id' => $category->id,
                'university_id' => $university->id,
                'image' => $data['image'],
                getCurrentLocale() => [
                    'name' => $program,
                    'description' => $data['description'],
                ]
            ]);
        }

    }

    private function seedBritishUniversityPrograms(University $university)
    {
        // Define categories and programs with images for various universities
        $universityCategories = [
            'University of London' => [
                'categories' => [
                    [
                        'name' => 'Business Administration',
                        'description' => 'Programs designed to equip students with leadership and management skills in business...',
                        'image' => 'https://img.freepik.com/free-photo/business-man-financial-inspector-secretary-making-report_1423-126.jpg',
                        'programs' => [
                            [
                                'name' => 'Master of Business Administration (MBA)',
                                'description' => 'The MBA program blends academic theory with practical experience...',
                                'image' => 'https://img.freepik.com/free-photo/modern-office-businessman_23-2147900141.jpg',
                            ],
                            [
                                'name' => 'Diploma in Business Management (DBM)',
                                'description' => 'Focuses on essential management skills needed for entry-level positions...',
                                'image' => 'https://img.freepik.com/premium-photo/business-certification-process_1006743-380.jpg',
                            ]
                        ],
                    ],
                    [
                        'name' => 'Healthcare Management',
                        'description' => 'Prepare for leadership roles in the healthcare sector...',
                        'image' => 'https://img.freepik.com/free-photo/man-working-laptop_53876-123687.jpg',
                        'programs' => [
                            [
                                'name' => 'Master of Healthcare Administration (MHA)',
                                'description' => 'Designed for professionals looking to step into healthcare leadership roles...',
                                'image' => 'https://img.freepik.com/premium-photo/healthcare-business-data-growth_1101054-31360.jpg',
                            ],
                            [
                                'name' => 'Diploma in Healthcare Management (DHM)',
                                'description' => 'Provides practical insights into healthcare finance and operations...',
                                'image' => 'https://img.freepik.com/free-photo/doctor-wearing-stethoscope_23-2149611228.jpg',
                            ]
                        ],
                    ],
                    [
                        'name' => 'Finance',
                        'description' => 'Programs focused on financial analysis, investment strategies...',
                        'image' => 'https://img.freepik.com/free-photo/stacks-coins-arranged-bar-graph_35913-2518.jpg',
                        'programs' => [
                            [
                                'name' => 'Global Master in Finance (GMF)',
                                'description' => 'Designed for individuals aiming for high-level financial roles...',
                                'image' => 'https://img.freepik.com/free-photo/business-man-financial-inspector-secretary-making-report_1423-126.jpg',
                            ]
                        ],
                    ]
                ],
            ],
            'University of Edinburgh' => [
                'categories' => [
                    [
                        'name' => 'Global MBA',
                        'description' => 'Focused on global business management...',
                        'image' => 'https://img.freepik.com/free-photo/global-business-strategy_53876-124798.jpg',
                        'programs' => [
                            [
                                'name' => 'Global Master of Business Administration (Global MBA)',
                                'description' => 'A global perspective on business management...',
                                'image' => 'https://img.freepik.com/free-photo/businessman-pointing-graphs-symbols_1232-917.jpg',
                            ]
                        ],
                    ],
                    [
                        'name' => 'Entrepreneurship',
                        'description' => 'Designed to foster innovative thinking and startup strategies...',
                        'image' => 'https://img.freepik.com/free-photo/startup-strategy_53876-124798.jpg',
                        'programs' => [
                            [
                                'name' => 'Master of Entrepreneurship (ME)',
                                'description' => 'In-depth instruction on entrepreneurial strategy...',
                                'image' => 'https://img.freepik.com/free-photo/startup-strategy_53876-124798.jpg',
                            ],
                            [
                                'name' => 'Diploma in Startup Management (DSM)',
                                'description' => 'Practical skills to launch and run a business...',
                                'image' => 'https://img.freepik.com/free-photo/business-graphs_1232-917.jpg',
                            ]
                        ],
                    ]
                ],
            ],
            'University of Oxford' => [
                'categories' => [
                    [
                        'name' => 'Computer Science',
                        'description' => 'Advanced programs in computer science and software engineering...',
                        'image' => 'https://img.freepik.com/free-photo/computer-code_1232-917.jpg',
                        'programs' => [
                            [
                                'name' => 'Master of Science in Computer Science (MSc)',
                                'description' => 'Focuses on advanced topics in computing, AI, and algorithms...',
                                'image' => 'https://img.freepik.com/free-photo/computer-code_1232-917.jpg',
                            ]
                        ],
                    ],
                    [
                        'name' => 'Data Science',
                        'description' => 'Provides a comprehensive approach to big data, analytics, and machine learning...',
                        'image' => 'https://img.freepik.com/free-photo/data-analysis-graphs_1232-917.jpg',
                        'programs' => [
                            [
                                'name' => 'Master of Science in Data Science (MSc)',
                                'description' => 'Covering big data, analytics, and machine learning...',
                                'image' => 'https://img.freepik.com/free-photo/data-analysis-graphs_1232-917.jpg',
                            ]
                        ],
                    ]
                ],
            ],
            'University of Cambridge' => [
                'categories' => [
                    [
                        'name' => 'Engineering Management',
                        'description' => 'Designed to develop management skills for engineering projects...',
                        'image' => 'https://img.freepik.com/free-photo/engineering-management_1232-917.jpg',
                        'programs' => [
                            [
                                'name' => 'Master of Science in Engineering Management (MSc)',
                                'description' => 'Focuses on the integration of engineering and management practices...',
                                'image' => 'https://img.freepik.com/free-photo/engineering-management_1232-917.jpg',
                            ]
                        ],
                    ],
                    [
                        'name' => 'Artificial Intelligence',
                        'description' => 'Covers AI technologies and machine learning systems...',
                        'image' => 'https://img.freepik.com/free-photo/artificial-intelligence_1232-917.jpg',
                        'programs' => [
                            [
                                'name' => 'Master of Science in Artificial Intelligence (MSc)',
                                'description' => 'Comprehensive study of AI and machine learning...',
                                'image' => 'https://img.freepik.com/free-photo/artificial-intelligence_1232-917.jpg',
                            ]
                        ],
                    ]
                ],
            ],
            // Add more universities with the same structure...
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
