@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold">Adicionar Documento</h2>
    <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900 underline">Voltar</a>
</div>

<div class="bg-white shadow rounded-lg p-6">
    <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Título do Documento</label>
            <input type="text" name="title" id="title" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 border">
        </div>

        <div class="mb-4">
            <label for="file" class="block text-sm font-medium text-gray-700">Arquivo</label>
            <input type="file" name="file" id="file" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 border">
        </div>

        <div class="mb-4">
            <label for="owner" class="block text-sm font-medium text-gray-700" title="A pessoa principal dona do documento">Proprietário (Selecione ou digite um novo nome e tecle Enter)</label>
            <select name="owner" id="owner" class="mt-1 block w-full select2-tags" required>
                <option value=""></option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-6">
            <label for="users" class="block text-sm font-medium text-gray-700" title="Outras pessoas que têm acesso ao documento">Vincular outros usuários (Selecione ou digite um novo nome e tecle Enter)</label>
            <select name="users[]" id="users" class="mt-1 block w-full select2-tags" multiple="multiple">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700">Salvar Documento</button>
        </div>
    </form>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $('.select2-tags').select2({
            tags: true,
            placeholder: "Selecione ou digite o nome e aperte Enter",
            tokenSeparators: [','],
            width: '100%'
        });
    });
</script>
@endpush
@endsection
