<?php

namespace App\Http\Controllers;

use App\Services\RoleService;
use Illuminate\Http\Request;
class RoleController extends Controller
{
    public function __construct(protected RoleService $roleService)
    {
        $this->roleService = new RoleService();
    }
    //
}
