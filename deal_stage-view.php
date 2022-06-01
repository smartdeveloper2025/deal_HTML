 <?php include 'header.php';?>
        <div class="content-wrapper">
            <!-- START CONTENT WRAPPER-->
            <div class="page-heading">
                <div class="d-flex align-items-baseline">
                <h1 class="page-title">View Deal Stage</h1>
                <!--<a href="create_deal.php" class="ml-auto btn btn-primary btn-fix">Add Deal Stage</a>-->
                </div>
                
                <ul class="breadcrumbs ">
                    <li><a href="index.php">Home</a></li>
                    <li><span>View Deal Stage</span></li>
                </ul>
            </div>
            <div class="page-content fade-in-up">
            <!-- START PAGE CONTENT-->
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Filter Result</div>
                    </div>
                     <div class="ibox-body">
                        <form>
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
                                    <label class="font-bold">Company name</label>
                                    <input class="form-control" type="text" placeholder="Company Name">
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
                                    <label class="font-bold">Package</label>
                                    <select class="form-control input-lg">
                                        <option>Select Package</option>
                                        <option>Package 1</option>
                                        <option>Package 2</option>
                                        <option>Package 3</option>
                                    </select>
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
                        </form>
                     </div>
                </div>
                   
                <div class="row">
                    <div class="col-xl-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Deal Stage Data</div>
                            </div>
                            <div class="ibox-body">
                                <div class="pane pane--table1">
                                  <div class="pane-hScroll">

                                        <table>
                                          <thead>
                                           
                                                <th><strong>Qualification (10%)</strong><br/>
                                                    ₹38000 <span>4 Deals</span></th>
                                                <th><strong>Need Analysis (30%)</strong><br/>
                                                    ₹38000 <span>4 Deals</span></th>
                                                <th><strong>Value Proposition (40%)</strong><br/>
                                                    ₹38000 <span>4 Deals</span></th>
                                                <th><strong>Id Decision makers (50%)</strong><br/>
                                                    ₹38000 <span>4 Deals</span></th>
                                                <th><strong>Qualification (10%)</strong><br/>
                                                    ₹38000 <span>4 Deals</span></th>
                                                <th><strong>Need Analysis (30%)</strong><br/>
                                                    ₹38000 <span>4 Deals</span></th>
                                                <th><strong>Id Decision makers (50%)</strong><br/>
                                                    ₹38000 <span>4 Deals</span></th>
                                           
                                          </thead>
                                        </table>

                                        <div class="pane-vScroll">
                                          <table>
                                            <tbody>
                                            <tr>
                                                <td><strong><a href="deal_detail.php">1000 Widgets (10%)</a><em>21 March</em></strong>
                                                    ₹20000 <span>Snow White Bakers</span></td>
                                                <td><strong><a href="deal_detail.php">125 Widgets</a></strong>
                                                    ₹8400 <span>Snow White Bakers</span></td>
                                                <td></td>
                                                <td><strong><a href="deal_detail.php">1500 Widgets (10%)</a><em>21 Feb</em></strong>
                                                    ₹20000 <span>Tony & Prescott Ltd.</span></td>
                                                <td></td>
                                                <td>Snow White Bakers</td>
                                                <td><strong><a href="deal_detail.php">1000 Widgets (10%)</a><em>21 Feb</em></strong>
                                                    ₹20000 <span>Snow White Bakers</span></td>
                                            </tr>
                                            <tr>
                                                 <td><strong><a href="deal_detail.php">25 Widgets (10%)</a><em>21 Feb</em></strong>
                                                    ₹800 <span>Snow White Bakers</span></td>
                                                <td><strong><a href="deal_detail.php">125 Widgets</a></strong>
                                                    ₹8400 <span>Snow White Bakers</span></td>
                                                <td><strong><a href="deal_detail.php">1500 Widgets (10%)</a></strong>
                                                    ₹20000 <span>Tony & Prescott Ltd.</span></td>
                                                <td></td>
                                                <td>Snow White Bakers</td>
                                                <td><strong><a href="deal_detail.php">1000 Widgets (10%)</a><em>21 Feb</em></strong>
                                                    ₹20000 <span>Snow White Bakers</span></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><strong><a href="deal_detail.php">1000 Widgets (10%)</a><em>23 Dec</em></strong>
                                                    ₹20000 <span>Snow White Bakers</span></td>
                                                <td><strong><a href="deal_detail.php">125 Widgets</a></strong>
                                                    ₹8400 <span>Snow White Bakers</span></td>
                                                <td></td>
                                                <td><strong><a href="deal_detail.php">1500 Widgets (10%)</a></strong>
                                                    ₹20000 <span>Tony & Prescott Ltd.</span></td>
                                                <td></td>
                                                <td>Snow White Bakers</td>
                                                <td><strong><a href="deal_detail.php">1000 Widgets (10%)</a></strong>
                                                    ₹20000 <span>Snow White Bakers</span></td>
                                            </tr>
                                            <tr>
                                                 <td><strong><a href="deal_detail.php">25 Widgets (10%)</a><em>21 Feb</em></strong>
                                                    ₹800 <span>Snow White Bakers</span></td>
                                                <td><strong>125 Widgets</strong>
                                                    ₹8400 <span>Snow White Bakers</span></td>
                                                <td><strong><a href="deal_detail.php">1500 Widgets (10%)</a><em>21 Feb</em></strong>
                                                    ₹20000 <span>Tony & Prescott Ltd.</span></td>
                                                <td></td>
                                                <td>Snow White Bakers</td>
                                                <td><strong><a href="deal_detail.php">1000 Widgets (10%)</a></strong>
                                                    ₹20000 <span>Snow White Bakers</span></td>
                                                <td></td>
                                            </tr>
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
            <!-- END PAGE CONTENT-->
      
            
<?php include 'footer.php';?>