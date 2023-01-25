<?php
function personal()
{
   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fathername = $_POST['faname'];
    $dateofbirth = $_POST['dob'];
    $age = $_POST['age'];

    $aathar = $_POST['aatharno'];
    $pan = $_POST['panno'];
    $familyid = $_POST['famid'];
    $accountno = $_POST['accno'];
    $branch = $_POST['branchname'];
    $ifsc = $_POST['ifcode'];
    $mobile1 = $_POST['m1'];
    $mobile2 = $_POST['m2'];
    $mail = $_POST['mailid'];

    $door = $_POST['dno'];
    $street = $_POST['stname'];
    $village = $_POST['village'];
    $taluk = $_POST['sdt'];
    $district = $_POST['dis'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pcode = $_POST['pincode'];

    $door1 = $_POST['dno1'];
    $street1 = $_POST['stn1'];
    $village1 = $_POST['post'];
    $taluk1 = $_POST['taluk'];
    $district1 = $_POST['dit1'];
    $state1 = $_POST['stat1'];
    $country1 = $_POST['country11'];
    $pcode1 = $_POST['pincode111'];


    if ($fname == "" || $lname == "" || $fathername == "" || $dateofbirth == "" || $age == "" || $aathar == "" || $pan == "" || $familyid == "" || $accountno == "" || $branch == "" || $ifsc == "" || $mobile1 == "" || $mobile2 == "" || $mail == "" || $door == "" || $street == "" || $village == "" || $taluk == "" || $district == "" || $state == "" || $country == "" || $pcode == "" || $door1 == "" || $street1 == "" || $village1 == "" || $taluk1 == "" || $district1 == "" || $state1 == "" || $country1 == "" || $pcode1 == "") {
        echo ("<script> alert('Application Not Submitted Please Resubmit it.');</script>");
        echo ("<script>window.history.back();</script>");
        return false;
    } else
    {
        $connection = mysqli_connect("localhost", "root", "", "SM_Finance");
        if (!$connection) {
            echo ("<script>alert('Database Not Connected');</script>");
            die();
        }
        else {
            $insert = "INSERT INTO personal_loan_customers VALUES('{}','{$fname}','{$lname}','{$fathername}','{$dateofbirth}','{$age}','{$aathar}','{$pan}','{$familyid}','{$accountno}','{$branch}','{$ifsc}','{$mobile1}','{$mobile2}','{$mail}','{$door}','{$street}','{$village}','{$taluk}','{$district}','{$state}','{$country}','{$pcode}','{$door1}','{$street1}','{$village1}','{$taluk1}','{$district1}','{$state1}','{$country1}','{$pcode1}')";
            $result = mysqli_query($connection, $insert);
            if ($result==TRUE) {
            echo ("<script>alert('Welcome.$fname.your application has been sent Successfully.Our team will call you shortly.');</script>");
            echo ("<script>window.open('Home.php','_self');</script>");
            }
        }
    }
}


function buisness()
{ 
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fathername = $_POST['faname'];
    $dateofbirth = $_POST['dob'];
    $age = $_POST['age'];

    $aathar = $_POST['aatharno'];
    $pan = $_POST['panno'];
    $familyid = $_POST['famid'];
    $accountno = $_POST['accno'];
    $branch = $_POST['branchname'];
    $ifsc = $_POST['ifcode'];
    $mobile1 = $_POST['m1'];
    $mobile2 = $_POST['m2'];
    $mail = $_POST['mailid'];

    $door = $_POST['dno'];
    $street = $_POST['stname'];
    $village = $_POST['village'];
    $taluk = $_POST['sdt'];
    $district = $_POST['dis'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pcode = $_POST['pincode'];

    $door1 = $_POST['dno1'];
    $street1 = $_POST['stn1'];
    $village1 = $_POST['post'];
    $taluk1 = $_POST['taluk'];
    $district1 = $_POST['dit1'];
    $state1 = $_POST['stat1'];
    $country1 = $_POST['country11'];
    $pcode1 = $_POST['pincode111'];

    $bname=$_POST['buisname'];
    $bmode=$_POST['buismode'];
    $firstowner=$_POST['fo'];
    $secondowner=$_POST['so'];
    $estannual=$_POST['eat'];
    $buiscity=$_POST['buiscity'];
    $buisdist=$_POST['buisdist'];
    $buisstate=$_POST['buisstate'];
    $buiscountry=$_POST['buiscountry'];
    $buispcode=$_POST['buispincode'];


    if ($fname == "" || $lname == "" || $fathername == "" || $dateofbirth == "" || $age == "" || $aathar == "" || $pan == "" || $familyid == "" || $accountno == "" || $branch == "" || $ifsc == "" || $mobile1 == "" || $mobile2 == "" || $mail == "" || $door == "" || $street == "" || $village == "" || $taluk == "" || $district == "" || $state == "" || $country == "" || $pcode == "" || $door1 == "" || $street1 == "" || $village1 == "" || $taluk1 == "" || $district1 == "" || $state1 == "" || $country1 == "" || $pcode1 == "" || $bname=="" || $bmode=="" || $firstowner=="" || $secondowner=="" || $estannual=="" || $buiscity=="" || $buisdist==""  || $buisstate=="" || $buiscountry=="" || $buispcode=="") {
        echo("<script> alert('Application Not Submitted Please Resubmit it.');</script>");
        echo ("<script>window.history.back();</script>");
        return false;
    } else
    {
        $connection = mysqli_connect("localhost", "root", "", "SM_Finance");
        if (!$connection) {
            echo ("<script>alert('Database Not Connected');</script>");
            die();
        }
       else {
            $insert = "INSERT INTO buisness_loan_customers VALUES('{}','{$fname}','{$lname}','{$fathername}','{$dateofbirth}','{$age}','{$aathar}','{$pan}','{$familyid}','{$accountno}','{$branch}','{$ifsc}','{$mobile1}','{$mobile2}','{$mail}','{$door}','{$street}','{$village}','{$taluk}','{$district}','{$state}','{$country}','{$pcode}','{$door1}','{$street1}','{$village1}','{$taluk1}','{$district1}','{$state1}','{$country1}','{$pcode1}','{$bname}','{$bmode}','{$firstowner}','{$secondowner}','{$estannual}','{$buiscity}','{$buisdist}','{$buisstate}','{$buiscountry}','{$buispcode}')";
            $result = mysqli_query($connection, $insert);
            if($result==TRUE){
                echo ("<script>alert('Welcome.$fname.your application has been sent Successfully.Our team will call you shortly.');</script>");
                echo ("<script>window.open('Home.php','_self');</script>");
            }
       }
    }
    
    
}


function bike()
{
   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fathername = $_POST['faname'];
    $dateofbirth = $_POST['dob'];
    $age = $_POST['age'];

    $aathar = $_POST['aatharno'];
    $pan = $_POST['panno'];
    $familyid = $_POST['famid'];
    $accountno = $_POST['accno'];
    $branch = $_POST['branchname'];
    $ifsc = $_POST['ifcode'];
    $mobile1 = $_POST['m1'];
    $mobile2 = $_POST['m2'];
    $mail = $_POST['mailid'];

    $door = $_POST['dno'];
    $street = $_POST['stname'];
    $village = $_POST['village'];
    $taluk = $_POST['sdt'];
    $district = $_POST['dis'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pcode = $_POST['pincode'];

    $door1 = $_POST['dno1'];
    $street1 = $_POST['stn1'];
    $village1 = $_POST['post'];
    $taluk1 = $_POST['taluk'];
    $district1 = $_POST['dit1'];
    $state1 = $_POST['stat1'];
    $country1 = $_POST['country11'];
    $pcode1 = $_POST['pincode111'];


    $bikename = $_POST['bikename'];
    $bikemodel=$_POST['bikemodel'];
    $agency = $_POST['agency'];
    $totalcostofbike=$_POST['tcb'];
    $loanrequired = $_POST['lar'];

    
    

    if ($fname == "" || $lname == "" || $fathername == "" || $dateofbirth == "" || $age == "" || $aathar == "" || $pan == "" || $familyid == "" || $accountno == "" || $branch == "" || $ifsc == "" || $mobile1 == "" || $mobile2 == "" || $mail == "" || $door == "" || $street == "" || $village == "" || $taluk == "" || $district == "" || $state == "" || $country == "" || $pcode == "" || $door1 == "" || $street1 == "" || $village1 == "" || $taluk1 == "" || $district1 == "" || $state1 == "" || $country1 == "" || $pcode1 == "" || $bikename == "" || $bikemodel=="" || $agency=="" || $totalcostofbike=="" || $loanrequired=="") {
        echo ("<script> alert('Application Not Submitted..');</script>");
        echo ("<script>window.history.back();</script>");
        return false;
    } else 
    {
        $connection = mysqli_connect("localhost", "root", "", "SM_Finance");
        if (!$connection) {
            echo ("<script>alert('Not Connected with The Database.');</script>");
            die();
        } else {
            $insert = "INSERT INTO bike_loan_customers VALUES('{}','{$fname}','{$lname}','{$fathername}','{$dateofbirth}','{$age}','{$aathar}','{$pan}','{$familyid}','{$accountno}','{$branch}','{$ifsc}','{$mobile1}','{$mobile2}','{$mail}','{$door}','{$street}','{$village}','{$taluk}','{$district}','{$state}','{$country}','{$pcode}','{$door1}','{$street1}','{$village1}','{$taluk1}','{$district1}','{$state1}','{$country1}','{$pcode1}','{$bikename}','{$bikemodel}','{$agency}','{$totalcostofbike}','{$loanrequired}')";
            $result = mysqli_query($connection, $insert);
            if ($result == TRUE) {
                echo ("<script>alert('Welcome.$fname.your application has been sent Successfully.Our team will call you shortly.');</script>");
                echo ("<script>window.open('Home.php','_self');</script>");
            }
        }
    }

}


function employee()
{
   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fathername = $_POST['faname'];
    $dateofbirth = $_POST['dob'];
    $age = $_POST['age'];

    $aathar = $_POST['aatharno'];
    $pan = $_POST['panno'];
    $familyid = $_POST['famid'];
    $accountno = $_POST['accno'];
    $branch = $_POST['branchname'];
    $ifsc = $_POST['ifcode'];
    $mobile1 = $_POST['m1'];
    $mobile2 = $_POST['m2'];
    $mail = $_POST['mailid'];

    $door = $_POST['dno'];
    $street = $_POST['stname'];
    $village = $_POST['village'];
    $taluk = $_POST['sdt'];
    $district = $_POST['dis'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pcode = $_POST['pincode'];

    $door1 = $_POST['dno1'];
    $street1 = $_POST['stn1'];
    $village1 = $_POST['post'];
    $taluk1 = $_POST['taluk'];
    $district1 = $_POST['dit1'];
    $state1 = $_POST['stat1'];
    $country1 = $_POST['country11'];
    $pcode1 = $_POST['pincode111'];

    $employeeid=$_POST['empid'];
    $empname=$_POST['empnmae'];
    $companyname=$_POST['companyname'];
    $companycity=$_POST['companycity'];
    $exp=$_POST['exp'];
    $ctc=$_POST['ctc'];
    $loanamount=$_POST['loanmt'];


    if ($fname == "" || $lname == "" || $fathername == "" || $dateofbirth == "" || $age == "" || $aathar == "" || $pan == "" || $familyid == "" || $accountno == "" || $branch == "" || $ifsc == "" || $mobile1 == "" || $mobile2 == "" || $mail == "" || $door == "" || $street == "" || $village == "" || $taluk == "" || $district == "" || $state == "" || $country == "" || $pcode == "" || $door1 == "" || $street1 == "" || $village1 == "" || $taluk1 == "" || $district1 == "" || $state1 == "" || $country1 == "" || $pcode1 == "" || $employeeid=="" || $empname=="" || $companyname=="" || $companycity=="" || $exp=="" || $ctc=="" || $loanamount=="") {
        echo ("<script> alert('Application Not Submitted Please Resubmit it.');</script>");
        echo ("<script>window.history.back();</script>");
        return false;
    } else
    {
        $connection = mysqli_connect("localhost", "root", "", "SM_Finance");
        if (!$connection) {
            echo ("<script>alert('Database Not Connected');</script>");
            die();
        }
        else {
            $insert = "INSERT INTO employee_loan_customers VALUES('{}','{$fname}','{$lname}','{$fathername}','{$dateofbirth}','{$age}','{$aathar}','{$pan}','{$familyid}','{$accountno}','{$branch}','{$ifsc}','{$mobile1}','{$mobile2}','{$mail}','{$door}','{$street}','{$village}','{$taluk}','{$district}','{$state}','{$country}','{$pcode}','{$door1}','{$street1}','{$village1}','{$taluk1}','{$district1}','{$state1}','{$country1}','{$pcode1}','{$employeeid}','{$empname}','{$companyname}','{$companycity}','{$exp}','{$ctc}','{$loanamount}')";
            $result = mysqli_query($connection, $insert);
            if ($result==TRUE) {
            echo ("<script>alert('Welcome.$fname.your application has been sent Successfully.Our team will call you shortly.');</script>");
            echo ("<script>window.open('Home.php','_self');</script>");
            }
        }
    }
}



function commercial()
{
   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fathername = $_POST['faname'];
    $dateofbirth = $_POST['dob'];
    $age = $_POST['age'];

    $aathar = $_POST['aatharno'];
    $pan = $_POST['panno'];
    $familyid = $_POST['famid'];
    $accountno = $_POST['accno'];
    $branch = $_POST['branchname'];
    $ifsc = $_POST['ifcode'];
    $mobile1 = $_POST['m1'];
    $mobile2 = $_POST['m2'];
    $mail = $_POST['mailid'];

    $door = $_POST['dno'];
    $street = $_POST['stname'];
    $village = $_POST['village'];
    $taluk = $_POST['sdt'];
    $district = $_POST['dis'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pcode = $_POST['pcode'];

    $vehiclename=$_POST['vname'];
    $vehicletype=$_POST['vtype'];
    $vehiclemodel=$_POST['vmodel'];
    $manufactureyear=$_POST['vmyear'];
    $cost=$_POST['vcost'];
    $loanrequired=$_POST['lreq'];


    if ($fname == "" || $lname == "" || $fathername == "" || $dateofbirth == "" || $age == "" || $aathar == "" || $pan == "" || $familyid == "" || $accountno == "" || $branch == "" || $ifsc == "" || $mobile1 == "" || $mobile2 == "" || $mail == "" || $door == "" || $street == "" || $village == "" || $taluk == "" || $district == "" || $state == "" || $country == "" || $pcode == "" || $vehiclename=="" || $vehicletype=="" || $vehiclemodel =="" || $manufactureyear=="" || $cost=="" || $loanrequired=="") {
        echo ("<script> alert('Application Not Submitted Please Resubmit it.');</script>");
        echo ("<script>window.history.back();</script>");
        return false;
    } else
    {
        $connection = mysqli_connect("localhost", "root", "", "SM_Finance");
        if (!$connection) {
            echo ("<script>alert('Database Not Connected');</script>");
            die();
        }
        else {
            $insert = "INSERT INTO commercial_loan_customers VALUES('{}','{$fname}','{$lname}','{$fathername}','{$dateofbirth}','{$age}','{$aathar}','{$pan}','{$familyid}','{$accountno}','{$branch}','{$ifsc}','{$mobile1}','{$mobile2}','{$mail}','{$door}','{$street}','{$village}','{$taluk}','{$district}','{$state}','{$country}','{$pcode}','{$vehiclename}','{$vehicletype}','{$vehiclemodel}','{$manufactureyear}','{$cost}','{$loanrequired}')";
            $result = mysqli_query($connection, $insert);
            if ($result==TRUE) {
            echo ("<script>alert('Welcome.$fname.your application has been sent Successfully.Our team will call you shortly.');</script>");
            echo ("<script>window.open('Home.php','_self');</script>");
            }
        }
    }
}


function education()
{
   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fathername = $_POST['faname'];
    $dateofbirth = $_POST['dob'];
    $age = $_POST['age'];

    $aathar = $_POST['aatharno'];
    $pan = $_POST['panno'];
    $familyid = $_POST['famid'];
    $accountno = $_POST['accno'];
    $branch = $_POST['branchname'];
    $ifsc = $_POST['ifcode'];
    $mobile1 = $_POST['m1'];
    $mobile2 = $_POST['m2'];
    $mail = $_POST['mailid'];

    $door = $_POST['dno'];
    $street = $_POST['stname'];
    $village = $_POST['village'];
    $taluk = $_POST['sdt'];
    $district = $_POST['dis'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pcode = $_POST['pcode'];

    $door1 = $_POST['dno1'];
    $street1 = $_POST['stn1'];
    $village1 = $_POST['post'];
    $taluk1 = $_POST['taluk'];
    $district1 = $_POST['dit1'];
    $state1 = $_POST['stat1'];
    $country1 = $_POST['country11'];
    $pcode1 = $_POST['pincode111'];

    $collegename=$_POST['cname'];
    $collegeid=$_POST['cid'];
    $collegecity=$_POST['ccity'];
    $collegenumber=$_POST['cnumber'];
    $collegedistrict=$_POST['cdistrict'];
    $collegestate=$_POST['cstate'];
    $collegecountry=$_POST['ccountry'];
    $collegepincode = $_POST['cpincode'];

    

    if ($fname == "" || $lname == "" || $fathername == "" || $dateofbirth == "" || $age == "" || $aathar == "" || $pan == "" || $familyid == "" || $accountno == "" || $branch == "" || $ifsc == "" || $mobile1 == "" || $mobile2 == "" || $mail == "" || $door == "" || $street == "" || $village == "" || $taluk == "" || $district == "" || $state == "" || $country == "" || $pcode == "" || $door1 == "" || $street1 == "" || $village1 == "" || $taluk1 == "" || $district1 == "" || $state1 == "" || $country1 == "" || $pcode1 == "" || $collegename=="" || $collegeid=="" || $collegecity=="" || $collegenumber=="" || $collegedistrict=="" || $collegestate=="" || $collegecountry=="" || $collegepincode=="") {
        echo ("<script> alert('Application Not Submitted Please Resubmit it.');</script>");
        echo ("<script>window.history.back();</script>");
        return false;
    } else
    {
        $connection = mysqli_connect("localhost", "root", "", "SM_Finance");
        if (!$connection) {
            echo ("<script>alert('Database Not Connected');</script>");
            die();
        }
        else {
            $insert = "INSERT INTO education_loan_customers VALUES('{}','{$fname}','{$lname}','{$fathername}','{$dateofbirth}','{$age}','{$aathar}','{$pan}','{$familyid}','{$accountno}','{$branch}','{$ifsc}','{$mobile1}','{$mobile2}','{$mail}','{$door}','{$street}','{$village}','{$taluk}','{$district}','{$state}','{$country}','{$pcode}','{$door1}','{$street1}','{$village1}','{$taluk1}','{$district1}','{$state1}','{$country1}','{$pcode1}','{$collegename}','{$collegeid}','{$collegecity}','{$collegenumber}','{$collegedistrict}','{$collegestate}','{$collegecountry}','{$collegepincode}')";
            $result = mysqli_query($connection, $insert);
            if ($result==TRUE) {
            echo ("<script>alert('Welcome.$fname.your application has been sent Successfully.Our team will call you shortly.');</script>");
            echo ("<script>window.open('Home.php','_self');</script>");
            }
        }
    }
}



function farmer()
{
   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fathername = $_POST['faname'];
    $dateofbirth = $_POST['dob'];
    $age = $_POST['age'];

    $aathar = $_POST['aatharno'];
    $pan = $_POST['panno'];
    $familyid = $_POST['famid'];
    $accountno = $_POST['accno'];
    $branch = $_POST['branchname'];
    $ifsc = $_POST['ifcode'];
    $mobile1 = $_POST['m1'];
    $mobile2 = $_POST['m2'];
    $mail = $_POST['mailid'];

    $door = $_POST['dno'];
    $street = $_POST['stname'];
    $village = $_POST['village'];
    $taluk = $_POST['sdt'];
    $district = $_POST['dis'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pcode = $_POST['pcode'];

    $door1 = $_POST['dno1'];
    $street1 = $_POST['stn1'];
    $village1 = $_POST['post'];
    $taluk1 = $_POST['taluk'];
    $district1 = $_POST['dit1'];
    $state1 = $_POST['stat1'];
    $country1 = $_POST['country11'];
    $pcode1 = $_POST['pincode111'];

    $farmername=$_POST['farmername'];
    $pmkissan=$_POST['kissanno'];
    $farmervillage=$_POST['farmervill'];
    $farmertaluk=$_POST['farmertaluk'];
    $farmerdis=$_POST['farmerdis'];
    $farmerstate=$_POST['farstate'];
    $farmercountry=$_POST['farcountry'];
    $farmerpincode = $_POST['farpincode'];

    

    if ($fname == "" || $lname == "" || $fathername == "" || $dateofbirth == "" || $age == "" || $aathar == "" || $pan == "" || $familyid == "" || $accountno == "" || $branch == "" || $ifsc == "" || $mobile1 == "" || $mobile2 == "" || $mail == "" || $door == "" || $street == "" || $village == "" || $taluk == "" || $district == "" || $state == "" || $country == "" || $pcode == "" || $door1 == "" || $street1 == "" || $village1 == "" || $taluk1 == "" || $district1 == "" || $state1 == "" || $country1 == "" || $pcode1 == "" || $farmername=="" || $pmkissan=="" || $farmervillage=="" || $farmertaluk=="" || $farmerdis=="" || $farmerstate=="" || $farmercountry=="" || $farmerpincode=="") {
        echo ("<script> alert('Application Not Submitted Please Resubmit it.');</script>");
        echo ("<script>window.history.back();</script>");
        return false;
    } else
    {
        $connection = mysqli_connect("localhost", "root", "", "SM_Finance");
        if (!$connection) {
            echo ("<script>alert('Database Not Connected');</script>");
            die();
        }
        else {
            $insert = "INSERT INTO farmer_loan_customers VALUES('{}','{$fname}','{$lname}','{$fathername}','{$dateofbirth}','{$age}','{$aathar}','{$pan}','{$familyid}','{$accountno}','{$branch}','{$ifsc}','{$mobile1}','{$mobile2}','{$mail}','{$door}','{$street}','{$village}','{$taluk}','{$district}','{$state}','{$country}','{$pcode}','{$door1}','{$street1}','{$village1}','{$taluk1}','{$district1}','{$state1}','{$country1}','{$pcode1}','{$farmername}','{$pmkissan}','{$farmervillage}','{$farmertaluk}','{$farmerdis}','{$farmerstate}','{$farmercountry}','{$farmerpincode}')";
            $result = mysqli_query($connection, $insert);
            if ($result==TRUE) {
            echo ("<script>alert('Welcome.$fname.your application has been sent Successfully.Our team will call you shortly.');</script>");
            echo ("<script>window.open('Home.php','_self');</script>");
            }
        }
    }
}




function homeloan()
{
   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fathername = $_POST['faname'];
    $dateofbirth = $_POST['dob'];
    $age = $_POST['age'];

    $aathar = $_POST['aatharno'];
    $pan = $_POST['panno'];
    $familyid = $_POST['famid'];
    $accountno = $_POST['accno'];
    $branch = $_POST['branchname'];
    $ifsc = $_POST['ifcode'];
    $mobile1 = $_POST['m1'];
    $mobile2 = $_POST['m2'];
    $mail = $_POST['mailid'];

    $door = $_POST['dno'];
    $street = $_POST['stname'];
    $village = $_POST['village'];
    $taluk = $_POST['sdt'];
    $district = $_POST['dis'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pcode = $_POST['pincode'];

    $door1 = $_POST['dno1'];
    $street1 = $_POST['stn1'];
    $village1 = $_POST['post'];
    $taluk1 = $_POST['taluk'];
    $district1 = $_POST['dit1'];
    $state1 = $_POST['stat1'];
    $country1 = $_POST['country11'];
    $pcode1 = $_POST['pincode111'];


    if ($fname == "" || $lname == "" || $fathername == "" || $dateofbirth == "" || $age == "" || $aathar == "" || $pan == "" || $familyid == "" || $accountno == "" || $branch == "" || $ifsc == "" || $mobile1 == "" || $mobile2 == "" || $mail == "" || $door == "" || $street == "" || $village == "" || $taluk == "" || $district == "" || $state == "" || $country == "" || $pcode == "" || $door1 == "" || $street1 == "" || $village1 == "" || $taluk1 == "" || $district1 == "" || $state1 == "" || $country1 == "" || $pcode1 == "") {
        echo ("<script> alert('Application Not Submitted Please Resubmit it.');</script>");
        echo ("<script>window.history.back();</script>");
        return false;
    } else
    {
        $connection = mysqli_connect("localhost", "root", "", "SM_Finance");
        if (!$connection) {
            echo ("<script>alert('Database Not Connected');</script>");
            die();
        }
        else {
            $insert = "INSERT INTO homeloan_loan_customers VALUES('{}','{$fname}','{$lname}','{$fathername}','{$dateofbirth}','{$age}','{$aathar}','{$pan}','{$familyid}','{$accountno}','{$branch}','{$ifsc}','{$mobile1}','{$mobile2}','{$mail}','{$door}','{$street}','{$village}','{$taluk}','{$district}','{$state}','{$country}','{$pcode}','{$door1}','{$street1}','{$village1}','{$taluk1}','{$district1}','{$state1}','{$country1}','{$pcode1}')";
            $result = mysqli_query($connection, $insert);
            if ($result==TRUE) {
            echo ("<script>alert('Welcome.$fname.your application has been sent Successfully.Our team will call you shortly.');</script>");
            echo ("<script>window.open('Home.php','_self');</script>");
            }
        }
    }
}




if (isset($_POST["personalsubmit"])) {
    personal();
}
if(isset($_POST["buisnesssubmit"]))  {
    buisness();
}
if (isset($_POST['bikesubmit'])) {
    bike();
}
if (isset($_POST["employeesubmit"])){
    employee();
}
if (isset($_POST["commercialsubmit"])){
    commercial();
}
if (isset($_POST["educationsubmit"])){
    education();
}
if (isset($_POST["farmersubmit"])){
    farmer();
}
if (isset($_POST["homeloansubmit"])){
    homeloan();
}
?>