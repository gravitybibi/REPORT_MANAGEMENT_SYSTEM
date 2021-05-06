<?php

	session_start();
	if(!isset($_SESSION['u'])){
			header("location:admin_index.php");
		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin_report_management</title>
<style type="text/css">

table.greenTable {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	border: 0px solid #24943A;
	background-color: #D4EED1;
	width: 150%;
	text-align: left;
	font-size: 14px;
}
table.greenTable td, table.greenTable th {
  border: 1px solid #24943A;
  padding: 3px 2px;
}
table.greenTable tbody td {
	font-size: 14px;
	text-align: left;
}
table.greenTable thead {
  background: #24943A;
  background: -moz-linear-gradient(top, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
  background: -webkit-linear-gradient(top, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
  background: linear-gradient(to bottom, #5baf6b 0%, #3a9e4d 66%, #24943A 100%);
  border-bottom: 0px solid #444444;
}
table.greenTable thead th {
  font-size: 14px;
  font-weight: bold;
  color: #F0F0F0;
  text-align: center;
  border-left: 2px solid #24943A;
}
table.greenTable thead th:first-child {
  border-left: none;
}

table.greenTable tfoot td {
  font-size: 13px;
}
table.greenTable tfoot .links {
  text-align: right;
}
table.greenTable tfoot .links a{
  display: inline-block;
  background: #FFFFFF;
  color: #24943A;
  padding: 2px 8px;
  border-radius: 5px;
}

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


.greenoutline {
	border: thin none #0C0;
}
.labletext {
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 14px;
	color: #090;
	font-weight: lighter;
}
.scrool {
	overflow: scroll;
	visibility: inherit;
	height: 400px;
	width: 800px;
	left: 501px;
	top: 86px;
	border-top-style: inset;
	border-right-style: inset;
	border-bottom-style: inset;
	border-left-style: inset;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 14px;
	font-style: normal;
	text-align: left;
	white-space: normal;
	color: #000;
	border-top-color: #090;
	border-right-color: #090;
	border-bottom-color: #090;
	border-left-color: #090;
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
.enjoy-css11 {display: inline-block;
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
    <th width="1277" height="605" align="center" scope="col"><table width="1099" height="590" border="1" class="greenoutline">
      <tr>
        <th height="584" align="center" scope="col"><table width="1040" height="536" border="0">
          <tr>
            <th height="87" colspan="2" align="left" class="titlegreen" scope="col">REPORT MANAGEMENT SYSTEM ADMIN</th>
            <th width="222" align="right" valign="top" scope="col"><p class="labletext">
            <?php         	  
      $c = mysqli_connect("localhost","root","","report_management_system");
	  $s = "SELECT id_admin FROM admin WHERE id_admin = '$_SESSION[u]'";
	  $result = mysqli_query($c,$s);
	  
	  echo "$_SESSION[u]";
	  ?>
  
            </p>
              <p class="labletext"><?php echo "" . date("d/m/Y") . ""; ?></p>
              <p class="labletext"><a href="logout_admin.php">Logout</a></p></th>
          </tr>
          <tr>
            <th width="225" height="34" align="right" scope="col"><form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <label for="txtdate"></label>
              <input name="btnsearch" type="submit" class="btngreen" id="btnsearch" value="Search" />
              <input type="date" name="txtdate" id="txtdate" placeholder="DATE" />
            </form></th>
            <th width="579" align="right" scope="col"><form id="form2" name="form2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <input name="btnrefresh" type="submit" class="btngreen" id="btnrefresh" value="Refresh" />
            </form></th>
            <th height="34" scope="col">&nbsp;</th>
            </tr>
          <tr>
            <th height="393" colspan="2" scope="col"><form id="form4" name="form4" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <label for="txtidemployee"></label>
            
              <div class="scrool" id="chatbox"><table class="greenTable">
<thead>
<tr>
<th>delete</th>
<th>id_employee</th>
<th>ic_number</th>
<th>report_id</th>
<th>report</th>
<th>picture</th>
<th>date(Y/M/D)</th>
<th>time</th>
</tr>
</thead>
<tbody>

<?php

$c = mysqli_connect("localhost","root","","report_management_system");
$s = "SELECT id_employee, id_num, report_id, your_report, picture, date, time FROM employee";
$result = mysqli_query($c,$s);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

echo "<tr>";
echo "<td><a href='delete.php?delete=$row[report_id]'>delete</td>";
echo "<td>$row[id_employee]</td>";
echo "<td>$row[id_num]</td>";
echo "<td>$row[report_id]</td>";
echo "<td>$row[your_report] <a href='view_report.php?view=$row[report_id]'> view</td> ";
echo "<td>$row[picture]</td>";
echo "<td>$row[date]</td>";
echo "<td>$row[time]</td>";
echo "</tr>";

}
}

else {

echo "0 Result";	
	
}

?>

<?php

if(isset($_POST['btnsearch'])){

$m =  $_POST['txtdate'];

$c = mysqli_connect("localhost","root","","report_management_system");
$s = "select * from employee where date = '$m'";
$result = mysqli_query($c,$s);

$count= mysqli_num_rows($result);
if($count !=0){

$c = mysqli_connect("localhost","root","","report_management_system");
$s = "SELECT id_employee, id_num, report_id, your_report, picture, date, time FROM employee";


if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

echo "<tr>";
echo "<td><a href='delete.php?delete=$row[report_id]'>delete</td>";
echo "<td>$row[id_employee]</td>";
echo "<td>$row[id_num]</td>";
echo "<td>$row[report_id]</td>";
echo "<td>$row[your_report] <a href='view_report.php?view=$row[report_id]'> view</td> ";
echo "<td>$row[picture]</td>";
echo "<td>$row[date]</td>";
echo "<td>$row[time]</td>";
echo "</tr>";

}
}
}
else {

echo "0 Result";	

}
}	

?>

</tbody>
</table>
              		  <script>
          chatbox.scrollBy(0, 500);
          </script>   

                </p>
              </div>
            </form></th>
            <th height="393" align="center" valign="top" scope="col"><form id="form3" name="form3" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <table width="200" border="0">
                <tr>
                  <th scope="col"><label for="txticnum"></label>
                    <input name="txticnum" type="text" class="enjoy-css" id="txticnum" placeholder="IC NUMBER" required="required"/></th>
                </tr>
                <tr>
                  <th scope="row"><input name="txtidemployee" type="text" class="enjoy-css11" id="txtidemployee" placeholder="ID EMPLOYEE" required="required" /></th>
                </tr>
              </table>
              <table width="200" border="0">
                <tr>
                  <th width="129" align="right" scope="col"><input name="btninsert" type="submit" class="btngreen" id="btninsert" value="Insert" /></th>
                  <th width="61" align="left" scope="col"><input name="btnclear" type="reset" class="btngreen" id="btnclear" value="Clear" /></th>
                </tr>
              </table>
              <p>
              
            <?php
			  
			if(isset($_POST['btninsert'])){
				
			$a =  $_POST['txticnum'];
			$q =  $_POST['txtidemployee'];
			  
			$c = mysqli_connect("localhost","root","","report_management_system");
			$s = "select * from employee where id_employee = '$q'";
			$result = mysqli_query($c,$s);
			$count= mysqli_num_rows($result);  
			  
			if($count !=0){
			
			echo "User Already Exist,Try Different User";
			}
			  
			else {
				
			$c = mysqli_connect("localhost","root","","report_management_system");
			$s = "INSERT INTO employee (id_num, id_employee) VALUES ('$a', '$q')";
			$result = mysqli_query($c,$s);
			
			$c = mysqli_connect("localhost","root","","report_management_system");
			$s = "INSERT INTO pic_store_view (id_employee) VALUES ('$q')";
			$result = mysqli_query($c,$s);
			
			
			?>  
            
         <script>
         window.location="admin_report_management.php";
         </script>
         
         
         
         <?php
		 
		 }
		 }
		 echo "Insert User is Succesful";
		 ?>
 		  <script>
          chatbox.scrollBy(0, 500);
          </script>
              </p>
            </form></th>
          </tr>
        </table></th>
      </tr>
    </table></th>
  </tr>
</table>




</body>
</html>