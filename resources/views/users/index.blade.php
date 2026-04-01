@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <a href="https://www.calculadorarsc.com/" target="_blank" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700">Calculadora RSC-TAE</a>
    <h2 class="text-2xl font-bold">Usuários</h2>
    <a href="{{ route('documents.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700">Adicionar Documento</a>
</div>

<div class="bg-white shadow rounded-lg overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nome</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Documentos</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse($users as $user)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $user->name }}
                    <span class="inline-flex items-center justify-center px-2 py-1 ml-2 text-xs font-bold leading-none text-blue-100 bg-blue-600 rounded-full" title="Quantidade de documentos vinculados">{{ $user->documents_count }}</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <a href="{{ route('users.documents', $user) }}" class="text-blue-600 hover:text-blue-900">Ver Documentos</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="2" class="px-6 py-4 text-center text-gray-500">Nenhum documento encontrado.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
