<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function customers(): string
    {
        $data['customers'] = array(
            [   
                'name' => 'Prudence',
                'email' => 'prudence@example.com',
                'contact' => '09123456789'
            ],
            [
                'name' => 'Ember',
                'email' => 'ember@example.com',
                'contact' => '09987654321'
            ],
            [
                'name' => 'Wally',
                'email' => 'wally@example.com',
                'contact' => '09112223344'
            ],
            [
                'name' => 'Akari',
                'email' => 'akari@example.com',
                'contact' => '09223334455'
            ],
            [
                'name' => 'Taylor',
                'email' => 'taylor@example.com',
                'contact' => '09334445566'
            ]
        );

        return view('customers', $data);
    }
}