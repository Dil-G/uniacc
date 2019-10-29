<?php
    echo "hey bitches";
    

        //Get data from the Form
        $username = $_REQUEST['client_name'];
        $password = $_REQUEST['client_pass'];
	echo $username;
	echo $password;

        
        if($username == "dilhani" && $password == "dee"){
           
           header("Location: ./add.html");
        }
        else{
            header ("Location: index.html");
        }

?>







































?>
