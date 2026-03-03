<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateStoreUser;
use App\Http\Resources\UserCollection;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Pegando os usuários com paginação
        $users = User::orderByDesc('id')->paginate(3);

        // O segredo está aqui: UserResource::collection()
        return UserCollection::collection($users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUser $request)
    {
        $data = $request->validated();
        try {
            $user = new User();
            $user->fill($data);
            $user->password = Hash::make(123);
            $user->save();
            return response()->json($user, 201);
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Falha ao inserir o usuário'
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $user = User::findOrFail($id);
            return response()->json($user, 200);
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Usuário não encontrado!'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStoreUser $request, string $id)
    {
        $data = $request->validated();
        try {
            $user = User::findOrFail($id);
            $user->update($data);

            return response()->json($user, 200);
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Falha ao atualizar o usuário'
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $removed = User::destroy($id);
            if (!$removed) {
                throw new Exception();
            }
            return response()->json(null, 204);
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Falha ao apagar usuário!'
            ], 400);
        }
    }
}
