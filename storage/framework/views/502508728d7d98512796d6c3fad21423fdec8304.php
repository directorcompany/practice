<div class="sj-innerbanner">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				<div class="sj-innerbannercontent">
					<h1>Новости </h1>
					
				</div>
			</div>
		</div>
	</div>
</div>
<main id="sj-main" class="sj-main sj-haslayout sj-sectionspace">
	<div id="sj-twocolumns" class="sj-twocolumns">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
					<aside id="sj-sidebarvtwo" class="sj-sidebar">
						<div class="sj-widget sj-widgetsearch">
							<div class="sj-widgetcontent">
								<form class="sj-formtheme sj-formsearch">
								
								</form>
							</div>
						</div>
					</aside>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div id="sj-content" class="sj-content">
						<span class="sj-showitems">Показано  <em>1 </em> to  <em>20 </em> of  <em>153 </em> Articles </span>
						<div class="sj-uploadarticle">
							<figure class="sj-uploadarticleimg">
								<img src="/public//images/upload-articlebg.jpg" alt="image description">
								<figcaption>
									<div class="sj-uploadcontent">
										
										<h3>Все новости </h3>
										
									</div>
								</figcaption>
							</figure>
						</div>
						<div class="sj-articles">
							<form action="<?php echo e(route('search')); ?>" method="get" class="my-2">						
											<select name="year">
												<option>2016</option> 
												<option>2017</option>
												<option>2018</option>
								                <option>2019</option>
												<option>2020</option>
												<option>2021</option>
											</select>
								
											<select name="month">
										    <option value="1">Январь</option>
											<option value="2">Февраль</option>
											<option value="3">Март</option>
											<option value="4">Апрель</option>
											<option value="5">Май</option>
											<option value="6">Июнь</option>
											<option value="7">Июль</option>
											<option value="8">Август</option>
											<option value="9">Сентябрь</option>
											<option value="10">Октябрь</option>
											<option value="11">Ноябрь</option>
											<option value="12">Декабрь</option>
											</select>
											<select name="order">
											<option value="asc">Возрастания</option> 
											<option value="desc">Убывания</option>
										  </select>		
										 <input type="submit" value="Поиск" class="btn btn-info">		
							</form>
							<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>		
							<article class="sj-post sj-editorchoice">
								<figure class="sj-postimg">
									<img src="/public/images/<?php echo e($post->image); ?>" alt="image description">
								</figure>
								<div class="sj-postcontent">
									<div class="sj-head">
										<span class="sj-username"><?php echo e($post->fio); ?></span>
										<h3><?php echo e($post->title); ?></h3>
									</div>
									<div class="sj-description">
										<p><?php echo e($post->description); ?></p>
									</div>
									<a class="sj-btn" href="<?php echo e(route('desc',$post->id)); ?>">Описания </a>
								</div>
							</article>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>
</main><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\practice\resources\views/article/main.blade.php ENDPATH**/ ?>