<?php
include('header.php');
$left = 2;

$sql = "SELECT * FROM `feedback`";

$data = mysqli_query($conn, $sql);

$total = mysqli_num_rows($data);
?>




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php include('leftpanel.php'); ?>

<div class="app-content content container-fluid">
    <div class="content-wrapper" style="min-height:590px;">
        <div class="content-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">

                            <h4 class="card-title"> Opnion </a>
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                    </ul>
                                </div>
                        </div>
                        <div class="card-body collapse in">
                            <div align="right" style="padding:10px;">

                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="bg-teal bg-lighten-4">
                                        <tr>

                                            <th>Id</th>
                                            <th>userid</th>
                                            <th>feedback</th>
                                            <th>created_at</th>
                                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        if ($total > 0) {
                                            while ($total1 = mysqli_fetch_array($data)) {
                                        ?>
                                                <tr>


                                                    <td align="center"><?= $total1['id'] ?></td>
                                                    <td align="center"><?= $total1['userid'] ?></td>
                                                    <td align="center"><?= $total1['feedback'] ?></td>
                                                    
                                                    <td align="center"><?= $total1['created_at'] ?></td>
                                                    


                                                <?php
                                            }
                                        } else { ?>
                                                <tr>
                                                    <td colspan="12" align="center">No Record Found!</td>
                                                </tr><?php }
                                                        ?>




                                    </tbody>
                                </table>
                            </div>

                            <div align="center"><?= $pagination ?></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php include('footer.php'); ?>
<script src="app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
<script src="app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
<script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="app-assets/js/core/app.js" type="text/javascript"></script>
</body>

</html>