<?php require_once __DIR__ . '/../config.php'; ?>
<?php

$current_link   = '<?php echo $baseUrl; ?>';
$mail_host      = 'udyamsewa.com';
$mail_username  = 'care@udyamsewa.com';
$mail_password  = 'skill@0Rs';
$mail_name      = 'MSME Registration';

$form_data = [
   
   'UDYAM Registration'      =>
       [
           'form_link'          => '',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'office_address'                        => 'office_address',
               'office_state'                          => 'office_state',
               'office_district'                       => 'office_district',
               'office_pincode'                        => 'office_pincode',
               'annual_turnover'                       => 'annual_turnover',
               'social_category'                       => 'social_category',
               'aadhaar_number'                        => 'aadhaar_number',
               'uam_number'                            => 'uam_number',
               'pan_card_number'                       => 'pan_card_number',
               'bank_account_number'                   => 'bank_account_number',
               'ifsc_code'                             => 'ifsc_code',
               'business_name'                         => 'business_name',
               'date_of_commencement_of_business'      => 'date_of_commencement_of_business',
               'type_of_organisation'                  => 'type_of_organisation',
               'main_business_activity_of_enterprise'  => 'main_business_activity_of_enterprise',
               'additional_details_about_business'     => 'additional_details_about_business',
               'persons_employed_male'                 => 'persons_employed_male',
               'persons_employed_female'               => 'persons_employed_female',
               'persons_employed_other'                => 'persons_employed_other',
               'persons_employed_total'                => 'persons_employed_total',
               'investment_in_plant_and_machinery'     => 'investment_in_plant_and_machinery',
               
               
   
           ],
       ],
   
       'Udyam Online For Proprietor'      =>
       [
           'form_link'          => 'udyam-online-for-proprietor.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'office_address'                        => 'office_address',
               'office_state'                          => 'office_state',
               'office_district'                       => 'office_district',
               'office_pincode'                        => 'office_pincode',
               'annual_turnover'                       => 'annual_turnover',
               'social_category'                       => 'social_category',
               'aadhaar_number'                        => 'aadhaar_number',
               'uam_number'                            => 'uam_number',
               'pan_card_number'                       => 'pan_card_number',
               'bank_account_number'                   => 'bank_account_number',
               'ifsc_code'                             => 'ifsc_code',
               'business_name'                         => 'business_name',
               'date_of_commencement_of_business'      => 'date_of_commencement_of_business',
               'type_of_organisation'                  => 'type_of_organisation',
               'main_business_activity_of_enterprise'  => 'main_business_activity_of_enterprise',
               'additional_details_about_business'     => 'additional_details_about_business',
               'persons_employed_male'                 => 'persons_employed_male',
               'persons_employed_female'               => 'persons_employed_female',
               'persons_employed_other'                => 'persons_employed_other',
               'persons_employed_total'                => 'persons_employed_total',
               'investment_in_plant_and_machinery'     => 'investment_in_plant_and_machinery',
               
               
   
           ],
       ],
       'Udyam Online For Partnership Firm'      =>
       [
           'form_link'          => 'udyam-online-for-partnership-firm.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'office_address'                        => 'office_address',
               'office_state'                          => 'office_state',
               'office_district'                       => 'office_district',
               'office_pincode'                        => 'office_pincode',
               'annual_turnover'                       => 'annual_turnover',
               'social_category'                       => 'social_category',
               'aadhaar_number'                        => 'aadhaar_number',
               'uam_number'                            => 'uam_number',
               'pan_card_number'                       => 'pan_card_number',
               'bank_account_number'                   => 'bank_account_number',
               'ifsc_code'                             => 'ifsc_code',
               'business_name'                         => 'business_name',
               'date_of_commencement_of_business'      => 'date_of_commencement_of_business',
               'type_of_organisation'                  => 'type_of_organisation',
               'main_business_activity_of_enterprise'  => 'main_business_activity_of_enterprise',
               'additional_details_about_business'     => 'additional_details_about_business',
               'persons_employed_male'                 => 'persons_employed_male',
               'persons_employed_female'               => 'persons_employed_female',
               'persons_employed_other'                => 'persons_employed_other',
               'persons_employed_total'                => 'persons_employed_total',
               'investment_in_plant_and_machinery'     => 'investment_in_plant_and_machinery',
               
               
   
           ],
       ],
       'Udyam Online For Private Limited'      =>
       [
           'form_link'          => 'udyam-online-for-private-limited.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'office_address'                        => 'office_address',
               'office_state'                          => 'office_state',
               'office_district'                       => 'office_district',
               'office_pincode'                        => 'office_pincode',
               'annual_turnover'                       => 'annual_turnover',
               'social_category'                       => 'social_category',
               'aadhaar_number'                        => 'aadhaar_number',
               'uam_number'                            => 'uam_number',
               'pan_card_number'                       => 'pan_card_number',
               'bank_account_number'                   => 'bank_account_number',
               'ifsc_code'                             => 'ifsc_code',
               'business_name'                         => 'business_name',
               'date_of_commencement_of_business'      => 'date_of_commencement_of_business',
               'type_of_organisation'                  => 'type_of_organisation',
               'main_business_activity_of_enterprise'  => 'main_business_activity_of_enterprise',
               'additional_details_about_business'     => 'additional_details_about_business',
               'persons_employed_male'                 => 'persons_employed_male',
               'persons_employed_female'               => 'persons_employed_female',
               'persons_employed_other'                => 'persons_employed_other',
               'persons_employed_total'                => 'persons_employed_total',
               'investment_in_plant_and_machinery'     => 'investment_in_plant_and_machinery',
               
               
   
           ],
       ],
       'Udyam Online For Public Limited'      =>
       [
           'form_link'          => 'udyam-online-for-public-limited.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'office_address'                        => 'office_address',
               'office_state'                          => 'office_state',
               'office_district'                       => 'office_district',
               'office_pincode'                        => 'office_pincode',
               'annual_turnover'                       => 'annual_turnover',
               'social_category'                       => 'social_category',
               'aadhaar_number'                        => 'aadhaar_number',
               'uam_number'                            => 'uam_number',
               'pan_card_number'                       => 'pan_card_number',
               'bank_account_number'                   => 'bank_account_number',
               'ifsc_code'                             => 'ifsc_code',
               'business_name'                         => 'business_name',
               'date_of_commencement_of_business'      => 'date_of_commencement_of_business',
               'type_of_organisation'                  => 'type_of_organisation',
               'main_business_activity_of_enterprise'  => 'main_business_activity_of_enterprise',
               'additional_details_about_business'     => 'additional_details_about_business',
               'persons_employed_male'                 => 'persons_employed_male',
               'persons_employed_female'               => 'persons_employed_female',
               'persons_employed_other'                => 'persons_employed_other',
               'persons_employed_total'                => 'persons_employed_total',
               'investment_in_plant_and_machinery'     => 'investment_in_plant_and_machinery',
               
               
   
           ],
       ],
   
   
       'Udyam Online For Others'      =>
       [
           'form_link'          => 'udyam-online-for-others.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'office_address'                        => 'office_address',
               'office_state'                          => 'office_state',
               'office_district'                       => 'office_district',
               'office_pincode'                        => 'office_pincode',
               'annual_turnover'                       => 'annual_turnover',
               'social_category'                       => 'social_category',
               'aadhaar_number'                        => 'aadhaar_number',
               'uam_number'                            => 'uam_number',
               'pan_card_number'                       => 'pan_card_number',
               'bank_account_number'                   => 'bank_account_number',
               'ifsc_code'                             => 'ifsc_code',
               'business_name'                         => 'business_name',
               'date_of_commencement_of_business'      => 'date_of_commencement_of_business',
               'type_of_organisation'                  => 'type_of_organisation',
               'main_business_activity_of_enterprise'  => 'main_business_activity_of_enterprise',
               'additional_details_about_business'     => 'additional_details_about_business',
               'persons_employed_male'                 => 'persons_employed_male',
               'persons_employed_female'               => 'persons_employed_female',
               'persons_employed_other'                => 'persons_employed_other',
               'persons_employed_total'                => 'persons_employed_total',
               'investment_in_plant_and_machinery'     => 'investment_in_plant_and_machinery',
               
               
   
           ],
       ],
   
       
   
       'Re Registration'     =>
       [
           'form_link'          => 'udyam-re-registration-certificate-online.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'office_address'                        => 'office_address',
               'office_state'                          => 'office_state',
               'office_district'                       => 'office_district',
               'office_pincode'                        => 'office_pincode',
               'annual_turnover'                       => 'annual_turnover',
               'social_category'                       => 'social_category',
               'aadhaar_number'                        => 'aadhaar_number',
               'uam_number'                            => 'uam_number',
               'pan_card_number'                       => 'pan_card_number',
               'bank_account_number'                   => 'bank_account_number',
               'ifsc_code'                             => 'ifsc_code',
               'business_name'                         => 'business_name',
               'date_of_commencement_of_business'      => 'date_of_commencement_of_business',
               'type_of_organisation'                  => 'type_of_organisation',
               'main_business_activity_of_enterprise'  => 'main_business_activity_of_enterprise',
               'additional_details_about_business'     => 'additional_details_about_business',
               'persons_employed_male'                 => 'persons_employed_male',
               'persons_employed_female'               => 'persons_employed_female',
               'persons_employed_other'                => 'persons_employed_other',
               'persons_employed_total'                => 'persons_employed_total',
               'investment_in_plant_and_machinery'     => 'investment_in_plant_and_machinery',
           ],
       ],
   
   
       'Re Udyam Online For Proprietor'     =>
       [
           'form_link'          => 're-registration-for-proprietor.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'office_address'                        => 'office_address',
               'office_state'                          => 'office_state',
               'office_district'                       => 'office_district',
               'office_pincode'                        => 'office_pincode',
               'annual_turnover'                       => 'annual_turnover',
               'social_category'                       => 'social_category',
               'aadhaar_number'                        => 'aadhaar_number',
               'uam_number'                            => 'uam_number',
               'pan_card_number'                       => 'pan_card_number',
               'bank_account_number'                   => 'bank_account_number',
               'ifsc_code'                             => 'ifsc_code',
               'business_name'                         => 'business_name',
               'date_of_commencement_of_business'      => 'date_of_commencement_of_business',
               'type_of_organisation'                  => 'type_of_organisation',
               'main_business_activity_of_enterprise'  => 'main_business_activity_of_enterprise',
               'additional_details_about_business'     => 'additional_details_about_business',
               'persons_employed_male'                 => 'persons_employed_male',
               'persons_employed_female'               => 'persons_employed_female',
               'persons_employed_other'                => 'persons_employed_other',
               'persons_employed_total'                => 'persons_employed_total',
               'investment_in_plant_and_machinery'     => 'investment_in_plant_and_machinery',
           ],
       ],
   
       'Re Udyam Online For Partnership Firm'     =>
       [
           'form_link'          => 're-registration-for-partnership-firm.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'office_address'                        => 'office_address',
               'office_state'                          => 'office_state',
               'office_district'                       => 'office_district',
               'office_pincode'                        => 'office_pincode',
               'annual_turnover'                       => 'annual_turnover',
               'social_category'                       => 'social_category',
               'aadhaar_number'                        => 'aadhaar_number',
               'uam_number'                            => 'uam_number',
               'pan_card_number'                       => 'pan_card_number',
               'bank_account_number'                   => 'bank_account_number',
               'ifsc_code'                             => 'ifsc_code',
               'business_name'                         => 'business_name',
               'date_of_commencement_of_business'      => 'date_of_commencement_of_business',
               'type_of_organisation'                  => 'type_of_organisation',
               'main_business_activity_of_enterprise'  => 'main_business_activity_of_enterprise',
               'additional_details_about_business'     => 'additional_details_about_business',
               'persons_employed_male'                 => 'persons_employed_male',
               'persons_employed_female'               => 'persons_employed_female',
               'persons_employed_other'                => 'persons_employed_other',
               'persons_employed_total'                => 'persons_employed_total',
               'investment_in_plant_and_machinery'     => 'investment_in_plant_and_machinery',
           ],
       ],
   
   
   'Re Udyam Online For Private Limited'     =>
       [
           'form_link'          => 're-registration-for-private-limited.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'office_address'                        => 'office_address',
               'office_state'                          => 'office_state',
               'office_district'                       => 'office_district',
               'office_pincode'                        => 'office_pincode',
               'annual_turnover'                       => 'annual_turnover',
               'social_category'                       => 'social_category',
               'aadhaar_number'                        => 'aadhaar_number',
               'uam_number'                            => 'uam_number',
               'pan_card_number'                       => 'pan_card_number',
               'bank_account_number'                   => 'bank_account_number',
               'ifsc_code'                             => 'ifsc_code',
               'business_name'                         => 'business_name',
               'date_of_commencement_of_business'      => 'date_of_commencement_of_business',
               'type_of_organisation'                  => 'type_of_organisation',
               'main_business_activity_of_enterprise'  => 'main_business_activity_of_enterprise',
               'additional_details_about_business'     => 'additional_details_about_business',
               'persons_employed_male'                 => 'persons_employed_male',
               'persons_employed_female'               => 'persons_employed_female',
               'persons_employed_other'                => 'persons_employed_other',
               'persons_employed_total'                => 'persons_employed_total',
               'investment_in_plant_and_machinery'     => 'investment_in_plant_and_machinery',
           ],
       ],
   
   
   'Re Udyam Online For Public Limited'     =>
       [
           'form_link'          => 're-registration-for-public-limited.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'office_address'                        => 'office_address',
               'office_state'                          => 'office_state',
               'office_district'                       => 'office_district',
               'office_pincode'                        => 'office_pincode',
               'annual_turnover'                       => 'annual_turnover',
               'social_category'                       => 'social_category',
               'aadhaar_number'                        => 'aadhaar_number',
               'uam_number'                            => 'uam_number',
               'pan_card_number'                       => 'pan_card_number',
               'bank_account_number'                   => 'bank_account_number',
               'ifsc_code'                             => 'ifsc_code',
               'business_name'                         => 'business_name',
               'date_of_commencement_of_business'      => 'date_of_commencement_of_business',
               'type_of_organisation'                  => 'type_of_organisation',
               'main_business_activity_of_enterprise'  => 'main_business_activity_of_enterprise',
               'additional_details_about_business'     => 'additional_details_about_business',
               'persons_employed_male'                 => 'persons_employed_male',
               'persons_employed_female'               => 'persons_employed_female',
               'persons_employed_other'                => 'persons_employed_other',
               'persons_employed_total'                => 'persons_employed_total',
               'investment_in_plant_and_machinery'     => 'investment_in_plant_and_machinery',
           ],
       ],
   
   
   'Re Udyam Online For Others'     =>
       [
           'form_link'          => 're-registration-for-others.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'office_address'                        => 'office_address',
               'office_state'                          => 'office_state',
               'office_district'                       => 'office_district',
               'office_pincode'                        => 'office_pincode',
               'annual_turnover'                       => 'annual_turnover',
               'social_category'                       => 'social_category',
               'aadhaar_number'                        => 'aadhaar_number',
               'uam_number'                            => 'uam_number',
               'pan_card_number'                       => 'pan_card_number',
               'bank_account_number'                   => 'bank_account_number',
               'ifsc_code'                             => 'ifsc_code',
               'business_name'                         => 'business_name',
               'date_of_commencement_of_business'      => 'date_of_commencement_of_business',
               'type_of_organisation'                  => 'type_of_organisation',
               'main_business_activity_of_enterprise'  => 'main_business_activity_of_enterprise',
               'additional_details_about_business'     => 'additional_details_about_business',
               'persons_employed_male'                 => 'persons_employed_male',
               'persons_employed_female'               => 'persons_employed_female',
               'persons_employed_other'                => 'persons_employed_other',
               'persons_employed_total'                => 'persons_employed_total',
               'investment_in_plant_and_machinery'     => 'investment_in_plant_and_machinery',
           ],
       ],
   
   
   
    'Update Certificate'      =>
       [
           'form_link'          => 'update-udyam-registration-certificate-online.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'uam_number'                            => 'uam_number',
               'updated_details'                       => 'updated_details',
           ],
       ],
   
   
   
       'Trace Certificate'      =>
       [
           'form_link'          => 'trace-udyog-aadhaar-certificate.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'uam_number'                            => 'uam_number',
           ],
       ],
   
   
      'Print Certificate'      =>
       [
           'form_link'          => 'print-udyam-registration-certificate-online.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'uam_number'                            => 'uam_number',
           ],
       ],
      
   
       'Print Udyam Registration'      =>
       [
           'form_link'          => 'print-udyam-registration-certificate-online.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'uam_number'                            => 'uam_number',
               'aadhaar_number'                        => 'aadhaar_number',
           ],
       ],
   
   
       'Forgot Udyam Registration'      =>
       [
           'form_link'          => 'forgot-udyam-or-uam-registration-certificate-online.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'uam_number'                            => 'uam_number',
               'aadhaar_number'                        => 'aadhaar_number',
           ],
       ],
   
       'Databank Registration'  =>
       [
           'form_link'          => 'msme-databank-registration.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'business_address'                      => 'business_address',
               'aadhaar_number'                        => 'aadhaar_number',
               'pan_card_number'                       => 'pan_card_number', 
               'business_name'                         => 'business_name',
               'nature_of_business_activity'           => 'nature_of_business_activity',
               'product_service_name'                  => 'product_service_name',
               'product_service_description'           => 'product_service_description',
               'annual_production_capacity'            => 'annual_production_capacity',
               'production_measurement_unit'           => 'production_measurement_unit',
           ],
       ],
   
    'Update Udyam Certificate'      =>
       [
           'form_link'          => 'update-udyam-registration-certificate-online.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
   
               'udyam_number'                          => 'udyam_number',
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'opt_selected'                          => 'udyam_uam_payment',
               'updated_details'                       =>'updated_details',
               
           ],
       ],
   
     'Print Udyam Application'      =>
       [
           'form_link'          => 'print-udyam-registration-certificate-online.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
   
               'udyam_number'                          => 'udyam_number',
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'opt_selected'                          => 'udyam_uam_payment',
               'updated_details'                       =>'updated_details',
               
           ],
       ],

          
     'Annexture Udyam Application'      =>
     [
         'form_link'          => 'udyam-registration-annexture-certificate-online.php',
         'table_name'         => 'msme_form',
         'user_name'          => 'applicant_name',
         'user_email'         => 'email_id',
         'form_fields'        =>
         [
 
             'udyam_number'                          => 'udyam_number',
             'applicant_name'                        => 'applicant_name',
             'mobile_number'                         => 'mobile_number',
             'email_id'                              => 'email_id',
             'opt_selected'                          => 'udyam_uam_payment',
             'updated_details'                       =>'updated_details',
             
         ],
     ],
   
   
   'Cancel MSME Registration'      =>
       [
           'form_link'          => 'cancel-udyam-registration-certificate-online.php',
           'table_name'         => 'cancel_msme',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'uam_number'                            => 'uam_number',
               'business_name'                         => 'business_name',
               'aadhaar_number'                        => 'aadhaar_number',
               'cancel_reason'                         => 'cancel_reason',
               'other_reason'                          => 'other_reason',
               
           ],
       ],
       'UDYAM Cancellation'      =>
       [
           'form_link'          => 'cancel-udyam-registration-certificate-online.php',
           'table_name'         => 'msme_form',
           'user_name'          => 'applicant_name',
           'user_email'         => 'email_id',
           'form_fields'        =>
           [
               'applicant_name'                        => 'applicant_name',
               'mobile_number'                         => 'mobile_number',
               'email_id'                              => 'email_id',
               'aadhaar_number'                        => 'aadhaar_number',
               'udyam_number'                         => 'udyam_number',
               'cancel_reason'                         => 'cancel_reason',
               'business_name'                         => 'business_name',
           ],
       ],
   
   ];
   
   ?>