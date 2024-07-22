<?php

namespace Tests\Unit\app\Services;

use App\Models\User;
use Tests\TestCase;
use App\Services\UserService;
use Illuminate\Http\Request;
use Mockery;

class UserServiceTest extends TestCase
{
    protected UserService $userService;
    public $expectedOutput = [];
    public $expectedUser = [];

    protected function setUp(): void
    {
        parent::setUp();
        $this->userService = app(UserService::class);
        $this->expectedOutput = collect([
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
        $this->expectedUser = [
            'name' => 'Jane Doe2',
            'email' => 'janedoe2@example.com',
            'password' => 'secret2123',
        ];
    }


    /**
     * @testdox O teste deve retornar a lista de usuarios com sucesso
     *
     * @runTestsInSeparateProcesses
     * @preserveGlobalState disabled
     * @return void
     */
    public function testShouldReturnUserListSuccessfully(): void
    {
        $userMock = Mockery::mock('alias:'.User::class);
        $userMock->allows('all')
            ->andReturn($this->expectedOutput);

        $this->assertEquals($this->expectedOutput, $this->userService->getAllUsers());
    }

        /**
     * @testdox O teste deve criar um novo usuario com sucesso
     *
     * @return void
     */
    public function testShouldCreateUserSuccessfully(): void
    {
        $requestMock = Request::create('/api/users', 'POST', $this->expectedUser);

        $userMock = Mockery::mock('alias:'.User::class);
        $userMock->allows('create')
            ->andReturn($this->expectedUser);
        $this->assertEquals($this->expectedUser, $this->userService->createUser($requestMock));
    }
}
