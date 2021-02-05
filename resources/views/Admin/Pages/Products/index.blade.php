@extends('Admin.Layout.app')

@section('title', 'Bom dia')

@section('content')

    <h1>Exibindo os principais produtos...</h1>

    @component('Admin.components.components')
        @slot('title')
            <h3>Esse é o titulo</h3>
        @endslot
        É apenas um texto sem nexo
    @endcomponent
    <hr>
    @include('Admin.includes.alerts')<!--, ['content' => 'Alta de preços assusta o mercado'])-->

    <hr>
    @if(123 <> 123)
        É um estado imutavel da matéria
    @elseif(123 === '123')
        É um fato consumado que merece a nossa atencao
    @else 
        É a busca pelo inalcansável que se realiza
    @endif

    @isset($teste2 ) <!-- Essa variavel existe?-->
        @foreach ($teste2 as $item)
            <p class="@if ($loop->first) last @endif">
                {{ $item }}
            </p>
        @endforeach
    @endisset

    @forelse ([] as $item)
        <p>There are something</p>
    @empty
        <p>The array is empty</p>
    @endforelse
    
    {{-- @push('scripts')
        <script>
            alert("Hello World!")
        </script>   
    @endpush --}}

    <hr>

    <a href="{{ route('products.create') }}">Cadastrar</a>
    
@endsection