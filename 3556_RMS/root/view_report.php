<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>view_report</title>
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
.labletext {
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 14px;
	color: #090;
	font-weight: lighter;
}
.greenblock {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 18px;
	color: #FFF;
	background-color: #090;
	font-weight: bold;
}


.greenoutline {
	border: thin none #0C0;
	height: 380px;
	width: 380px;
}
.greeninfo {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 15px;
	color: #FFF;
	background-color: #090;
	font-weight: bold;
}
</style>
</head>

<body>

<table width="1287" height="611" border="0">
  <tr>
    <th width="1277" height="605" align="center" scope="col"><table width="1099" height="578" border="1" class="greenoutline">
      <tr>
        <th height="572" align="center" scope="col"><table width="1047" height="540" border="0">
          <tr>
            <th width="637" height="74" align="left" scope="col"><p class="titlegreen">REPORT MANAGEMENT SYSTEM ADMIN</p></th>
            <th width="400" align="right" class="labletext" scope="col"><a href="admin_report_management.php">Back to Admin Page</a></th>
          </tr>
          <tr>
            <th height="45" colspan="2" align="left" class="greenblock" scope="col">Employee Report</th>
          </tr>
          <tr>
            <th align="center" valign="middle" scope="col">
              <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <p>
                  <label for="textechoreport"></label>
              <?php
				  
		      $msg = "";
			  $msg1 = "";
			  $msg2 = "";
			  $msg3 = "";
			  $msg4 = "";
			  
			  if (isset($_GET['view']))
			  
			  {
			  
			  $row['report_id'] =  $_GET['view'];
			  
			           	  
              $c = mysqli_connect("localhost","root","","report_management_system");
	          $s = "select * from employee where report_id = '$row[report_id]'";
	          $result = mysqli_query($c,$s);
			  
			  $c = mysqli_connect("localhost","root","","report_management_system");
			  $s = "SELECT id_employee,your_report, picture, date, time,  FROM employee";
			  
			  if ($result->num_rows > 0) {
	          // output data of each row
	          while($row = $result->fetch_assoc()) {
			  
			  $msg = "$row[id_employee]";
			  $msg3 = "$row[your_report]"; 
			  $msg1 = "$row[time]";
			  $msg2 = "$row[date]";
			  $msg4 = "<img src ='picture_storage/".$row['picture']."'class = 'greenoutline'>";
			  
			  }
			  }
			  }
	          ?>
                  
                  
                  
<textarea name="textechoreport" cols="85" rows="12" readonly="readonly" class="greeninfo" id="textechoreport"><?php echo $msg3; ?></textarea>
                </p>
                <table width="611" border="0">
                  <tr>
                    <th width="102" height="30" align="left" scope="col">ID_Employee: </th>
                    <th width="499" align="left" class="labletext" scope="col"> <label for="txtviewemployee"></label>
                      <input name="txtviewemployee" type="text" class="greeninfo" id="txtviewemployee" value= "<?php echo $msg; ?>" readonly="readonly"/></th>
                  </tr>
                  <tr>
                    <th height="27" align="left" scope="col">Time: </th>
                    <th align="left" class="labletext" scope="col"><label for="txtviewtime" "></label>
                      <input name="txtviewtime" type="text" class="greeninfo" id="txtviewtime" value="<?php echo $msg1; ?>" readonly="readonly"/>
                    </th>
                  </tr>
                  <tr>
                    <th height="22" align="left" scope="col">Date: </th>
                    <th align="left" class="labletext" scope="col"><label for="txtviewdate"></label>
                      <input name="txtviewdate" type="text" class="greeninfo" id="txtviewdate" value="<?php echo $msg2;?>" readonly="readonly" /></th>
                  </tr>
          </table>
              </form></th>
            <th align="right" valign="top" scope="col"><form id="form3" name="form3" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <table width="387" height="383" border="1">
                <tr class="greenoutline">
                  <th width="364" height="377" scope="col"><?php echo $msg4;?></th> 
           
                  </tr>
                </table>
              </form></th>
          </tr>
          </table></th>
      </tr>
    </table></th>
  </tr>
</table>




</body>
</html>