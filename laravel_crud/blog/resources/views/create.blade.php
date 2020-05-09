@extends('layouts.main')
@section('content')


<div class="container">
    <br>

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
<form class="text-center border border-light p-5" action="{{ route('store') }}" method="post">
{{csrf_field() }}
<p class="h4 mb-4">Atualizar Estudante</p>

<div class="form-row mb-4">
    <div class="col">
        <!-- First name -->
        <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nome" name="nome">
    </div>
    <div class="col">
        <!-- Last name -->
        <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Sobrenome" name="sobrenome">
    </div>
</div>

<!-- E-mail -->
<input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">



<!-- Phone number -->
<input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Telefone" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="telefone">


<!-- Sign up button -->
<button class="btn btn-info my-4 btn-block" type="submit">Sign in</button>


</form>
<!-- Default form register -->
</div>
@endsection
