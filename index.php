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
        <title></title>
        
         <script>
             
          $(document).ready(function(){
              
          $("#smile").click(function(e){
                
                 e.preventDefault();
                 
                var test = 1;
                console.log(test);
                
                 $.ajax({url: "process2.php",
                    type: "POST",
                    data: {test: test},
                    
                    success: function(data){
                       console.log(data);
                      
                  
                    }
                    
                    });
              });
              
              $("#sad").click(function(e){
                
                 e.preventDefault();
                 
                var test = 0;
                console.log(test);
                
                $("#sad").fadeOut(1200);
                $("#smile").fadeOut(1200);
                
                  if ($("#yes").click(function(e){
                
                  e.preventDefault();
                  
                 })){ 
                     
                 }else {
                     
                 };
                 }
              });
                
              });
               
   
        </script>
        
        
      
        
    </head>
    <body>

        <form id="number">
            
            <button id="smile" value="1"><input type='hidden' name='smile' id='smilevalue'><img src="images/smile.png" /></button> 
            <button id="sad" value="0"><input type='hidden' name='sad' id='sadvalue'><img src="images/sad.png" /></button> 

            <div id="yesno">

                <label for="option">Would you like to give your student/staff number to be contacted for feedback?</label>
                <button type="button">Yes</button>
                <button type="button">No</button>

                <br>

            </div>   
            
            <div id="studentno">
                
                <label for="studentin">Enter your student number</label>
                <input type="text" placeholder="Please enter your student number here" id="studentin" name="studentin"/>
                
            </div>
          
            
        </form>
        
    </body>
</html>
