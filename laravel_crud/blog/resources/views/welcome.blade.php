@extends('layouts.main')
@section('content')

    <h1>PAGINA INICIAL</h1>

    @if(session('successMsg'))
    <div class="alert alert-success" role="alert">
  {{session('successMsg')}}
<script type="text/javascript">
    window.setTimeout(function(){
        $('.alert').remove();
    }, 5000)
</script>

</div>
    @endif

    @php
        $i = 1;

        $currentpage = $estudantes->currentPage();
        $perpage = $estudantes->perPage();

        $i= $perpage*($currentpage-1)+1;

    @endphp

    <div class='container'>
    <table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">nome</th>
      <th scope="col">sobrenome</th>
      <th scope="col">email</th>
      <th scope="col">telefone</th>
      <th scope="col">ação</th>
    </tr>
  </thead>
  <tbody>

  @foreach($estudantes as $e)
    <tr>
      <th scope="row">{{$i}}</th>
      <td>{{$e->nome}}</td>
      <td>{{$e->sobrenome}}</td>
      <td>{{$e->email}}</td>
      <td>{{$e->telefone}}</td>
      <td>
      <a href="{{route('edit',$e->id)}}">
        <i class="fas fa-edit">Editar</i>
</a>
<a href="">
        <i class="fas fa-edit">Deletar</i>
</a>

</td>
    </tr>

    @php
        $i=$i+1;
    @endphp

    @endforeach
  </tbody>
</table>
        <div class="d-flex justify-content-center">
            {{$estudantes->links()}}

</dib>
</div>


@endsection
