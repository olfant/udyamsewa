$(document).ready(function () {

    $("#verifyCaptcha").click(function (e) {

        if (validateRefundForm()) {

            var captcha = $("#captcha_input").val();
            var captcha_count = $("#captcha_count").val();

            $("#captcha_loader").removeClass("d-none");
            $(".captcha-verify").text("Checking...");
            $("#pageLoader").css("display", "flex").hide().fadeIn(200);
            $("#captcha_result").html("");

            setTimeout(function () {

                $.ajax({
                    url: "../../refund/verify-captcha.php",
                    type: "POST",
                    data: {
                        captcha: captcha,
                        captcha_count: captcha_count
                    },

                    success: function (response) {

                        $("#pageLoader").fadeOut();
                        $("#captcha_loader").addClass("d-none");
                        $(".captcha-verify").text("Verify");

                        if (response.trim() === "success") {

                            captcha_count++;
                            $("#captcha_count").val(captcha_count);

                            if (captcha_count == 1) {

                                $("#captcha_result").html(
                                    '<span class="text-danger">✖ Invalid Captcha 1</span>'
                                );
                                $("#captcha_img").attr("src", "captcha.php?" +
                                    new Date().getTime());
                                $("#submitBtn").prop("disabled", true);
                                $("#refundForm")[0].reset();

                            }

                            if (captcha_count == 2) {

                                $("#captcha_result").html(
                                    '<span class="text-danger">✖ Invalid Captcha 2</span>'
                                );
                                $("#captcha_img").attr("src", "captcha.php?" +
                                    new Date().getTime());
                                $("#submitBtn").prop("disabled", true);
                                $("#refundForm")[0].reset();

                            }

                            if (captcha_count >= 3) {

                                $("#captcha_result").html(
                                    '<span class="text-success">✔ Captcha Verified</span>'
                                );
                                $("#submitBtn").prop("disabled", false);

                            }

                        } else {

                            $("#captcha_result").html(
                                '<span class="text-danger">✖ Invalid Captcha</span>'
                            );
                            $("#submitBtn").prop("disabled", true);
                            $("#captcha_img").attr("src", "captcha.php?" +
                                new Date().getTime());
                            $("#refundForm")[0].reset();

                        }
                    }
                });

            }, 10000);

        }

    });

    let attemptCount = 0;
    $("#refundForm").on("submit", function (e) {

        if (validateRefundForm()) {
            e.preventDefault();
            let btn = $("#refundForm button[type='submit']");
            btn.prop("disabled", true).text("Submitting...");
            $("#pageLoader").css("display", "flex").hide().fadeIn(200);

            var formData = new FormData(this);

            setTimeout(function () {

                $.ajax({
                    url: "../../refund/submit-refund.php",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    cache: false,
                    success: function (res) {
                        let data = JSON.parse(res);
                        $("#pageLoader").fadeOut();

                        if (data.status === "NotFound") {
                            Swal.fire({
                                title: "Record Not found!",
                                text: data.message,
                                icon: "question",
                                confirmButtonText: "Okey"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload(); // reload page
                                }
                            });
                        }

                        if (data.status === "Found") {
                            Swal.fire({
                                title: "Are you sure you want to proceed with the refund request?",
                                showDenyButton: true,
                                showCancelButton: true,
                                confirmButtonText: "Yes",
                                denyButtonText: `No`
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $("#submit_type").val(data.submit_type);
                                    $("#refundForm").trigger("submit");
                                } else if (result.isDenied) {
                                    Swal.fire("Changes are not saved", "", "info");
                                }
                            });
                            btn.prop("disabled", false).text("Submit");
                        }

                        if (data.status === "error") {
                            Swal.fire({
                                title: "Something went wrong!",
                                icon: "error",
                                timer: 3000,
                                showConfirmButton: false,
                                willClose: () => {
                                    location.reload();
                                }
                            });
                        }

                        if (data.status === "success") {
                            Swal.fire({
                                title: "Saved!",
                                icon: "success",
                                timer: 3000, // 3 seconds
                                showConfirmButton: false,
                                willClose: () => {
                                    location.reload();
                                }
                            });
                        }
                    },
                    error: function () {
                        Swal.fire({
                            title: "Something went wrong!",
                            icon: "error",
                            timer: 3000,
                            showConfirmButton: false,
                            willClose: () => {
                                location.reload();
                            }
                        });
                    }
                });

            }, 10000);
        }

    });

    $("#applied_for").on("change", function () {

        let value = $(this).val();

        let showList = [
            "Update Udyam Certificate",
            "Print Udyam Application",
            "Udyam Annexure Certificate",
            "Cancel Udyam Registration"
        ];

        if (showList.includes(value)) {
            $("#udyamBox").slideDown();
            $("#udyam_number").attr("required", true);
        } else {
            $("#udyamBox").slideUp();
            $("#udyam_number").removeAttr("required").val("");
        }

    });

    function validateUdyamNumber() {
        let udyam = $("#udyam_number").val().trim();
        let regex = /^UDYAM-[A-Z]{2}-\d{2}-\d{7}$/;

        if (udyam === "" || udyam === null) {
            return true;
        }

        if (!regex.test(udyam)) {
            Swal.fire({
                title: "Invalid Udyam Number",
                text: "Please enter valid format (UDYAM-XY-12-3456789)",
                icon: "error",
                confirmButtonText: "Okey"
            }).then(() => {
                location.reload();
            });

            return false;
        }

        return true;
    }

    function validateRefundForm() {

        let valid = true;

        if (!validateUdyamNumber()) {
            return false;
        }

        $("#refundForm input[required], #refundForm select[required], #refundForm textarea[required]")
            .each(function () {

                if ($(this).attr("type") == "checkbox") {

                    if (!$(this).is(":checked")) {
                        $(this).closest(".form-check").addClass("error");
                        valid = false;
                    } else {
                        $(this).closest(".form-check").removeClass("error");
                    }

                } else if ($(this).attr("type") == "radio") {

                    let name = $(this).attr("name");

                    if ($("input[name='" + name + "']:checked").length == 0) {
                        $("input[name='" + name + "']").closest(".form-check-inline").addClass("error");
                        valid = false;
                    } else {
                        $("input[name='" + name + "']").closest(".form-check-inline").removeClass(
                            "error");
                    }

                } else if ($(this).is("textarea")) {

                    if ($(this).val().trim().length < 500) {
                        $(this).addClass("error");
                        valid = false;
                    } else {
                        $(this).removeClass("error");
                    }

                } else {

                    if ($(this).val().trim() === "") {
                        $(this).addClass("error");
                        valid = false;
                    } else {
                        $(this).removeClass("error");
                    }

                }

            });

        return valid;
    }

    
});

function resetRefundForm(alert_text) {
    Swal.fire({
        text: alert_text,
        icon: "info",
        showConfirmButton: false,
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false
    });
    document.getElementById("refundForm").reset();
}

