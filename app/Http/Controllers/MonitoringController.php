<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kota;
use App\Models\Task;
use App\Models\User;
use App\Models\Paket;
use App\Models\Customer;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class MonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $weekAgo = Carbon::now()->subWeek();

        return view('monitoring.index', [
            'task' => Task::whereDate('created_at', '>=', $weekAgo)
                ->orderBy('created_at', 'desc')
                ->paginate(7)
                ->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('monitoring.show', [
            'task' => $task,
            'kota' => Kota::where('id', $task->customer->kota)->value('nama'),
            'kecamatan' => Kecamatan::where('id', $task->customer->kecamatan)->value('nama'),
            'desa' => Desa::where('id', $task->customer->desa)->value('nama'),
            'teknisi' => User::where('id', $task->user->id)->value('name')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('monitoring.edit', [
            'task' => $task,
            'kota' => Kota::all(),
            'kecamatan' => Kecamatan::all(),
            'desa' => Desa::all(),
            'paket' => Paket::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $rules = [
            'name' => 'required|min:3|max:255',
            'phone' => 'required|max:20',
            'wifi_password' => '',
            'koordinat' => '',
            'kota' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'photo_ktp' => 'image|file|max:2048',
            'photo_rumah' => 'image|file|max:2048'
        ];

        if ($request->id_customer != $task->customer->id_customer) {
            $rules['id_customer'] = 'required|min:3|max:20|unique:customers';
        }

        if ($request->username != $task->customer->username) {
            $rules['username'] = 'required|min:3|max:255|unique:customers';
        }

        if ($request->nik != $task->customer->nik) {
            $rules['nik'] = 'required|digits:16|unique:customers';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('photo_ktp')) {
            if ($request->oldKtp) {
                Storage::delete($request->oldKtp);
            }
            $validatedData['photo_ktp'] = $request->file('photo_ktp')->store('ktp-customer');
        }

        if ($request->file('photo_rumah')) {
            if ($request->oldRumah) {
                Storage::delete($request->oldRumah);
            }
            $validatedData['photo_rumah'] = $request->file('photo_rumah')->store('rumah-customer');
        }

        Customer::where('id', $task->customer->id)
            ->update($validatedData);

        $validatedTask = $request->validate([
            'activity' => 'required|max:255',
            'start_time' => 'required',
            'paket_id' => 'required',
            'status' => 'required',
        ]);

        Task::where('id', $task->id)
            ->update($validatedTask);

        toast('Berhasil diperbarui', 'success');
        return redirect('/monitoring');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        Task::where('id', $task->id)->delete();
        toast('Berhasil dihapus', 'success');
        return redirect('/monitoring');
    }
}
