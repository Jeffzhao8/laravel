<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php foreach($data as $row): ?>
                        <tr>
                            <td><?php echo e($row ->leaveCountry); ?></td>
                            <td><?php echo e($row ->leaveCity); ?></td>
                            <td><?php echo e($row ->arriveCountry); ?></td>
                            <td><?php echo e($row ->arriveCity); ?></td>
                            <td><?php echo e($row ->leaveDate); ?></td>
                            <td><?php echo e($row ->arriveDate); ?></td>
                            <td><?php echo e($row ->email); ?></td>
                            <td><?php echo e($row ->mobile); ?></td>
                            <td><?php echo e($row ->description); ?></td>
                            
                    <?php endforeach; ?>
                        </tr>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>