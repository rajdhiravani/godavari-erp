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
                                    <label class="col-sm-3 col-form-label"><?php echo $d['timestamp_procurement']; ?></label>
                                    <label class="col-sm-6 col-form-label"><?php echo  date('d-m-Y H:i:s',$procurement[0]['timestamp_procurement']); ?></label>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h3>SDS</h3>
                    <div class="card mb-4">
                        <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['SDS_USD_INR_procurement']; ?></label>
                                    <div class="col-sm-6">
                                            <input type="text" class="form-control" name="SDS_USD_INR_procurement" id="SDS_USD_INR_procurement" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['SDS_USD']; ?></label>
                                    <div class="col-sm-6">
                                            <select class="form-control" name="SDS_USD" id="SDS_USD">
                                                <option selected>300</option><option>310</option><option>320</option><option>330</option><option>340</option><option>350</option><option>360</option><option>370</option><option>380</option><option>390</option><option>400</option><option>410</option><option>420</option><option>430</option><option>440</option><option>450</option><option>460</option><option>470</option><option>480</option><option>490</option><option>500</option><option>510</option><option>520</option><option>530</option><option>540</option><option>550</option><option>560</option><option>570</option><option>580</option><option>590</option><option>600</option><option>610</option><option>620</option><option>630</option><option>640</option><option>650</option><option>660</option><option>670</option><option>680</option><option>690</option><option>700</option><option>710</option><option>720</option><option>730</option><option>740</option><option>750</option><option>760</option><option>770</option><option>780</option><option>790</option><option>800</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['SDS_USD_other']; ?></label>
                                    <div class="col-sm-6">
                                            <select class="form-control" name="SDS_USD_other" id="SDS_USD_other">
                                                <option selected>30</option><option>30</option><option>35</option><option>40</option><option>45</option><option>50</option><option>55</option><option>60</option><option>65</option><option>70</option><option>75</option><option>80</option><option>85</option><option>90</option><option>95</option><option>100</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['SDS_USD_landed']; ?></label>
                                    <div class="col-sm-6">
                                            <input type="text" class="form-control" name="SDS_USD_landed" id="SDS_USD_landed" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['SDS_INR_landed']; ?></label>
                                    <div class="col-sm-6">
                                            <input type="text" class="form-control" name="SDS_INR_landed" id="SDS_INR_landed" readonly>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                <h3>AA</h3>
                    <div class="card mb-4">
                        <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['AA_USD_INR_procurement']; ?></label>
                                    <div class="col-sm-6">
                                            <input type="text" class="form-control" name="AA_USD_INR_procurement" id="AA_USD_INR_procurement" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['AA_USD']; ?></label>
                                    <div class="col-sm-6">
                                            <select class="form-control" name="AA_USD" id="AA_USD">
                                                <option selected>200</option><option>210</option><option>220</option><option>230</option><option>240</option><option>250</option><option>260</option><option>270</option><option>280</option><option>290</option><option>300</option><option>310</option><option>320</option><option>330</option><option>340</option><option>350</option><option>360</option><option>370</option><option>380</option><option>390</option><option>400</option><option>410</option><option>420</option><option>430</option><option>440</option><option>450</option><option>460</option><option>470</option><option>480</option><option>490</option><option>500</option><option>510</option><option>520</option><option>530</option><option>540</option><option>550</option><option>560</option><option>570</option><option>580</option><option>590</option><option>600</option><option>610</option><option>620</option><option>630</option><option>640</option><option>650</option><option>660</option><option>670</option><option>680</option><option>690</option><option>700</option><option>710</option><option>720</option><option>730</option><option>740</option><option>750</option><option>760</option><option>770</option><option>780</option><option>790</option><option>800</option><option>810</option><option>820</option><option>830</option><option>840</option><option>850</option><option>860</option><option>870</option><option>880</option><option>890</option><option>900</option><option>910</option><option>920</option><option>930</option><option>940</option><option>950</option><option>960</option><option>970</option><option>980</option><option>990</option><option>1000</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['AA_USD_other']; ?></label>
                                    <div class="col-sm-6">
                                            <select class="form-control" name="AA_USD_other" id="AA_USD_other">
                                            <option selected>30</option><option>30</option><option>35</option><option>40</option><option>45</option><option>50</option><option>55</option><option>60</option><option>65</option><option>70</option><option>75</option><option>80</option><option>85</option><option>90</option><option>95</option><option>100</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['AA_USD_landed']; ?></label>
                                    <div class="col-sm-6">
                                            <input type="text" class="form-control" name="AA_USD_landed" id="AA_USD_landed" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['AA_INR_landed']; ?></label>
                                    <div class="col-sm-6">
                                            <input type="text" class="form-control" name="AA_INR_landed" id="AA_INR_landed" readonly>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                                
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label"><?php echo $d['COAL_INR_landed']; ?></label>
                                    <div class="col-sm-6">
                                            <input type="text" class="form-control" name="COAL_INR_landed" id="COAL_INR_landed" required>
                                    </div>
                                </div>
                                
                                <div class="form-group row mb-0">
                                    <div class="col-sm-6">
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
        $("#SDS_USD_landed").val(parseInt($("#SDS_USD").val())+parseInt($("#SDS_USD_other").val()));
        $("#SDS_INR_landed").val(parseInt($("#SDS_USD_landed").val())*parseInt($("#SDS_USD_INR_procurement").val()));

        $("#AA_USD_landed").val(parseInt($("#AA_USD").val())+parseInt($("#AA_USD_other").val()));
        $("#AA_INR_landed").val(parseInt($("#AA_USD_landed").val())*parseInt($("#AA_USD_INR_procurement").val()));
    });
</script>