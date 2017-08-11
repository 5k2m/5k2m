  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width">
      <meta name="description" content="Stock, Portfolio">
      <meta name="keywords" content="Stock, Portfolio">
      <meta name="author" content="Shyam Mohapatra">
      <title>5K2M Maker | Welcome</title>
      <link rel="stylesheet" href="./css/style.css">
      <?php include('contact_process.php'); ?>
  </head>

    <body>
        <header>
          <div class="container">
            <div id="branding">
              <h1>
                <span class="highlight">5K2M</span> Maker
              </h1>
            </div>
            <nav>
              <ul>
                <li>
                  <a href="index.html">Home</a>
                </li>
                <li>
                  <a href="closed_trade.html">Closed Trades</a>
                </li>
                <li>
                  <a href="current_holding.html">Current Holding</a>
                </li>
                <li class="current">
                  <a href="contact.php">Contact</a>
                </li>
              </ul>
              
            </nav>
          </div>
        </header>


        <section id="main">
          <div class="container">
            <article id="main-col">
              <h1 class="page-title">Contact us today, and get reply within 24 hours!</h1>
              
              <aside id="contactarea">
                <div class="dark">

              <form id="contact" action=""
                <?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
         
                <fieldset>
                  <input placeholder="Your name" type="text" name="name" value=""<?= $name ?>" tabindex="1" autofocus>
                  <span class="error">
                    <?= $name_error ?>
                  </span>
                </fieldset>
                <fieldset>
                  <input placeholder="Your Email Address" type="text" name="email" value=""<?= $email ?>" tabindex="2">
                  <span class="error">
                    <?= $email_error ?>
                  </span>
                </fieldset>
                <fieldset>
                  <input placeholder="Your Phone Number" type="text" name="phone" value=""<?= $phone ?>" tabindex="3">
                  <span class="error">
                    <?= $phone_error ?>
                  </span>
                </fieldset>
                <fieldset>
                  <input placeholder="Your Web Site starts with http://" type="text" name="url" value=""<?= $url ?>" tabindex="4" >
                  <span class="error">
                    <?= $url_error ?>
                  </span>
                </fieldset>
                <fieldset>
                  <textarea value=""
                    <?= $message ?>" name="message" tabindex="5">
                  </textarea>
                </fieldset>
                <fieldset>
                  <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
                <div class="success">
                  <?= $success ?>
                </div>
              </form>

                </div>
              </contactarea>
              
            </article>

            
          </div>
        </section>

        <footer>
          <p>5K2M Portfolio Maker, Copyright &copy; 2017</p>
        </footer>
      </body>
    </html>
  
  
  