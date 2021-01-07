<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Input</h1>
                    
                    <div class="separator mb-5"></div>


                </div>
            </div>
            <form method="post" action="<?php echo URL.'input/add/EA'; ?>" id="myForm">
            <div class="row">
            
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"><?php echo $d['timestamp_marketing']; ?></label>
                                    <label class="col-sm-8 col-form-label"><?php echo date('d-m-Y H:i:s',$marketing[0]['timestamp_marketing']); ?></label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"><?php echo $d['EA_QTY_SELL']; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="EA_QTY_SELL" id="EA_QTY_SELL" required>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-6">
                        <h5>Domestic</h5>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['EA_DOM_DRUM_QTY']; ?></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="EA_DOM_DRUM_QTY" id="EA_DOM_DRUM_QTY" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['EA_DOM_DRUM_INR']; ?></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="EA_DOM_DRUM_INR" id="EA_DOM_DRUM_INR" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['EA_DOM_TANKER_QTY']; ?></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="EA_DOM_TANKER_QTY" id="EA_DOM_TANKER_QTY" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['EA_DOM_TANKER_INR']; ?></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="EA_DOM_TANKER_INR" id="EA_DOM_TANKER_INR" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['EA_DOM_TOTAL_DRUM_INR']; ?></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="EA_DOM_TOTAL_DRUM_INR" id="EA_DOM_TOTAL_DRUM_INR" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['EA_DOM_TOTAL_TANKER_INR']; ?></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="EA_DOM_TOTAL_TANKER_INR" id="EA_DOM_TOTAL_TANKER_INR" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['EA_DOM_TOTAL_INR']; ?></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="EA_DOM_TOTAL_INR" id="EA_DOM_TOTAL_INR" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['EA_DOM_AVG_INR']; ?></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="EA_DOM_AVG_INR" id="EA_DOM_AVG_INR" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h5>Export</h5>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['EA_EXP_DRUM_QTY']; ?></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="EA_EXP_DRUM_QTY" id="EA_EXP_DRUM_QTY" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['EA_EXP_DRUM_INR']; ?></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="EA_EXP_DRUM_INR" id="EA_EXP_DRUM_INR" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['EA_EXP_TANKER_QTY']; ?></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="EA_EXP_TANKER_QTY" id="EA_EXP_TANKER_QTY" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['EA_EXP_TANKER_INR']; ?></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="EA_EXP_TANKER_INR" id="EA_EXP_TANKER_INR" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['EA_EXP_TOTAL_DRUM_INR']; ?></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="EA_EXP_TOTAL_DRUM_INR" id="EA_EXP_TOTAL_DRUM_INR" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['EA_EXP_TOTAL_TANKER_INR']; ?></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="EA_EXP_TOTAL_TANKER_INR" id="EA_EXP_TOTAL_TANKER_INR" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['EA_EXP_TOTAL_INR']; ?></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="EA_EXP_TOTAL_INR" id="EA_EXP_TOTAL_INR" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['EA_EXP_AVG_INR']; ?></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="EA_EXP_AVG_INR" id="EA_EXP_AVG_INR" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            
                                
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"><?php echo $d['EA_SALE_actual']; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="EA_SALE_actual" id="EA_SALE_actual" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"><?php echo $d['EA_SP_actual']; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="EA_SP_actual" id="EA_SP_actual" readonly>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"><?php echo $d['AA_GNFC_INR']; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="AA_GNFC_INR" id="AA_GNFC_INR" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"><?php echo $d['EA_GNFC_INR']; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="EA_GNFC_INR" id="EA_GNFC_INR" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"><?php echo $d['AA_ICIS_USD']; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="AA_ICIS_USD" id="AA_ICIS_USD" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"><?php echo $d['EA_ICIS_USD']; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="EA_ICIS_USD" id="EA_ICIS_USD" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"><?php echo $d['USD_INR_marketing']; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="USD_INR_marketing" id="USD_INR_marketing" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"><?php echo $d['C1']; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="C1" id="C1" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"><?php echo $d['C1_EA_INR']; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="C1_EA_INR" id="C1_EA_INR" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"><?php echo $d['C2']; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="C2" id="C2" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"><?php echo $d['C2_EA_INR']; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="C2_EA_INR" id="C2_EA_INR" >
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"><?php echo $d['C3']; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="C3" id="C3" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"><?php echo $d['C3_EA_INR']; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="C3_EA_INR" id="C3_EA_INR" >
                                    </div>
                                </div>
                                
                                <div class="form-group row mb-0">
                                    <div class="col-sm-8">
                                        <button type="submit" class="btn btn-primary mb-0">Submit</button>
                                    </div>
                                </div>
                            
                        </div>
                    </div>

                </div>
            </div>
            </form>
        </div>
    </main>

<script>
    $("form").on('input',function() {
        $("#EA_DOM_TOTAL_DRUM_INR").val(parseInt($("#EA_DOM_DRUM_QTY").val())*parseInt($("#EA_DOM_DRUM_INR").val()));
        $("#EA_DOM_TOTAL_TANKER_INR").val(parseInt($("#EA_DOM_TANKER_QTY").val())*parseInt($("#EA_DOM_TANKER_INR").val()));
        $("#EA_DOM_TOTAL_INR").val(parseInt($("#EA_DOM_TOTAL_DRUM_INR").val())+parseInt($("#EA_DOM_TOTAL_TANKER_INR").val()));
        $("#EA_DOM_AVG_INR").val( (parseInt($("#EA_DOM_TOTAL_DRUM_INR").val())+parseInt($("#EA_DOM_TOTAL_TANKER_INR").val()) ) / ( parseInt($("#EA_DOM_DRUM_QTY").val()) + parseInt($("#EA_DOM_TANKER_QTY").val()) ) );

        $("#EA_EXP_TOTAL_DRUM_INR").val(parseInt($("#EA_EXP_DRUM_QTY").val())*parseInt($("#EA_EXP_DRUM_INR").val()));
        $("#EA_EXP_TOTAL_TANKER_INR").val(parseInt($("#EA_EXP_TANKER_QTY").val())*parseInt($("#EA_EXP_TANKER_INR").val()));
        $("#EA_EXP_TOTAL_INR").val(parseInt($("#EA_EXP_TOTAL_DRUM_INR").val())+parseInt($("#EA_EXP_TOTAL_TANKER_INR").val()));
        $("#EA_EXP_AVG_INR").val( (parseInt($("#EA_EXP_TOTAL_DRUM_INR").val())+parseInt($("#EA_EXP_TOTAL_TANKER_INR").val()) ) / ( parseInt($("#EA_EXP_DRUM_QTY").val()) + parseInt($("#EA_EXP_TANKER_QTY").val()) ) );
        
        $("#EA_SALE_actual").val(parseInt($("#EA_DOM_TOTAL_INR").val())+parseInt($("#EA_EXP_TOTAL_INR").val()));

        var x = (parseInt($("#EA_DOM_DRUM_QTY").val()) + parseInt($("#EA_DOM_TANKER_QTY").val())) * parseInt($("#EA_DOM_AVG_INR").val());
        var y = (parseInt($("#EA_EXP_DRUM_QTY").val()) + parseInt($("#EA_EXP_TANKER_QTY").val())) * parseInt($("#EA_EXP_AVG_INR").val());
        $("#EA_SP_actual").val((x+y) / ( (parseInt($("#EA_DOM_DRUM_QTY").val()) + parseInt($("#EA_DOM_TANKER_QTY").val())) + (parseInt($("#EA_EXP_DRUM_QTY").val()) + parseInt($("#EA_EXP_TANKER_QTY").val()))));

    });
</script>