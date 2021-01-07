    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Dashboard</h1>
                    
                    <div class="separator mb-5"></div>
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
                                        <a href="<?php echo URL.'history/index/EA/#STEAM_norm' ?>" class="card-body justify-content-between d-flex flex-row align-items-center">
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
                                            <a href="<?php echo URL.'history/index/EA/#POWER_norm' ?>" class="card-body justify-content-between d-flex flex-row align-items-center">
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
                
                
            </div>
            



        </div>
    </main>
