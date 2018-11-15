<?php

function uploadFile($file)
{

    $dossier = "img/";
    if (!empty($file) && isset($file)) {

        echo "<pre>";
        var_dump($file['image']);
        echo "</pre>";
        $fichier = basename($file["image"]["name"]);
        var_dump($fichier);
        if (file_exists($file['image']['tmp_name'])) {
            $resultUpload = move_uploaded_file($file['image']['tmp_name'], $dossier . $fichier);
            if ($resultUpload) {
                header('Location: index.php?upload=ok');
            } else {

                header('Location: index.php?upload=notok');
            }
        }
    }
}
        function displayImg() {

        var_dump("hello");
            $dossier ="img/";
            $listImg = scandir($dossier);
            $listImg = array_splice($listImg, 2);
            return $listImg;
        }
