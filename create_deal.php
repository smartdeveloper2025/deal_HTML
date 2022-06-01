 <?php include 'header.php';?>

        <div class="content-wrapper">
            <!-- START PAGE WRAPPER-->
            <div class="page-heading">
                <div class="d-flex align-items-baseline">
                    <h1 class="page-title">Create Deal</h1>
                </div>
                <ul class="breadcrumbs ">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Create Deal</span></li>
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
                                            <label>Select Service</label>
                                            <select class="form-control input-lg myselect">
                                                <option>Select Service</option>
                                                <option value="popupmint">SteelMint</option>
                                                <option value="popupmint">CoatMint</option>
                                                <option value="popupmint">Steel 360</option>
                                                <option value="popupevent">Events</option>
                                                <option value="popupcustom">Custom</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Map Competitor</label>
                                            <select class="form-control input-lg">
                                                <option>Select Competitor</option>
                                                <option>SteelMint</option>
                                                <option>CoatMint</option>
                                                <option>Steel 360</option>
                                                <option>Events</option>
                                                <option>Custom</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Package Name</label>
                                            <input class="form-control" type="text" placeholder="Package Name" readonly="">
                                        </div>
                                    
                                        <div class="col-sm-6 form-group">
                                            <label>MRP</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="9690"/ readonly="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Expected Revenue</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text">₹</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="5556"/>
                                            </div>
                                        </div>
                                    
                                        <div class="col-sm-6 form-group">
                                            <label>Expected Revenue (INR)</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text">₹</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="5556"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Deal Stage</label>
                                            <select class="form-control input-lg">
                                                <option>Select Deal Stage</option>
                                                <option>Deal 1</option>
                                                <option>Deal 2</option>
                                                <option>Deal 3</option>
                                                <option>Deal 4</option>
                                                <option>Deal 5</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Probability</label>
                                            <input class="form-control" type="text" placeholder="Probability" readonly="">
                                        </div>
                                        
                                        <div class="col-sm-12 form-group">
                                            <label>Next Step</label>
                                            <textarea class="form-control" placeholder="Next step"></textarea>
                                        </div>

                                        <div class="col-sm-6 form-group" id="date_1">
                                            <label>Next Step Date</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                                <input class="form-control" type="text" value="04/12/2017">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group" id="date_1">
                                            <label>Deal Close Date</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                                <input class="form-control" type="text" value="04/12/2017">
                                            </div>
                                        </div>
                                    </div>

                                    <!--<div class="form-group">
                                        <label class="ui-checkbox">
                                            <input type="checkbox">
                                            <span class="input-span"></span>Remamber me</label>
                                    </div>-->
                                    <div class="form-group ml-auto mt-2">
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