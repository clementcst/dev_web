<!DOCTYPE html>

<html>

	<head>
		<title>Formulaire Clément</title>
		<meta charset="utf-8">  
		<link rel="stylesheet" href="css/formulaire.css">
	</head>

	<body>
	
		<br>
		<center><h1>Ajout d'un enseignement</h1></center>
		<br>

		<?php 

		

		"include recap.php";
		$nom = $prenom = $email = $email2 = $birthday = $adress = $diplome = "";
		$nomErr = $prenomErr = $emailErr= $email2Err = $adressErr = $diplomeErr = $birthdayErr = "";

	if(isset($_POST['Valider']))
	{
    if(isset($_POST['nom'])){
        if(empty($_POST['nom'])){
            $nomErr = "Nom manquant";
        }else{
            $nom = $_POST['nom'];
            if(!preg_match("/^[a-zA-Z]*$/",$nom)){
                $nomErr = "Caractères incorrects";
            }
        }
    }
    if(isset($_POST['prenom'])){
        if(empty($_POST['prenom'])){
            $prenomErr = "prenom manquant";
        }else{
            $prenom = $_POST['prenom'];
            if(!preg_match("/^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/",$prenom)){
                $prenomErr = "Caractères incorrects";
            }
        }
    }
    if(isset($_POST['email'])){
        if(empty($_POST['email'])){
            $emailErr = "Email manquant";
        }
    }
    if(isset($_POST['email2'])){
        if(empty($_POST['email2'])){
            $email2Err = "Confirmation email manquante";
        }else{
            $email = $_POST['email'];
            $email2 = $_POST['email2'];
        if($email != $email2){
            $email2Err = "Les mails ne correspondent pas";
            }
        }
    }
    if(isset($_POST['birthday'])){
        $birthday = $_POST['birthday'];
        if(empty($_POST['birthday'])){
            $birthdayErr = "Date de naissance manquante";
        }else{
            $aujourdhui = date("Y-m-d");
            $diff = date_diff(date_create($birthday), date_create($aujourdhui));
            $age = $diff->format('%y');
            if($age < 18){
                $birthdayErr = "Vous devez avoir plus de 18 ans";
            }else{
                if($age > 80){
                    $birthdayErr = "Vous êtes trop âgé";
                }
            }
        }
    }
    
    if(isset($_POST['adress'])){
        $adress = $_POST['adress'];
        if(empty($_POST['adress'])){
            $adressErr = "Adresse manquante";
        }
    }
    if(isset($_POST['diplome'])){
        $diplome = $_POST['diplome'];
        if(empty($_POST['diplome'])){
            $diplomeErr = "Diplôme manquant";
        }
    }
    if($nomErr == "" && $prenomErr == "" && $emailErr == "" && $email2Err == "" && $birthdayErr == "" && $adressErr == "" && $diplomeErr == ""){
        header('Location: recap.php?nom='.$nom . '&prenom='.$prenom . '&email='.$email . '&birthday='.$birthday . '&adresse='.$adress . '&diplome='.$diplome);
    }
}
?>

		<form action="Formulaire.php" method="post" >

		<fieldset>   <!-- fieldset globale contenant les deux parties du formualire-->

			<fieldset style="width: 35%; float: left;">
				
					<legend><strong>Informations personelles</strong></legend>
					<br>
					
					<!-- La patie informations personnelles-->
					<label for='prenom' >Prénom</label> <br>
					<input type='text' name='prenom' id='prenom'  placeholder="Entrez le prénom"  
					<?php 
					if (isset($_POST['Valider']))
					{
						echo 'value="'.$_POST['prenom'].'"';
					}
					?>><br>
					<b style="color:red;"><?php echo $prenomErr ?></b>
            		<!--<span id='missPrenom'></span><br>-->
					<br>
			
					<label for="nom">Nom</label> <br>
					<input type="text" id="nom" name="nom" placeholder="Entrez le Nom" 
					<?php 
					if (isset($_POST['Valider']))
					{
						echo 'value="'.$_POST['nom'].'"';
					}
					?>
					><br>
					<b style="color:red;"><?php echo $nomErr ?></b><br>
					<!--<span id='missnom'></span><br><br>-->
			
					<label for="email">Email</label> <br> 
					<input type="email" id="email" name="email" placeholder="Entrez votre email" 
					<?php 
					if (isset($_POST['Valider']))
					{
						echo 'value="'.$_POST['email'].'"';
					}
					?>
					><br>
					<b style="color:red;"><?php echo $emailErr ?></b><br>
					<!--<span id='missmail'></span><br><br>-->
			
					<label for="email">Confirmation email</label> <br>
					<input type="email" id="email2" name="email2" placeholder="Confirmez votre email" 
					<?php 
					if (isset($_POST['Valider']))
					{
						echo 'value="'.$_POST['email2'].'"';
					}
					?>
					><br>
					<b style="color:red;"><?php echo $email2Err ?></b><br>
					<!--<span id='missmail2'></span><br><br>-->
			
					<label for="birthday">Date de naissance</label> <br>
					<input type="date" id="birthday" name="birthday" min="1900-01-01" max="2022-04-30" 
					<?php 
					if (isset($_POST['Valider']))
					{
						echo 'value="'.$_POST['birthday'].'"';
					}
					?>
					><br><br>
					<b style="color:red;"><?php echo $birthdayErr ?></b><br>
					<!--<span id='missdate'></span><br><br>-->
			
					<label for="adress">Adresse</label> <br>
					<textarea id="adress" name="adress" 
					<?php 
					if (isset($_POST['Valider']))
					{
						echo 'value="'.$_POST['adress'].'"';
					}
					?>
					></textarea><br><br>
					<b style="color:red;"><?php echo $adressErr ?></b><br>
					<!--<span id='missadress'></span><br><br>-->
			
					<label for="sexe">Sexe</label> <br>
                    <label for="Femme"><input id="Homme" type="radio" name="Homme" value="Homme">Homme</label> 
                    <label for="Femme"><input id="Femme" type="radio" name="Homme" value="Femme">Femme</label><br><br>
			
					<label for="grade">Grade</label> <br>
					<select name="grade" id="grade">
						<option value="none">- - - - - - - - - - -</option>
						<option value="assistant">Assistant</option>
						<option value="charge_de_cours">Chargé(e) de cours</option>
						<option value="MCA">MCA</option>
						<option value="MCB">MCB</option>
					</select><br><br>
					<!--<span id='missgrade'></span><br><br>-->
			
					<label for="diplome">Dernier diplome</label> <br>
					<input name="diplome" id="diplome" placeholder="Dernier diplome" list="diplome" 
					<?php 
					if (isset($_POST['Valider']))
					{
						echo 'value="'.$_POST['diplome'].'"';
					}
					?>
					><br>
					<b style="color:red;"><?php echo $diplomeErr ?></b><br>
					<!--<span id='missdiplome'></span><br><br>-->
					
				
				
			</fieldset>

			<fieldset style="width: 35%; float: right;">
					
					<legend><strong>Enseignement et recherche</strong></legend>
					<br>
				
					<!-- La partie enseignement de recherche -->

					<button id="bouton_theo" onclick="bouton(id,'menu_theo')">+</button> <label for="mod_theo">Modules théoriques</label>
					<ul id="menu_theo" style="list-style: none;">
						<li> <input type="checkbox" id="mod_theo" name="mod_theo">Théorie des graphes</li>
						<li> <input type="checkbox" id="mod_theo" name="mod_theo">Théorie des langages</li>
						<li> <input type="checkbox" id="mod_theo" name="mod_theo">Logique mathématiques</li>
					</ul>

					<br>

					<button id="bouton_prog" onclick="bouton(id,'menu_prog')">+</button> <label for="mod_prog">Modules de programmation</label>
					<ul id="menu_prog" style="list-style: none;">
						<li> <input type="checkbox" id="mod_prog" name="mod_prog">Algorithmique</li>
						<li> <input type="checkbox" id="mod_prog" name="mod_prog">Programmation objet</li>
						<li> <input type="checkbox" id="mod_prog" name="mod_prog">Programmation web</li>
						<li> <input type="checkbox" id="mod_prog" name="mod_prog">Programmation fonctionelle</li>
						<li> <input type="checkbox" id="mod_prog" name="mod_prog">Assembleur</li>
					</ul>

					<br>

					<button id="bouton_conc" onclick="bouton(id,'menu_conc')">+</button> <label for="mod_concept">Modules conception et analyse</label>
					<ul id="menu_conc" style="list-style: none;">
						<li> <input type="checkbox" id="mod_concept" name="mod_concept">Génie logiciel</li>
						<li> <input type="checkbox" id="mod_concept" name="mod_concept">Base de données</li>
						<li> <input type="checkbox" id="mod_concept" name="mod_concept">Base de données avancée</li>
						<li> <input type="checkbox" id="mod_concept" name="mod_concept">UML</li>
						<li> <input type="checkbox" id="mod_concept" name="mod_concept">UML avancé</li>
						<li> <input type="checkbox" id="mod_concept" name="mod_concept">Inteligence artificielle</li>
						<li> <input type="checkbox" id="mod_concept" name="mod_concept">Big data</li>
						<li> <input type="checkbox" id="mod_concept" name="mod_concept">Cloud Computing</li>
					</ul>

					<br>

					<button id="bouton_mod" onclick="bouton(id,'menu_mod')">+</button> <label for="mod_other">Autres modules</label>
					<ul id="menu_mod" style="list-style: none;">
						<li> <input type="checkbox" id="mod_other" name="mod_other">Architecture des ordinateurs I</li>
						<li> <input type="checkbox" id="mod_other" name="mod_other">Architecture des ordinateurs II</li>
						<li> <input type="checkbox" id="mod_other" name="mod_other">Système d'exploitation</li>
						<li> <input type="checkbox" id="mod_other" name="mod_other">Système d'exploitation avancé</li>
						<li> <input type="checkbox" id="mod_other" name="mod_other">Réseau</li>
						<li> <input type="checkbox" id="mod_other" name="mod_other">Réseau avancé</li>
						<li> <input type="checkbox" id="mod_other" name="mod_other">Sécurité</li>
						<li> <input type="checkbox" id="mod_other" name="mod_other">Sécurité avancé</li>
					</ul>
					<br><br>
				<input  type='submit' name="Valider" value='Valider'   style="color:white;background-color:blue">
                <input  type='submit' value="Annuler" style="color:white;background-color:blue">

            </fieldset>

		</fieldset>

		<br>
		</form>
		<br>
		
	<script>
           /* var formValid = document.getElementById('bouton_envoi');
            var prenom = document.getElementById('prenom');
            var missPrenom = document.getElementById('missPrenom');
			var nom = document.getElementById('nom');
            var missnom = document.getElementById('missnom');
			var mail = document.getElementById("email");
			var missmail = document.getElementById("missmail");
			var mail2 = document.getElementById("email2");
			var missmail2 = document.getElementById("missmail2");
			var date = document.getElementById("birthday");
			var missdate = document.getElementById("missdate");
			var adress = document.getElementById("adress");
			var missadress = document.getElementById("missadress");
			var diplome = document.getElementById("diplome");
			var missdiplome = document.getElementById("missdiplome");
			var grade = document.getElementById("grade");
            var prenomValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
			var nomValid =  /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
            var mailValid = /^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
			var dateValid =  /(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/;
			

            formValid.addEventListener('click', validation);
            
		    function verifdate(date){
				var a=date.value.split('-');
				if ( a[0]> 2022 || a[0] <1900){ return false}
				if ( a[1] < 1 || a[1] > 11 ){
					return false;
				}if ( a == 1 || a == 3 || a == 5 || a == 7 || a == 8 || a == 10 || a == 12){
					if (a[2]<1 || a[2]>31){
						return false;
					} else if (a[2]<1 || a[2]>30){
						return false;
					}
				}
				return true;
			}
			

			function validation(event){

	
                //Si le champ est vide
                if (prenom.validity.valueMissing){
                    event.preventDefault();
                    missPrenom.textContent = 'Prénom manquant';
                    missPrenom.style.color = 'red';
                //Si le format de données est incorrect
                }else if (prenomValid.test(prenom.value) == false){
                    event.preventDefault();
                    missPrenom.textContent = 'Format incorrect';
                    missPrenom.style.color = 'orange';
                }else{ 
					missPrenom.textContent = ' ';
                }

				if (nom.validity.valueMissing){
                    event.preventDefault();
                    missnom.textContent = 'Nom manquant';
                    missnom.style.color = 'red';
                //Si le format de données est incorrect
                }else if (nomValid.test(nom.value) == false){
                    event.preventDefault();
                    missnom.textContent = 'Format incorrect';
                    missnom.style.color = 'orange';
                }else{ 
					missnom.textContent = ' ';
                }
				//Si le champ est vide
				if (mail.validity.valueMissing){
                    event.preventDefault();
                    missmail.textContent = 'Mail manquant';
                    missmail.style.color = 'red';
                //Si le format de données est incorrect
                }else if (mailValid.test(mail.value) == false){
                    event.preventDefault();
                    missmail.textContent = 'Format incorrect';
                    missmail.style.color = 'orange';
                }else{ 
					missmail.textContent = ' ';
                }
				if (mail2.validity.valueMissing){
                    event.preventDefault();
                    missmail2.textContent = 'Mail manquant';
                    missmail2.style.color = 'red';
                //Si le format de données est incorrect
                }else if (mail2.value != mail.value){
                    event.preventDefault();
                    missmail2.textContent = 'Les 2 mails ne correspondent pas !';
                    missmail2.style.color = 'orange';
                }else{ 
					missmail2.textContent = ' ';
                }
				if (date.validity.valueMissing){
                    event.preventDefault();
                    missdate.textContent = 'La date manquante';
                    missdate.style.color = 'red';
                //Si le format de données est incorrect
                }else if (verifdate(date) == false){
                    event.preventDefault();
                    missdate.textContent = 'Format incorrect';
                    missdate.style.color = 'orange';
                }else{ 
					missdate.textContent = ' ';
                }
				if (adress.validity.valueMissing){
                    event.preventDefault();
                    missadress.textContent = 'L adresse manquante';
                    missadress.style.color = 'red';
                //Si le format de données est incorrect
                }else{ 
					missadress.textContent = ' ';
                }
				if (diplome.validity.valueMissing){
                    event.preventDefault();
                    missdiplome.textContent = 'Le diplome est manquant';
                    missdiplome.style.color = 'red';
                //Si le format de données est incorrect
                }else{ 
					missdiplome.textContent = ' ';
                }
				if (grade.value == "none"){
                    event.preventDefault();
                    missgrade.textContent = 'Aucun grade n est selectionné';
                    missgrade.style.color = 'red';
                //Si le format de données est incorrect
                }else{ 
					missgrade.textContent = ' ';
                }
            }

			*/function bouton(btn,navi){
    		var bouton = document.getElementById(btn);
    		var nav = document.getElementById(navi);
   			 bouton.onclick = function(e){
        	if(nav.style.display=="block"){
            nav.style.display="none";
        	}else{
            nav.style.display="block";
        	}
    	};
};
			
        </script>

	</body>
	
</html>