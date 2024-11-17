<?php

return [
    
    /*
    |--------------------------------------------------------------------------
    | Actiton
    |--------------------------------------------------------------------------
    |
    | Action for Module
    |
    */
    'action' => [
        'show' => 'Xem',
        'create' => 'Thêm',
        'edit' => 'Sửa',
        'delete' => 'Xóa',
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Module
    |--------------------------------------------------------------------------
    |
    | Define the available Module in your application
    |
    */
    'module' => [
        'users' => 'Thành viên',
        'roles' => 'Phân quyền',
    ],

    /*
    |-----------------s---------------------------------------------------------
    | Permissions
    |--------------------------------------------------------------------------
    |
    | Define permissions for each role
    |
    */

    'permissions' => [
        'users' => [
            'show' => 'users_show',
            'create' => 'users_create',
            'edit' => 'users_edit',
            'delete' => 'users_delete',
        ],
        'roles' => [
            'show' => 'roles_show',
            'create' => 'roles_create',
            'edit' => 'roles_edit',
            'delete' => 'roles_delete',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Super Admin
    |--------------------------------------------------------------------------
    |
    | Define super admin email or ID that will have all permissions
    |
    */
    'super_admin' => [
        'email' => env('SUPER_ADMIN_EMAIL', 'admin@example.com'),
    ],
];

