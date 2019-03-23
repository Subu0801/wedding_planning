<?php

use Illuminate\Database\Seeder;

class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	['company_name'=>'Demo company-1', 'booking_date'=>'2017-09-11'],
        	['company_name'=>'Demo company-2', 'booking_date'=>'2017-09-11'],
        	['company_name'=>'Demo company-3', 'booking_date'=>'2017-09-14'],
        	['company_name'=>'Demo company-3', 'booking_date'=>'2017-09-17'],
        ];
        foreach ($data as $key => $value) {
            Event::create($value);
            
    }
}
