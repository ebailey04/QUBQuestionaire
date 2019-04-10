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
                
                 $.ajax({url: "process2.php",
                    type: "POST",
                    data: {test: test},
                    
                    success: function(data){
                       console.log(data);
                      
                  
                    }
                    
                    });
              });
                });
 
   
        </script>
        
        
      
        
    </head>
    <body>

        <form id="number">
            
            <button id="smile" value="1"><input type='hidden' name='smile' id='smilevalue'><img src="images/smile.png" /></button> 
              <button id="sad" value="0"><input type='hidden' name='sad' id='sadvalue'><img src="images/sad.png" /></button> 
            
        </form>
        
    </body>
</html>
