<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    public function run()
    {
        // Insert predefined countries
        $countries = [
            'United States', 'Canada', 'Mexico', 'Brazil', 'Argentina',
            'United Kingdom', 'Germany', 'France', 'Italy', 'Spain',
            'Netherlands', 'Sweden', 'Norway', 'Denmark', 'Finland',
            'Australia', 'New Zealand', 'India', 'China', 'Japan',
            'South Korea', 'Russia', 'South Africa', 'Egypt', 'Nigeria',
            'Kenya', 'Saudi Arabia', 'United Arab Emirates', 'Turkey', 'Iran',
            'Pakistan', 'Bangladesh', 'Indonesia', 'Malaysia', 'Singapore',
            'Thailand', 'Vietnam', 'Philippines', 'Myanmar', 'Ukraine',
            'Poland', 'Greece', 'Portugal', 'Switzerland', 'Austria',
            'Belgium', 'Czech Republic', 'Hungary', 'Argentina', 'Chile',
            'Colombia'
        ];

        foreach ($countries as $country) {
            Country::create(['country' => $country]);
        }

        // Generate additional random countries (Optional)
        Country::factory(10)->create();
    }
}
