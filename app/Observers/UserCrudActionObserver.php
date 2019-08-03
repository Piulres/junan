<?php

namespace App\Observers;

use App\User;
use App\Notifications\QA_EmailNotification;
use Illuminate\Support\Facades\Notification;

class UserCrudActionObserver
{

    public function created(User $model)
    {
        $emails = ["admin@admin.com"];
        $data = [
            "action" => "Created",
            "crud_name" => "Users"
        ];

        $users = \App\User::where("email", $emails)->get();
        Notification::send($users, new QA_EmailNotification($data));

    }

    

    

}