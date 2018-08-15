<?php
namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Faker\Factory;

class RegisterUserTest extends TestCase
{
    /** @var Factory */
    protected $faker;

    /** @var User */
    protected $user;

    /**
     * {@inheritdoc}
    */
    protected function setUp()
    {
        parent::setUp();
        $this->faker = Factory::create();
        $this->user = factory(User::class)->create([
            'email' => $this->faker->unique()->email,
        ]);
    } 

    /**
     * Checks that the http status 422 is returned when either an 
     * existing user tries to register or an incorrectly formatted 
     * email is passed.
     * 
     * @return void
     */
    public function testExistingUserReturnsCorrectUrl()
    {
        //existing user
        $data = [
            'email' => $this->user->email,
        ];
        $response = $this->json('POST', 'api/validate', $data);

        $response->assertStatus(200);
        $this->assertEquals($response->getContent(), url("/youExist"));

        //incorrectly formatted email
        $data = [
            'email' => "{$this->faker->company}.blah.com",
        ];
        $response = $this->json('POST', 'api/validate', $data);

        $response->assertStatus(200);
        $this->assertEquals($response->getContent(), url("/youExist"));
    }

    /**
     * Checks that the http status 200 is returned when a new user
     * attempts to register.
     * 
     * @return void
     */
    public function testNewUserReturnsSuccessStatus()
    {
        $data = [
            'email' => $this->faker->unique()->email,
        ];
        $response = $this->json('POST', 'api/validate', $data);

        $response->assertStatus(200);
        $this->assertEquals($response->getContent(), 'https://pro.creativemarket.com/sign-up' );

    }
}
