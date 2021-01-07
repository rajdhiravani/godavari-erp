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
                                    <h5 class="d-inline"><?php echo $d['STEAM_INR']; ?></h5>
                                </div>
                            </div>
                            
                        </div>
                        <div class="chart card-body pt-0">
                                <div id="STEAM_INR" ></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline"><?php echo $d['POWER_INR']; ?></h5>
                                </div>
                            </div>
                            
                        </div>
                        <div class="chart card-body pt-0">
                                <div id="POWER_INR" ></div>
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
                                    <h5 class="d-inline"><?php echo $d['STEAM_norm']; ?></h5>
                                </div>
                            </div>
                            
                        </div>
                        <div class="chart card-body pt-0">
                                <div id="STEAM_norm" ></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline"><?php echo $d['POWER_norm']; ?></h5>
                                </div>
                            </div>
                            
                        </div>
                        <div class="chart card-body pt-0">
                                <div id="POWER_norm" ></div>
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
                                    <h5 class="d-inline"><?php echo $d['COAL_INR_landed']; ?></h5>
                                </div>
                            </div>
                            
                        </div>
                        <div class="chart card-body pt-0">
                                <div id="COAL_INR_landed" ></div>
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
      
      google.charts.setOnLoadCallback(STEAM_INR);
      google.charts.setOnLoadCallback(POWER_INR);
      google.charts.setOnLoadCallback(STEAM_norm);
      google.charts.setOnLoadCallback(POWER_norm);
      google.charts.setOnLoadCallback(COAL_INR_landed);

      

    function STEAM_INR() {
        var STEAM_INR_data = google.visualization.arrayToDataTable([
          ['day', '<?php echo $d["STEAM_INR"];?>'], 
          <?php foreach($business as $b){
              echo "['".date('d-m',$b['timestamp_business'])."',  ".$b['STEAM_INR']." ],";
          } ?>
        ]);
        var options = {
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var STEAM_INR_chart = new google.visualization.LineChart(document.getElementById('STEAM_INR'));
        STEAM_INR_chart.draw(STEAM_INR_data, options);
    }
    function STEAM_norm() {
        var STEAM_norm_data = google.visualization.arrayToDataTable([
          ['day', '<?php echo $d["STEAM_norm"];?>'], 
          <?php foreach($production as $b){
              echo "['".date('d-m',$b['timestamp_production'])."',  ".$b['STEAM_norm']." ],";
          } ?>
        ]);
        var options = {
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var STEAM_norm_chart = new google.visualization.LineChart(document.getElementById('STEAM_norm'));
        STEAM_norm_chart.draw(STEAM_norm_data, options);
    }
    function POWER_INR() {
        var POWER_INR_data = google.visualization.arrayToDataTable([
          ['day', '<?php echo $d["POWER_INR"];?>'], 
          <?php foreach($production as $b){
              echo "['".date('d-m',$b['timestamp_production'])."',  ".$b['POWER_INR']." ],";
          } ?>
        ]);
        var options = {
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var POWER_INR_chart = new google.visualization.LineChart(document.getElementById('POWER_INR'));
        POWER_INR_chart.draw(POWER_INR_data, options);
    }
    function POWER_norm() {
        var POWER_norm_data = google.visualization.arrayToDataTable([
          ['day', '<?php echo $d["POWER_norm"];?>'], 
          <?php foreach($production as $b){
              echo "['".date('d-m',$b['timestamp_production'])."',  ".$b['POWER_norm']." ],";
          } ?>
        ]);
        var options = {
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var POWER_norm_chart = new google.visualization.LineChart(document.getElementById('POWER_norm'));
        POWER_norm_chart.draw(POWER_norm_data, options);
    }
    function COAL_INR_landed() {
        var COAL_INR_landed_data = google.visualization.arrayToDataTable([
          ['day', '<?php echo $d["COAL_INR_landed"];?>'], 
          <?php foreach($procurement as $b){
              echo "['".date('d-m',$b['timestamp_procurement'])."',  ".$b['COAL_INR_landed']." ],";
          } ?>
        ]);
        var options = {
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var COAL_INR_landed_chart = new google.visualization.LineChart(document.getElementById('COAL_INR_landed'));
        COAL_INR_landed_chart.draw(COAL_INR_landed_data, options);
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