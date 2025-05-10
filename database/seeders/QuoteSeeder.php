<?php

namespace Database\Seeders;

use App\Models\Quote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quotes = [
            ['quote' => 'Success is not final, failure is not fatal: it is the courage to continue that counts.', 'author' => 'Winston Churchill'],
            ['quote' => 'The only way to do great work is to love what you do.', 'author' => 'Steve Jobs'],
            ['quote' => 'Don’t watch the clock; do what it does. Keep going.', 'author' => 'Sam Levenson'],
            ['quote' => 'Believe you can and you\'re halfway there.', 'author' => 'Theodore Roosevelt'],
            ['quote' => 'The future depends on what you do today.', 'author' => 'Mahatma Gandhi'],
            ['quote' => 'It does not matter how slowly you go as long as you do not stop.', 'author' => 'Confucius'],
            ['quote' => 'Hardships often prepare ordinary people for an extraordinary destiny.', 'author' => 'C.S. Lewis'],
            ['quote' => 'You miss 100% of the shots you don’t take.', 'author' => 'Wayne Gretzky'],
            ['quote' => 'Everything you’ve ever wanted is on the other side of fear.', 'author' => 'George Addair'],
            ['quote' => 'What lies behind us and what lies before us are tiny matters compared to what lies within us.', 'author' => 'Ralph Waldo Emerson'],
            ['quote' => 'Act as if what you do makes a difference. It does.', 'author' => 'William James'],
            ['quote' => 'Start where you are. Use what you have. Do what you can.', 'author' => 'Arthur Ashe'],
            ['quote' => 'Dream big and dare to fail.', 'author' => 'Norman Vaughan'],
            ['quote' => 'It always seems impossible until it’s done.', 'author' => 'Nelson Mandela'],
            ['quote' => 'Be yourself; everyone else is already taken.', 'author' => 'Oscar Wilde'],
        ];

        Quote::insert($quotes);
    }
}
