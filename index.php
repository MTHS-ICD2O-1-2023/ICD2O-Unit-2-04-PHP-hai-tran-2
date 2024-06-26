<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="The area of triangle program, in PHP" />
  <meta name="keywords" content="mths, ICD2O" />
  <meta name="author" content="Hai Tran" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_blue-green.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Area of triangle webpage, in php</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area and of Triangle, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="image">
        <img src="./images/area_of_trinagle.png" alt="area of trinagle image" />
      </div>
      <br />
      <form action="answer.php" method="POST">
        <p>Enter the height and base in cm</p>
        <!-- Numeric Textfield with Floating Label -->
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="height-of-triangle">
          <label class="mdl-textfield__label" for="height-of-triangle">Height of triangle (cm)</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
      <br />
      <!-- Numeric Textfield with Floating Label -->
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="base-of-triangle">
        <label class="mdl-textfield__label" for="base-of-triangle">Base of triangle (cm)</label>
        <span class="mdl-textfield__error">Input is not a number!</span>
      </div>
      <br />
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
        Calculate
      </button>
      </form>
    </main>
  </div>
</body>

</html>