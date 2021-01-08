<?php

namespace Database\Factories;

use App\Models\News;
use App\Models\Authors;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\database\factories\AuthorsFactory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug,
            'body' => $this->faker->text($maxNbChars = 200),
            'published_at' => $this->faker->dateTimeThisMonth($max = 'now', $timezone = null), 
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'picture' =>$this ->faker->imageUrl($width = 640, $height = 480),     
            'category_id'=>\App\Models\Categories::all()->random()->id,          
            'author_id' =>\App\Models\Authors::all()->random()->id,           
           
        ];
    }
}
