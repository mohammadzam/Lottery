<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddUsersRequest;
use App\Models\User;
use App\Models\WinUser;
use Database\Seeders\AddRandomUserSeeder;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class LotteryController extends Controller
{
    public function showLotteryPage()
    {
        $page_name = 'Verkio | Lottery';
        return view('layouts.Admin.lottery', compact('page_name'));
    }

    public function getLotteryWin()
    {
        $data = User::inRandomOrder()->limit(1)->where('is_winner', 0)->first();
        if (isset($data)) {
            User::where('id', $data->id)->update([
                'is_winner' => 1,
            ]);
            Alert::success('Congratulation !!', 'The winner of this raffle is:' . $data->name);
            return view('layouts.User.winner', compact('data'));
        }
        else
        {
            Alert::error('Error !!', 'All your contestants have won the contest, please add new users to follow the drawing process');
            return view('layouts.Admin.addUsers');
        }

    }

    public function ShowAddUsersForm()
    {
        Alert::error('Error !!', 'All your participants have won this raffle, please add new users');
        return view('layouts.Admin.addUsers');
    }

    public function addUsers(AddUsersRequest $request)
    {
        $validated = $request->validated();
//        dd($validated);
        $seeder = new DatabaseSeeder();
        $seeder->add($validated['num']);
        Alert::success('Success', $validated['num'] .' users has been created successfully');
        return redirect()->route('show.lottery.page');

    }
}
