<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $users = User::all();

        return view('admin.user.index', compact('users', 'categories'));
    }

    public function store(Request $request)
    {
        $user = User::create([
            'phone' => $request->phone,
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ]);

        $user->categories()->sync($request->categories);

        try {
            $sender = "10001000660055";
            $receptor = $user->phone;
            $message = "با موفقیت در سایت پرتو دانش partoo-danesh. ir ثبت نام شدید.
رمز عبور شما جهت ورود به سایت و استفاده از کلاس های آنلاین ";
            $message .= $request->password;
            $message .= " می باشد. ";
            $api = new \Kavenegar\KavenegarApi("447232344B7378576B3362677131593052735371545349306E786443512B71646E6D625269686230436B733D");
            $api->Send($sender,$receptor,$message);
        }

        catch(\Kavenegar\Exceptions\ApiException $e)
        {
            echo $e->errorMessage();
        }

        catch(\Kavenegar\Exceptions\HttpException $e)
        {
            echo $e->errorMessage();
        }

        return back();
    }

    public function update(User $user,Request $request)
    {
        $user->update([
            'phone' => $request->phone,
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ]);

        $user->categories()->sync($request->categories);

        return back();
    }

    public function edit(User $user)
    {
        $categories = Category::all();

        return view('admin.user.edit', compact('user','categories'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back();
    }
}
