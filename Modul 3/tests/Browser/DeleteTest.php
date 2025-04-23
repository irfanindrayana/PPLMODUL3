<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteTest extends DuskTestCase
{
    /**
     * A Dusk test example,
     * @group delete
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser-> visit('/')
            -> clickLink('Log in')
            -> type ('email', 'irfan@gmail.com')
            -> type ('password', '1202220316')
            -> press('LOG IN')
            -> assertPathIs('/dashboard')
            -> visit('/notes')
            -> assertSee('Selesai')
            -> press ('Delete');
        });
    }
}
