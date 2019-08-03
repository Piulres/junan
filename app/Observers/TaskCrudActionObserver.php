<?php

namespace App\Observers;

use App\Task;
use App\Notifications\QA_EmailNotification;
use Illuminate\Support\Facades\Notification;

class TaskCrudActionObserver
{

    public function created(Task $model)
    {
        $emails = ["admin@admin.com"];
        $data = [
            "action" => "Created",
            "crud_name" => "Tasks"
        ];

        $users = \App\User::where("email", $emails)->get();
        Notification::send($users, new QA_EmailNotification($data));

    }

    public function updated(Task $model)
    {
        $emails = ["admin@admin.com"];
        $data = [
            "action" => "Updated",
            "crud_name" => "Tasks"
        ];
        $users = \App\User::where("email", $emails)->get();
        Notification::send($users, new QA_EmailNotification($data));
    }

    public function deleting(Task $model)
    {
        $emails = ["admin@admin.com"];
        $data = [
            "action" => "Deleted",
            "crud_name" => "Tasks"
        ];
        $users = \App\User::where("email", $emails)->get();
        Notification::send($users, new QA_EmailNotification($data));
    }

}