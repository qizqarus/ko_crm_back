<?php

namespace App\Http\Resources;

use App\Http\Resources\RoleAndPermissionResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthResource extends JsonResource
{
    public $token;

    public function __construct($resource, $token)
    {
        parent::__construct($resource);

        $this->token = $token;
    }

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'token' => $this->token,
            'user' => [
                'id' => $this->id,
                'full_name' => $this->full_name,
                'email' => $this->email,
                'phone' => $this->phone,
                'address' => $this->address,
//                'role' => RoleAndPermissionResource::make($this->roles[0]),
//                'permission' => RoleAndPermissionResource::collection($this->getAllPermissions())
            ]
        ];

    }
}
