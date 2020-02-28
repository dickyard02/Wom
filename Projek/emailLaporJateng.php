<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
    <style type="text/css">
       		textarea {
            margin-top: 10px;	
			width: 96.5%;
			padding: 14px;
			margin: 5px 0 22px 0;
			display: block;
			border-bottom: none;
			background: #d9d9d9;
			text-align: left;
			
        }
		body{
			background-image: url("1212.jpg");
		}
		input{
			background-color:#049372;
			color: white;
			padding: 11px 18px;
			margin: 6px 0;
			border: none;
			cursor: pointer;
			width: 96%;
			opacity: 0.9;
			font-size: 19px;
			font-family: arial;
			border-bottom: none;
		}
		


		.container {
			width: 98%;
			padding: 14px;
			background-color:#b4cde4;
			border-bottom: none;
		}
		
		header, img {
			width: 90px;
			height: 70px;
			align:center;
			
		}

		header h1 {
			padding: 23px;
			margin-bottom: 5px;
			margin-top: 7px;
			font-family: Arial Black ; 
			color: #ffffff;
			background-color:#ffffff;
		}
		
		button{
					background-color:#049372;
					color: white;
				 	padding: 11px 18px;
					margin: 6px 0;
				 	 border: none;
				  	cursor: pointer;
				  	width: 50%;
				  	opacity: 0.9;
				 	 font-size: 19px;
				  	font-family: arial;
			}
    </style>
</head>
<body>
    <div class="container" style="margin-top:100px;">
	<div header align="center"> <img src="capture.png" alt="logo" align="center" />
		<label><h1>Form Lapor</h1></label></div>
		<div class="clock"  align="center">
            <?php
			date_default_timezone_set("Asia/Jakarta");
			$time= time();
			echo date("h:i:sa");
			?>
</div>
<div class="tanggal"  align="center"> 
<?php
echo date('l/m/d/Y');
?>
<br>
<?php
echo "JAWA TENGAH ";
?>
        <div class="row justify-content-center">
		 
		
		<div class="col-md-6 col-md-offset-3" align="center">
                <input id="name" placeholder="Name" class="form-control">
                <input id="email" placeholder="Email" class="form-control">
                <input id="subject" placeholder="Subject" class="form-control">
                <textarea class="form-control" id="body" placeholder="Email Body" ></textarea>
				
                <input type="button" onclick="sendEmail()" value="Send An Email" class="btn btn-primary">
				<a href="jateng.php"><input type="button"  value="cancel" class="btn btn-primary"></a>
            </div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        if (response.status == "success")
                            alert('Email Has Been Sent!');
                        else {
                            alert('Please Try Again!');
                            console.log(response);
                        }
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
	
</body>
</html>