@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 100px;">

  <div class="container" >
    <div class="row" >
      <div class="col-sm-12">
          <h3>Editais</h3> 
      </div>
      
    </div>
  </div>
  <hr>
    <table class="table table-bordered">
      <thead>
        <tr>   
          <th scope="col">Nome do Edital</th>
          {{-- <th scope="col">Status</th> --}}
          <th scope="col">Data de Criação</th>
          <th scope="col">Baixar edital</th>
          <th scope="col">Opção</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($eventos as $evento)
          <tr>
            <td>
              <a href="{{  route('evento.visualizar',['id'=>$evento->id])  }}" class="visualizarEvento">
                  {{ $evento->nome }}
              </a>
            </td>
            {{-- <td></td> --}}
            <td>{{ $evento->created_at }}</td>
            <td style="text-align: center">
              <a href="{{ route('baixar.edital', ['id' => $evento->id]) }}">
                <img src="{{asset('img/icons/file-download-solid.svg')}}" width="15px">
              </a>
            </td>
            <td>
              <div class="btn-group dropright dropdown-options">
                  <a id="options" class="dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="{{asset('img/icons/ellipsis-v-solid.svg')}}" style="width:8px"> 
                  </a>
                  <div class="dropdown-menu">
                      <a href="{{ route('participante.edital', ['id' => $evento->id]) }}" class="dropdown-item" style="text-align: center">
                        Projetos vinculados
                      </a>
                      {{-- <a href="" class="dropdown-item" style="text-align: center">
                        Visualizar resultado
                      </a> --}}
                      {{-- 
                      <a href="" class="dropdown-item" style="text-align: center">
                        Resultado preeliminar
                      </a>
                      <a href="" class="dropdown-item" style="text-align: center">
                        Resultado final
                      </a> --}}
                  </div>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

</div>

@endsection

@section('javascript')
<script>
  
</script>
@endsection
