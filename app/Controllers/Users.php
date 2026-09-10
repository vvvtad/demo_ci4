<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function users(): string
    {
        $data['users'] = array(
            [   
                'name' => 'Papa Louie',
                'email' => 'papa.louie@example.com',
                'role' => 'admin'
            ],
            [
                'name' => 'Roy Pizzaboy',
                'email' => 'roy@example.com',
                'role' => 'admin'
            ],
            [
                'name' => 'Brody Chisery',
                'email' => 'brody@example.com',
                'role' => 'user'
            ],
            [
                'name' => 'Gabitha Cluckeria',
                'email' => 'gabitha@example.com',
                'role' => 'user'
            ],
            [
                'name' => 'Gino Romano',
                'email' => 'gino@example.com',
                'role' => 'user'
            ]
        );

        return view('users', $data);
    }
  
}
