<!doctype html>
<html>

<head>
    <title>Teaching</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/template.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootflat.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard/dashboard.css');?>">
    <link href="<?php echo base_url('assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
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
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url('dashboard/teaching');?>">Teaching</a></li>
                        <li><a href="<?php echo base_url('dashboard/');?>">Monitoring</a></li>
                        <li class="disabled"><a></a></li>
                    </ul>
                    <button type="button" id="txtLogout" class="btn btn-danger navbar-btn"
                        onclick="window.location.href = '<?php echo base_url('users/logout');?>';"><?php echo $user->username ;?>
                    </button>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Teaching data from Dobot Magician.</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="display" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Data X</th>
                                            <th>Data Y</th>
                                            <th>Data Z</th>
                                            <th>Data R</th>
                                            <th>Data Pump</th>
                                            <th>Data Speed</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <button type="button" id="deleteBtnTeaching" class="btn btn-danger navbar-btn">Clear data</button>
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
<script src="<?php echo base_url();?>assets/js/teachingHandler.js"></script>
<script src="<?php echo base_url();?>assets/js/Chart.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/js/icheck.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.fs.selecter.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.fs.stepper.min.js"></script>