@extends('resume-bank::layout.candidate')
@section('content')
    <div class="row valign-wrapper" style="height: 100vh;">
        <div class="col s12 m8 l6 offset-m2 offset-l3">
            <h3>1. Dados:</h3>
            <div class="card">
                <form action="{{ route('candidate.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="card-content">
                        <div class="row">
                            <div class="input-field col s12">
                                <label for="cpf">Informe seu CPF:</label>
                                <input id="cpf" name="cpf" type="text" required value="{{ $cpf }}">
                            </div>
                            <div class="input-field col s12">
                                <label for="name">Seu nome:</label>
                                <input id="name" name="name" type="text" required>
                            </div>
                            <div class="input-field col s12">
                                <label for="email">E-mail válido:</label>
                                <input id="email" name="email" type="email" required>
                            </div>
                            <div class="input-field col s6">
                                <label for="pass">Escolha uma senha:</label>
                                <input id="pass" name="password" type="password" required>
                            </div>
                            <div class="input-field col s6">
                                <label for="pass2">Repita a senha:</label>
                                <input id="pass2" name="pass2" type="password" required>
                            </div>
                        </div>
                        <div class="row">

                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn" type="submit">Prosseguir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection