$(document).ready(function () {
  $("form").submit(function (event) {
    $(".form-group").removeClass("has-error");
    $(".help-block").remove();
    var formData = {
      name: $("#name").val(),
      username: $("#username").val(),
      email: $("#email").val(),
      password: $("#password").val(),
      confirmpassword: $("#confirmpassword").val(),
    };

    $.ajax({
      type: "POST",
      url: "process.php",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      console.log(data);

      if (!data.success) {
        if (data.errors.name) {
          $("#name-group").addClass("has-error");
          $("#name-group").append(
            '<div class="help-block">' + data.errors.name + "</div>"
          );
        }

        if (data.errors.username) {
            $("#username-group").addClass("has-error");
            $("#username-group").append(
              '<div class="help-block">' + data.errors.username + "</div>"
            );
          }

        if (data.errors.email) {
          $("#email-group").addClass("has-error");
          $("#email-group").append(
            '<div class="help-block">' + data.errors.email + "</div>"
          );
        }

        if (data.errors.password) {
            $("#password-group").addClass("has-error");
            $("#password-group").append(
              '<div class="help-block">' + data.errors.password + "</div>"
            );
          }
          if (data.errors.confirmpassword) {
            $("#confirmpassword-group").addClass("has-error");
            $("#confirmpassword-group").append(
              '<div class="help-block">' + data.errors.confirmpassword + "</div>"
            );
          }
      } else {
        $("form").html(
          '<div class="alert alert-success">' + data.message + "</div>"
        );
      }
    });
    $(document).ready(function () {
        $("form").submit(function (event) {
          $(".form-group").removeClass("has-error");
          $(".help-block").remove();
          var formData = {
            name: $("#name").val(),
            username: $("#username").val(),
            email: $("#email").val(),
            password: $("#password").val(),
            confirmpassword: $("#confirmpassword").val(),
          };
      
          $.ajax({
            type: "POST",
            url: "process.php",
            data: formData,
            dataType: "json",
            encode: true,
          }).done(function (data) {
            console.log(data);
      
            if (!data.success) {
              if (data.errors.name) {
                $("#name-group").addClass("has-error");
                $("#name-group").append(
                  '<div class="help-block">' + data.errors.name + "</div>"
                );
              }
      
              if (data.errors.username) {
                  $("#username-group").addClass("has-error");
                  $("#username-group").append(
                    '<div class="help-block">' + data.errors.username + "</div>"
                  );
                }
      
              if (data.errors.email) {
                $("#email-group").addClass("has-error");
                $("#email-group").append(
                  '<div class="help-block">' + data.errors.email + "</div>"
                );
              }
      
              if (data.errors.password) {
                  $("#password-group").addClass("has-error");
                  $("#password-group").append(
                    '<div class="help-block">' + data.errors.password + "</div>"
                  );
                }
                if (data.errors.confirmpassword) {
                  $("#confirmpassword-group").addClass("has-error");
                  $("#confirmpassword-group").append(
                    '<div class="help-block">' + data.errors.confirmpassword + "</div>"
                  );
                }
              .fail(function (data) {
                  $("form").html(
                    '<div class="alert alert-danger">Could not reach server, please try again later.</div>'
                  );
                });
            } else {
              $("form").html(
                '<div class="alert alert-success">' + data.message + "</div>"
              );
            }
          });
      
          event.preventDefault();
        });
      });
      

    event.preventDefault();
  });
});
