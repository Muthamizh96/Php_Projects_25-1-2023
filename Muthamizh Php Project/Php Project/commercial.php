<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Commercial-Vehicle Loan</title>
    <link rel="icon" type="img/png" href="trucks.png">
    <link rel="stylesheet" type="text/css" href="commercialcss.css">
    <script src="loanjs.js"></script>
    <?php
    include("loanphp.php");
    ?>
</head>
<body>
<form action="loanphp.php" method="post" onsubmit="commercial()">
    <h1 id="phead">Application For Commercial-Vehicle Loan</h1><hr>
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
        <input type="number" id="aathar" placeholder="0000-0000-0000" name="aatharno" class="kycinput" onkeypress="if(this.value.length==12) return false;">
        <label for="pan" id="pan1" class="kyclabel">PAN Number:</label>
        <input type="text" id="pan" placeholder="ABCDE0000F" name="panno" class="kycinput" onkeypress="if (this.value.length==10) return false;"><br>
        <br>
        <label for="faid" id="faid1" class="kyclabel">Family Id:</label>
        <input type="text" id="faid" placeholder="123456789123456789" name="famid" class="kycinput">
        <label for="accn" id="acc" class="kyclabel">Account Number:</label>
        <input type="number" id="accn" placeholder="0000000000000" name="accno" class="kycinput">
        <br>
        <br>
        <label for="bname" id="bname1" class="kyclabel">Branch Name:</label>
        <input type="text" id="bname" placeholder="Name of Branch" name="branchname" class="kycinput">
        <label for="ifcode" id="ifcode1" class="kyclabel">IFSC code:</label>
        <input type="text" id="ifcode" placeholder="CNRB0002963" name="ifcode" class="kycinput">
    </div>
    <br>
    <hr>
    <div id="comdiv">
        <h2 id="head3">Communication Details</h2>
        <label for="mobile" id="mobile1" class="comlabel">Mobile Number:</label>
        <input type="number" id="mobile" placeholder="9363486483" name="m1" class="cominput" onkeypress="if(this.value.length==10) return false;">
        <label for="mobile2" id="mobile22" class="comlabel">Alternate Number:</label>
        <input type="number" id="mobile2" placeholder="9345501339" name="m2" class="cominput" onkeypress="if(this.value.length==10) return false;"><br>
        <br>
        <label for="maid" id="maid1" class="comlabel">Email-Id:</label>
        <input type="text" id="maid" placeholder="Abcdefghi@gmail.com" name="mailid" class="cominput">
    </div>
    <br>
    <hr>
    <div id="peradddiv">
        <h2 id="head4">Permanent Address</h2>
        <label for="dno" id="dnumber" class="peralabel">D.No/Flat No:</label>
        <input type="text" id="dno" placeholder="Enter your Door Number" name="dno" class="perainput">
        <label for="stn" id="street" class="peralabel">St.Name/Village:</label>
        <input type="text" id="stn" placeholder="Enter Your street Name" name="stname" class="perainput"><br>
        <br>
        <label for="village" id="village1" class="peralabel">Post:</label>
        <input type="text" id="village" placeholder="Enter Your Village or Post" name="village" class="perainput">
        <label for="sdt" id="sdt1" class="peralabel">Sub-District/Taluk:</label>
        <input type="text" id="sdt" placeholder="Sub-District/Taluk" name="sdt" class="perainput">
        <br>
        <br>
        <label for="dis" id="dis1" class="peralabel">District:</label>
        <input type="text" id="dis" placeholder="District" name="dis" class="perainput">
        <label for="state" id="state1" class="peralabel">State:</label>
        <input type="text" id="state" placeholder="TamilNadu" name="state" class="perainput"><br>
        <br>
        <label for="country" id="country1" class="peralabel">Country:</label>
        <input type="text" id="country" placeholder="India" name="country" class="perainput">
        <label for="pincode" id="pincode1" class="peralabel">Pin Code:</label>
        <input type="number" id="pincode" placeholder="600001" name="pcode" class="perainput" onkeypress="if (this.value.length==6) return false;">
    </div>
    <br>
    <hr>
    <div id="vdiv">
        <h2 id="head6">Vehicle Details</h2>
        <label for="vname" id="vname1" class="vlabel">Vehicle Name:</label>
        <input type="text" id="vname" placeholder="Vehicle Name" name="vname" class="vinput">
        <label for="vt" id="vt1" class="vlabel">Type of Vehicle:</label>
        <input type="text" id="vt" placeholder="Vehicle Type" name="vtype" class="vinput"><br>
        <br>
        <label for="vm" id="vm1" class="vlabel">Vehicle Model:</label>
        <input type="text" id="vm" placeholder="Vehicle Model" name="vmodel" class="vinput">
        <label for="yom" id="yom1" class="vlabel">Manufacturing Year:</label>
        <input type="number" id="yom" placeholder="Manufacture Year" name="vmyear" class="vinput" onkeypress="if(this.value.length==4) return false;">
        <br>
        <br>
        <label for="tcov" id="tcov1" class="vlabel">Cost of Vehicle:</label>
        <input type="number" id="tcov" placeholder="Total cost of Vehicle" name="vcost" class="vinput" onkeypress="if(this.value.length==6) return false;">
        <label for="lr" id="lr1" class="vlabel">Loan Required:</label>
        <input type="number" id="lr" placeholder="Loan Required" name="lreq" class="vinput" onkeypress="if(this.value.length==6) return false;"><br>
    </div>
    <br>
    <br>
    <input type="submit" id="submit" value="Submit" name="commercialsubmit">
</form>
</body>
</html>