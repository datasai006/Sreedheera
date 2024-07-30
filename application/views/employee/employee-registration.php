<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    </head>
<body>
<style>
    th{text-align: center;}
    table ,th ,td{border:1px solid black}
    .fillwidth {
    min-width: 100%;
    height: auto;
}
</style>


<table  style="width: 100%;">
       
            <th colspan="3" style="text-align: center;"><b>Registration Form(JSW Steel)</b></th>
       
      <tr>
     <td colspan="3" style="background-color: gray; color:white">Temporary OnBoarding</td>
      </tr>
      <tr>

          <td><b>Type</b></th>
          <td ><?=$employee_type?></td>
          <td rowspan="5"><img class="fillwidth" src="<?=admin_url?>/uploads/employee/<?=$employee_pic?>" width="120"></td> 
           
      
        </tr>
      <tr>
          <td><b>Employee Name</b><br><p><sub>(As Per Aadhar)</sub></p></td>
          <td><?=$employee_name?></td>
        
    </tr>
    <tr>
        <td><b>Aadhar Number</b><td>
        <?=$aadhar?>
            
    </tr>
    <tr>
        <td>Work Order No.</td>
        
    </tr>
    <tr>
        <td>Skill Type</td>
        <td width="60%"><?=$skill_type?></td>
    </tr>
   
</table>
<table style="width: 100%;">
    <tr>
        <td width="12%">Category</td>
        <td width="84%"><?=$category?> </td>
       
    </tr>
</table>
<table style="width: 100%;">
    <tr>
        <td colspan="2">Vendor Code: <?=$vendor_code?></td>
        <td colspan="2"> Vendor Name: <?=$vendor_name?></td>
    </tr>
    <tr>
        <td colspan="2">Service Code:</td>
        <td colspan="2"> Designation: <?=$designation_name?></td>
    </tr>
    <tr>
        <td colspan="2">Department: <?=$department_name?></td>
    <td colspan="2"> Date of Birth : <span style="color:gray"> <?=$dob?></span></td>
 </tr>
 <tr>
    <td colspan="2">Nationality : <?=$nationality?></td>
<td colspan="2"> Wages (Gross):Rs.</td>
</tr>
<tr>
    <td colspan="2">Father Name: <?=$father_name?></td>
<td colspan="2"> Mother Name: <?=$mother_name?></td>
</tr>
<tr>
    <td width="10%">Medical Check-up for</td>
    <td width="40%"> Normal Work / Work at Height & Confine Area / Work at Confine Area / Work at Height</td>
     <td width="40%">     
             <b>Recommended By:</b><br>Emp.Code: <?=$employee_code?><br>Name: <?=$employee_name?></td> 
                <td width="10%"> Signature</td>

</tr>
</table>
<table style="width: 100%">
    <tr> 
        <td width="20%">Temp on-boarding done by</td>
        <td width="80%"><span class="pr-5">Signature:</span><span class="px-5">Date:</span><span class="px-5"> Temp ID:</span></td>
        </tr>
   
</table>
<table style="width: 100%;">
    <tr>
       <td colspan="2" style="background-color: gray; color:white ;"><b>Permanent OnBoarding</b></td>
   </tr>  
    <tr>
         <td width="50%"> Date of Joining:  <span style="color: gray;">  <?=$doj?></span></td>
         <td width="50%"> Religion: <?=$religion?></td>
        </tr>
        <tr>
            <td width="50%"> Resident Status: <?=$resident_status?> </td>
            <td width="50%"> Martial Status : <?=$martial_status?></td> 
        </tr>
        <tr>
            <td width="50%">  WC Policy No: <?=$insurance?></td>
         <td width="50%"> Caste: <?=$caste?></td>
        </tr>
