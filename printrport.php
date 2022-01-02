<title>Online Attendance EU </title>
<link rel="icon" type="image/x-icon" href="http://education.bangladeshinformation.info/wp-content/uploads/sites/5/2016/09/Eastern-University-Logo.jpg">
<style type="text/css">
<!--
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
.style6 {font-size: 16px}
-->
</style>
<table width="800" border="1" align="center">
      <tr>
        <td bordercolor="#330033" bgcolor="#204969"><h1 align="center"><strong><span class="style1">Print Report</span></strong></h1></td>
      </tr>
      <tr>
        <td bgcolor="#999966"><div align="center">
       						
        				</div>       </td>
      </tr>
      <tr>
        <td><div align="center">
        <form action="" method="post">
          <table width="606" border="2" align="center" bordercolor="#9966FF" bgcolor="#204969">
          	<tr><td colspan="3" align="center"><h3>Search ID Wise</h3></td></tr>
            <tr>
              <td width="308" bgcolor="#9999CC"><div align="center"><strong><span class="style2">Enter the ID</span></strong></div></td>
              <td width="144" bgcolor="#9999CC"><span class="style6">
                <input type="text" name="eno" />
              </span></td>
              <td width="130" bgcolor="#9999CC"><input type="submit" value="View Information" name="btnsubmit"/></td>
            </tr>
          </table>
          </form>
        </div></td>
      </tr>
		<?php
		if(isset($_POST["btnsubmit"]))
		{
			include "z_db.php";
			extract($_POST);
			$query = "select * from `add_students1` where ID = ".$eno." limit 1";

			$result = mysqli_query($con,$query)or die("select error error");
			while($rec = mysqli_fetch_array($result))
			{
				echo '<tr><td colspan="2"><table width="400" border="2" align="center" bordercolor="#9966FF" bgcolor="#C7B6B1">
				<tr>
				  <td width="160" bgcolor="#9999CC"><span class="style2">ID</span></td>
				  <td width="160" bgcolor="#9999CC"><span class="style2">Name</span></td>';
				  $query1 = "select * from `getattendance` where `ID` = ".$rec["ID"]." order by date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td bgcolor="#9999CC" class=style2>'.$rec1["date"].'</td>';
					}
				echo '</tr>
				<tr>
				  <td width="222"><span class="style6">'.$rec["ID"].'</span></td>
				  <td width="222"><span class="style6">'.$rec["Name"].'</span></td>';
				  $query1 = "select *from `getattendance` where `ID` = ".$rec["ID"]." order by date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td>';
						if($rec1["attendance"]==0)
							echo "Absent";
						else
							echo "Present";
						echo '</td>';
					}
				
				echo '
				</tr>
								
			  </table></td></tr>';
			}
		}
		else
		{
			include "z_db.php";
			extract($_POST);
			$query = "select * from `add_students1` ";

			$result = mysqli_query($con,$query)or die("select error error");
			while($rec = mysqli_fetch_array($result))
			{
				echo '<tr><td colspan="2"><table width="90%" border="2" align="center" bordercolor="#9966FF" bgcolor="#C7B6B1">
				<tr>
				  <td width="160" bgcolor="#9999CC"><span class="style2">Student ID</span></td>
				  <td width="160" bgcolor="#9999CC"><span class="style2">Name</span></td>';
				  $query1 = "select * from `getattendance` where `ID` = ".$rec["ID"]." order by date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td bgcolor="#9999CC" class=style2>'.$rec1["date"].'</td>';
					}
				echo '</tr>
				<tr>
				  <td width="222"><span class="style6">'.$rec["ID"].'</span></td>
				  <td width="222"><span class="style6">'.$rec["Name"].'</span></td>';
				  $query1 = "select *from `getattendance` where `ID` = ".$rec["ID"]." order by date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td>';
						if($rec1["attendance"]==0)
							echo "Absent";
						else
							echo "Present";
						echo '</td>';
					}
				
				echo '
				</tr>
								
			  </table></td></tr>';
			}
		}
		?>    
	</table>