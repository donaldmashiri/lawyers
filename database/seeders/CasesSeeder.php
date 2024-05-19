<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cases = [
            [
                'case_type' => 'Contract disputes',
                'case_description' => 'This case involves a contract dispute between Company A and Company B regarding the delivery of goods. Similar cases include Smith v. Jones (2018) where a delivery contract was contested.',
                'case_document' => 'contract_disputes.pdf',
                'client_name' => 'John Doe',
                'client_contact' => 'john.doe@example.com',
                'case_deadline' => Carbon::now()->addDays(30)->format('Y-m-d'),
            ],
            [
                'case_type' => 'Criminal cases',
                'case_description' => 'The client is accused of theft under Section 379 of the Penal Code. A related case is State v. Davis (2019) where similar charges were brought forward.',
                'case_document' => 'criminal_cases.pdf',
                'client_name' => 'Jane Smith',
                'client_contact' => 'jane.smith@example.com',
                'case_deadline' => Carbon::now()->addDays(60)->format('Y-m-d'),
            ],
            [
                'case_type' => 'Bankruptcy',
                'case_description' => 'The client is filing for bankruptcy under Chapter 7. Refer to Johnson v. Wells Fargo (2017) for similar bankruptcy proceedings.',
                'case_document' => 'bankruptcy.pdf',
                'client_name' => 'Bob Brown',
                'client_contact' => 'bob.brown@example.com',
                'case_deadline' => Carbon::now()->addDays(45)->format('Y-m-d'),
            ],
            [
                'case_type' => 'Personal injury',
                'case_description' => 'The client sustained injuries in a car accident and is seeking damages. A related case is Taylor v. Johnson (2016) where the plaintiff was awarded significant compensation.',
                'case_document' => 'personal_injury.pdf',
                'client_name' => 'Alice White',
                'client_contact' => 'alice.white@example.com',
                'case_deadline' => Carbon::now()->addDays(90)->format('Y-m-d'),
            ],
            [
                'case_type' => 'Property law',
                'case_description' => 'This case involves a dispute over property boundaries. Refer to Brown v. Green (2015) for a similar property law issue.',
                'case_document' => 'property_law.pdf',
                'client_name' => 'Charlie Green',
                'client_contact' => 'charlie.green@example.com',
                'case_deadline' => Carbon::now()->addDays(120)->format('Y-m-d'),
            ],
            [
                'case_type' => 'Family law',
                'case_description' => 'The client is seeking a divorce and custody of their children. See Williams v. Williams (2018) for related family law matters.',
                'case_document' => 'family_law.pdf',
                'client_name' => 'Diana Blue',
                'client_contact' => 'diana.blue@example.com',
                'case_deadline' => Carbon::now()->addDays(150)->format('Y-m-d'),
            ],
        ];


        foreach ($cases as $case) {
            \App\Models\Cases::firstOrCreate(
                [
                    'case_type' => $case['case_type'],
                    'case_description' => $case['case_description'],
                ],
                [
                    'client_name' => $case['client_name'],
                    'case_document' => $case['case_document'],
                    'client_contact' => $case['client_contact'],
                    'case_deadline' => $case['case_deadline'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }


    }
}
