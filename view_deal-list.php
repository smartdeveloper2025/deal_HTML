 <?php include 'header.php';?>
        <div class="content-wrapper">
            <!-- START PAGE WRAPPER-->
            <div class="alert alert-success alert-dismissible fade show mt-2 mb-0">
			    <button type="button" class="close" data-dismiss="alert">&times;</button>
			    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  			</div>
            <div class="clearfix"></div>
            <div class="page-heading">
                <div class="d-flex align-items-baseline">
                <h1 class="page-title">Deal List View</h1>
                <!--<a href="add_competitors_form.php" class="ml-auto btn btn-primary btn-fix">Add Competitors</a>-->
                </div>
                
                <ul class="breadcrumbs ">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Deal List View</span></li>
                </ul>
            </div>
            <div class="page-content fade-in-up">
                 <!-- START PAGE CONTENT-->
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">Filter Result</div>
                        </div>
                         <div class="ibox-body">
                           <div class="row">
                                <div class="form-group col-xl-3 col-sm-4" id="date_1">
                                    <label class="font-bold">Date Form</label>
                                    <div class="input-group date">
                                        <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                        <input class="form-control" type="text" value="04/12/2017">
                                    </div>
                                </div>
                           
                                <div class="form-group col-xl-3 col-sm-4" id="date_1">
                                    <label class="font-bold">Date To</label>
                                    <div class="input-group date">
                                        <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                        <input class="form-control" type="text" value="04/12/2017">
                                    </div>
                                </div>
                                <div class="form-group col-xl-3 col-sm-4">
                                    <label class="font-bold">Stage</label>
                                    <select class="form-control input-lg">
                                        <option>Select Stage</option>
                                        <option>Stage 1</option>
                                        <option>Stage 2</option>
                                        <option>Stage 3</option>
                                    </select>
                                </div>
                                <div class="form-group col-xl-3 col-sm-4">
                                    <label class="font-bold">Package</label>
                                    <select class="form-control input-lg">
                                        <option>Select Package</option>
                                        <option>Package 1</option>
                                        <option>Package 2</option>
                                        <option>Package 3</option>
                                    </select>
                                </div>
                                <div class="form-group col-xl-3 col-sm-4">
                                    <label class="font-bold">Service</label>
                                    <select class="form-control input-lg">
                                        <option>Select Service</option>
                                        <option>Service 1</option>
                                        <option>Service 2</option>
                                        <option>Service 3</option>
                                    </select>
                                </div>
                                <div class="form-group col-xl-3 col-sm-4">
                                    <label class="font-bold">Company name</label>
                                    <input class="form-control" type="text" placeholder="Company Name">
                                </div>
                                <div class="form-group col-xl-3 col-sm-4">
                                    <label class="font-bold">Reporting Manager</label>
                                    <select class="form-control input-lg">
                                        <option>Choose RM</option>
                                        <option>RM 1</option>
                                        <option>RM 2</option>
                                        <option>RM 3</option>
                                    </select>
                                </div>
                                <div class="form-group col-xl-3 col-sm-4">
                                    <label class="font-bold w-100 text-transparent">Reporting Manager</label>
                                    <button class="btn btn-primary btn-fix w-100">Filter</button>
                                </div>
                            </div>
                         </div>
                    </div>
                   
                    <div class="row">
                    <div class="col-xl-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Deal List Data</div>
                            </div>
                            <div class="ibox-body">
                                <table class="table table-striped table-bordered table-hover firstcoloumn_hide" id="example-table" cellspacing="0" width="100%">
                                    <thead class="thead-default">
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Deal Name</th>
                                            <th>Amount</th>
                                            <th>Stage</th>
                                            <th>Closing Date</th>
                                            <th>Contact Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="deal_detail.php" class="color-black">1000 Widgets</a></td>
                                            <td>4500</td>
                                            <td>Value Proposition</td>
                                            <td>Jan 13</td>
                                            <td>Snow White Bakers</td>
                                            <td><form><button class="btn btn-info btn-xs" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye font-14"></i></button><button class="btn btn-success btn-xs m-r-5 m-l-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button><button class="btn btn-danger btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button></form></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="deal_detail.php" class="color-black">1 Widgets</a></td>
                                            <td>6500</td>
                                            <td>Negotation Review</td>
                                            <td>Feb 07</td>
                                            <td>Blue Rivers Pvt Ltd</td>
                                            <td><form><button class="btn btn-info btn-xs" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye font-14"></i></button><button class="btn btn-success btn-xs m-r-5 m-l-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button><button class="btn btn-danger btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button></form></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><a href="deal_detail.php" class="color-black">1000 Widgets A Deal</a></td>
                                            <td>9500</td>
                                            <td>Closed Won</td>
                                            <td>Dec 24</td>
                                            <td>Tony & Prescott Ltd</td>
                                            <td><form><button class="btn btn-info btn-xs" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye font-14"></i></button><button class="btn btn-success btn-xs m-r-5 m-l-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button><button class="btn btn-danger btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button></form></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><a href="deal_detail.php" class="color-black">180 Widgets</a></td>
                                            <td>2500</td>
                                            <td>Proposal/Price Quote</td>
                                            <td>Feb 13</td>
                                            <td>Venture Capitalists</td>
                                            <td><form><button class="btn btn-info btn-xs" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye font-14"></i></button><button class="btn btn-success btn-xs m-r-5 m-l-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button><button class="btn btn-danger btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button></form></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- END PAGE CONTENT-->
       
        
            
<?php include 'footer.php';?>