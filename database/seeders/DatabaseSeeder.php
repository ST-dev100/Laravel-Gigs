<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
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
        // \App\Models\User::factory(5)->create();
        // Listing::factory(6)->create();
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
        //  Listing::create([
        //   'title'=>"React Developer",
        //   'tags'=>"React,Redux",
        //   'company'=>"Simon technologies",
        //   'location'=>"Addis Ababa",
        //   'email'=>"info@simon@gmail.com",
        //   'website'=>"www.simon.tech.com",
        //   'description'=>"Lorem spum Lorem spumLorem spumLorem spumLorem spumLorem spumLorem spumLorem spum",
        //  ]);
        //  Listing::create([
        //     'title'=>"Laravel Developer",
        //     'tags'=>"php,vue",
        //     'company'=>"Chaka",
        //     'location'=>"Addis Ababa",
        //     'email'=>"info@chaka@gmail.com",
        //     'website'=>"www.chaka.com",
        //     'description'=>"Lorem spum Lorem spumLorem spumLorem spumLorem spumLorem spumLorem spumLorem spum",
        //    ]);Listing::create([
        //     'title'=>"Flutter Developer",
        //     'tags'=>"Anderoid,Dart",
        //     'company'=>"Deroga PLC",
        //     'location'=>"Addis Ababa",
        //     'email'=>"info@deroga@gmail.com",
        //     'website'=>"www.deroga.com",
        //     'description'=>"Lorem spum Lorem spumLorem spumLorem spumLorem spumLorem spumLorem spumLorem spum",
        //    ]);Listing::create([
        //     'title'=>"Djanjo Developer",
        //     'tags'=>"python,postgress,",
        //     'company'=>"Ashewa Plc",
        //     'location'=>"Addis Ababa",
        //     'email'=>"info@ashwa@gmail.com",
        //     'website'=>"www.ashwa.com",
        //     'description'=>"Lorem spum Lorem spumLorem spumLorem spumLorem spumLorem spumLorem spumLorem spum",
        //    ]);Listing::create([
        //     'title'=>"Express Developer",
        //     'tags'=>"javaScript,node js,mongodb",
        //     'company'=>"Addis Plc",
        //     'location'=>"Addis Ababa",
        //     'email'=>"info@Addis@gmail.com",
        //     'website'=>"www.addis.com",
        //     'description'=>"Lorem spum Lorem spumLorem spumLorem spumLorem spumLorem spumLorem spumLorem spum",
        //    ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
