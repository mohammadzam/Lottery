<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function showUsersPage()
    {
        $page_name = 'Verkio | Users';
        $data = User::withoutTrashed()->get();
        return view('layouts.User.users',compact(['page_name','data']));
    }
    public function showEditForm($id)
    {
        $data = User::findOrFail($id);
        $page_name = 'Verkio | User '.$data->name;
        return view('layouts.User.editForm',compact(['data','page_name']));
    }
    public function updateEditedUser(UpdateUserRequest $request, $id)
    {
        $validated = $request->validated();
        if(isset($validated['password'])){
            User::where('id', $id)->update([
                'password' => Hash::make($validated['password']),
            ]);
        }
        else{
            unset($validated['password']);
        }
        User::where('id', $id)->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
        ]);
        Alert::success('Success', 'This user has been successfully updated ');
        return redirect()->route('show.users.page');

    }
    public function showCreateFrom(){
        $page_name = 'Verkio | Users | Creat New User';
        return view('layouts.User.createForm',compact(['page_name']));
    }
    public function store(StoreNewUserRequest $request)
    {
        $validated = $request->validated();
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);
        Alert::success('Success', 'The user has been created successfully');
        return redirect()->route('show.users.page');
    }
    public function destroy($id)
    {

        DB::table('users')->select('id', 'deleted_at', 'updated_at')
            ->where('id', '=', $id)
            ->update([
                'deleted_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        Alert::success('Success', 'The user has been deleted successfully');
        return redirect()->route('show.users.page');
    }

}
