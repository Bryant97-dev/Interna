<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $gg = [];
        $id = null;
        $name = null;
        $address = null;
        $supervisor = null;
        $email = null;
        $phone = null;
        $npwp = null;
        $users = DB::table('company_user')->where('user_id', '=', Auth::id())->get();
        foreach ($users as $u)
        {
            $gg[] = $u->company_id ;
        }
        $companies = Company::find($gg);

        foreach ($companies as $c)
        {
            $id = $c->id;
            $name = $c->name;
            $address = $c->address;
            $supervisor = $c->supervisor;
            $email = $c->email;
            $phone = $c->phone;
            $npwp = $c->npwp;
        }
        return view('company.index',[
            'id' => $id,
            'name' => $name,
            'address' => $address,
            'supervisor' => $supervisor,
            'email' => $email,
            'phone' => $phone,
            'npwp' => $npwp,
            'companies' => $gg,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        $companies = Company::create($request->validated());
        $companies->users()->sync(Auth::id());

        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
//    public function show(Company $company)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $company = InternaInternship::with('companies')->where('user_id','=', Auth::id())->get();
        $companies = array();
        foreach ($company as $c)
        {
            $companies[] = $c->companies ;
        }

        return view('company.edit', compact('companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $company->update($request->validated());

        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
//    public function destroy(Company $company)
//    {
//        //
//    }
}
