<?php
/*
                             4.
                             e$$$$ec.
                             $$$$$$$$$e     zdP**
                    '       4$      ^"*$$$ed$$$$$.
                    -       ^$            "  "*$$$$E
                    F        b     .    ^**r^ $$$$$$$F
                    .       .F  .dL     *$L   .d$$$$$$.
                    "       4F ^  "           $$$$$$$$3$
                   4.       d.                P$$$$$$$.$
                   4F      4$L%             z$$$$$$$$$$$
                   4"      d$$c %.         4$$$$$$$FFb$$
                   4$     4$$$    "         ^$$$$$$$FFL"
                    $     3$$$r           "   $$$$$$$$*"
                    $      4$$           -.  .$$$$$$$$ $
                    $      e$$          -   $$$$$$$$3$.$
                    F .   .$$%            z$$$$$$$$$$dP$
                     d    $$$          4*$$$$$3$$$$$$F$d
                   .$   ze$F         -%^$$$$$$$$$$$$$$$$
                   $  J$$$"         ^bd$$$$$$$$$$$$$$$P$
                  = %d$$$  -.e        **$$$$$$$$$$$$$*$$
                4)% $$$$$$$$  .^.^  ..ze$$$$$$$$$$$$$$$$
              *@=L  *$$$$$$$$$$PP    * *$$$$$$.$$$$$$$$$
            .$      ""3$$$$P"%          "   -"$$$$$$$$$P
          dP*       *$*" "                    '$$$$$J$$$
       .eL^        .$$d."                      3$$$$F$$$
       4$         z$$$F"                        $$$$$.$$
       $         $$$$$"                        ^$$$$$^$$
       F        d$$$=                           d$$$$4$$
       b       J$$%    .                       d$$$$$*$$
       $E.    4$$$c  d$*$-           .e$.      '$$$$%dJ$
        $$.   d$$$  ^*P*            F  3F       d$$$.*$$
         $P   $$$e-               J$   ^$.     *"*$$E$$$
         $$- z$$$C.              z$$-  d$$.      $$$$$$$
        4$F '$$$$$$l           .$$$$*E$$$"$     "4$deJ$$
        4$F e$$$ "$$$$e\    ee$$P"" z$$P  ^b    - $$$$$$
        4$$ $$$"     """"""""      ^*$P   3$     % *$$$$
        4$$$$$$.                .J$$$F    %4       *$$%$
        4$$$$$$F                *$$$F     .^)       *Fd$
         $$$$$$$                $$$$                -$$$
         $$$$$$$$              J$$$          L       $*$
         3$$$$$$$$             $$$F          '       '$
         ^$$$$$$$$$           J$$$            %       F
          $CHAT$$$$$c        ^$$$$            4       4

		  */
		  
		
session_start();
		$host ='localhost';
		$user='root';
		$bdd='clinique';
		mysql_connect($host,$user) or die('erreur de connexion au serveur ');
		mysql_select_db($bdd) or die('erreur de connexion a la base de donnees');
		
		
		$NSS=$_SESSION['NSS'];
		

	
	
	
		
		
	$N = $_GET['N'];
	if(!empty($N)){
			$query="UPDATE patient SET nom='$N' WHERE NSS='$NSS'";
			mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			
			}
			
	$P = $_GET['P'];
	if(!empty($P)){
			$query="UPDATE patient SET prenom='$P' WHERE NSS='$NSS'";
			mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			}
	
	$D = $_GET['D'];
	if(!empty($D)){
			$query="UPDATE patient SET naissance='$D' WHERE NSS='$NSS'";
			mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			}
			
	$A = $_GET['A'];
	if(!empty($A)){
			$query="UPDATE patient SET adresse='$A' WHERE NSS='$NSS'";
			mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			}
		
	$NUM = $_GET['NUM'];
	if(!empty($NUM)){
			$query="UPDATE patient SET numero='$NUM' WHERE NSS='$NSS'";
			mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			}
			
	$PRO = $_GET['PRO'];
	if(!empty($PRO)){
			$query="UPDATE patient SET profession='$PRO' WHERE NSS='$NSS'";
			mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			}
			
	$SF = $_GET['SF'];
	if(!empty($SF)){
			$query="UPDATE patient SET SF='$SF' WHERE NSS='$NSS'";
			mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			}
			
	/*$SC = $_GET['SC'];
	if(!empty($SC)){
			$query="UPDATE patient SET SC='$SC' WHERE NSS='$NSS'";
			mysql_query($query) or die('Erreur lors de l\'envoi<br />'.mysql_error());
			}
			echo'<a href="agents.php">!rafraichissement!</a>';*/
		
?>
				
			
