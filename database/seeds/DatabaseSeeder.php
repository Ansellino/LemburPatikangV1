<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
                DB::table('users')->insert([
                    ["name" => "AdminEdward","email"=>"edward007@binus.ac.id","password"=>Hash::make("adminEdward"),"phone"=>"081289434641","role"=>"admin"],
                    ["name" => "Member001","email"=>"member001@gmail.com","password"=>Hash::make("member001"),"phone"=>"089509772528","role"=>"member"]
                ]);
                DB::table('categories')->insert([
                    ["name" => "Beach"],
                    ["name" => "Mountain"],
                    ["name" => "Forest"],
                    ["name" => "Desert"],
                    ["name" => "Cave"], 
                    ["name" => "Others"]
                ]);
        Schema::enableForeignKeyConstraints();

    }
}
