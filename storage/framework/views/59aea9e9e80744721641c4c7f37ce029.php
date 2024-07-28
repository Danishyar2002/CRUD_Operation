
<?php $__env->startSection('content'); ?>
<h2>Edit Page</h2>

<form action="<?php echo e(route('admin.update',['admin'=>$admin->id])); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <label for="name">Name</label>
    <input type="text" name="name" value="<?php echo e($admin->name); ?>"><br>
    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span style="color:red;">
        <?php echo e($message); ?>

    </span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <br>

    <label for="f-name">F-Name</label>
    <input type="text" name="fname" value="<?php echo e($admin->fname); ?>"> <br>
    <?php $__errorArgs = ['fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span style="color:red;">
        <?php echo e($message); ?>

    </span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <br>

    <label for="phone">Phone</label>
    <input type="number" name="phone" value="<?php echo e($admin->phone); ?>"><br>
    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span style="color:red;">
        <?php echo e($message); ?>

    </span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <br>

    <label for="address">Address</label>
    <input type="text" name="address" value="<?php echo e($admin->address); ?>"><br>
    <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span style="color:red;">
        <?php echo e($message); ?>

    </span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <br>

    <label for="description">Description</label>
    <textarea name="description" id="" rows="10" cols="30"><?php echo e($admin->description); ?></textarea>

    <button type="submit">Update</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nisar Ahmad\Desktop\laravel new versions\version 11\breeze1\resources\views/admin/edit.blade.php ENDPATH**/ ?>