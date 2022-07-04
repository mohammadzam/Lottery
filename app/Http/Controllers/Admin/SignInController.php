<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignInRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    protected function guard()
    {
        return Auth::guard('admin');
    }
    public function showSignInPage()
    {
        $page_name = 'Verkio | Sign In';
        return view('layouts.Admin.login',compact('page_name'));
    }
    public function signingIn(SignInRequest $request)
    {
        $validated = $request->validated();
//        dd($validated);
        if (auth()->guard('admin')->attempt(['email' => $validated['email'], 'password' =>$validated['password']])) {
            return redirect()->route('show.profile.page');
        }
        else {
            return redirect()->back()->with(['error' => 'The email or password is incorrect']);
        }
    }


}
