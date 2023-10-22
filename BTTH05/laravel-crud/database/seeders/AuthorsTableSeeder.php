<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Author;
use App\Models\Book;
use function Laravel\Prompts\table;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->delete(); //xóa dữ liệu đang có khi chạy lại bảng
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++){
            Author::create([
                'name'=>$faker->name,
                'bio'=>$faker->sentence(),
            ]);
        }
    }
}
