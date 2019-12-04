@extends('layouts.frontend.index')

@section('content')
<!-- content start -->
    <div class="container-fluid p-0 home-content container-top-border">
        <!-- account block start -->
        <div class="container">
            <nav class="navbar clearfix secondary-nav pt-0 pb-0 login-page-seperator">
                <ul class="list mt-0">
                     <li><a href="{{ route('login') }}" >Login</a></li>
                     <li><a href="{{ route('register') }}" class="active">Registrar-se</a></li>
                </ul>
            </nav>

            <div class="row d-flex justify-content-center">
                {{-- <div class="col-xl-6 col-lg-6 col-md-6 vertical-align d-none d-lg-block">
                    <img class="img-fluid" src="{{ asset('frontend/img/fimg.png') }}" width="500px" height="500px">
                </div> --}}
                <div class="col-xl-6 offset-xl-0 col-lg-6 offset-lg-0 col-md-8 offset-md-2">
                    <div class="rightRegisterForm">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}" id="registerForm">
                        {{ csrf_field() }}
                        <div class="p-4">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label>Nome</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Nome" value="@if(!empty($name)){{ $name }}@else{{ old('first_name') }}@endif" name="first_name"   >
                                        @if ($errors->has('first_name'))
                                        <label class="error" for="first_name">{{ $errors->first('first_name') }}</label>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <label>Sobrenome</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Nome" value="{{ old('last_name') }}" name="last_name">
                                        @if ($errors->has('last_name'))
                                        <label class="error" for="last_name">{{ $errors->first('last_name') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Email" value="@if(!empty($name)){{ $email }}@else{{ old('email') }}@endif" name="email">
                                @if ($errors->has('email'))
                                <label class="error" for="email">{{ $errors->first('email') }}</label>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Senha</label>
                                <input type="password" class="form-control form-control-sm" placeholder="Senha" name="password" id="password">
                                @if ($errors->has('password'))
                                <label class="error" for="password">{{ $errors->first('password') }}</label>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Confirmar senha</label>
                                <input type="password" class="form-control form-control-sm" name="password_confirmation">
                                @if ($errors->has('password_confirmation'))
                                <label class="error" for="password_confirmation">{{ $errors->first('password_confirmation') }}</label>
                                @endif
                            </div>

                            {{-- <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="offer" name="offer" {{ old('offer') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="offer">Receive relevant offers & communications</label>
                                </div>
                            </div> --}}

                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-lg btn-block login-page-button">Registrar</button>
                            </div>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- account block end -->
    </div>
    <!-- content end -->
@endsection

@section('javascript')
<script type="text/javascript">
$(document).ready(function()
{
    $("#registerForm").validate({
            rules: {
                first_name: {
                    required: true
                },
                last_name: {
                    required: true
                },
                email:{
                    required: true,
                    email:true,
                    remote: "{{ url('checkUserEmailExists') }}"
                },
                password:{
                    required: true,
                    minlength: 6
                },
                password_confirmation:{
                    required: true,
                    equalTo: '#password'
                }
            },
            messages: {
                first_name: {
                    required: 'Campo nome inválido.'
                },
                last_name: {
                    required: 'Campo sobrenome inválido.'
                },
                email: {
                    required: 'Campo deve conter um email.',  
                    email: 'Email deve ser válido.',
                    remote: 'Email já cadastrado.'
                },
                password: {
                    required: 'O campo requer uma senha.',
                    minlength: 'A senha deve conter no mínimo 6 caracteres.'
                },
                password_confirmation: {
                    required: 'Campo requer confirmação da senha.',
                    equalTo: 'A senha não combina com a informada.'
                }
            }
        });

});
</script>
@endsection
