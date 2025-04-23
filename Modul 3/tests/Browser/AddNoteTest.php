<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example,
     * @group add
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser -> visit('/') //Beralih ke rute root
                -> clickLink('Log in')  //Mengklik hyperlink dengan nama 'Log in'
                -> type ('email', 'irfan@gmail.com') //Mengetikan 'irfan@gmail.com' pada field text email
                -> type ('password', '1202220316') //Mengetikan '1202220316' pada field text password
                -> press('LOG IN') //Mengklik button 'LOG IN'
                ->assertPathIs('/dashboard') //Memastikan path saat ini adalah '/dashboard'
                -> visit('/notes') //Beralih ke rute notes
                -> clickLink('Create Note') //Mengklik hyperlink dengan nama 'Create Note'
                -> type ('title', 'Modul 3') //Mengetikan 'Modul 3' pada field text title
                -> type ('description', 'Modul 3 pusing ygy')//Mengetikan 'Modul 3 pusing ygy' pada field text description
                -> press('CREATE') //Mengklik button 'CREATE'
                ->visit('/notes') //Beralih ke rute notes
                ->assertSee('Modul 3'); //Mencari teks 'Modul 3' pada halaman saat ini
        });
    }
}
