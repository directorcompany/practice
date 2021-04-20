	                        <!--************************************
										News Articles Start
								*************************************-->
								<section class="sj-haslayout sj-sectioninnerspace">
									<div class="sj-borderheading">
										<h3>Последние новости </h3>
										<a class="sj-btnview" href="javascript:void(0);"> Больше </a>
									</div>
									
									<div class="sj-newsposts">
										<div id="sj-newsarticlesslider" class="sj-newsarticlesslider sj-newsarticles owl-carousel">
											@foreach ($arrays as $array)
									@if($array->status)
											<div class="item">
										
												<div class="sj-newsarticle">
											
													<figure class="sj-newsimg">
														<img src="/public/images/{{$array->image}}" alt="image description" />
													</figure>
													<div class="sj-newscontent">
														<div class="sj-newshead">
															<time datetime="2018-12-12" class="sj-posttimedate">{{$array->created_at}} </time>
															<h3><a href="javascript:void(0);"> </a></h3>
														</div>
														<div class="sj-description">
																<p>{{$array->message}}  <a href="{{route('book',$array->id)}}">Больше </a></p>
														</div>
													</div>
										
												</div>
											
											</div>
											@endif
									    @endforeach
										</div>
									</div>
										
								</section>
							<!--************************************
								   News Articles End
						   *************************************-->