<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin_indext</title>
<style type="text/css">

.enjoy-css {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  padding: 5px 25px 8px 6px;
  border: 1px solid rgba(5,145,5,1);
  -webkit-border-radius: 3px;
  border-radius: 3px;
  font: normal 14px/normal "Palatino Linotype", "Book Antiqua", Palatino, serif;
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


.greenoutline {
	border: thin none #0C0;
}
.titlegreen {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 36px;
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
    <th width="1277" height="605" align="center" scope="col"><table width="1099" height="552" border="1" class="greenoutline">
      <tr>
        <th height="546" align="center" scope="col"><form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <p class="titlegreen">REPORT MANAGEMENT</p>
          <p class="titlegreen">SYSTEM ADMIN</p>
          <table width="457" border="0">
            <tr>
              <th width="137" scope="col">&nbsp;</th>
              <th width="310" align="left" scope="col">
              
              <?php
			  
			$msg1="";
			
			if(isset($_POST['btnlogin'])){	
			
			$q =  $_POST['txtidemployee'];
			$v =  $_POST['txtpasskey'];
			
			$c = mysqli_connect("localhost","root","","report_management_system");
			$s = "select * from admin where id_admin = '$q' AND passkey = '$v'";
			$result = mysqli_query($c,$s);
			
			$count= mysqli_num_rows($result);
			if($count !=0){
				$_SESSION['u'] = "$q";
			?>
            
            <script>
			window.location="admin_report_management.php";
			</script>
            
			<?php
			
			}
			else{
				
				echo "Id and Admin Do Not Match, Please Insert User to Database System";
			}
			}
		
			?>
			  
			  
			  
			  
			  
			 
         
              </th>
            </tr>
            <tr>
              <th height="28" scope="row">&nbsp;</th>
              <td><label for="txtidadmin"></label>
                <input name="txtidemployee" type="text" class="enjoy-css" id="txtidemployee" placeholder="ID Admin" required="required" /></td>
            </tr>
            <tr>
              <th height="37" scope="row">&nbsp;</th>
              <td><label for="txtpasskey"></label>
                <input type="text" name="txtpasskey" id="txtpasskey" input class="enjoy-css" placeholder="Your Passkey" required="required"/></td>
            </tr>
          </table>
          <table width="376" border="0">
            <tr>
              <th width="217" align="right" scope="col"><input name="btnlogin" type="submit" class="btngreen" id="btnlogin" value="Login" /></th>
              <th width="149" align="left" scope="col"><input name="btnclear" type="reset" class="btngreen" id="btnclear" value="Clear" /></th>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p></p>
        </form>
          <p>&nbsp;</p></th>
      </tr>
    </table></th>
  </tr>
</table>

</body>
</html>