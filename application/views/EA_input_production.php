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
                                    <label class="col-sm-2 col-form-label"><?php echo $d['timestamp_production']; ?></label>
                                    <div class="col-sm-10">
                                    <label class="col-sm-2 col-form-label"><?php echo date('d-m-Y H:i:s',$production[0]['timestamp_production']); ?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['COAL_STEAM_ratio']; ?></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="COAL_STEAM_ratio" id="COAL_STEAM_ratio" required>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['POWER_INR']; ?></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="POWER_INR" id="POWER_INR" required> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['OTHER_INR']; ?></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="OTHER_INR" id="OTHER_INR" required> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['SDS_norm']; ?></label>
                                    <div class="col-sm-10">
                                            <select class="form-control" name="SDS_norm" id="SDS_norm">
                                                <option selected>0.700</option><option>0.701</option><option>0.702</option><option>0.703</option><option>0.704</option><option>0.705</option><option>0.706</option><option>0.707</option><option>0.708</option><option>0.709</option><option>0.710</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['AA_norm']; ?></label>
                                    <div class="col-sm-10">
                                            <select class="form-control" name="AA_norm" id="AA_norm">
                                                <option>0.690</option><option>0.691</option><option>0.692</option><option>0.693</option><option>0.694</option><option>0.695</option><option>0.696</option><option>0.697</option><option>0.698</option><option>0.699</option><option>0.700</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['STEAM_norm']; ?></label>
                                    <div class="col-sm-10">
                                            <select class="form-control" name="STEAM_norm" id="STEAM_norm">
                                            <option>2.10</option><option>2.15</option><option>2.2</option><option>2.25</option><option>2.3</option><option>2.35</option><option>2.4</option><option>2.45</option><option>2.5</option><option>2.55</option><option>2.6</option><option>2.65</option><option>2.7</option><option>2.75</option><option>2.8</option><option>2.85</option><option>2.9</option><option>2.95</option><option>3</option><option>3.05</option><option>3.1</option><option>3.15</option><option>3.2</option><option>3.25</option><option>3.3</option><option>3.35</option><option>3.4</option><option>3.45</option><option>3.50</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['POWER_norm']; ?></label>
                                    <div class="col-sm-10">
                                            <select class="form-control" name="POWER_norm" id="POWER_norm">
                                                <option>110</option><option>115</option><option>120</option><option>125</option><option>130</option><option>135</option><option>140</option><option>145</option><option>150</option><option>155</option><option>160</option><option>165</option><option>170</option><option>175</option><option>180</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><?php echo $d['OTHER_norm']; ?></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="OTHER_norm" id="OTHER_norm" required> 
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