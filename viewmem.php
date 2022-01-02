<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Attendance System EU</title>
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
tr{

}
tr:hover{
	background-color: yellow;

}
</style></head>

<body>
<table width="800" border="1" align="center">
      <tr>
        <td bordercolor="#330033" bgcolor="#204969"><h1 align="center"><strong><span class="style1">Student Details</span></strong></h1></td>
      </tr>
      <tr>
        <td bgcolor="#999966"><div align="center">
       						 
        				</div>       </td>
      </tr>
      
      	<tr style="background-color: white;"><td colspan="2">
        <form action="" method=post>
        
        <table width="500" border="2" align="center" cellpadding="5" cellspacing="10" bordercolor="#9966FF" bgcolor="#C7B6B1">
        	<tr>
				  <td colspan="5" bgcolor="#9966FF"><div align="center"><strong><span class="style2">Student information</span></strong></div></td>
			</tr>
            <tr>
				  <td  bgcolor="#9999CC"><div align="center"><strong><span class="style2">Student ID</span></strong></div></td>
                  <td  bgcolor="#9999CC"><div align="center"><strong><span class="style2">Name</span></strong></div></td>
                  <td  bgcolor="#9999CC"><div align="center"><strong><span class="style2">Mobile</span></strong></div></td>
                  <td  bgcolor="#9999CC"><div align="center"><strong><span class="style2">Email</span></strong></div></td>
                  <td  bgcolor="#9999CC"><div align="center"><strong><span class="style2">Delete</span></strong></div></td>
			</tr>
				
		<?php
			include "z_db.php";
			$query = "select *from `add_students1` ";

			$result = mysqli_query($con,$query)or die("select error error");
			while($rec = mysqli_fetch_array($result))
			{
				echo '<tr height=30px>
				  <td width="222"><span class="style6">'.$rec["ID"].'</span></td>
				  <td width="222"><span class="style6">'.$rec["Name"].'</span></td>
				  <td width="222"><span class="style6">'.$rec["mobile"].'</span></td>
				  <td width="222"><span class="style6">'.$rec["email"].'</span></td>
				  <td width="222"><span class="style6">';
				  echo '<a style="background-color:#CCCCCC;color:#CC3333;border:solid;text-decoration:none;border-radius:10px;position:relative;top:0px;border-color:red;" href="deletemember.php?d='.$rec["ID"].'">&nbsp;Delete&nbsp;</a></span></td></tr>';			  
			}
		
		?>    
        </table>
        </form>
        </td>
        </tr>
	</table>
    