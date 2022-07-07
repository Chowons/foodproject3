<?php 

    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./images/anya.png" type="image/x-icon">
  <title>About | Shaif's Cuisine</title>
  <link rel="stylesheet" href="./reset.css">
  <link rel="stylesheet" href="./globalStyles.css">
  <link rel="stylesheet" href="./components.css">
  <!-- aos library css  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="./about.css">
</head>

<body>
  <!-- Nav Section -->
  <div class="nav">
    <div class="container">
      <div class="nav__wrapper">
        <a href="./index.html" class="logo">
          <img src="./images/logo.svg" alt="shaif's cuisine">
        </a>
        <nav>
          <div class="nav__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-menu">
              <line x1="3" y1="12" x2="21" y2="12" />
              <line x1="3" y1="6" x2="21" y2="6" />
              <line x1="3" y1="18" x2="21" y2="18" />
            </svg>
          </div>
          <div class="nav__bgOverlay"></div>
          <ol class="nav__list">
            <div class="nav__close">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-x">
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
              </svg>
            </div>
            <div class="nav__list__wrapper">

            <li><a class="nav__link" href="./user.php">Home</a></li>
              <li><a class="nav__link" href="./north1.php">ภาคเหนือ</a></li>
              <li><a class="nav__link" href="./northeast1.php">ภาคอีสาน</a></li>
              <li><a class="nav__link" href="./middle1.php">ภาคกลาง</a></li>
              <li><a class="nav__link" href="./south1.php">ภาคใต้</a></li>
              <li><a class="nav__link" href="./about1.php">เกี่ยวกับ</a></li>
              <li><a class="nav__link" href="./contact1.php">Contact</a></li>
                <li><div class="btn primary-btn">
                        <?php 

                            if (isset($_SESSION['user_login'])) {
                                $user_id = $_SESSION['user_login'];
                                $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
                                $stmt->execute();
                                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                            }
                        ?>
                        
                        <a class="btn primary-btn" href="./home.php">Logout</a>
                        
                    </div>
                    
                </li>
            </div>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- End Nav Section -->
  <!-- Our Story Section -->
  <section id="ourStory" data-aos="fade-up">
    <div class="container">
      <div class="ourStory__wrapper">

        <div class="ourStory__img">
          <img src="./images/ourStoryImg.png" alt="shaif's cuisine">
        </div>
        <div class="ourStory__info">
          <h3 class="ourStory__title">
            Our Story
          </h3>
          <p class="ourStory__subtitle">
            It's all started since 1998
          </p>
          <p class="ourStory__text">
            Welcome to Shaif's Cuisine. We take pride in delivering warm, friendly service and creating mouth-watering
            culinary delights for all. Using only the freshest locally sourced ingredients, we’ll ensure you have a
            dining
            experience to remember.
            <br><br>
            Since 1998, we are the perfect place for a romantic meal for two, a catch-up with friends, family parties,
            business meetings, and bringing loved ones together. With comfortable surroundings, affordable prices, and
            seating for up to 65 guests, we can cater for all occasions.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Our Story Section -->
  <!-- Our Goals -->
  <section id="ourGoals" data-aos="fade-down">
    <div class="container">
      <div class="ourGoals__info">
        <h3 class="ourGoals__title">
          Our Goals
        </h3>
        <p class="ourGoals__text">
          We shall sell delicious and remarkable food and beverages that meet the highest quality, freshness, and
          seasonality criteria while combining modern-creative and classic cooking traditions. By showcasing warmth,
          graciousness, efficiency, skill, professionalism, and integrity in our work, we will continually serve our
          consumers with exceptional service. To have every customer who comes through our doors leave impressed by
          their experience at Shaif's Cuisine and excited to come back again.
        </p>
      </div>
      <div class="ourGoals__imgs__wrapper" data-aos="fade-up">
        <div class="ourGoals__img1">
          <img src="./images/ourGoals_img1.png" alt="kitchen img">
        </div>
        <div class="ourGoals__img2">
          <img src="./images/ourGoals_img2.png" alt="kitchen img">
        </div>
        <div class="ourGoals__img3">
          <img src="./images/ourGoals_img3.png" alt="kitchen img">
        </div>
      </div>
    </div>
  </section>
  <!-- End Our Goals -->
  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__col1">
          <div class="footer__logo">
            <img src="./images/logo.svg" alt="shaif's cuisine">
          </div>
          <p class="footer__desc">
            Fresh and delicious traditional Bangladeshi food to delight the whole family.
          </p>
          <div class="footer__socials">
            <h4 class="footer__socials__title">Follow us</h4>
            <ol class="footer__socials__list">
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-facebook">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-instagram">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-twitter">
                    <path
                      d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                  </svg>
                </a>
              </li>
            </ol>
          </div>
        </div>
        <div class="footer__col2">
          <h3 class="footer__text__title">
            Links
          </h3>
          <ol class="footer__text">
            <li>
              <a href="/index.html">Home</a>
            </li>
            <li>
              <a href="./menu.html">Menu</a>
            </li>
            <li>
              <a href="./booking.html">Book Table</a>
            </li>
            <li>
              <a href="./about.html">About Us</a>
            </li>
            <li>
              <a href="./contact.html">contact Us</a>
            </li>
            <li>
              <a href="#">Privacy Policy</a>
            </li>
          </ol>
        </div>
        <div class="footer__col3">
          <h3 class="footer__text__title">
            Support
          </h3>
          <ol class="footer__text">
            <li>
              <a href="#">Contact</a>
            </li>
            <li>
              <a href="#">Support Center</a>
            </li>
            <li>
              <a href="#">Feedback</a>
            </li>
          </ol>
        </div>
        <div class="footer__col4">
          <h3 class="footer__text__title">
            Contact
          </h3>
          <ol class="footer__text">
            <li>
              <a href="#">+880123</a>
            </li>
            <li>
              <a href="#">webcifar@gmail.com</a>
            </li>
            <li>
              <a href="#">GEC Circle, Chittagong, Bangladesh</a>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </footer>
  <div id="copyright">
    <div class="container">
      <p class="copyright__text">
        © copyright 2021 Shaif’s Cuisine | All rights reserved
      </p>
    </div>
  </div>
  <!-- End Footer -->

  <!-- aos scripts -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <!-- custom scripts -->
  <script src="./main.js"></script>
</body>

</html>