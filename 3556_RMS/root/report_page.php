<?php

	session_start();
	if(!isset($_SESSION['u'])){
			header("location:index.php");
		}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>report_page</title>
<style type="text/css">

.enjoy-css {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  margin: 9px;
  padding: 90px 810px 49px 20px;
  border: 1px solid rgba(5,145,5,1);
  -webkit-border-radius: 3px;
  border-radius: 3px;
  font: normal 16px/normal "Palatino Linotype", "Book Antiqua", Palatino, serif;
  color: rgba(12,14,15,1);
  -o-text-overflow: clip;
  text-overflow: clip;
  -webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) inset;
  box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) inset;
  text-shadow: 1px 1px 0 rgba(255,255,255,0.66) ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
}
.labletext {
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 14px;
	color: #090;
	font-weight: lighter;
}

.greenoutline {
	border: thin none #0C0;
	height: 350px;
	width: 450px;
}
.greenblock {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 16px;
	color: #FFF;
	background-color: #090;
	font-weight: bold;
}
.titlegreen {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 70px;
	color: #090;
	font-weight: bold;
}
.btngreen {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 16px;
	color: #FFF;
	border-top-color: #090;
	border-right-color: #090;
	border-bottom-color: #090;
	border-left-color: #090;
	background-color: #090;
}
</style>
</head>

<body>

<table width="1287" height="611" border="0">
  <tr>
    <th width="1277" height="605" align="center" scope="col"><table width="1099" height="611" border="1" class="greenoutline">
      <tr>
        <th height="605" align="center" scope="col"><table width="1025" height="601" border="0">
          <tr>
            <th width="510" height="105" align="left" valign="top" class="titlegreen" scope="col">Report</th>
            <th width="505" align="right" scope="col"><table width="266" border="0">
              <tr>
                <th width="128" height="90" scope="col">&nbsp;</th>
                <th width="128" align="left" scope="col">
                <p class="labletext">
       <?php         	  
      $c = mysqli_connect("localhost","root","","report_management_system");
	  $s = "SELECT id_employee FROM employee WHERE id_employee = '$_SESSION[u]'";
	  $result = mysqli_query($c,$s);
	  
	  echo "$_SESSION[u]";
	  ?>
      
      <?php echo "" . date("d/m/Y") . "<br>"; ?></p>
                  <p class="labletext"><a href="logout.php">Logout</a></p></th>
              </tr>
            </table></th>
          </tr>
          <tr class="greenblock">
            <th height="37" colspan="2" align="left" scope="row"> Please be honest with your report as the report will be send through your admin</th>
            </tr>
          <tr>
            <th height="451" align="left" valign="top" scope="row"><form id="form1" name="form1" method="post" action=""<?php echo $_SERVER['PHP_SELF']; ?>"">
              <p>
                
                <label for="txtreport2"></label>
                
                <?php
				
				if(isset($_POST['btnsend'])){
					
				$msg32 = "";	
				$msg12 = "";
	
			    $q =  $_POST['txtidemployee'];
				$a =  $_POST['txtidnum'];
				$w =  $_POST['txtreport2'];
				$j =  $_POST['txthimage'];
			    $b =  $_POST['txtdate'];
				$k =  $_POST['txttime'];
				
				
				$c = mysqli_connect("localhost","root","","report_management_system");
			    $s = "INSERT INTO employee (id_employee, id_num, your_report, picture, date,time) VALUES ('$q', '$a','$w', 		                     '$j', '$b', '$k')";
			    $result = mysqli_query($c,$s);
				
				$msg12 =  "Sending Report is Successfull";
				  }
				else {
					
				$msg12 =  "Sending Report is Failed";
				
				}
				?>
 
