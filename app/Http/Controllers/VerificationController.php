<?php

namespace App\Http\Controllers;

use App\Http\Requests\VerificationRequest;

class VerificationController extends Controller
{

    /**
     * Create a new verification behavior.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(VerificationRequest $request)
    {
        return response($request->get('hub_challenge'));
    }


}
