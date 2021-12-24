<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;

function uploadFile($file, $path, $name){
    $name = $name.'.'.$file->ClientExtension();
    $file->move($path,$name);
    return $path.'/'.$name;
}

function totalUser()
{
    return User::count();
}
function isStaff()
{
    return Auth::where('role','staff');
}
