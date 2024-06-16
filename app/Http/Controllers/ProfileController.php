<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

     public function index()
     {
         $user = Auth::user(); // Get the authenticated user
         
         return view('dashboard.profile.index', compact('user'));
     }


    /**
     * Show the form for editing the user's profile.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.profile.edit', compact('user'));
    }

    /**
     * Update the user's profile.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'current_password' => 'required|string',
            'new_password' => 'nullable|string|confirmed',
        ]);

        $user = User::findOrFail($id);

        // Check if current password matches the one in the database
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'Password saat ini salah.');
        }

        $user->name = $request->name;
        $user->email = $request->email;

        // Update password if new password is provided
        if ($request->new_password) {
            $user->password = Hash::make($request->new_password);
        }

        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
    }
}
