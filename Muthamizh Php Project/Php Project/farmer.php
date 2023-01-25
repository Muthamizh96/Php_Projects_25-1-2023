<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Farmer Loan</title>
    <link rel="icon" type="img/png" href="farmer.png">
    <link rel="stylesheet" type="text/css" href="farmercss.css">
    <script src="loanjs.js"></script>
    <?php
    include("loanphp.php");
    ?>
</head>
<body>
<form action="loanphp.php" method="post" onsubmit="farmer()">    
    <h1 id="phead">Application For Farmer Loan</h1><hr>
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
        <input type="text" id="pan" placeholder="ABCDE0000F" class="kycinput" name="panno" maxlength="15"><br>
        <br>
        <label for="faid" id="faid1" class="kyclabel">Family Id:</label>
        <input type="text" id="faid" placeholder="123456789123456789" class="kycinput" maxlength="25" name="famid">
        <label for="accn" id="acc" class="kyclabel">Account Number:</label>
        <input type="number" id="accn" placeholder="0000000000000" class="kycinput" name="accno" onkeypress="if(this.value.length==20) return false;">
        <br>
        <br>
        <label for="bname" id="bname1" class="kyclabel">Branch Name:</label>
        <input type="text" id="bname" placeholder="Name of Branch" class="kycinput" name="branchname">
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
        <input type="text" id="maid" placeholder="Abcdefghi@gmail.com" class="cominput" name="mailid">
    </div>
    <br>
    <hr>
    <div id="peradddiv">
        <h2 id="head4">Permanent Address</h2>
        <label for="dno" id="dnumber" class="peralabel">D.No/Flat No:</label>
        <input type="text" id="dno" placeholder="Enter your Door Number" class="perainput" maxlength="5" name="dno">
        <label for="stn" id="street" class="peralabel">St.Name/Village:</label>
        <input type="text" id="stn" placeholder="Enter Your street Name" class="perainput" name="stname"><br>
        <br>
        <label for="village" id="village1" class="peralabel">Post:</label>
        <input type="text" id="village" placeholder="Enter Your Village or Post" class="perainput" name="village">
        <label for="sdt" id="sdt1" class="peralabel">Sub-District/Taluk:</label>
        <input type="text" id="sdt" placeholder="Sub-District/Taluk" class="perainput" name="sdt">
        <br>
        <br>
        <label for="dis" id="dis1" class="peralabel">District:</label>
        <input type="text" id="dis" placeholder="District" class="perainput" name="dis">
        <label for="state" id="state1" class="peralabel">State:</label>
        <input type="text" id="state" placeholder="TamilNadu" class="perainput" name="state"><br>
        <br>
        <label for="country" id="country1" class="peralabel">Country:</label>
        <input type="text" id="country" placeholder="India" class="perainput" name="country">
        <label for="pincode" id="pincode1" class="peralabel">Pin Code:</label>
        <input type="number" id="pincode" placeholder="600001" class="perainput" name="pcode" onkeypress="if(this.value.length==10) return false;">
    </div>
    <br>
    <hr>
    <div id="comadddiv">
        <h2 id="head5">Communication Address</h2>
        <label for="dno1" id="dnumber1" class="comalabel">D.No/Flat No:</label>
        <input type="text" id="dno1" placeholder="Enter your Door Number" class="comainput" name="dno1" maxlength="5">
        <label for="stn1" id="street1" class="comalabel">St.Name/Village:</label>
        <input type="text" id="stn1" placeholder="Enter Your street/villaage" class="comainput" name="stn1"><br>
        <br>
        <label for="post" id="post1" class="comalabel">Post:</label>
        <input type="text" id="post" placeholder="Enter Your Post Office" class="comainput" name="post">
        <label for="taluk" id="taluk11" class="comalabel">Sub-District/Taluk:</label>
        <input type="text" id="taluk" placeholder="Sub-District/Taluk" class="comainput" name="taluk">
        <br>
        <br>
        <label for="dit1" id="dis11" class="comalabel">District:</label>
        <input type="text" id="dit1" placeholder="District" class="comainput" name="dit1">
        <label for="stat1" id="state11" class="comalabel">State:</label>
        <input type="text" id="stat1" placeholder="TamilNadu" class="comainput" name="stat1"><br>
        <br>
        <label for="country11" id="country111" class="comalabel">Country:</label>
        <input type="text" id="country11" placeholder="India" class="comainput" name="country11">
        <label for="pincode111" id="pincode11" class="comalabel">Pin Code:</label>
        <input type="number" id="pincode111" placeholder="600001" class="comainput" name="pincode111" onkeypress="if(this.value.length==6) return false;">
    </div>
    <br>
    <br>
    <hr>
    <div id="farmerdiv">
        <h2 id="head6">Land Details</h2>
        <label for="farname" id="farname1" class="farmerlabel">Farmer Name:</label>
        <input type="text" id="farname" placeholder="Farmer Name" class="farmerinput" name="farmername">
        <label for="kisnumber" id="kisnumber1" class="farmerlabel">PMKissan Number:</label>
        <input type="text" id="kisnumber" placeholder="PMKISSAN Number" class="farmerinput" name="kissanno" maxlength="15"><br>
        <br>
        <label for="farmervillage" id="farmervillage1" class="farmerlabel">Village:</label>
        <input type="text" id="farmervillage" placeholder="Farmer Village" class="farmerinput" name="farmervill">
        <label for="farmerblock" id="famerblock1" class="farmerlabel">Taluk/Block:</label>
        <input type="text" id="farmerblock" placeholder="Block" class="farmerinput" name="farmertaluk">
        <br>
        <br>
        <label for="farmerdis" id="farmerdis1" class="farmerlabel">District:</label>
        <input type="text" id="farmerdis" placeholder="District" class="farmerinput" name="farmerdis">
        <label for="farstate" id="farstate1" class="farmerlabel">State:</label>
        <input type="text" id="farstate" placeholder="State" class="farmerinput" name="farstate"><br>
        <br>
        <label for="farcountry" id="farcountry1" class="farmerlabel">Country:</label>
        <input type="text" id="farcountry" placeholder="Country" class="farmerinput" name="farcountry">
        <label for="farpin" id="farpin1" class="farmerlabel">Pin Code:</label>
        <input type="number" id="farpin" placeholder="600094" class="farmerinput" name="farpincode" onkeypress="if(this.value.length==6) return false;">
    </div>
    <br>
    <br>
    <input type="submit" id="submit" value="Submit" name="farmersubmit">
</form>
</body>
</html>