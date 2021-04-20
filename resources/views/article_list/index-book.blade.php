@extends('layouts.main')
@section('title','Админ панель')
@section('main')
<main id="sj-main" class="sj-main sj-haslayout sj-sectionspace">
		<a class="btn btn-success float-right" style="margin-top: -62px; margin-right: 40px;" href="{{route('book.create')}}" title="Добавить книгу"> <i class="fas fa-plus-circle"></i></a>

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
									@can('admin',App\Models\Post::class)
									<li><a href="{{route('contact')}}"><i class="lnr lnr-pencil"></i> <span>Обратная связь </span></a></li>
									@endcan
								</ul>
							</nav>
						</div>
					</aside>
				</div>
				@foreach ($lists as $list)
					
				
				<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9 float-right">
					<div id="sj-content" class="sj-content">
						<div class="sj-addarticleholdcontent">
							<div class="col-12 col-sm-12 col-md-7 col-lg-4 col-xl-6">
								<div id="sj-content" class="sj-content">
									<div class="sj-articles">
										
										<article class="sj-post sj-editorchoice">
											<figure class="sj-postimg">
												<img src="/public/images/{{$list->image}}" style="width: 210px; height: 200px;" alt="image description">
											</figure>
											<div class="sj-postcontent">
				*								<div class="sj-head">
													<span class="sj-username">{{$list->fio}} </span>
													<h3>{{$list->title}} </h3>
												</div>
												<div class="sj-description">
													<p>{{$list->message}} </p>
												</div>
											</div>
										</article>
									</div>
								</div>
							</div>
				  	<div class="col-12 col-sm-12 col-md-5 col-lg-8 col-xl-6 my-3 float-right">
						<a href="{{route('book.show',$list->id)}}" class="" title="Подробно"><i  class="fas fa-eye text-success  fa-lg"></i></a>   
               
						
						<a href="{{route('book.edit',$list->id)}}" class="" title='Изменить'>
								<i class="fa fa-book fa-lg"></i>
							</a>
                         <i class="fas fa-trash fa-lg text-danger" onclick="document.getElementById('logout').submit();" style="cursor: pointer;" type="submit" title="Удалить"></i>
						  <form action="{{ route('book.destroy', $list->id) }}" id="logout" method="POST">
							     @csrf
							     @method('DELETE')
								 
							   </form>
							  
							   @can('admin',App\Models\Post::class)
							  @unless($list->status)
							  <a href="{{route('status',$list->id)}}" class="btn btn-primary text-white">Утвердить</a>
							  @endunless 		
							   @endcan
							 
							   
					    </div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		{{$lists->links() }}
	</div>
</main>
@endsection