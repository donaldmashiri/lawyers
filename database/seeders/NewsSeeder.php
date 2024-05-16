<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create([
            'news_type' => 'news',
            'title' => 'New Study Reveals Alarming Increase in Cybercrime Rates',
            'summary' => ' A recently published study has unveiled a concerning surge in cybercrime rates worldwide. The study, conducted by a renowned cybersecurity research organization, analyzed data from various sources and identified a significant rise in cyberattacks across multiple sectors. The findings emphasize the critical need for individuals and organizations to enhance their cybersecurity measures to mitigate the growing risks.',
        ]);

        News::create([
            'news_type' => 'news',
            'title' => 'Government Implements New Tax Reform Policy to Boost Economic Growth',
            'summary' => 'In an effort to stimulate economic growth and attract investments, the government has introduced a comprehensive tax reform policy. The policy aims to streamline the taxation system, reduce corporate tax rates, and incentivize small businesses. Experts predict that this move will spur economic activity, create job opportunities, and enhance the countrys competitiveness in the global market.',
        ]);

        News::create([
            'news_type' => 'article',
            'title' => 'Breakthrough Medical Research Offers Hope for Alzheimers Treatment',
            'summary' => 'A groundbreaking medical research study has made significant strides in understanding the mechanisms behind Alzheimers disease. The study, conducted by a team of renowned scientists, has identified potential targets for therapeutic interventions that could slow down or even reverse the progression of the disease. This discovery brings hope to millions of individuals affected by Alzheimers and paves the way for future advancements in treatment options.',
        ]);
    }
}
