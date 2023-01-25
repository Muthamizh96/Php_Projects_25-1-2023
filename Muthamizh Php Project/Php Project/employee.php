<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Professional Loan</title>
    <link rel="icon" type="img/png" href="empl.png">
    <link rel="stylesheet" type="text/css" href="employeecss.css">
    <script src="loanjs.js"></script>
    <?php
    include("loanphp.php");
    ?>
</head>
<body>
<form action="loanphp.php" method="post" onsubmit="employee()">
    <h1 id="phead">Application For Salaried-professional Loan</h1><hr>
    <div id="perdiv">
      <h2 id="head1">Personal Details</h2>
      <label for="fname" id="fname1" class="perlabel">First Name:</label>
      <input type="text" id="fname" placeholder="First Name" class="perinput" name="fname">
      <label for="lname" id="lname1" class="perlabel">Last Name:</label>
      <input type="text" id="lname" placeholder="Last Name" class="perinput" name="lname"><br>
      <br>
      <label for="faname" id="faname1" class="perlabel">Father's Name:</label>
      <input type="text" id="faname" placeholder="Fathers Name" class="perinput" name="faname">
      <label for="dob" id="dob1" class="perlabel">Date of Birth:</label>
      <input type="text" id="dob" placeholder="DD-MM-YYYY" class="perinput" name="dob" onmouseenter="(this.type='date')" onmouseleave="(this.type='text')">
      <label for="age" id="age1" class="perlabel">Age:</label>
      <input type="number" id="age" placeholder="Age" class="perinput" name="age" onkeypress="if(this.value.length==2) return false;">
    </div>
    <br>
    <hr>
    <div id="kycdiv">
        <h2 id="head2">E-Kyc Details</h2>
        <label for="aathar" id="aadhar" class="kyclabel">Aathar Number:</label>
        <input type="number" id="aathar" placeholder="0000-0000-0000" name="aathar" class="kycinput" onkeypress="if(this.value.length== 12) return false;">
        <label for="pan" id="pan1" class="kyclabel">PAN Number:</label>
        <input type="text" id="pan" placeholder="ABCDE0000F" name="pan" class="kycinput" maxlength="10"><br>
        <br>
        <label for="faid" id="faid1" class="kyclabel">Family Id:</label>
        <input type="text" id="faid" placeholder="Ration Card Number" class="kycinput" name="famid">
        <label for="accn" id="acc" class="kyclabel">Account Number:</label>
        <input type="number" id="accn" placeholder="0000000000000" class="kycinput" name="accno">
        <br>
        <br>
        <label for="bname" id="bname1" class="kyclabel">Branch Name:</label>
        <input type="text" id="bname" placeholder="Name of Branch" class="kycinput" name="branch">
        <label for="ifcode" id="ifcode1" class="kyclabel">IFSC code:</label>
        <input type="text" id="ifcode" placeholder="CNRB0002963" class="kycinput" maxlength="15" name="ifcode">
    </div>
    <br>
    <hr>
    <div id="comdiv">
        <h2 id="head3">Communication Details</h2>
        <label for="mobile" id="mobile1" class="comlabel">Mobile Number:</label>
        <input type="number" id="mobile" placeholder="9363486483" class="cominput" name="m1" onkeypress="if(this.value.length==10) return false;">
        <label for="mobile2" id="mobile22" class="comlabel">Alternate Number:</label>
        <input type="number" id="mobile2" placeholder="9345501339" class="cominput" name="m2" onkeypress="if(this.value.length==10) return false;"><br>
        <br>
        <label for="maid" id="maid1" class="comlabel">Email-Id:</label>
        <input type="text" id="maid" placeholder="Abcdefghi@gmail.com" name="mailid" class="cominput">
    </div>
    <br>
    <hr>
    <div id="peradddiv">
        <h2 id="head4">Permanent Address</h2>
        <label for="dno" id="dnumber" class="peralabel">D.No/Flat No:</label>
        <input type="text" id="dno" placeholder="Enter your Door Number" class="perainput" name="dno">
        <label for="stn" id="street" class="peralabel">St.Name/Village:</label>
        <input type="text" id="stn" placeholder="Enter Your street Name" name="street" class="perainput"><br>
        <br>
        <label for="village" id="village1" class="peralabel">Post:</label>
        <input type="text" id="village" placeholder="Enter Your Village or Post" name="village" class="perainput">
        <label for="sdt" id="sdt1" class="peralabel">Sub-District/Taluk:</label>
        <input type="text" id="sdt" placeholder="Sub-District/Taluk" name="taluk" class="perainput">
        <br>
        <br>
        <label for="dis" id="dis1" class="peralabel">District:</label>
        <input type="text" id="dis" placeholder="District" name="dis" class="perainput">
        <label for="state" id="state1" class="peralabel">State:</label>
        <input type="text" id="state" placeholder="TamilNadu" name="state" class="perainput"><br>
        <br>
        <label for="country" id="country1" class="peralabel">Country:</label>
        <input type="text" id="country" placeholder="India" class="perainput" name="country">
        <label for="pincode" id="pincode1" class="peralabel">Pin Code:</label>
        <input type="number" id="pincode" placeholder="600001" class="perainput" name="pcode" onkeypress="if(this.value.length==6) return false;">
    </div>
    <br>
    <hr>
    <div id="comadddiv">
        <h2 id="head5">Communication Address</h2>
        <label for="dno1" id="dnumber1" class="comalabel">D.No/Flat No:</label>
        <input type="text" id="dno1" placeholder="Enter your Door Number" class="comainput" name="dno1">
        <label for="stn1" id="street1" class="comalabel">St.Name/Village:</label>
        <input type="text" id="stn1" placeholder="Enter Your street/villaage" class="comainput" name="street1"><br>
        <br>
        <label for="post" id="post1" class="comalabel">Post:</label>
        <input type="text" id="post" placeholder="Enter Your Post Office" class="comainput" name="village1">
        <label for="taluk" id="taluk11" class="comalabel">Sub-District/Taluk:</label>
        <input type="text" id="taluk" placeholder="Sub-District/Taluk" class="comainput" name="taluk1">
        <br>
        <br>
        <label for="dit1" id="dis11" class="comalabel">District:</label>
        <input type="text" id="dit1" placeholder="District" class="comainput" name="dis1">
        <label for="stat1" id="state11" class="comalabel">State:</label>
        <input type="text" id="stat1" placeholder="TamilNadu" class="comainput" name="state1"><br>
        <br>
        <label for="country11" id="country111" class="comalabel">Country:</label>
        <input type="text" id="country11" placeholder="India" class="comainput" name="country1">
        <label for="pincode111" id="pincode11" class="comalabel">Pin Code:</label>
        <input type="number" id="pincode111" placeholder="600001" class="comainput" name="pcode1" onkeypress="if(this.value.length==6) return false;">
    </div>
    <br>
    <br>
    <hr>
    <div id="empldiv">
        <h2 id="head6">Employee Details</h2>
        <label for="emp" id="emp1" class="empllabel">Employee Id:</label>
        <input type="text" id="emp" placeholder="Employee Id" class="emplinput" name="empid">
        <label for="ename" id="ename1" class="empllabel">Employee Name:</label>
        <input type="text" id="ename" placeholder="Employee Name" class="emplinput" name="empname"><br>
        <br>
        <label for="cur" id="cur1" class="empllabel">Company Name:</label>
        <input type="text" id="cur" placeholder="Current Company Name" class="emplinput" name="companyname"><br>
        <br>
        <label for="ccity" id="ccity1" class="empllabel">Company city:</label>
        <input type="text" id="ccity" placeholder="Company city" class="emplinput" name="companycity">
        <label for="eim" id="eim1" class="empllabel">Experience:</label>
        <input type="text" id="eim" placeholder="in years" class="emplinput" name="exp"><br>
        <br>
        <label for="ctc" id="ctc1" class="empllabel">CTC:</label>
        <input type="number" id="ctc" placeholder="Monthly Take Home" class="emplinput" name="ctc" onkeypress="if(this.value.length==5) return false;">
        <label for="lare" id="lare1" class="empllabel">Loan Amount:</label>
        <input type="number" id="lare" placeholder="Loan Required" class="emplinput" name="loanmt" onkeypress="if(this.value.length==10) return false;">
        <br>
    </div>
    <br>
    <br>
    <input name="employeesubmit" type="submit" id="submit" value="Submit">
</form>
</body>
</html>