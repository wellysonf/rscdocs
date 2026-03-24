@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold">Documentos de {{ $user->name }}</h2>
    <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900 underline">Voltar</a>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse($documents as $document)
    <div class="bg-white shadow rounded-lg p-6">
        <h3 class="text-lg font-bold mb-2">{{ $document->title }}</h3>
        <p class="text-sm text-gray-600 mb-4">Proprietário: {{ $document->owner_id == $user->id ? '(Este usuário)' : $document->owner->name ?? 'Desconhecido' }}</p>
        <a href="{{ Storage::url($document->path) }}" target="_blank" class="text-blue-600 hover:underline">Download / Ver</a>
    </div>
    @empty
    <div class="col-span-full text-center text-gray-500 p-6 bg-white shadow rounded-lg">Nenhum documento vinculado.</div>
    @endforelse
</div>
@endsection
