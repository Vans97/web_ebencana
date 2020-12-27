<?php

namespace App\Http\Controllers;
// use App\Role;

use App\Permission;
use Spatie\Permission\Models\Role;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission as SpatiePermission;

class AksesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $roles = Role::all();
        // return view ('akses.index', ['roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dump(auth()->user()->can('a_magroup_update'));
        dump(auth()->user()->hasAnyPermission(['a_magroup_update']));
        // $user = User::find(Auth::user()->id);
        $users = User::with('ModelHasRole', 'ModelHasPermission', 'ModelHasRole.roles', 'ModelHasPermission.permissions')
            ->where('id', Auth::user()->id)
            ->first();

        dump($users->can('a_magroup_update'));
        dump($users->hasPermissionTo('a_magroup_update'));
        // dd($users->hasDirectPermission('a_magroup_update'));

        // dd($users);

        // dd($user->hasRole('a_magroup'));
        // dd($user->getAllPermissions());

        // $user->assignRole('a_magroup', 'a_mauser');
        // $users->givePermissionTo('a_magroup_create');

        // $role = Role::findByName('a_magroup');
        // $role->givePermissionTo('a_magroup_view');
        // $role->givePermissionTo('a_maaccess_search');
        // $role->givePermissionTo('a_maaccess_create');
        // $role->givePermissionTo('a_maaccess_update');
        // $role->givePermissionTo('a_maaccess_delete');
        // $role->revokePermissionTo('a_magroup_view');

        // die;

        // dd($user);
        $roles = Role::get();

        foreach ($roles as $role) {
            //
        }

        dd($roles);

        //==========================================
        $roles = Role::with('permissions')->get();
        // dd($roles);

        $accesses = [];
        foreach ($roles as $role) {
            $data['role_id'] = $role->id;
            $data['bahagian'] = $role->bahagian;
            $data['kod'] = $role->name;
            $data['nama'] = $role->nama;

            foreach ($role->permissions as $permission) {
                $permissionById = app(SpatiePermission::class)->findById($permission->pivot->permission_id);

                $permissions[] = (object) [
                    'permission_name' => $permissionById->name,
                    'is_active' => $users->hasDirectPermission($permissionById->name),
                ];
            }

            $accesses[] = (object) [
                'data' => (object) $data,
                'permission' => (object) $permissions
            ];

            $permissions = [];
        }

        // dd($accesses);

        return view ('akses.create_1', compact('accesses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
