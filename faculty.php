<!DOCTYPE html>
<html>
<head lang="en-US">
<meta http-equiv="refresh" content="1200"> 
<style type="text/css">

header{
    background-color: black;
    text-align: center;
      }

footer{
    color: black;
    background-color:#aaa;
    text-align: right;
      }


input[type=submit] {
			background-color: steel blue;
			color: black;
			padding: 5px 8px;
			margin: 4px 0;
			border: none;
			border-radius: 3px;
			cursor: pointer;
		}
input[type=submit]:hover {
			background-color:blue;
		}

input[type=reset] {
      background-color: steel blue;
      color: black;
      padding: 5px 8px;
      margin: 4px 0;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
input[type=reset]:hover {
      background-color:blue;
    }


#ld{
	color:blue;
	font-size:20px;
	}
div.container{
   
    margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 180px;
    margin-left: -270px;
    

}


table#t01 th {
    background-color: black;
    color: white;
  }
fieldset{
      padding-left: 20em;
      padding-right: 0.75em;
        }

body{font-family:georgia;font-size:20px;color:;background-color:rust;}


input[type=text]:focus {
    border: 3px solid #555;
                       }
input[type=submit], input[type=reset] {
    border: black;
    color: black;
    cursor: pointer;
}


</style>
<title></title>
<script>
function validateForm() 
{
    

    if(document.myform.Sname.value=="")
    {
        alert("Please Enter The Surname name");
        document.myform.Sname.focus();
        return false;
    }

    if(document.myform.Fname.value=="")
    {
        alert("Please Enter The First name");
        document.myform.Fname.focus();
        return false;
    }

     if(document.myform.Mname.value=="")
    {
        alert("Please Enter The Middle name");
        document.myform.Mname.focus();
        return false;
    }
    
    var Email=document.myform.Email.value;
    atpos=Email.indexOf("@")
    dotpos=Email.lastIndexOf(".");
	 if(Email==""||atpos<1||(dotpos<2))
	 {
	     alert("Please Enter Correct Email");
        document.myform.Email.focus();
        return false;
	 }
	 
	 var n=document.myform.telephone.value;
	 if(n==''||n.length<10||isNaN(n))
	 {
	 	  alert("Please Enter valid Contact Number");
        document.myform.telephone.focus();
        return false;
	 
	 }

    if(document.myform.Specialization.value=="")
    {
        alert("Please Enter The Specialization");
        document.myform.Specialization.focus();
        return false;
    }

    if(document.myform.Degree.value=="")
    {
        alert("Please Enter The Degree");
        document.myform.Degree.focus();
        return false;
    }

    if(document.myform.University.value=="")
    {
        alert("Please Enter The University");
        document.myform.university.focus();
        return false;
    }
    
    if( document.myform.Company.value == "" )
    {
            alert( "Please Enter The Company Name" );
            document.myform.Company.focus() ;
            return false;
    }
   
    if( document.myform.Project_Title.value == "" )
    {
            alert( "Please Enter The Project Title" );
            document.myform.Project_Title.focus() ;
            return false;
    }

    if( document.myform.Area_Specialization.value == "" )
    {
            alert( "Please Enter your Area/Specialization" );
            document.myform.Area_Specialization.focus() ;
            return false;
    }
}
</script>
</head>
<body>
<form name="myform" onsubmit="return validateForm()" method="post">
<div style="width: 100px; height: 250px; position: relative;">
   <img id="image1" style="position: relative;" src="Don Bosco.jpg" alt="DON"  width="1350" hieght="10" />
   <img id="image2" style="position: absolute; top: 40px; left: 20px;" src="Logo.png" alt="Don Bosco" width="200" hieght="50"/>

