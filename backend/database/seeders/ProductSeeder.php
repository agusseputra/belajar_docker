<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
    DB::table('products')->insert([
        [
            'name' => 'Laptop Gaming ROG',
            'slug' => Str::slug('Laptop Gaming ROG'),
            'description' => 'Laptop gaming high performance dengan RTX 4060',
            'category_id' => 1, // Elektronik
            'price' => 25000000,
            'img' => 'products/laptop.jpg',
            'stock' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Kaos Polos Premium',
            'slug' => Str::slug('Kaos Polos Premium'),
            'description' => 'Kaos polos katun combed 30s',
            'category_id' => 2, // Fashion
            'price' => 75000,
            'img' => 'products/tshirt.jpg',
            'stock' => 100,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Kopi Arabica Gayo 250g',
            'slug' => Str::slug('Kopi Arabica Gayo 250g'),
            'description' => 'Kopi arabica khas Aceh Gayo, 250 gram',
            'category_id' => 3, // Makanan & Minuman
            'price' => 65000,
            'img' => 'products/coffee.jpg',
            'stock' => 50,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Sepatu Lari Nike Zoom',
            'slug' => Str::slug('Sepatu Lari Nike Zoom'),
            'description' => 'Sepatu lari ringan dan nyaman untuk olahraga',
            'category_id' => 4, // Olahraga
            'price' => 1200000,
            'img' => 'products/nike.jpg',
            'stock' => 25,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Smartphone Samsung Galaxy',
            'slug' => Str::slug('Smartphone Samsung Galaxy'),
            'description' => 'Smartphone terbaru dengan kamera canggih',
            'category_id' => 1, // Elektronik
            'price' => 15000000,
            'img' => 'products/smartphone.jpg',
            'stock' => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Jaket Hoodie Casual',
            'slug' => Str::slug('Jaket Hoodie Casual'),
            'description' => 'Jaket hoodie nyaman untuk aktivitas sehari-hari',
            'category_id' => 2, // Fashion
            'price' => 200000,
            'img' => 'products/hoodie.jpg',
            'stock' => 60,
            'created_at' => now(),
            'updated_at' => now(),
        ]]);
    }
}
