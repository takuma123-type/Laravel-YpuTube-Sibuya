<?php

namespace Database\Factories;

use App\Models\Blog;//使いたいモデル
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory//
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [//追加したいデータを中に記述
            //
            'title' => $this->faker->word,
            'content' => $this->faker->realText
        ];
    }
}