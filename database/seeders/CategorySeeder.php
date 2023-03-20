<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    private $categories = [
        [
            "name" => "Uomo"
        ],
        [
            "name" => "Donna"
        ],
        [
            "name" => "Bambino"
        ],
    ];
    public function run(): void
    {
        foreach($this->categories as $category)
        {
            //Qui ci va insert nel database
            Category::create([
                "name" => $category['name']
            ]);
        }
    }
}
