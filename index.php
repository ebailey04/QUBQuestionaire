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
                
                $("button").attr('disabled','disabled');

                $("#smile").on('click', function(e) {


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
                            
                        $("#smile").attr("disabled", false);

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
                
                $("#feedback").click(function (e) {

                    e.preventDefault();

                    $("#sad").fadeOut(500);
                    $("#smile").fadeOut(500);
                    $("#feedback").fadeOut(500);
                    $("#welcome").fadeOut(500);
                    
                    $("#studentno").hide().delay(500).fadeIn(500);

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


        <div class="row" id="welcome">  
            <div class="col-sm-12">
                <img src="images/wifibanner.png">
                <br>
                <br>
            </div>    
        </div>




<form id="form">

        <div class="row " id="smile">   

            <div class="col-sm-6">  
                <button id="smile"><input type='hidden' name='smile'><img src="images/smile.png"  class="center left"/></button>
            </div>  
            <div class="col-sm-6">
                <button id="sad"><input type='hidden' name='sad'><img src="images/sad.png"  class="center right"/></button>  
            </div>

        </div>


</form>


        <div class="row feedback" id="feedback">  

            <div class="col-md-12">

                <br>
                <button type="button"><h3 >Tap here to provide feedback</h3></button>
            </div>

        </div>





        <div id="thankyou">

            <br>
            <br>
            <br>
            <br>

            <h1>Thank you for your feedback</h1>

        </div>





        <div class="row" id="studentno">  
            <div class="col-sm-12">

            <label for="studentin">Please enter your student number</label>
            <input type="text" placeholder="Student number" id="studentin" name="studentin"/>

        </div>


    </body>
</html>
