<?php 
  include("../api/db_lib.php");include('includes/header.php');
?>
             
<div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">DASHBOARD</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                balance</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                deposit</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                 <!-- Earnings (Monthly) Card Example -->
                                 <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                withdraws</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">REQUESTS</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>username</th>
                                            <th>peer</th>
                                            <th>method</th>
                                            <th>amount</th>
                                            <th>account bal</th>
                                            <th>date</th>
                                            <th>process</th>
                                        </tr>
                                    </thead>
                              
                                    <tbody>
                                    <?php
                                        $id = get_userid();
                                        $res = run_query("SELECT * FROM `app_db`.`transaction` ");
                                       
                                        if($res){

                                        
                                        foreach($res as $i){
                                        $t = 'unknown';
                                        switch ($i['type']) {
                                            case 0:
                                                $t = "Deposit";
                                                break;
                                            case 1:
                                                $t = "Withdraw";
                                                # code...
                                                break;
                                            case 2:
                                                $t = "Trade";
                                                # code...
                                                break;
                                        }
                                        $s = "Unknown";
                                        switch ($i['approved']) {
                                            case 0:
                                                $s = "FAILED";
                                                break;
                                            case 1:
                                                $s = "PENDING";
                                                # code...
                                                break;
                                            case 2:
                                                $s = "APPROVED";
                                                # code...
                                                break;
                                        }
                                        ?>
                                        <tr> 
                                            <td>Tiger Nixon</td>
                                            <td><?php echo $i['peer'] ?></td>
                                            <td><?php echo $t ?></td>
                                            <td><?php echo $i['amount'] ?></td>
                                            <td>$500</td> 
                                            <td><?php echo $i['date'] ?></td> 
                                            <td>
                                                <button class="btn btn-success" id="approve" style="margin:10px">approve</button>
                                                <button class="btn btn-danger" id="decline" style="margin:10px">decline</button>
                                            </td>
                                        </tr>
                                         <?php
                                        }}

                                        
                                        ?>
                              
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                     <!-- Page Heading -->
                     <h1 class="h3 mb-2 text-gray-800">EXTANGE RATES</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Currency</th>
                                            <th>TRADE RATES</th>
                                            <th></th>
                                            
                                        </tr>
                                    </thead>
                              
                                    <tbody>
                                    <?php
                                        $res = run_query_single("SELECT * FROM `app_db`.`gen_custom` WHERE  `property`='usdt/busd'");
                                        $res2 = run_query_single("SELECT * FROM `app_db`.`gen_custom` WHERE  `property`='busd/usdt'");
                                        $res3 = run_query_single("SELECT * FROM `app_db`.`gen_custom` WHERE  `property`='usdtaddress'");
                                        $res4 = run_query_single("SELECT * FROM `app_db`.`gen_custom` WHERE  `property`='busdaddress'");
                                        
                                        ?>
                                        <tr> 
                                            <td>usdt/busd</td>
                                            <td>1</td>
                                            <td><?php echo $res['value']?></td>
                                            <td>
                                                <button class="btn btn-success" style="margin:10px" onclick="update_extange_rate('usdt/busd','usdt','busd')">Update</button>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td>usdt/busd</td>
                                            <td>1</td>
                                            <td><?php echo $res2['value']?></td>

                                            <td>
                                            <button class="btn btn-success" style="margin:10px" onclick="update_extange_rate('busd/usdt','busd','usdt')">Update</button>

                                            </td>
                                        </tr>
                                        <tr> 
                                            <td>wallet address</td>
                                            <td>USDT DEPOSIT ADDRESS</td>
                                            <td><?php echo $res3['value']?></td>

                                            <td>
                                            <button class="btn btn-success" style="margin:10px" onclick="update_extange_rate('walletaddress','walletadress')">Update</button>

                                            </td>
                                        </tr>
                                        <tr> 
                                            <td>wallet address</td>
                                            <td>BUSD DEPOSIT ADDRESS</td>
                                            <td><?php echo $res4['value']?></td>

                                            <td>
                                            <button class="btn btn-success" style="margin:10px" onclick="update_extange_rate('walletaddress','walletadress')">Update</button>

                                            </td>
                                        </tr>
                                         <?php
                                        

                                        
                                        ?>
                              
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
</div>
<script src="./js/update.js"></script>
<?php include('includes/footer.php'); ?>       