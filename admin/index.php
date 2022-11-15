<?php 
  include("../api/db_lib.php");include('includes/header.php');
?>
             
<div class="container-fluid">
            

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
                                            <th>wallet address</th>
                                            <th>amount</th>
                                            <th>account bal</th>
                                            <th>date</th>
                                            <th>process</th>
                                        </tr>
                                    </thead>
                              
                                    <tbody>
                                    <?php
                                        $id = get_userid();
                                        $res = run_query("SELECT * FROM `app_db`.`transaction` WHERE `approved`='1' ");
                                        //$res_user = run_query("SELECT * FROM `app_db`.`users` WHERE `id`='.$id' ");
                                       
                                        if($res || $res_user){

                                       
                                        foreach($res as $i ){
                                        $id_btn=$i['id'];
                                        $res_user = run_query("SELECT `username` FROM `users` ");
                                         var_dump($res_user);
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
                                            <td><?php echo $res_user ?></td>
                                            <td><?php echo $i['peer'] ?></td>
                                            <td><?php echo $t ?></td>
                                            <td><?php echo $i['wallet_add'] ?></td>
                                            <td><?php echo $i['amount'] ?></td>
                                            <td>$500</td> 
                                            <td><?php echo $i['date'] ?></td> 
                                            <td>
                                                <button class="btn btn-success" id="approve" name="up_price" onclick="approve(<?php echo $id_btn;?>)" style="margin:10px">approve</button>
                                                <button class="btn btn-danger" id="decline" onclick="disapprove(<?php echo $id_btn;?>)" style="margin:10px">decline</button>
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
                                        $res3 = run_query_single("SELECT * FROM `app_db`.`gen_custom` WHERE  `property`='usdt'");
                                        $res4 = run_query_single("SELECT * FROM `app_db`.`gen_custom` WHERE  `property`='busd'");
                                        
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