
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <h3>Nomor 1</h3>
 <?php 
 	for ($a=7; $a >0 ; $a--) { 
 		if ($a%2==1) {
 			for ($b=0; $b < $a ; $b++) { 
	 			echo "*";
	 		}
	 		echo "<br>";
 		}
 	}
 ?>
 <h3>Nomor 2</h3>
 <?php 
 	for ($a=1; $a<=100 ; $a++) {
 		$cekprima=true; 
 		for ($b=2; $b<$a ; $b++) { 
 			if ($a%$b==0) {
 				$cekprima=false;
 				break;
 			}
 		}
 		if ($a!=1&&$cekprima) {
 			echo $a.", ";
 		}
 	}
 ?>
 <br>
 <h3>Nomor 3</h3>
 <?php
 	$dibagi46=0;
 	$dibagi8=0;
 	$dibagi46or8=0; 
 	echo "Bilangan antara 1 sampai dengan 2014 yang dapat dibagi 4 dan 6 sekaligus, atau dapat dibagi 8<br><br>";
	 for ($a=1; $a <=2014 ; $a++) { 
	 	$cek46=false;
	 	$cek8=false;
	 	if ($a%4==0) {
	 		if ($a%6==0) {
	 			$cek46=true;
	 			$dibagi46++;
	 		}
	 	}
	 	if ($a%8==0) {
	 		$cek8=true;
	 		$dibagi8++;
	 	}
	 	if ($cek8||$cek46) {
	 		echo $a.", ";
	 		$dibagi46or8++;
	 	}
	 }
	 echo "<br><br>Bilangan antara 1 sampai dengan 2014 yang dapat dibagi 4 dan 6 sekaligus, atau dapat dibagi 8 terdapat $dibagi46or8 bilangan<br>";
	 echo "Bilangan antara 1 sampai dengan 2014 yang dapat dibagi 4 dan 6 sekaligus terdapat $dibagi46 bilangan<br>";
	 echo "Bilangan antara 1 sampai dengan 2014 yang dapat dibagi 8 terdapat $dibagi8 bilangan<br>";
 ?>
 <h3>Nomor 4</h3>
 <?php 
 	$hari=array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
 	$hr=(20*365)%7;
 	echo "pada hari $hari[$hr] Upik lahir";
 ?>
 <h3>Nomor 5</h3>
 <?php 
 $dibagi3=0;
 $dibagi5=0;
 $dibagi3or5=0;
 echo "Bilangan antara 1 sampai dengan 100 yang dapat dibagi 3 atau 5<br><br>";
 for ($a=1; $a <=100 ; $a++) { 
 	$cek3=false;
 	$cek5=false;
 	if ($a%3==0) {
 		$cek3=true;
 		$dibagi3++;
 	}
 	if ($a%5==0) {
 		$cek5=true;
 		$dibagi5++;
 	}
 	if ($cek3||$cek5) {
 		echo $a.", ";
 		$dibagi3or5++;
 	}
 }
echo "<br><br>Bilangan antara 1 sampai dengan 100 yang dapat dibagi 3 atau 5 terdapat $dibagi3or5 bilangan<br>";
echo "Bilangan antara 1 sampai dengan 100 yang dapat dibagi 3 terdapat $dibagi3 bilangan<br>";
echo "Bilangan antara 1 sampai dengan 100 yang dapat dibagi 5 terdapat $dibagi5 bilangan<br>"; 

 ?>
 </body>
 </html>