<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\ServicePlan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(ServiceSeeder::class);

        User::factory()->create([
            'id' => 1,
            'name' => 'Administrator',
            'email' => 'admin@lcss.dev',
            'password' => Hash::make('secret'),
        ]);

        User::factory()->create([
            'id' => 2,
            'name' => 'Lucas Silva',
            'email' => 'lucas@lcss.dev',
            'password' => Hash::make('secret'),
        ]);

        User::factory()->create([
            'id' => 3,
            'name' => 'Rosângela Souza',
            'email' => 'rosangela@lcss.dev',
            'password' => Hash::make('secret'),
        ]);

        $servicePlan = ServicePlan::find(7);

        $group = Group::factory()->create([
            'name' => 'Netflix Family',
            'max_slots' => $servicePlan->max_slots,
            'price' => $servicePlan->price,
            'service_plan_id' => $servicePlan->id,
        ]);

        $group->members()->createMany([
            [
                'group_id' => $group->id,
                'user_id' => 1,
                'is_admin' => true,
            ],
            [
                'group_id' => $group->id,
                'user_id' => 2,
            ],
            [
                'group_id' => $group->id,
                'user_id' => 3,
            ]
        ]);

        $servicePlan = ServicePlan::find(5);

        $group = Group::factory()->create([
            'name' => 'Proton VPN Friends',
            'max_slots' => $servicePlan->max_slots,
            'price' => $servicePlan->price,
            'service_plan_id' => $servicePlan->id,
        ]);

        $group->members()->createMany([
            [
                'group_id' => $group->id,
                'user_id' => 1,
                'is_admin' => true,
            ],
            [
                'group_id' => $group->id,
                'user_id' => 2,
            ],
            [
                'group_id' => $group->id,
                'user_id' => 3,
            ]
        ]);
    }
}
