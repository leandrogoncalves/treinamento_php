<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return response()->json($this->userService->getAllUsers(), 200);
    }

    public function store(Request $request)
    {
        $result = $this->userService->createUser($request);

        if (is_array($result) && array_key_exists('email', $result)) {
            return response()->json($result, 400);
        }

        return response()->json($result, 201);
    }

    public function show($id)
    {
        $user = $this->userService->getUserById($id);

        if (is_null($user)) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json($user, 200);
    }

    public function update(Request $request, $id)
    {
        $result = $this->userService->updateUser($request, $id);

        if (is_null($result)) {
            return response()->json(['message' => 'User not found'], 404);
        }

        if (is_array($result) && array_key_exists('email', $result)) {
            return response()->json($result, 400);
        }

        return response()->json($result, 200);
    }

    public function destroy($id)
    {
        $result = $this->userService->deleteUser($id);

        if (is_null($result)) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json(null, 204);
    }
}
