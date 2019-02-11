<!DOCTYPE html>
    <html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
   
   $("#data").load("form.php");


     });

</script>
        <title>admin panel</title>
            <style>
                body{
                margin :0px;
                border: 0px;
                }
                #header{
                    width: 100%;
                    height: 120px;
                    background: black;
                    color:white;
                }
                #sidepar{
                   width: 300px;
                    height: 400px;
                    background:silver;
                    float: left;
                
                }
                #data{
                    background-color: grey;
                    height: 700px;
                    color: silver;
                    font-family: Helvetica;
                    font-size: 25px;
                }
            
                #adminlogo{
                    background: white;
                    border-radius: 300px;
                    
                    
                    
                }
                ul li{
                    padding:  20px;
                    border-bottom: 2px solid grey;
                    
                    
                }
                ul li:hover{
                    background-color:orangered;
                    color: white;
                    
                }
            </style>
            
        
    </head>
    <body>
        <div id="header">
        <center>
            <img src="admin.png" width="70px" height="70px" alt="adminlog" id="adminlogo" ><br> <h3>admin panel</h3>
        </center>
            
        </div>
        <div id="sidepar">
        <ul >
            <a id="add" href="../form.php" ><li>add user</li></a>
             <a href="../delete.php"> <li>remove user</li>
            <a href="../search.php"><li >search to user</li></a>
           <a href=""#> <li >log out</li></a>
        </ul>    
        </div>
        <div id="data"  href="">
        
        </div>
        
        
        
        
    </body>
    </html>