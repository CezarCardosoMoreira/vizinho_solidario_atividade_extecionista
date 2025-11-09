@extends('layouts.main_layout')


@section('title', 'Cadastro')
@section('content')
    <div class="signup-container">
        <h2>Criar Conta</h2>
        <form class="signup-form" action="/loginSubmit" method="POST">
            @csrf
            <div class="input-group">
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" required
                       placeholder="Seu nome e sobrenome" value="{{ old('nome') }} ">
                {{-- show error --}}
                @error('nome')
                    <div class="alert-danger">{{ $message }}</div>

                @enderror
            </div>

            <div class="input-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required
                       placeholder="seu.email@exemplo.com" value="{{ old('email') }} ">
                       {{-- show error --}}
                @error('email')
                    <div class="alert-danger">{{ $message }}</div>

                @enderror
            </div>

            <div class="input-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required minlength="8"
                       placeholder="Mínimo 8 caracteres">
                {{-- show error --}}
                @error('senha')
                    <div class="alert-danger">{{ $message }}</div>

                @enderror
            </div>

            <button type="submit" class="signup-button">Cadastrar</button>
        </form>

        <div class="login-option">
            <p>Já tem uma conta? <a href="/login">**Fazer Login**</a></p>
        </div>
    </div>
@endsection

