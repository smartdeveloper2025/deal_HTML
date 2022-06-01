 <?php include 'header.php';?>
       
        <div class="content-wrapper">
            <!-- START PAGE WRAPPER-->
            <div class="page-heading">
                <div class="d-flex align-items-baseline">
                    <h1 class="page-title">Add Competitors</h1>
                    <!--<button type="button" class="ml-auto btn btn-primary btn-fix" data-toggle="modal" data-target="#exampleModalCenter">View Popup</button>-->
                </div>
                <div class="clearfix"></div>
                <ul class="breadcrumbs ">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Add Competitores</span></li>
                </ul>
            </div>
            <div class="page-content fade-in-up">
                <!-- START PAGE CONTENT-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <!--<div class="ibox-head">
                                <div class="ibox-title">Competitors Form</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a>
                                    </div>
                                </div>
                            </div>-->
                            
                            <div class="ibox-body">
                                <form class="common-form">
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Competitor Company</label>
                                            <input class="form-control" type="text" placeholder="Competitor Company">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Competitor Website</label>
                                            <input class="form-control" type="text" placeholder="Competitor Website">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Location</label>
                                        <select class="form-control input-lg">
                                            <option>Select Location</option>
                                            <option>Location 1</option>
                                            <option>Location 2</option>
                                            <option>Location 3</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Competitor Strength</label>
                                            <textarea class="form-control" placeholder="Competitor Strength"></textarea>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Competitor Weekness</label>
                                            <textarea class="form-control" placeholder="Competitor Weekness"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <label>Competitor Remarks</label>
                                            <textarea class="form-control" placeholder="Competitor Remarks"></textarea>
                                        </div>
                                    </div>

                                    <!--<div class="form-group">
                                        <label class="ui-checkbox">
                                            <input type="checkbox">
                                            <span class="input-span"></span>Remamber me</label>
                                    </div>-->
                                    <div class="form-group ml-auto">
                                        <button class="btn btn-primary btn-fix">Submit</button>
                                        <button class="btn btn-danger btn-fix ml-2">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- END PAGE CONTENT-->
<?php include 'footer.php';?>