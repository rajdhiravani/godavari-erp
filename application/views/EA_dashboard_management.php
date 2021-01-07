<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Dashboard</h1>
                    
                    <div class="separator mb-5"></div>
                </div>
                
            </div>

            
            
            <div class="row">
                <div class="col-xl-8 col-lg-8 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            
                            <table class="data-table responsive nowrap" data-order="[[ 1, &quot;desc&quot; ]]">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Actual</th>
                                        <!-- <th>Budgeted</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['EA_SALE_actual']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $marketing[0]['EA_SALE_actual']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['EA_SP_actual']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $marketing[0]['EA_SP_actual']; ?></p>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading"><?php echo $d['EA_INR_margin']; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $business[0]['EA_INR_margin']; ?></p>
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
