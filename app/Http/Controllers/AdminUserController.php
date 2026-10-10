<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin_users.index');
    }

    public function getAdminUsers()
    {
        $data = AdminUser::query();

        return DataTables::eloquent($data)
            ->editColumn('created_at', function ($data) {
                return $data->created_at->format('Y-m-d H:i:s');
            })
            ->addColumn('action', function ($data) {
                $actions = '<div class="d-flex justify-content-center gap-2"> 
                                <span class="text-muted"><i class="bx bxs-trash fs-5"></i></span>
                                <span class="text-muted"><i class="bx bxs-pencil fs-5"></i></span>
                          </div>';

                return $actions;
            })
            ->rawColumns(['action'])
            ->toJson();
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
    public function show(AdminUser $adminUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminUser $adminUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminUser $adminUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminUser $adminUser)
    {
        //
    }
}
