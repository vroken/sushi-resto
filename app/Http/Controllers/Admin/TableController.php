<?php

namespace App\Http\Controllers\Admin;

use App\Enums\TableLocation;
use App\Models\Table;
use App\Enums\TableStatus;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Requests\TableStoreRequest;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tables = Table::latest()->paginate(10);

        $title = 'Delete Categories!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('admin.table.index', compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.table.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateDate = $request->validate([
            'name' => 'required',
            'guest_number' => 'required',
            'status' => 'required',
            'location' => 'required',
        ]);

        Table::create($validateDate);

        return to_route('admin.tables.index')->with('message', 'Pesanan meja baru telah ditambahkan!');
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
    public function edit(Table $table)
    {
        return view('admin.table.update', compact('table'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TableStoreRequest $request, Table $table)
    {
        $table->update($request->validated());

        return to_route('admin.tables.index')->with('message', 'Pesanan meja telah diupdate!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Table $table)
    {
        $table->reservations()->delete();
        $table->delete();

        return to_route('admin.tables.index')->with('message', 'Pesanan meja telah dihapus!');
    }
}
