<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Customer;
use App\Models\Komplain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KomplainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $startDate = Carbon::now()->subDays(7)->startOfDay();
        $endDate = Carbon::now()->endOfDay();

        $query = Komplain::whereBetween('created_at', [$startDate, $endDate])
            ->orderBy('created_at', 'desc')
            ->with(['customer', 'user']);

        if (request()->has('search')) {
            $searchTerm = '%' . request('search') . '%';
            $query->where('pesan', 'like', $searchTerm)
                ->orWhere('status', 'like', $searchTerm)
                ->orwhereHas('customer', function ($query) use ($searchTerm) {
                    $query->where('name', 'like', $searchTerm)
                        ->orWhere('id_customer', 'like', $searchTerm)
                        ->orWhere('username', 'like', $searchTerm)
                        ->orWhere('nik', 'like', $searchTerm)
                        ->orWhere('phone', 'like', $searchTerm);
                })
                ->orWhereHas('user', function ($query) use ($searchTerm) {
                    $query->where('name', 'like', $searchTerm)
                        ->orWhere('email', 'like', $searchTerm);
                });
        }

        $komplains = $query->get();

        return view('komplain.index', [
            'komplain' => $komplains
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('komplain.create', [
            'user' => User::all(),
            'customer' => Customer::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'customer_id' => 'required',
            'pesan' => 'required|max:255',
            'photo' => 'image|file|max:1024'
        ]);

        if ($request->photo) {
            $validatedData['photo'] = $request->file('photo')->store('photo-komplain');
        }

        Komplain::create($validatedData);
        toast('Berhasil ditambahkan', 'success');
        return redirect('/komplain');
    }

    /**
     * Display the specified resource.
     */
    public function show(Komplain $komplain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Komplain $komplain)
    {
        return view('komplain.edit', [
            'komplain' => $komplain,
            'user' => User::all(),
            'customer' => Customer::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Komplain $komplain)
    {
        $rules = [
            'user_id' => 'required',
            'customer_id' => 'required',
            'pesan' => 'required|max:255',
            'status' => 'required',
            'photo' => 'image|file|max:1024'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('photo')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['photo'] = $request->file('photo')->store('photo-komplain');
        }

        Komplain::where('id', $komplain->id)
            ->update($validatedData);

        toast('Berhasil diperbarui', 'success');
        return redirect('/komplain');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Komplain $komplain)
    {
        if ($komplain->photo) {
            Storage::delete($komplain->photo);
        }

        Komplain::where('id', $komplain->id)->delete();
        toast('Data berhasil dihapus', 'success');
        return redirect('/komplain');
    }
}
