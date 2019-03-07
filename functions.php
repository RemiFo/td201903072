<?php
/**
 * Created by PhpStorm.
 * User: shumez
 * Date: 11/05/2018
 * Time: 08:27
 *
 *
 *
 * @author Stanis Humez
 * @copyright 2018 StJo
 */
/**
 * Multiplie deux nombres
 *
 * @param float|int $a Premier nombre à multiplier
 * @param float|int $b Deuxième nombre à multiplier
 * @return float|int
 */
function multiplier($a, $b) {
    /* créer une variable pour stocker le résultat de la multiplication */
    $resultat = $a * $b; // commentaire
    return $resultat;
}

/**
 * Renvoie la factorielle d'un nombre entier
 *
 * @param int $n Nombre dont on cherche la factorielle
 * @return int
 */
function factorielle($n) {
    $produit = 1;
    for ($i=1;$i<=$n;$i++) {
        $produit *= $i;
    }
    return $produit;
}
