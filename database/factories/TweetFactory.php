<?php

namespace Database\Factories;

use App\Models\Tweet;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory as factory;


$factory->define(Tweet::class, function(Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'body' => $faker->sentence
    ];
});

class TweetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tweet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }

   
}

