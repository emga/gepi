<?php
/**
 * Fichier de mise à jour de la version 1.6.9 à la version 1.7.0 par défaut
 *
 *
 * Le code PHP présent ici est exécuté tel quel.
 * Pensez à conserver le code parfaitement compatible pour une application
 * multiple des mises à jour. Toute modification ne doit être réalisée qu'après
 * un test pour s'assurer qu'elle est nécessaire.
 *
 * Le résultat de la mise à jour est du html préformaté. Il doit être concaténé
 * dans la variable $result, qui est déjà initialisé.
 *
 * Exemple : $result .= msj_ok("Champ XXX ajouté avec succès");
 *
 * @copyright Copyright 2001, 2013 Thomas Belliard, Laurent Delineau, Edouard Hue, Eric Lebrun
 * @license GNU/GPL,
 * @package General
 * @subpackage mise_a jour
 * @see msj_ok()
 * @see msj_erreur()
 * @see msj_present()
 */

$result .= "<h3 class='titreMaJ'>Mise à jour vers la version 1.7.0 :</h3>";

/*
// Section d'exemple

$result .= "&nbsp;-> Ajout d'un champ 'tel_pers' à la table 'eleves'<br />";
$test_champ=mysqli_num_rows(mysqli_query($mysqli, "SHOW COLUMNS FROM eleves LIKE 'tel_pers';"));
if ($test_champ==0) {
	$sql="ALTER TABLE eleves ADD tel_pers varchar(255) NOT NULL default '';";
	$result_inter = traite_requete($sql);
	if ($result_inter == '') {
		$result .= msj_ok("SUCCES !");
	}
	else {
		$result .= msj_erreur("ECHEC !");
	}
} else {
	$result .= msj_present("Le champ existe déjà");
}

$result .= "<br />";
$result .= "<strong>Ajout d'une table 'droits_acces_fichiers' :</strong><br />";
$test = sql_query1("SHOW TABLES LIKE 'droits_acces_fichiers'");
if ($test == -1) {
	$result_inter = traite_requete("CREATE TABLE IF NOT EXISTS droits_acces_fichiers (
	id INT(11) unsigned NOT NULL auto_increment,
	fichier VARCHAR( 255 ) NOT NULL ,
	identite VARCHAR( 255 ) NOT NULL ,
	type VARCHAR( 255 ) NOT NULL,
	PRIMARY KEY ( id )
	) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;");
	if ($result_inter == '') {
		$result .= msj_ok("SUCCES !");
	}
	else {
		$result .= msj_erreur("ECHEC !");
	}
} else {
	$result .= msj_present("La table existe déjà");
}

// Merci de ne pas enlever le témoin ci-dessous de "fin de section exemple"
// Fin SECTION EXEMPLE
*/

$result .= "&nbsp;-> Ajout d'un champ 'prenom' à la table 'tempo_utilisateurs'<br />";
$test_champ=mysqli_num_rows(mysqli_query($mysqli, "SHOW COLUMNS FROM tempo_utilisateurs LIKE 'prenom';"));
if ($test_champ==0) {
	$sql="ALTER TABLE tempo_utilisateurs ADD prenom VARCHAR( 50 ) NOT NULL AFTER identifiant2;";
	$result_inter = traite_requete($sql);
	if ($result_inter == '') {
		$result .= msj_ok("SUCCES !");
	}
	else {
		$result .= msj_erreur("ECHEC !");
	}
} else {
	$result .= msj_present("Le champ existe déjà");
}

$result .= "&nbsp;-> Ajout d'un champ 'nom' à la table 'tempo_utilisateurs'<br />";
$test_champ=mysqli_num_rows(mysqli_query($mysqli, "SHOW COLUMNS FROM tempo_utilisateurs LIKE 'nom';"));
if ($test_champ==0) {
	$sql="ALTER TABLE tempo_utilisateurs ADD nom VARCHAR( 50 ) NOT NULL AFTER identifiant2;";
	$result_inter = traite_requete($sql);
	if ($result_inter == '') {
		$result .= msj_ok("SUCCES !");
	}
	else {
		$result .= msj_erreur("ECHEC !");
	}
} else {
	$result .= msj_present("Le champ existe déjà");
}

