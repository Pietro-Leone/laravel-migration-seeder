@extends("layouts.public")
@section("title" , "Home | Treni")

@section("content")
  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Azienda</th>
              <th scope="col">Partenza</th>
              <th scope="col">Arrivo</th>
              <th scope="col">Data</th>
              <th scope="col">Orario Partenza</th>
              <th scope="col">Orario Arrivo</th>
              <th scope="col">Codice</th>
              <th scope="col">N carrozze</th>
              <th scope="col">In Orario</th>
              <th scope="col">Soppresso</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($trains as $train)
            <tr>
              <td>{{$train["azienda"]}}</td>
              <td>{{$train["stazione_di_partenza"]}}</td>
              <td>{{$train["stazione_di_arrivo"]}}</td>
              <td>{{$train["data"]}}</td>
              <td>{{$train["orario_di_partenza"]}}</td>
              <td>{{$train["orario_di_arrivo"]}}</td>
              <td>{{$train["codice_treno"]}}</td>
              <td>{{$train["numero_carrozze"]}}</td>
              <td>{{$train["in_orario"] === 0 ? "no" : "si"}}</td>
              <td>{{$train["cancellato"] === 0 ? "no" : "si"}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection