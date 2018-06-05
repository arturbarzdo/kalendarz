<html>
    <head>
        <title>
            kalendarz
        </title>
        <link rel="stylesheet" type="text/css" href="boot/css/bootstrap.min.css" />
        
        <style>
            
            td{
                width: 14%;
                min-height: 45px;
                
            }
            .paa{
                
                margin-top: 20px;
            }
            .header{
                background-color:#DCDFFF;
            }
        </style>
    </head> 
    <body>
        <div class="container">
            <div class="table-responsive paa">
<?php
require_once("model/calendar.php");
?>  
            </div>
        </div>
       
    </body>
 
    
</html>

