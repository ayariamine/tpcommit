
Dans une documentation plus ancienne, vous pourrez voir l'index appelé "cache du répertoire" ou juste "cache". L'index comporte 3 propriétés importantes:

L'index contient toutes les informations nécessaire pour générer un unique (déterminé uniquement) objet "tree".

Par exemple, le lancement de git commit génère un objet tree depuis l'index, le stocke dans la base de donnée objet, et l'utilise comme l'objet tree associé au nouveau commit.

L'index permet une comparaison rapide entre les objet tree qu'il définit et le tree de travail.

Il fait ceci en stockant des informations complémentaires pour chaque entrée (comme la date de dernière modification). Ces données ne sont pas affichées ci-dessus, et ne sont pas stockées dans l'objet tree créé, mais elles peuvent être utilisées pour déterminer rapidement quels fichiers du répertoire du travail diffèrent de ce que sont stockés dans l'index, et donc permet à git de gagner du temps sans avoir besoin de lire toutes les données pour ce genre de fichiers pour connaître les changements

Il peut être efficacement représenter les information à propos des conflits de merge entre différentes version des objets tree, permettant à chaque chemin de fichier d´être associé avec suffisament d'information à propos des "tree" impliqués dans la création d'un merge three-way.

Nous avons vu dans <<conflict-resolution>> que durant le merge, l'index peut stocker de multiples version d'un même fichier (appelés "stages"). La troisième colonne dans la sortie de git ls-files ci-dessus est le numéro du "stage", et prendra une valeur autre que 0 pour les fichiers avec des conflits de merge.

L'index est donc un sorte de zone d'assemblage temporaire, qui contient le "tree" sur lequel vous êtes en train de travailler.
