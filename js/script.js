$('document').ready(function () {
  $('#username').on('focus', function () {
    $('#username').removeClass('error');
  });

  $('#username').on('blur', function () {
    if ($('#username').val() == '') {
      $('#username').addClass('error');
    }
  });

  $('#password').on('focus', function () {
    $('#password').removeClass('error');
  });

  $('#password').on('blur', function () {
    if ($('#password').val() == '') {
      $('#password').addClass('error');
    }
  });

  $('#login-form').on('submit', function (e) {
    e.preventDefault();
    $('#err-msg').html('');
    let err = false;
    if ($('#email').val() == '') {
      $('#email').addClass('error');
      err = true;
    }
    if ($('#password').val() == '') {
      $('#password').addClass('error');
      err = true;
    }
    if (err == true) {
      return false;
    }

    let g = 4;
    $.ajax({
      type: 'POST',
      url: 'login.php',
      data: $('#login-form').serialize() + '&' + $('#login').attr('name') + '=' + $('#login').val(),
      success: function (status) {
        if (status == true) {
          $('#login').val('Signing in...');
          setTimeout('window.location.href = "home.php";', 3000);
        } else {
          $('#err-msg').html(
            '<div class="alert alert-danger text-center">Invalid email or password!</div>'
          );
          $('#username').val('');
          $('#password').val('');
        }
      },
    });
  });
});
