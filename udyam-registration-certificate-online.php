<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Udyam Registration Certificate | MSME / Udyog Aadhar Online</title>
      <meta name="description" content="Apply for your Udyam Registration Certificate online with ease. Get MSME recognition, access government benefits, and download your Udyog Aadhaar certificate quickly.">
      <meta name="keywords" content="Udyam Registration, Udyam Certificate Portal, Apply for Udyam Online, Udyam Registration Online, Udyam Certificate Application, MSME Udyam Registration, Online Udyam Certificate, Udyam Registration Process, Udyam Portal Services, Apply for Udyam Certificate">
      <link rel="canonical" href="<?php echo $baseUrl; ?>" />
      <link rel="icon" href="/assets/img/favicon-udyam-registration.png" type="image/gif" sizes="16x16">
      <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="/assets/css/main.css">
      <script src="/assets/js/jquery.min.js"></script>
      <script src="/assets/js/bootstrap.min.js"></script>
      <meta name="author" content="UdyamGov">
      <meta name="robots" content="index, follow">
      <meta name="theme-color" content="#385067">
      <meta property="og:title" content="Udyam Registration Certificate | MSME / Udyog Aadhar Online" />
      <meta property="og:description" content="Apply for your Udyam Registration Certificate online with ease. Get MSME recognition, access government benefits, and download your Udyog Aadhaar certificate quickly." />
      <meta property="og:url" content="<?php echo $baseUrl; ?>" />
      <meta property="og:type" content="website" />
      <meta property="og:image" content="<?php echo $baseUrl; ?>assets/img/favicon-udyam-registration.png" />
      <script type="application/ld+json">
         {
         "@context": "https://schema.org",
         "@type": "WebPage",
         "name": "Udyam Registration Certificate | MSME / Udyog Aadhar Online",
         "description": "Apply for your Udyam Registration Certificate online with ease. Get MSME recognition, access government benefits, and download your Udyog Aadhaar certificate quickly.",
         "url": "<?php echo $baseUrl; ?>", 
         "potentialAction": {
            "@type": "Action",
            "name": "Register Udyam",
            "target": {
               "@type": "EntryPoint",
               "urlTemplate": "<?php echo $baseUrl; ?>"
            }
         },
         
            "sameAs": [
               "https://www.facebook.com/profile.php?id=61571904965348",
               "https://x.com/UdyamGov",
               "https://www.instagram.com/udyamgov.offical/",
               "https://www.youtube.com/@UdyamGov"
            ],
            "mainEntity": {
            "@type": "Service",
            "name": "Udyam Registration Service",
            "serviceType": "Business Registration",
            "provider": {
               "@type": "Organization",
               "name": "UdyamGov",
               "url": "<?php echo $baseUrl; ?>"
            },
            "areaServed": {
               "@type": "Country",
               "name": "India"
            },
            "audience": {
               "@type": "Audience",
               "audienceType": "Small Business Owners",
               "geographicArea": {
               "@type": "AdministrativeArea",
               "name": "India"
               }
            },
            "additionalType": "<?php echo $baseUrl; ?>"
         }
         }
      </script>
       <script type="application/ld+json">
      {
         "@context": "https://schema.org",
         "@type": "BreadcrumbList",
         "itemListElement": [{
         "@type": "ListItem",
         "position": 1,
         "name": "Udyam Registration Portal",
         "item": "<?php echo $baseUrl; ?>"
         }
         ]
      }
      </script>
      <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "Udyam Registration Certificate | MSME / Udyog Aadhar Online",
      "description": "Apply for your Udyam Registration Certificate online with ease. Get MSME recognition, access government benefits, and download your Udyog Aadhaar certificate quickly.",
      "review": {
        "@type": "Review",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": 4,
          "bestRating": 5
        },
          "author": {
            "@type": "Organization",
            "name": "UdyamGov"
          }
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": 4.4,
        "reviewCount": 98
      }
    }
    </script>
   </head>
   <body>
      <?php include_once('components/header.php') ?>

      <img src="/assets/image/udyam-registration.webp" alt="register your business under new udyam registration online" class="img w-100" />
 
      <!-- form -->

      <section id="-registration">
         <div class="container custom-form-container pt-4">
            <h1 class="text-center">Apply Udyam Registration Portal</h1>
            <p class="text-center font-weight-bold" >Apply for Udyam Registration online quickly and securely. Get your MSME/Udyog Aadhaar certificate with an easy digital process and government-approved benefits.</p>
                        <div class="row mb-5">
               <div class="col-lg-7 col-md-12">
                  <div class="card rounded-0" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border: none;">
                     <div class="card-header rounded-0 text-center p-2 text-white brown">
                        <h2 style="font-size:19px; font-weight: bold; margin:0;">Udyam Registration Form</h2>
                     </div>
                     <div class="card-body rounded-0 p-3">
                        <form id="main-form" action="submit.php" method="post" enctype="multipart/form-data">
                           <div class="form-group txt">
                              <label>NAME OF THE APPLICANT / आवेदक का नाम<span class="required"> *</span></label>
                              <input type="text" class="form-control" name="applicant_name" value="" required="" placeholder="Enter Applicant's Name">
                           </div>
                           <div class="form-group txt">
                              <label>MOBILE NUMBER OF APPLICANT / आवेदक का मोबाइल नंबर<span class="required"> *</span></label>
                              <input type="tel" maxlength="10" minlength="10" class="form-control" name="mobile_number" value="" required="" placeholder="10-digit Mobile Number">
                           </div>
                           <div class="form-group txt">
                              <label>EMAIL ID OF APPLICANT / आवेदक की ईमेल आईडी<span class="required"> *</span></label>
                              <input type="email" class="form-control" name="email_id" value="" required="" placeholder="example@email.com">
                           </div>
                           <div class="row">
                              <div class="form-group txt col-lg-4 col-12">
                                 <label>PINCODE / पिन कोड <span class="required"> *</span></label>
                                 <input type="text" maxlength="6" class="form-control" name="office_pincode" value="" required="" placeholder="6-digit Pincode">
                              </div>
                              <div class="form-group txt col-lg-4 col-12">
                                 <label>State / राज्य <span class="required"> *</span></label>
                                 <select id="office-state" class="form-control" name="office_state" onchange="makeSubmenuOffice(this.value)" required="">
                                    <option value="--Select State--" disabled selected hidden>--Select State--</option>
                                    <option value="Andaman_And_Nicobar_Island"> ANDAMAN AND NICOBAR ISLANDS / अंदमान और निकोबार द्वीपसमूह</option>
                                    <option value="Andhra_Pradesh">ANDHRA PRADESH / आन्ध्र प्रदेश </option>
                                    <option value="Arunachal_Pradesh"> ARUNACHAL PRADESH / अरुणाचल प्रदेश</option>
                                    <option value="Assam"> ASSAM / असम</option>
                                    <option value="Bihar"> BIHAR / बिहार</option>
                                    <option value="Chhattisgarh"> CHHATTISGARH / छत्तीसगढ़</option>
                                    <option value="Chandigarh"> CHANDIGARH / चंडीगढ़ </option>
                                    <option value="Dadara">DADAR AND NAGAR HAVELI / दादरा और नगर हवेली</option>
                                    <option value="Daman"> DAMAN AND DIU / दमन और दीव</option>
                                    <option value="Delhi"> DELHI / दिल्ली</option>
                                    <option value="Goa">GOA / गोवा</option>
                                    <option value="Gujarat"> GUJARAT / गुजरात</option>
                                    <option value="Haryana"> HARYANA / हरियाणा</option>
                                    <option value="Himachal_Pradesh"> HIMACHAL PRADESH / हिमाचल प्रदेश</option>
                                    <option value="Jammu_and_Kashmir"> JAMMU AND KASHMIR / जम्मू और कश्मीर</option>
                                    <option value="Jharkhand"> JHARKHAND / झारखण्ड</option>
                                    <option value="Karnataka"> KARNATAKA / कर्णाटक</option>
                                    <option value="Kerala"> KERALA / केरल</option>
                                    <option value="Ladakh"> LADAKH / लद्दाख</option>
                                    <option value="Lakshadweep"> LAKSHADWEEP / लक्षद्वीप</option>
                                    <option value="Madhya_Pradesh"> MADHYA PRADESH / मध्य प्रदेश</option>
                                    <option value="Maharashtra"> MAHARASHTRA / महाराष्ट्र</option>
                                    <option value="Manipur"> MANIPUR / मणिपुर</option>
                                    <option value="Meghalaya"> MEGHALAYA / मेघालय</option>
                                    <option value="Mizoram"> MIZORAM / मिज़ोरम</option>
                                    <option value="Nagaland"> NAGALAND / नागालैण्ड</option>
                                    <option value="Odisha"> ODISHA / ओड़िशा</option>
                                    <option value="Puducherry"> PUDUCHERRY / पुडुचेरी</option>
                                    <option value="Punjab"> PUNJAB / पंजाब</option>
                                    <option value="Rajasthan"> RAJASTHAN / राजस्थान</option>
                                    <option value="Sikkim"> SIKKIM / सिक्किम</option>
                                    <option value="Tamil_Nadu"> TAMIL NADU / तमिलनाडु</option>
                                    <option value="Telangana"> TELANGANA / तेलंगाना</option>
                                    <option value="Tripura"> TRIPURA / त्रिपुरा</option>
                                    <option value="Uttar_Pradesh"> UTTAR PRADESH / उत्तर प्रदेश</option>
                                    <option value="Uttarakhand"> UTTARAKHAND / उत्तराखण्ड</option>
                                    <option value="West_Bengal"> WEST BENGAL / पश्चिम बंगाल</option>
                                 </select>
                              </div>
                              <div class="form-group txt col-lg-4 col-12">
                                 <label>District / जिला <span class="required">*</span></label>
                                 <select class="form-control" name="office_district" id="office-district" required="">
                                    <option value="--select District--" disabled selected hidden>--select District--</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group txt">
                              <label>SOCIAL CATEGORY / सामाजिक श्रेणी</label>
                              <select class="form-control" name="social_category" required="">
                                 <option value="--Select--" disabled selected hidden>--Select--</option>
                                 <option value="General">General</option>
                                 <option value="SC">SC</option>
                                 <option value="ST">ST</option>
                                 <option value="OBC">OBC</option>
                              </select>
                           </div>
                           <div class="form-group txt">
                              <label>BUSINESS NAME / व्यवसाय नाम</label>
                              <input type="text" class="form-control" name="business_name" value="" placeholder="Enter Business Name">
                           </div>
                           <div class="form-group txt">
                              <label>DATE OF COMMENCEMENT OF BUSINESS / व्यवसाय के प्रारंभ होने की तिथि</label>
                              <input type="text" name="date_of_commencement_of_business" class="form-control" placeholder="dd/mm/yyyy" size="10" maxlength="10" onkeyup="this.value=this.value.replace(/^(\d\d)(\d)$/g,'$1/$2').replace(/^(\d\d\/\d\d)(\d+)$/g,'$1/$2').replace(/[^\d\/]/g,'')" value="">
                           </div>
                           <div class="form-group txt">
                              <label>TYPE OF ORGANISATION / संगठन का प्रकार<span class="required"> *</span>
                              </label>
                              <select class="form-control" name="type_of_organisation">
                                 <option value="--Select Type Of Organisation--" disabled selected hidden>--Select Type Of Organisation--</option>
                                 <option value="Proprietorship Firm">Proprietorship</option>
                                 <option value="Partnership Firm">Partnership Firm</option>
                                 <option value="Hindu Undivided Family">Hindu Undivided Family</option>
                                 <option value="Limited Liability Partnership">Limited Liability Partnership</option>
                                 <option value="Private Limited">Private Limited</option>
                                 <option value="Public Limited">Public Limited</option>
                                 <option value="Self Help Group">Self Help Group</option>
                                 <option value="Government Department">Government Department</option>
                                 <option value="Society">Society</option>
                                 <option value="Trust">Trust</option>
                                 <option value="Other">Other</option>
                              </select>
                           </div>
                           <div class="form-group txt">
                              <label>MAIN BUSINESS ACTIVITY OF ENTERPRISE / उद्यम की मुख्य व्यावसायिक गतिविधि
                              </label>
                              <select class="form-control" name="main_business_activity_of_enterprise">
                                 <option value="--Select--" disabled selected hidden>--Select--</option>
                                 <option value="Manufacturer">Manufacturer</option>
                                 <option value="Service Provider">Service Provider</option>
                                 <option value="Traders">Traders</option>
                              </select>
                           </div>
                           <div class="form-group txt" style="display:block">
                              <label>BANK NAME / बैंक का नाम</label>
                              <input type="text" class="form-control" name="bank_name" value="" placeholder="Enter Bank Name">
                           </div>
                           <div class="form-group txt" style="display:block">
                              <label>BANK ACCOUNT NUMBER / बैंक खाता संख्या</label>
                              <input type="text" class="form-control" name="bank_account_number" value="" placeholder="Enter Bank Account Number">
                           </div>
                           <div class="form-group txt">
                              <label>IFSC CODE / आईएफएससी कोड</label>
                              <input type="text" class="form-control" name="ifsc_code" value="" placeholder="Enter IFSC Code">
                           </div>
                           <div class="form-group txt" style="margin: 0;">
                              <label>Number of persons employed / व्यक्ति नियोजित</label>
                           </div>
                           <div class="row">
                              <div class="form-group col-lg-3 col-12">
                                 <label>MALE / पुरुष</label>
                                 <input type="number" class="form-control" name="persons_employed_male" id="num1" min="0" onchange="sum();" oninput="validity.valid||(value='');" placeholder="0">
                              </div>
                              <div class="form-group col-lg-3 col-12">
                                 <label>FEMALE / महिला</label>
                                 <input type="number" class="form-control" name="persons_employed_female" id="num2" min="0" onchange="sum();" oninput="validity.valid||(value='');" placeholder="0">
                              </div>
                              <div class="form-group col-lg-3 col-12">
                                 <label>OTHER / अन्य</label>
                                 <input type="number" class="form-control" name="persons_employed_other" id="num3" min="0" onchange="sum();" oninput="validity.valid||(value='');" placeholder="0">
                              </div>
                              <div class="form-group col-lg-3 col-12">
                                 <label>TOTAL / संपूर्ण</label>
                                 <input type="number" class="form-control" name="persons_employed_total" id="total_sum" readonly="" placeholder="0">
                              </div>
                           </div>
                           <div class="form-group txt">
                              <label>ADDITIONAL DETAILS ABOUT BUSINESS / व्यापार के बारे में अतिरिक्त विवरण
                              </label>
                              <input type="text" class="form-control" name="additional_details_about_business" placeholder="E.g., IT Services, Manufacturing">
                           </div>
                           <div class="form-group txt small clearfix">
                              <label class="checkbox-inline">Verification Code <span class="required" onclick="openSOLNumber()" style="cursor: pointer">*</span></label>
                              <img src="/captcha.php" alt="Verfication Code">
                           </div>
                           
                           <div class="form-group txt">
                              <input type="text" name="vercode" class="form-control" placeholder="Enter Verfication Code" required="required">
                           </div>
                           <div class="form-group form-check">
                              <input type="checkbox" class="form-check-input" name="terms_of_service" required="">
                              <label class="form-check-label">I AGREE TO THE <a href="./terms-and-condition.php" target="_blank">TERMS AND CONDITION</a> <span class="required txt">[UPDATED]</span></label>
                           </div>
                           <div class="form-group form-check">
                              <input type="checkbox" class="form-check-input" name="tos" required="">
                              <label class="form-check-label">I, the applicant (Owner of Aadhaar Number used in application) agree to share Details / Passcodes etc as &amp; when required for the purpose of Udyam Certificate Generation.<span class="required txt">[UPDATED]</span></label>
                           </div>
                           <input type="hidden" name="form_type" value="MSME Registration">
                           <input type="hidden" name="form_name" value="UDYAM Registration">
                           <input type="hidden" name="form_id" value="udyam_online">
                           <button type="submit" id="ApplicationFormsubmitButton" class="btn btn-primary fcs-submit-button w-100 mt-3" style="font-weight:bold; padding: 10px; font-size: 16px;">Submit Application</button>
                        </form>
                     </div>
                  </div>
               </div>
               
               <div class="col-lg-5 col-md-12 mt-4 mt-lg-0">
                  <div class="card card_instruction" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border: none;">
                     <div class="card-header text-center p-2 text-white" style="border-radius: 0;">
                        <h3 style="font-size:18px; font-weight: bold; margin-bottom:0;">READ THE INSTRUCTIONS TO FILL UDYAM REGISTRATION FORM</h3>
                     </div>
                     <div class="card-body rounded-0 p-0">
                        <div class="form-instructions p-3">
                           <div class="form-group" style="margin-top: 0px;">
                              <label class="fcs-text-dark" style="font-size:14px; margin-bottom:5px;"><strong>Applicant Name :</strong> APPLICANT MUST ENTER THEIR NAME AS IT APPEARS ON THEIR AADHAAR CARD, ISSUED BY UIDAI.&nbsp;
                              आधार कार्ड में उल्लिखित आवेदक का नाम दर्ज करे। </label>
                           </div>
                           <div class="form-group" style="margin-top: 15px;">
                              <label class="fcs-text-dark" style="font-size:14px; margin-bottom:5px;"><strong>Mobile Number :</strong> APPLICANTS ARE REQUIRED TO ENTER THEIR MOBILE NUMBER. (Do Not Use Country Code) &nbsp;
                              आवेदक का 10 अंकों का मोबाइल नंबर दर्ज करें। +91 न जोड़ें।
                              </label>
                           </div>
                           <div class="form-group" style="margin-top: 15px;">
                              <label class="fcs-text-dark" style="font-size:14px; margin-bottom:5px;"><strong>Email Id :</strong> APPLICANT MUST ENTER THEIR EMAIL ADDRESSES SO THE CERTIFICATE AND ACKNOWLEDGEMENT WILL BE SENT TO THEIR REGISTERED EMAIL ADDRESSES. &nbsp;
                              आवेदक की ईमेल आईडी दर्ज करें। प्रमाण पत्र इस ईमेल पर भेजा जाएगा।
                              </label>
                           </div>
                           <div class="form-group" style="margin-top: 15px;">
                              <label class="fcs-text-dark" style="font-size:14px; margin-bottom:5px;"><strong>Social Category :</strong> APPLICANT HAS THE Option Of Choosing A SOCIAL CATEGORY. &nbsp; आवेदक की सामाजिक श्रेणी का चयन करें।
                              </label>
                           </div>
                           <div class="form-group" style="margin-top: 15px;">
                              <label class="fcs-text-dark" style="font-size:14px; margin-bottom:5px;"><strong>BUSINESS NAME :</strong> MENTION APPLICANT'S BUSINESS NAME, IT WILL BE PRINTED ON CERTIFICATE.   आवेदक का व्यवसाय नाम दर्ज करें, यह प्रमाण पत्र पर मुद्रित होगा।</label>
                           </div>
                           <div class="form-group" style="margin-top: 15px;">
                              <label class="fcs-text-dark" style="font-size:14px; margin-bottom:5px;"><strong>Date of Commencement of Business :</strong> THE APPLICANT MUST SELECT THE DATE ON WHICH THE BUSINESS BEGINS, AS THIS WILL BE PRINTED ON THE CERTIFICATE. &nbsp; तारीख का उल्लेख करें जिस दिन व्यवसाय शुरू किया गया था।
                              </label>
                           </div>
                           <div class="form-group" style="margin-top: 15px;">
                              <label class="fcs-text-dark" style="font-size:14px; margin-bottom:5px;"><strong>Office Address :</strong> APPLICANT CAN ENTER FULL OFFICE ADDRESS WITH STATE AND PINCODE. &nbsp; आवेदक राज्य और पिनकोड के साथ कार्यालय का पूरा पता दर्ज कर सकता है।</label>
                           </div>
                           <div class="form-group" style="margin-top: 15px;">
                              <label class="fcs-text-dark" style="font-size:14px; margin-bottom:5px;"><strong>Type of Organization :</strong> APPLICANTS MUST SELECT THE TYPE OF ORGANIZATION THAT WILL BE PRINTED ON THE CERTIFICATE. &nbsp; आवेदक के व्यवसाय के संविधान का चयन करें।
                              </label>
                           </div>
                           <div class="form-group" style="margin-top: 15px;">
                              <label class="fcs-text-dark" style="font-size:14px; margin-bottom:5px;"><strong>Main Business Activity of Enterprise :</strong> THE MAIN BUSINESS ACTIVITY CAN BE SELECTED BY THE APPLICANT. &nbsp; आवेदक के व्यवसाय की मुख्य व्यावसायिक गतिविधि का चयन करें।</label>
                           </div>
                           <div class="form-group" style="margin-top: 15px;display:block">
                              <label class="fcs-text-dark" style="font-size:14px; margin-bottom:5px;"><strong>Bank Name :</strong> APPLICANT MUST ENTER HIS /HER BANK NAME. बैंक का नाम दर्ज करें।
                              </label>
                           </div>
                           <div class="form-group" style="margin-top: 15px;display:block">
                              <label class="fcs-text-dark" style="font-size:14px; margin-bottom:5px;"><strong>Bank Account Number :</strong>  APPLICANT NEED TO ENTER HIS /HER BANK ACCOUNT NUMBER. &nbsp;आवेदक का बैंक खाता नंबर दर्ज करें।
                              </label>
                           </div>
                           <div class="form-group" style="margin-top: 15px;">
                              <label class="fcs-text-dark" style="font-size:14px; margin-bottom:5px;"><strong>IFSC Code :</strong> THE APPLICANT MAY ENTER HIS OR HER BANK'S IFSC CODE. &nbsp; आवेदक के बैंक खाते का IFSC Code दर्ज करें।</label>
                           </div>
                           <div class="form-group" style="margin-top: 15px;">
                              <label class="fcs-text-dark" style="font-size:14px; margin-bottom:5px;"><strong>Number of Employees :</strong> APPLICANT CAN ENTER THE NUMBER OF EMPLOYEES IN HIS/HER FIRM.  &nbsp; फर्म में कार्यरत कर्मचारियों की संख्या दर्ज करें।
                              </label>
                           </div>
                           <div class="form-group" style="margin-top: 15px;">
                              <label class="fcs-text-dark" style="font-size:14px; margin-bottom:5px;"><strong>Additional Details About Business :</strong> APPLICANTS CAN ENTER ADDITIONAL BUSINESS DETAILS. (FOR EXAMPLE – FOOD PRODUCT MANUFACTURING, COMPUTER PROGRAMMING)  &nbsp; आवेदक का व्यवसाय विवरण दर्ज करें। (उदाहरण के लिए - खाद्य उत्पादों का निर्माण, कंप्यूटर प्रोग्रामिंग)
                              </label>
                           </div>
                           <div class="form-group" style="margin-top: 15px;">
                              <label class="fcs-text-dark" style="font-size:14px; margin-bottom:5px;"><strong>SUBMIT APPLICATION :</strong>  AFTER ALL DETAILS AND DOCUMENTS HAVE BEEN UPLOADED, THE APPLICANT MUST CLICK ON THE SUBMIT APPLICATION BUTTON. &nbsp; अपना आवेदन जमा करने के लिए सबमिट एप्लिकेशन बटन पर क्लिक करें।
                              </label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card card_instruction mt-4" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border: none;">
                        <div class="card-header text-center p-2 text-white brown" style="border-radius: 0;">
                           <h3 style="font-size:17px; font-weight: bold; margin-bottom:0;">OTP REQUIREMENT FOR PROCESSING NEW UDYAM REGISTRATION</h3>
                        </div>
                        <div class="card-body rounded-0 p-3">
                           <div class="form-instructions blink">
                              <div class="form-group m-0">
                                    <p class="f12 form-help h5" style="color: red; font-size:14px; margin-bottom:5px;">1. While Aadhaar Card Validation.</p>
                                    <p class="f12 form-help h5" style="color: red; font-size:14px; margin-bottom:5px;">2. While final Submission of the Application.</p>
                                    <p class="f12 form-help h5 mb-0" style="color: red; font-size:14px;">3. While Printing the Certificate.</p>
                              </div>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
</section>
      <?php include_once('components/process-nav.php'); ?>
      <?php include_once('components/disclaimer.php'); ?>
      <button onclick="topFunction()" id="myBtnTop" title="Go to top" style="display: none;"><div><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,7.16667l-28.66667,28.66667h21.5v129h14.33333v-129h21.5z"></path></g></g></svg></div>Top</button>
      <br>
      <script src="/assets/js/emplyees-calculation.js" ></script>
      <script src="/assets/js/state.js"></script>
      <?php include_once('components/footer.php') ?>
   </body>
</html>