</table>
            <table style="width: 100%;">
                <tr>
                    <td width="75%">  Blood Group : <?=$blood_group?> </td>
                    <td width="25%"> Gender : <?=$gender?></td>
                </tr>
            </table>
         
       <table style="width: 100%;">
        <tr>
            <td width="50%">  UAN No. </td>
         <td width="50%"> ESI No. <?=$esi?></td>
        </tr>
        <tr>
            <td width="50%">  Physically Handicaped / Ex-servicemen : <?=$physically_handicaped?></td>
         <td width="50%"> Passport No.</td>
        </tr>
    </table>
    <table style="width: 100%;">
    
          <tr>
              <td colspan="8"><b>Qualification Details & Specialization</b>(Start from higher education):</td>
          </tr>
         
          <tr>
              <th>#</th>
              <th>Qualification</th>   
              <th>Trade / Branch</th>  
              <th>Name of the School /Institute / University</th>       
              <th>Marks obtained</th>
              <th>%</th>
              <th>Grade / Class</th>
              <th>Year of passing</th>
            </tr>
            <?php $i=1;$data['EducationalDetails']=$this->CommonModel->getData('txn_employee_education','employee_details',$sk_employee_id);
			foreach($data['EducationalDetails'] as $inf3)
			{ ?>
            <tr>
                <td><?=$i++;?></td>
                <td><?=$inf3->qualification?></td>
                <td><?=$inf3->branch?></td>
                <td><?=$inf3->institute_name?></td>
                <td><?=$inf3->marks_obtained?></td>
                <td><?=$inf3->percentage?></td>
                <td><?=$inf3->grade?></td>
                <td><?=$inf3->year_pass?></td>
            </tr>
            </tr>
        <?php } ?>
            <tr>
                <td colspan="2"> Work Experience</td>
                <td colspan="6">Fresher / Experienced (If Experienced ,mention the number of years)</td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
                <td colspan="8"><b>Work Experience Details,If any</b>(Start from Present):</td>

            </tr>
            <tr>
                <th rowspan="2">#</th>
                <th rowspan="2">Name of the Organization</th>
                <th colspan="2">Designation</th>
                <th rowspan="2"> From <br>(DOJ)</th>
                <th rowspan="2"> To<br>(DOL)</th>
                <th colspan="2">Salary</th>
                
            </tr>
            <tr>
                <th> Starting</th>
                <th> Leaving</th>
                
                <th>Starting</th>
                <th> Leaving</th>
            </tr>
            <?php $j=1;$data['WorkDetails']=$this->CommonModel->getData('txn_employee_experience','employee_details',$sk_employee_id);
			foreach($data['WorkDetails'] as $inf4)
			{ ?>
            <tr>
            <tr>
                <td><?=$j++;?></td>
                <td><?=$inf4->organization_name?></td>
                <td><?=$inf4->designation_starting?></td>
                <td><?=$inf4->designation_leaving?></td>
                <td><?=$inf4->doj?></td>
                <td><?=$inf4->dol?></td>
                <td><?=$inf4->salary_starting?></td>
                <td><?=$inf4->salary_leaving?></td>
            </tr>
            <?php } ?>
        </table>
      
<table style="width: 100%;">
    <tr>
        <td colspan="7"><b>Family Deatils</b>(Details of Parents ,Spouse and Children,Specify the children education):</td>
    </tr>
    <tr>
        <th>#</th>
        <th>Name</th>
         <th>Relationship</th>
         <th>Date of Birth / Age</th>
         <th>Qualification</th>
         <th>Occupation</th>
         <th>ANnual Income</th>
    </tr>
    <tr>
    <?php $k=1;$data['FamilyDetails']=$this->CommonModel->getData('txn_employee_family','employee_details',$sk_employee_id);
    foreach($data['FamilyDetails'] as $inf5)
    { ?>
        <td><?=$k++;?></td>
        <td><?=$inf5->name?></td>
        <td><?=$inf5->relationship?></td>
        <td><?=$inf5->dob?></td>
        <td><?=$inf5->qualification?></td>
        <td><?=$inf5->occupation?></td>
        <td><?=$inf5->annual_income?></td>
    </tr>
    <?php } ?>

</table>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    </head>
<body>
<style>
    th{text-align: center;}
    table ,th ,td{border:1px solid black}
</style>

  <table  style ="width: 100%;">
    <tr>
        <td colspan="5"><b>Languages Known & Proficiency</b></td>
    </tr>
    <tr>
        <th>#</th>
        <th>Language</th>
        <th>Read</th>
        <th>Write</th>
        <th>Speak</th>
    </tr>
    <?php $i=1;$data['LanguageDetails']=$this->CommonModel->getData('txn_employee_other','employee_details',$sk_employee_id);
    foreach($data['LanguageDetails'] as $inf5)
    { ?>
    <tr>
        <th><?=$i++;?></th>
        <td><?=$inf5->language_name?></td>
        <td><?=$inf5->read_lan?></td>
        <td><?=$inf5->write_lan?></td>
        <td><?=$inf5->speak_lan?></td>
    </tr>
    <?php } ?>
  </table>
  <table style="width: 100%;">
    <tr>
        <td width="10%"><b>Adress</b></td>
        <td width="45%"><b>Permananet Address</b></td>
        <td width="45%"><b>Present Address</b></td>
    </tr>
    <tr>
        <td>Country</td>
        <td><?=$country_name?></td>
        <td><?=$residencecountry_name?></td>
    </tr>
    <tr>
        <td>State</td>
        <td><?=$state_name?></td>
        <td><?=$residencestate_name?></td>
    </tr>
    <tr>
        <td>City</td>
        <td><?=$place?></td>
        <td><?=$residence_place?></td>
    </tr>
    <tr>
        <td>Town</td>
        <td><?=$place?></td>
        <td><?=$residence_place?></td>
    </tr>
    <tr>
        <td>H.No. /<br>Street</td>
        <td><?=$permanent_address?></td>
        <td><?=$residence_address?></td>
    </tr>
    <tr>
        <td>PIN Code</td>
        <td><?=$pincode?></td>
        <td><?=$residence_pincode?></td>
    </tr>
    <tr>
        <td>Mobile</td>
        <td><?=$mobile?></td>
        <td><?=$mobile?></td>
    </tr>
