<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotetest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser -> visit('/')
                -> clickLink('Log in')
                -> type ('email', 'm@gmail.com')
                -> type ('password', 'password')
                -> press('LOG IN')
                ->assertPathIs('/dashboard')
                -> visit('/notes')
                -> click('Edit')
                ->assertPathIs('/edit-note-page/1');
        });
    }
}
