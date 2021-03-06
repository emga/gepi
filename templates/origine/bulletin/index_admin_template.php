<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
/*
* $Id$
 *
 * Copyright 2001, 2013 Thomas Belliard, Laurent Delineau, Edouard Hue, Eric Lebrun
 *
 * This file is part of GEPI.
 *
 * GEPI is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * GEPI is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with GEPI; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*
* ******************************************** *
* Appelle les sous-modèles                     *
* templates/origine/header_template.php        *
* templates/origine/bandeau_template.php       *
* ******************************************** *
*/

/**
 *
 * @author regis
 */

?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
<!-- on inclut l'entête -->
	<?php
	  $tbs_bouton_taille = "..";
	  include('../templates/origine/header_template.php');
	?>

  <script type="text/javascript" src="../templates/origine/lib/fonction_change_ordre_menu.js"></script>

	<link rel="stylesheet" type="text/css" href="../templates/origine/css/accueil.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="../templates/origine/css/bandeau.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="../templates/origine/css/gestion.css" media="screen" />

<!-- corrections internet Exploreur -->
	<!--[if lte IE 7]>
		<link title='bandeau' rel='stylesheet' type='text/css' href='../templates/origine/css/accueil_ie.css' media='screen' />
		<link title='bandeau' rel='stylesheet' type='text/css' href='../templates/origine/css/bandeau_ie.css' media='screen' />
	<![endif]-->
	<!--[if lte IE 6]>
		<link title='bandeau' rel='stylesheet' type='text/css' href='../templates/origine/css/accueil_ie6.css' media='screen' />
	<![endif]-->
	<!--[if IE 7]>
		<link title='bandeau' rel='stylesheet' type='text/css' href='../templates/origine/css/accueil_ie7.css' media='screen' />
	<![endif]-->


<!-- Style_screen_ajout.css -->
	<?php
		if (count($Style_CSS)) {
			foreach ($Style_CSS as $value) {
				if ($value!="") {
					echo "<link rel=\"$value[rel]\" type=\"$value[type]\" href=\"$value[fichier]\" media=\"$value[media]\" />\n";
				}
			}
		}
	?>

<!-- Fin des styles -->


</head>


<!-- ************************* -->
<!-- Début du corps de la page -->
<!-- ************************* -->
<body onload="show_message_deconnexion();<?php echo $tbs_charger_observeur;?>">

<!-- on inclut le bandeau -->
	<?php include('../templates/origine/bandeau_template.php');?>

<!-- fin bandeau_template.html      -->

  <div id='container'>

  <form action="index_admin.php" id="form1" method="post" style='border: 1px solid grey; background-image: url("../images/background/opacite50.png")'>
<?php
	echo add_token_field();
?>
	
	<h2 class="colleHaut">Configuration générale</h2>
	<p class="italic">
	  La désactivation du module Bulletins n'entraîne aucune suppression des données. 
	  Lorsque le module est désactivé, les professeurs n'ont pas accès au module.
	</p>
	<fieldset class="no_bordure">
	  <legend class="invisible">Activé ou non</legend>
	  <input type="radio" 
			 name="activer" 
			 id='activer_y' 
			 value="y" 
			<?php if (getSettingValue("active_bulletins")=='y') echo " checked='checked'"; ?>
			 onchange='changement();' />
	  <label for='activer_y' style='cursor: pointer;'>
		Activer le module bulletins
	  </label>
	<br />
	  <input type="radio" 
			 name="activer" 
			 id='activer_n' 
			 value="n" 
			<?php if (getSettingValue("active_bulletins")=='n') echo " checked='checked'"; ?>
			 onchange='changement();' />
	  <label for='activer_n' style='cursor: pointer;'>
		Désactiver le module bulletins
	  </label>
	</fieldset>

	<p class="center">
	  <input type="hidden" name="is_posted" value="1" />
	  <input type="submit" value="Enregistrer" />
	</p>

</form>

