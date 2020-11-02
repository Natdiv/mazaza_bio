<?php

function upload_image($image_file)
{
    $upload_dir_path = '../uploaded-images/';
    $upload_dir = 'uploaded-images/';
    $server_url = '';

    if(!file_exists($upload_dir_path)) {
        mkdir($upload_dir_path, 0766, true);
    }

    if($image_file['image'])
    {
        $document_name = $image_file["image"]["name"];
        $document_tmp_name = $image_file["image"]["tmp_name"];
        $error = $image_file["image"]["error"];

        if($error > 0){
            $response = array(
                "status" => "error",
                "error" => true,
                "message" => "Erreur de chargement de fichier!"
            );
            return $response;
        }else
        {
            $ext = pathinfo($image_file["image"]['name'])['extension'];
            $random_name = hash('sha256', date('dmYHis').rand(1000,1000000).$document_name);
            $upload_name = $upload_dir_path.strtolower($random_name);
            $url = $upload_dir.strtolower($random_name);
            $upload_name = preg_replace('/\s+/', '-', $upload_name).'.'.$ext;
            $url = preg_replace('/\s+/', '-', $url).'.'.$ext;

            if(true || ext_in_array($ext)) {

                if(move_uploaded_file($document_tmp_name , $upload_name)) {
                    $response = array(
                        "status" => "success",
                        "error" => false,
                        "message" => "Fichié chargé avec succès",
                        "url" => $url
                    );
                    return $response;
                } else
                {
                    $response = array(
                        "status" => "error",
                        "error" => true,
                        "message" => "Erreur de chargement de fichier!"
                    );
                    return $response;
                }
            } else {
                $response = array(
                    "status" => "error",
                    "error" => true,
                    "message" => "Extension (.$ext) non permise!"
                );
                return $response;
            }

        }

    }else{
        $response = array(
            "status" => "error",
            "error" => true,
            "message" => "Aucun fichié n'a été envoyé!"
        );
        return $response;
    }

}


function ext_in_array($value) {
    $extension_permise = array("png", "PNG", "jpg", "JPG");
    foreach ($extension_permise as $v) {
        if($value == $v)
            return true;
    }
    return false;
}
?>