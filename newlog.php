<?php
						
						if(isset($_POST['create_form'])){
							
							$firstname=clean(strtoupper($_POST['firstname']));
							$middlename=clean(strtoupper($_POST['middlename']));
							$lastname=clean(strtoupper($_POST['lastname']));
							$age=clean(strtoupper($_POST['age']));
							$dob=clean(strtoupper($_POST['dob']));
							$sex=clean(strtoupper($_POST['sex']));
							$nfc=clean(strtoupper($_POST['nfc']));
							$email=clean($_POST['email']);
							$collegename=clean(strtoupper($_POST['collegename']));
							$degree=clean(strtoupper($_POST['degree']));
							$branch=clean(strtoupper($_POST['branch']));
							$ccd=clean(strtoupper($_POST['ccd']));
						
							$yos=clean(strtoupper($_POST['yos']));
							$homeaddress=clean(strtoupper($_POST['homeaddress']));
							$homecity=clean(strtoupper($_POST['homecity']));
							$homestate=clean(strtoupper($_POST['homestate']));
							
							
				
							$homephone=clean(strtoupper($_POST['homephone']));
						
							$mobileno=clean(strtoupper($_POST['mobileno']));
							$mailingaddress=clean(strtoupper($_POST['mailingaddress']));
					
							
						
							
						$query="INSERT INTO reg(firstname,middlename,lastname,age,dob,sex,nfc,email,collegename,degree,branch,ccd,yos,homeaddress,homecity,homestate,homephone,mobileno,mailingaddress)";	
						$query.="VALUES('{$firstname}','{$middlename}','{$lastname}','{$age}','{$dob}','{$sex}','{$nfc}','{$email}','{$collegename}','{$degree}','{$branch}','{$ccd}','{$yos}','{$homeaddress}','{$homecity}','{$homestate}','{$homephone}','{$mobileno}','{$mailingaddress}')";
							
							$create_register_query=mysqli_query($connection,$query);
							if(!$create_register_query){
							echo "<p class='bg-danger text-center'>Sorry,You couldn't be registered</p>";
							}else{
								echo "<p class='bg-success text-center'>Please click on the <a href='RECEIPT/receipt.php'>Print</a> to get your form.</p>";
							}
							
							
							$_SESSION['firstname']=$firstname;
	   $_SESSION['middlename']=$middlename;
	   $_SESSION['lastname']=$lastname;
	  
							
							
						}
						
						
						?>
		
	         <form class='form-horizontal' role='form' method='post'>
          
  
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>NAME</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <select class='form-control' id='id_title'>
                    <option>Mr</option>
                    <option>Ms</option>
                    <option>Mrs</option>
                    <option>Miss</option>
                    <option>Dr</option>
                  </select>
                </div>
              </div>
			  
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_first_name' placeholder='First Name' type='text' name='firstname'>
                </div>
              </div>
			  <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_first_name' placeholder='Middle Name' type='text' name='middlename'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_last_name' placeholder='Last Name' type='text' name='lastname'>
                </div>
              </div>
            </div>
          
         		   <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>AGE</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' id='id_checkin' name='age'>
                
                </div>
              </div>
              <label class='control-label col-md-2' for='id_checkout'>D.O.B</label>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' id='id_checkout' type='date' name='dob'>
                 
                </div>
              </div>
            </div>
          </div>
		  
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>SEX</label>
            <div class='col-md-2'>
              <select class='form-control' id='id_accomodation' name='sex'>
                <option>MALE</option>
                <option>FEMALE</option>
               
              </select>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>NAME FOR COMMUNICATION</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_email' placeholder='name for communication' type='text' name='nfc'>
                </div>
              </div>
              
            </div>
          </div>
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>E-MAIL</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_email' placeholder='E-mail' type='email' name='email'>
                </div>
              </div>
              <!--<div class='form-group internal'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_phone' placeholder='Phone: (xxx) - xxx xxxx' type='text'>
                </div>
              </div>-->
            </div>
          </div>
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>COLLEGE</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_email' placeholder='COLLEGE NAME' type='text' name='collegename'>
                </div>
              </div>
              <!--<div class='form-group internal'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_phone' placeholder='Phone: (xxx) - xxx xxxx' type='text'>
                </div>
              </div>-->
            </div>
          </div>
		 
		  
		  		   <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>DEGREE</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
              <select class='form-control' id='id_accomodation' name='degree'>
                <option>B.TECH</option>
                <option>B.E</option>
               <option>M.TECH</option>
                <option>PhD</option>
				<option>OTHERS</option>
                
              </select>
            </div>
              <label class='control-label col-md-2' for='id_checkout'>MAJOR</label>
              <div class='col-md-3'>
                <select class='form-control' id='id_accomodation' name='branch'>
               
                <option>MECHANICAL</option>
               <option>ECE</option>
                <option>EEE</option>
				<option>AUTOMOBILE</option>
                <option>OTHERS</option>
              </select>
              </div>
            </div>
          </div>
		   <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>COURSE COMMENCEMENT DATE</label>
            <div class='col-md-8'>
			
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <input class='form-control col-md-4' id='id_adults' placeholder='Date of Birth' type='text' name='ccd'>
                </div>
              </div>
             
            </div>
          </div>
		   
		   <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>YEAR OF STUDY</label>
            <div class='col-md-2'>
              <select class='form-control' id='id_accomodation' name='yos'>
                <option>I</option>
                <option>II</option>
               <option>III</option>
                <option>IV</option>
	
              </select>
            </div>
          </div>
		   <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>HOME ADDRESS</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_email' placeholder='Home address' type='text' name='homeaddress'>
                </div>
              </div>
              
            </div>
          </div>
		   <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>HOME CITY</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' id='id_checkin' name='homecity'>
                
                </div>
              </div>
              <label class='control-label col-md-2' for='id_checkout'>STATE</label>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' id='id_checkout' name='homestate'>
                 
                </div>
              </div>
            </div>
          </div>
		   
          
		   
		 <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>HOME TELEPHONE</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' id='id_checkin' name='homephone'>
                
                </div>
              </div>
              
              
            </div>
          </div>
		   <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>MOBILE NO</label>
            <div class='col-md-8'>
			
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <input class='form-control col-md-4' id='id_adults' placeholder='MOBILE NO' type='text' name='mobileno'>
                </div>
              </div>
             
            </div>
          </div>
		   <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>PREFERRED MAILING ADDRESS</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_email' placeholder='Mailing address' type='text' name='mailingaddress'>
                </div>
              </div>
              
            </div>
          </div>
		   
		   
		   
		  
         <!-- <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Equipment type</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <select class='form-control' id='id_equipment'>
                    <option>Travel trailer</option>
                    <option>Fifth wheel</option>
                    <option>RV/Motorhome</option>
                    <option>Tent trailer</option>
                    <option>Pickup camper</option>
                    <option>Camper van</option>
                  </select>
                </div>
              </div>
              <div class='col-md-9'>
                <div class='form-group internal'>
                  <label class='control-label col-md-3' for='id_slide'>Slide-outs</label>
                  <div class='make-switch' data-off-label='NO' data-on-label='YES' id='id_slide_switch'>
                    <input id='id_slide' type='checkbox' value='chk_hydro'>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_service'>Required Service</label>
            <div class='col-md-8'>
              <select class='multiselect' id='id_service' multiple='multiple'>
                <option value='hydro'>Hydro</option>
                <option value='water'>Water</option>
                <option value='sewer'>Sewer</option>
              </select>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_pets'>Pets</label>
            <div class='col-md-8'>
              <div class='make-switch' data-off-label='NO' data-on-label='YES' id='id_pets_switch'>
                <input id='id_pets' type='checkbox' value='chk_hydro'>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Comments</label>
            <div class='col-md-6'>
              <textarea class='form-control' id='id_comments' placeholder='Additional comments' rows='3'></textarea>
            </div>
          </div>-->
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <center><button class='btn-lg btn-primary' type='submit' name="create_form">SUBMIT FORM</button></center>
            </div>
            
          </div>
        </form>