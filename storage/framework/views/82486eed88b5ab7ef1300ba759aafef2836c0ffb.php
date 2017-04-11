<style type="text/css">
    .glyphicon{
        font-size: 40px;
    }
</style>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">OBC</div>

                        <div class="panel-body">

                            <div class="col-md-2 col-md-offset-2" style="border:0px solid black; text-align: center">
                                <p>
                                     <a href="<?php echo e(url('/Post_Form')); ?>">
                                         <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                </p>
                                 Do a Delivery
                            </div> 

                            <div class="col-md-2 col-md-offset-1" style="border:0px solid black; text-align: center">
                                <p>
                                     <a href="#">
                                         <span class="glyphicon glyphicon-gift"></span>
                                    </a>
                                </p>
                                 <span>Find a Deliveryman</span>
                            </div> 
                            <div class="col-md-2 col-md-offset-1" style="border:0px solid black; text-align: center">
                                <p>
                                   <a href="#"><i class="fa fa-building-o" aria-hidden="true" style="font-size: 40"></i></a>
                                </p>
                                 <span>Rent Ads</span>
                            </div> 


                        </div>

                        <div class="panel-body">

                    <div class="col-md-2 col-md-offset-2" style="border:0px solid black; text-align: center">
                        <p>
                             <a href="<?php echo e(url('/home')); ?>" >
                                 <span class="glyphicon glyphicon-search"></span>
                            </a>
                        </p>
                         Find Post
                    </div> 

                   


                </div>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>