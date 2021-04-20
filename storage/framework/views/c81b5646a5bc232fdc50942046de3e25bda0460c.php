
<?php $__env->startSection('title','Админ панель'); ?>
<?php $__env->startSection('main'); ?>
<main id="sj-main" class="sj-main sj-haslayout sj-sectionspace">
		<a class="btn btn-success float-right" style="margin-top: -62px; margin-right: 40px;" href="<?php echo e(route('book.create')); ?>" title="Добавить книгу"> <i class="fas fa-plus-circle"></i></a>

		<?php if($message = Session::get('success')): ?>
		<div class="alert alert-success">
			<p><?php echo e($message); ?></p>
		</div>
		<?php else: ?> 
	 <?php if(Session::has('error')): ?>
		<div class="alert alert-danger">
		  <p><?php echo e($message = Session::get('error')); ?> </p>
	  </div>
	 <?php endif; ?>
		 <?php endif; ?>	
	<div class="container">
		
		<div class="row">
			<div id="sj-twocolumns" class="sj-twocolumns">
		
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 float-left">
					<aside id="sj-asidebar" class="sj-asidebar sj-widgetbox">
						<div class="sj-widgetprofile">
							<div class="sj-widgetcontent">
								<figure>
									<img src="/public/images/thumbnails/img-02.png" alt="image description">
									<a class="sj-btnedite" href="<?php echo e(route('profi')); ?>"><i class="lnr lnr-pencil"></i></a>
								</figure>
								<div class="sj-admininfo">
									<h3><?php echo e(auth()->user()->name); ?> </h3>
									<h4> </h4>
								</div>
							</div>
						</div>
						<div class="sj-widgetdashboard">
							<nav id="sj-dashboardnav" class="sj-dashboardnav">
								<ul>
									<li><a href="<?php echo e(route('book.index')); ?>"><i class="lnr lnr-bullhorn"></i> <span>Новости </span></a></li>
									<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin',App\Models\Post::class)): ?>
									<li><a href="<?php echo e(route('contact')); ?>"><i class="lnr lnr-pencil"></i> <span>Обратная связь </span></a></li>
									<?php endif; ?>
								</ul>
							</nav>
						</div>
					</aside>
				</div>
				<?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					
				
				<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9 float-right">
					<div id="sj-content" class="sj-content">
						<div class="sj-addarticleholdcontent">
							<div class="col-12 col-sm-12 col-md-7 col-lg-4 col-xl-6">
								<div id="sj-content" class="sj-content">
									<div class="sj-articles">
										
										<article class="sj-post sj-editorchoice">
											<figure class="sj-postimg">
												<img src="/public/images/<?php echo e($list->image); ?>" style="width: 210px; height: 200px;" alt="image description">
											</figure>
											<div class="sj-postcontent">
				*								<div class="sj-head">
													<span class="sj-username"><?php echo e($list->fio); ?> </span>
													<h3><?php echo e($list->title); ?> </h3>
												</div>
												<div class="sj-description">
													<p><?php echo e($list->message); ?> </p>
												</div>
											</div>
										</article>
									</div>
								</div>
							</div>
				  	<div class="col-12 col-sm-12 col-md-5 col-lg-8 col-xl-6 my-3 float-right">
						<a href="<?php echo e(route('book.show',$list->id)); ?>" class="" title="Подробно"><i  class="fas fa-eye text-success  fa-lg"></i></a>   
               
						
						<a href="<?php echo e(route('book.edit',$list->id)); ?>" class="" title='Изменить'>
								<i class="fa fa-book fa-lg"></i>
							</a>
                         <i class="fas fa-trash fa-lg text-danger" onclick="document.getElementById('logout').submit();" style="cursor: pointer;" type="submit" title="Удалить"></i>
						  <form action="<?php echo e(route('book.destroy', $list->id)); ?>" id="logout" method="POST">
							     <?php echo csrf_field(); ?>
							     <?php echo method_field('DELETE'); ?>
								 
							   </form>
							  
							   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin',App\Models\Post::class)): ?>
							  <?php if (! ($list->status)): ?>
							  <a href="<?php echo e(route('status',$list->id)); ?>" class="btn btn-primary text-white">Утвердить</a>
							  <?php endif; ?> 		
							   <?php endif; ?>
							 
							   
					    </div>
						</div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
		<?php echo e($lists->links()); ?>

	</div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\practice\resources\views/article_list/index-book.blade.php ENDPATH**/ ?>