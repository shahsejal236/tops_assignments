 <?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Feedback</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage Feedback
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Feedback Id</th>
                                            <th>Customer Id</th>
                                            <th>Feedback Description</th>
                                            <th>Reply</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(!empty($feedback_arr))
                                        {
                                            foreach($feedback_arr as $data)
                                            {
                                        ?>
                                                <tr>    
                                                    <td><?php echo $data->f_id?></td>
                                                    <td><?php echo $data->cust_id?></td>
                                                    <td><?php echo $data->f_desc?></td>
                                                    <td><a href="#" class="btn btn-primary">Reply</a></td>
                                                    <td><a href="#" class="btn btn-danger">Delete</a></td>

                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                        </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            
            
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?>    