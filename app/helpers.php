<?php

function getPermissionName($perm)
{
    return substr($perm, strpos($perm, ".") + 1);
}

function classActiveSegment($segment, $value)
{
    if (!is_array($value)) {
        return \Illuminate\Support\Facades\Request::segment($segment) == $value ? ' active ' : '';
    }
    foreach ($value as $v) {
        if (\Illuminate\Support\Facades\Request::segment($segment) == $v) return ' here show ';
    }
    return '';
}

function updateModelStatus($info): \Illuminate\Http\JsonResponse
{
    if ($info) {
        $status = $info->status;
        if ($status == 0) {
            $info->update(['status' => 1]);
        } else {
            $info->update(['status' => 0]);
        }
        return response()->json(['status' => 'success', 'message' => trans(__('dashboard.data_updated_success')), 'type' => 'no']);
    } else {
        return response()->json(['status' => 'error', 'message' => trans(__('dashboard.not_updated_success'))]);
    }
}
