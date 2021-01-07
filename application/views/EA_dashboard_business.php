    <main>
        <div class="container-fluid">
            <div class="row  ">
                <div class="col-12">

                    <h1>Dashboard</h1>
                    
                    <div class="separator mb-5"></div>

                            <div class="row">
                            <div class="col-xl-4 col-lg-4">
                                    <div class="card mb-4 progress-banner-white">
                                            <a href="<?php echo URL.'history/index/EA/#EA_INR_CP' ?>" class="card-body justify-content-between d-flex flex-row align-items-center">
                                                    <div>
                                                        <p class="lead "><?php echo $d['EA_INR_CP']; ?></p>
                                                        <p class=""><?php echo $business[0]['EA_INR_CP']; ?> &nbsp; <?php echo $d['INR_T']; ?></p>
                                                    </div>
                                                <div>
                                                        <i class="iconsmind-Line-Chart mr-2  align-text-bottom d-inline-block"></i>
                                                </div>
                                            </a>
                                        </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="card mb-4 progress-banner-white">
                                            <a href="<?php echo URL.'history/index/EA/#EA_INR_margin' ?>" class="card-body justify-content-between d-flex flex-row align-items-center">
                                                    <div>
                                                        <p class="lead "><?php echo $d['EA_INR_margin']; ?></p>
                                                        <p class=""><?php echo $business[0]['EA_INR_margin']; ?>&nbsp; <?php echo $d['INR_T']; ?></p>
                                                    </div>
                                                <div>
                                                        <i class="iconsmind-Line-Chart mr-2  align-text-bottom d-inline-block"></i>
                                                </div>
                                            </a>
                                        </div>
                                </div>

                                <div class="col-xl-4 col-lg-4">
                                    <div class="card mb-4 progress-banner-white">
                                            <a href="<?php echo URL.'history/index/EA/#EA_INR_SP' ?>" class="card-body justify-content-between d-flex flex-row align-items-center">
                                                    <div>
                                                        <p class="lead"><?php echo $d['EA_INR_SP']; ?></p>
                                                        <p class=""><?php echo $business[0]['EA_INR_SP']; ?>&nbsp; <?php echo $d['INR_T']; ?></p>
                                                    </div>
                                                <div>
                                                        <i class="iconsmind-Line-Chart mr-2 align-text-bottom d-inline-block"></i>
                                                </div>
                                            </a>
                                        </div>
                                </div>
                            </div>
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
            <div class="col-xl-3 col-lg-3">
                                <div class="card mb-4 progress-banner">
                                        <a href="<?php echo URL.'history/index/EA/#STEAM_INR' ?>" class="card-body justify-content-between d-flex flex-row align-items-center">
                                                <div>
                                                    <h5 class="text-white"><?php echo $d['STEAM_INR']; ?></h5>
                                                    <p class="text-white"><?php echo $business[0]['STEAM_INR']; ?> &nbsp;<?php echo $d['INR_KWH']; ?></p>
                                                </div>
                                            <div>
                                                    <i class="iconsmind-Line-Chart mr-2 text-white align-text-bottom d-inline-block"></i>
                                            </div>
                                        </a>
                                    </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="card mb-4 progress-banner">
                                        <a href="<?php echo URL.'history/index/EA/#STEAM_NORM' ?>" class="card-body justify-content-between d-flex flex-row align-items-center">
                                                <div>
                                                    <h5 class="text-white"><?php echo $d['STEAM_norm']; ?></h5>
                                                    <p class="text-white"><?php echo $production[0]['STEAM_norm']; ?></p>
                                                </div>
                                            <div>
                                                    <i class="iconsmind-Line-Chart mr-2 text-white align-text-bottom d-inline-block"></i>
                                            </div>
                                        </a>
                                    </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                    <div class="card mb-4 progress-banner">
                                            <a href="<?php echo URL.'history/index/EA/#POWER_INR' ?>" class="card-body justify-content-between d-flex flex-row align-items-center">
                                                    <div>
                                                        <h5 class="text-white"><?php echo $d['POWER_INR']; ?></h5>
                                                        <p class="text-white"><?php echo $production[0]['POWER_INR']; ?> &nbsp;<?php echo $d['INR_KWH']; ?></p>
                                                    </div>
                                                <div>
                                                        <i class="iconsmind-Line-Chart mr-2 text-white align-text-bottom d-inline-block"></i>
                                                </div>
                                            </a>
                                        </div>
                                </div>
                                <div class="col-xl-3 col-lg-3">
                                    <div class="card mb-4 progress-banner">
                                            <a href="<?php echo URL.'history/index/EA/#POWER_NORM' ?>" class="card-body justify-content-between d-flex flex-row align-items-center">
                                                    <div>
                                                        <h5 class="text-white"><?php echo $d['POWER_norm']; ?></h5>
                                                        <p class="text-white"><?php echo $production[0]['POWER_norm']; ?></p>
                                                    </div>
                                                <div>
                                                        <i class="iconsmind-Line-Chart mr-2 text-white align-text-bottom d-inline-block"></i>
                                                </div>
                                            </a>
                                        </div>
                                </div>

            </div>
            <div class="row">
                            <div class="col-xl-3 col-lg-3">
                                <div class="card mb-4 progress-banner">
                                        <a href="<?php echo URL.'history/index/EA/#EA_GNFC_INR' ?>" class="card-body justify-content-between d-flex flex-row align-items-center">
                                                <div>
                                                    <h5 class="text-white"><?php echo $d['EA_GNFC_INR']; ?></h5>
                                                    <p class="text-white"><?php echo $marketing[0]['EA_GNFC_INR']; ?>&nbsp; <?php echo $d['INR_T']; ?></p>
                                                </div>
                                            <div>
                                                    <i class="iconsmind-Line-Chart mr-2 text-white align-text-bottom d-inline-block"></i>
                                            </div>
                                        </a>
                                    </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="card mb-4 progress-banner">
                                        <a href="<?php echo URL.'history/index/EA/#AA_GNFC_INR' ?>" class="card-body justify-content-between d-flex flex-row align-items-center">
                                                <div>
                                                    <h5 class="text-white"><?php echo $d['AA_GNFC_INR']; ?></h5>
                                                    <p class="text-white"><?php echo $marketing[0]['AA_GNFC_INR']; ?>&nbsp; <?php echo $d['INR_T']; ?></p>
                                                </div>
                                            <div>
                                                    <i class="iconsmind-Line-Chart mr-2 text-white align-text-bottom d-inline-block"></i>
                                            </div>
                                        </a>
                                    </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                    <div class="card mb-4 progress-banner">
                                            <a href="<?php echo URL.'history/index/EA/#EA_ICIS_USD' ?>" class="card-body justify-content-between d-flex flex-row align-items-center">
                                                    <div>
                                                        <h5 class="text-white"><?php echo $d['EA_ICIS_USD']; ?></h5>
                                                        <p class="text-white"><?php echo $marketing[0]['EA_ICIS_USD']; ?>&nbsp; <?php echo $d['USD_T']; ?></p>
                                                    </div>
                                                <div>
                                                        <i class="iconsmind-Line-Chart mr-2 text-white align-text-bottom d-inline-block"></i>
                                                </div>
                                            </a>
                                        </div>
                                </div>
                                <div class="col-xl-3 col-lg-3">
                                    <div class="card mb-4 progress-banner">
                                            <a href="<?php echo URL.'history/index/EA/#AA_ICIS_USD' ?>" class="card-body justify-content-between d-flex flex-row align-items-center">
                                                    <div>
                                                        <h5 class="text-white"><?php echo $d['AA_ICIS_USD']; ?></h5>
                                                        <p class="text-white"><?php echo $marketing[0]['AA_ICIS_USD']; ?>&nbsp; <?php echo $d['USD_T']; ?></p>
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
            <div class="row">
                <div class="col-xl-8 col-lg-8 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Production</h5>
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
                                            <p class="list-item-heading"><?php echo $d['COAL_STEAM_ratio']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $production[0]['COAL_STEAM_ratio']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['POWER_INR']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $production[0]['POWER_INR']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['SDS_norm']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $production[0]['SDS_norm']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['AA_norm']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $production[0]['AA_norm']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['STEAM_norm']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $production[0]['STEAM_norm']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['POWER_norm']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $production[0]['POWER_norm']; ?></p>
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['STEAM_INR']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $business[0]['STEAM_INR']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    
                                    

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 col-lg-4">
                        
                </div>
                
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-8 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Marketing</h5>
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
                                            <p class="list-item-heading"><?php echo $d['AA_GNFC_INR']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $marketing[0]['AA_GNFC_INR']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                            
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['EA_GNFC_INR']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $marketing[0]['EA_GNFC_INR']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                            
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['AA_ICIS_USD']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $marketing[0]['AA_ICIS_USD']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                            
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['EA_ICIS_USD']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $marketing[0]['EA_ICIS_USD']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['USD_INR_marketing']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $marketing[0]['USD_INR_marketing']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td>
                                            <p class="list-item-heading"><?php echo $marketing[0]['C1']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $marketing[0]['C1_EA_INR']; ?></p>
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        
                                        <td>
                                            <p class="list-item-heading"><?php echo $marketing[0]['C2']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $marketing[0]['C2_EA_INR']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td>
                                            <p class="list-item-heading"><?php echo $marketing[0]['C3']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $marketing[0]['C3_EA_INR']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    
                                    

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- <div class="col-xs-4 col-lg-4">
                        <div class="col-xl-12 col-lg-12">
                                <div class="card mb-4 progress-banner">
                                        <a href="#" class="card-body justify-content-between d-flex flex-row align-items-center">
                                                <div>
                                                    <p class="lead text-white">SDS</p>
                                                    <p class="text-white">INR 50000</p>
                                                </div>
                                            <div>
                                                    <i class="iconsmind-Line-Chart mr-2 text-white align-text-bottom d-inline-block"></i>
                                            </div>
                                        </a>
                                    </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card mb-4 progress-banner">
                                        <a href="#" class="card-body justify-content-between d-flex flex-row align-items-center">
                                                <div>
                                                    <p class="lead text-white">AA</p>
                                                    <p class="text-white">INR 40000</p>
                                                </div>
                                            <div>
                                                    <i class="iconsmind-Line-Chart mr-2 text-white align-text-bottom d-inline-block"></i>
                                            </div>
                                        </a>
                                    </div>
                            </div>
                </div> -->
            </div>



        </div>
    </main>
