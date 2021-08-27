



<?php $__env->startSection('title', 'Admin'); ?>


<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('css/admin.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <h1>User List</h1>
    <table id="table">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody style="font-size:30px"> 
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->username); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->contact); ?></td>
                <td class="no-border"><a href="<?php echo e(url('admin/edit/' . $user->id)); ?>">Edit User</a></td>
                <td class="no-border"><a href="<?php echo e(url('admin/delete/' . $user->id)); ?>" style="color: red">Delete User</a></td>
            </tr><br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mytemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\365-Alert\365-Alert Laravel\resources\views/admin.blade.php ENDPATH**/ ?>