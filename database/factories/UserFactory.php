<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'avatar_path' => null,
            'guard_id' => $this->faker->randomNumber(5),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'birthday' => $this->faker->dateTimeBetween('-18 years', '-1 day'),
            'password' => Hash::make('foobar', ['rounds' => 12]),
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'timezone' => $this->faker->optional()->timezone,
        ];
    }

    // Generate male users
    public function male(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'gender_id' => 1,
                'first_name' => $this->faker->firstName('male'),
                'last_name' => $this->faker->lastName('male')
            ];
        });
    }

    // Generate female users
    public function female(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'gender_id' => 2,
                'first_name' => $this->faker->firstName('female'),
                'last_name' => $this->faker->lastName('female')
            ];
        });
    }

    // Generate staff members
    public function staff(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'is_staff' => 1,
            ];
        });
    }
}
