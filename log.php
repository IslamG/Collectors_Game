<!Doctype html>
    <html>
       <head>
        </head> 
        <body>
        <?php
        if(isset($_POST['submit'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
            if(( $username=='admin')&&( $password=='123') ){
                echo 'your login secucceful'
            }
        }


        ?>
            <form action='' method='post'>
                USER NAME:<input type='text' name='username'>
                </br>
                PASSWORD:<input type='password' name='password'>
                </br>
                <input type='submit' name='submit' value='login'>
                
                
                
            </form>
        </body>
       
        
        
    </html>