<!--************************************
										Up Coming Books Start
								*************************************-->
								<section class="sj-haslayout sj-sectioninnerspace">
									<div class="sj-borderheading">
										<h3>Скоро Выйдет </h3>
										<a class="sj-btnview" href="javascript:void(0);">Больше</a>
									</div>
									<div id="sj-upcomingbooksslider" class="sj-upcomingbooksslider sj-upcomingbooks owl-carousel">
										@foreach($books as $book)
										<div class="item">
											<div class="sj-upcomingbook">
												<figure class="sj-upcomingbookimg">
													<img src="/public/images/{{$book->image}}" alt="image description" />
												</figure>
												<div class="sj-postcontent">
													<h3><a href="{{route('book',$book->id)}}">{{$book->theme}} </a></h3>
												</div>
											</div>
										</div>
										@endforeach
									</div>
								</section>
							<!--************************************
								   Up Coming Books End
						   *************************************-->