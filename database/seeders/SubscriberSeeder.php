<?php

namespace Database\Seeders;

use App\Models\Subscriber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timestamp = now();
        $subscribers = [
            ['name' => 'Alice Johnson', 'email' => 'alice.johnson@example.com', 'created_at' => $timestamp],
            ['name' => 'Bob Smith', 'email' => 'bob.smith@example.com', 'created_at' => $timestamp],
            ['name' => 'Charlie Davis', 'email' => 'charlie.davis@example.com', 'created_at' => $timestamp],
            ['name' => 'Diana Lee', 'email' => 'diana.lee@example.com', 'created_at' => $timestamp],
            ['name' => 'Ethan Brown', 'email' => 'ethan.brown@example.com', 'created_at' => $timestamp],
        ];

        Subscriber::insert($subscribers);
    }
}
