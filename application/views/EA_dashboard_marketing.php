<main>
        <div class="container-fluid">
            <div class="row  ">
                <div class="col-12">

                    <h1>Dashboard</h1>
                    
                    <div class="separator mb-5"></div>

                            <div class="row">
                           
                                <div class="col-xl-6 col-lg-6">
                                    <div class="card mb-4 progress-banner-white">
                                            <a href="<?php echo URL.'history/index/EA/#EA_INR_SP'; ?>" class="card-body justify-content-between d-flex flex-row align-items-center">
                                                    <div>
                                                        <p class="lead"><?php echo $d['EA_INR_SP']; ?></p>
                                                        <p class=""><?php echo $business[0]['EA_INR_SP']; ?></p>
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
                            <div class="col-xl-3 col-lg-3">
                                <div class="card mb-4 progress-banner">
                                        <a href="<?php echo URL.'history/index/EA/#EA_GNFC_INR' ?>" class="card-body justify-content-between d-flex flex-row align-items-center">
                                                <div>
                                                    <h5 class="text-white"><?php echo $d['EA_GNFC_INR']; ?></h5>
                                                    <p class="text-white"><?php echo $marketing[0]['EA_GNFC_INR']; ?></p>
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
                                                    <p class="text-white"><?php echo $marketing[0]['AA_GNFC_INR']; ?></p>
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
                                                        <p class="text-white"><?php echo $marketing[0]['EA_ICIS_USD']; ?></p>
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
                                                        <p class="text-white"><?php echo $marketing[0]['AA_ICIS_USD']; ?></p>
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
                
            
            </div>



        </div>
    </main>
