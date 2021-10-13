<?php
/**
 * Gestion de l'accueil
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Réseau CERTA <contact@reseaucerta.org>
 * @author    José GIL <jgil@ac-nice.fr>
 * @copyright 2017 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */

if ($estConnecte) {
    $message = "Bonjour " . $_SESSION['prenom'] . " ! Une nouvelle connexion a été identifié. Si c'est vous....";
    mail("admin@wampserver.com", "Connexion GSB", $message);
    include 'vues/v_accueil.php';
} else {
    include 'vues/v_connexion.php';
}
