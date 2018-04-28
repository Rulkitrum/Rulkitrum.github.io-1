<!DOCTYPE html>
<html>
<head>
   <title>Form</title>
     <meta http-equiv="content-type" content="text/html; charset=UTF-8">
 </head>
 <body>
     
     <div style="margin: 0 auto;width: 800px; text-align: left;">
     
     <br /><br />
  <form action="https://rulkitrum.github.io/Rulkitrum.github.io-1/" method="post">
       <font face= 'Trebuchet MS' size= '2.5'><strong>inOne KMU:</strong></p>

    <input type="radio" name="Einkauf[Internet]" value="<font face= 'Trebuchet MS' size= '2.5'><strong>Business Internet</strong> <br/> Option S: 40 Mbit/s max. Down- und Upload</p>"> Internet S<br>
    <input type="radio" name="Einkauf[Internet]" value="<font face= 'Trebuchet MS' size= '2.5'><strong>Business Internet</strong> <br/> Option M: 100 Mbit/s max. Down- und Upload</p>"> Internet M<br>
    <input type="radio" name="Einkauf[Internet]" value="<font face= 'Trebuchet MS' size= '2.5'><strong>Business Internet</strong> <br/> Option L: 1 Gbit/s max. Down- und Upload</p>"> Internet L</p>
	<input type="radio" name="Einkauf[Service]" value="<font face= 'Trebuchet MS' size= '2.5'><strong>Business Services</strong> <br/> Option S: 7x 24h Service- Desk Störungsbehebung nach verfügbaren Kapazitäten. </p>"> Service S<br>
	<input type="radio" name="Einkauf[Service]" value="<font face= 'Trebuchet MS' size= '2.5'><strong>Business Services</strong> <br/> Option M: 7x 24h Service- Desk Störungsbehebung bis zum nächsten Arbeitstag. Ausfallsicherung: Internet Back Up inkl. Stick. </p>"> Service M</p>
	<input type="radio" name="Einkauf[Telefonie]" value="<font face= 'Trebuchet MS' size= '2.5'><strong>Business Telefonie</strong> <br/> Option S:<br/> unlimitierte Anrufe in alle Schweizer Mobilfunk- und Festnetze <br/> 1 Rufnummer<br/>Business Telefonie- App </p>"> Telefonie S<br>
	<input type="radio" name="Einkauf[Telefonie]" value="<font face= 'Trebuchet MS' size= '2.5'><strong>Business Telefonie</strong> <br/> Option M:<br/> unlimitierte Anrufe in alle Schweizer Mobilfunk- und Festnetze <br/> 2 Rufnummern<br/>Business Telefonie- App<br/> 200 Min./Mt. nach EU/USA/CAN</p>"> Telefonie M<br>
	<input type="radio" name="Einkauf[Telefonie]" value="<font face= 'Trebuchet MS' size= '2.5'><strong>Business Telefonie</strong> <br/> Option L:<br/> unlimitierte Anrufe in alle Schweizer Mobilfunk- und Festnetze <br/> 3 Rufnummern<br/>Business Telefonie- App<br/> 500 Min./Mt. nach EU/USA/CAN</p>"> Telefonie L</p>
	
	Zusatznummer CHF 9.00/Mt. <input type="number" name="Einkauf[Zusatznummer]" value="<font face= 'Trebuchet MS' size= '2.5'>Zusatznummer</p>"><br>
	
	<br>
	
 <p><input type="submit" name="absenden" value="Vorlage generieren"></p>
     </form>
     
     <br />
          <div style="text-align: left;">

		  
