<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse {
        // : RedirectResponse
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        // if ($request->user()->isDirty('img_user')) {
        //     $img_user = $request->file('img_user');
        //     $filename = time() . '.' . $img_user->getClientOriginalExtension();
        //     Image::make($img_user)->resize(300,300)->save( public_path('/storage/app/public/img/' . $filename ) );

        //     $user = Auth::user();
        //     $user->img_user = $filename;
        // }

        if ($request->hasFile('img_user')) {
            $nombre_img_user = time() . '-' . $request->file('img_user')->getClientOriginalName();
            $request->user()->img_user=$nombre_img_user;
            $request->file('img_user')->storeAs('public/img', $nombre_img_user);
        }

        // if ($request->user()->isDirty('img_user')) {
            
        // }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
