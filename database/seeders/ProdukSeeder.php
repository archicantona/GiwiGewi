<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Sirup Kalamansi (500ML)',
                'picture' => '1.png',
                'description' => "Kopi 1001 Asli Bengkulu adalah kopi berkualitas premium yang berasal dari daerah Bengkulu, Indonesia. Ditanam dengan teliti di ketinggian yang tepat dan dipetik secara manual...",
                'price' => "35000",
                'stock_quantity' => "400",
                'storage_period' => '20',
                'no_BPOM' => 'DLZ1121044',
                'category' => 'Minuman',
                'weight' => '500',
            ],
            [
                'name' => 'Pisang Rawas',
                'picture' => '2.png',
                'description' => "Kopi 1001 Asli Bengkulu adalah kopi berkualitas premium yang berasal dari daerah Bengkulu, Indonesia. Ditanam dengan teliti di ketinggian yang tepat dan dipetik secara manual...",
                'price' => "17000",
                'stock_quantity' => "400",
                'storage_period' => '40',
                'no_BPOM' => 'DLZ1121044',
                'category' => 'Makanan',
                'weight' => '80',
            ],
            [
                'name' => 'Krupuk Turih',
                'picture' => '3.png',
                'description' => "Kopi 1001 Asli Bengkulu adalah kopi berkualitas premium yang berasal dari daerah Bengkulu, Indonesia. Ditanam dengan teliti di ketinggian yang tepat dan dipetik secara manual...",
                'price' => "17000",
                'stock_quantity' => "400",
                'storage_period' => '30',
                'no_BPOM' => 'DLZ1121044',
                'category' => 'Makanan',
                'weight' => '40',
            ],
            [
                'name' => 'Kopi 1001 Asli',
                'picture' => '4.png',
                'description' => "Kopi 1001 Asli Bengkulu adalah kopi berkualitas premium yang berasal dari daerah Bengkulu, Indonesia. Ditanam dengan teliti di ketinggian yang tepat dan dipetik secara manual...",
                'price' => "25000",
                'stock_quantity' => "400",
                'storage_period' => '400',
                'no_BPOM' => 'DLZ1121044',
                'category' => 'Minuman',
                'weight' => '100',
            ],
            [
                'name' => 'Perut Punai Rafflesia',
                'picture' => '5.png',
                'description' => "Kopi 1001 Asli Bengkulu adalah kopi berkualitas premium yang berasal dari daerah Bengkulu, Indonesia. Ditanam dengan teliti di ketinggian yang tepat dan dipetik secara manual...",
                'price' => "18000",
                'stock_quantity' => "400",
                'storage_period' => '30',
                'no_BPOM' => 'DLZ1121044',
                'category' => 'Makanan',
                'weight' => '85',
            ],
            [
                'name' => 'Coklat Kalamansi',
                'picture' => '6.png',
                'description' => "Kopi 1001 Asli Bengkulu adalah kopi berkualitas premium yang berasal dari daerah Bengkulu, Indonesia. Ditanam dengan teliti di ketinggian yang tepat dan dipetik secara manual...",
                'price' => "20000",
                'stock_quantity' => "400",
                'storage_period' => '50',
                'no_BPOM' => 'DLZ1121044',
                'category' => 'Makanan',
                'weight' => '80',
            ],


            // Add more users as needed
        ]);
    }
}