<?php

 if (isset($_POST['absenden'])){


     $Internet_S= 0;
     $Internet_M = 0;
     $Internet_L = 0;
	 $Service_S= 0;
	 $Service_M = 0;
     $Telefonie_S = 0;
	 $Telefonie_M = 0;
	 $Telefonie_L = 0;
	 $Zusatznummer_9 = 0;
     $TV_Public = 0;
     $Telefonie_S = 0;
     $Telefonie_M = 0;
     $Telefonie_L = 0;

     if (in_array("<font face= 'Trebuchet MS' size= '2.5'><strong>Business Internet</strong> <br/> Option S: 40 Mbit/s max. Down- und Upload</p>", $_POST['Einkauf'])){
             $Internet_S = 100;
        }


     if (in_array("<font face= 'Trebuchet MS' size= '2.5'><strong>Business Internet</strong> <br/> Option M: 100 Mbit/s max. Down- und Upload</p>", $_POST['Einkauf'])){
             $Internet_M = 115;
        }

     if (in_array("<font face= 'Trebuchet MS' size= '2.5'><strong>Business Internet</strong> <br/> Option L: 1 Gbit/s max. Down- und Upload</p>", $_POST['Einkauf'])){
             $Internet_L = 125;
        }

     if (in_array("<font face= 'Trebuchet MS' size= '2.5'><strong>Business Services</strong> <br/> Option S: 7x 24h Service- Desk Störungsbehebung nach verfügbaren Kapazitäten. </p>", $_POST['Einkauf'])){
             $Service_S = 0;
        }
		
     if (in_array("<font face= 'Trebuchet MS' size= '2.5'><strong>Business Services</strong> <br/> Option M: 7x 24h Service- Desk Störungsbehebung bis zum nächsten Arbeitstag. Ausfallsicherung: Internet Back Up inkl. Stick. </p>", $_POST['Einkauf'])){
             $Service_M = 15;
        }

     if (in_array("<font face= 'Trebuchet MS' size= '2.5'><strong>Business Services</strong> <br/> Option M: 7x 24h Service- Desk Störungsbehebung bis zum nächsten Arbeitstag. Ausfallsicherung: Internet Back Up inkl. Stick. </p>", $_POST['Einkauf'])){
             $Service_M = 15;
        }
  
     if (in_array("<font face= 'Trebuchet MS' size= '2.5'><strong>Business Telefonie</strong> <br/> Option S:<br/> unlimitierte Anrufe in alle Schweizer Mobilfunk- und Festnetze <br/> 1 Rufnummer<br/>Business Telefonie- App </p>", $_POST['Einkauf'])){
             $Telefonie_S = 0;
        }
		
	   if (in_array("<font face= 'Trebuchet MS' size= '2.5'><strong>Business Telefonie</strong> <br/> Option M:<br/> unlimitierte Anrufe in alle Schweizer Mobilfunk- und Festnetze <br/> 2 Rufnummern<br/>Business Telefonie- App<br/> 200 Min./Mt. nach EU/USA/CAN</p>", $_POST['Einkauf'])){
             $Telefonie_M = 20;
        }	
		
	if (in_array("<font face= 'Trebuchet MS' size= '2.5'><strong>Business Telefonie</strong> <br/> Option L:<br/> unlimitierte Anrufe in alle Schweizer Mobilfunk- und Festnetze <br/> 3 Rufnummern<br/>Business Telefonie- App<br/> 500 Min./Mt. nach EU/USA/CAN</p>", $_POST['Einkauf'])){
             $Telefonie_L = 40;
			 
        }	
		
	if (in_array("<font face= 'Trebuchet MS' size= '2.5'>Zusatznummer</p>", $_POST['Einkauf'])){
             $Zusatznummer_9 = 9;
			 
        }		
	
echo "<font face= 'Trebuchet MS' size= '2.5'>Herzlichen Dank für Ihr Interesse an unseren Produkten und Dienstleistungen. Anbei sende ich Ihnen die gewünschten Produktinformationen zu.<br/><br/>";





         if (isset($_POST['Einkauf'])){
             foreach ($_POST['Einkauf'] as $value) {
                echo $value."<br>";
             }

        }
	
	echo "<font face= 'Trebuchet MS' size= '2.5'><strong>Gesamtpreis CHF </strong>";
	
    echo $Internet_S + $Internet_M + $Internet_L + $Service_S + $Service_M + $Telefonie_S + $Telefonie_M + $Telefonie_L + $Zusatznummer_9 ; 
	
	echo "<font face= 'Trebuchet MS' size= '2.5'><strong>.-/Mt. </strong>";

     echo "<p><span style='font-family: Trebuchet MS;'>Bei weiteren Fragen stehe ich Ihnen gerne unter der Gratisnummer 0800 900 910 von Montag bis Freitag zwischen 8:00 und 17:30 Uhr zur Verfügung. </p><br /><br />";



     }

 ?>
          </div>
         </div>
 </body>
</html>	