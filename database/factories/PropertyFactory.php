<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $regions = ['Northland', 'Auckland','Waikato','Bay of Plenty','Gisbourne','Hawkes Bay','Taranaki','	Manawatu-Whanganui','Wellington','Tasman','Nelson','Marlborough','West Coast','Canterbury','Otago','Southland'];
        $vendors = ['Ray White', 'Barfoot & Thompson','Harcourts'];


        return [
            'user_id' => 1,
            'unique_id' => sha1(time()),
            'source_url' => $this->faker->url(),
            'source' => 'trademe',
            'title' => $this->faker->catchPhrase(),
            'address' => $this->faker->address(),
            'region' => array_rand($regions, 1),
            'price' => rand(120000, 500000),
            'bedrooms' => rand(1,6),
            'bathrooms' => rand(1,4),
            'house_area' => rand(75,300),
            'land_area' => rand(200, 1800),
            'vendor' => array_rand($vendors, 1),
            'agent_name' => $this->faker->name(),
            'agent_phone' => $this->faker->phoneNumber(),
            'agent_email' => $this->faker->email()
 
        ];
    }
}
