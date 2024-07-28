
<?php $__env->startSection('content'); ?>
<h2>Admin Page</h2>
<br><br><br><br>

<a href="<?php echo e(route('admin.create')); ?>"><button>Add New</button></a><br><br>
<table style="border-collapse: collapse;border: 1px solid black;width:80%">
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Addres</th>
        <th>Actions</th>
    </thead>

    <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tbody style="text-align:center;">
        <td><?php echo e($admin->id); ?></td>
        <td><?php echo e($admin->name); ?></td>
        <td><?php echo e($admin->address); ?></td>
        <td>
            <a href="<?php echo e(route('admin.edit',['admin' => $admin->id])); ?>"><button>Edit</button></a>
            <form action="<?php echo e(route('admin.destroy',['admin'=>$admin->id])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button>Delete</button>
        </form>
        </td>

    </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nisar Ahmad\Desktop\laravel new versions\ahmad\resources\views/admin/index.blade.php ENDPATH**/ ?>