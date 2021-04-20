@extends('layouts.main')
@section('title','Новости')
@section('main')

<main id="sj-main" class="sj-main sj-haslayout sj-sectionspace">
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
										<li><a href="{{route('book.index')}}"><i class="lnr lnr-bullhor"></i> <span>Новости </span></a></li>
										@can('admin',App\Models\Post::class)
										<li><a href="{{route('contact')}}"><i class="lnr lnr-pencil"></i> <span>Обратная связь </span></a></li>
										@endcan
								</ul>
							</nav>
						</div>
					</aside>
				</div>
			
				<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9 float-right">
					<div id="sj-content" class="sj-content">
				@if ($message = Session::get('success'))
				<div class="alert alert-success">
					<p>{{ $message }}</p>
				</div>
		     	@else 
			    	@if($message = Session::get('error'))
				<div class="alert alert-danger">
				  <p>{{ $message}} </p>
			  </div>
				    @endif
			    @endif
						<div class="sj-addarticleholdcontent">
							<div class="sj-dashboardboxtitle">
								<h2> Редактирование </h2>
							</div>
							<form method="POST" action="{{route('book.update',request()->book)}}" enctype="multipart/form-data" class="sj-formtheme sj-formaddtemplates">
								@csrf
								@method('PUT')
								<fieldset>
									<div class="form-inline">
									<label class="mr-3"><strong>	Ф.И.О  </strong></label>  
										<input type="text" name="fio" value="{{$book->fio}}"  class="form-control col-10" required placeholder="Ф.И.О">
									</div>
									<div class="form-inline my-4">
										<label class="mr-4"><strong>Тема </strong></label>
										<input type="text" name="theme" value="{{$book->theme}}" class="form-control col-10" required placeholder="Тема">
									</div>
									<div class="form-group">
								  
									<textarea class="ckeditor mr-3" placeholder="Описание новости" name="message" required id="editor">{{$book->message}}</textarea>
									</div>	
								
									<div class="form-group">
										<input type="file" name="image" class="form-control"  required  placeholder="Файла нет">
									</div>												
									<div class="form-group">
										<button class="sj-btn sj-btnactive">Сохранить </button>
									
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection