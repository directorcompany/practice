@extends('layouts.main')
@section('title','Профиль')
@section('main')
<div class="sj-addarticleholdcontent">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @else 
 @if(Session::has('error'))
    <div class="alert alert-danger">
      <p>{{ $message = Session::get('error')}} </p>
  </div>
 @endif
     @endif
    <div class="sj-dashboardboxtitle">
        <h2>Изменить Имя </h2>
    </div>
    <div class="sj-acsettingthold">

        <form action="{{route('name')}}" method="POST" class="sj-formtheme sj-formpassword">
             @csrf
            <fieldset>
                <div class="form-group sj-inputwithicon sj-password">
                    <i class="lnr lnr-user"></i>
                    <input type="text" name="name" class="form-control" placeholder="Введите Имя">
                </div>
    
            </fieldset>
        
        <div class="sj-btnarea sj-updatebtns">
            <button type="submit" class="sj-btn sj-btnactive">Изменить</button>
        </div>
    </form>
    </div>
</div>
<div class="sj-addarticleholdcontent">
    <div class="sj-dashboardboxtitle">
        <h2>Изменить E-mail </h2>
    </div>
    <div class="sj-acsettingthold">
        <form action="{{route('email')}}" method="POST" class="sj-formtheme sj-formpassword">
            @csrf
            <fieldset>
                <div class="form-group sj-inputwithicon sj-password">
                    <i class="lnr lnr-envelope"></i>
                    <input type="text" name="email" class="form-control" placeholder="Введите E-mail">
                </div>
     <div class="sj-btnarea sj-updatebtns">
            <button type="submit" class="sj-btn sj-btnactive">Изменить</button>
        </div>
            </fieldset>
        </form>
       
    </div>
</div>
<div class="sj-addarticleholdcontent">
    <div class="sj-dashboardboxtitle">
        <h2>Изменить пароль </h2>
    </div>
    <div class="sj-acsettingthold">
        <form action="{{route('parol')}}" method="POST" class="sj-formtheme sj-formpassword">
            @csrf
            <fieldset>
                <div class="form-group sj-inputwithicon sj-password">
                    <i class="lnr lnr-lock"></i>
                    <input type="pasword" name="pasword" class="form-control" placeholder="Старый пароль">
                </div>
                <div class="form-group sj-inputwithicon sj-password">
                    <i class="lnr lnr-lock"></i>
                    <input type="password" name="password" class="form-control" placeholder="Новый пароль">
                </div>
                <div class="form-group sj-inputwithicon sj-password">
                    <i class="lnr lnr-lock"></i>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Подтверждения нового пароля">
                </div>
               <div class="sj-btnarea sj-updatebtns">
            <button type="submit"  class="sj-btn sj-btnactive">Изменить </button>
               </div>
            </fieldset>
        </form>
        
    </div>
</div>
@endsection