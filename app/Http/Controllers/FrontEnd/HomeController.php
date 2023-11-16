<?php

namespace App\Http\Controllers\FrontEnd;

use Carbon\Carbon;
use App\Models\Menu;
use App\Models\Table;
use App\Models\Category;
use App\Enums\TableStatus;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index(Request $request) {

        return view('layouts.home', [
            'menus' => Menu::all(),
            'categories' => Category::all(),
            'reservation' => $request->session()->get('reservation'),
            'min_date' => Carbon::today(),
            'max_date' => Carbon::now()->addWeek(),
            'tables' => Table::where('status', TableStatus::Tersedia)->get(),
        ]);
    }

    public function store(ReservationStoreRequest $request)
    {
        // $table = Table::findOrFail($request->table_id);
        // if ($request->guest_number > $table->guest_number) {
        //     return back()->with('message', 'Silahkan pilih meja berdasarkan total orang yang tersedia.');
        // }
        // $request_date = Carbon::parse($request->res_date);

        // foreach ($table->reservations as $res) {
        //     $resDate = Carbon::parse($res->res_date);
        
        //     if ($resDate->format('Y-m-d') == $request_date->format('Y-m-d')) {
        //         return back()->with('message', 'Meja ini telah dipesan pada waktu yang sama.');
        //     }
        // }

        // Reservation::create($request->validated());

        try {
            // Validate the request
            $validatedData = $request->validated();
    
            // Your additional validation logic
            $table = Table::findOrFail($validatedData['table_id']);
            if ($validatedData['guest_number'] > $table->guest_number) {
                return back()->with('message', 'Silahkan pilih meja berdasarkan total orang yang tersedia.');
            }
    
            $requestDate = Carbon::parse($validatedData['res_date']);
    
            foreach ($table->reservations as $res) {
                $resDate = Carbon::parse($res->res_date);
    
                if ($resDate->format('Y-m-d') == $requestDate->format('Y-m-d')) {
                    return back()->with('message', 'Meja ini telah dipesan pada waktu yang sama.');
                }
            }
    
            // Create the reservation
            Reservation::create($validatedData);

            // Alert::success('Success', 'Reservasi berhasil dibuat!')->persistent(true);
    
            return redirect('/')->with('success', 'Reservasi telah dibuat!');
        } catch (\Exception $e) {
            // Log the exception
            logger()->error($e);
    
            // Return an error response or redirect back with an error message
            return back()->with('message', 'An error occurred while creating the reservation: ' . $e->getMessage());
        }
    

        // return to_route('homes')->with('message', 'Reservasi berhasil dibuat!');
    }
}
