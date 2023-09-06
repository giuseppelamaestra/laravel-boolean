<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cocktail as Cocktail;
use Faker\Generator as Faker;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        //random names
        $names = [
            'Black Russian',
            'Cosmopolitan',
            'Campari Spritz',
            'Espresso Martini',
            'Aperol Spritz',
            'Negroni',
            'Cuba Libre',
            'Manhattan',
            'Negroni Sbagliato',
            'Margarita',
            'Irish Coffee',
            'Bayles Coffee',
            'Americano',
            'Gin Lemon',
            'Bellini',
            'Rossini',
            'Capiroska',
            'Moscow Mule',
        ];
        //random ingredients
        $ingredients = [
            'Shake all the ingredients in a cocktail shaker and ice then strain in a cold glass.',
            'Shakerare tutti gli ingredienti in uno shaker e ghiaccio, quindi filtrare in un bicchiere freddo.',
            'Versa prima il Bacardi 151 seguito dal 101, servito con una Coca-Cola.',
            'In a shaker half-filled with ice cubes, combine all of the ingredients. Shake well. Strain into a cocktail glass.',
            'Pour Vodka and Gin over ice, add Tonic and Stir',
        ];

        for ($i = 0; $i < 50; $i++) {
            $newCocktail = new Cocktail();
            $newCocktail->name = $faker->randomElement($names);
            $newCocktail->ingredients = $faker->randomElement($ingredients);
            $newCocktail->alcholic = $faker->boolean();
            $newCocktail->price = $faker->randomFloat(2, 3, 15);
            $newCocktail->save();
        }
    }
}
