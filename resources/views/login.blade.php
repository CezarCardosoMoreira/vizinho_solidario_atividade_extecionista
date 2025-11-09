@extends('layouts.main_layout')


@section('title', 'Login')
@section('content')

    <div class="login-container">
        <h2>Entrar na Conta</h2>
        <form class="login-form" action="/loginSubmit" method="POST" >
            @csrf
            <div class="input-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required  placeholder="seu.email@exemplo.com" value="{{ old('email') }} ">

                {{-- show error --}}
                @error('email')
                    <div class="alert-danger">{{ $message }}</div>

                @enderror
            </div>

            <div class="input-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required placeholder="Digite sua senha" >
                @error('senha')
                    <div class="alert-danger">{{ $message }}</div>

                @enderror
            </div>

            <button type="submit" class="login-button">Entrar</button>
        </form>

        <div class="signup-option">
            <p>Novo por aqui? <a href="/cadastro">**Cadastre-se**</a></p>
        </div>
        <div>Vizinho Solidario  &copy;</div>
        {{-- Mensagem de erro --}}


    </div>



>

@endsection
