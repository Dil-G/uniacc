<?php
echo "badu wada";
        // // //SendSMS
        $smsText = "Payment Overdue!\nMonthly Fee:LKR 5000.00\nPlease make your payment as soon as possible to avoid penalty charges.Thank You!";
        $user = "94771655198";
        $password = "1357";
        $text = urlencode($smsText);

        $to = "0771655198";
        $baseurl ="http://www.textit.biz/sendmsg";
        $url = "$baseurl/?id=$user&pw=$password&to=$to&text=$text";
        $ret = file($url);
        
        $res= explode(":",$ret[0]);
        
        if (trim($res[0])=="OK")
        {
        echo "Message Sent - ID : ".$res[1];
        }
        else
        {
        echo "Sent Failed - Error : ".$res[1];
        }
        
        //Redirect
        //header("Location: https://www.richmun.org/school_reg.html?success");
?>