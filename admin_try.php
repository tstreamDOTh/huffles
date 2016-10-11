
			
			
			
			
			
			<div class="col-xs-12">
			
						<?php
					
						if(isset($_POST['submit'])){
				$connection=mysqli_connect('localhost','root','','huffles');
							$shopname=$_POST['shopname'];
							$owner=$_POST['ownername'];
							$address=$_POST['address'];
							$mobile=$_POST['mobile'];
							$email=$_POST['email'];
							$password=$_POST['password'];
							$location=$_POST['location'];
							$a=$_POST['a'];
			                $b=$_POST['b'];
							$c=$_POST['c'];
							$d=$_POST['d'];
							$e=$_POST['e'];
							$f=$_POST['f'];
							$g=$_POST['g'];
							$h=$_POST['h'];
							$i=$_POST['i'];
							$j=$_POST['i'];
							$k=$_POST['k'];
							$l=$_POST['l'];
							$n=$_POST['n'];
							$o=$_POST['o'];
							$p=$_POST['p'];
							$q=$_POST['q'];
							$r=$_POST['r'];
							$s=$_POST['s'];
							$t=$_POST['t'];
							$u=$_POST['u'];
							$v=$_POST['v'];
							$w=$_POST['w'];
							$x=$_POST['x'];
							$y=$_POST['y'];
							$z=$_POST['z'];
							$aa=$_POST['aa'];
							$bb=$_POST['bb'];
							$cc=$_POST['cc'];
							$dd=$_POST['dd'];
							$ee=$_POST['ee'];
							$ff=$_POST['ff'];
							$gg=$_POST['gg'];
							$hh=$_POST['hh'];
							$ii=$_POST['ii'];
							$jj=$_POST['jj'];
							$kk=$_POST['kk'];
							$ll=$_POST['ll'];
							$mm=$_POST['mm'];
							$nn=$_POST['nn'];
							$oo=$_POST['oo'];
							$pp=$_POST['pp'];
							$qq=$_POST['qq'];
							$rr=$_POST['rr'];
							$ss=$_POST['ss'];
							$tt=$_POST['tt'];
							$uu=$_POST['uu'];
							$vv=$_POST['vv'];
							$vv=$_POST['vv'];
							$ww=$_POST['ww'];
							$xx=$_POST['xx'];
							$yy=$_POST['yy'];
							$zz=$_POST['zz'];
							$aaa=$_POST['aaa'];
							$bbb=$_POST['bbb'];
							$ccc=$_POST['ccc'];
							$ddd=$_POST['ddd'];
							$eee=$_POST['eee'];
							$fff=$_POST['fff'];
							$ggg=$_POST['ggg'];
							$hhh=$_POST['hhh'];
							$iii=$_POST['iii'];
							$jjj=$_POST['jjj'];
							$kkk=$_POST['kkk'];
							$lll=$_POST['lll'];
							$mmm=$_POST['mmm'];
							$nnn=$_POST['nnn'];
							$ooo=$_POST['ooo'];
							$ppp=$_POST['ppp'];
							$qqq=$_POST['qqq'];
							$rrr=$_POST['rrr'];
							$sss=$_POST['sss'];
							$ttt=$_POST['ttt'];
							$uuu=$_POST['uuu'];
							$vvv=$_POST['vvv'];
							$www=$_POST['www'];
							$xxx=$_POST['xxx'];
							$yyy=$_POST['yyy'];
							$zzz=$_POST['zzz'];
							$aaaa=$_POST['aaaa'];
							$bbbb=$_POST['bbbb'];
							$cccc=$_POST['cccc'];
							$dddd=$_POST['dddd'];
							$eeee=$_POST['eeee'];
							$ffff=$_POST['ffff'];
							$gggg=$_POST['gggg'];
							$hhhh=$_POST['hhhh'];
							$iiii=$_POST['iiii'];
							$jjjj=$_POST['jjjj'];
							$kkkk=$_POST['kkkk'];
							$llll=$_POST['llll'];
							$mmmm=$_POST['mmmm'];
							$nnnn=$_POST['nnnn'];
							$oooo=$_POST['oooo'];
							$pppp=$_POST['pppp'];
							$qqqq=$_POST['qqqq'];
							$rrrr=$_POST['rrrr'];
							$ssss=$_POST['ssss'];
							$tttt=$_POST['tttt'];
							$uuuu=$_POST['uuuu'];
							$vvvv=$_POST['vvvv'];
							$wwww=$_POST['wwww'];
							$xxxx=$_POST['xxxx'];
							$yyyy=$_POST['yyyy'];
							$zzzz=$_POST['zzzz'];
							$aaaaa=$_POST['aaaaa'];
							$bbbbb=$_POST['bbbbb'];
							$ccccc=$_POST['ccccc'];
							$ddddd=$_POST['ddddd'];
							$eeeee=$_POST['eeeee'];
							$fffff=$_POST['fffff'];
							$ggggg=$_POST['ggggg'];
							$hhhhh=$_POST['hhhhh'];
							$iiiii=$_POST['iiiii'];
							$jjjjj=$_POST['jjjjj'];
							$kkkkk=$_POST['kkkkk'];
							$lllll=$_POST['lllll'];
							$mmmmm=$_POST['mmmmm'];
							$nnnnn=$_POST['nnnnn'];
							$ooooo=$_POST['ooooo'];
							$ppppp=$_POST['ppppp'];
							$qqqqq=$_POST['qqqqq'];
							$rrrrr=$_POST['rrrrr'];
							$sssss=$_POST['sssss'];
							$ttttt=$_POST['ttttt'];
							$uuuuu=$_POST['uuuuu'];
							$vvvvv=$_POST['vvvvv'];
							$wwwww=$_POST['wwwww'];
							$xxxxx=$_POST['xxxxx'];
							$yyyyy=$_POST['yyyyy'];
							$zzzzz=$_POST['zzzzz'];
							$aaaaaa=$_POST['aaaaaa'];
							$bbbbbb=$_POST['bbbbbb'];
							$cccccc=$_POST['cccccc'];
							$dddddd=$_POST['dddddd'];
							$eeeeee=$_POST['eeeeee'];
						
							$post_image=$_FILES['image']['name'];
							$post_image_tmp=$_FILES['image']['tmp_name'];
							
							move_uploaded_file($post_image_tmp,"images/$post_image");
							
							
							$q="INSERT INTO petstores(name,image,location,phone,email)";	
						$q.="VALUES('{$owner}','{$post_image}','{$address}','{$mobile}','{$email}')";
							
							$c=mysqli_query($connection,$q);
							
							$firstname=escape($shopname);
    $lastname=escape($shopname);
	$username=escape($shopname);
	$email=escape($email);
	$pass=escape($password);
	
	
	if(email_exists($email)){
		return false;
	}else if(username_exists($username)){ 
		return false;
	}else {
		$pass=md5($pass);
		$validation_code=md5($username+microtime());
		
		$sql="INSERT INTO usertry(username,password,user_firstname,user_lastname,user_email,user_image,user_role,validation_code)";
		$sql.="VALUES('$username','$pass','$firstname','$lastname','$email','image','user','$validation_code')";
					$insertman=mysqli_query($connection,$sql);
if($insertman){
	set_message("<p class='bg-success text-center'>Your listing has been added</p>");
}					
	}		
							
								$query="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email) VALUES ('DOGS','puppies','Labrador Retriever','{$a}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')";
						         $reate_category_query=mysqli_query($connection,$query);
							 
							 $query1="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
						$query1.="VALUES ('DOGS','puppies','German Shepherd','{$b}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $eate_category_quer=mysqli_query($connection,$query1);
							  $query2="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
						$query2.="VALUES ('DOGS','puppies','Golden Retriever','{$c}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $ate_category_que=mysqli_query($connection,$query2);
							 $query3="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query3.="VALUES ('DOGS','puppies','Bulldog','{$d}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query3);
							  $query4="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query4.="VALUES ('DOGS','puppies','Beagle','{$e}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query4);
							  $query5="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query5.="VALUES ('DOGS','puppies','French Bulldog','{$f}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query5);
			                $query6="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query6.="VALUES ('DOGS','puppies','Yorkshire Terrier','{$g}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query6);
							 							  $query7="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query7.="VALUES ('DOGS','puppies','Poodle Standard','{$h}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query7);
							 							  $query8="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query8.="VALUES ('DOGS','puppies','Rottweiler','{$i}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query8);
							 							  $query9="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query9.="VALUES ('DOGS','puppies','Boxer','{$k}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query9);
							 							  $query10="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query10.="VALUES ('DOGS','puppies','Siberian Husky','{$l}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query10);
							 							  $query11="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query11.="VALUES ('DOGS','puppies','Doberman Pinscher','{$n}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query11);
							 							  $query12="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query12.="VALUES ('DOGS','puppies','St. Bernard','{$o}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query12);
							 							  $query13="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query13.="VALUES ('DOGS','puppies','Pomeranian','{$p}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query13);
							 							  $query14="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query14.="VALUES ('DOGS','food','Food pouches','{$q}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query14);
							 							  $query15="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query15.="VALUES ('DOGS','food','Dry food','{$r}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query15);
							 	 							  $query16="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query16.="VALUES ('DOGS','food','Canned Food','{$s}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query16);
							 							  $query17="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query17.="VALUES ('DOGS','food','Puppy Food','{$t}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query17);
							 	 							  $query18="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query18.="VALUES ('DOGS','accessories','Collars','{$u}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query18);
							 							  $query19="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query19.="VALUES ('DOGS','accessories','Harnesses','{$v}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query19);
							 	 							  $query20="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query20.="VALUES ('DOGS','accessories','Leashes','{$w}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query20);
							 							  $query21="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query21.="VALUES ('DOGS','accessories','Cages','{$x}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query21);
							 	 							  $query22="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query22.="VALUES ('DOGS','accessories','Hunter sticks','{$y}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query22);
							  $query23="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query23.="VALUES ('DOGS','accessories','Muzzles','{$z}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query23);
							  $query24="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query24.="VALUES ('DOGS','accessories','Pet Diapers','{$aa}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query24);
							  $query25="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query25.="VALUES ('DOGS','accessories','Shit scoopers','{$bb}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query25);
							  $query26="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query26.="VALUES ('DOGS','accessories','Goggles','{$cc}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query26);
							  $query27="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query27.="VALUES ('DOGS','accessories','Travelling carriers','{$dd}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query27);
							  $query28="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query28.="VALUES ('DOGS','accessories','Clothes','{$ee}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query28);
							  $query29="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query29.="VALUES ('DOGS','accessories','Shoes','{$ff}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query29);
							  $query30="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query30.="VALUES ('DOGS','accessories','Socks','{$gg}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query30);
							  $query31="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query31.="VALUES ('DOGS','accessories','Bowls','{$hh}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query31);
							  $query32="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query32.="VALUES ('DOGS','toys','Chew toys','{$ii}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query32);
							  $query33="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query33.="VALUES ('DOGS','toys','Fun toys','{$jj}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query33);
							  $query34="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query34.="VALUES ('DOGS','toys','ROPE toys','{$kk}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query34);
							 
							 
							 $query35="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query35.="VALUES ('DOGS','care','Calcium & Multi-vitamins','{$ll}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query35);
							 $query36="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query36.="VALUES ('DOGS','care','Dewormers','{$mm}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query36);
							 $query37="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query37.="VALUES ('DOGS','care','Supplements','{$nn}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query37);
							 $query38="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query38.="VALUES ('DOGS','care','Flea & Tick','{$oo}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query38);
							 
							  $query39="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query39.="VALUES ('DOGS','care','Bathing utilities','{$pp}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query39);
							  $query40="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query40.="VALUES ('DOGS','care','Brushes and Combs','{$qq}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query40);
							  $query41="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query41.="VALUES ('DOGS','care','Yorkshire Terrier','{$rr}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query41);
							  $query42="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query42.="VALUES ('DOGS','care','Soaps & Powders','{$ss}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query42);
							  $query43="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query43.="VALUES ('DOGS','care','Deodorants','{$tt}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query43);
							  $query44="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query44.="VALUES ('DOGS','care','Nail clippers & Trimmers','{$uu}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query44);
							
						
							
							 
							  $query45="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query45.="VALUES ('DOGS','services','Mating','{$vv}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query45);
							  $query46="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query46.="VALUES ('DOGS','services','Taming','{$ww}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query46);
							  $query47="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query47.="VALUES ('DOGS','services','Grooming','{$xx}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query47);
							 
							 
							  $query48="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query48.="VALUES ('CATS','kitten','Rusty spotted cat','{$yy}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query48);
							  $query49="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query49.="VALUES ('CATS','kitten','Leopard Cat','{$zz}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query49);
							  $query50="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							 $create_category_qu=mysqli_query($connection,$query50);
							  $query51="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query51.="VALUES ('CATS','kitten','Bombay Cat','{$bbb}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query51);
							  $query52="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query52.="VALUES ('CATS','kitten','Maine moon cat','{$ccc}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query52);
							 
							  $query53="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query53.="VALUES ('CATS','kitten','Siamese cat','{$ddd}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query53);
							  $query54="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query54.="VALUES ('CATS','kitten','Persian','{$eee}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query54);
							  $query55="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query55.="VALUES ('CATS','kitten','Maine coon','{$fff}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query55);
							  $query56="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query56.="VALUES ('CATS','kitten','Other Varieties available','{$ggg}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query56);
							  $query57="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query57.="VALUES ('CATS','food','Food pouches','{$hhh}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query57);
							  $query58="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query58.="VALUES ('CATS','food','Dry food','{$iii}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query58);
							  $query59="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query59.="VALUES ('CATS','food','Canned food','{$jjj}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query59);
							 
							 $query60="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query60.="VALUES ('CATS','toys','chew toys','{$kkk}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query60);
							  $query61="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query61.="VALUES ('CATS','toys','fun toys','{$lll}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query61);
							 $query62="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query62.="VALUES ('CATS','toys','SCRATCH toys','{$mmm}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query62);
							 
							 
							  $query63="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query63.="VALUES ('CATS','accessories','Collars','{$nnn}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query63);
							 $query64="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query64.="VALUES ('CATS','accessories','Harnesses','{$ooo}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query64);
							  $query65="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query65.="VALUES ('CATS','accessories','Leashes','{$ppp}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query65);
							   $query66="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query66.="VALUES ('CATS','accessories','Cages','{$qqq}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query66);
							 $query67="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query67.="VALUES ('CATS','accessories','Hunter sticks','{$rrr}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query67);
							  $query68="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query68.="VALUES ('CATS','accessories','Muzzles','{$sss}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query68);
							  $query69="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query69.="VALUES ('CATS','accessories','Goggles','{$ttt}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query69);
							   $query70="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query70.="VALUES ('CATS','accessories','Travelling carriers','{$uuu}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query70);
							 $query71="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query71.="VALUES ('CATS','accessories','Bowls','{$vvv}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query71);
							 
							 
							  $query72="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query72.="VALUES ('BIRDS','chicks','Parakeet','{$www}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query72);
							  $query73="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query73.="VALUES ('BIRDS','chicks','Cockatiel','{$xxx}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query73);
							  $query74="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query74.="VALUES ('BIRDS','chicks','Conure','{$yyy}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query74);
							  $query75="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query75.="VALUES ('BIRDS','chicks','Brazilian Sun Conure','{$zzz}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query75);
							  $query76="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query76.="VALUES ('BIRDS','chicks','African Grey Parrot','{$aaaa}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query76);
							  $query77="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query77.="VALUES ('BIRDS','chicks','Love Bird','{$bbbb}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query77);
							  $query78="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query78.="VALUES ('BIRDS','chicks','Yorkshire Terrier','{$cccc}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query78);
							  $query79="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query79.="VALUES ('BIRDS','chicks','Macaw','{$dddd}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query79);
							  $query80="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query80.="VALUES ('BIRDS','chicks','Cockatoo','{$eeee}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query80);
							  $query81="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query81.="VALUES ('BIRDS','chicks','Blue and Yellow macaw','{$ffff}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query81);
							  $query82="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query82.="VALUES ('BIRDS','chicks','Umbrella Cockatoo','{$gggg}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query82);
							  $query83="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query83.="VALUES ('BIRDS','chicks','Indian rainneck','{$hhhh}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query83);
							  $query84="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query84.="VALUES ('BIRDS','chicks','Diamond Dove','{$iiii}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							
							
							 $create_category_qu=mysqli_query($connection,$query84);
							  $query85="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query85.="VALUES ('BIRDS','food','Calcium and Multivitamin','{$jjjj}','{$owner}','{$location}','{$address}')"	;
							 $create_category_qu=mysqli_query($connection,$query85);
							  $query86="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query86.="VALUES ('BIRDS','food','dry food','{$kkkk}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query86);
							  $query87="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query87.="VALUES ('BIRDS','food','Canned food','{$llll}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query87);
							 
							 
							 
							  $query88="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query88.="VALUES ('BIRDS','accessories','Cages','{$mmmm}','{$owner}','{$location}','{$address}')"	;
							 $create_category_qu=mysqli_query($connection,$query88);
							  $query89="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query89.="VALUES ('BIRDS','accessories','Harnesses','{$nnnn}','{$owner}','{$location}','{$address}')"	;
							 $create_category_qu=mysqli_query($connection,$query89);
							  $query90="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query90.="VALUES ('BIRDS','accessories','Leashes','{$oooo}','{$owner}','{$location}','{$address}')"	;
							 $create_category_qu=mysqli_query($connection,$query90);
							 
							 
							  $query91="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query91.="VALUES ('BIRDS','accessories','Bird Stands','{$qqqq}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query91);
							  $query92="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query92.="VALUES ('BIRDS','accessories','Toys','{$rrrr}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query92);
							  $query93="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query93.="VALUES ('BIRDS','accessories','Food Bowls','{$ssss}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query93);
							  $query94="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query94.="VALUES ('BIRDS','accessories','Feeders','{$tttt}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query94);
							  $query95="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query95.="VALUES ('BIRDS','accessories','Bowls','{$uuuu}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query95);
							  $query96="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query96.="VALUES ('BIRDS','services','Mating','{$vvvv}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query96);
							 
							  
							  $query97="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query97.="VALUES ('BIRDS','services','Taming','{$wwww}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query97);
							  $query98="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query98.="VALUES ('BIRDS','services','Grooming','{$xxxx}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query98);
							 
							 
							  $query99="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query99.="VALUES ('SMALLPETS','PETVARITIES','Iguana','{$yyyy}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query99);
							  $query100="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query100.="VALUES ('SMALLPETS','PETVARITIES','Syrian Hamster','{$zzzz}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query100);
							  $query101="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query101.="VALUES ('SMALLPETS','PETVARITIES','Russian Dwarf Hamster','{$aaaaa}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query101);
							  $query102="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query102.="VALUES ('SMALLPETS','PETVARITIES','Guinea pig','{$bbbbb}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query102);
							  $query103="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query103.="VALUES ('SMALLPETS','PETVARITIES','Rabbits','{$ccccc}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query103);
							  $query104="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query104.="VALUES ('SMALLPETS','PETVARITIES','White mouse','{$ddddd}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query104);
							  $query105="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query105.="VALUES ('SMALLPETS','food','Hamster Snack','{$eeeee}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query105);
							  $query106="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query106.="VALUES ('SMALLPETS','food','Dry food','{$fffff}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query106);
							  $query107="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query107.="VALUES ('SMALLPETS','accessories','Cages','{$ggggg}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query107);
							  $query108="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query108.="VALUES ('SMALLPETS','accessories','Habitats','{$hhhhh}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query108);
							 
							  $query109="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query109.="VALUES ('SMALLPETS','accessories','Hamster Balls','{$iiiii}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query109);
							  $query110="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query110.="VALUES ('SMALLPETS','accessories','Toys','{$jjjjj}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query110);
							   $query111="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query111.="VALUES ('SMALLPETS','accessories','Food Bowls','{$kkkkk}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query111);
							  $query112="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query112.="VALUES ('SMALLPETS','accessories','Feeders','{$lllll}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query112);
							 
							 
							  $query113="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query113.="VALUES ('SMALLPETS','accessories','Water bottles','{$mmmmm}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query113);
							  $query114="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query114.="VALUES ('SMALLPETS','services','Mating','{$nnnnn}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query114);
							   $query115="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query115.="VALUES ('SMALLPETS','services','Taming','{$ooooo}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query115);
							  $query116="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query116.="VALUES ('SMALLPETS','services','Grooming','{$ppppp}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query116);
							 
							 
							 
							  $query117="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query117.="VALUES ('AQUARIUM','BREEDS','Arowana','{$qqqqq}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query117);
							   $query118="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query118.="VALUES ('AQUARIUM','BREEDS','Gold fish','{$rrrrr}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query118);
							  $query119="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query119.="VALUES ('AQUARIUM','BREEDS','Betta Fish','{$sssss}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query119);
							 
							  $create_category_qu=mysqli_query($connection,$query119);
							  $query120="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query120.="VALUES ('AQUARIUM','BREEDS','Fantail Goldfish','{$ttttt}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query120);
							   $query121="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query121.="VALUES ('AQUARIUM','BREEDS','Siamese fighting fish','{$uuuuu}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query121);
							  $query122="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query122.="VALUES ('AQUARIUM','BREEDS','Molly','{$vvvvv}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query122);
							 
							  $create_category_qu=mysqli_query($connection,$query122);
							  $query123="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query123.="VALUES ('AQUARIUM','BREEDS','Angelfish','{$wwwww}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query123);
							   $query124="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query124.="VALUES ('AQUARIUM','BREEDS','Black moor Goldfish','{$xxxxx}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query124);
							  $query125="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query125.="VALUES ('AQUARIUM','BREEDS','Gold Angel Fish','{$yyyyy}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query125);
							 
							 
							  $query126="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query126.="VALUES ('AQUARIUM','BREEDS','Butterfly Koi','{$zzzzz}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query126);
							   $query127="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query127.="VALUES ('AQUARIUM','BREEDS','Oscar','{$aaaaaa}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query127);
							  $query128="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query128.="VALUES ('AQUARIUM','BREEDS','Tiger Oscar','{$bbbbbb}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query128);
							 
							 
							  $query129="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query129.="VALUES ('AQUARIUM','BREEDS','Flowerhorn','{$cccccc}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query129);
							   $query130="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query130.="VALUES ('AQUARIUM','BREEDS','Yellow boxfish','{$dddddd}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $create_category_qu=mysqli_query($connection,$query130);
							  $query131="INSERT INTO dogs(type,lookfor,breed,status,owner,location,address,image,phone,email)";
							$query131.="VALUES ('AQUARIUM','BREEDS','Clownfish','{$eeeeee}','{$owner}','{$location}','{$address}','{$post_image}','{$mobile}','{$email}')"	;
							 $get_category_qu=mysqli_query($connection,$query131);
							 
							 if($get_category_qu){
								 
							 }
							
							if(!$get_category_qu){
							echo "<p class='bg-danger text-center'>Your post couldn't be added due to server problems.</p>";
							}else{
								echo "<p class='bg-success text-center'>Your post has been successfully added.</p>";
							}
							
							
							
							
							
							
                             
						}
					       ?>
						
						
						
						
						
						
						<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
						<label for="cat_title">SHOP NAME</label>
						<input type="text" class="form-control" name="shopname">
						</div>
						<div class="form-group">
						<label for="cat_title">SHOP OWNER</label>
						<input type="text" class="form-control" name="ownername">
						</div>
						<div class="form-group">
						<label for="cat_title">ADDRESS</label>
						<input type="text" class="form-control" name="address">
						</div>
						<div class="form-group">
						<label for="cat_title">Location</label>
						<input type="text" class="form-control" name="location">
						</div>
						<div class="form-group">
						<label for="cat_title">MobileNo</label>
						<input type="text" class="form-control" name="mobile">
						</div>
						
						<div class="form-group">
						<label for="cat_title">Email</label>
						<input type="email" class="form-control" name="email">
						</div>
						<div class="form-group">
						<label for="cat_title">Password</label>
						<input type="password" class="form-control" name="password">
						</div>

						
						
						
						
					<br>
  <div class="form-group">
            <label for="post_image">Post Image</label>
            <input type="file" name="image">
        </div>
  <div class="form-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">DOG VARITIES</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
					  <table class="table table-bordered table-hover">
					  <thead>
					  <tr>
					  <th>CATEGORY NAME</th>
					  <th>CATEGORY TYPE</th>
					  <th>AVAILABILITY</th>                                                                               
					  </tr>
					  </thead>
					  
					  
					  <tbody>
					  <tr>
					  <td>DOG</td>
                      <td>Labrador Retriever</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="a">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>DOG</td>
                      <td>German Shepherd</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="b">
                                               <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG</td>
                      <td>Golden Retriever</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="c">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG</td>
                      <td>Bulldog</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="d">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG</td>
                      <td>Beagle</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="e">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG</td>
                      <td>French Bulldog</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="f">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  
					  <tr>
					  <td>DOG</td>
                      <td>Yorkshire Terrier</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="g">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					 
					  <tr>
					  <td>DOG</td>
                      <td>Poodle (Standard)</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="h">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG</td>
                      <td>Rottweiler</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="i">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					 
					  <tr>
					  <td>DOG</td>
                      <td>Boxer</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="k">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG</td>
                      <td>Siberian Husky</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="l">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  
					   <tr>
					  <td>DOG</td>
                      <td>Doberman Pinscher</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="n">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG</td>
                      <td>St. Bernard</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="o">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG</td>
                      <td>Pomeranian</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="p">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tbody>
					  <tr>
					  <td>DOG FOOD</td>
                      <td>Food pouches</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="q">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>DOG FOOD</td>
                      <td>Dry food</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="r">
                                               <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG FOOD</td>
                      <td>Canned Food</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="s">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG FOOD</td>
                      <td>Puppy Food</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="t">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG ACCESSORIES</td>
                      <td>Collars</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="u">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>DOG ACCESSORIES</td>
                      <td>Harnesses</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="v">
                                               <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG ACCESSORIES</td>
                      <td>	Leashes</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="w">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG ACCESSORIES</td>
                      <td>Cages</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="x">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG ACCESSORIES</td>
                      <td>Hunter sticks</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="y">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG ACCESSORIES</td>
                      <td>Muzzles</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="z">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  
					  <tr>
					  <td>DOG ACCESSORIES</td>
                      <td>Pet Diapers</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="aa">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					 
					  <tr>
					  <td>DOG ACCESSORIES</td>
                      <td>Shit scoopers</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="bb">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG ACCESSORIES</td>
                      <td>Goggles</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="cc">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG ACCESSORIES</td>
                      <td>Travelling carriers</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="dd">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG ACCESSORIES</td>
                      <td>Clothes</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ee">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG ACCESSORIES</td>
                      <td>Shoes</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ff">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>DOG ACCESSORIES</td>
                      <td>Socks</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="gg">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>DOG ACCESSORIES</td>
                      <td>Bowls</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="hh">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG TOYS</td>
                      <td>Chew toys</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ii">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>DOG TOYS</td>
                      <td>Fun toys</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="jj">
                                               <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG TOYS</td>
                      <td>ROPE TOYS</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="kk">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					 <tr>
					  <td>HEALTH CARE& GROOMING</td>
                      <td>Calcium & Multi-vitamins</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ll">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>HEALTH CARE& GROOMING</td>
                      <td>Dewormers</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="mm">
                                               <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>HEALTH CARE& GROOMING</td>
                      <td>Supplements</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="nn">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>HEALTH CARE& GROOMING</td>
                      <td>Flea & Tick</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="oo">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>HEALTH CARE& GROOMING</td>
                      <td>Bathing utilities</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="pp">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>HEALTH CARE& GROOMING</td>
                      <td>Brushes and Combs</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="qq">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  
					  <tr>
					  <td>HEALTH CARE& GROOMING</td>
                      <td>Yorkshire Terrier</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="rr">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					 
					  <tr>
					  <td>HEALTH CARE& GROOMING</td>
                      <td>Soaps & Powders</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ss">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>HEALTH CARE& GROOMING</td>
                      <td>Deodorants</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="tt">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>HEALTH CARE& GROOMING</td>
                      <td>Nail clippers & Trimmers</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="uu">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>DOG SERVICES</td>
                      <td>Mating</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="vv">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>DOG SERVICES</td>
                      <td>Taming</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ww">
                                               <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG SERVICES</td>
                      <td>Grooming</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="xx">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  </tbody>
					 
			
			
				 </table>
        
      </div>
    </div>
  </div>

    
  
  <div class="form-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse2">CAT VARITIES</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
					  <table class="table table-bordered table-hover">
					  <thead>
					  <tr>
					  <th>CATEGORY NAME</th>
					  <th>CATEGORY TYPE</th>
					  <th>AVAILABILITY</th>                                                                               
					  </tr>
					  </thead>
					  
					  
					  <tbody>
					  <tr>
					  <td>CAT VARITIES</td>
                      <td>Rusty spotted cat</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="yy">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>CAT VARITIES</td>
                      <td>Leopard Cat</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="zz">
                                               <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>CAT VARITIES</td>
                      <td>Himalayan Cat</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="aaa">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>CAT VARITIES</td>
                      <td>Bombay Cat</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="bbb">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>CAT VARITIES</td>
                      <td>Maine moon cat</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ccc">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>CAT VARITIES</td>
                      <td>Siamese cat</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ddd">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  
					  <tr>
					  <td>CAT VARITIES</td>
                      <td>Persian</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="eee">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					 
					  <tr>
					  <td>CAT VARITIES</td>
                      <td>Maine coon</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="fff">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>CAT VARITIES</td>
                      <td>Other Varieties available:</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ggg">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					 <tr>
					  <td>CAT FOOD</td>
                      <td>Food pouches</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="hhh">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>CAT FOOD</td>
                      <td>Dry food</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="iii">
                                               <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>CAT FOOD</td>
                      <td>Canned Food</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="jjj">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					    <tr>
					  <td>CAT TOYS</td>
                      <td>Chew toys</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="kkk">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>CAT TOYS</td>
                      <td>Fun toys</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="lll">
                                               <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>CAT TOYS</td>
                      <td>SCRATCH TOYS</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="mmm">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>CAT ACCESSORIES</td>
                      <td>Collars</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="nnn">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>CAT ACCESSORIES</td>
                      <td>Harnesses</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ooo">
                                               <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>CAT ACCESSORIES</td>
                      <td>	Leashes</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ppp">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>CAT ACCESSORIES</td>
                      <td>Cages</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="qqq">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>CAT ACCESSORIES</td>
                      <td>Hunter sticks</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="rrr">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>CAT ACCESSORIES</td>
                      <td>Muzzles</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="sss">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  
					 
					  <tr>
					  <td>CAT ACCESSORIES</td>
                      <td>Goggles</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ttt">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>CAT ACCESSORIES</td>
                      <td>Travelling carriers</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="uuu">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  
					  
					   <tr>
					  <td>CAT ACCESSORIES</td>
                      <td>Bowls</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="vvv">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  </tbody>
					 
			
			
				 </table>
        
      </div>
    </div>
  </div>
  
      
  
  
  
  <div class="form-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse3">BIRD VARITIES</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
					  <table class="table table-bordered table-hover">
					  <thead>
					  <tr>
					  <th>CATEGORY NAME</th>
					  <th>CATEGORY TYPE</th>
					  <th>AVAILABILITY</th>                                                                               
					  </tr>
					  </thead>
					  
					  
					  <tbody>
					  <tr>
					  <td>BIRD VARITIES</td>
                      <td>Parakeet</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="www">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>BIRD VARITIES</td>
                      <td>Cockatiel</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="xxx">
                                               <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>DOG</td>
                      <td>Conure</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="yyy">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>BIRD VARITIES</td>
                      <td>Brazilian Sun Conure</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="zzz">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>BIRD VARITIES</td>
                      <td>African Grey Parrot</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="aaaa">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>BIRD VARITIES</td>
                      <td>Love Bird</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="bbbb">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  
					  <tr>
					  <td>BIRD VARITIES</td>
                      <td>Yorkshire Terrier</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="cccc">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					 
					  <tr>
					  <td>BIRD VARITIES</td>
                      <td>Macaw</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="dddd">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>BIRD VARITIES</td>
                      <td>Cockatoo</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="eeee">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>BIRD VARITIES</td>
                      <td>Blue and Yellow macaw</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ffff">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
		<tr>
					  <td>BIRD VARITIES</td>
                      <td>Umbrella cockatoo</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="gggg">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>BIRD VARITIES</td>
                      <td>Indian rainneck</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="hhhh">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>BIRD VARITIES</td>
                      <td>Diamond Dove</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="iiii">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>BIRD FOOD</td>
                      <td>Calcium and Multivitamin</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="jjjj">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>BIRD FOOD</td>
                      <td>Dry food</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="kkkk">
                                               <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>BIRD FOOD</td>
                      <td>Canned Food</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="llll">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>BIRD ACCESSORIES</td>
                      <td>Cages</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="mmmm">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>BIRD ACCESSORIES</td>
                      <td>Harnesses</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="nnnn">
                                               <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>BIRD ACCESSORIES</td>
                      <td>	Leashes</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="oooo">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>BIRD ACCESSORIES</td>
                      <td>Cages</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="pppp">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>BIRD ACCESSORIES</td>
                      <td>Bird Stands</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="qqqq">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>BIRD ACCESSORIES</td>
                      <td>Toys</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="rrrr">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  
					 
					  <tr>
					  <td>BIRD ACCESSORIES</td>
                      <td>Food Bowls</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ssss">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>BIRD ACCESSORIES</td>
                      <td>Feeders</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="tttt">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  
					  
					   <tr>
					  <td>BIRD ACCESSORIES</td>
                      <td>Bowls</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="uuuu">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>BIRD SERVICES</td>
                      <td>Mating</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="vvvv">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>BIRD SERVICES</td>
                      <td>Taming</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="wwww">
                                               <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>BIRD SERVICES</td>
                      <td>Grooming</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="xxxx">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					 
					  </tbody>
					 
			
			
				 </table>
        
      </div>
    </div>
  </div>
  
  
  
  
  
  <div class="form-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse4">PET VARITIES</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
					  <table class="table table-bordered table-hover">
					  <thead>
					  <tr>
					  <th>CATEGORY NAME</th>
					  <th>CATEGORY TYPE</th>
					  <th>AVAILABILITY</th>                                                                               
					  </tr>
					  </thead>
					  
					  
					  <tbody>
					  <tr>
					  <td>PET VARITIES</td>
                      <td>Iguana</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="yyyy">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>PET VARITIES</td>
                      <td>Syrian Hamster</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="zzzz">
                                               <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>PET VARITIES</td>
                      <td>Russian Dwarf Hamster</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="aaaaa">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>PET VARITIES</td>
                      <td>Guinea pig</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="bbbbb">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>PET VARITIES</td>
                      <td>Rabbits</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ccccc">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>PET VARITIES</td>
                      <td>White mouse</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ddddd">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  
					   <tr>
					  <td>PET FOOD</td>
                      <td>Hamster Snack</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="eeeee">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>PET FOOD</td>
                      <td>Dry food</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="fffff">
                                               <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  
					  <tr>
					  <td>PET ACCESSORIES</td>
                      <td>Cages</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ggggg">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>PET ACCESSORIES</td>
                      <td>Habitats</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="hhhhh">
                                               <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>PET ACCESSORIES</td>
                      <td>Hamster Balls</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="iiiii">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>PET ACCESSORIES</td>
                      <td>Toys</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="jjjjj">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>PET ACCESSORIES</td>
                      <td>Food Bowls</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="kkkkk">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>PET ACCESSORIES</td>
                      <td>Feeders</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="lllll">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  
					 
					  <tr>
					  <td>PET ACCESSORIES</td>
                      <td>Water bottles</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="mmmmm">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  
					  <tr>
					  <td>PET SERVICES</td>
                      <td>Mating</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="nnnnn">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>PET SERVICES</td>
                      <td>Taming</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ooooo">
                                               <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>PET SERVICES</td>
                      <td>Grooming</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ppppp">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					 
					
					 
					  </tbody>
					 
			
			
				 </table>
        
      </div>
    </div>
  </div>
  
   
  
  
  

  <div class="form-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse5">AQUARIUM VARITIES</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
					  <table class="table table-bordered table-hover">
					  <thead>
					  <tr>
					  <th>CATEGORY NAME</th>
					  <th>CATEGORY TYPE</th>
					  <th>AVAILABILITY</th>                                                                               
					  </tr>
					  </thead>
					  
					  
					  <tbody>
					  <tr>
					  <td>AQUARIUM VARITIES</td>
                      <td>Arowana</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="qqqqq">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>AQUARIUM VARITIES</td>
                      <td>Gold Fish</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="rrrrr">
                                               <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>AQUARIUM VARITIES</td>
                      <td>Betta Fish</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="sssss">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>AQUARIUM VARITIES</td>
                      <td>Fantail Goldfish</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ttttt">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>AQUARIUM VARITIES</td>
                      <td>Siamese Fighting fish</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="uuuuu">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>AQUARIUM VARITIES</td>
                      <td>Molly</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="vvvvv">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                            </select>
                                        </div></td>					  
					  </tr>
					  
					  <tr>
					  <td>AQUARIUM VARITIES</td>
                      <td>Angelfish</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="wwwww">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					 
					  <tr>
					  <td>AQUARIUM VARITIES</td>
                      <td>Black moor Goldfish</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="xxxxx">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>AQUARIUM VARITIES</td>
                      <td>Gold angelfish</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="yyyyy">
                                                <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>AQUARIUM VARITIES</td>
                      <td>Butterfly koi</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="zzzzz">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>AQUARIUM VARITIES</td>
                      <td>Oscar</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="aaaaaa">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>AQUARIUM VARITIES</td>
                      <td>Tiger Oscar</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="bbbbbb">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>AQUARIUM VARITIES</td>
                      <td>Flowerhorn</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="cccccc">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					   <tr>
					  <td>AQUARIUM VARITIES</td>
                      <td>Yellow boxfish</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="dddddd">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>AQUARIUM VARITIES</td>
                      <td>Clown fish</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="eeeeee">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  <tr>
					  <td>AQUARIUM VARITIES</td>
                      <td>Albino cory</td>	
                       <td><div class="form-group">
                                                                                   
                                            <select class="form-control" name="ffffff">
                                                 <option>Available</option>
                                                <option>Unavailable</option>
                                             
                                            </select>
                                        </div></td>					  
					  </tr>
					  </tbody>
					 
			
			
				 </table>
        
      </div>
    </div>
  </div>
  
  
  
				 <div class="form-group">
						<input class="btn btn-primary" type="submit" name="submit" value="Add Category">
						</div>
				 </form>
					  </div>