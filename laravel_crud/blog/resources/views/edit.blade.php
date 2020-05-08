@extends('layouts.main')
@section('content')


<div class="container">
    <h1>Inserção</h1>

    @if ($errors->any())
        @foreach($errors->all() as $errors)
            <div class="alert alert-danger" role="alert">
             {{$errors}}
            </div>
        @endforeach
        <script type="text/javascript">
    window.setTimeout(function(){
        $('.alert').remove();
    }, 5000)
</script>
    @endif

    <!-- Default form register -->
<form class="text-center border border-light p-5" action="{{ route('update',$e->id) }}" method="post">
{{csrf_field() }}
<p class="h4 mb-4">Cadastro do Estudante</p>

<div class="form-row mb-4">
    <div class="col">
        <!-- First name -->
        <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nome" value="{{$e->nome}}" name="nome">
    </div>
    <div class="col">
        <!-- Last name -->
        <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Sobrenome" value="{{$e->sobrenome}}" name="sobrenome">
    </div>
</div>

<!-- E-mail -->
<input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" value="{{$e->email}}" name="email">



<!-- Phone number -->
<input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Telefone" aria-describedby="defaultRegisterFormPhoneHelpBlock" value="{{$e->telefone}}" name="telefone">


<!-- Sign up button -->
<button class="btn btn-info my-4 btn-block" type="submit">Atualizar </button>


</form>
<!-- Default form register -->
</div>
@endsection
