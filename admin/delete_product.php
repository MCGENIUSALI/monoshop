<?php
require '../config/commandes.php';

$response = ['success' => false];

if (isset($_POST['idproduit'])) {
    $idproduit = htmlspecialchars(strip_tags($_POST['idproduit']));

    try {
        supprimer($idproduit);
        $response['success'] = true;
    } catch (Exception $e) {
        $response['message'] = $e->getMessage();
    }
}

header('Content-Type: application/json');
echo json_encode($response);
?>
