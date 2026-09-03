<?php

function Date_validate($input_date, $format = 'd/m/Y')
{
    $date_obj = DateTime::createFromFormat($format, $input_date);
    return $date_obj && $date_obj->format($format) == $input_date;
}



function exclude_default_all_post(){
$pattern = '/[\'\/~`\!@#\$%\^&\*\(\)\\+=\{\}\[\]\|;:"\<\>\\?\\\]/';
$lable = array('applicant_name' => 'APPLICANT NAME' ,'mobile_number' => 'MOBILE NUMBER','email_id' => 'EMAIL ID','office_pincode' => 'PINCODE','annual_turnover' => 'ANNUAL TURNOVER','social_category' => 'SOCIAL CATEGORY','aadhaar_number' => 'AADHAAR NUMBER','uam_number' => 'PREVIOUS UAM NUMBER','pan_card_number' => 'PAN CARD NUMBER','bank_account_number' => 'BANK ACCOUNT NUMBER','ifsc_code' => 'IFSC CODE','business_name' => 'BUSINESS NAME','type_of_organisation' => 'TYPE OF ORGANISATION','main_business_activity_of_enterprise' => 'MAIN BUSINESS ACTIVITY OF ENTERPRISE','additional_details_about_business' => 'ADDITIONAL DETAILS ABOUT BUSINESS','investment_in_plant_and_machinery' => 'INVESTMENT IN PLANT AND MACHINERY','date_of_commencement_of_business' => 'DATE OF COMMENCEMENT OF BUSINESS','office_address' => 'OFFICE ADDRESS');
foreach ($_POST as $id=>$value){
  // only if catcpa
   if($id == "vercode"){continue;}
  // if($id == "plant_state"){continue;}
   if($id == "type_of_organisation"){continue;}
  // if($id == "activity of enterprise"){continue;}
  // if($id == "form_name"){continue;}
  // if($id == "form_id"){continue;}
   if($id == "date_of_commencement_of_business"){continue;}
  if($id == "office_state"){continue;}
  if($id == "office_district"){continue;}
  // if($id == "main_business_activity_of_enterprise"){continue;}


  if(filter_var($value, FILTER_VALIDATE_EMAIL)){

  }elseif(Date_validate($value,'d/m/Y')){

  }
  elseif(preg_match($pattern, $value)){
    if((isset($lable[$id]))&&($lable[$id] == "OFFICE ADDRESS")){ return "Please Don\'t use special characters in ". strtolower($lable[$id]); break;}
    if(isset($lable[$id])){ return "Please enter valid ". strtolower($lable[$id]); break;}
    return "Please Don\'t use special characters";
    break;
  }

}
}
$result_special = exclude_default_all_post();
 if((isset($result_special)) && ($result_special !== false) && ($result_special != "")){
   die("
   <script>window.alert('".$result_special."'); window.history.back();</script>
   ");
 }
if($_POST['form_id'] != 'udyam_online'){
  
}
 if($_POST['vercode'] != $_SESSION['vercode']){
    die('
        <script>
            alert("CAPTCHA IS INCORRECT");
            history.back();
        </script>
    ');
  }
 
 ?>
