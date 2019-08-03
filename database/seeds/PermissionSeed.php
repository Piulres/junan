<?php

use Illuminate\Database\Seeder;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'user_management_access',],
            ['id' => 2, 'title' => 'permission_access',],
            ['id' => 3, 'title' => 'permission_create',],
            ['id' => 4, 'title' => 'permission_edit',],
            ['id' => 5, 'title' => 'permission_view',],
            ['id' => 6, 'title' => 'permission_delete',],
            ['id' => 7, 'title' => 'role_access',],
            ['id' => 8, 'title' => 'role_create',],
            ['id' => 9, 'title' => 'role_edit',],
            ['id' => 10, 'title' => 'role_view',],
            ['id' => 11, 'title' => 'role_delete',],
            ['id' => 12, 'title' => 'user_access',],
            ['id' => 13, 'title' => 'user_create',],
            ['id' => 14, 'title' => 'user_edit',],
            ['id' => 15, 'title' => 'user_view',],
            ['id' => 16, 'title' => 'user_delete',],
            ['id' => 17, 'title' => 'user_action_access',],
            ['id' => 18, 'title' => 'user_action_create',],
            ['id' => 19, 'title' => 'user_action_edit',],
            ['id' => 20, 'title' => 'user_action_view',],
            ['id' => 21, 'title' => 'user_action_delete',],
            ['id' => 22, 'title' => 'internal_notification_access',],
            ['id' => 23, 'title' => 'internal_notification_create',],
            ['id' => 24, 'title' => 'internal_notification_edit',],
            ['id' => 25, 'title' => 'internal_notification_view',],
            ['id' => 26, 'title' => 'internal_notification_delete',],
            ['id' => 27, 'title' => 'content_management_access',],
            ['id' => 28, 'title' => 'content_management_create',],
            ['id' => 29, 'title' => 'content_management_edit',],
            ['id' => 30, 'title' => 'content_management_view',],
            ['id' => 31, 'title' => 'content_management_delete',],
            ['id' => 32, 'title' => 'content_category_access',],
            ['id' => 33, 'title' => 'content_category_create',],
            ['id' => 34, 'title' => 'content_category_edit',],
            ['id' => 35, 'title' => 'content_category_view',],
            ['id' => 36, 'title' => 'content_category_delete',],
            ['id' => 37, 'title' => 'content_tag_access',],
            ['id' => 38, 'title' => 'content_tag_create',],
            ['id' => 39, 'title' => 'content_tag_edit',],
            ['id' => 40, 'title' => 'content_tag_view',],
            ['id' => 41, 'title' => 'content_tag_delete',],
            ['id' => 42, 'title' => 'content_page_access',],
            ['id' => 43, 'title' => 'content_page_create',],
            ['id' => 44, 'title' => 'content_page_edit',],
            ['id' => 45, 'title' => 'content_page_view',],
            ['id' => 46, 'title' => 'content_page_delete',],
            ['id' => 47, 'title' => 'task_status_access',],
            ['id' => 48, 'title' => 'task_status_create',],
            ['id' => 49, 'title' => 'task_status_edit',],
            ['id' => 50, 'title' => 'task_status_view',],
            ['id' => 51, 'title' => 'task_status_delete',],
            ['id' => 52, 'title' => 'task_management_access',],
            ['id' => 53, 'title' => 'task_management_create',],
            ['id' => 54, 'title' => 'task_management_edit',],
            ['id' => 55, 'title' => 'task_management_view',],
            ['id' => 56, 'title' => 'task_management_delete',],
            ['id' => 57, 'title' => 'task_tag_access',],
            ['id' => 58, 'title' => 'task_tag_create',],
            ['id' => 59, 'title' => 'task_tag_edit',],
            ['id' => 60, 'title' => 'task_tag_view',],
            ['id' => 61, 'title' => 'task_tag_delete',],
            ['id' => 62, 'title' => 'task_access',],
            ['id' => 63, 'title' => 'task_create',],
            ['id' => 64, 'title' => 'task_edit',],
            ['id' => 65, 'title' => 'task_view',],
            ['id' => 66, 'title' => 'task_delete',],
            ['id' => 67, 'title' => 'task_calendar_access',],
            ['id' => 68, 'title' => 'task_calendar_create',],
            ['id' => 69, 'title' => 'task_calendar_edit',],
            ['id' => 70, 'title' => 'task_calendar_view',],
            ['id' => 71, 'title' => 'task_calendar_delete',],
            ['id' => 72, 'title' => 'expense_management_access',],
            ['id' => 73, 'title' => 'expense_management_create',],
            ['id' => 74, 'title' => 'expense_management_edit',],
            ['id' => 75, 'title' => 'expense_management_view',],
            ['id' => 76, 'title' => 'expense_management_delete',],
            ['id' => 77, 'title' => 'expense_category_access',],
            ['id' => 78, 'title' => 'expense_category_create',],
            ['id' => 79, 'title' => 'expense_category_edit',],
            ['id' => 80, 'title' => 'expense_category_view',],
            ['id' => 81, 'title' => 'expense_category_delete',],
            ['id' => 82, 'title' => 'income_category_access',],
            ['id' => 83, 'title' => 'income_category_create',],
            ['id' => 84, 'title' => 'income_category_edit',],
            ['id' => 85, 'title' => 'income_category_view',],
            ['id' => 86, 'title' => 'income_category_delete',],
            ['id' => 87, 'title' => 'income_access',],
            ['id' => 88, 'title' => 'income_create',],
            ['id' => 89, 'title' => 'income_edit',],
            ['id' => 90, 'title' => 'income_view',],
            ['id' => 91, 'title' => 'income_delete',],
            ['id' => 92, 'title' => 'expense_access',],
            ['id' => 93, 'title' => 'expense_create',],
            ['id' => 94, 'title' => 'expense_edit',],
            ['id' => 95, 'title' => 'expense_view',],
            ['id' => 96, 'title' => 'expense_delete',],

        ];

        foreach ($items as $item) {
            \App\Permission::create($item);
        }
    }
}
