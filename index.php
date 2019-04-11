<?php
include('connections/conn.php');
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://gitcdn.link/repo/Chalarangelo/mini.css/master/dist/mini-default.min.css">
        <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v2.3.4/dist/mini-default.min.css">
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <title>QUB Survey</title>


        <script>

            $(document).ready(function () {

                $("#yesno").hide();
                $("#studentno").hide();
                $("#thankyou").hide();

                $("#smile").click(function (e) {

                    e.preventDefault();

                    $("#sad").fadeOut(500);
                    $("#smile").fadeOut(500);
                    $("#feedback").fadeOut(500);
                    $("#welcome").fadeOut(500);
                    $("#thankyou").hide().delay(500).fadeIn(500);
                    $("#thankyou").hide().delay(400).fadeOut(500);
                    $("#sad").delay(1500).fadeIn(500);
                    $("#smile").delay(1500).fadeIn(500);
                    $("#feedback").delay(1500).fadeIn(500);
                    $("#welcome").delay(1500).fadeIn(500);
                    var test = 1;
                    console.log(test);

                    $.ajax({url: "process2.php",
                        type: "POST",
                        data: {test: test},

                        success: function (data) {
                            console.log(data);


                        }

                    });
                });

                $("#sad").click(function (e) {

                    e.preventDefault();

                    $("#sad").fadeOut(500);
                    $("#smile").fadeOut(500);
                    $("#feedback").fadeOut(500);
                    $("#welcome").fadeOut(500);
                    $("#thankyou").hide().delay(500).fadeIn(500);
                    $("#thankyou").hide().delay(400).fadeOut(500);
                    $("#sad").delay(1500).fadeIn(500);
                    $("#smile").delay(1500).fadeIn(500);
                    $("#feedback").delay(1500).fadeIn(500);
                    $("#welcome").delay(1500).fadeIn(500);

                    var test = 0;
                    console.log(test);

                    $.ajax({url: "process2.php",
                        type: "POST",
                        data: {test: test},

                        success: function (data) {
                            console.log(data);


                        }

                    });
                });
            });




        </script>




    </head>
    <body>

     

            <br>
            <br>
            
            <div class="row" id="welcome">  
                <div class="col-sm-12">
                    <h1 id="title">How did you find the QUB WiFi today?</h1>
                    <br>
            <br>
            </div>    
            </div>
            
           
      


       
            <div class="row">   

                <div class="col-sm-6">  
                    <button id="smile"><input type='hidden' name='smile'><img src="images/smile.png" width="250" class="center"/></button>
                </div>  
                <div class="col-sm-6">
                    <button id="sad"><input type='hidden' name='sad'><img src="images/sad.png" width="250" class="center"/></button>  
                </div>

            </div>
       



     
            <div class="row" id="feedback">  
              
                <div class="col-md-12">
                    <br>
                    <br>
                    <h3 >Tap here to provide feedback</h3>
                </div>
                 
        </div>





        <div id="thankyou">

            <br>
            <br>
            <br>
            <br>
            
            <h1>Thank you for your feedback</h1>

        </div>





        <div id="studentno">

            <label for="studentin">Please enter your student number</label>
            <input type="text" placeholder="Student number" id="studentin" name="studentin"/>

        </div>


    </body>
</html>
