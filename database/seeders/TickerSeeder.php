<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TickerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ticket::create([
            'air_company' => 'VietNam Airline',
            'start_location' => 'Hai Phong',
            'end_location' => 'Ho Chi Minh',
            'type' => 'normal',
            'start_time' => Carbon::parse('20:30 1-8-2023'),
            'flight_number' => '123',
            'price' => '2000000',
            'tax' => '200000',
            'total_price' => '2200000',
            'deposit_fee' => '0',
        ],);
        Ticket::create([
            'air_company' => 'VietNam Airline',
            'start_location' => 'Hai Phong',
            'end_location' => 'Da nang',
            'type' => 'vip',
            'start_time' => Carbon::parse('15:20 5-8-2023'),
            'flight_number' => '1234',
            'price' => '3000000',
            'tax' => '100000',
            'total_price' => '3100000',
            'deposit_fee' => '0',
        ]);
        Ticket::create([
            'air_company' => 'VietNam Airline',
            'start_location' => 'Hai Phong',
            'end_location' => 'Da nang',
            'type' => 'normal',
            'start_time' => Carbon::parse('15:20 6-8-2023'),
            'flight_number' => '1234',
            'price' => '3000000',
            'tax' => '100000',
            'total_price' => '3100000',
            'deposit_fee' => '0',
        ]);
        Ticket::create([
            'air_company' => 'Bamboo',
            'start_location' => 'Ha Noi',
            'end_location' => 'Da Nang',
            'type' => 'vip',
            'start_time' => Carbon::parse('8:00 12-8-2023'),
            'flight_number' => '1235',
            'price' => '2000000',
            'tax' => '200000',
            'total_price' => '2200000',
            'deposit_fee' => '0',
        ],);
        Ticket::create([
            'air_company' => 'Bamboo',
            'start_location' => 'Hai Phong',
            'end_location' => 'Nha Trang',
            'type' => 'normal',
            'start_time' => Carbon::parse('19:15 1-8-2023'),
            'flight_number' => '1236',
            'price' => '2000000',
            'tax' => '200000',
            'total_price' => '2200000',
            'deposit_fee' => '0',
        ],);
        Ticket::create([
            'air_company' => 'VietNam Airline',
            'start_location' => 'Hai Phong',
            'end_location' => 'Gia Lai',
            'type' => 'normal',
            'start_time' => Carbon::parse('20:30 1-8-2023'),
            'flight_number' => '1237',
            'price' => '2000000',
            'tax' => '200000',
            'total_price' => '2200000',
            'deposit_fee' => '0',
        ],);
    }
}