<br />

  <form action="index_admin.php" id="form3" method="post" style='border: 1px solid grey; background-image: url("../images/background/opacite50.png")'>
<?php
	echo add_token_field();
?>
	
	<h2 class="colleHaut">Paramètres divers</h2>

	<p style='margin-top:1em;'>Si vous ne souhaitez pas afficher la moyenne générale en conseil de classe, mais que vous souhaitez permettre un calcul de moyenne générale pour les personnels, il ne faut pas afficher les moyennes générales par défaut sur les bulletins simplifiés.<br />
	Vous pouvez effectuer ce choix ici&nbsp;:<br />
	<input type='checkbox' name='bullNoMoyGenParDefaut' id='bullNoMoyGenParDefaut' value='yes' <?php
	if(getSettingAOui("bullNoMoyGenParDefaut")) {echo "checked ";}
	?>/><label for='bullNoMoyGenParDefaut'> Ne pas afficher la ligne des moyennes générales par défaut</label></p>

	<p><input type='checkbox' name='bullNoMoyCatParDefaut' id='bullNoMoyCatParDefaut' value='yes' <?php
	if(getSettingAOui("bullNoMoyCatParDefaut")) {echo "checked ";}
	?>/><label for='bullNoMoyCatParDefaut'> Ne pas afficher la ligne des moyennes de catégories par défaut</label></p>

	<p><input type='checkbox' name='bullNoSaisieElementsProgrammes' id='bullNoSaisieElementsProgrammes' value='yes' <?php
	if(getSettingAOui("bullNoSaisieElementsProgrammes")) {echo "checked ";}
	?>/><label for='bullNoSaisieElementsProgrammes'> Ne pas afficher la colonne de saisie des éléments de programmes dans la saisie d'appréciations, et donc dans les bulletins</label></p>

	<p style='margin-left:2em;text-indent:-2em;'><input type='checkbox' name='insert_mass_appreciation_type' id='insert_mass_appreciation_type' value='y' <?php
	if(getSettingAOui("insert_mass_appreciation_type")) {echo "checked ";}
	?>/><label for='insert_mass_appreciation_type'> Permettre l'insertion d'appréciations par lots pour les comptes de statut <strong>secours</strong>.<br />
	Cela permet d'insérer par exemple un tiret pour tous les élèves dans le cas d'une absence longue sur un enseignement.<br />
	L'appréciation une fois remplie avec un tiret, le test de remplissage alertant que les bulletins ne sont pas remplis ne posera plus de problème.</label><br />
	<?php
		$sql="CREATE TABLE IF NOT EXISTS b_droits_divers (login varchar(50) NOT NULL default '', nom_droit varchar(50) NOT NULL default '', valeur_droit varchar(50) NOT NULL default '') ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;";
		$create_table=mysqli_query($GLOBALS["mysqli"], $sql);

		echo "Donner également ce droit aux utilisateurs suivants&nbsp;:<br />";
		echo "<div style='margin-left:5em;'>";
		$tab_user_preselectionnes=array();
		$sql="SELECT * FROM b_droits_divers WHERE nom_droit='insert_mass_appreciation_type' AND valeur_droit='y';";
		$res_mass=mysqli_query($mysqli, $sql);
		while($lig_mass=mysqli_fetch_object($res_mass)) {
			$tab_user_preselectionnes[]=$lig_mass->login;
		}
		/*
		echo "<pre>";
		print_r($tab_user_preselectionnes);
		echo "</pre>";
		*/
		echo liste_checkbox_utilisateurs(array("professeur", "scolarite", "cpe"), $tab_user_preselectionnes, 'login_user_mass_app', 'cocher_decocher', "y");
		echo "</div>";
	?>

	<p style='margin-top:1em;'><em>NOTES&nbsp;:</em></p>
	<ul>
		<li><p>N'oubliez pas de paramétrer l'autorisation/interdiction d'accès pour les élèves/responsables dans Gestion générale/Droits d'accès.</p></li>
		<li><p>Pour les graphes, vous pouvez choisir de ne pas afficher la moyenne générale via le Paramétrage des graphes.</p></li>
	</ul>

	<p class="center">
	  <input type="hidden" name="is_posted" value="param_divers" />
	  <input type="submit" value="Enregistrer" />
	</p>

