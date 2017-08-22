@extends('resume-bank::layout.candidate')
@section('content')
    <div class="row valign-wrapper">
        <div class="col s12 m8 l6 offset-m2 offset-l3">
            <form action="{{ route('candidate.resume.store') }}" method="post">
                {{ csrf_field() }}

                <div class="card">
                    <div class="card-content">
                        <span class="card-title">1. Endereço</span>
                        <div class="row">
                            <div class="input-field col s12 m4">
                                <label>CEP:</label>
                                <input name="cep" class="cep" type="text" required/>
                            </div>
                            <div class="input-field col s12 m8">
                                <label>Logradouro:</label>
                                <input name="pub_place" type="text" required/>
                            </div>
                            <div class="input-field col s12 m3">
                                <label>Número:</label>
                                <input name="number" type="text" required/>
                            </div>
                            <div class="input-field col s12 m9">
                                <label>Complemento:</label>
                                <input name="complement" type="text"/>
                            </div>
                            <div class="input-field col s12 m4">
                                <label>Bairro:</label>
                                <input name="neighborhood" type="text" required/>
                            </div>
                            <div class="input-field col s12 m4">
                                <label>Estado:</label>
                                <input name="estate" type="text" required/>
                            </div>
                            <div class="input-field col s12 m4">
                                <label>Cidade:</label>
                                <input name="city" type="text" required/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <span class="card-title">2. Informações Pessoais</span>
                        <div class="row">
                            <div class="input-field col s12 m4">
                                <label>RG:</label>
                                <input name="rg" type="text" required/>
                            </div>
                            <div class="input-field col s12 m4">
                                <label>Órgão Expeditor:</label>
                                <input name="rg_org_exp" type="text" required/>
                            </div>
                            <div class="input-field col s12 m4">
                                <label>Data Expedição:</label>
                                <input name="rg_date_exp" class="date" type="text" required/>
                            </div>
                            <div class="input-field col s12 m12">
                                <label>Nome da Mãe:</label>
                                <input name="mother" type="text" required/>
                            </div>
                            <div class="input-field col s12 m12">
                                <label>Nome do Pai:</label>
                                <input name="father" type="text"/>
                            </div>
                            <div class="input-field col s12 m4">
                                <label>Data de Nascimento:</label>
                                <input name="birth" class="date" type="text" required/>
                            </div>
                            <div class="input-field col s12 m4">
                                <select name="genre">
                                    <option value="" disabled selected>Sexo</option>
                                    <option value="">Não informar</option>
                                    <option value="male">Masculino</option>
                                    <option value="female">Feminino</option>
                                </select>
                            </div>
                            <div class="input-field col s12 m4">
                                <select name="marital_status" required>
                                    <option value="" disabled selected>Estado Civil</option>
                                    <option value="Solteiro(a)">Solteiro(a)</option>
                                    <option value="Casado(a)">Casado(a)</option>
                                    <option value="Divorciado(a)">Divorciado(a)</option>
                                    <option value="Viúvo(a)">Viúvo(a)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content educations">
                        <span class="card-title">
                            3. Formação Acadêmica
                        </span>
                        <a title="Adicionar item" class="btn-floating right waves-effect waves-light green"><i class="material-icons">add</i></a>
                        <div class="row education-item">
                            <div class="input-field col s12 m12">
                                <label>Curso:</label>
                                <input name="course[]" type="text" required>
                                <a href="#" class="red-text"> Remover Item</a>

                            </div>
                            <div class="input-field col s12 m12">
                                <select name="level[]">
                                    <option value="" disabled selected>Nível</option>
                                    <option value="Fundamental">Fundamental</option>
                                    <option value="Técnico">Técnico</option>
                                    <option value="Médio">Médio</option>
                                    <option value="Superior">Superior</option>
                                    <option value="Especialização">Especialização</option>
                                </select>
                            </div>
                            <div class="input-field col s12 m6">
                                <label>Início:</label>
                                <input name="start[]" class="date-custom" placeholder="mm/aaaa" type="text" required>
                            </div>
                            <div class="input-field col s12 m6">
                                <label>Término:</label>
                                <input name="finish[]" class="date-custom" placeholder="mm/aaaa" type="text">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content educations">
                        <span class="card-title">
                            4. Experiência Profissional
                        </span>
                        <a title="Adicionar item" class="btn-floating right waves-effect waves-light green"><i class="material-icons">add</i></a>
                        <div class="row education-item">
                            <div class="input-field col s12 m12">
                                <label>Empresa:</label>
                                <input name="company[]" type="text" required>
                                <a href="#" class="red-text"> Remover Item</a>
                            </div>
                            <div class="input-field col s12 m12">
                                <label>Cargo:</label>
                                <input name="position[]" type="text" required>
                            </div>
                            <div class="input-field col s12 m6">
                                <label>Início:</label>
                                <input name="start[]" class="date-custom" placeholder="mm/aaaa" type="text" required>
                            </div>
                            <div class="input-field col s12 m6">
                                <label>Término:</label>
                                <input name="finish[]" class="date-custom" placeholder="mm/aaaa" type="text">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content educations">
                        <span class="card-title">
                            5. Contatos
                        </span>
                        <a title="Adicionar item" class="btn-floating right waves-effect waves-light green"><i class="material-icons">add</i></a>
                        <div class="row education-item">

                            <div class="input-field col s12 m12">
                                <select name="type[]">
                                    <option value="" disabled selected>Tipo</option>
                                    <option value="phone">Telefone</option>
                                    <option value="cell">Celular</option>
                                    <option value="email">E-mail</option>
                                </select>
                            </div>

                            <div class="input-field col s12 m12">
                                <label>Contato:</label>
                                <input name="value[]" type="text" required>
                                <a href="#" class="red-text"> Remover Item</a>
                            </div>

                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.date').mask('00/00/0000');
            $('.cep').mask('00000-000');
            $('.date-custom').mask('00/0000');
            $('select').material_select();
        });

        function addNewEducationItem() {
            var item = $('.education-item').clone();
            $('.educations').append(item);
        }
    </script>
@endsection