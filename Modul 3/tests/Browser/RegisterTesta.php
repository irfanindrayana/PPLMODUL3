<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            // $response = $this->get('/register');
            // $response->assertStatus(200);
            $browser -> visit('/')
                -> clickLink('Register')
                -> type ('name', 'irfan')
                -> type ('email', 'm@gmail.com')
                -> type ('password', 'password')
                -> type ('password_confirmation', 'password')
                -> press('REGISTER')
                ->assertPathIs('/dashboard');
            // $response -> type (name, 'irfan');
            // $response -> type (email, 'm@gmail.com');
            // $response -> type (password, 'password');
            // $response -> type (password_confirmation, 'password');
            // $response -> press(REGISTER);
            // $response ->assertPathIs('/dashboard');
        });
    }
}
