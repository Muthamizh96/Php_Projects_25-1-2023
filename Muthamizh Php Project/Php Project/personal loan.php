<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Personal Loan</title>
    <link rel="icon" type="img/png" href="pers.png">
    <link rel="stylesheet" type="text/css" href="personalcss.css">
    <script src="loanjs.js"></script>
    <?php
    include("loanphp.php");
    ?>
</head>
<body>
<form action="loanphp.php" method="POST" onsubmit="personal()">
    <h1 id="phead">Application For Personal Loan</h1><hr>
    <div id="perdiv">
      <h2 id="head1">Personal Details</h2>
      <label for="fname" id="fname1" class="perlabel">First Name:</label>
      <input type="text" id="fname" name="fname" placeholder="First Name" class="perinput">
      <label for="lname" id="lname1" class="perlabel">Last Name:</label>
      <input type="text" id="lname" name="lname" placeholder="Last Name" class="perinput"><br>
      <br>
      <label for="faname" id="faname1" class="perlabel">Father's Name:</label>
      <input type="text" id="faname" name="faname" placeholder="Fathers Name" class="perinput">
      <label for="dob" id="dob1" class="perlabel">Date of Birth:</label>
      <input type="text" id="dob" name="dob" placeholder="DD-MM-YYYY" class="perinput" onmouseenter="(this.type='date')" onmouseleave="(this.type='text')">
      <label for="age" id="age1" class="perlabel">Age:</label>
      <input type="number" id="age" name="age" placeholder="Age" class="perinput" onkeypress="if(this.value.length==2) return false;">
    </div>
    <br>
    <hr>
    <div id="kycdiv">
        <h2 id="head2">E-Kyc Details</h2>
        <label for="aathar" id="aadhar" class="kyclabel">Aathar Number:</label>
        <input type="text" id="aathar" name="aatharno" placeholder="0000-0000-0000" class="kycinput" onkeypress="if(this.value.length==12) return false;">
        <label for="pan" id="pan1" class="kyclabel">PAN Number:</label>
        <input type="text" id="pan" name="panno" placeholder="ABCDE0000F" class="kycinput" onkeypress="if(this.value.length==10) return false;"><br>
        <br>
        <label for="faid" id="faid1" class="kyclabel">Family Id:</label>
        <input type="text" id="faid" name="famid" placeholder="123456789123456789" class="kycinput">
        <label for="accn" id="acc" class="kyclabel">Account Number:</label>
        <input type="text" id="accn" name="accno" placeholder="0000000000000" class="kycinput">
        <br>
        <br>
        <label for="bname" id="bname1" class="kyclabel">Branch Name:</label>
        <input type="text" id="bname" name="branchname" placeholder="Name of Branch" class="kycinput">
        <label for="ifcode" id="ifcode1" class="kyclabel">IFSC code:</label>
        <input type="text" id="ifcode" name="ifcode" placeholder="CNRB0002963" class="kycinput" onkeypress="if(this.value.length==10) return false;">
    </div>
    <br>
    <hr>
    <div id="comdiv">
        <h2 id="head3">Communication Details</h2>
        <label for="mobile" id="mobile1" class="comlabel">Mobile Number:</label>
        <input type="text" id="mobile" name="m1" placeholder="9363486483" class="cominput" onkeypress="if(this.value.length==10) return false;">
        <label for="mobile2" id="mobile22" class="comlabel">Alternate Number:</label>
        <input type="text" id="mobile2" name="m2" placeholder="9345501339" class="cominput" onkeypress="if(this.value.length==10) return false;"><br>
        <br>
        <label for="maid" id="maid1" class="comlabel">Email-Id:</label>
        <input type="text" id="maid" name="mailid" placeholder="Abcdefghi@gmail.com" class="cominput">
    </div>
    <br>
    <hr>
    <div id="peradddiv">
        <h2 id="head4">Permanent Address</h2>
        <label for="dno" id="dnumber" class="peralabel">D.No/Flat No:</label>
        <input type="text" id="dno" name="dno" placeholder="Enter your Door Number" class="perainput">
        <label for="stn" id="street" class="peralabel">St.Name/Village:</label>
        <input type="text" id="stn" name="stname" placeholder="Enter Your street Name" class="perainput"><br>
        <br>
        <label for="village" id="village1" class="peralabel">Post:</label>
        <input type="text" id="village" name="village" placeholder="Enter Your Village or Post" class="perainput">
        <label for="sdt" id="sdt1" class="peralabel">Sub-District/Taluk:</label>
        <input type="text" id="sdt" name="sdt" placeholder="Sub-District/Taluk" class="perainput">
        <br>
        <br>
        <label for="dis" id="dis1" class="peralabel">District:</label>
        <input type="text" id="dis" name="dis" placeholder="District" class="perainput">
        <label for="state" id="state1" class="peralabel">State:</label>
        <input type="text" id="state" name="state" placeholder="TamilNadu" class="perainput"><br>
        <br>
        <label for="country" id="country1" class="peralabel">Country:</label>
        <input type="text" id="country" name="country" placeholder="India" class="perainput">
        <label for="pincode" id="pincode1" class="peralabel">Pin Code:</label>
        <input type="number" id="pincode" name="pincode" placeholder="600001" class="perainput" onkeypress="if(this.value.length==6) return false;">
    </div>
    <br>
    <hr>
    <div id="comadddiv">
        <h2 id="head5">Communication Address</h2>
        <label for="dno1" id="dnumber1" class="comalabel">D.No/Flat No:</label>
        <input type="text" id="dno1" name="dno1" placeholder="Enter your Door Number" class="comainput">
        <label for="stn1" id="street1" class="comalabel">St.Name/Village:</label>
        <input type="text" id="stn1" name="stn1" placeholder="Enter Your street/villaage" class="comainput"><br>
        <br>
        <label for="post" id="post1" class="comalabel">Post:</label>
        <input type="text" id="post" name="post" placeholder="Enter Your Post Office" class="comainput">
        <label for="taluk" id="taluk11" class="comalabel">Sub-District/Taluk:</label>
        <input type="text" id="taluk" name="taluk" placeholder="Sub-District/Taluk" class="comainput">
        <br>
        <br>
        <label for="dit1" id="dis11" class="comalabel">District:</label>
        <input type="text" id="dit1" name="dit1" placeholder="District" class="comainput">
        <label for="stat1" id="state11" class="comalabel">State:</label>
        <input type="text" id="stat1" name="stat1" placeholder="TamilNadu" class="comainput"><br>
        <br>
        <label for="country11" id="country111" class="comalabel">Country:</label>
        <input type="text" id="country11" name="country11" placeholder="India" class="comainput">
        <label for="pincode111" id="pincode11" class="comalabel">Pin Code:</label>
        <input type="number" id="pincode111" name="pincode111" placeholder="600001" class="comainput" onkeypress="if(this.value.length==6) return false;">
    </div>
    <br>
    <br>
    <input name="personalsubmit" type="submit" id="submit" value="Submit">
</form>
</body>
</html>