<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\User;


class UpdateCredentialsController
{


    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUserRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(UpdateProfileRequest $request)
    {
        $user = User::findOrFail($request->user()->id);

        if($request->hasFile('image'))
        {
            $file = $request->file('image');

            $file->move('images/profile-image.jpg', $file->getClientOriginalName())
        }
        
        $user->update([
            'name'      => $request->get('name'),
            'email'     => $request->get('email'),
            'password'  => $this->isPasswordChanged($request, $user)
        ]);

        flash('Profile Updated', 'success');

        return redirect()->back();
    }

    /**
     * Check if the password has changed or no.
     *
     * @param UpdateUserRequest $request
     * @param $user
     * @return mixed
     */
    private function isPasswordChanged(Request $request, $user)
    {
        return $request->input('password') != "" ? \Hash::make($request->input('password')) : $user->password;
    }
}