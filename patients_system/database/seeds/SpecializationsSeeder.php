<?php

use Illuminate\Database\Seeder;

class SpecializationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Specialization::class, 5)->create()->each(function($u) {
            $u->painTypes()->save(factory(App\PainTypes::class)->make());
          });
    }
}
