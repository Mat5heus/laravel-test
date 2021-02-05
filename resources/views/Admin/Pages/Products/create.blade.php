@extends('Admin.Layout.app')

@section('title',"Cadastro de produtos")

@section('content')
    <h1>Cadastro de Produtos</h1>
    {{-- Super necessaria a utilização do enctype --}}
    <form action="{{ route('products.store') }}" method='post' enctype="multipart/form-data">
        @method('post')
        @csrf
        <input type="text" name="name" id="name" placeholder="Nome:" value="{{ old('name') }}">
        <input type="text" name="description" id="desc" placeholder="Descrição:" value="{{ old('description') }}">
        <input type="file" name="algo">
        <input type="submit" value="Enviar">
    </form>
    
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection