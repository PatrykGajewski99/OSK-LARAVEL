@extends('layouts.app')

@section('content')

<div class="container" >
    <link href="css/style2.css" rel="stylesheet">

        <div class="col-md-7 dataeditorimg">

            <!-- Miejsce na wyświtlenie użytkowników -->
            <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Zarejestrowani użytkownicy </h4>
                              <thead>
                              <tr>
                                  <th>ID.</th>
                                  <th>Uprawnienie.</th>
                                  <th>Imię.</th>
                                  <th>Nazwisko.</th>
                                  <th>E-mail.</th>
                                  <th>Telefon kontaktowy.</th>
                                  <th>Data utworzenia konta.</th>
                              </thead>
                              <tbody>
                              @foreach ($dane_wyswietl as $dane)
                              <tr>
                              <td>{{ $dane->id}}</td>
                              <td>{{ $dane->privilege}}</td>
                              <td>{{ $dane->firstName}}</td>
                              <td>{{ $dane->lastName}}</td>
                              <td>{{ $dane->email}}</td>
                              <td>{{ $dane->phone}}</td>
                              <td>{{ $dane->created_at}}</td>
                              <td>
                              <a href="{{route('edit.user',$dane->id)}}" class="btn btn-info btn-round-full">Edytuj</a>
                                </td>
                                <td>
                                <a href="{{route('delete_user',$dane->id)}}" class="btn btn-danger show_confirm">Usuń</a>
                              <td>
                            </td>
                              </tr>
                            @endforeach     
                              </tbody>
                          </table>
                      </div>
                  </div>          
    </div>
</div>

@endsection