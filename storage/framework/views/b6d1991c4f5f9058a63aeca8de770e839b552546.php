
<?php $__env->startSection('title','Новости'); ?>
<?php $__env->startSection('main'); ?>
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
	<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
<?php else: ?> 
    <?php if($message = Session::get('error')): ?>
    <div class="alert alert-danger">
      <p><?php echo e($message); ?> </p>
  </div>
     <?php endif; ?>
<?php endif; ?>
<main id="sj-main" class="sj-main sj-haslayout sj-sectionspace">
	<div id="sj-twocolumns" class="sj-twocolumns">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div id="sj-content" class="sj-content">
						<div class="sj-newsdetail">
							<div class="sj-head">
								<span class="sj-username"><a href="javascript:void(0);"><?php echo e($list->fio); ?> </a></span>
								<h3><?php echo e($list->title); ?></h3>
							</div>
								<img src="/public/images/<?php echo e($list->image); ?>" style="width: 400px; height: 400px;" alt="image description">

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
								<p><?php echo e($list->message); ?></p>
							</div>
						</div>
						<?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="sj-author">
							<figure class="sj-authorimg">
								<img src="/public/images/users-img/img-01.jpg" alt="image description">
							</figure>
							<div class="sj-authorcontent">
								<div class="sj-authorhead">
									<div class="sj-leftarea">
										<div class="sj-authorname">
											<h3> <?php echo e($coment->fio); ?></h3>
											<span><?php echo e($coment->theme); ?> </span>
										</div>
									</div>
									
								</div>
								<div class="sj-description">
									<p><?php echo e($coment->comment); ?></p>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<div class="sj-leaveyourcomment">
							<div class="sj-borderheading">
								<h3>Оставить комментарий </h3>
							</div>
							<form method="POST" action="<?php echo e(route('comment')); ?>" class="sj-formtheme sj-formleavecomment">
								<?php echo csrf_field(); ?>
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
										<input type="text" name="book_id" value="<?php echo e($list->id); ?>" style="display: none;">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\practice\resources\views/article/detail.blade.php ENDPATH**/ ?>