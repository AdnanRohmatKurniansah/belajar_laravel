<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdatePasswordController extends Controller
{
    public function changePassword(Request $request)
{
    // Validate the request data
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:6|confirmed',
    ]);

    // Get the authenticated user
    $user = Auth::user();

    // Check if the current password is correct
    if (!Hash::check($request->current_password, $user->password)) {
        // Return an error message if the current password is incorrect
        return redirect()->back()->withErrors([
            'current_password' => 'The current password is incorrect',
        ]);
    }

    // Hash the new password
    $user->password = Hash::make($request->new_password);

    // Save the new password
    $user->save();

    // Return a success message or redirect to a success page
    return redirect()->back()->with('success', 'Password changed successfully');
}

}
