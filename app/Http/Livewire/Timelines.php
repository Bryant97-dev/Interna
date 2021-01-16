<?php

namespace App\Http\Livewire;

use App\Models\Timeline;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Timelines extends Component
{
    public $timelines, $date, $time, $title, $description, $status, $timeline_id, $study_program_id;
    public $isModal = 0;

    public function render()
    {
        $this->timelines = Timeline::with('study_programs')->where('study_program_id', '=', Auth::user()->study_program_id)->where('status', '=', 0)->get();
        $this->study_program_id = Auth::user()->study_program_id;
        return view('livewire.timelines');
    }

    public function create()
    {
        $this->resetFields();
        $this->openModal();
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function resetFields()
    {
        $this->date = '';
        $this->time = '';
        $this->title = '';
        $this->description = '';
        $this->timeline_id = '';
    }

    public function store()
    {
        $this->validate([
            'date' => [
                'required', 'date',
            ],
            'time' => [
                'required',
            ],
            'title' => [
                'required', 'string',
            ],
            'description' => [
                'string',
            ],
            'study_program_id' => [
                'required', 'integer',
            ]
        ]);

        Timeline::updateOrCreate(['id' => $this->timeline_id], [
            'date' => $this->date,
            'time' => $this->time,
            'title' => $this->title,
            'description' => $this->description,
            'study_program_id' => $this->study_program_id,
        ]);

        session()->flash('message', $this->timeline_id ? $this->title . ' Diperbaharui': $this->title . ' Ditambahkan');
        $this->closeModal();
        $this->resetFields();
    }

    public function edit($id)
    {
        $timeline = Timeline::find($id);
        $this->timeline_id = $id;
        $this->date = $timeline->date;
        $this->email = $timeline->email;
        $this->phone_number = $timeline->phone_number;
        $this->status = $timeline->status;

        $this->openModal();
    }

    public function delete($id)
    {
        $timeline = Timeline::find($id);
        $timeline->delete();
        session()->flash('message', $timeline->title . ' Dihapus');
    }
}
