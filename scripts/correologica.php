<?php
//42178461_Valen

$servidor = "localhost";
$nombreusuario = "id15697204_mcd";
$password ="42178461_Valen";
$db = "id15697204_registrocompras";
        
$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

       if($conexion->connect_error){
              die("Conexión fallida: " . $conexion->connect_error);
       }

if (isset($_POST['enviar']))
{
    

        if(!empty($_POST['nombre'])&&
        !empty($_POST['apellido'])&&
        !empty($_POST['email'])&&
        !empty($_POST['direccion'])&&
        !empty($_POST['piso'])&&
        !empty($_POST['cp'])&&
        !empty($_POST['telefono'])&&
        !empty($_POST['provincia'])&&
        !empty($_POST['localidad'])){

                $nombre=$_POST['nombre'];
                $apellido=$_POST['apellido'];
                $email=$_POST['email'];
                $direccion=$_POST['direccion'];
                $piso=$_POST['piso'];
                $cp=$_POST['cp'];
                $telefono=$_POST['telefono'];
                $provincia=$_POST['provincia'];
                $localidad=$_POST['localidad'];
                $idcompra= random_int(10000, 10000000);
        
        
                $msg="Nombre: ". $nombre. "\r\n";
                $msg.="Apellido: ". $apellido. "\r\n";
                $msg.="Email: ". $email. "\r\n";
                $msg.="Direccion: ". $direccion. "\r\n";
                $msg.="Piso / hogar: ". $piso. "\r\n";
                $msg.="Codigo postal: ". $cp. "\r\n";
                $msg.="Telefono: ". $telefono. "\r\n";
                $msg.="Provincia: ". $provincia. "\r\n";
                $msg.="Localidad: ". $localidad. "\r\n";
                $msg.="Numero De Compra: ". $idcompra. "\r\n";
        
        
        
                $msgcomprador="Gracias " . $nombre . " por tu compra!! Pronto nos comunicaremos para seguir el envio." . "\r\n";
                $msgcomprador.="Numero de compra: " . $idcompra . "\r\n";
        
                $asuntocompra="Compra Exitosa". "\r\n";
                
               
                
        
                $header="From to: MCD Desarrollo" . "\r\n";
                
                $header.="Support: desarrollo.mcd@gmail.com";
          
                $mail= @mail("desarrollo.mcd@gmail.com",$nombre,$msg,$header);
                $mail= @mail($email,$asuntocompra,$msgcomprador,$header);
                
                

                //Consulta abase de datos....

                $sql= "INSERT INTO comprasexitosas(nombre, apellido, email, direccion, piso, telefono, provincia, localidad,compraid)
                 VALUES('$nombre', '$apellido', '$email', '$direccion', '$piso', '$telefono', '$provincia', '$localidad', '$idcompra')";

                 if($conexion->query($sql) === true){
                        echo '<p> Datos enviados. </p>';

                 }else{
                        die("Error al insertar datos: " . $conexion->error);
                 }      
                 $conexion->close();
                




               exit;




        }
       


            

        
        
    

}



?>