<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::has('documents')->withCount('documents')->orderBy('name')->get();
        return view('users.index', compact('users'));
    }

    public function documents(User $user)
    {
        $documents = $user->documents()->with('owner')->get();
        return view('users.documents', compact('user', 'documents'));
    }
}
