<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udyam India Refund Request Policy | Udyam Registration Portal</title>
    <meta name="description" content="Udyam India offers a refund policy for failures or disputes in Udyam registration services to ensure customer satisfaction. You can contact us for support.">
    <link rel="canonical" href="https://udyamindia.in/refund/udhyam_refund_form.php" />
    <link rel="icon" href="../assets/img/favicon-udyam-registration.png" type="image/gif" sizes="16x16">
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/refund.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/components/header.php'); ?>

    <section id="-registration">
        <div class="container py-4">

            <div class="row mb-5 justify-content-center">
                <div class="col-sm-10">
                    <div class="card rounded-0">
                        <div class="card-header rounded-0 text-center p-2 text-white brown">
                            <h2 style="font-size: 19px; font-weight: bold;">Udyam Registration Refund Request Form</h2>
                        </div>
                        <div class="card-body rounded-0 p-1">
                            <form id="refundForm" class="p-3" method="POST" enctype="multipart/form-data" style="all: revert;" novalidate>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label">Applicant Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="applicant_name" required>
                                        <span class="error-msg"></span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label">
                                        Mobile Number <br><small class="note">(Same as provided in form)</small>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="tel" class="form-control" name="mobile_number" required>
                                        <span class="error-msg"></span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label">Contact Number</label>
                                    <div class="col-md-8">
                                        <input type="tel" class="form-control" name="contact_number" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label">E-mail ID</label>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label">Applied for</label>
                                    <div class="col-md-8">
                                        <select class="form-control" name="applied_for" id="applied_for" required>
                                            <option value="">Select</option>
                                            <option value="New Udyam Registration">New Udyam Registration</option>
                                            <option value="Udyam Re-Registration">Udyam Re-Registration</option>
                                            <option value="Update Udyam Certificate">Update Udyam Certificate</option>
                                            <option value="Forgot Udyam Registration">Forgot Udyam Registration</option>
                                            <option value="Print Udyam Application">Download Udyam Certificate</option>
                                            <option value="Udyam Annexure Certificate">Udyam Annexure Certificate</option>
                                            <option value="Cancel Udyam Registration">Cancel Udyam Registration</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label">Reason for refund</label>
                                    <div class="col-md-8">
                                        <select class="form-control" name="refund_reason" required>
                                            <option value="">Select reason</option>
                                            <option value="Provided aadhaar is already registered with Udyam">
                                                Provided aadhaar is already registered with Udyam
                                            </option>

                                            <option value="Provided PAN is already registered with Udyam">
                                                Provided PAN is already registered with Udyam
                                            </option>

                                            <option value="Provided aadhaar is already registered with Udyog Aadhaar Memorandum (UAM)">
                                                Provided aadhaar is already registered with Udyog Aadhaar Memorandum (UAM)
                                            </option>

                                            <option value="Provided PAN is already registered with Udyog Aadhaar Memorandum (UAM)">
                                                Provided PAN is already registered with Udyog Aadhaar Memorandum (UAM)
                                            </option>

                                            <option value="Aadhaar details mismatched during Udyam registration">
                                                Aadhaar details mismatched during Udyam registration
                                            </option>

                                            <option value="PAN details mismatched during new Udyam registration">
                                                PAN details mismatched during new Udyam registration
                                            </option>

                                            <option value="Aadhaar details mismatched during Udyam re-registration">
                                                Aadhaar details mismatched during Udyam re-registration
                                            </option>

                                            <option value="PAN details mismatched during Udyam re-registration">
                                                PAN details mismatched during Udyam re-registration
                                            </option>

                                            <option value="Mobile number is not linked with Aadhaar">
                                                Mobile number is not linked with Aadhaar
                                            </option>

                                            <option value="Provided mobile number is not registered with Udyam">
                                                Provided mobile number is not registered with Udyam
                                            </option>

                                            <option value="Provided e-mail ID is not registered with Udyam">
                                                Provided e-mail ID is not registered with Udyam
                                            </option>

                                            <option
                                                value="Provided mobile number is not registered with Udyog Aadhaar Memorandum (UAM)">
                                                Provided mobile number is not registered with Udyog Aadhaar Memorandum (UAM)
                                            </option>

                                            <option value="Provided e-mail ID is not registered with Udyog Aadhaar Memorandum (UAM)">
                                                Provided e-mail ID is not registered with Udyog Aadhaar Memorandum (UAM)
                                            </option>

                                            <option value="Provided Udyam Registration number is incorrect / does not exist">
                                                Provided Udyam Registration number is incorrect / does not exist
                                            </option>

                                            <option
                                                value="Provided Udyog Aadhaar Memorandum (UAM) number is incorrect / does not exist">
                                                Provided Udyog Aadhaar Memorandum (UAM) number is incorrect / does not exist
                                            </option>

                                            <option value="Provided Udyam Registration number already cancelled">
                                                Provided Udyam Registration number already cancelled
                                            </option>

                                            <option value="Provided Udyog Aadhaar Memorandum (UAM) number already cancelled">
                                                Provided Udyog Aadhaar Memorandum (UAM) number already cancelled
                                            </option>

                                            <option value="Requested service was not initiated">
                                                Requested service was not initiated
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3" id="udyamBox" style="display: none;">
                                    <label class="col-md-4 col-form-label">Udyam Number</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="udyam_number" name="udyam_number" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label">Form filling date & time</label>
                                    <div class="col-md-8">
                                        <input type="datetime-local" class="form-control" name="form_filling_datetime" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label">Describe your reason for refund</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" name="refund_description" minlength="500" rows="4" required></textarea>
                                        <small class="text-muted">Minimum 500 characters</small>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label">Upload payment proof</label>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control" name="payment_proof" id="payment_proof"
                                            accept=".pdf,.jpg,.jpeg,.png" required>
                                        <small class="note">(only in pdf/jpg/jpeg format upto 2 MB)</small>
                                    </div>
                                </div>

                                <hr class="my-4">

                                <h5 class="mb-3"><strong>Answer these questions:</strong></h5>

                                <div class="mb-3 row">
                                    <label class="col-md-8 col-form-label">Have you tried to contact on our helpline number?</label>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q1" value="Yes" required>
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q1" value="No" required
                                                onclick="resetRefundForm('You have been already contacted by customer service executive.')">
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-md-8 col-form-label">Did our customer service executive assist you?</label>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q2" value="Yes" required>
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q2" value="No" required
                                                onclick="resetRefundForm('You have been already assisted by customer service executive.')">
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-md-8 col-form-label">Did you receive Udyam verification email?</label>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q3" value="Yes" required>
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q3" value="No" required>
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-md-8 col-form-label">Was Udyam verification successfully completed?</label>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q4" value="Yes" required>
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q4" value="No" required>
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-md-8 col-form-label">Did you receive Udyam certificate on your e-mail from our
                                        side?</label>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q5" value="Yes" required>
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q5" value="No" required>
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-md-8 col-form-label">Did you receive Udyam Registration number on e-mail from our
                                        side?</label>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q6" value="Yes" required>
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q6" value="No" required>
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-md-8 col-form-label">Did you approve the application details before
                                        submission?</label>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q7" value="Yes" required>
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q7" value="No" required>
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-md-8 col-form-label">Have you registered in Udyam earlier?</label>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q8" value="Yes" required>
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q8" value="No" required>
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-md-8 col-form-label">Have you registered in Udyog Aadhaar Memorandum
                                        earlier?</label>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q9" value="Yes" required>
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q9" value="No" required>
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-md-8 col-form-label">Do you have an Aadhaar which is not registered with
                                        Udyam?</label>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q10" value="Yes" required>
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q10" value="No" required>
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-md-8 col-form-label">Do you have a PAN which is not registered with Udyam?</label>
                                    <div class="col-md-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q11" value="Yes" required>
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="q11" value="No" required>
                                            <label class="form-check-label">No</label>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4">

                                <h5 class="mb-3"><strong>Service Acknowledgement Section</strong></h5>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="ack1" required>
                                    <label class="form-check-label">
                                        I acknowledge that this is a private consultancy service, not a government office.
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="ack2" required>
                                    <label class="form-check-label">
                                        I acknowledge that the service fee is charged for professional assistance only.
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" name="ack3" required>
                                    <label class="form-check-label">
                                        I have read and agreed to the Refund & Cancellation Policy.
                                    </label>
                                </div>

                                <hr class="my-4">

                                <h5 class="mb-3">
                                    <strong>Enter the bank account details to receive the refund.</strong>
                                </h5>

                                <p class="text-muted">
                                    (Enter only the account details used to make the payment for the service)
                                </p>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label">Account Number</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="account_number" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label">Account Holder Name</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="account_holder_name" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label">IFSC</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="ifsc" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label">Bank Name</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="bank_name" required>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-md-4 col-form-label">Branch Address</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="branch_address" required>
                                    </div>
                                </div>

                                <h5 class="mb-2"><strong>Declaration:</strong></h5>

                                <p>
                                    I declare that the information provided above is true and correct. I understand that submission of
                                    this form does not guarantee a refund and is subject to verification as per company policy.
                                </p>

                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" name="declaration" required>
                                    <label class="form-check-label">
                                        I Agree
                                    </label>
                                </div>

                                <div class="form-check mb-4">
                                    <input type="checkbox" class="form-check-input" id="refundPolicyCheck" required>
                                    <label class="form-check-label" for="refundPolicyCheck">
                                        I agree to the
                                        <a href="#" data-toggle="modal" data-target="#refundPolicyModal">
                                            Cancellation & Refund Policy
                                        </a>
                                    </label>
                                </div>

                                <div class="row align-items-center mb-3">
                                    <div class="col-md-3">
                                        <img id="captcha_img" src="captcha.php" alt="captcha" style="border:1px solid #ccc;">
                                    </div>

                                    <div class="col-md-3">
                                        <input type="text" class="form-control" id="captcha_input" name="captcha"
                                            placeholder="Enter Captcha" required>
                                    </div>

                                    <div class="col-md-3">
                                        <button type="button" id="verifyCaptcha" class="btn btn-outline-secondary btn-sm">
                                            <span class="btn-text captcha-verify">Verify</span>
                                            <span class="spinner-border spinner-border-sm d-none"></span>
                                        </button>
                                    </div>

                                    <div class="col-md-3">
                                        <span id="captcha_result"></span>
                                    </div>
                                </div>

                                <div class="alert alert-warning mt-3">
                                    Refund requests are reviewed within <strong>7–10 working days</strong>. Submission of this form does
                                    not guarantee approval.
                                </div>

                                <div class="text-center mt-4">
                                    <input type="hidden" name="submit_type" id="submit_type" value="first_submit">
                                    <button type="submit" id="submitBtn" class="btn btn-primary px-4" disabled>
                                        <span class="btn-text">Submit</span>
                                        <span class="spinner-border spinner-border-sm d-none"></span>
                                    </button>
                                </div>

                            </form>
                            <input type="hidden" name="captcha_count" id="captcha_count" value="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="refundPolicyModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Cancellation & Refund Policy</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">

                    <h6><strong>Cancellation of Application:</strong></h6>
                    <p>
                        You cannot revoke the document after it has been submitted to our website. There is no cancellation clause.
                    </p>
                    <p>If you wish to obtain a refund, you first need to cancel your application and provide us the OTP during the cancellation process. Once we receive proof of the termination of your application, we will proceed with your refund.</p>

                    <h6><strong>Cancellation Fee and Requirements:</strong></h6>
                    <p>
                        If you cancel your application, a cancellation fee of 30% of the total amount paid will be deducted before the refund is processed. Please ensure to provide all necessary information and the OTP during the cancellation process to facilitate your refund.
                    </p>

                    <h6><strong>Clarification About Application:</strong></h6>
                    <p>
                        If you have any concerns about the application process, you can contact our helpline number for assistance or email us at <a href="mailto:care@udyamsewa.com">care@udyamsewa.com</a>. If we need further clarification about your application, our customer service executive will contact you via email or phone.
                    </p>

                    <hr>

                    <h6><strong>Refund Policy:</strong></h6>
                    <p>
                        We provide registration and customization services and charge a consultancy fee for these services. By using our website, you agree to comply with our Terms and Conditions, Return Policy, and Privacy Policy. For any assistance, please email us at <a href="mailto:care@udyamsewa.com">care@udyamsewa.com</a>.
                    </p>

                    <h6><strong>Eligibility for Refund:</strong></h6>
                    <p>A refund will only be considered if there is a simple, obvious fault in the service purchased from our website.</p>
                    <p>Refunds are not applicable in cases where an application cannot be processed, validated, or completed due to incorrect, incomplete, mismatched, pre-registered, or ineligible details provided by the applicant.</p>

                    <h6><strong>Time Frame for Refund:</strong></h6>
                    <p>Refund requests must be made within 30 days from the date of purchase. Any requests made after this period will not be considered.</p>

                    <h6><strong>Refund Request Process:</strong></h6>
                    <p>
                        To initiate a refund request yourself, please fill out the refund request form. Alternatively, you may contact our helpline number for assistance. We will review your request and notify you of the approval or rejection of your refund.
                    </p>

                    <h6><strong>Refund of Payment:</strong></h6>
                    <p>
                        When a refund is approved, either a partial or full amount will be refunded using the same payment method originally used. In the absence of a legitimate reason for reimbursement, a minimum of 30% of the total amount paid will be deducted as refund charges. A full refund will be issued if we are unable to process your application.
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div id="pageLoader">
        <div class="loader-spinner"></div>
    </div>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'); ?>
    <script src="../assets/js/refund.app.js"></script>
</body>

</html>