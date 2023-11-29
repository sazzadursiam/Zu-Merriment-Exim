<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{

    public function login(Request $request)
    {
        // Validating data
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($request->isMethod('post')) {
            //check email
            $user = User::where('email', $request->email)->first();
            if (!$user) {
                return redirect()->back()->with('email_error', 'Wrong Email..');
            }
            //check password
            if (!Hash::check($request->password, $user->password)) {
                return redirect()->back()->with('password_error', 'Wrong Password..');
            }
            if (Auth::attempt($request->only(['email', 'password']), $request->get('remember'))) {
                if ($user->user_type == 0) {
                    return redirect()->route('admin.dashboard')->with('message', 'Login Succcessful.');
                }
            }
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login-page')->with('message', 'Logout Succcessful.');
    }



    public function profile_update(Request $request)
    {
        //Validation
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);
        $user = User::find(Auth::id());
        if ($user) {
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->address = $request->address;
            // upload
            if ($request->hasFile('profile_photo')) {
                //remove old image form folder if new image comes
                if ($user->profile_photo != null || $user->profile_photo != "") {
                    $image_file = public_path($user->profile_photo);
                    if (file_exists($image_file)) {
                        unlink($image_file);
                    }
                }
                $profile_photo = $request->file('profile_photo');
                $new_name = rand() . '.' . $request->profile_photo->getClientOriginalExtension();
                $path = '/common/images/user/profile_img/';
                $profile_photo->move(public_path($path), $new_name);
                $user->profile_photo = $path . $new_name;
            }
            $user->save();

            return back()->with('message', 'Profile has been updated.');
        } else {
            return back()->with('message', 'Not Found.');
        }
    }


    public function admin_password_update(Request $request, $user_id)
    {
        $model = User::find($user_id);

        if ($model) {

            //Validation
            $validated = $request->validate([
                'current_password' => 'required',
                'new_password' => 'required|min:4',
                'confirm_password' => 'required|min:4|same:new_password',
            ]);
            $old_pass = $model->password;
            if (!Hash::check($request->current_password, $old_pass)) {
                return redirect()->back()->with('password_error', 'Current password is wrong..!');
            }
            $model->password = Hash::make($request->new_password);
            $model->save();
            return back()->with('message', 'Password has been updated. Please do not forget your password..!');
        } else {
            return back()->with('message', 'Not Found..!');
        }
    }
}
