<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Food', 'Transport', 'Entertainment', 'Health', 'Education'];
        foreach($categories as $category){
            DB::table('categories')->insert([
                'name' => $category,
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
        }
    }
}
