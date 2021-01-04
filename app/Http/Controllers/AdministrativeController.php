<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdministrativeRequest;
use App\Http\Requests\UpdateAdministrativeRequest;
use App\Models\Administrative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        abort_if(Gate::denies('administrative_data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $administrative_datas = Administrative::with('users')->where('user_id', '=', Auth::id())->get();

        return view('administrative.index', compact('administrative_datas'));
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
    public function show(Administrative $administrative)
    {
        //
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
        $timeline->update($request->validated());

        return redirect()->route('timeline.index');
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

        $timeline->delete();

        return redirect()->route('timeline.index');
    }
}
