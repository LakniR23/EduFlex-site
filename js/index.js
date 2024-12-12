//  courses payment
  function accepts() {
    var userResponce = confirm('Please login first! Do you want to be redirected to the login page?');
    if (userResponce) {
      window.location.href = 'login.php';
    }
  }


//privacy policy for payment
  function decline() {
    alert('You need to accept the Privacy Policy to continue payment.');
  }
  function accept() {
    window.location.href = 'payment.php';
  }

  //admin page returns
  function returns()
  {
    window.location.href='adminhome.php';

  }