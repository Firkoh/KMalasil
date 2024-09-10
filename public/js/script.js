$(document).ready(function() {
      $(".password-toggle").click(function() {
        const passwordInput = $("#floatingPassword");
        const passwordToggleIcon = $(this).find("i");

        if (passwordInput.attr("type") === "password") {
          passwordInput.attr("type", "text");
          passwordToggleIcon.removeClass("bi-eye-slash");
          passwordToggleIcon.addClass("bi-eye-fill");
        } else {
          passwordInput.attr("type", "password");
          passwordToggleIcon.removeClass("bi-eye-fill");
          passwordToggleIcon.addClass("bi-eye-slash");
        }
      });
    });