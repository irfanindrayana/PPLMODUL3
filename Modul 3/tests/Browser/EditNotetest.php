<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotetest extends DuskTestCase
{
    /**
     * A Dusk test example,
     * @group edit
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
            ->visit('/notes') //Beralih ke rute notes
            -> assertSee('Modul 3') //Mencari teks 'Modul 3' pada halaman saat ini
            -> clicklink ('Edit') //Mengklik hyperlink dengan nama 'Edit'
            -> type ('description', 'Tpi untung diperpanjang ygy') //Mengetikan 'Tpi untung diperpanjang ygy' pada field text description
            -> type ('title', 'Selesai') //Mengetikan 'Selesai' pada field text title
            -> press('UPDATE') //Mengklik button 'UPDATE'
            ->visit('/notes'); //Beralih ke rute notes
        });
    }
}
