<?php

namespace App\Http\Controllers;

use App\Models\UserWeb;
use Illuminate\Http\Request;

class UserWebController extends Controller
{
    protected $userwebModel;

    public function __construct(UserWeb $UserWeb)
    {
        $this->userwebModel = $UserWeb;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = $this->userwebModel->find('2');
        dd($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('my-theme-page.registered-page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'last_name',
            'first_name',
            'email',
            'send_mail',
            'password',
        ]);
        $data['send_mail'] = isset($data['send_mail']) ? (int) $data['send_mail'] : 0;
        
        try {

            $user = $this->userwebModel->create($data);
            $msg = 'Create user success.';


            return redirect()
                ->route('theme-home-page')
                ->with('msg', $msg);
        } catch (\Exception $e) {
            \Log::error($e);
        }

        $error = 'Something went wrong.';

        return redirect()
            ->route('userweb.index')
            ->with('error', $error);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserWeb  $userWeb
     * @return \Illuminate\Http\Response
     */
    public function show(UserWeb $userWeb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserWeb  $userWeb
     * @return \Illuminate\Http\Response
     */
    public function edit(UserWeb $userWeb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserWeb  $userWeb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserWeb $userWeb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserWeb  $userWeb
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserWeb $userWeb)
    {
        //
    }
}
