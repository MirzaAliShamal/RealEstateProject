<?php

use App\Models\Record;
use App\Models\RecordHistory;
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

function totalRecord()
{
    return Record::count();
}

function totalRecordUpdationRecord()
{
    return RecordHistory::count();
}
function totalPendingUpdationRecord()
{
    return RecordHistory::where('update_status','pending')->count();
}
function totalApprovedUpdationRecord()
{
    return RecordHistory::where('update_status','approved')->count();
}
function totalRejectedUpdationRecord()
{
    return RecordHistory::where('update_status','rejected')->count();
}