<textarea name="txtreport2" cols="70" rows="9" id="txtreport2" placeholder="What are your report? not more than 500 character" maxlength="500" required></textarea>
              </p>
              <table width="527" border="0">
                <tr>
                  <th width="50" height="32" align="right" scope="col"><input name="btnsend" type="submit" class="btngreen" id="btnsend" value="Send" /></th>
                  <th width="52" align="left" scope="col"><input name="btnclear" type="reset" class="btngreen" id="btnclear" value="Clear" /></th>
                  <th width="515" align="left" scope="col">&nbsp;</th>
                  </tr>
                <tr>
                  <th height="21" colspan="3" align="left" scope="col">
				  
				  <?php
				  
				  $msg =  "";
				  $msg1 =  "";

	              $c = mysqli_connect("localhost","root","","report_management_system");
	              $s = "SELECT id_num, id_employee FROM employee WHERE id_employee = '$_SESSION[u]'";
	  			  $result = mysqli_query($c,$s);
		  
	  				if ($result->num_rows > 0) {
	  				// output data of each row
	  				while($row = $result->fetch_assoc()) {
		  
					 $msg =  "$row[id_num]";
					 $msg1 = "$row[id_employee]";
					 
					}
					}
				  
				  ?>
                    <?php echo $msg12; ?></th>
                  </tr>
              </table>
              <p>
                <label for="txtidnum"></label>
                <input name="txtidnum" type="text" id="txtidnum" value="<?php echo $msg; ?>" readonly="readonly" hidden="hidden" />
                
                <?php
				
                $msg90 =  "";

	              $c = mysqli_connect("localhost","root","","report_management_system");
	              $s = "SELECT Picture_uploading FROM pic_store_view WHERE id_employee = '$_SESSION[u]'";
	  			  $result = mysqli_query($c,$s);
		  
	  				if ($result->num_rows > 0) {
	  				// output data of each row
	  				while($row = $result->fetch_assoc()) {
		  
					 $msg90 =  "$row[Picture_uploading]";
					 
					 
					}
					}
					
					?>
                    
                <label for="txthimage"></label>
                
                <input name="txthimage" type="text" id="txthimage" value="<?php echo $msg90; ?>" readonly="readonly" hidden />
                
                
              </p>
              <p>
                <label for="txtidemployee"></label>
                <input name="txtidemployee" type="text" id="txtidemployee" value="<?php echo $msg1; ?>" readonly="readonly" hidden="hidden"/>
              </p>
              <p>
                <label for="txtdate"></label>
                <input name="txtdate" type="text" id="txtdate" value="<?php echo "" . date("Y/m/d") . ""; ?>" readonly="readonly" hidden="hidden"/>
              </p>
              <p>
              
              <?php
			  date_default_timezone_set("Singapore");
              ?>
              
                <label for="txttime"></label>
                <input name="txttime" type="text" id="txttime" value="<?php echo "". date("h:i:sa").""; ?>" readonly="readonly" hidden="hidden"/>
              </p>
            </form></th>
            <th height="451" align="center" valign="top" scope="row"><table width="458" height="351" border="1" class="greenoutline">
              <tr>
                  <th height="345" scope="col">
                  
<?php
				   
if(isset($_POST['btnview'])){

$c = mysqli_connect("localhost","root","","report_management_system");
$s = "SELECT Picture_uploading FROM pic_store_view WHERE id_employee = '$_SESSION[u]'";
$result = mysqli_query($c,$s);
		  
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

echo "<img src ='picture_storage/".$row['Picture_uploading']."'class = 'greenoutline'>";
				
}
}
}				
				
?>
 
                  </th>
                </tr>
            </table>
              <form id="form3" name="form3" method="post" action="">
                <table width="443" border="0">
                  <tr>
                    <th width="18" scope="col">&nbsp;</th>
                    <th width="277" align="right" scope="col"><input name="btnview" type="submit" class="btngreen" id="btnview" value="View Pic" /></th>
                  </tr>
                </table>
              </form>
              <form action="upload.php" method="post" enctype="multipart/form-data" name="form2" id="form2">
                <table width="447" border="0">
                  <tr>
                    <th width="57" align="right" scope="col"><label for="txtupload">
                      <input name="btnupload" type="submit" class="btngreen" id="btnupload" value="Upload" />
                    </label></th>
 <th width="380" align="left" scope="col"><input name="txtimage1" type="file" class="btngreen" id="txtimage1" /></th>
                    </tr>
                </table>
                <p>
                  </p>
              </form>                
              </form></th>
            </tr>
        </table></th>
      </tr>
    </table></th>
  </tr>
</table>




</body>
</html>