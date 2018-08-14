<?php

namespace Tests\Browser;

use App\Models\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterUserTest extends DuskTestCase
{
    /**
     * Tests that an existing user cannot register.
     *
     * @return void
     */
    public function testExistingUserIsRedirected()
    {
        $user = factory(User::class)->create([
            'email' => 'myEmail@gmail.com',
        ]);

        $this->browse(function (Browser $browser) use ($user){
            $browser->visit('/')
                ->type('email', $user->email)
                ->press('START YOUR FREE TRIAL')
                ->assertPathIs('/userExists');
        });
    }

    /**
     * Tests that a new user can successfully register.
     *
     * @return void
     */
    public function testNewUserCanRegister()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('email', 'iAmANewUser@excited.com')
                    ->press('START YOUR FREE TRIAL')
                    ->assertUrlIs("https://pro.creativemarket.com/sign-up");
        });
    }
}
