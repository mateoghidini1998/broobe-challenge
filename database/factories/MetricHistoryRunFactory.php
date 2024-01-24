<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Strategy;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MetricHistoryRun>
 */
class MetricHistoryRunFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        return [
            'strategy_id' => Strategy::factory(),
            'url' => $this->faker->url(),
            'accesibility_metric' => $this->faker->randomFloat(1, 0, 100),
            'pwa_metric' => $this->faker->randomFloat(1, 0, 100),
            'performance_metric' => $this->faker->randomFloat(1, 0, 100),
            'seo_metric' => $this->faker->randomFloat(1, 0, 100),
            'best_practices_metric' => $this->faker->randomFloat(1, 0, 100),

        ];
    }
}
