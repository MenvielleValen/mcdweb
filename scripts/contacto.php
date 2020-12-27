<?php


if (isset($_POST['submit']))
{
    
    if(!empty( $_POST['name'])&& !empty( $_POST['email'])&& !empty( $_POST['mensaje'])){

        $nombre= $_POST['name'];
        $email= $_POST['email'];
        $men= $_POST['mensaje'];
        $menrepuesta= "Gracias " . $nombre ." por comunicarte con nostoros, estaremos respondiendo tu consulta a la brevedad. Saludos :) ";
    
    
            
            
            
            
    
            $header=$email . "\r\n";
            $header.=$nombre . "\r\n";
            
            $headerus= "From to: MCD Desarrollo web" . "\r\n";
            $headerus.="Support: desarrollo.mcd@gmail.com" . "\r\n";
            $headerus.="                                 " . "\r\n";
            
            $headerus.="--------------------------------" . "\r\n";

           
            $mail= @mail("desarrollo.mcd@gmail.com",$email,$men,$header);
            $mail= @mail($email,"Su consulta fue enviada",$menrepuesta,$headerus);

            
            exit;

    }
    
   
        
        
       
    

}



?>