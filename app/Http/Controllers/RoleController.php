<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read-role')->only(['index', 'datatables']);
        $this->middleware('permission:add-role')->only(['create', 'store']);
        $this->middleware('permission:edit-role')->only(['edit', 'update']);
        $this->middleware('permission:delete-role')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.role.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $request->validate(['role' => 'unique:roles,name']);

        $role = Role::create(['name' => strtolower($request->role)]);
        $role->syncPermissions($request->permissions);

        return redirect()->back()->with('success', 'Berhasil membuat role baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::findOrFail($id);

        return view('admin.role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, $id)
    {
        $role = Role::findOrFail($id);

        if ($request->role != $role->name) {
            $request->validate(['role' => 'unique:roles,name']);
        }

        $role->syncPermissions($request->permissions);
        return redirect()->back()->with('success', 'Berhasil mengubah data role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus role');
    }

    public function datatables()
    {
        return datatables()->of(Role::query())
            ->addColumn('permission', function ($role) {
                $perms = Permission::all();
                return view('admin.role.utilities.permission_dt', compact('perms', 'role'));
            })
            ->addColumn('action', function ($role) {
                return view('admin.role.utilities.action_dt', compact('role'));
            })
            ->toJson();
    }
}
