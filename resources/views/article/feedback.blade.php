@extends('layouts.main')
@section('title','Новости')
@section('main')
<main id="sj-main" class="sj-main sj-haslayout sj-sectionspace" style="margin-top: -70px;">
	<div id="sj-twocolumns" class="sj-twocolumns">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div id="sj-content" class="sj-content">
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
						<div class="sj-leaveyourcomment">
							
							<div class="sj-borderheading">
								<h3>Отправить  Сообщения Админ сайта </h3>
							</div>
							<form method="POST" action="{{route('inv')}}" class="sj-formtheme sj-formleavecomment">
								@csrf
								<fieldset>
									<div class="row">
										<div class="col-12 col-sm-12 col-md-4 col-lg-4">
											<div class="form-group">
												<input type="text" name="fio" required class="form-control" placeholder="Ф.И.О">
											</div>
										</div>
										<div class="col-12 col-sm-12 col-md-4 col-lg-4">
											<div class="form-group">
												<input type="email" name="email" required class="form-control" placeholder="Email">
											</div>
										</div>
										<div class="col-12 col-sm-12 col-md-4 col-lg-4">
											<div class="form-group">
												<input type="text" name="theme" required  class="form-control" placeholder="Тема">
											</div>
										</div>
										
										<div class="col-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<textarea id="editor" required class="ckeditor" name="msg"  placeholder="Сообщения"></textarea>
											</div>
										</div>
										<div class="col-12 col-sm-12 col-md-4 col-lg-4">
											<button type="submit" class="sj-btn sj-btnactive"> Подвердить   </button>
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