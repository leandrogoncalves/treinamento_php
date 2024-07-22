<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(): JsonResponse
    {
        return response()->json($this->userService->getAllUsers(), 200);
    }

    public function store(Request $request): JsonResponse
    {
        $result = $this->userService->createUser($request);

        if (is_array($result) && array_key_exists('email', $result)) {
            return response()->json($result, 400);
        }

        return response()->json($result, 201);
    }

    public function show($id): JsonResponse
    {
        $user = $this->userService->getUserById($id);

        if (is_null($user)) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json($user, 200);
    }

    public function update(Request $request, $id): JsonResponse
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

    public function destroy($id): JsonResponse
    {
        $result = $this->userService->deleteUser($id);

        if (is_null($result)) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json(null, 204);
    }
}
