<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example,
     * @group register
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser -> visit('/') //Beralih ke rute root
                -> clickLink('Register') //Mengklik hyperlink dengan nama 'register'
                -> type ('name', 'irfan') //Mengetikan 'irfan' pada field text name
                -> type ('email', 'irfan@gmail.com') //Mengetikan 'irfan@gmail.com' pada field text email
                -> type ('password', '1202220316') //Mengetikan '1202220316' pada field text password
                -> type ('password_confirmation', '1202220316') //Mengetikan '1202220316' pada field text password_confirmation
                -> press('REGISTER') //Mengklik button 'REGISTER'
                ->assertPathIs('/dashboard'); //Memastikan path saat ini adalah '/dashboard'
        });
    }
}
