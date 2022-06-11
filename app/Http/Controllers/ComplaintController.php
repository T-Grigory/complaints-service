<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\ComplaintReason;
use App\Models\Polyclinic;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class ComplaintController extends Controller
{
    public function index(): View
    {
        $complaints = Complaint::all();

        return view('complaint.index', compact('complaints'));
    }

    public function create(): View
    {
        $complaint = new Complaint();
        $polyclinics = Polyclinic::all();
        $reasons = ComplaintReason::all();

        return view('complaint.create', compact('complaint', 'polyclinics', 'reasons'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validate($request, [
            'fullname' => 'required|max:255',
            'phone' => 'required|regex:/^\+7[0-9]{10}$/',
            'polyclinic_id' => 'required',
            'reason_id' => 'required',
            'text' => 'required|max:255',
        ]);

        $complaint = Complaint::where('phone', $data['phone'])->first();

        if (!is_null($complaint) && $complaint->fullname !== $data['fullname']) {
            $request->session()->flash('error', __('flash.complaint.create.error'));
            return back()->withInput();
        }

        $newComplaint = new Complaint();
        $newComplaint->fill($data);
        $newComplaint->save();

        return redirect()->route('complaints.index');
    }

    public function show(Complaint $complaint): View
    {
        return view('complaint.show', compact('complaint'));
    }
}
