<?php
  extract($_GET);
  // index.php?id=ML001&week=1&desc=true
  if(isset($id)){
    if($id=="ML001"){
    // Get title, summary of course based on id
    // Get week1, week2, week3, final week description (meta data - title(say CNN), summary)
    // 
    }
  }
  else{
  print("Invalid page");
  header("Location: http://localhost/webtechproject/index.html");
  }
?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            

           
       

            <!-- Nav Item - User Information -->
          

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Course Cost</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Number of reviews</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="no_reviews">Nan</div>
                        
                        <script>
                     
                     var id = "<?php echo $id;?>";
                 
                     no_getreviews =function(){
                         
                       no_detailsrev=[]
                        if(no_xhrrev.readyState==4 && no_xhrrev.status==200)
                            {
                                no_resrev = JSON.parse(no_xhrrev.response)
                                
                                console.log(no_resrev["reviews"].length);
                                document.getElementById("no_reviews").innerHTML=no_resrev["reviews"].length
                                
                     };
                     }
                     var no_xhrrev = new XMLHttpRequest;
                    no_xhrrev.onreadystatechange = no_getreviews;
                    no_xhrrev.open("GET","http://127.0.0.1:5000/getcoursereviews?id="+id,true);
                    no_xhrrev.send();
                     
                     
                 </script>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Sentiment Analysis</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                 
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<div id="chartContainer" style="height: 370px; width: 100%;">
    <script>
    var res;
     getDetails =function(){
        positive=[];
        negative=[];
        if(xhr.readyState==4 && xhr.status==200)
            {
                res = JSON.parse(xhr.response)
                console.log(res["reviews"].length);
                for (var i = 0; i < res["reviews"].length; i++) {
                    console.log(res["reviews"][i]);
                    temp_pos = {x:new Date(res["reviews"][i][0]), y:res["reviews"][i][1]};
                    temp_neg = {x:new Date(res["reviews"][i][0]), y:res["reviews"][i][2]};
                    positive.push(temp_pos);
                    negative.push(temp_neg);
                    
                }
                console.log(positive)

                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    theme: "light2",
                    title:{
                        text: "Sentiment graph"
                    },
                    axisX:{
                        valueFormatString: "DD MMM",
                        crosshair: {
                            enabled: true,
                            snapToDataPoint: true
                        }
                    },
                    axisY: {
                        title: "Magnitude",
                        crosshair: {
                            enabled: true
                        }
                    },
                    toolTip:{
                        shared:true
                    },  
                    legend:{
                        cursor:"pointer",
                        verticalAlign: "bottom",
                        horizontalAlign: "left",
                        dockInsidePlotArea: true,
                        itemclick: toogleDataSeries
                    },
                    data: [{
                        type: "line",
                        showInLegend: true,
                        name: "Negative review",
                        markerType: "square",
                        xValueFormatString: "DD MMM, YYYY",
                        color: "#F08080",
                        dataPoints: negative
                    },
                    {
                        type: "line",
                        showInLegend: true,
                        name: "Positive review",
                        lineDashType: "dash",
                        dataPoints: positive
                    }]
                });
                chart.render();

                            }
                    };
    var id = "<?php echo $id;?>";
    var xhr = new XMLHttpRequest;
    xhr.onreadystatechange = getDetails;
    xhr.open("GET","http://127.0.0.1:5000/getlinevalues?id="+id,true);
    xhr.send();
   
   


function toogleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
    </script></div>
    

    
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Course Comparison</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                     
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    
    
    
  <div id="piecharContainer" style="height: 370px; width: 100%;"></div>
    <script>
    var respie;
     getdetailspiepie =function(){
       detailspie=[]
        if(xhrpie.readyState==4 && xhrpie.status==200)
            {
                respie = JSON.parse(xhrpie.response)
                console.log(respie["rating"].reduce((a, b) => a + b, 0));
                sumpie = respie["rating"].reduce((a, b) => a + b, 0);
                console.log(respie);
                for (var i = 0; i < respie["rating"].length; i++) {
                    temppie = {y:respie["rating"][i]*100/sumpie, label:respie["course_names"][i]};
                    detailspie.push(temppie);
                    
                    
                }
                
var chartpie = new CanvasJS.Chart("piecharContainer", {
	animationEnabled: true,
	title: {
		text: "Courses ratings"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints:detailspie
	}]
});
chartpie.render();
                
                console.log(detailspie)
                 }
     }
    var xhrpie = new XMLHttpRequest;
    xhrpie.onreadystatechange = getdetailspiepie;
    xhrpie.open("GET","http://127.0.0.1:5000/getTopn?n=3",true);
    xhrpie.send();

    </script>
                </div>
              </div>
            </div>
 
            
             <div class="card shadow" >
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Reviews</h6>
                </div>
                <div class="card-body" id="userreviews">
                  
                </div>
                 
                 <script>
                     
                 
                     getreviews =function(){
                         
                       detailsrev=[]
                        if(xhrrev.readyState==4 && xhrrev.status==200)
                            {
                                resrev = JSON.parse(xhrrev.response)
                                
                                console.log(resrev["reviews"]);
                                for (var i = 0; i < resrev["reviews"].length; i++) {
                                    msg = document.createElement("p")
                                    msg.innerHTML = resrev["reviews"][i];
                                    document.getElementById("userreviews").appendChild(msg);
                                
                                
                                


                                }
                     };
                     }
                     var id = "<?php echo $id;?>";
                     var xhrrev = new XMLHttpRequest;
                    xhrrev.onreadystatechange = getreviews;
                    xhrrev.open("GET","http://127.0.0.1:5000/getcoursereviews?id="+id,true);
                    xhrrev.send();
                     
                     
                 </script>
              </div>
          <!-- Content Row -->
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
