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
                                    <h5 class="d-inline"><?php echo $d['SDS_INR_landed']; ?></h5>
                                </div>
                            </div>
                            
                        </div>
                        <div class="chart card-body pt-0">
                                <div id="SDS_INR_landed" ></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline"><?php echo $d['AA_INR_landed']; ?></h5>
                                </div>
                            </div>
                            
                        </div>
                        <div class="chart card-body pt-0">
                                <div id="AA_INR_landed" ></div>
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
      
      google.charts.setOnLoadCallback(SDS_INR_landed);
      google.charts.setOnLoadCallback(AA_INR_landed);
      google.charts.setOnLoadCallback(COAL_INR_landed);
      

     
    function SDS_INR_landed() {
        var SDS_INR_landed_data = google.visualization.arrayToDataTable([
          ['day', '<?php echo $d["SDS_INR_landed"];?>'], 
          <?php foreach($procurement as $b){
              echo "['".date('d-m',$b['timestamp_procurement'])."',  ".$b['SDS_INR_landed']." ],";
          } ?>
        ]);
        var options = {
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var SDS_INR_landed_chart = new google.visualization.LineChart(document.getElementById('SDS_INR_landed'));
        SDS_INR_landed_chart.draw(SDS_INR_landed_data, options);
    }
    function AA_INR_landed() {
        var AA_INR_landed_data = google.visualization.arrayToDataTable([
          ['day', '<?php echo $d["AA_INR_landed"];?>'], 
          <?php foreach($procurement as $b){
              echo "['".date('d-m',$b['timestamp_procurement'])."',  ".$b['AA_INR_landed']." ],";
          } ?>
        ]);
        var options = {
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var AA_INR_landed_chart = new google.visualization.LineChart(document.getElementById('AA_INR_landed'));
        AA_INR_landed_chart.draw(AA_INR_landed_data, options);
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