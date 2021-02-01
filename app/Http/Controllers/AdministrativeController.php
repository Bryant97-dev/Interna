<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdministrativeRequest;
use App\Http\Requests\UpdateAdministrativeRequest;
use App\Models\Administrative;
use App\Models\Period;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class AdministrativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth = DB::table('role_user')->where('user_id', '=', Auth::id())->get();
        foreach ($auth as $a)
        {
            $au = $a->role_id;
        }

        if ($au == 1) {
            $gg = [];
            $roles = DB::table('role_user')->where('role_id', '=', 2)->get();
            foreach ($roles as $a)
            {
                $gg[] = $a->user_id;
            }

            $departments = DB::table('interna_study_programs')->where('id', '=', Auth::user()->study_program_id)->get();
            foreach ($departments as $d)
            {
                $wp = $d->id;
            }

            $users = DB::table('users')->whereIn('id', $gg)->where('study_program_id', '=', $wp)->get();
            $periods = Period::all();

            return view('admin-administrative.index', compact('users', 'periods'));
        }
        else {
            $administrative_datas = Administrative::with('users')->where('user_id', '=', Auth::id())->get();

            return view('administrative.index', compact('administrative_datas'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('administrative_data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user_id = Auth::id();

        return view('administrative.create', compact('user_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdministrativeRequest $request)
    {
        $file = $request->file('file');
        $name = $file->getClientOriginalName();
        $path = substr($file->store('public'), 7);
        $data = $request->validated();

        Administrative::create([
            'title' => $data['title'],
            'file' => $name,
            'path' => $path,
            'description' => $data['description'],
            'user_id' => $data['user_id'],
        ]);

        return redirect()->route('administrative.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrative  $administrative
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $administrative_datas = Administrative::where('user_id', '=', $id)->get();

        return view('admin-administrative.show', compact('administrative_datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrative  $administrative
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrative $administrative)
    {
        abort_if(Gate::denies('administrative_data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('administrative.edit', compact('administrative'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrative  $administrative
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdministrativeRequest $request, Administrative $administrative)
    {
        if (!empty($request->file('file')))
        {
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $path = substr($file->store('public'), 7);
            $data = $request->validated();

            $administrative->update([
                'title' => $data['title'],
                'file' => $name,
                'path' => $path,
                'description' => $data['description'],
                'status' => 0,
            ]);
        }
        else
        {
            $data = $request->validated();

            $administrative->update([
                'title' => $data['title'],
                'description' => $data['description'],
                'status' => 0,
            ]);
        }

        return redirect()->route('administrative.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrative  $administrative
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrative $administrative)
    {
        abort_if(Gate::denies('administrative_data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $administrative->delete();

        return redirect()->route('administrative.index');
    }

    public function markasapproved(Administrative $administrative_data)
    {
        $administrative_data->status = 1;
        $administrative_data->save();

        return redirect()->route('administrative.index');
    }

    public function markasrejected(Administrative $administrative_data)
    {
        $administrative_data->status = 2;
        $administrative_data->save();

        return redirect()->route('administrative.index');
    }
}
