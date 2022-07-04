<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    protected function guard()
    {
        return Auth::guard('admin');
    }
    public function Logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/sign-in');

    }

    public function showProfilePage()
    {
        $page_name = 'Verkio - Lottery System | Profile';
        if (session('success_message')){
            Alert::success('Success!', 'success_message');
        }
        if (session('error_message')){
            Alert::success('Error!', 'error_message');
        }

        return view('layouts.Admin.profile',compact('page_name'));
    }
    public function showAdminsPage()
    {
        $page_name = 'Verkio - Lottery System | Admins';
        $data = Admin::withoutTrashed()->get();
        return view('layouts.Admin.admins',compact(['page_name','data']));
    }
    public function showEditForm($id)
    {

        if ($id == 1){
            Alert::error('error', 'You do not have permission to edit this admin');
            return redirect()->route('show.admins.page');
        }
        if ($id == auth()->id()){
            Alert::error('error', 'You do not have permission to edit your account ask the main admin to edit your account');
            return redirect()->route('show.admins.page');
        }
        $data = Admin::findOrFail($id);
        $page_name = 'Verkio - Lottery System | Admin '.$data->name;
        return view('layouts.Admin.editForm',compact(['data','page_name']));
    }
    public function updateEditedAdmin(UpdateAdminRequest $request, $id)
    {
        if ($id == 1){
            return redirect()->route('show.admins.page')->withErrorMessage('You do not have permission to edit this admin');
        }
        $validated = $request->validated();
        if(isset($validated['password'])){
            Admin::where('id', $id)->update([
                'password' => Hash::make($validated['password']),
            ]);
        }
        else{
            unset($validated['password']);
        }
        Admin::where('id', $id)->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
        ]);
        return redirect()->route('show.admins.page')->withSuccessMessage('This admin has been successfully updated');

    }
    public function showCreateFrom(){
        $page_name = 'Verkio - Lottery System | Admins | Creat New Admin';
        return view('layouts.Admin.createForm',compact(['page_name']));
    }
    public function store(StoreNewAdminRequest $request)
    {
        $validated = $request->validated();
        Admin::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);
        Alert::success('Success', 'The admin has been created successfully');
        return redirect()->route('show.admins.page');
    }
    public function destroy($id)
    {
        if ($id == 1){
            Alert::error('error', 'You do not have permission to delete this admin');
            return redirect()->route('show.admins.page');
        }
        if ($id == auth()->id()){
            Alert::error('error', 'You do not have permission to delete your account ask the main admin to delete your account');
            return redirect()->route('show.admins.page');
        }
        DB::table('admins')->select('id', 'deleted_at', 'updated_at')
            ->where('id', '=', $id)
            ->update([
                'deleted_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        Alert::success('Success', 'The admin has been deleted successfully');
        return redirect()->route('show.admins.page');
    }







}
