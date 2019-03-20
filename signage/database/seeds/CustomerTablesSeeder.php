<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Customer::create([
            'picture'  => 'c.png',
            'name' =>  'donald trump',
        ]);
      
    }
}
