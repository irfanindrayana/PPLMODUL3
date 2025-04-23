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
            $browser -> visit('/')
                -> clickLink('Log in')
                -> type ('email', 'irfan@gmail.com')
                -> type ('password', '1202220316')
                -> press('LOG IN')
                ->assertPathIs('/dashboard')
                -> visit('/notes')
                -> clickLink('Create Note')
                -> type ('title', 'Modul 3')
                -> type ('description', 'Modul 3 pusing ygy')
                -> press('CREATE')
                ->visit('/notes')
                ->assertSee('Modul 3');
        });
    }
}
