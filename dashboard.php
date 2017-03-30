<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
    <link rel="icon" href="Gear-5-Logo-Pink.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="dash-style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="dash-style.js"></script>
	
    
    </head>
<body>
	<div class="header">
    <img class="img-circle2"src="Images/circle%20image.jpg" height="100">
	
	
	<h2 class="username">TommySmith</h2>
	
	<div class="social-media-stats">
	<h2 class="workout-number">67-Workouts 33-Following 340-Followers</h2>
	

	
</div>

	</div>
	</div>

	  
    <ul id="Navigation">
		<div class="nav-bar">
  <li><img src="Images/Gear-5.png" height="150"></li>
  <li><h3 class="home-text">HOME</h3></li>
  <li><a href="default.asp" class="active-btn"><i class="fa fa-home"></i>HOME</a></li>
  <li><a href="analytics.php"><i class="fa fa-line-chart"></i>ANALYTICS</a></li>
        <li class="training"><a href="contact.asp"><i class="fa fa-heartbeat"></i>TRAINING</a></li>
  <li class="settings"><a href="about.asp"><i class="fa fa-cog"></i>SETTINGS</a></li>
  <li><h3 class="user-text">USERS</h3></li>
  <li><img src="Images/circle%20image.jpg" class="img-circle" height="75px"></li>
  <li><h3>TOM SMITH</h3></li>
  <li><h4 class="level-indicator">Level 6</h4></li>
			</div>
		
			
<div class='resp_code align='center''>
   <table id ='tab' align='center' cellspacing='0' cellpadding='0' style="width:100%;">
      <tr>
         <td align=center>
            <br><b>Calorie Calculator</b><br><br>
            <form name="frm" action="" class='frms noborders'>
               <table>
                  <tr>
                     <td style="color: #3D366F; font-size:13px;">Age:</td>
                     <td><input type="text" name="age" id="age" align="left" size="3" maxlength="2" onkeypress="return cknum(event,age)"></td>
                     <td><font color="#3D366F" size="2">years</font></td>
                  </tr>
                  <tr>
                     <td style="color: #3D366F; font-size:13px;">Gender:</td>
                     <td><input type="radio" name="gen" id="gen" checked><font color="#3D366F" size="0.7">Male</font><input type="radio" name="gen" id="gen"><font color="#3D366F" size="0.7">Female</font></td>
                  </tr>
                  <tr>
                     <td style="color: #3D366F; font-size:13px;">Height:</td>
                     <td>
                        <select style='width:50%;' name="foot" id="foot" onchange="hcon()">
                           <option value="1">1'</option>
                           <option value="2">2'</option>
                           <option value="3">3'</option>
                           <option value="4">4'</option>
                           <option value="5">5'</option>
                           <option value="6">6'</option>
                           <option value="7">7'</option>
                        </select>
                        <select style='width:40%;'name="inch" id="inch" onchange="hcon()">
                           <option value="1">1"</option>
                           <option value="2">2"</option>
                           <option value="3">3"</option>
                           <option value="4">4"</option>
                           <option value="5">5"</option>
                           <option value="6">6"</option>
                           <option value="7">7"</option>
                           <option value="8">8"</option>
                           <option value="9">9"</option>
                           <option value="10">10"</option>
                           <option value="11">11"</option>
                        </select>
                     </td>
                  </tr>
                  <tr>
                     <td style="color: #3D366F; font-size:13px;">Cms :</td>
                     <td><input type="text" name="cen" id="cen" size="4" onkeyup="con(cen)"></td>
                  </tr>
                  <tr>
                     <td style="color: #3D366F; font-size:13px;">Weight:</td>
                     <td><input type="text" name="weight" id="weight" maxlength="3" size="3" onkeyup="isNumberKey(this.id)"></td>
                     <td>
                        <select name="wtype" id="wtype">
                           <option value="kg">Kg</option>
                           <option value="pounds">Pounds</option>
                        </select>
                     </td>
                  </tr>
                  <tr>
                     <td style="color: #3D366F; font-size:13px;">Activeness:</td>
                     <td>
                        <select style='width:100px;' name="loa" id="loa">
                           <option value="1">Sedentary</option>
                           <option value="2">Light Active</option>
                           <option value="3">Moderately Active</option>
                           <option value="4">Very Active</option>
                           <option value="5">Extra Active</option>
                        </select>
                     </td>
                  </tr>
                  <tr>
                     <td colspan='2' align="center"><input class='blue_button' type="button" value="Calculate The Calorie" onclick="cc()"><span id="dumdiv" align="center" style=" font-size: 10px;color: #dadada;"></span></td>
                  </tr>
               </table>
            </form>
            <br>
            <table align="center" border="0" class="frms noborders">
               <caption><b>Calorie Result</b></caption>
               <tr>
                  <td align="right" style="color: #3D366F; font-size:13px;">Calorie Needed:</td>
                  <td><input type="text" id="rc" style="font-size:13px;" size="15" readonly></td>
                  <td>
                     <select name="caltype" id="caltype" onChange="convert()">
                        <option value="g">Grams</option>
                        <option value="kg">Kilograms</option>
                        <option value="pounds">Pounds</option>
                     </select>
                  </td>
               </tr>
            </table>
            <div style="color: #3D366F; font-size:13px;">You Must Intake The Following Daily</div>
            <table class="frms noborders">
               <tr>
                  <td style="color: #3D366F; font-size:13px;">Fat:</td>
                  <td style="color: #3D366F; font-size:13px;"><input type="text" id="rf" style="font-size:13px;" size="10" readonly></td>
                  <td><font color="#3D366F" size="2" style='float:right'><label id="l1"></label> per day</font></td>
               </tr>
               <tr>
                  <td style="color: #3D366F; font-size:13px;">Protein:</td>
                  <td style="color: #3D366F; font-size:13px;"><input type="text" id="rp" style="font-size:13px;" size="10" readonly></td>
                  <td><font color="#3D366F" size="2" style='float:right'><label id="l2"></label> per day</font></td>
               </tr>
               <tr>
                  <td style="color: #3D366F; font-size:13px;">Carbohydrate:</td>
                  <td style="color: #3D366F; font-size:13px;"><input type="text" id="rh" style="font-size:13px;" size="10" readonly></td>
                  <td><font color="#3D366F" size="2" style='float:right'><label id="l3"></label> per day</font></td>
               </tr>
               <tr>
                  <td style="color: #3D366F; font-size:13px;">Alcohol:</td>
                  <td style="color: #3D366F; font-size:13px;"><input type="text" id="ra" style="font-size:13px;" size="10" readonly></td>
                  <td><font color="#3D366F" size="2" style='float:right'><label id="l4"></label> per day</font></td>
               </tr>
            </table>
      </tr>
      </td>
   </table>

	

		
		</div>

			
			
	  </ul>
<div class="graph-input">
	
<form method="POST" action="weightloss.php"> 
	
<input type="text" name="WeightLost" placeholder="Weight Lost This Week(KG)">
<input type="text" name="BenchPB" placeholder="Bench Press PB (KG)">
<input type="text" name="SquatPB" placeholder="Squat PB(KG)">
<input name="submit" type="submit"  class="weight-submit-button">
	</form>	
	
	
	
	
</div>

</body>


</html>

