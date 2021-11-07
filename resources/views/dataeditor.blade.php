@extends('layouts.app')

@section('content')


<div class="container" >
    <div class="row justify-content-center passwordF">
        
        <div class="col-md-5">

            <!-- <div class="about-item-img dataeditorimg">
					<img src="images/bg/dataeditor.jpg" alt="ZdjecieDoEdycjiDanych" class="img-fluid">
			</div>

            <div class="about-item-img dataeditorimg">
					<img src="images/bg/dataeditor2.png" alt="ZdjecieDoEdycjiDanych2" class="img-fluid">
			</div> -->
            <div class="dataeditorText">
                <h6><p>Edytuj dane użytkownika:</p> </h6>
            </div>
        
            <form role="form" method="post" action="{{route('update_user',$row->id)}}" >
            {{ csrf_field() }}
            <div class="form-group">
                <label for="actualdata" class="col-sm-4 control-label">Imię:</label>
                <div class="col-sm-10">
                <input type="text" name = "firstName" id="firstName" class="form-control" required value="{{$row->firstName}}" placeholder="Edytuj imię">
                @error('firstName')
                <div class="invalid-feedback">
                <strong>{{$message}}</strong>
                </div>
                @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="actualdata" class="col-sm-4 control-label">Drugie imię:</label>
                <div class="col-sm-10">
                <input type="text" name = "secondName" id="secondName" class="form-control" value="{{$row->secondName}}"placeholder="Edytuj drugie imię">
                </div>
            </div>

            <div class="form-group">
                <label for="actualdata" class="col-sm-4 control-label">Nazwisko:</label>
                <div class="col-sm-10">
                <input type="text" name = "lastName" id="lastName" class="form-control" required value="{{$row->lastName}}" placeholder="Edytuj nazwisko">
                </div>
            </div>

            <div class="form-group">
                <label for="actualdata" class="col-sm-4 control-label">Województwo:</label>
                <div class="col-sm-10">
                <input type="text" name = "province" id="province" class="form-control" value="{{$row->province}}" required placeholder="Edytuj Województwo">
                </div>
            </div>

            <div class="form-group">
                <label for="actualdata" class="col-sm-4 control-label">Miasto:</label>
                <div class="col-sm-10">
                <input type="text" name = "town" id="town" class="form-control" value="{{$row->town}}" required placeholder="Edytuj miasto">
                </div>
            </div>

            <div class="form-group">
                <label for="actualdata" class="col-sm-4 control-label">Ulica:</label>
                <div class="col-sm-10">
                <input type="text" name = "street" id="street" class="form-control" value="{{$row->street}}" required placeholder="Edytuj ulicę">
                </div>
            </div>
            
            <div class="form-group">
                <label for="actualdata" class="col-sm-4 control-label">Numer domu:</label>
                <div class="col-sm-10">
                <input type="text" name = "houseNumber" id="houseNumber" class="form-control" value="{{$row->houseNumber}}" required placeholder="Edytuj numer domu">
                </div>
            </div>
            

        </div>
        
        <div class="col-md-5">
        <div class="form-group">
                <label for="actualdata" class="col-sm-4 control-label">Numer mieszkania:</label>
                <div class="col-sm-10">
                <input type="text" name = "flatNumber" id="flatNumber" class="form-control" value="{{$row->flatNumber}}" placeholder="Edytuj numer mieszkania">
                </div>
            </div>

            <div class="form-group">
                <label for="actualdata" class="col-sm-4 control-label">Kod pocztowy:</label>
                <div class="col-sm-10">
                <input type="text" name = "postCode" id="postCode" class="form-control" value="{{$row->postCode}}" required placeholder="__-___">
                </div>
            </div>

            <div class="form-group">
                <label for="actualdata" class="col-sm-4 control-label">Email:</label>
                <div class="col-sm-10">
                <input type="email" name = "email" id="email" class="form-control" required value="{{$row->email}}" placeholder="Edytuj adres email">
                </div>
            </div>
    
            <div class="form-group">
                <label for="actualdata" class="col-sm-4 control-label">Telefon:</label>
                <div class="col-sm-10">
                <input type="text" name = "phone" id="phone" class="form-control" required value="{{$row->phone}}" placeholder="Edytuj numer telefonu">
                </div>
            </div>

            <div class="form-group">
                <label for="actualdata" class="col-sm-4 control-label">PESEL:</label>
                <div class="col-sm-10">
                <input type="text" name = "pesel" id="pesel" class="form-control" required value="{{$row->pesel}}" placeholder="Edytuj pesel">
                </div>
            </div>

            <div class="form-group">
                <label for="actualdata" class="col-sm-4 control-label">Numer PKK:</label>
                <div class="col-sm-10">
                <input type="text" name = "pkkNumber" id="pkkNumber" class="form-control" value="{{$row->pkkNumber}}" placeholder="Edytuj numer PKK">
                </div>
            </div>
            <div class="form-group">
                <label for="actualdata" class="col-sm-4 control-label">Numer licencji:</label>
                <div class="col-sm-10">
                <input type="text" name = "licenceNumber" id="licenceNumber" class="form-control" value="{{$row->licenceNumber}}" placeholder="Edytuj numer licencji">
                </div>
            </div>

            <div class="form-group col-lg-5">
                <button type="submit" class="btn btn-secondary ">Aktualizuj</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection