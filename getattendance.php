<!DOCTYPE html>
<html>
	<head>
</html>
<title> Online Attendance System EU</title>
<link rel="icon" type="image/x-icon" href="http://education.bangladeshinformation.info/wp-content/uploads/sites/5/2016/09/Eastern-University-Logo.jpg">
<style type="text/css">
body{
	background: linear-gradient(to right, rgb(177, 56, 168), rgb(250, 116, 5));
}
.style1 {
	font-family: "Courier New", Courier, monospace;
	font-size: 60px;
	color: #FFFFFF;
	font-style: italic;
}
.style2 {
	font-size: 24px;
	color: #0000FF;
}
.style7 {color: #FFCCFF}

</style>
</head>
<body>
<script type="text/javascript">
	function getatt(value)
	{
		if(value == true)
		{
			document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) - 1;
			document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) + 1;
		}
		else
		{
			document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) + 1;
			document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) - 1;
		}
	}
</script>


<table width="800" border="4" align="center">
      <tr>
        <td bordercolor="#204969" bgcolor="#204969"><h1 align="center"><strong><span class="style1">Get Attendance</span></strong></h1></td>
      </tr>
      <tr>
        <td bgcolor="#204969"><div align="center">
       						 
        				</div>       </td>
      </tr>
      <tr>
        <td>
        <form action="getattendance1.php" method="post">
        <table width="180px" align="left" style="">
            	<tr>
                	<td> Select date : <br />
                   <?php 
				 		    $dt = getdate();
							$day = $dt["mday"];
							$month = date("m");
							$year = $dt["year"];
							
							echo "<select name='cdate'>";
							for($a=1;$a<=31;$a++)
							{
								if($day == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select><select name='cmonth'>";
							for($a=1;$a<=12;$a++)
							{
								if($month == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select><select name='cyear'>";
							for($a=2010;$a<=$year;$a++)
							{
								if($year == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select>";
						?>                    
                    </td>
                </tr>
             </table>	
        
          <table width="400" border="2" align="left" bordercolor="#9966FF" bgcolor="#C7B6B1" style="margin-left:20px;">
            <tr>
              <td colspan="3" bgcolor="#9999CC"><div align="center"><strong><span class="style2">Get Attendance</span></strong></div></td>
            </tr>
            <tr bgcolor="#999966">
              <td width="114"><span class="style7">ID</span></td>
              <td width="152"><span class="style7">Name</span></td>
              <td width="110"><span class="style7">Attend</span></td>
            </tr>
            <?php
				include "z_db.php";
				extract($_POST);
				$query = "select *from `add_students1` order by `ID`";
				$s = 0;
				$result = mysqli_query($con,$query)or die("select error");
				while($rec = mysqli_fetch_array($result))
				{
					$s = $s + 1;
					echo ' <tr>
							  <td width="114">'.$rec["ID"].'</td>
							  <td width="152">'.$rec["Name"].'</td>
							  <td width="110"><input type=checkbox name='.$rec["ID"].' onclick="getatt(this.checked);"/></td>
							</tr>';
				}
			?>			
            <tr>
              <td colspan="3"><div align="center">
                <input type="submit" value="Get Attendance" name="btnsubmit"/>
                &nbsp;&nbsp;</div></td>
            </tr>
          </table>
          </form>
         
         	<table width="100px" align="right" style="margin-left:35px">
            	<tr>
                	<td> Total Absent : <input type="text" id="txtAbsent" value="<?php print $s; ?>" size="10" disabled="disabled"/></td>
                </tr>
                <tr>
                	<td> Total Present : <input type="text" id="txtPresent" value="0" size="10"  disabled="disabled"/></td>
                </tr>
                <tr>
                	<td> Total Strength : <input type="text" id="txtStrength" value="<?php print $s; ?>" size="10" disabled="disabled"/></td>
                </tr>
             </table>
         
         </td>
      </tr>
    </table>
  </body>
  </html>