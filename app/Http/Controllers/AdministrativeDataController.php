<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdministrativeDataRequest;
use App\Http\Requests\UpdateAdministrativeDataRequest;
use App\Models\AdministrativeData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class AdministrativeDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('administrative_data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $administrative_datas = AdministrativeData::with('users')->where('user_id', '=', Auth::id())->get();

        return view('administrative_data.index', compact('administrative_datas'));
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

        return view('administrative_data.create', compact('user_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdministrativeDataRequest $request)
    {
        $file = $request->file('file');
        $name = $file->getClientOriginalName();
        $path = substr($file->store('public'), 7);
        $data = $request->validated();

        AdministrativeData::create([
            'title' => $data['title'],
            'file' => $path,
            'description' => $data['description'],
            'user_id' => $data['user_id'],
        ]);

        return $path;

        // menyimpan data file yang diupload ke variabel $file
//        $file = $request->file('file');

        // nama file
//        echo 'File Name: '.$file->getClientOriginalName();
//        echo '<br>';
//
//        // ekstensi file
//        echo 'File Extension: '.$file->getClientOriginalExtension();
//        echo '<br>';
//
//        // real path
//        echo 'File Real Path: '.$file->getRealPath();
//        echo '<br>';
//
//        // ukuran file
//        echo 'File Size: '.$file->getSize();
//        echo '<br>';
//
//        // tipe mime
//        echo 'File Mime Type: '.$file->getMimeType();

        // isi dengan nama folder tempat kemana file diupload
//        $tujuan_upload = 'data_file';

        // upload file
//        $file->move($tujuan_upload,$file->getClientOriginalName());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdministrativeData  $administrativeData
     * @return \Illuminate\Http\Response
     */
    public function show(AdministrativeData $administrativeData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdministrativeData  $administrativeData
     * @return \Illuminate\Http\Response
     */
    public function edit(AdministrativeData $administrativeData)
    {
        abort_if(Gate::denies('administrative_data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('timeline.edit', compact('timeline'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdministrativeData  $administrativeData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdministrativeDataRequest $request, AdministrativeData $administrativeData)
    {
        $timeline->update($request->validated());

        return redirect()->route('timeline.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdministrativeData  $administrativeData
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdministrativeData $administrativeData)
    {
        abort_if(Gate::denies('administrative_data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $timeline->delete();

        return redirect()->route('timeline.index');
    }
}
