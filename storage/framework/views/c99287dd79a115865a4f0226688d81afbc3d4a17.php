
<?php $__env->startSection('title','Профиль'); ?>
<?php $__env->startSection('main'); ?>
<div class="sj-addarticleholdcontent">
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
    <div class="sj-dashboardboxtitle">
        <h2>Изменить Имя </h2>
    </div>
    <div class="sj-acsettingthold">

        <form action="<?php echo e(route('name')); ?>" method="POST" class="sj-formtheme sj-formpassword">
             <?php echo csrf_field(); ?>
            <fieldset>
                <div class="form-group sj-inputwithicon sj-password">
                    <i class="lnr lnr-user"></i>
                    <input type="text" name="name" class="form-control" placeholder="Введите Имя">
                </div>
    
            </fieldset>
        
        <div class="sj-btnarea sj-updatebtns">
            <button type="submit" class="sj-btn sj-btnactive">Изменить</button>
        </div>
    </form>
    </div>
</div>
<div class="sj-addarticleholdcontent">
    <div class="sj-dashboardboxtitle">
        <h2>Изменить E-mail </h2>
    </div>
    <div class="sj-acsettingthold">
        <form action="<?php echo e(route('email')); ?>" method="POST" class="sj-formtheme sj-formpassword">
            <?php echo csrf_field(); ?>
            <fieldset>
                <div class="form-group sj-inputwithicon sj-password">
                    <i class="lnr lnr-envelope"></i>
                    <input type="text" name="email" class="form-control" placeholder="Введите E-mail">
                </div>
     <div class="sj-btnarea sj-updatebtns">
            <button type="submit" class="sj-btn sj-btnactive">Изменить</button>
        </div>
            </fieldset>
        </form>
       
    </div>
</div>
<div class="sj-addarticleholdcontent">
    <div class="sj-dashboardboxtitle">
        <h2>Изменить пароль </h2>
    </div>
    <div class="sj-acsettingthold">
        <form action="<?php echo e(route('parol')); ?>" method="POST" class="sj-formtheme sj-formpassword">
            <?php echo csrf_field(); ?>
            <fieldset>
                <div class="form-group sj-inputwithicon sj-password">
                    <i class="lnr lnr-lock"></i>
                    <input type="pasword" name="pasword" class="form-control" placeholder="Старый пароль">
                </div>
                <div class="form-group sj-inputwithicon sj-password">
                    <i class="lnr lnr-lock"></i>
                    <input type="password" name="password" class="form-control" placeholder="Новый пароль">
                </div>
                <div class="form-group sj-inputwithicon sj-password">
                    <i class="lnr lnr-lock"></i>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Подтверждения нового пароля">
                </div>
               <div class="sj-btnarea sj-updatebtns">
            <button type="submit"  class="sj-btn sj-btnactive">Изменить </button>
               </div>
            </fieldset>
        </form>
        
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\practice\resources\views/home/profi.blade.php ENDPATH**/ ?>