function request() {
	var NSS = document.getElementById('NSS');
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('NSSPATIENT').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "patientaafficher.php?NSS="+NSS.value, true);
	xhr.send(null);
	
}
function requestsynthese() {
	var NSS = document.getElementById('NSS');
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('NSSPATIENT2').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "patientaaffichersynthese.php?NSS="+NSS.value, true);
	xhr.send(null);
	
}

function requestnss() {
	var nom = document.getElementById('nom');
	var a = document.getElementById('a');
	var m = document.getElementById('m');
	var j = document.getElementById('j');
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('RETROUVERNSS').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "retrouvernsspatient.php?nom="+nom.value+"&a="+a.value+"&m="+m.value+"&j="+j.value, true);
	xhr.send(null);
	
}

function modificationpatient(){
var N = document.getElementById('N');
var P = document.getElementById('P');
var A = document.getElementById('A');
var D = document.getElementById('D');
var NUM = document.getElementById('NUM');
var PRO = document.getElementById('PRO');
var SF = document.getElementById('SF');
//var SC = document.getElementById('SC');
var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('modifpatient').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "modificationpatient.php?N="+N.value+"&P="+P.value+"&A="+A.value+"&D="+D.value+"&NUM="+NUM.value+"&PRO="+PRO.value+"&SF="+SF.value/*+"&SC="+SC.value*/, true);
	xhr.send(null);
} 

function patient() {
	var NSS = document.getElementById('NSS');
	var M = document.getElementById('M');
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('patient').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "patient.php?NSS="+NSS.value+"&M="+M.value, true);
	xhr.send(null);
	

	}
	

function requestsolde(){
	var NSS = document.getElementById('NSS');
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('soldepatient').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "soldepatient.php?NSS="+NSS.value, true);
	xhr.send(null);

}

function prendrerdv(){
	var NSS = document.getElementById('NSS2');
	var motif = document.getElementById('motif');
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('choixMed2').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "prendrerdv.php?motif="+motif.value+"&NSS="+NSS.value, true);
	xhr.send(null);

}

function prendrerdv2(champ){
var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('choixMed2').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "prendrerdv2.php?champ="+champ.value, true);
	xhr.send(null);

}

function operation(){
var NSS = document.getElementById('NSS');
var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('patient2').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "operationpatient.php?NSS="+NSS.value, true);
	xhr.send(null);

}

function rafraichir(){
var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('choixMed2').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "rafraichir.php", true);
	xhr.send(null);

}


function choixMed(){
	var choixMed = document.getElementById('choixMed');
	var choixSP = document.getElementById('choixSP');
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('choixMed2').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "PlanningSemaine.php?choixMed="+choixMed.value+"&choixSP="+choixSP.value, true);
	xhr.send(null);

}

function afficheremployes(){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('afficheremployes').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "afficheremployes.php", true);
	xhr.send(null);
}

function afficheremploye2(champ){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('afficheremployes').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "modificationmployes.php?champ="+champ.value, true);
	xhr.send(null);
}

function modifieractes(champ){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('actes').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "modificationactes.php?champ="+champ.value, true);
	xhr.send(null);
}

function modificationemployes(){
	var N = document.getElementById('N');
	var P = document.getElementById('P');
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('afficheremployes').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "modificationmployes2.php?N="+N.value+"&P="+P.value, true);
	xhr.send(null);
}

function ajouteremploye(){
	var cat = document.getElementById('cat');
	var nom = document.getElementById('nom');
	var mdp = document.getElementById('mdp');
	var sp = document.getElementById('sp');
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('afficheremployes').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "ajouteremploye.php?cat="+cat.value+"&nom="+nom.value+"&mdp="+mdp.value+"&sp="+sp.value, true);
	xhr.send(null);
}

function modificationemployessupp(){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('afficheremployes').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "supprimeremploye.php", true);
	xhr.send(null);
}

function listepi(champ){
var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('listepieces').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "modifierlistepiece.php?champ="+champ.value, true);
	xhr.send(null);
}

function modifierpieces(){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('listepieces').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "listepieces.php", true);
	xhr.send(null);
}

function modifierlistepiece(){
	var liste = document.getElementById('liste');
	var cons = document.getElementById('cons');
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('listepieces').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "modifierlistepiece2.php?liste="+liste.value+"&cons="+cons.value, true);
	xhr.send(null);
}

function testmontant(champ){
if (isNaN(champ.value)){
surligne(champ, true);
} else{
surligne(champ, false);
}
}

function nombre(champ){
if (isNaN(champ.value)){
surligne(champ, true);
} else{
surligne(champ, false);
}
}

function nom(champ){
if (!isNaN(champ.value)){
surligne(champ, true);
} else{
surligne(champ, false);
}
}


function surligne(champ, erreur){
	if (erreur==true){
		champ.style.backgroundColor = "#FFBBAA";
	}else{
		champ.style.backgroundColor = "GREEN";
	}
}

function payer(){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('patient2').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "payer.php", true);
	xhr.send(null);

}

function modifactes(){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('actes').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "modifieractes.php", true);
	xhr.send(null);
}

function modifieractes2(){
	var prix = document.getElementById('prix');
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('actes').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "modificationactes2.php?prix="+prix.value, true);
	xhr.send(null);
}

function modifieractes2supp(){

	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('actes').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "modificationactessuppr.php", true);
	xhr.send(null);
}

function ajouteracte(){
	var n = document.getElementById('n');
	var p = document.getElementById('prix');
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById('actes').innerHTML=xhr.responseText;
	}
	};
	xhr.open("GET", "ajouteracte.php?n="+n.value+"&p="+p.value, true);
	xhr.send(null);
}

function nombre2(champ){
if (isNaN(champ.value) || (champ.value.length<2)){
surligne(champ, true);
} else{
surligne(champ, false);
}
}

function nombre20(champ){
if (isNaN(champ.value) || (champ.value>19)){
surligne(champ, true);
} else{
surligne(champ, false);
}
}

function nombre4(champ){
if (isNaN(champ.value) || (champ.value.length<4)){
surligne(champ, true);
} else{
surligne(champ, false);
}
}
 
 
 
 
 
