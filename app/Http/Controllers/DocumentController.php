<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\User;
use Illuminate\Support\Str;

class DocumentController extends Controller
{
    public function create()
    {
        $users = User::orderBy('name')->get();
        return view('documents.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file',
            'owner' => 'required',
            'users' => 'nullable|array',
        ]);

        $ownerId = $this->resolveUserId($request->owner);

        $path = $request->file('file')->store('documents', 'public');

        $document = Document::create([
            'title' => $request->title,
            'path' => $path,
            'owner_id' => $ownerId,
        ]);

        if (!empty($request->users)) {
            $userIds = [];
            foreach ($request->users as $u) {
                $userIds[] = $this->resolveUserId($u);
            }
            $document->users()->sync($userIds);
        }

        return redirect()->route('home')->with('success', 'Documento adicionado com sucesso!');
    }

    private function resolveUserId($input)
    {
        if (is_numeric($input)) {
            return $input;
        }
        $user = User::where('name', $input)->first();
        if ($user) {
            return $user->id;
        }
        else {
            $user = User::create([
                'name' => $input,
                'email' => Str::slug($input) . '_' . time() . '@example.com',
                'password' => bcrypt(Str::random(10)),
            ]);
        }

        return $user->id;
    }
}
