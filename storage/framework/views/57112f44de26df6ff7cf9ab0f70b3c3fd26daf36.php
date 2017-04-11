<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-10 col-lg-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Post</div>

                   <div class="panel-body">
                       
                       <form action="create_delivery" method="POST" class="form-horizontal">
                                <?php echo e(csrf_field()); ?>


                                <!-- From & TO -->
                                <div class="form-group" style="height: 50px; margin-top: 20px">
                                        <label for="task" class="col-sm-3 control-label">Leaving From</label>

                                        <div class="col-sm-3">
                                            <select class="form-control" name="leaveCountry">
                                                    <option>Australia</option>
                                                    <option>Myanmar</option>
                                                   
                                            </select>
                                        </div>

                                        <label for="task" class="col-sm-1 control-label">City</label>
                                    
                                        <div class="col-sm-3">
                                            <input type="text" name="leaveCity" class="form-control">
                                        </div>

                                        
                                        <div class="col-sm-2" style="text-align: right" ></div>
                                </div>
                                    <!-- Date-->
                                    <!--To-->
                                        <div class="form-group" style="height: 50px; margin-top: 0px">
                                                <label for="task" class="col-sm-3 control-label"> Going To  </label>

                                                <div class="col-sm-3">
                                                    <select class="form-control" name="arriveCountry">
                                                            <option>Myanmar</option>
                                                            <option>Australia</option>
                                                            
                                                    </select>
                                                </div>

                                                <label for="task" class="col-sm-1 control-label">City</label>
                                    
                                                <div class="col-sm-3">
                                                    <input type="text" name="arriveCity" class="form-control">
                                                </div>
                                                <div class="col-sm-2" style="text-align: right; border: solid 0px" ></div>
                                        </div>

                                         <div class="form-group" style="height: 50px">
                                            <div class="col-sm-offset-0">
                                                    <label for="task"  class="col-sm-3 control-label">Leaving Date</label> 

                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" name="leaveDate" id="ld" >
                                                    </div>
                                             
                                                    <label for="task" class="col-sm-1 control-label">Arriving</label> 
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" name="arriveDate" id="ad" >
                                                    </div>
                                                    <div class="col-sm-2" style="text-align: right; border: solid 0px;" ></div>


                                            </div>
                                        </div>
                                        <div class="form-group" style="height: 50px">
                                                <div class="col-sm-offset-0">
                                                    <label for="task" class="col-sm-3 control-label">Email</label> 

                                                    <div class="col-sm-3">
                                                        <input type="email" name="email" class="form-control">
                                                    </div>
                                             
                                                    <label for="task" class="col-sm-1 control-label">Mobile</label> 
                                                    <div class="col-sm-3">
                                                        <input type="text" name="mobile" class="form-control" maxlength="10" placeholder="0412345678">
                                                    </div>
                                                    <div class="col-sm-2" style="text-align: right; border: solid 0px;" ></div>
                                                </div>
                                        </div>

                                        <div class="form-group">
                                                 
                                                 <div class="col-sm-offset-0">    
                                                        <label class="col-sm-10 col-sm-offset-2" for="comment">Description</label>
                                                    

                                                        <div class="col-sm-7 col-sm-offset-3" style="border: solid 0px;">
                                                          <textarea class="form-control" rows="7" name="description"></textarea>
                                                
                                                        </div>
                                                  </div>  
                                               
                                        </div>

                                <!-- Save Button -->
                                <div class="form-group">
                                    <div class="col-sm-offset-6 col-sm-5" style="border: solid 0px;"> 
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
<!--afdafs-->

<script type="text/javascript">
   $('#ld').datepicker(
                  {
                      format: 'dd/mm/yyyy',
                      autoclose: true,
                      forceParse: false,
                      Default: true,
                      pickDate: true,

                  });
   $('#ad').datepicker(
                  {
                      format: 'dd/mm/yyyy',
                      autoclose: true,
                      forceParse: false,
                      Default: true,
                      pickDate: true,

                  });

   
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>