<?php


function prolosaures(int $largeur, array $alts)
{
    // On initie les surfaces disponible à zéro
    $disponible = 0;

    // On se place au premier index du tableau et on l'ajoute dans la variable hauteurMax
    $hauteurMax = current($alts);

    // On scan toutes les valeurs reçu de notre tableau
    foreach ($alts as $alt) {
        /**
         * On vérifie un par un si une valeur du tableau est inférieur à notre hauteurMax,
         * Si oui, on ajoute une surface disponible à notre surface global
         * Si non, on définie notre nouvelle valeur comme étant hauteurMax.
         * Puis on continue avec la prochaine valeur grâce à la fonction next()
         */

        if($alt < $hauteurMax)
        {
            $disponible++;
        } else {
            $hauteurMax = current($alts);
        }
        next($alts);
    }
    // On retourne les surfaces disponibles
    return $disponible;
}

var_dump(prolosaures(10, [30, 27, 17, 42, 29, 12, 14, 41, 42, 42]));