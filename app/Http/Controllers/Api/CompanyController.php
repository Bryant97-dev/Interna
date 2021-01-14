<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function company (){
        $gg = [];
        $companies = DB::table('company_user')->where('user_id', '=', Auth::id())->get();
        foreach ($companies as $u)
        {
            $gg[] = $u->company_id ;
        }
        $company = Company::find($gg);
        return CompanyResource::collection($company);
    }
}