</table>
<table style="width:100%;">
    <tr>
        <td width="15%">Emergency Contact Name </td>

        <td width="35%"> <?=$emergency_name?></td>
        <td width="15%">Relationship of Emergency Contact</td>
        <td width="35%"> </td>
    </tr>
    <tr>
        <td width="15%">Emergency Contact Phone/Mobile -1 </td>

        <td width="35%"> <?=$emergency_no?></td>
        <td width="15%"> Emergency Contact Mobile-2</td>
        <td width="35%"></td>
    </tr>
    <tr>
        <td colspan="4">Bank Account Details:</td>
    </tr>
    <tr>
        <td colspan="2">Bank Name: <?=$bank_name?></td>
        <td colspan="2">IFSC Code: <?=$ifsc_code?></td>
    </tr>
    <tr>
        <td colspan="2">Branch Name: <?=$branch_name?></td>
        <td colspan="2">A/C No.: <?=$account_no?></td>
    </tr>
</table>
<table style="width: 100%;">
    <tr>
        <td width="25%" colspan="2"><b>Documents to be enclosed along with Biometric Registration Form:</b></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="35%">(a) Identify Proof and Address Proof : Aadhar</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td width="35%">(b) Pre-employment medical certificate</td>
        <td></td>
         <td colspan="4">(f) WC copy (if salary above >21K)</td>
         <td></td>
    </tr>
    <tr>
        <td width="35%">(c) Valid Service / Work Order copy</td>
        <td></td>
         <td colspan="4">(g) SB Acount pass book photo copy</td>
         <td></td>
    </tr>
    <tr>
        <td width="35%">(d) Individual PF UAN Number copy</td>
        <td></td>
         <td colspan="4">(h) Interview Assessment form (MBC)</td>
         <td></td>
    </tr>
    <tr>
        <td width="35%">(e) ESI e-pechan (if salary below <21K) </td>
        <td></td>
         <td colspan="4">(i) Salary Details FOrm (MBC)</td>
         <td></td>
    </tr>
    <tr>
        <td colspan="7"  >Identity Marks: 1. <br><span class="pl-5 ml-5">2.</span></td>
    </tr>
    <tr>
        <td colspan="7">Are you related to anyone wokring in JSW (Direct / Indirect) ? (State Name & Designation with Relationship)</td>
    </tr>
    <tr>
        <td colspan="7">Additional Information,if any:</td>
    </tr>
</table>
<table style="width: 100%;">
    <tr>
        <th colspan="3" >UNDERTAKING</th>
    </tr>
    <tr>
        <td colspan="3">
            I hereby confirm that the information / statements given by me in this application form are true.
        </td>
    </tr>
    <tr>
      <td width="10%">Date:</td>
      <td width="20%"></td>
      <td width="50%" rowspan="2"> <span class="mt-5 " style="display: flex;justify-content: end;float: right;">(Signature of the Candidate)</span></td>
    </tr>
    <tr>
        <td width="10%">Place:</td>
        <td width="40%"></td>
        
      </tr>
</table>
<table style="width: 100%;">
    <tr>
        <td width="20%">(Seal & Signature of the Vendor)</td>
        <td width="40%" colspan="2"></td>
    </tr>
    <tr>
        <td width="20%" >Verified By User Department</td>
        <td width="40%" colspan="2">Signature of Authorised <br>Person & Designation :</td>
    </tr>
    <tr>
      <td width="20%" >Verified By HR Department</td>
      <td width="40%" colspan="2"></td>
  </tr>
</table>
      <table style="width: 100%;">
       <tr>
           <th colspan="2"> For Registration Desk Use only</th>
       </tr>
       <tr>
           <td width="20%">ENrolment No. :</td>
           <td width="80%"></td>
       </tr>
       <tr>
           <td width="20%">Data Entered By </td>
           <td width="80%">Name:<span class="px-5 mx-5">Signature:</span><span class="px-5 mx-5">Date:</span></td>
           
       </tr>
       <tr>
        <td width="20%">Checked By </td>
        <td width="80%">Name:<span class="px-5 mx-5">Signature:</span><span class="px-5 mx-5">Date:</span></td>
        
    </tr>
 
    </table>
    <table>
        <tr><p><span style="text-decoration-line: underline; font-weight: bold;">Note:</span> Please update the information in case of any changes in martial status ,new births, deaths,change of address ,change of contact number ,up-gradation of qualification, Date of leaving ,Contract charge etc..</p></tr>
    </table>
    
    <script>
$(function(){
   setTimeout(function(){
     window.print();
     window.close();
   },1000);
});
    </script>
    </body>   
    </html>

