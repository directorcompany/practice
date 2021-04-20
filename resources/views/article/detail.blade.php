@extends('layouts.main')
@section('title','Новости')
@section('main')
<div class="sj-innerbanner">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				<div class="sj-innerbannercontent">
					<h1>Подробно </h1>
					<ol class="sj-breadcrumb">
					
						<li><a href="javascript:void(0);">News </a></li>
					</ol>
				</div>
			</div>
		</div>
	
	</div>
</div>
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
<main id="sj-main" class="sj-main sj-haslayout sj-sectionspace">
	<div id="sj-twocolumns" class="sj-twocolumns">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div id="sj-content" class="sj-content">
						<div class="sj-newsdetail">
							<div class="sj-head">
								<span class="sj-username"><a href="javascript:void(0);">{{$list->fio}} </a></span>
								<h3>{{$list->title}}</h3>
							</div>
								<img src="/public/images/{{$list->image}}" style="width: 400px; height: 400px;" alt="image description">

							<div class="sj-tagssocialshare">
							
								<ul class="sj-socialiconssimple">
									<li class="sj-facebook"><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
									<li class="sj-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
									<li class="sj-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="sj-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a></li>
									<li class="sj-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
							<div class="sj-description">
								<p>{{$list->message}}</p>
							</div>
						</div>
						@foreach($detail as $coment)
						<div class="sj-author">
							<figure class="sj-authorimg">
								<img src="/public/images/users-img/img-01.jpg" alt="image description">
							</figure>
							<div class="sj-authorcontent">
								<div class="sj-authorhead">
									<div class="sj-leftarea">
										<div class="sj-authorname">
											<h3> {{$coment->fio}}</h3>
											<span>{{$coment->theme}} </span>
										</div>
									</div>
									
								</div>
								<div class="sj-description">
									<p>{{$coment->comment}}</p>
								</div>
							</div>
						</div>
						@endforeach
						<div class="sj-leaveyourcomment">
							<div class="sj-borderheading">
								<h3>Оставить комментарий </h3>
							</div>
							<form method="POST" action="{{route('comment')}}" class="sj-formtheme sj-formleavecomment">
								@csrf
								<fieldset>
									<div class="row">
										<div class="col-12 col-sm-12 col-md-4 col-lg-4">
											<div class="form-group">
												<input type="text" name="fio" class="form-control" placeholder="Имя"  required>
											</div>
										</div>
										<div class="col-12 col-sm-12 col-md-4 col-lg-4">
											<div class="form-group">
												<input type="email" name="email"   class="form-control" placeholder="Email" required>
											</div>
										</div>
										<div class="col-12 col-sm-12 col-md-4 col-lg-4">
											<div class="form-group">
												<input type="text" name="title" class="form-control" placeholder="Тема" required>
											</div>
										</div>
										<input type="text" name="book_id" value="{{$list->id}}" style="display: none;">
										<div class="col-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<textarea name="comment" placeholder="Комментарий" required></textarea>
											</div>
										</div>
										<div class="col-12 col-sm-12 col-md-4 col-lg-4">
											<button type="submit" class="sj-btn sj-btnactive">Подтвердить </button>
										</div>
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