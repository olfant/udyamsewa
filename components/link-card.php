<style>
/* =========================================================
   Modern Consultancy Cards
   ========================================================= */

.consultancy-section {
    position: relative;
    padding: 70px 0;
    background: #f8fafc;
}

/* Card */
.consultancy-card {
    position: relative;
    height: 100%;
    display: flex;
    flex-direction: column;
    overflow: hidden;

    background: rgba(255, 255, 255, 0.96);
    border: 1px solid #e5e7eb;
    border-radius: 18px;

    box-shadow:
        0 2px 6px rgba(15, 23, 42, 0.03),
        0 12px 35px rgba(15, 23, 42, 0.06);

    transition:
        transform 0.35s cubic-bezier(.2,.8,.2,1),
        box-shadow 0.35s ease,
        border-color 0.35s ease;

    margin-top: 28px;
}

/* Top colored line */
.consultancy-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;

    background: linear-gradient(
        90deg,
        var(--theme-green, #2a9d46),
        var(--theme-orange, #ff7f00)
    );

    transform: scaleX(0.25);
    transform-origin: left;
    transition: transform 0.4s ease;
}

.consultancy-card:hover {
    transform: translateY(-8px);

    border-color: rgba(42, 157, 70, 0.25);

    box-shadow:
        0 8px 18px rgba(15, 23, 42, 0.06),
        0 22px 45px rgba(15, 23, 42, 0.10);
}

.consultancy-card:hover::before {
    transform: scaleX(1);
}


/* =========================================================
   Icon
   ========================================================= */

.consultancy-icon-box {
    position: absolute;
    top: -25px;
    left: 28px;
    z-index: 2;
}

.consultancy-icon {
    position: relative;

    display: flex;
    align-items: center;
    justify-content: center;

    width: 52px;
    height: 52px;

    color: #fff;
    background: linear-gradient(
        135deg,
        var(--theme-green, #2a9d46),
        #1f8739
    );

    border-radius: 14px;

    font-size: 19px;

    box-shadow:
        0 8px 18px rgba(42, 157, 70, 0.25);

    transition:
        transform 0.35s ease,
        background 0.35s ease,
        box-shadow 0.35s ease;
}

.consultancy-icon::after {
    content: "";
    position: absolute;
    inset: 0;

    border-radius: inherit;
    border: 1px solid rgba(255,255,255,0.25);
}

.consultancy-card:hover .consultancy-icon {
    transform: rotate(-4deg) scale(1.08);

    background: linear-gradient(
        135deg,
        var(--theme-orange, #ff7f00),
        #e66f00
    );

    box-shadow:
        0 10px 22px rgba(255, 127, 0, 0.28);
}


/* =========================================================
   Body
   ========================================================= */

.consultancy-body {
    flex: 1;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 45px 24px 25px;

    text-align: left;
}

.consultancy-text {
    position: relative;

    margin: 0;

    color: #334155;

    font-size: 14px;
    font-weight: 500;
    line-height: 1.75;

    transition: color 0.3s ease;
}

.consultancy-card:hover .consultancy-text {
    color: #1e293b;
}


/* =========================================================
   Footer
   ========================================================= */

.consultancy-footer {
    display: flex;
    align-items: center;
    justify-content: center;

    padding: 16px 20px;

    background: linear-gradient(
        180deg,
        #f8fafc,
        #f1f5f9
    );

    border-top: 1px solid #e5e7eb;
}


/* =========================================================
   Apply Button
   ========================================================= */

.btn-apply-now {
    position: relative;

    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 7px;

    padding: 8px 18px;

    color: #fff;
    background: var(--theme-orange, #ff7f00);

    border: 1px solid transparent;
    border-radius: 8px;

    font-size: 13px;
    font-weight: 600;
    line-height: 1;

    text-decoration: none;

    box-shadow: 0 5px 12px rgba(255, 127, 0, 0.18);

    transition:
        transform 0.25s ease,
        background 0.25s ease,
        box-shadow 0.25s ease;
}

.btn-apply-now:hover {
    color: #fff;
    background: #e86f00;

    transform: translateY(-2px);

    box-shadow:
        0 8px 18px rgba(255, 127, 0, 0.28);

    text-decoration: none;
}

.btn-apply-now:active {
    transform: translateY(0);
}

.btn-apply-now i {
    margin-right: 0;
    font-size: 12px;

    transition: transform 0.25s ease;
}

.btn-apply-now:hover i {
    transform: translateX(3px);
}


/* =========================================================
   Responsive
   ========================================================= */

@media (max-width: 767px) {

    .consultancy-section {
        padding: 50px 0;
    }

    .consultancy-card {
        margin-top: 25px;
        border-radius: 16px;
    }

    .consultancy-icon-box {
        left: 50%;
        transform: translateX(-50%);
    }

    .consultancy-body {
        padding: 42px 20px 22px;
        text-align: center;
    }

    .consultancy-footer {
        padding: 14px;
    }
}
</style>

<section class="consultancy-section">
    <div class="container custom-form-container">
        <h2 class="text-center mb-3" style="color: #0B1E59; font-weight: 700; font-size: 26px;">Connect With Our Experts for B2B Consultancy Services</h2>
        <p class="text-justify mb-5" style="color: #334155; line-height: 1.7; font-weight: 600;">
            Please Note: We operate as a marketplace that connects businesses with experienced professionals for consultancy related to Udyam and associated government schemes. We do not provide or facilitate the issuance of any registration certificates other than consultancy support related to Udyam matters, as such registrations are issued directly by the concerned Government authorities.
        </p>

        <div class="row pt-3">
            <!-- Card 1 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="consultancy-card position-relative">
                    <div class="consultancy-body">
                        <p class="consultancy-text">Consultancy For Getting Concessions For Attending International Trade Fairs.</p>
                    </div>
                    <div class="consultancy-footer">
                        <a href="/udyam-online-registration.php" class="btn-apply-now"><i class="fa-solid fa-circle-info"></i> Apply Now</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="consultancy-card position-relative">
                    <div class="consultancy-body">
                        <p class="consultancy-text">Consultancy For Reducing Rate Of Interest On Existing Loans Availed For Their Business.</p>
                    </div>
                    <div class="consultancy-footer">
                        <a href="/udyam-online-registration.php" class="btn-apply-now"><i class="fa-solid fa-circle-info"></i> Apply Now</a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="consultancy-card position-relative">
                    <div class="consultancy-body">
                        <p class="consultancy-text">Consultancy For Availing Benefit Of Exemption From Security Deposit In Government Tenders.</p>
                    </div>
                    <div class="consultancy-footer">
                        <a href="/udyam-online-registration.php" class="btn-apply-now"><i class="fa-solid fa-circle-info"></i> Apply Now</a>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="consultancy-card position-relative">
                    <div class="consultancy-body">
                        <p class="consultancy-text">Consultancy For Getting Concessions Against Electricity Bills.</p>
                    </div>
                    <div class="consultancy-footer">
                        <a href="/udyam-online-registration.php" class="btn-apply-now"><i class="fa-solid fa-circle-info"></i> Apply Now</a>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="consultancy-card position-relative">
                    <div class="consultancy-body">
                        <p class="consultancy-text">Consultancy To MSME Units To Recover Their Dues From The Clients Who Have Refused To Pay.</p>
                    </div>
                    <div class="consultancy-footer">
                        <a href="/udyam-online-registration.php" class="btn-apply-now"><i class="fa-solid fa-circle-info"></i> Apply Now</a>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="consultancy-card position-relative">
                    <div class="consultancy-body">
                        <p class="consultancy-text">Consultancy To Avail Exemptions Under Direct Tax Laws.</p>
                    </div>
                    <div class="consultancy-footer">
                        <a href="/udyam-online-registration.php" class="btn-apply-now"><i class="fa-solid fa-circle-info"></i> Apply Now</a>
                    </div>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="consultancy-card position-relative">
                    <div class="consultancy-body">
                        <p class="consultancy-text">Consultancy For Getting Reimbursement Of Iso Certification Expenditure.</p>
                    </div>
                    <div class="consultancy-footer">
                        <a href="/udyam-online-registration.php" class="btn-apply-now"><i class="fa-solid fa-circle-info"></i> Apply Now</a>
                    </div>
                </div>
            </div>
            <!-- Card 8 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="consultancy-card position-relative">
                    <div class="consultancy-body">
                        <p class="consultancy-text">Consultancy For Availing Discount On Patent Fees.</p>
                    </div>
                    <div class="consultancy-footer">
                        <a href="/udyam-online-registration.php" class="btn-apply-now"><i class="fa-solid fa-circle-info"></i> Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>