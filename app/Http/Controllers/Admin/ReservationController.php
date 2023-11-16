<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Table;
use App\Enums\TableStatus;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::latest()->paginate(10);

        $title = 'Delete Categories!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('admin.reservation.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tables = Table::where('status', TableStatus::Tersedia)->get();
        return view('admin.reservation.create', compact('tables'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationStoreRequest $request)
    {
        $table = Table::findOrFail($request->table_id);
        if ($request->guest_number > $table->guest_number) {
            return back()->with('message', 'Silahkan pilih meja berdasarkan total orang yang tersedia.');
        }
        $request_date = Carbon::parse($request->res_date);

        foreach ($table->reservations as $res) {
            $resDate = Carbon::parse($res->res_date);
        
            if ($resDate->format('Y-m-d') == $request_date->format('Y-m-d')) {
                return back()->with('message', 'Meja ini telah dipesan pada waktu yang sama.');
            }
        }

        // foreach ($table->reservations as $res) {
        //     if ($res->res_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
        //         return back()->with('message', 'This table is reserved for this date.');
        //     }
        // }

        Reservation::create($request->validated());

        return to_route('admin.reservations.index')->with('message', 'Reservasi berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return to_route('admin.reservations.index')->with('message', 'Reservation deleted successfully.');
    }
}
