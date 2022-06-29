<?php
include('header.php');
$left=2;
include('leftpanel.php');
?>

<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                <h2 class="content-header-title">Feedback</h2>
            </div>
        </div>
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-3">&nbsp;</div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-colored-form-control">Share your Opinion</h4>
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <?php if (isset($_REQUEST['e']) && $_REQUEST['e'] == 1) { ?>
                                        <div align="center">
                                            <div style="color:#FF0000;"><?=$_REQUEST['m']?>!</div>
                                        </div>
                                    <?php } ?>
                                    <?php if (isset($_REQUEST['m']) && $_REQUEST['m'] == 2) { ?>
                                        <div align="center">
                                            <div style="color:#009900;">'Thank you for your feedback. We\'ll appreciate!'</div>
                                        </div>
                                    <?php } ?>
                                    
                                
                                    <form class="form" action="feedbackprocess.php" method="post">
                                        <div class="form-body">

                                            <div class="form-group">
                                                <label for="content"></label>
                                                <div class="position-relative">
                                                    <textarea required id="content" name="Feedback" class="form-control" placeholder="Feedback*"></textarea>
                                                </div>
                                            </div>

                                            <!--<div class="form-group">
                                                <label for="content3">Line 3</label>
                                                <div class="position-relative">
                                                    <textarea id="content3" name="content3" class="form-control" placeholder="Line 3"><?/*=$content3*/?></textarea>
                                                </div>
                                            </div>-->

                                        </div>

                                        <div class="form-actions right">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">&nbsp;</div>
                </div>
            </section>
        </div>
    </div>
</div>


<!-- test -->

<!-- test2 -->


<?php include('footer.php') ?>

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
                                 
