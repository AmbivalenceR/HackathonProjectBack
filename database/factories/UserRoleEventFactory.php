<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use  App\Models\User;
use  App\Models\Role;
use  App\Models\Event;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserRoleEvent>
 */
class UserRoleEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'role_id' => Role::all()->random()->id,
            'event_id' => Event::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ];
    }
}