$result .= "<br />";
$result .= "<strong>Ajout d'une table 'aid_appreciations_grp' :</strong><br />";
$test = sql_query1("SHOW TABLES LIKE 'aid_appreciations_grp'");
if ($test == -1) {
	$sql="CREATE TABLE aid_appreciations_grp ( id_aid int(11) NOT NULL default '0', periode int(11) NOT NULL default '0', appreciation text NOT NULL, indice_aid int(11) NOT NULL default '0', PRIMARY KEY  (id_aid, indice_aid, periode)) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;";
	$result_inter = traite_requete($sql);
	if ($result_inter == '') {
		$result .= msj_ok("SUCCES !");
	}
	else {
		$result .= msj_erreur("ECHEC !");
		//$result.="<br />$sql<br />";
	}
} else {
	$result .= msj_present("La table existe déjà");
}

$req_test= mysqli_query($GLOBALS["mysqli"], "SELECT VALUE FROM setting WHERE NAME='bull2016_pas_espace_reserve_EPI_AP_Parcours'");
$res_test = mysqli_num_rows($req_test);
if ($res_test == 0){
	$result .= "Initialisation du paramètre 'bull2016_pas_espace_reserve_EPI_AP_Parcours' à 'y': ";
	$sql="INSERT INTO setting SET name='bull2016_pas_espace_reserve_EPI_AP_Parcours', value='y';";
	$result_inter = traite_requete($sql);
	if ($result_inter == '') {
		$result .= msj_ok("SUCCES !");
	}
	else {
		$result .= msj_erreur("ECHEC !");
	}
}

$result .= "<br />";
$result .= "<strong>Ajout d'une table 'absences_appreciations_grp' :</strong><br />";
$test = sql_query1("SHOW TABLES LIKE 'absences_appreciations_grp'");
if ($test == -1) {
	$sql="CREATE TABLE absences_appreciations_grp (id_classe int(11) NOT NULL default '0', periode int(11) NOT NULL default '0', appreciation text NOT NULL, PRIMARY KEY  (id_classe, periode)) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;";
	$result_inter = traite_requete($sql);
	if ($result_inter == '') {
		$result .= msj_ok("SUCCES !");
	}
	else {
		$result .= msj_erreur("ECHEC !");
		//$result.="<br />$sql<br />";
	}
} else {
	$result .= msj_present("La table existe déjà");
}

$req_test= mysqli_query($GLOBALS["mysqli"], "SELECT VALUE FROM setting WHERE NAME='active_module_LSUN'");
$res_test = mysqli_num_rows($req_test);
if ($res_test == 0){
	$result .= "Initialisation du paramètre 'active_module_LSUN' à 'y': ";
	$sql="INSERT INTO setting SET name='active_module_LSUN', value='y';";
	$result_inter = traite_requete($sql);
	if ($result_inter == '') {
		$result .= msj_ok("SUCCES !");
	}
	else {
		$result .= msj_erreur("ECHEC !");
	}
}

$req_test= mysqli_query($GLOBALS["mysqli"], "SELECT VALUE FROM setting WHERE NAME='log_envoi_SMS'");
$res_test = mysqli_num_rows($req_test);
if ($res_test == 0){
	$result .= "Initialisation du paramètre 'log_envoi_SMS' à 'n': ";
	$sql="INSERT INTO setting SET name='log_envoi_SMS', value='n';";
	$result_inter = traite_requete($sql);
	if ($result_inter == '') {
		$result .= msj_ok("SUCCES !");
	}
	else {
		$result .= msj_erreur("ECHEC !");
	}
}
?>