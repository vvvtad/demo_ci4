<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function customers(): string
    {
        $data['customers'] = array(
            [   
                'name' => 'Prudence',
                'image' => 'https://static.wikia.nocookie.net/fliplinestudios/images/f/f8/086_a.jpg/revision/latest?cb=20130910192702.jpg',
                'contact' => '09123456789'
            ],
            [
                'name' => 'Ember',
                'image' => 'https://static.wikia.nocookie.net/fliplinestudios/images/4/4d/152_a.jpg/revision/latest?cb=20160113163818.jpg',
                'contact' => '09987654321'
            ],
            [
                'name' => 'Wally',
                'image' => 'https://static.wikia.nocookie.net/fliplinestudios/images/2/21/002_wally.jpg/revision/latest?cb=20120509022715',
                'contact' => '09112223344'
            ],
            [
                'name' => 'Akari',
                'image' => 'https://static.wikia.nocookie.net/fliplinestudios/images/f/fc/050_Akari.jpg/revision/latest?cb=20121106172336.jpg',
                'contact' => '09223334455'
            ],
            [
                'name' => 'Taylor',
                'image' => 'https://static.wikia.nocookie.net/fliplinestudios/images/c/c2/Taylor_flipdeck.jpg/revision/latest?cb=20131113155834.jpg',
                'contact' => '09334445566'
            ]
        );

        return view('customers', $data);
    }
}