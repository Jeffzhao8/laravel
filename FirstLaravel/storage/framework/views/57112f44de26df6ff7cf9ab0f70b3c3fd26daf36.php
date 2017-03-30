<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Post</div>

                   <div class="panel-body">
                       
                       <form action="/task" method="POST" class="form-horizontal">
                                <?php echo e(csrf_field()); ?>


                                <!-- From & TO -->
                                <div class="form-group">
                                    <label for="task" class="col-sm-3 control-label">Going From</label>

                                    <div class="col-sm-3">
                                        <input type="text" name="name" id="task-name" class="form-control">
                                    </div>
                                    <label for="task" class="col-sm-2 control-label">To </label> 

                                    <div class="col-sm-3">
                                        <input type="text" name="name" id="task-name" class="form-control">
                                    </div>
                                    <!-- Date-->

                                </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-0">
                                            <label for="task" class="col-sm-3 control-label">Leaving Date</label> 

                                            <div class="col-sm-3">
                                                <input type="text" name="name" id="task-name" class="form-control">
                                            </div>
                                             <label for="task" class="col-sm-2 control-label">Arriving Date</label> 

                                            <div class="col-sm-3">
                                                <input type="text" name="name" id="task-name" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                <!-- Save Button -->
                                <div class="form-group">
                                    <div class="col-sm-offset-6 col-sm-6">
                                        <button type="submit" class="btn btn-primary">
                                           Post
                                        </button>
                                    </div>
                                </div>
                         </form>

                   </div>     


                </div>
                    

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>