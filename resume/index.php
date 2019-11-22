<?php
// index.php?id=ML001&week=1
extract($_GET);
if(isset($id) && isset($week)){
  if($id=="ML001"){
    if($week==1){
      ;
    }
  }
  else{
    ;
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

  <title>Course - <?php echo $id;?></title>

  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="../course/css/clean-blog.min.css" rel="stylesheet">
  <link href="../resume.css" rel="stylesheet">


  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
   <script src="../course/js/clean-blog.min.js"></script>
   <style type="text/css">
     p{
      text-align: justify;
     }
    /* Style the header: fixed position (always stay at the top) */
.header {
  position: fixed;
  top: 0;
  z-index: 1;
  width: 100%;
  background-color: #f1f1f1;
}

/* The progress container (grey background) */
.progress-container {
  width: 100%;
  height: 8px;
  background: #ccc;
}

/* The progress bar (scroll indicator) */
.progress-bar {
  height: 8px;
  background: #4caf50;
  width: 0%;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   padding: 1.5%;
   width: 100%;
   height:8%;
   font-size: 10px;
   cursor: pointer;
   font-weight: 1;
   background-color: #ff0000;
   color: white;
   text-align: center;
}
   </style>

</head>

<body id="page-top" onload="obj.getHTMLPage()">

	<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a id="w1" class="nav-link" href="index.html" style="">Week 1</a>
          </li>
          <li class="nav-item">
            <a id="w2" class="nav-link" href="index.html">Week 2</a>
          </li>
          <li class="nav-item">
            <a id="w3" class="nav-link" href="index.html">Week 3</a>
          </li>
          <li class="nav-item">
            <a id="w4" class="nav-link" href="index.html">Final Week</a>
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
  <div class="header">
    <div class="progress-container">
      <div class="progress-bar" id="myBar"></div>
    </div>
  </div>
  <header class="masthead">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1 style="color: white">loading...</h1>
            <h4 style="margin-top: 30px; color: white;"></h4>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container-fluid" style="width: 100%; height: 100%; padding: 50px">
  </div>

<div id="f1" class="footer" onclick="movetonext()">
  <h4 id="f2"></h4>
</div>

</body>
<script type="text/javascript">
  var id = "<?php echo $id;?>";
  console.log(id);
  var week = <?php echo $week;?>;

  document.getElementById("w"+week).style.color="red";
  console.log(week);
  var obj = {
    xhr:new XMLHttpRequest(),
    getHTMLPage: function(){
      var url = "http://127.0.0.1:5000/getcoursewithoutimages?id="+id+"&week="+week.toString();
      console.log(url)
      obj.xhr.onreadystatechange = obj.renderPage;
      obj.xhr.open("GET", url, true);
      obj.xhr.send();
    },
    renderPage:function(){
    	console.log(this);
      if(this.status==200 && this.readyState==4){
        htmlcontent = this.responseText;
        //console.log(htmlcontent);
        var cont = document.getElementsByClassName('container-fluid');
        console.log(cont);
        cont[0].innerHTML=htmlcontent;
      }
      setTimeout(obj1.getcoursemetadata, 1000);
    },
    getImages:function(){
      var url = "http://127.0.0.1:5000/getcourseimages?id="+id+"&week="+week.toString();
      console.log(url)
      obj.xhr.onreadystatechange = obj.renderImages;
      obj.xhr.open("GET", url, true);
      obj.xhr.send();
    },
    renderImages:function(){
    	if(this.readyState==4 && this.status==200){
    		res = JSON.parse(this.responseText)["result"];
    		console.log(res);
    		console.log("READY TO DISPLAY IMAGES...");
    		var imgs = document.getElementsByTagName("img");
    		console.log(imgs);
    		for(var i=0;i<imgs.length;i++){
    				imgs[i].src = res[i];
    			}
    		}
    	}
    };

    var obj1 = {
		xhr:new XMLHttpRequest(),
	    getcoursemetadata: function(){
	      var url = "http://127.0.0.1:5000/getcoursemetadata?id="+id;
	      console.log(url)
	      obj1.xhr.onreadystatechange = obj1.displaymeta;
	      obj1.xhr.open("GET", url, true);
	      obj1.xhr.send();
	    },
	    displaymeta:function(){
	    	if(this.readyState==4 && this.status==200){
	    	var head = document.getElementsByClassName("site-heading");
	    	console.log(head)
	    	var res = JSON.parse(this.responseText);
	    	console.log(res);
	    	head[0].children[1].innerHTML = res["course_description"]
	    	head[0].children[0].innerHTML = res["course_name"]
        console.log("HHHHHHHHHHHHEEEEEEEEEEEEEEREEE")
        var x1 = document.getElementById('f2')
        console.log(x1)
        if(week!=4){
          str = res["part"+(week+1)]["title"]+"                      >>";
          console.log(str);
          x1.innerHTML = str;
        }
        else{
          x1.innerHTML = "Course Feedback"
        }
	    	var x = document.getElementsByClassName("masthead")[0];
  			x.style.backgroundImage="url(\'"+res['logo']+"\')";
	    	setTimeout(obj.getImages, 2000);
	    }
	    }
	};

  // When the user scrolls the page, execute myFunction 
  window.onscroll = function() {myFunction()};

  function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
    console.log(scrolled+"%");
    if(scrolled>100){
      document.getElementById("f1").style.backgroundColor = "#00ff00"
    }
  }
  function movetonext(){
    var x = document.getElementById("f1").style.backgroundColor;
    console.log(x)
      if(x=="rgb(0, 255, 0)"){
        if(week!=4)
          loc = "http://localhost/webtechproject/resume/index.php?id="+id+"&week="+(week+1);
        else
          loc = "http://localhost/webtechproject/feedback.php?id="+id;
      window.location.href = loc;
      }
    else{
      ;
    }
  }
  
</script>