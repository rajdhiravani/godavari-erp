    <main>
        <div class="container-fluid">
            <div class="row  ">
                <div class="col-12">

                    <h1>History</h1>
                    
                    <div class="separator mb-5"></div>
                </div>
            </div>

          
            <div class="row">
                
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline"><?php echo $d['EA_INR_SP']; ?></h5>
                                </div>
                            </div>
                            
                        </div>
                        <div class="chart card-body pt-0">
                                <div id="EA_INR_SP" ></div>
                        </div>
                    </div>
                </div>

                
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline"><?php echo $d['AA_GNFC_INR']; ?></h5>
                                </div>
                            </div>
                            
                        </div>
                        <div class="chart card-body pt-0">
                                <div id="AA_GNFC_INR" ></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline"><?php echo $d['EA_GNFC_INR']; ?></h5>
                                </div>
                            </div>
                            
                        </div>
                        <div class="chart card-body pt-0">
                                <div id="EA_GNFC_INR" ></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline"><?php echo $d['AA_ICIS_USD']; ?></h5>
                                </div>
                            </div>
                            
                        </div>
                        <div class="chart card-body pt-0">
                                <div id="AA_ICIS_USD" ></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline"><?php echo $d['EA_ICIS_USD']; ?></h5>
                                </div>
                            </div>
                            
                        </div>
                        <div class="chart card-body pt-0">
                                <div id="EA_ICIS_USD" ></div>
                        </div>
                    </div>
                </div>
            </div>





         
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </main>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      
      google.charts.setOnLoadCallback(EA_INR_SP);
      google.charts.setOnLoadCallback(AA_GNFC_INR);
      google.charts.setOnLoadCallback(EA_GNFC_INR);
      google.charts.setOnLoadCallback(AA_ICIS_USD);
      google.charts.setOnLoadCallback(EA_ICIS_USD);
      

      function EA_INR_SP() {
        var EA_INR_SP_data = google.visualization.arrayToDataTable([
          ['day', '<?php echo $d["EA_INR_SP"];?>'], 
          <?php foreach($business as $b){
              echo "['".date('d-m',$b['timestamp_business'])."',  ".$b['EA_INR_SP']." ],";
          } ?>
        ]);
        var options = {
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var EA_INR_SP_chart = new google.visualization.LineChart(document.getElementById('EA_INR_SP'));
        EA_INR_SP_chart.draw(EA_INR_SP_data, options);
      }
    function AA_GNFC_INR() {
        var AA_GNFC_INR_data = google.visualization.arrayToDataTable([
          ['day', '<?php echo $d["AA_GNFC_INR"];?>'], 
          <?php foreach($marketing as $b){
              echo "['".date('d-m',$b['timestamp_marketing'])."',  ".$b['AA_GNFC_INR']." ],";
          } ?>
        ]);
        var options = {
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var AA_GNFC_INR_chart = new google.visualization.LineChart(document.getElementById('AA_GNFC_INR'));
        AA_GNFC_INR_chart.draw(AA_GNFC_INR_data, options);
    }
    function EA_GNFC_INR() {
        var EA_GNFC_INR_data = google.visualization.arrayToDataTable([
          ['day', '<?php echo $d["EA_GNFC_INR"];?>'], 
          <?php foreach($marketing as $b){
              echo "['".date('d-m',$b['timestamp_marketing'])."',  ".$b['EA_GNFC_INR']." ],";
          } ?>
        ]);
        var options = {
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var EA_GNFC_INR_chart = new google.visualization.LineChart(document.getElementById('EA_GNFC_INR'));
        EA_GNFC_INR_chart.draw(EA_GNFC_INR_data, options);
    }
    function AA_ICIS_USD() {
        var AA_ICIS_USD_data = google.visualization.arrayToDataTable([
          ['day', '<?php echo $d["AA_ICIS_USD"];?>'], 
          <?php foreach($marketing as $b){
              echo "['".date('d-m',$b['timestamp_marketing'])."',  ".$b['AA_ICIS_USD']." ],";
          } ?>
        ]);
        var options = {
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var AA_ICIS_USD_chart = new google.visualization.LineChart(document.getElementById('AA_ICIS_USD'));
        AA_ICIS_USD_chart.draw(AA_ICIS_USD_data, options);
    }
    function EA_ICIS_USD() {
        var EA_ICIS_USD_data = google.visualization.arrayToDataTable([
          ['day', '<?php echo $d["EA_ICIS_USD"];?>'], 
          <?php foreach($marketing as $b){
              echo "['".date('d-m',$b['timestamp_marketing'])."',  ".$b['EA_ICIS_USD']." ],";
          } ?>
        ]);
        var options = {
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var EA_ICIS_USD_chart = new google.visualization.LineChart(document.getElementById('EA_ICIS_USD'));
        EA_ICIS_USD_chart.draw(EA_ICIS_USD_data, options);
    }

     // The function actually applying the offset
function offsetAnchor() {
  if (location.hash.length !== 0) {
    window.scrollTo(window.scrollX, window.scrollY - 400);
  }
}

// Captures click events of all <a> elements with href starting with #
$(document).on('click', 'a[href^="#"]', function(event) {
  // Click events are captured before hashchanges. Timeout
  // causes offsetAnchor to be called after the page jump.
  window.setTimeout(function() {
    offsetAnchor();
  }, 0);
});

// Set the offset when entering page with hash present in the url
window.setTimeout(offsetAnchor, 0);
    </script>