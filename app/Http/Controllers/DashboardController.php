<?php

namespace App\Http\Controllers;

use App\Models\Administrative;
use App\Models\Company;
use App\Models\Report;
use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends Controller
{
    public function index()
    {
        $timelines = Timeline::with('study_programs')->where('study_program_id', '=', Auth::user()->study_program_id)->where('status', '=', 0)->get();
        $administrative_datas = Administrative::with('users')->where('user_id', '=', Auth::id())->where('status', '=', 2)->get();
        $reports = Report::with('users')->where('user_id', '=', Auth::id())->where('status', '=', 2)->get();
        $gg = [];
        $status = null;
        $users = DB::table('company_user')->where('user_id', '=', Auth::id())->get();
        foreach ($users as $u)
        {
            $gg[] = $u->company_id ;
        }
        $companies = Company::find($gg);

        foreach ($companies as $c)
        {
            $status = $c->status;
        }

        return view('dashboard', compact('timelines', 'administrative_datas', 'reports', 'gg', 'status'));
    }
}