</form>

<br />

  <form action="index_admin.php" id="form2" method="post" style='border: 1px solid grey; background-image: url("../images/background/opacite50.png")'>
<?php
	echo add_token_field();
?>
	<input type="hidden" name="is_posted" value="1" />

	<h2 class="colleHaut">Absences sur les bulletins</h2>
	<p>
	  Vous pouvez souhaiter vider les enregistrements d'absences (*) réalisés pour les bulletins de façon à refaire un remplissage des absences par la suite.<br />
	  Cela ne supprime pas les enregistrements effectués dans les modules Absence de Gepi.<br />
	<?php
		if(getSettingValue("active_module_absence") == '2') {
			echo "
	  Dans le cas où vous utilisez le module Absences 2, le \"vidage\" ne fonctionne que si vous avez opté pour un import manuel des absences.";
		}
	?>
	</p>

	<p class="center">
	  <input type="hidden" name="is_posted" value="1" />
	  <input type="hidden" name="vider_absences_bulletins" value="y" />
	  <input type="submit" value="Vider les saisies absences des bulletins" />
	</p>
	<p style='color:red; text-align:center;'>ATTENTION : L'opération est irréversible.<br />
	De plus, elle concerne toutes les classes et ce pour toutes les périodes.</p>

	<br />
	<p>(*) Les nombre de demi-journées d'absences, nombre d'absences non justifiées, nombre de retards et observation du CPE seront supprimées.</p>
</form>

	<br />
	<div style='border: 1px solid grey; background-image: url("../images/background/opacite50.png")'>
	<h2 class="colleHaut">Divers</h2>

	<ul>
		<li>
			<p><a href='../gestion/param_gen.php#mode_ouverture_acces_appreciations'>Définir le mode d'ouverture de l'accès parents/élèves aux appréciations et avis du conseil de classe</a><br />
			et <a href='../classes/acces_appreciations.php'>consulter/modifier l'accès pour les différentes classes et périodes</a></p>
		</li>
<?php
	if(acces("/gestion/gestion_signature.php", $_SESSION['statut'])) {
		echo "
		<li>
			<p style='margin-top:2em;'><a href='../gestion/gestion_signature.php'>Définir, modifier ou supprimer un ou des fichiers de signature pour les bulletins.</a></p>
		</li>\n";
	}
?>
		<li>
			<p><a href='../mod_engagements/index_admin.php'>Définir les engagements</a> (<em>délégués de classe, délégués de parents,...</em>)</p>
		</li>
		<li>
			<p><a href='../mod_ooo/gerer_modeles_ooo.php#MODULE_Engagements'>Modifier les modèles de documents liés aux engagements</a></p>
		</li>
	</ul>
	</div>

<!-- Début du pied -->
	<div id='EmSize' style='visibility:hidden; position:absolute; left:1em; top:1em;'></div>

	<script type='text/javascript'>
		var ele=document.getElementById('EmSize');
		var em2px=ele.offsetLeft
		//alert('1em == '+em2px+'px');
	</script>


	<script type='text/javascript'>
		temporisation_chargement='ok';
	</script>

</div>

		<?php
			if ($tbs_microtime!="") {
				echo "
   <p class='microtime'>Page générée en ";
   			echo $tbs_microtime;
				echo " sec</p>
   			";
	}
?>

		<?php
			if ($tbs_pmv!="") {
				echo "
	<script type='text/javascript'>
		//<![CDATA[
   			";
				echo $tbs_pmv;
				echo "
		//]]>
	</script>
   			";
		}
?>

</body>
</html>


