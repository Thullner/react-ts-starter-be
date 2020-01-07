<?php

use Illuminate\Database\Seeder;
use App\Book;
use Illuminate\Support\Facades\URL;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create(['name' => 'The Gunslinger', 'year' => 1982, 'imageURL' => URL::to('/storage/the-gunslinger.jpg')]);
        Book::create(['name' => 'The Name of the Wind', 'year' => 2007, 'imageURL' => URL::to('/storage/the-name-of-the-wind.jpg')]);
        Book::create(['name' => 'The Firm', 'year' => 1991, 'imageURL' => URL::to('/storage/the-firm.jpg')]);
    }
}
