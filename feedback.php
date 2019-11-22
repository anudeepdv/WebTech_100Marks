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

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div>

<!--			<form class="contact1-form validate-form">-->
				<span class="contact1-form-title">
					Feedback for this course
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="name" placeholder="Name" id="name">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" >
					<input class="input1" type="text"  placeholder="rating" id="rating">
					<span class="shadow-input1"></span>
				</div>

				

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="message" placeholder="Message" id="review"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" onclick="obj.submit()">
						<span>
							Submit
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
<!--			</form>-->
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>
<script>
	var id = "<?php echo $id;?>";
var obj ={
            xhr:new XMLHttpRequest,
            xhr1:new XMLHttpRequest,
            review:"",
            neg:0,
            pos:0,
            neu:0,
            name:"",
            rating:0,
            submit: function(){
                this.xhr.onreadystatechange = this.getsent;
                this.review = document.getElementById("review").value;
                this.name = document.getElementById("name").value;
                this.rating =document.getElementById("rating").value
                console.log(this.name);
                this.xhr.open("GET","http://127.0.0.1:5000/analyze?sent="+this.review);
                this.xhr.send();
            },
        getsent: function(){
            if(this.status=200 && this.readyState==4){
                res = JSON.parse(this.responseText);
                console.log(res);
                obj.neg=res["neg"];
                obj.pos=res["pos"];
                obj.neu=res["neu"];
                console.log(obj.pos,obj.neg,obj.review,obj.name,obj.neu,obj.rating);
                obj.xhr1.onreadystatechange = obj.updatedb;
                
                obj.xhr1.open("GET","http://127.0.0.1:5000/updatecoursereviews?id="+id+"&name="+obj.name+"&msg="+obj.review+"&pos="+obj.pos+"&neg="+obj.neg+"&neu="+obj.neu+"&rating="+obj.rating);
                obj.xhr1.send();
            }
            
        },
    updatedb : function(){
    
        if(this.status=200 && this.readyState==4){
                    res = this.responseText;
                    console.log(res);
                    window.location.href = "http://localhost/webtechproject/dashboard.php?id="+id;    
                }
}
};
    </script>
</body>
</html>
