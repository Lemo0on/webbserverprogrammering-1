<!--
/* Detta är en sidan som presenterar de tjänster som erbjuds (demo-webbplatsen för läroboken Webbutveckling 1)
 *
 * Det tänkta UF-företaget Läxhjälpen
 * @version pre-alpha
 * @author Lars Gunther <gunther@keryx.se>, Lena Bäckstedt <lillan@kaxigt.com>
 */
-->
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8" />
  <title>Våra tjänster - Läxhjälpen</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- base href="/" / --><!-- Påverkar #-länkarna -->
  <link href='https://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' />
  <link href="css/laxhjalpen.css" title="Finished" rel="stylesheet" />
  <link rel="stylesheet" href="themes/default/default.css" media="screen" />
  <link rel="stylesheet" href="css/nivo-slider.css" media="screen" />
</head>
<body class="subpage">
  <header>
    <div class="hwrap">
      <a href="./"><img class="logo" alt="Startsidan" src="img/laxlogo.png" /></a>
      <h1>Läxhjälpen: <span>Våra tjänster</span></h1>
    </div>
   <hr class="tagline">
  </header>
  <nav>
    <ul class="menu">
      <li><a href="om-oss.html">Vilka vi är &#x3020;</a></li>
      <li><a href="arbeten.html">Vad vi gör &#x2318;</a></li>
      <li><a href="blog.php">Blogg &#x272A;</a></li>
      <li><a href="contact.php">Kontakt &#x260E;</a></li>
    </ul>
  </nav>
  <div role="main">
    <div class="blockslider theme-default">
      <!-- div class="" -->
        <div id="slider" class="nivoSlider">
          <a href="#lstuga"><img src="img/1.png" alt="" title="Läxstuga med dig och dina kompisar" /></a>
          <a href="#skypeh"><img src="img/2.png" alt="" title="Hjälp via Skype" /></a>
          <a href="#mailhp"><img src="img/3.png" alt="" title="Hjälp via email" /></a>
          <a href="#videos"><img src="img/4.png" alt="" title="Vi har också videolektioner" /></a>
        </div>
      <!-- /div -->
    </div>
    <table class="borderless services">
      <thead>
        <tr>
          <th>Våra tjänster</th>
          <th>Pris</th>
        </tr>
      </thead>
      <tbody>
        <tr id="lstuga">
          <td>Läxstuga för 3-8 deltagare</td>
          <td>500 kr/tim</td>
        </tr>
        <tr id="skypeh">
          <td>Individuell hjälp via Skype</td>
          <td>300 kr/tim</td>
        </tr>
        <tr id="mailhp">
          <td>Hjälp via mejl</td>
          <td>10 kr/mejl</td>
        </tr>
        <tr id="videos">
          <td>Åtkomst till våra videos</td>
          <td>20 kr/månad</td>
        </tr>
      </tbody>
    </table>
  </div>
  <footer>
    <small>&copy; Lars Gunther och Thelin AB</small>
  </footer>
  <script src="https://code.jquery.com/jquery-2.0.3.min.js"></script>
  <script src="scripts/jquery.nivo.slider.pack.js"></script>
  <script>
    $('#slider').nivoSlider();
  </script>
</body>
</html>
