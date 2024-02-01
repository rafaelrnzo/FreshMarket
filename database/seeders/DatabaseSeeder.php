<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use App\Models\Role;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::create([
          "name" =>  "Minuman"
        ]);
        
        Category::create([
          "name" =>  "Makanan"
        ]);

        
        Category::create([
          "name" =>  "Stationary"
        ]);

        Role::create([
          "name" => "siswa",
        ]);

        
        Role::create([
            "name" => "bank",
        ]);

        
        Role::create([
            "name" => "admin",
        ]);

        
        Role::create([
            "name" => "kantin",
        ]);


        User::create([
            "name" => "siswa",
            "role_id" => 1,
            "password" => bcrypt("siswa123")
        ]);

        
        User::create([
            "name" => "bank",
            "role_id" => 2,
            "password" => bcrypt("bank123")
        ]);

        
        User::create([
            "name" => "admin",
            "role_id" => 3,
            "password" => bcrypt("admin123")
        ]);

        
        User::create([
            "name" => "kantin",
            "role_id" => 4,
            "password" => bcrypt("kantin123")
        ]);

        Wallet::create([
            "user_id" => 1,
            "credit" => 500000,
            "debit" => 0
        ]); 


        Product::create([
            "name" => "Tomatoes",
            "category_id" => 1,
            "price" => 5000,
            "stock" => 30,
            "description" => "This tomatoes are red",
            "thumbnail" => "https://www.foodrepublic.com/img/gallery/13-things-you-didnt-know-about-tomatoes/intro-1684521109.webp"
        ]);

        Product::create([
            "name" => "Caesar Salad",
            "category_id" => 2,
            "price" => 15000,
            "stock" => 50,
            "description" => "Salad",
            "thumbnail" => "https://www.thespruceeats.com/thmb/nXVy3WHyN1DukgK9GkYV7kFadY4=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/classic-caesar-salad-recipe-996054-Hero_01-33c94cc8b8e841ee8f2a815816a0af95.jpg"
        ]);

        
        Product::create([
            "name" => "Orange Juice",
            "category_id" => 3,
            "price" => 3000,
            "stock" => 70,
            "description" => "Orang juice",
            "thumbnail" => "https://insanelygoodrecipes.com/wp-content/uploads/2020/05/orange-juice-1024x683.jpg"
        ]);

        Product::create([
            "name" => "Tomatoes & Garlic Pasta",
            "category_id" => 1,
            "price" => 5000,
            "stock" => 30,
            "description" => "pasta ",
            "thumbnail" => "https://www.allrecipes.com/thmb/bF6FL8sPmakBygWfT4IpF51hgaY=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/11691-tomato-and-garlic-pasta-ddmfs-3x4-1-bf607984a23541f4ad936b33b22c9074.jpg"
        ]);

        Product::create([
            "name" => "Risoles",
            "category_id" => 2,
            "price" => 15000,
            "stock" => 50,
            "description" => "Risoles Snack",
            "thumbnail" => "https://www.masakapahariini.com/wp-content/uploads/2023/06/risoles-ragout-780x440.jpeg"
        ]);

        
        Product::create([
            "name" => "Grape",
            "category_id" => 3,
            "price" => 3000,
            "stock" => 70,
            "description" => "Fruit",
            "thumbnail" => "https://static.toiimg.com/thumb/msid-104607360,imgsize-51860,width-400,resizemode-4/104607360.jpg"
        ]);

        Transaction::create([
            "user_id" => 1,
            "quantity" => 2,
            "product_id" => 3,
            "status" => "not_paid",
            "order_id" => "inv-23",
            "total_price" => 6000
        ]); 
    }
    
}
