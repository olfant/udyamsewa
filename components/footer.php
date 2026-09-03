<!-- footer -->
<style>
.new-footer {
    background-color: #0B1E59; /* Premium Dark Navy */
    color: rgba(255, 255, 255, 0.7);
    font-family: 'Inter', sans-serif;
    border-top: 4px solid var(--theme-orange);
    padding: 60px 0 0;
}
.new-footer h5 {
    color: #ffffff;
    font-weight: 700;
    margin-bottom: 25px;
    font-size: 16px;
    letter-spacing: 1px;
    text-transform: uppercase;
    position: relative;
    padding-bottom: 10px;
}
.new-footer h5::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 40px;
    height: 3px;
    background-color: var(--theme-green);
}
.new-footer p, .new-footer a {
    color: rgba(255, 255, 255, 0.8);
    font-size: 14px;
    line-height: 1.8;
}
.new-footer ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
.new-footer ul li {
    margin-bottom: 8px;
}
.new-footer ul li a {
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
    font-size: 13px;
}
@media (max-width: 768px) {
    .new-footer h5 {
        margin-top: 20px;
        margin-bottom: 15px;
    }
    .new-footer .mb-5 {
        margin-bottom: 1.5rem !important;
    }
    .new-footer {
        padding: 30px 0 0;
    }
}
.new-footer ul li a:hover {
    color: var(--theme-orange);
    transform: translateX(5px);
}
.footer-social a {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.05);
    color: #ffffff;
    border-radius: 50%;
    margin-right: 12px;
    transition: all 0.3s ease;
    text-decoration: none;
    font-size: 16px;
    border: 1px solid rgba(255, 255, 255, 0.1);
}
.footer-social a:hover {
    background: var(--theme-orange);
    border-color: var(--theme-orange);
    color: #fff;
    transform: translateY(-3px);
    box-shadow: 0 4px 10px rgba(255, 152, 0, 0.3);
}
.footer-bottom {
    background-color: var(--theme-orange); /* Orange background per request */
    padding: 15px 0; /* Reduced padding for compact look */
    margin-top: 30px;
    font-size: 13px;
    border-top: none;
}
.footer-bottom-flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap; /* Allows stacking on very small screens */
}
.footer-bottom-flex p {
    margin: 0; /* Remove default margins to keep it compact */
}
</style>

<footer class="new-footer">
    <div class="container-fluid">
        <div class="row">
            <!-- Column 1: About Us -->
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0 pr-lg-5">
                <h5>About Us</h5>
                <p style="font-size: 13px; line-height: 1.6;">
                    <strong>Disclaimer</strong>: <a href="http://<?php echo $webName; ?>" style="color: #ffeb3b; text-decoration: underline;"><?php echo $webName; ?></a> is a private website owned by <strong>Olfant Company, a private consultancy firm</strong>. We are not affiliated with any Government department or the official Udyam Portal. 
                    <strong>Udyam/MSME Registration is free</strong> on <a href="https://udyamregistration.gov.in/" target="_blank" style="color: #ffeb3b; text-decoration: underline;">udyamregistration.gov.in</a>. Any fee charged by us is only for private consultancy and assistance services.
                </p>
                <div class="footer-social mt-4">
                    <a href="https://www.facebook.com/profile.php?id=61591439595616" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/UdyamGov" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/udyamgov.offical/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@UdyamGov" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                <h5>Quick Links</h5>
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li><a href="/about-us.php">About Us</a></li>
                            <li><a href="/terms-and-condition.php">Terms &amp; Conditions</a></li>
                            <li><a href="/privacy-policy.php">Privacy Policy</a></li>
                            <li><a href="/shipping-and-delivery.php">Shipping &amp; Delivery</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li><a href="/cancellation-and-refund-policy.php">Cancellation &amp; Refund</a></li>
                            <li><a href="/msme-sample-certificate.php">Udyam Sample</a></li>
                            <li><a href="/nic-code.php">NIC Code</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Column 3: Customer Support -->
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <h5>Customer Support</h5>
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li><a href="/contact-us.php">Contact Us</a></li>
                            <li><a href="/enquiry.php">Enquiry</a></li>
                            <li><a href="/complaint-order.php">Complaint</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li><a href="/track-order.php">Track Order</a></li>
                            <li><a href="/blog/">Blog</a></li>
                            <li><a href="/migration-eudyami-to-udyamgov.php">EudyamI Migration</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-flex">
                <p>&copy; <?php echo date("Y"); ?> <?php echo $webTitle; ?>. All rights reserved.</p>
                <p style="color: rgba(255, 255, 255, 0.9);">Owned and Operated by <strong>Olfant</strong> - A Private Consultancy Firm</p>
            </div>
        </div>
    </div>
</footer>

<!-- sticky navbar js -->
<script src="/assets/js/sticky-nav.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const udyamInputs = document.querySelectorAll('input[name="udyam_number"], input[name="uam_number"]');
    const warning = document.getElementById("udyam_warning");
    const pattern = /^UDYAM-[A-Z]{2}-\d{2}-\d{7}$/;

    udyamInputs.forEach(function(input) {
        input.placeholder = "UDYAM-State Code (2 Letters)-District Code (2 Digit Numeric)-7 Digit Numeric Code";
        
        input.addEventListener("input", function() {
            this.value = this.value.replace(/[^A-Z0-9-]/gi, '').toUpperCase();
            if (pattern.test(this.value) && warning) {
                warning.style.display = "none";
            }
        });

        input.addEventListener("blur", function() {
            if (warning) {
                if (this.value && !pattern.test(this.value)) {
                    warning.style.display = "inline";
                } else {
                    warning.style.display = "none";
                }
            }
        });
    });
  });
</script>

<?php
 // edittable form
  include_once('editable/edit-submit-form.php');
?>