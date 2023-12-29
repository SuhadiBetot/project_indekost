<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile()
{
    // Check if the user is authenticated
    if (auth()->check()) {
        // User is authenticated, retrieve the user
        $user = User::find(auth()->user()->id);
        $owner = User::find(auth()->user()->id);


        // Check if the user is found
        if ($user) {
            // Check user role
            if ($user->role == 'user') {
                // User is a regular user, return the regular user profile view
                return view('user.profile', compact('user'));
            } elseif ($user->role == 'owner') {
                // User is an owner, return the owner profile view
                return view('owner.profilee', compact('user'));
            }
        } else {
            // User not found, handle the error (redirect, show error view, etc.)
            return redirect()->route('login')->with('error', 'User not found');
        }
    } else {
        // User is not authenticated, handle the error (redirect, show error view, etc.)
        return redirect()->route('login')->with('error', 'User not authenticated');
    }
}



// Controller method
public function editProfile(Request $request, $id)
{
    $user = User::find($id);
    return view('user.edit_profile', compact('user'));
}


    public function ngubah_profile(Request $request, $id)
    {
        $user = User::find($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            // Add validation rules for other fields if needed
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            // Add custom error messages for other fields if needed
        ]);

        if ($validator->fails()) {
            return redirect()->route('edit.profile.form', ['id' => $user->id])
                ->withInput()
                ->withErrors($validator);
        }

        // Update the user's name and other fields as needed
        $user->name = $request->input('name');
        // Update other fields if needed

        // Save the changes
        $user->save();

        // Redirect to the profile view
        return redirect()->route('user.profile')->with('success', 'Profile berhasil diperbarui');
    }
}
?>
