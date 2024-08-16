<?php

namespace Database\Seeders;

use App\Enum\TrainingProgramThemeEnum;
use App\Models\TrainingProgramCategory;
use App\Models\TrainingProgram;
use App\Models\TrainingProgramTranslation;
use Illuminate\Database\Seeder;

class TrainingProgramCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TrainingProgramCategory::query()->delete();

        $categories = [
            [
                'name' => 'ACC | ACCOUNTING',
                'image' => 'accounting.jpg',

                'programs' => [
                    [
                        'image' => 'acc100.jpg',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'ACC 100 Principles of Financial Accounting', 'quick_description' => 'Introduction to Financial Accounting.', 'description' => 'This course covers the basics of financial accounting...', 'feature_1' => 'Understand financial statements', 'feature_2' => 'Learn accounting principles', 'feature_3' => 'Practical applications of accounting']
                    ],
                    [
                        'image' => 'acc200.jpg',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ACC 200 Principles of Managerial Accounting', 'quick_description' => 'Introduction to Managerial Accounting.', 'description' => 'This course provides an overview of managerial accounting...', 'feature_1' => 'Cost behavior analysis', 'feature_2' => 'Budgeting techniques', 'feature_3' => 'Decision-making processes']
                    ],
                    [
                        'image' => 'acc210.jpg',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ACC 210 Cost Accounting', 'quick_description' => 'Introduction to Cost Accounting.', 'description' => 'This course provides an overview of cost accounting...', 'feature_1' => 'Cost concepts', 'feature_2' => 'Cost-volume-profit analysis', 'feature_3' => 'Cost management strategies']
                    ],
                    [
                        'image' => 'acc350.jpg',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ACC 350 Taxation', 'quick_description' => 'Introduction to Taxation.', 'description' => 'This course covers the principles of taxation...', 'feature_1' => 'Tax regulations', 'feature_2' => 'Tax planning strategies', 'feature_3' => 'Tax compliance']
                    ],
                    [
                        'image' => 'acc410.jpg',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ACC 410 Advanced Accounting', 'quick_description' => 'Advanced concepts in Accounting.', 'description' => 'This course delves into advanced accounting topics...', 'feature_1' => 'Complex accounting standards', 'feature_2' => 'Financial reporting', 'feature_3' => 'Consolidation of financial statements']
                    ],
                    [
                        'image' => 'acc420.jpg',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ACC 420 Auditing I', 'quick_description' => 'Introduction to Auditing.', 'description' => 'This course provides an overview of auditing principles...', 'feature_1' => 'Audit procedures', 'feature_2' => 'Internal controls', 'feature_3' => 'Audit evidence']
                    ],
                    [
                        'image' => 'acc440.jpg',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ACC 440 International Accounting', 'quick_description' => 'Accounting principles in an international context.', 'description' => 'This course covers international accounting standards...', 'feature_1' => 'International Financial Reporting Standards (IFRS)', 'feature_2' => 'Global accounting practices', 'feature_3' => 'Cross-border transactions']
                    ],
                    [
                        'image' => 'acc500.jpg',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'ACC 500 Accounting for Managers', 'quick_description' => 'Accounting principles for managers.', 'description' => 'This course focuses on accounting concepts relevant to managers...', 'feature_1' => 'Managerial accounting principles', 'feature_2' => 'Financial decision-making', 'feature_3' => 'Performance measurement']
                    ],
                ],
            ],
            [
                'name' => 'BUS | BUSINESS',
                'image' => 'business.jpg',

                'programs' => [
                    [
                        'image' => 'bus100.jpg',
                        'theme' => 'Global Business',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'BUS 100 Global Dimensions of Business', 'quick_description' => 'Introduction to global business.', 'description' => 'This course explores the global dimensions of business...', 'feature_1' => 'Global market strategies', 'feature_2' => 'International trade practices', 'feature_3' => 'Cross-cultural management']
                    ],
                    [
                        'image' => 'bus110.jpg',
                        'theme' => 'Communication',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 110 Business Communication', 'quick_description' => 'Effective communication in business.', 'description' => 'This course focuses on communication strategies in business...', 'feature_1' => 'Professional writing skills', 'feature_2' => 'Verbal communication techniques', 'feature_3' => 'Presentation skills']
                    ],
                    [
                        'image' => 'bus200.jpg',
                        'theme' => 'Entrepreneurship',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 200 Business Entrepreneurship', 'quick_description' => 'Introduction to Entrepreneurship.', 'description' => 'This course covers the fundamentals of starting and managing a business...', 'feature_1' => 'Business planning', 'feature_2' => 'Startup strategies', 'feature_3' => 'Risk management']
                    ],
                    [
                        'image' => 'bus300.jpg',
                        'theme' => 'Ethics',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 300 Business Ethics', 'quick_description' => 'Ethical considerations in business.', 'description' => 'This course addresses ethical issues in business...', 'feature_1' => 'Ethical decision-making', 'feature_2' => 'Corporate social responsibility', 'feature_3' => 'Ethics in leadership']
                    ],
                    [
                        'image' => 'bus310.jpg',
                        'theme' => 'Law',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 310 Business Law', 'quick_description' => 'Legal aspects of business.', 'description' => 'This course covers legal principles affecting businesses...', 'feature_1' => 'Contract law', 'feature_2' => 'Business regulations', 'feature_3' => 'Legal dispute resolution']
                    ],
                    [
                        'image' => 'bus320.jpg',
                        'theme' => 'International Business',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 320 Business International Business', 'quick_description' => 'International business practices.', 'description' => 'This course focuses on international business practices...', 'feature_1' => 'Global market strategies', 'feature_2' => 'Cross-cultural negotiations', 'feature_3' => 'International trade regulations']
                    ],
                    [
                        'image' => 'bus330.jpg',
                        'theme' => 'E-Commerce',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'BUS 330 E-Commerce', 'quick_description' => 'Business in the digital age.', 'description' => 'This course covers e-commerce strategies and technologies...', 'feature_1' => 'Online business models', 'feature_2' => 'Digital marketing', 'feature_3' => 'E-commerce platforms']
                    ],
                    [
                        'image' => 'bus400.jpg',
                        'theme' => 'Strategy',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'BUS 400 Business Strategy and Policy', 'quick_description' => 'Developing and implementing business strategies.', 'description' => 'This course focuses on business strategy formulation...', 'feature_1' => 'Strategic planning', 'feature_2' => 'Policy development', 'feature_3' => 'Competitive analysis']
                    ],
                    [
                        'image' => 'bus540.jpg',
                        'theme' => 'Law',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 540 Business Law for Managers', 'quick_description' => 'Business law concepts for managers.', 'description' => 'This course covers business law topics relevant to managers...', 'feature_1' => 'Legal issues in management', 'feature_2' => 'Contract management', 'feature_3' => 'Risk management']
                    ],
                    [
                        'image' => 'bus590.jpg',
                        'theme' => 'Strategy',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 590 Business Strategy', 'quick_description' => 'Strategic management in business.', 'description' => 'This course covers advanced topics in business strategy...', 'feature_1' => 'Strategic decision-making', 'feature_2' => 'Strategic analysis', 'feature_3' => 'Implementation and control']
                    ],
                    [
                        'image' => 'bus590k.jpg',
                        'theme' => 'Operations',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 590K Operations Strategy', 'quick_description' => 'Strategies for operations management.', 'description' => 'This course focuses on operational strategies for businesses...', 'feature_1' => 'Operations planning', 'feature_2' => 'Process optimization', 'feature_3' => 'Supply chain management']
                    ],
                    [
                        'image' => 'bus680.jpg',
                        'theme' => 'Innovation',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 680 Sustainability and Innovation', 'quick_description' => 'Innovative practices for sustainability.', 'description' => 'This course explores sustainable business practices...', 'feature_1' => 'Sustainability strategies', 'feature_2' => 'Innovation management', 'feature_3' => 'Sustainable development']
                    ],
                    [
                        'image' => 'bus860.jpg',
                        'theme' => 'Ethics',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 860 Business Ethics and Social Responsibility', 'quick_description' => 'Ethics and social responsibility in business.', 'description' => 'This course covers ethical and social responsibility issues...', 'feature_1' => 'Ethical frameworks', 'feature_2' => 'Corporate social responsibility', 'feature_3' => 'Ethical leadership']
                    ],
                ],
            ],
            [
                'name' => 'COM | COMMUNICATIONS',
                'image' => 'communications.jpg',

                'programs' => [
                    [
                        'image' => 'com100.jpg',
                        'theme' => 'Mass Communication',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'COM 100 Mass Communication', 'quick_description' => 'Introduction to mass communication.', 'description' => 'This course provides an overview of mass communication...', 'feature_1' => 'Media channels', 'feature_2' => 'Communication theories', 'feature_3' => 'Media effects']
                    ],
                    [
                        'image' => 'com500.jpg',
                        'theme' => 'Public Speaking',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'COM 500 Public Speaking for Managers', 'quick_description' => 'Effective public speaking for managers.', 'description' => 'This course focuses on public speaking techniques for managers...', 'feature_1' => 'Speech preparation', 'feature_2' => 'Presentation skills', 'feature_3' => 'Audience engagement']
                    ],
                ],
            ],
            [
                'name' => 'ECN | ECONOMICS',
                'image' => 'economics.jpg',

                'programs' => [
                    [
                        'image' => 'ecn200.jpg',
                        'theme' => 'Microeconomics',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'ECN 200 Microeconomics', 'quick_description' => 'Introduction to microeconomics.', 'description' => 'This course covers the fundamentals of microeconomics...', 'feature_1' => 'Supply and demand', 'feature_2' => 'Market structures', 'feature_3' => 'Consumer behavior']
                    ],
                    [
                        'image' => 'ecn210.jpg',
                        'theme' => 'Macroeconomics',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ECN 210 Macroeconomics', 'quick_description' => 'Introduction to macroeconomics.', 'description' => 'This course covers the fundamentals of macroeconomics...', 'feature_1' => 'Economic growth', 'feature_2' => 'Inflation and unemployment', 'feature_3' => 'Fiscal and monetary policy']
                    ],
                    [
                        'image' => 'ecn300.jpg',
                        'theme' => 'Money and Banking',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ECN 300 Money and Banking', 'quick_description' => 'Money and banking systems.', 'description' => 'This course focuses on money and banking systems...', 'feature_1' => 'Banking operations', 'feature_2' => 'Monetary policy', 'feature_3' => 'Financial institutions']
                    ],
                    [
                        'image' => 'ecn500.jpg',
                        'theme' => 'Managerial Economics',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ECN 500 Managerial Economics', 'quick_description' => 'Economic analysis for managerial decisions.', 'description' => 'This course focuses on applying economic principles to managerial decisions...', 'feature_1' => 'Demand analysis', 'feature_2' => 'Cost analysis', 'feature_3' => 'Pricing strategies']
                    ],
                    [
                        'image' => 'ecn510.jpg',
                        'theme' => 'International Economics',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ECN 510 International Economics', 'quick_description' => 'International trade and finance.', 'description' => 'This course covers international trade and finance...', 'feature_1' => 'Trade theories', 'feature_2' => 'Exchange rates', 'feature_3' => 'Global financial markets']
                    ],
                    [
                        'image' => 'ecn520.jpg',
                        'theme' => 'Money, Banking & Financial Systems',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ECN 520 Money, Banking & Financial Systems', 'quick_description' => 'Comprehensive study of financial systems.', 'description' => 'This course provides an in-depth study of money, banking, and financial systems...', 'feature_1' => 'Financial system components', 'feature_2' => 'Banking regulations', 'feature_3' => 'Monetary policy impacts']
                    ],
                ],
            ],
            [
                'name' => 'ENG | ENGLISH',
                'image' => 'english.jpg',

                'programs' => [
                    [
                        'image' => 'eng100.jpg',
                        'theme' => 'Composition',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'ENG 100 English Composition', 'quick_description' => 'Fundamentals of English composition.', 'description' => 'This course focuses on the fundamentals of English composition...', 'feature_1' => 'Writing techniques', 'feature_2' => 'Grammar and style', 'feature_3' => 'Essay writing']
                    ],
                    [
                        'image' => 'eng110.jpg',
                        'theme' => 'Academic Writing',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ENG 110 Undergraduate Academic Writing/APA', 'quick_description' => 'Academic writing and APA style.', 'description' => 'This course covers academic writing principles and APA style...', 'feature_1' => 'Research papers', 'feature_2' => 'APA formatting', 'feature_3' => 'Academic integrity']
                    ],
                    [
                        'image' => 'eng300.jpg',
                        'theme' => 'Critical Thinking',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ENG 300 Critical Thinking', 'quick_description' => 'Developing critical thinking skills.', 'description' => 'This course focuses on developing critical thinking and analytical skills...', 'feature_1' => 'Logical reasoning', 'feature_2' => 'Argument analysis', 'feature_3' => 'Problem-solving']
                    ],
                ],
            ],
            [
                'name' => 'FIN | FINANCE',
                'image' => 'finance.jpg',

                'programs' => [
                    [
                        'image' => 'fin440.jpg',
                        'theme' => 'Financial Analysis',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'FIN 440 Financial Statement Analysis', 'quick_description' => 'Analyzing financial statements.', 'description' => 'This course covers the analysis of financial statements...', 'feature_1' => 'Financial ratios', 'feature_2' => 'Statement analysis', 'feature_3' => 'Financial forecasting']
                    ],
                    [
                        'image' => 'fin500.jpg',
                        'theme' => 'Financial Management',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'FIN 500 Financial Management', 'quick_description' => 'Managing financial resources.', 'description' => 'This course covers financial management principles...', 'feature_1' => 'Financial planning', 'feature_2' => 'Investment decisions', 'feature_3' => 'Capital budgeting']
                    ],
                    [
                        'image' => 'fin530.jpg',
                        'theme' => 'International Finance',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'FIN 530 International Financial Management', 'quick_description' => 'International financial management.', 'description' => 'This course covers principles of international financial management...', 'feature_1' => 'Foreign exchange markets', 'feature_2' => 'International investments', 'feature_3' => 'Global financial strategies']
                    ],
                    [
                        'image' => 'fin540.jpg',
                        'theme' => 'Markets & Institutions',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'FIN 540 Financial Markets & Institutions', 'quick_description' => 'Financial markets and institutions.', 'description' => 'This course focuses on financial markets and institutions...', 'feature_1' => 'Market structures', 'feature_2' => 'Institutional functions', 'feature_3' => 'Regulatory environment']
                    ],
                    [
                        'image' => 'fin550.jpg',
                        'theme' => 'Mergers & Acquisitions',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'FIN 550 Mergers, Acquisitions, Restructuring, and Corporate Governance', 'quick_description' => 'Corporate restructuring and governance.', 'description' => 'This course covers mergers, acquisitions, and corporate governance...', 'feature_1' => 'M&A strategies', 'feature_2' => 'Restructuring processes', 'feature_3' => 'Governance structures']
                    ],
                ],
            ],
            [
                'name' => 'HCA | HEALTHCARE ADMINISTRATION',
                'image' => 'healthcare.jpg',

                'programs' => [
                    [
                        'image' => 'hca510.jpg',
                        'theme' => 'Healthcare Law',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'HCA 510 Health Care Law and Ethics', 'quick_description' => 'Legal and ethical issues in healthcare.', 'description' => 'This course covers legal and ethical issues in healthcare...', 'feature_1' => 'Healthcare regulations', 'feature_2' => 'Ethical dilemmas', 'feature_3' => 'Legal compliance']
                    ],
                    [
                        'image' => 'hca520.jpg',
                        'theme' => 'Leadership',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'HCA 520 Dynamic Health Care Leadership', 'quick_description' => 'Leadership in healthcare settings.', 'description' => 'This course focuses on leadership skills in healthcare settings...', 'feature_1' => 'Leadership strategies', 'feature_2' => 'Team management', 'feature_3' => 'Change management']
                    ],
                    [
                        'image' => 'hca530.jpg',
                        'theme' => 'Human Resource Management',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'HCA 530 Healthcare Human Resource Management', 'quick_description' => 'HR management in healthcare.', 'description' => 'This course covers HR management principles in healthcare...', 'feature_1' => 'HR practices', 'feature_2' => 'Employee relations', 'feature_3' => 'Compliance issues']
                    ],
                ],
            ],
            [
                'name' => 'HTT | HOSPITALITY, TRAVEL, & TOURISM',
                'image' => 'hospitality.jpg',

                'programs' => [
                    [
                        'image' => 'htt500.jpg',
                        'theme' => 'Global Hospitality',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'HTT 500 Global Hospitality & Tourism', 'quick_description' => 'Global perspectives in hospitality.', 'description' => 'This course covers global perspectives in hospitality and tourism...', 'feature_1' => 'Global trends', 'feature_2' => 'Tourism management', 'feature_3' => 'Hospitality services']
                    ],
                    [
                        'image' => 'htt505.jpg',
                        'theme' => 'Hotel Operations',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'HTT 505 Hotel Operations Management', 'quick_description' => 'Managing hotel operations.', 'description' => 'This course focuses on managing hotel operations...', 'feature_1' => 'Hotel management', 'feature_2' => 'Operational efficiency', 'feature_3' => 'Guest services']
                    ],
                    [
                        'image' => 'htt510.jpg',
                        'theme' => 'Restaurant Management',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'HTT 510 Restaurant & Culinary Management', 'quick_description' => 'Managing restaurant and culinary operations.', 'description' => 'This course covers restaurant and culinary management...', 'feature_1' => 'Restaurant operations', 'feature_2' => 'Menu planning', 'feature_3' => 'Customer service']
                    ],
                ],
            ],
            [
                'name' => 'MGT | MANAGEMENT',
                'image' => 'management.jpg',

                'programs' => [
                    [
                        'image' => 'mgt320.jpg',
                        'theme' => 'Organizational Theory',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'MGT 320 Organizational Theory and Behavior', 'quick_description' => 'Theories of organizational behavior.', 'description' => 'This course explores theories of organizational behavior...', 'feature_1' => 'Organizational structures', 'feature_2' => 'Behavioral theories', 'feature_3' => 'Motivation']
                    ],
                    [
                        'image' => 'mgt400.jpg',
                        'theme' => 'Operations Management',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'MGT 400 Operations Management', 'quick_description' => 'Managing operations in organizations.', 'description' => 'This course covers principles of operations management...', 'feature_1' => 'Operations strategies', 'feature_2' => 'Process improvement', 'feature_3' => 'Resource management']
                    ],
                    [
                        'image' => 'mgt500.jpg',
                        'theme' => 'Organizational Behavior',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'MGT 500 Organizational Behavior and Leadership', 'quick_description' => 'Behavior and leadership in organizations.', 'description' => 'This course covers organizational behavior and leadership...', 'feature_1' => 'Leadership styles', 'feature_2' => 'Behavioral analysis', 'feature_3' => 'Change management']
                    ],
                    [
                        'image' => 'mgt510.jpg',
                        'theme' => 'Human Resource Management',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'MGT 510 Human Resource Management', 'quick_description' => 'Human resource management practices.', 'description' => 'This course focuses on human resource management practices...', 'feature_1' => 'Recruitment', 'feature_2' => 'Employee development', 'feature_3' => 'Performance management']
                    ],
                    [
                        'image' => 'mgt600.jpg',
                        'theme' => 'Organizational Theory & Design',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'MGT 600 Organizational Theory & Design', 'quick_description' => 'Organizational design and theory.', 'description' => 'This course focuses on organizational design and theory...', 'feature_1' => 'Organizational structures', 'feature_2' => 'Design principles', 'feature_3' => 'Organizational change']
                    ],
                    [
                        'image' => 'mgt605.jpg',
                        'theme' => 'Materials Management',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'MGT 605 Materials Management', 'quick_description' => 'Managing materials and inventory.', 'description' => 'This course focuses on materials management and inventory control...', 'feature_1' => 'Inventory management', 'feature_2' => 'Procurement', 'feature_3' => 'Supply chain integration']
                    ],
                    [
                        'image' => 'mgt620.jpg',
                        'theme' => 'Operations and Supply Chain',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'MGT 620 Operations Management and Supply Chain', 'quick_description' => 'Managing operations and supply chains.', 'description' => 'This course covers operations management and supply chain principles...', 'feature_1' => 'Supply chain strategies', 'feature_2' => 'Operations efficiency', 'feature_3' => 'Supply chain analytics']
                    ],
                    [
                        'image' => 'mgt620k.jpg',
                        'theme' => 'Operations and Supply Chain',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'MGT 620K Operations Management and Supply Chain', 'quick_description' => 'Advanced operations and supply chain management.', 'description' => 'This course focuses on advanced topics in operations management and supply chain...', 'feature_1' => 'Advanced supply chain strategies', 'feature_2' => 'Process optimization', 'feature_3' => 'Global supply chains']
                    ],
                    [
                        'image' => 'mgt630.jpg',
                        'theme' => 'Quality Management',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'MGT 630 Quality Management in Supply Chain', 'quick_description' => 'Quality management in supply chains.', 'description' => 'This course focuses on quality management in supply chains...', 'feature_1' => 'Quality control', 'feature_2' => 'Continuous improvement', 'feature_3' => 'Supplier quality management']
                    ],
                    [
                        'image' => 'mgt650k.jpg',
                        'theme' => 'Consumer Management',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'MGT 650K Consumer Management for Beauty Industry', 'quick_description' => 'Consumer management in the beauty industry.', 'description' => 'This course covers consumer management strategies specific to the beauty industry...', 'feature_1' => 'Consumer behavior', 'feature_2' => 'Beauty industry trends', 'feature_3' => 'Consumer relationship management']
                    ],
                ],
            ],
        ];

        foreach ($categories as $category) {
            $cat = TrainingProgramCategory::create([
                getCurrentLocale() => [
                    'name' => $category['name'],
                ],
                'image' => $category['image'],
            ]);

            foreach ($category['programs'] as $program) {
                $course = TrainingProgram::create([
                    'category_id' => $cat->id,
                    'image' => $program['image'],
                    'theme' => TrainingProgramThemeEnum::ProfessionalTraining->value,
                    'status' => $program['status'],
                    'show_in_home' => $program['show_in_home'],
                ]);

                TrainingProgramTranslation::create([
                    'training_program_id' => $course->id,
                    'locale' => 'en',
                    'name' => $program['translations']['name'],
                    'quick_description' => $program['translations']['quick_description'],
                    'description' => $program['translations']['description'],
                    'feature_1' => $program['translations']['feature_1'],
                    'feature_2' => $program['translations']['feature_2'],
                    'feature_3' => $program['translations']['feature_3'],
                ]);
            }
        }
    }
}
