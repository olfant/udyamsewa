<?php
// Include the configuration file
require($_SERVER['DOCUMENT_ROOT'] . "/config.php");
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!-- Google tag (gtag.js) --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17935008150"></script>
<script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'AW-17935008150'); </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
/* Original Layout Structure + Green & Orange Theme */
.old-header {
    background-color: #ffffff; /* Main background is white */
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
}
.old-topbar {
    background-color: #0B1E59; /* Premium Navy Blue */
    color: #ffffff; /* White text */
    padding: 8px 15px;
    font-size: 13px;
    font-weight: 500;
    border-bottom: 2px solid var(--theme-orange);
}
.old-topbar a { 
    color: #ffffff; 
    text-decoration: none; 
    transition: 0.3s;
}
.old-topbar a:hover {
    color: #ffeb3b;
}
.old-topbar .right-links a { 
    margin: 0 15px; 
    position: relative;
}
.old-topbar .right-links a:not(:last-child)::after {
    content: '|';
    position: absolute;
    right: -18px;
    color: rgba(255, 255, 255, 0.4);
    font-weight: 400;
}
.old-middle {
    padding: 20px 15px;
}
.old-title {
    font-weight: 800;
    font-size: 26px; /* Increased from 20px */
    margin-bottom: 4px;
    color: var(--theme-green); /* Green Title */
}
.old-subtitle {
    font-size: 16px; /* Increased from 13px */
    font-weight: 700;
    letter-spacing: 0.5px;
    color: var(--theme-orange); /* Orange Subtitle */
}
.header-logo {
    width: 105px; /* Increased from 80px */
    height: auto;
    filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2)); /* Shadow on logo */
    transition: transform 0.3s;
}
.header-logo:hover {
    transform: scale(1.05);
}
.old-btn-blog {
    background-color: var(--theme-orange);
    color: #ffffff !important;
    font-weight: 700;
    padding: 10px 28px;
    border-radius: 4px;
    text-transform: uppercase;
    font-size: 14px;
    transition: 0.3s;
    box-shadow: 0 4px 6px rgba(255, 152, 0, 0.3);
}
.old-btn-blog:hover {
    background-color: #e68a00;
    transform: translateY(-2px);
}
.old-navbar {
    background-color: var(--theme-green); /* Solid Green Navbar */
}
.old-nav-link {
    color: #ffffff !important;
    font-size: 12px;
    font-weight: 600; /* Slightly less heavy to save space */
    text-transform: uppercase;
    padding: 10px 10px !important; /* Compact padding */
    transition: 0.3s;
}
.old-nav-link:hover, .old-nav-link.active {
    color: #ffeb3b !important; /* Yellow/Orange highlight on hover/active */
    background-color: rgb(221 19 19);
}
.old-nav-item {
    border-right: 1px solid rgba(255,255,255,0.2);
}
.old-nav-item:last-child {
    border-right: none;
}
.old-marquee {
    background-color: var(--theme-orange); /* Orange Marquee */
    color: #ffffff;
    font-size: 13px;
}
.old-marquee a {
    color: #ffffff;
    text-decoration: underline;
}
@media (max-width: 991px) {
    .old-nav-item {
        border-right: none;
        border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    .old-title {
        font-size: 16px; /* Scaled down for mobile */
        margin-bottom: 2px;
    }
    .old-subtitle {
        font-size: 10px; /* Scaled down for mobile */
        letter-spacing: 0px;
    }
    .header-logo {
        width: 70px; /* Scaled down for mobile */
    }
}
</style>

<header class="old-header">
    <!-- Top Bar -->
    <div class="old-topbar d-none d-lg-flex justify-content-between align-items-center">
        <div>
            <span class="mr-4"><i class="ti ti-headphone-alt"></i> Helpline : (+91) 9031675081</span>
            <span><i class="ti ti-email"></i> Mail : care@udyamsewa.com</span>
        </div>
        <div class="right-links">
            <a href="/">Home</a>
            <a href="/blog/">Blog</a>
            <a href="/contact-us.php">Contact</a>
            <a href="/enquiry.php">Enquiry</a>
        </div>
    </div>

    <!-- Mobile Top Contact (Only visible on small screens) -->
    <div class="d-flex d-lg-none justify-content-between align-items-center px-3 py-2" style="background-color: #0B1E59; font-size: 12px; font-weight: 500; color: #ffffff; border-bottom: 2px solid var(--theme-orange);">
         <span><i class="ti ti-headphone-alt" style="color: var(--theme-orange);"></i> 9031675081</span>
         <span><i class="ti ti-email" style="color: var(--theme-orange);"></i> care@udyamsewa.com</span>
    </div>

    <!-- Main Middle Bar -->
    <div class="old-middle container-fluid">
        <div class="row align-items-center">
            <div class="col-8 col-lg-9 d-flex align-items-center">
                <a href="/" class="text-decoration-none">
                    <img src="/assets/image/register-udyam-logo.png" alt="Logo" class="mr-3 header-logo">
                </a>
                <div>
                    <div class="old-title">सूक्ष्म, लघु और मध्यम उद्यम पंजीकरण</div>
                    <div class="old-subtitle">MSME REGISTRATION PRIVATE CONSULTANCY SERVICE</div>
                </div>
            </div>
            <div class="col-4 col-lg-3 text-right">
                <a href="/blog/" class="btn old-btn-blog">BLOG</a>
            </div>
        </div>
    </div>
    
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg p-0 old-navbar">
        <!-- Mobile Toggle -->
        <button class="navbar-toggler m-2 ml-auto" type="button" data-toggle="collapse" data-target="#oldNavContent" style="background: white; border-radius: 4px; padding: 4px 8px; border: 2px solid var(--theme-orange);">
            <span class="navbar-toggler-icon" style="background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox=\'0 0 30 30\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath stroke=\'rgba(76, 175, 80, 1)\' stroke-width=\'2.5\' stroke-linecap=\'round\' stroke-miterlimit=\'10\' d=\'M4 7h22M4 15h22M4 23h22\'/%3E%3C/svg%3E'); display:block; width: 20px; height: 20px;"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="oldNavContent">
            <ul class="navbar-nav text-center w-100 justify-content-center">
                <li class="nav-item old-nav-item"><a class="nav-link old-nav-link <?php echo ($currentPage == 'index.php' || $currentPage == '') ? 'active' : ''; ?>" href="/">HOME</a></li>
                <li class="nav-item old-nav-item"><a class="nav-link old-nav-link <?php echo ($currentPage == 'udyam-registration-certificate-online.php') ? 'active' : ''; ?>" href="/udyam-registration-certificate-online.php">NEW UDYAM REGISTRATION</a></li>
                <li class="nav-item old-nav-item"><a class="nav-link old-nav-link <?php echo ($currentPage == 'udyam-re-registration-certificate-online.php') ? 'active' : ''; ?>" href="/udyam-re-registration-certificate-online.php">UDYAM RE-REGISTRATION</a></li>
                <li class="nav-item old-nav-item"><a class="nav-link old-nav-link <?php echo ($currentPage == 'update-udyam-registration-certificate-online.php') ? 'active' : ''; ?>" href="/update-udyam-registration-certificate-online.php">UPDATE UDYAM CERTIFICATE</a></li>
                <li class="nav-item old-nav-item"><a class="nav-link old-nav-link <?php echo ($currentPage == 'print-udyam-registration-certificate-online.php') ? 'active' : ''; ?>" href="/print-udyam-registration-certificate-online.php">PRINT UDYAM CERTIFICATE</a></li>
                <li class="nav-item old-nav-item"><a class="nav-link old-nav-link <?php echo ($currentPage == 'cancel-udyam-registration-certificate-online.php') ? 'active' : ''; ?>" href="/cancel-udyam-registration-certificate-online.php">CANCEL UDYAM REGISTRATION</a></li>
                <li class="nav-item old-nav-item"><a class="nav-link old-nav-link <?php echo ($currentPage == 'msme-sample-certificate.php') ? 'active' : ''; ?>" href="/msme-sample-certificate.php">SAMPLE CERTFICATE</a></li>
            </ul>
        </div>
    </nav>
</header>

<marquee class="py-2 m-0 old-marquee">
    <strong>Disclaimer:</strong> This website is owned and operated by <strong>Olfant Company, a private consultancy firm</strong>. We are not a Government Department and are not affiliated with or representing any Government official or department. <strong>Udyam Registration is free on the official Government portal</strong>: <a href="http://udyamregistration.gov.in" target="_blank" style="color: #ffeb3b;">udyamregistration.gov.in</a>. For any queries, please contact us at <strong>9031675081</strong>.
</marquee>
