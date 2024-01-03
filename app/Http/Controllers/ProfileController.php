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
        if (Auth::check()) {
            // User is authenticated, retrieve the user
            $user = Auth::user();

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

    public function editProfile($id)
    {
        $user = User::find($id);
        return view('user.edit_profile', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::find($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email'=> 'required|email',
            'foto'=> 'image|mimes:png,jpg,jpeg,gif|max:2048',
            // Add validation rules for other fields if needed
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Format email tidak valid',
            'foto.mimes'=> 'Format foto harus berupa jpeg, png, jpg, dan gif',
            // Add custom error messages for other fields if needed
        ]);

        if ($validator->fails()) {
            return redirect()->route('profile', ['id' => $user->id])
                ->withInput()
                ->withErrors($validator);
        }


    $user->name = $request->input('name');
    $user->email = $request->input('email');


        if ($request->hasFile('foto')) {
            // Delete the previous image from storage
            if ($user->foto) {
                Storage::disk('public')->delete($user->foto);
            }

            // Store the uploaded image
            $imagePath = $request->file('foto')->store('fotos', 'public');
            $user->foto = $imagePath;
        }

        // Update other fields if needed

        // Save the changes
        $user->save();

        // Redirect to the profile view
        return redirect()->route('profile')->with('success', 'Profile berhasil diperbarui');
    }
}
