@extends('resume-bank::layout.candidate')
@section('content')
    <div class="row valign-wrapper" style="height: 100vh;">
        <div class="col s12 m6 l4 center offset-m3 offset-l4">
            <h2>Resume Bank</h2>
            <div class="card">
                <form action="{{ route('candidate.verify') }}" method="post">
                    {{ csrf_field() }}
                    <div class="card-content">
                        <span class="card-title">Bem-vindo(a) candidato(a)</span>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="cpf" name="cpf" type="text" placeholder="Informe seu CPF" required class="validate">
                            </div>
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