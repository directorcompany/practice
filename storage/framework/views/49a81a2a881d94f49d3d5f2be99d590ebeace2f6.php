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
											<?php $__currentLoopData = $arrays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $array): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($array->status): ?>
											<div class="item">
										
												<div class="sj-newsarticle">
											
													<figure class="sj-newsimg">
														<img src="/public/images/<?php echo e($array->image); ?>" alt="image description" />
													</figure>
													<div class="sj-newscontent">
														<div class="sj-newshead">
															<time datetime="2018-12-12" class="sj-posttimedate"><?php echo e($array->created_at); ?> </time>
															<h3><a href="javascript:void(0);"> </a></h3>
														</div>
														<div class="sj-description">
																<p><?php echo e($array->message); ?>  <a href="<?php echo e(route('book',$array->id)); ?>">Больше </a></p>
														</div>
													</div>
										
												</div>
											
											</div>
											<?php endif; ?>
									    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</div>
									</div>
										
								</section>
							<!--************************************
								   News Articles End
						   *************************************--><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\practice\resources\views/home/article.blade.php ENDPATH**/ ?>