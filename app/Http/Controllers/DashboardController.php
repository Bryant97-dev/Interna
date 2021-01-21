<?php

namespace App\Http\Controllers;

use App\Models\Administrative;
use App\Models\Company;
use App\Models\Report;
use App\Models\StudyProgram;
use App\Models\Timeline;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends Controller
{
    public function index()
    {
        $auth = DB::table('role_user')->where('user_id', '=', Auth::id())->get();
        foreach ($auth as $a)
        {
            $au = $a->role_id;
        }
        if ($au == 1) {
            $period_now = User::with('periods')->where('period_id', '=', 1)->get();
            $period_last = User::with('periods')->where('period_id', '=', 1-1)->get();
            $admin = DB::table('role_user')->where('role_id', '=', 1)->get();
            $user = DB::table('role_user')->where('role_id', '=', 2)->get();
            $deparment = StudyProgram::where('id', '=', Auth::user()->study_program_id)->get();
            foreach ($deparment as $d)
            {
                $deparment_name = $d->abbreviation;
            }
            return view('admin-dashboard', compact('period_now', 'period_last', 'admin', 'user', 'deparment_name'));
        }
        else {
            $timelines = Timeline::with('study_programs')->where('study_program_id', '=', Auth::user()->study_program_id)->where('status', '=', 0)->get();
            $administrative_datas_r = Administrative::with('users')->where('user_id', '=', Auth::id())->where('status', '=', 2)->get();
            $administrative_datas_p = Administrative::with('users')->where('user_id', '=', Auth::id())->where('status', '=', 0)->get();
            $administrative_datas_a = Administrative::with('users')->where('user_id', '=', Auth::id())->where('status', '=', 1)->get();
            $reports_r = Report::with('users')->where('user_id', '=', Auth::id())->where('status', '=', 2)->get();
            $reports_p = Report::with('users')->where('user_id', '=', Auth::id())->where('status', '=', 0)->get();
            $reports_a = Report::with('users')->where('user_id', '=', Auth::id())->where('status', '=', 1)->get();
            $status = null;
            $company = null;
            $companies = Company::with('users')->where('user_id', '=', Auth::id())->get();

            foreach ($companies as $c)
            {
                $status = $c->status;
                $company = $c->name;
            }

            return view('dashboard', compact('timelines', 'administrative_datas_r', 'administrative_datas_p', 'administrative_datas_a', 'reports_r', 'reports_p', 'reports_a', 'company', 'status'));
        }
    }
}
