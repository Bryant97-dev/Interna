<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReportResource;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function report(){
        $reports = Report::with('users')->where('user_id', '=', Auth::id())->get();
        return ReportResource::collection($reports);
    }
}
