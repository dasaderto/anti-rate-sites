<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RBACSeeder extends Seeder
{
    public function run()
    {
        $AdminRole = Role::create(['name' => 'admin']);
        $ModeratorRole = Role::create(['name' => 'moderator']);
        $ExpertRole = Role::create(['name' => 'expert']);
        $DefaultRole = Role::create(['name' => 'default']);

        $adminPanelPermission = Permission::create(['name' => 'admin panel']);
        $moderateAdminPanelPermission = Permission::create(['name' => 'moderator panel']);
        $commentPermission = Permission::create(['name' => 'comment']);
        $createPostPermission = Permission::create(['name' => 'create post']);
        $editPostPermission = Permission::create(['name' => 'edit post']);
        $deletePostPermission = Permission::create(['name' => 'delete post']);
        $expertPermission = Permission::create(['name' => 'expert permission']);
        $sendSitePermission = Permission::create(['name' => 'send site']);

        $AdminRole->givePermissionTo(['admin panel','comment','create post','edit post','expert permission','send site','delete post']);
        $ModeratorRole->givePermissionTo(['moderator panel','comment','create post','edit post','send site']);
        $ExpertRole->givePermissionTo(['comment','create post','expert permission','send site']);
        $DefaultRole->givePermissionTo(['comment','create post','send site']);
    }
}
