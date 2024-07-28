<?php $__env->startSection('content'); ?>
<h2>Home Page</h2>
<br><br><br><br><br><br><br>


<table style="border-collapse: collapse;border: 1px solid black;width:80%">
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Addres</th>
        <th>Actions</th>
    </thead>

    <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tbody style="text-align:center;">
    <fieldset>
    <legend> ID : <?php echo e($admin->id); ?>:</legend>
        <td><?php echo e($admin->id); ?></td>
        <td><?php echo e($admin->name); ?></td>
        <td><?php echo e($admin->fname); ?></td>
        <td><?php echo e($admin->phone); ?></td>
        <td><?php echo e($admin->address); ?></td>
        <td><?php echo e($admin->description); ?></td>
        </fieldset>
        

    </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nisar Ahmad\Desktop\laravel new versions\version 11\breeze1\resources\views/welcome.blade.php ENDPATH**/ ?>