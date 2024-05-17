<?php

namespace Database\Seeders;

use App\Models\Research;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResearchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Research::firstOrCreate ([
            'type' => 'Contract Disputes',
            'date' => 'March 12, 2023',
            'ruling' => ' In favor of the plaintiff.',
            'details' => 'The case involved a contract dispute between a construction company (plaintiff) and a property developer (defendant). The plaintiff claimed that the defendant failed to fulfill their contractual obligations by not completing the construction project on time. The defendant argued that the delay was due to unforeseen circumstances. After reviewing the evidence and testimonies, the court ruled in favor of the plaintiff, stating that the defendant did not provide sufficient evidence to support their claim of unforeseen circumstances.',
        ]);

        Research::firstOrCreate ([
            'type' => 'Criminal Cases',
            'date' => 'October 5, 2022',
            'ruling' => 'Guilty verdict.',
            'details' => 'The case involved a criminal charge of robbery against John Doe (defendant). The prosecution presented evidence, including surveillance footage and witness testimonies, linking the defendant to the crime scene. The defense argued that the defendant had an alibi and could not have committed the robbery. However, the jury found the defendant guilty based on the weight of the evidence presented by the prosecution, leading to a guilty verdict.',
        ]);

        Research::firstOrCreate ([
            'type' => 'Bankruptcy',
            'date' => 'May 18, 2021',
            'ruling' => 'Bankruptcy granted.',
            'details' => 'The case involved an individual (debtor) filing for bankruptcy due to overwhelming debt. The debtor provided evidence of their financial situation, including outstanding loans, unpaid bills, and inability to meet financial obligations. After reviewing the documentation and considering the debtors circumstances, the court granted the bankruptcy petition, relieving the debtor of their financial obligations and providing a fresh start.',
        ]);

        Research::firstOrCreate ([
            'type' => 'Personal Injury',
            'date' => 'September 2, 2023',
            'ruling' => 'Bankruptcy granted.',
            'details' => 'The case involved a personal injury claim filed by Jane Smith (plaintiff) against a car manufacturer (defendant). Jane Smith claimed that she suffered severe injuries in a car accident due to a defect in the vehicles braking system. The defendant denied the allegations and argued that the accident was caused by the plaintiffs negligence. However, during the litigation process, the parties reached a settlement agreement outside of court, compensating the plaintiff for her injuries and avoiding a trial.',
        ]);

        Research::firstOrCreate ([
            'type' => 'Property Law',
            'date' => 'July 10, 2024',
            'ruling' => 'Divorce granted.',
            'details' => 'The case involved a property dispute between two neighbors. Neighbor A (plaintiff) claimed that Neighbor B (defendant) was constructing a fence that encroached onto their property. Neighbor A argued that the encroachment violated their property rights. After considering the evidence, including land surveys and property deeds, the court granted an injunction, ordering Neighbor B to remove the encroaching fence and restore the property boundaries.',
        ]);

        Research::firstOrCreate ([
            'type' => 'Family Law',
            'date' => 'December 3, 2022',
            'ruling' => 'Injunction granted.',
            'details' => 'The case involved a divorce petition filed by John Doe (plaintiff) against Jane Doe (defendant). The plaintiff cited irreconcilable differences and a breakdown of the marital relationship as grounds for divorce. Both parties presented their arguments and provided evidence supporting their claims. After careful consideration, the court granted the divorce, dissolving the marriage and addressing matters such as child custody, spousal support, and property division based on the applicable family law regulations.',
        ]);
    }
}
