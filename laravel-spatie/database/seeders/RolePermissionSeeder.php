<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            "name" => "admin"
        ]);
        Role::create([
            "name" => "penulis"
        ]);
        Role::create([
            "name" => "visitor"
        ]);

        Permission::create([
            'name' => 'tambah-user'
        ]);
        Permission::create([
            'name' => 'hapus-user'
        ]);
        Permission::create([
            'name' => 'lihat-user'
        ]);

        Permission::create([
            'name' => 'tambah-tulisan'
        ]);
        Permission::create([
            'name' => 'hapus-tulisan'
        ]);
        Permission::create([
            'name' => 'lihat-tulisan'
        ]);

        $admin = Role::findByName('admin');
        $admin->givePermissionTo('tambah-user');
        $admin->givePermissionTo('hapus-user');
        $admin->givePermissionTo('lihat-user');

        $penulis = Role::findByName('penulis');
        $penulis->givePermissionTo('lihat-tulisan');
        $penulis->givePermissionTo('tambah-tulisan');
        $penulis->givePermissionTo('hapus-tulisan');

        $visitor = Role::findByName('visitor');
        $visitor->givePermissionTo('lihat-tulisan');
    }
}
