<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read-user')->only(['index', 'datatables']);
        $this->middleware('permission:add-user')->only('create');
        $this->middleware('permission:edit-user')->only('edit');
        $this->middleware('permission:delete-user')->only('delete');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $request->validate([
            'email' => 'unique:users,email',
            'password' => 'required|min:6',
            'password_confirm' => 'required|same:password'
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);

        $user->assignRole($request->role);

        return redirect()->back()->with('success', 'Berhasil menambahkan petugas');
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
        $user = User::findOrFail($id);

        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->all();
        $data['password'] = $user->password;

        if ($request->email != $user->email) {
            $request->validate(['email' => 'unique:users,email']);
        }

        if ($request->password) {
            $request->validate([
                'password' => 'required|min:6',
                'password_confirm' => 'required|same:password'
            ]);

            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);
        $user->syncRoles([$request->role]);

        return redirect()->back()->with('success', 'Berhasil menyimpan data petugas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data petugas');
    }

    public function datatables()
    {
        return datatables()->of(User::query())
            ->addColumn('role', function ($user) {
                return $user->roles->first()->name;
            })
            ->addColumn('action', function ($user) {
                return view('admin.user.utilities.action_dt', compact('user'));
            })
            ->toJson();
    }
}
