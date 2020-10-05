<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Services\UserService;

class UserController extends Controller
{
    protected $userModel;
    protected $userService;

    public function __construct(UserService $userService, User $userModel)
    {
        $this->userModel = $userModel;
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $admins = User::where('type', 'admin')->orderBy('name')->get();

        return view('admin.admins', compact('user', 'admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();

        if ($user->type === 'admin') {
            return view('admin.admin-create', compact('user'));
        }

        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();

        if ($user->type !== 'admin') {
            return redirect(route('admins.index'))->withError('User without permissions!');
        }

        $storeResponse = $this->userService->store($request, 'admin');

        if (!$storeResponse->success) {
            return redirect(route('admins.index'))->withError('Error creating user!');
        }

        return redirect(route('admins.index'))->withSuccess('User created successfully!');
    }

    /**
     * Display specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $user = auth()->user();

        $admin = $this->userModel->find($id);

        return view('admin.admin', compact('user', 'admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = auth()->user();
        return view('config', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = auth()->user();

        $updateResponse = $this->userService->update($user->id, $request);

        if (!$updateResponse->success) {
            return redirect(route('users.edit', $user->id))->withError('Error editing user!');
        }

        return redirect(route('users.edit', $user->id))->withSuccess('User edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $user = auth()->user();

        if ($user->type !== 'admin') {
            return redirect(route('admins.index'))->withError('User without permissions!');
        }

        $destroyResponse = $this->userService->destroy($id);

        if (!$destroyResponse->success) {
            dd($destroyResponse->errors);
            return redirect(route('admins.index'))->withError('Error Removing User!');
        }

        return redirect(route('admins.index'))->withSuccess('User removed successfully!');
    }
}
