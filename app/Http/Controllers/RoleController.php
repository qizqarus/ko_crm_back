<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Получить список всех ролей.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $roles = Role::all();
        return response()->json(['roles' => $roles], 200);
    }

    /**
     * Создать новую роль.
     *
     * @param StoreRoleRequest $request
     * @return JsonResponse
     */
    public function store(StoreRoleRequest $request)
    {
        $role = Role::create($request->validated());
        return response()->json(['role' => $role], 201);
    }

    /**
     * Показать информацию о конкретной роли.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id)
    {
        $role = Role::findOrFail($id);
        return response()->json(['role' => $role], 200);
    }

    /**
     * Обновить информацию о роли.
     *
     * @param UpdateRoleRequest $request
     * @param $id
     * @return JsonResponse
     */
    public function update(UpdateRoleRequest $request, $id)
    {
        $role = Role::findOrFail($id);

        $role->update($request->validated());

        return response()->json(['role' => $role], 200);
    }

    /**
     * Удалить роль.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return response()->json(null, 204);
    }
}
