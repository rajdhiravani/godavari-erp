<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Input</h1>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="row">

                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form method="post" action="<?php echo URL.'input/add/EA'; ?>" id="myForm">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['timestamp_procurement']; ?></label>
                                    <div class="col-sm-10">
                                    <label class="col-sm-2 col-form-label"><?php echo  date('d-m-Y H:i:s',$procurement[0]['timestamp_procurement']); ?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['timestamp_production']; ?></label>
                                    <div class="col-sm-10">
                                    <label class="col-sm-2 col-form-label"><?php echo date('d-m-Y H:i:s',$production[0]['timestamp_production']); ?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['timestamp_marketing']; ?></label>
                                    <div class="col-sm-10">
                                    <label class="col-sm-2 col-form-label"><?php echo date('d-m-Y H:i:s',$marketing[0]['timestamp_marketing']); ?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['SDS_INR_landed']; ?></label>
                                    <div class="col-sm-10">
                                    <label class="col-sm-2 col-form-label"><?php echo $procurement[0]['SDS_INR_landed']; ?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['AA_INR_landed']; ?></label>
                                    <div class="col-sm-10">
                                    <label class="col-sm-2 col-form-label"><?php echo $procurement[0]['AA_INR_landed']; ?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['STEAM_INR']; ?></label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" name="STEAM_INR" id="STEAM_INR" readonly value="<?php echo (float)$procurement[0]['COAL_INR_landed'] / (float)$production[0]['COAL_STEAM_ratio']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['STEAM_norm']; ?></label>
                                    <div class="col-sm-10">
                                    <label class="col-sm-2 col-form-label"><?php echo $production[0]['STEAM_norm']; ?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['POWER_INR']; ?></label>
                                    <div class="col-sm-10">
                                    <label class="col-sm-2 col-form-label"><?php echo $production[0]['POWER_INR']; ?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['POWER_norm']; ?></label>
                                    <div class="col-sm-10">
                                    <label class="col-sm-2 col-form-label"><?php echo $production[0]['POWER_norm']; ?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['EA_INR_CP']; ?></label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" name="EA_INR_CP" id="EA_INR_CP" readonly value="<?php echo ((float)$procurement[0]['SDS_INR_landed'] * 0.705) + ((float) $procurement[0]['AA_INR_landed'] * 0.695 ) + (((float)$procurement[0]['COAL_INR_landed'] / (float)$production[0]['COAL_STEAM_ratio']) * (float)$production[0]['STEAM_norm']) + ((float)$production[0]['POWER_INR']*(float)$production[0]['POWER_norm']) ; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['EA_INR_margin']; ?></label>
                                    <div class="col-sm-10">
                                            <select class="form-control" name="EA_INR_margin" id="EA_INR_margin">
                                                <option>-5000</option><option>-4500</option><option>-4000</option><option>-3500</option><option>-3000</option><option>-2500</option><option>-2000</option><option>-1500</option><option>-1000</option><option>-500</option><option selected>0</option><option>500</option><option>1000</option><option>1500</option><option>2000</option><option>2500</option><option>3000</option><option>3500</option><option>4000</option><option>4500</option><option>5000</option><option>5500</option><option>6000</option><option>6500</option><option>7000</option><option>7500</option><option>8000</option><option>8500</option><option>9000</option><option>9500</option><option>10000</option><option>10500</option><option>11000</option><option>11500</option><option>12000</option><option>12500</option><option>13000</option><option>13500</option><option>14000</option><option>14500</option><option>15000</option>
                                            </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['EA_INR_SP']; ?></label>
                                    <div class="col-sm-10">
                                            <input type="text" class="form-control" name="EA_INR_SP" id="EA_INR_SP" readonly>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group row mb-0">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary mb-0">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                   

                    


                </div>
            </div>
        </div>
    </main>

<script>
    $("#myForm")
    .on("input", function() {
        $("#EA_INR_SP").val(parseFloat($("#EA_INR_CP").val()) + parseFloat($("#EA_INR_margin").val()));
       
    });
</script>