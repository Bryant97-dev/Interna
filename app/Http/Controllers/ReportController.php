<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('report_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $reports = Report::with('users')->where('user_id', '=', Auth::id())->get();

        return view('report.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('report_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user_id = Auth::id();

        return view('report.create', compact('user_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReportRequest $request)
    {
        $file = $request->file('file');
        $name = $file->getClientOriginalName();
        $path = substr($file->store('public'), 7);
        $data = $request->validated();

        Report::create([
            'title' => $data['title'],
            'file' => $name,
            'path' => $path,
            'description' => $data['description'],
            'user_id' => $data['user_id'],
        ]);

        return redirect()->route('report.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
//    public function show(Report $report)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        abort_if(Gate::denies('report_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('report.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReportRequest $request, Report $report)
    {
        if (!empty($request->file('file')))
        {
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $path = substr($file->store('public'), 7);
            $data = $request->validated();

            $report->update([
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

            $report->update([
                'title' => $data['title'],
                'description' => $data['description'],
                'status' => 0,
            ]);
        }

        return redirect()->route('report.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        abort_if(Gate::denies('report_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $report->delete();

        return redirect()->route('report.index');
    }
}