</div>
<header>
<h1 style="text-align:center;color:white">FACULTY INFORMATION</h1>
</header>
<fieldset> 
  <legend id="ld"><h3>PERSONAL INFORMATION:</h3></legend>
  <table border=0>
 <tr>
  <td>Title</td>
  <td>:</td>
  <td>
  <select name="Title" autofocus>
  <option value="missus">
  -Select-
  </option>
  <option value="missus">
  Mrs.
  </option>
  <option value="mister">
  Mr.
  </option>
  <option value="miss">
  Ms.
  </option>
  </select>
  </td>
 </tr>

 <tr>
  <td>Surname</td>
  <td>:</td>
  <td><input type="text" name="Sname" id="sname" placeholder="abc" size="22"></td>
</tr> 

<tr>
  <td>First name</td>
  <td>:</td>
  <td><input type="text" name="Fname" id="fname" placeholder="abc" size="22"></td>
</tr>

<tr>
  <td>Middle name</td>
  <td>:</td>
  <td><input type="text" name="Mname" id="mname" placeholder="abc" size="22"></td>
</tr> 

<tr>
  <td>Gender</td>
  <td>:</td>
  <td><input type="radio" name="gender" value="m" checked> Male 
  <input type="radio" name="gender" value="f" > Female
  </td>
</tr> 

<tr>
  <td>E-mail</td>
  <td>:</td>
  <td><input type="email" name="Email" id="email" size="22"></td>
</tr>

<tr> 
  <td>Contact Number</td>
  <td>:</td>
  <td><input type="tel" name="Telephone" id="telephone" size="22"></td>
</tr>

<tr>
  <td>Designation</td>
  <td>:</td>
  <td> 
  <select name="DESIGNATION" width="27">
  <option value="Select">------------Select Designation------------</option>
  <option value="TEACHING ASSISTANT"> TEACHING ASSISTANT </option>
  <option value="ASSISTANT PROFFESOR"> ASSISTANT PROFFESOR </option>
  <option value="ASSOCIATE PROFESSOR"> ASSOCIATE PROFFESOR</option>
  <option value="PROFFESOR"> PROFESSOR </option>
  </select>
  </td>
</tr>

<tr>
  <td>Departement</td>
  <td>:</td>
  <td>
  <select name="DEPARTMENT" width="27">
  <option value="Select">-----------Select Department-------------</option>
  <option value="IT">IT</option>
  <option value="COMPS">COMPS</option>
  <option value="EXTC">EXTC</option>
  <option value="MECH">MECH</option>
  </select>
  </td>
</tr>

<tr>
  <td>Date Of Joining</td>
  <td>:</td>
  <td>
  <input type="date" name="Doj" id="doj" size="22">
  </td>
</tr>

<tr> 
  <td>Date Of Birth</td>
  <td>:</td>
  <td>
  <input type="date" name="Dob" id="dob" size="22">
  </td>
</tr>

  </table>
  </fieldset>


  <fieldset>
  <legend id="ld"><h3>QUALIFICATION</h3></legend>
  <table border=0>

<tr>
  <td>Specialization</td>
  <td>:</td>
  <td>
  <input type="text" name="Specialization" id="specialization" size="22">
  </td>
</tr>

<tr>
  <td>Year of complition</td>
  <td>:</td>
  <td>
  <input type="number" name="Yearofcomplition" id="yoc" size="22">
  </td>
</tr>

<tr>
  <td>Degree</td>
  <td>:</td>
  <td>
  <input type="text" name="Degree" id="degree" size="22">
  <br>
  </td>
</tr>
  
<tr>
  <td>University</td>
  <td>:</td>
  <td>
  <input type="text" name="University" id="university" size="22">
  </td>
</tr>

  </table>
  </fieldset>


  <fieldset>
  <legend id="ld"><h3>INDUSTRY EXPERIENCE</h3></legend>
  <table border=0 >
<tr>
  <td>Company name</td>
  <td>:</td>
  <td>
  <input type="text" name="Company" id="cn" size="22">
  </td>
</tr>

