<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Town;
use App\Models\House;
use App\Models\HouseType;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $home_types = [
            'Дом', 'Коттедж',  'ТаунХаус',  'Квартира',
        ];
        $currency = ['RUB', 'USD'];
        Town::factory(3)->create();
        for ($i = 0; $i < 4; ++$i) {
            HouseType::factory(1)->create(['title' => $home_types[$i]]);
        }
        House::factory(10)->create(['defaultCurrency' => $currency[random_int(0, 1)]]);
        User::factory(1)->create([
            'name' => 'Admin',
            'email' => 'Admin@example.com',
            'password' => bcrypt('12345678'),
            'su' => true,
        ]);
        User::factory(1)->create([
            'name' => 'Manager',
            'email' => 'Manager@example.com',
            'password' => bcrypt('12345678'),
            'su' => false,
        ]);
    }
}
