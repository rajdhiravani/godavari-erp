    <main>
        <div class="container-fluid">
            <div class="row  ">
                <div class="col-12">

                    <h1>Dashboard</h1>
                    
                    <div class="separator mb-5"></div>
                </div>
                            
                
            </div>
            <div class="row">
                    <div class="col-xs-3 col-lg-3">
                        <div class="card mb-4 progress-banner">
                                <a href="<?php echo URL.'history/index/EA/#SDS_INR_landed' ?>" class="card-body justify-content-between d-flex flex-row align-items-center">
                                        <div>
                                            <h5 class="text-white"><?php echo "SDS" ?></h5>
                                            <p class="text-white"><?php echo $procurement[0]['SDS_INR_landed']; ?>&nbsp; <?php echo $d['INR_T']; ?></p>
                                        </div>
                                    <div>
                                            <i class="iconsmind-Line-Chart mr-2 text-white align-text-bottom d-inline-block"></i>
                                    </div>
                                </a>
                            </div>
                    </div>
                    <div class="col-xs-3 col-lg-3">
                        <div class="card mb-4 progress-banner">
                                <a href="<?php echo URL.'history/index/EA/#AA_INR_landed' ?>" class="card-body justify-content-between d-flex flex-row align-items-center">
                                        <div>
                                            <h5 class="text-white"><?php echo "AA" ?></h5>
                                            <p class="text-white"><?php echo $procurement[0]['AA_INR_landed']; ?>&nbsp; <?php echo $d['INR_T']; ?></p>
                                        </div>
                                    <div>
                                            <i class="iconsmind-Line-Chart mr-2 text-white align-text-bottom d-inline-block"></i>
                                    </div>
                                </a>
                            </div>
                    </div>
                    <div class="col-xs-3 col-lg-3">
                        <div class="card mb-4 progress-banner">
                                <a href="<?php echo URL.'history/index/EA/#COAL_INR_landed' ?>" class="card-body justify-content-between d-flex flex-row align-items-center">
                                        <div>
                                            <h5 class="text-white"><?php echo "COAL" ?></h5>
                                            <p class="text-white"><?php echo $procurement[0]['COAL_INR_landed']; ?>&nbsp; <?php echo $d['INR_T']; ?></p>
                                        </div>
                                    <div>
                                            <i class="iconsmind-Line-Chart mr-2 text-white align-text-bottom d-inline-block"></i>
                                    </div>
                                </a>
                            </div>
                    </div>
                
            </div>
            


            <div class="row">  
                <div class="col-xl-8 col-lg-8 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Procurement</h5>
                            <table class="data-table responsive nowrap" data-order="[[ 1, &quot;desc&quot; ]]">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['SDS_USD']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $procurement[0]['SDS_USD']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['SDS_USD_other']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $procurement[0]['SDS_USD_other']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['SDS_USD_landed']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $procurement[0]['SDS_USD_landed']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['SDS_USD_INR_procurement']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $procurement[0]['SDS_USD_INR_procurement']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['AA_USD_INR_procurement']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $procurement[0]['AA_USD_INR_procurement']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['SDS_INR_landed']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $procurement[0]['SDS_INR_landed']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['AA_USD']; ?> </p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $procurement[0]['AA_USD']; ?></p>
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['AA_USD_other']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $procurement[0]['AA_USD_other']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['AA_USD_landed']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $procurement[0]['AA_USD_landed']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['AA_INR_landed']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $procurement[0]['AA_INR_landed']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['COAL_INR_landed']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $procurement[0]['COAL_INR_landed']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
            

        </div>
    </main>
