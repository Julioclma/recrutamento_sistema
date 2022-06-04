<?php

include '../../db/connection-db.php';

$id_users = $_POST['id_users'];
echo $id_users;
$dir = '';

$new_name = '';


 if(isset($_FILES['pic']))

 {
    $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo

    if ($ext === '.jpg' || !$ext === '.png'){

        echo 'imagem de extensão '.$ext. ' aceita!';
        $new_name = time().'-rhsolidario'.$ext;  //Definindo um novo nome para o arquivo
        $dir = 'images/'; //Diretório para uploads 
        move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
         echo '<br>'.$dir.$new_name.'<br>';
        echo "Imagem enviada com sucesso!";


        $query_update_img_profile = "UPDATE profile SET photo =  '$new_name' WHERE id_profile = '$id_users'";


        $queryUpdateImgProfile = $conn->query($query_update_img_profile);

        if($queryUpdateImgProfile){
            echo 'atualizado no banco';
        }
    
    }else{
    

        throw new Exception("Apenas imagens .jpg, .png");
        header('location:form-img.php');
    }

   
 
 }


?>