<tr>  
  <td>Year</td>
  <td>:</td>
  <td>
  <input type="number" name="year" id="year" size="22">
  </td>
</tr>

<tr>
  <td>Date From</td>
  <td>:</td>
  <td>
  <input type="date" name="Datefrom" id="df" size="22">
  </td>
</tr>

<tr>  
  <td>Date To</td>
  <td>:</td>
  <td>
  <input type="date" name="Dateto" id="dt" size="22">
  </td>
</tr>

  </table>
  </fieldset>


  <fieldset>
  <legend id="ld"><h3>PROJECTS UNDERTAKEN</h3></legend>
  <table border=0 > 
<tr>
  <td>Project Title</td>
  <td>:</td>
  <td>
  <input type="text" name="Projecttitle" id="pt" size="22">
  </td>
</tr>

<tr>
  <td>Area/Specialization</td>
  <td>:</td>
  <td>
  <input type="text" name="Areaspecialization" id="as" size="22">
  </td>
</tr>

  </table>
  </fieldset>
  

  <fieldset>
  <legend id="ld"><h3>PAPERS PUBLISHED</h3></legend>
  <div class="container" align="center"><table id="t01" text-align="center">
  <tr>
    <th>Title Of Paper</th>
    <th>Journal/Conference</th> 
    <th>Year</th>
  </tr>
  <tr>
    <td><input type="text" name="Tp" id="top" size="27"></td>
    <td><input type="text" name="Jc" id="jc" size="27"></td>
    <td><input type="date" name="Year" size="27"></td>
  </tr>
  <tr>
    <td><input type="text" name="Tp1" id="top" size="27"></td>
    <td><input type="text" name="Jc1" id="jc" size="27"></td>
    <td><input type="date" name="Year1" size="27"></td>
  </tr>
  <tr>
    <td><input type="text" name="Tp2" id="top" size="27"></td>
    <td><input type="text" name="Jc2" id="jc" size="27"></td>
    <td><input type="date" name="Year2" size="27"></td>
  </tr>
</table>
</div>
  
 
  </fieldset> 
  <br><br>


 
  <table border=0 align="center" > 
 
 <tr>
  <td>
  <input type="submit" value="SUBMIT" name="submit" >&emsp;&emsp;&emsp;&emsp;<input type="reset" value="RESET" name="reset">
  </td>
 </tr>

  <table border=0 align="center" > 
 <tr>
  <td>
  <footer>
  <h5>DESIGNED AND DEVELOPED BY Premlata Pawar</h5>
  </footer>
  </td>
</tr>

</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$t=$_POST["Title"];
$sn=$_POST["Sname"];
$fn=$_POST["Fname"];
$mn=$_POST["Mname"];
$g=$_POST["gender"];
$em=$_POST["Email"];
$co=$_POST["Telephone"];
$dg=$_POST["DESIGNATION"];
$dp=$_POST["DEPARTMENT"];
$dj=$_POST["Doj"];
$dob=$_POST["Dob"];
$sp=$_POST["Specialization"];
$yc=$_POST["Yearofcomplition"];
$d=$_POST["Degree"];
$u=$_POST["University"];
$cn=$_POST["Company"];
$y=$_POST["year"];
$df=$_POST["Datefrom"];
$dt=$_POST["Dateto"];
$pt=$_POST["Projecttitle"];
$a=$_POST["Areaspecialization"];
$top=$_POST["Tp"];
$j=$_POST["Jc"];
$ye=$_POST["Year"];

include "connect.php";
$sql = "INSERT INTO faculty VALUES('$t','$sn','$fn','$mn','$g','$em','$co','$dg','$dp','$dj','$dob','$sp','$yc','$d','$u','$cn','$y','$df','$dt','$pt','$a','$top','$j','$ye')";
      
    $result = mysqli_query($con,$sql);
    echo "<h2><font color=green>Member successfully added</font></h2>";
}
?>  
