@extends('layouts.main')
@section('title','Новости')
@section('main')
<main id="sj-main" class="sj-main sj-haslayout sj-sectionspace">

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
	<div class="container">
		
		<div class="row">
			<div id="sj-twocolumns" class="sj-twocolumns">
		
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 float-left">
					<aside id="sj-asidebar" class="sj-asidebar sj-widgetbox">
						<div class="sj-widgetprofile">
							<div class="sj-widgetcontent">
								<figure>
									<img src="/public/images/thumbnails/img-02.png" alt="image description">
									<a class="sj-btnedite" href="{{route('profi')}}"><i class="lnr lnr-pencil"></i></a>
								</figure>
								<div class="sj-admininfo">
									<h3>{{auth()->user()->name}} </h3>
									<h4> </h4>
								</div>
							</div>
						</div>
						<div class="sj-widgetdashboard">
							<nav id="sj-dashboardnav" class="sj-dashboardnav">
								<ul>
										<li><a href="{{route('book.index')}}"><i class="lnr lnr-bullhorn"></i> <span>Новости </span></a></li>
									<li><a href="{{route('contact')}}"><i class="lnr lnr-pencil"></i> <span>Обратная связь </span></a></li>
	
								</ul>
							</nav>
						</div>
					</aside>
				</div>
			
				<div class="col-12 col-sm-12 col-md-5 col-lg-8 col-xl-6 float-left">
				   <table>
					<thead>
						<tr>
				 <td>№</td>
				 <td>Ф.И.О</td>
				 <td>E-mail</td>
				 <td>Тема</td>
				 <td>Сообщение</td>
				 <td>Дата</td>
						</tr>
					</thead>
					@foreach ($inv as $data)
					<tr>
						<td>{{$data->id}}</td>
						<td>{{$data->fio}}</td>
						<td>{{$data->email}}</td>
						<td>{{$data->theme}}</td>
						<td>{{$data->message}}</td>
						<td>{{$data->created_at}}</td>
					</tr>
					@endforeach
				   </table>
				</div>
				</div>
		</div>
		{{$inv->links() }}
	</div>
</main>
@endsection