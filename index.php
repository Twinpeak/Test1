<?php

/*
modes d'ouverture
r: lecture seule
r+ : lecture et écriture
a : lecture seule (si le fichier n'existe pas, il est crée)
a+ : lecture et écriture (si le fichier n'existe pas, il est crée)
w+ : lecture et écriture. le fichier est vidé et s'il n'existe pas , il est crée.
*/






$monfichier = fopen('log.txt','r' );
// le deuxième paramètre de fread est le nombre d'octets à récuperer
$contenu = fread($monfichier, 10);
echo $contenu ;
$tailleFichier = filesize ('log.txt');
//affciher le contenu de tout le fichier
$contenu = fread($monfichier, $tailleFichier);
echo $contenu;




// écrire dans le fichier
$monFichier = fopen('log.txt', 'r+');
fwrite($monFichier, 'kiki');

$monFichier = fopen('log.txt', 'r+');
$tailleFichier = filesize('log.txt');
//afffciherle contenu de tout le fichier
$contenu = fread($monfichier, $tailleFichier);
echo $contenu;







//fopen() fread() et fclose() en une seule ligne :
$contenu = file_get_contents('log.txt');
echo $contenu;

//fopen() fread() et fclose() en une seule ligne :
$contenu = file_get_contents('log.txt', 'kjhkjhk');
$contenu =file_get_contents('log.txt');
echo $contenu;

// tester l'existence d'un fichier
if (file_exists('log.txt')){
    echo 'le fichier existe'
}
else{
    echo 'fichier est inexistant';
}

// tester l'existence d'un repertoire
if (is_dir(uploads)){
    echo 'le dossier existe'; 
}
else{
    echo 'le dossier est inexistant';
}

//copier un fichier
copy('log.txt', 'copieDeLog.txt');

// deplacer ou renommer un fichier
rename('copieDeLog.txt', 'uploads/log2.txt');


//récuperer le chemin et le nom du fichier courant
echo__FILE__; 

// recuperer le chemin du repertoire courant
echo__DIR__;


















?>
