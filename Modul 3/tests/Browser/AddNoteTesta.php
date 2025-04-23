<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddNoteTest extends DuskTestCase
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
                -> clickLink('Create Note')
                -> type ('title', 'catat')
                -> type ('description', 'catatan')
                -> press('CREATE');
                // ->assertSee('catat')
                // ->assertPathIs('/notes');
        });
    }
}
