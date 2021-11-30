<?php
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
switch ($action) {
    case 'selectionnerMois':
        $lesMois = $pdo->getLesMois();
        $lesCles = array_keys($lesMois);
        $moisASelectionner = $lesCles[0];
        include 'vues/v_listeMoisComptable.php';
        break;
}