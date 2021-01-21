<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTimelineRequest;
use App\Http\Requests\UpdateTimelineRequest;
use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::allows('timeline_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $timelines = Timeline::with('study_programs')->where('study_program_id', '=', Auth::user()->study_program_id)->where('status', '=', 0)->get();

        return view('timeline.index', compact('timelines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('admin_timeline_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $study_program_id = Auth::user()->study_program_id;

        return view('timeline.create', compact('study_program_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTimelineRequest $request)
    {
        Timeline::create($request->validated());

        return redirect()->route('timeline.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Timeline  $timeline
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        abort_if(Gate::denies('admin_timeline_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $timelines = Timeline::with('study_programs')->where('study_program_id', '=', Auth::user()->study_program_id)->where('status', '=', 1)->get();

        return view('timeline.history', compact('timelines'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Timeline  $timeline
     * @return \Illuminate\Http\Response
     */
    public function edit(Timeline $timeline)
    {
        abort_if(Gate::denies('admin_timeline_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('timeline.edit', compact('timeline'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Timeline  $timeline
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTimelineRequest $request, Timeline $timeline)
    {
        $timeline->update($request->validated());

        return redirect()->route('timeline.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Timeline  $timeline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timeline $timeline)
    {
        abort_if(Gate::denies('admin_timeline_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $timeline->delete();

        return redirect()->route('timeline.index');
    }

    public function markasdone(Timeline $timeline)
    {
        abort_if(Gate::denies('admin_timeline_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $timeline->status = 1;
        $timeline->save();

        return redirect()->route('timeline.index');
    }

    public function markasundone(Timeline $timeline)
    {
        abort_if(Gate::denies('admin_timeline_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $timeline->status = 0;
        $timeline->save();

        return redirect()->route('timeline.history');
    }
}
