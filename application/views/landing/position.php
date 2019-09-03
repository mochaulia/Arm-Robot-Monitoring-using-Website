<!doctype html>
<html>

<head>
    <title>Controlling Dobot</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/template.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootflat.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/dataTables.bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <nav style="border-radius:0px !important;" class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-8">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a style="margin-left:0px" class="navbar-brand" href="<?php echo base_url();?>"><b>C3MEN</b></a>
                </div>
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-8">
                    <?php if (!$this->session->userdata('is_logged_in')) { ?>
                    <button type="button" class="btn btn-danger navbar-btn"
                        onclick="window.location.href = '<?php echo base_url('users/login');?>';">Sign in</button>
                    <?php }else{?>
                    <button type="button" class="btn btn-danger navbar-btn"
                        onclick="window.location.href = '<?php echo base_url('dashboard/');?>';">Dashboard</button>
                    <?php } ?>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">3D Position from Arm Robot</h3>
                        </div>
                        <div class="panel-body">
                            <div id="graph"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Realtime data from Arm Robot.</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="display" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Coordinate X</th>
                                            <th>Coordinate Y</th>
                                            <th>Coordinate Z</th>
                                            <th>Coordinate R</th>
                                            <th>Pump</th>
                                            <th>Speed</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/template.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/js/position.js"></script>
<script src="<?php echo base_url();?>assets/js/icheck.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.fs.selecter.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.fs.stepper.min.js"></script>
<script src="<?php echo base_url();?>assets/js/landing/landingHandler.js"></script>
