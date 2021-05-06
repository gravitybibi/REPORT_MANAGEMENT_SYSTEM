<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Index</title>
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
.enjoy-css1 {  display: inline-block;
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
.enjoy-css2 {  display: inline-block;
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
</style>
</head>

<body>

<table width="1287" height="611" border="0">
  <tr>
    <th width="1277" height="605" align="center" scope="col"><table width="1099" height="552" border="1" class="greenoutline">
      <tr>
        <th height="546" align="center" scope="col"><form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <p class="titlegreen">3566 REPORT MANAGEMENT</p>
          <p class="titlegreen">SYSTEM (RMS)</p>
          <table width="539" border="0">
            <tr>
              <th width="203" scope="col">&nbsp;</th>
              <th width="376" align="left" scope="col">
              
              <?php
			
			if(isset($_POST['btnlogin'])){
					
			$q =  $_POST['txticnum'];
			$v =  $_POST['txtidemployee'];
			
			$c = mysqli_connect("localhost","root","","report_management_system");
			$s = "select * from employee where id_num = '$q' AND id_employee = '$v'";
			$result = mysqli_query($c,$s);
			$count= mysqli_num_rows($result);
			if($count !=0){
				$_SESSION['u'] = "$v";
			?>
            
            <script>
			window.location="report_page.php";
			</script>
            
			<?php
			
			}
			else{
				
				echo "IC Number and ID Employee Do Not Match, Please Contact Your System Admin";
			}
			}
			  
			  ?>
         
              </th>
            </tr>
            <tr>
              <th height="28" scope="row">&nbsp;</th>
              <td><label for="txticnum"></label>
                <input type="text" name="txtidemployee" id="txtidemployee" input class="enjoy-css1" placeholder="ID Employee" required="required"/></td>
            </tr>
            <tr>
              <th height="37" scope="row">&nbsp;</th>
              <td><label for="txtidemployee">
                <input name="txticnum" type="text" class="enjoy-css2" id="txticnum" placeholder="IC NUMBER" required="required" />
              </label></td>
            </tr>
          </table>
          <table width="376" border="0">
            <tr>
              <th width="228" align="right" scope="col"><input name="btnlogin" type="submit" class="btngreen" id="btnlogin" value="Login" /></th>
              <th width="138" align="left" scope="col"><input name="btnclear" type="reset" class="btngreen" id="btnclear" value="Clear" /></th>
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