@extends('layouts.main_layout')



@section('content')


    <div class="login-container">
        <h2>Entrar na Conta</h2>
        <form class="login-form" action="/seu-endpoint-de-login" method="POST">

            <div class="input-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required placeholder="seu.email@exemplo.com">
            </div>

            <div class="input-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required placeholder="Digite sua senha">
            </div>

            <button type="submit" class="login-button">Entrar</button>
        </form>

        <div class="signup-option">
            <p>Novo por aqui? <a href="/sua-pagina-de-cadastro">**Cadastre-se**</a></p>
        </div>
    </div>

@endsection


