<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class AdminRegisController extends Controller
{
    public function index() : View
    {
        $lists = User::oldest()->get();
        return view("admin.user", compact('lists'));
    }
    public function create(): View
    {
        return view('admin.regis');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'usertype' => $request->usertype,
        ]);

        return redirect(route('admin.user', absolute: false));
    }

    public function edit(string $id): View
    {
        $user = User::findOrFail($id);
        return view("admin.user", compact('user'));
    }


    public function update(Request $request, string $id): RedirectResponse
    {
        $user = User::findOrFail($id);

        $user->update($request->only('name', 'email', 'usertype'));

        return redirect()->route('admin.user')->with('success', 'User updated successfully');
    }

    public function destroy(string $id): RedirectResponse
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.user')->with('success', 'User deleted successfully');
    }
}


