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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $id;?></title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body onload="obj.getallpartdescriptions()">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php">Course Information</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html" style="color: #ff0000">Week 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">Week 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">Week 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">Final Week</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Feedback</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  
  <header class="masthead">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1 id="maintitle"></h1>
            <span id="mainsubtitle" class="subheading"></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
            </h2>
            <h3 class="post-subtitle">
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">DV Anudeep</a>
            on November 15, 2019</p>
        </div>
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
            </h2>
            <h3 class="post-subtitle">
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">DV Anudeep</a>
            on November 15, 2019</p>
        </div>
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
            </h2>
            <h3 class="post-subtitle">
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">DV Anudeep</a>
            on November 15, 2019</p>
        </div>
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
            </h2>
            <h3 class="post-subtitle">
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">DV Anudeep</a>
            on November 15, 2019</p>
        </div>
        <hr>
        <div class="clearfix">
          <a class="btn btn-primary float-right" style="color: white; cursor: pointer;" onclick="gotonext()">Let's start &rarr;</a>
        </div>
      </div>
    </div>
  </div>



  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; 100Marks 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">

  var id = "<?php echo $id;?>";
  var obj = {
    xhr: new XMLHttpRequest(), 
    getallpartdescriptions: function(){
        var url = "http://127.0.0.1:5000/getcoursemetadata?id="+id;
        console.log(url)
        obj.xhr.onreadystatechange = obj.displayweek;
        obj.xhr.open("GET", url, true);
        obj.xhr.send();
      },
      displayweek:function(){
        if(this.readyState==4 && this.status==200){
          var res = JSON.parse(this.responseText);
        var alltitles = document.getElementsByClassName("post-title");
        var allsumms = document.getElementsByClassName("post-subtitle");
        for(var i=0;i<alltitles.length;i++){
          alltitles[i].innerHTML = res["part"+(i+1).toString()]["title"]
          allsumms[i].innerHTML = res["part"+(i+1).toString()]["summ"]
        }
        document.getElementById("maintitle").innerHTML = res["course_name"];
        var x = document.getElementsByClassName("masthead")[0];
        x.style.backgroundImage = "url(\""+res["logo"]+"\")"
        document.getElementById("mainsubtitle").innerHTML =  res["course_description"]
      }
      }
  };

  function gotonext(){
    window.location.href = "http://localhost/webtechproject/resume/index.php?id="+id+"&week=1";
  }
  
  </script>
  
  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
