<?php

namespace Unit\Services;

use Tests\TestCase;
use App\Services\UserService;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Mockery;


class UserServiceTest extends TestCase
{
    use RefreshDatabase;

    protected UserService $userService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate');
        $this->userService = app(UserService::class);
    }

    /**
     * @testdox O teste deve retornar uma lista de usuários com sucesso
     * @covers App\Services\UserService::getAllUsers
     * @return void
     */
    public function testShouldReturnUserList(): void
    {
        $userListMock = collect([
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'password' => bcrypt('secret'),
            ],
            [
                'id' => 2,
                'name' => 'Jane Doe2',
                'email' => 'janedoe2@example.com',
                'password' => bcrypt('secret2'),
            ]
        ]);

        $userMock = Mockery::mock('alias:'.User::class);
        $userMock->shouldReceive('all')->andReturn($userListMock);

        self::assertEquals($userListMock, $this->userService->getAllUsers());
    }

    /**
     * @testdox O teste deve criar um novo usuário com sucesso
     * @covers App\Services\UserService::createUser
     * @return void
     */
    public function testShouldCreateUserSuccessfully(): void
    {
        $expectedUser = [
            'name' => 'Jane Doe2',
            'email' => 'janedoe2@example.com',
            'password' => 'secret2123',
        ];
        $requestMock = Request::create('/api/users', 'POST', $expectedUser);

        $userMock = Mockery::mock('alias:'.User::class);
        $userMock->shouldReceive('create')->andReturn($expectedUser);

        self::assertEquals($expectedUser, $this->userService->createUser($requestMock));
    }

    public function tearDown(): void
    {
        $this->artisan('migrate:reset');
        parent::tearDown();
    }
}
