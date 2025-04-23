<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example,
     * @group logout
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser-> visit('/') //Beralih ke rute root
            -> clickLink('Log in')  //Mengklik hyperlink dengan nama 'Log in'
            -> type ('email', 'irfan@gmail.com') //Mengetikan 'irfan@gmail.com' pada field text email
            -> type ('password', '1202220316') //Mengetikan '1202220316' pada field text password
            -> press('LOG IN') //Mengklik button 'LOG IN'
            ->assertPathIs('/dashboard') //Memastikan path saat ini adalah '/dashboard'
            -> press('irfan') //Mengklik button 'irfan'
            -> clicklink ('Log Out')//Mengklik hyperlink dengan nama 'Log Out'
            -> assertPathIs('/'); //Memastikan path saat ini adalah '/'
        });
    }
}
