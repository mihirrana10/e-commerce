<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<meta charset="utf-8">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>CodePen - Responsive Tables using LI</title>
<link rel="stylesheet" media="screen" href="https://static.codepen.io/assets/fullpage/fullpage-4de243a40619a967c0bf13b95e1ac6f8de89d943b7fc8710de33f681fe287604.css" />
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic" rel="stylesheet" />
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<title>CodePen - Responsive Tables using LI</title>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
<style>
    html { font-size: 15px; }
    html, body { margin: 0; padding: 0; min-height: 100%; }
    body { height:100%; display: flex; flex-direction: column; }
    .referer-warning {
      background: black;
      box-shadow: 0 2px 5px rgba(0,0,0, 0.5);
      padding: 0.75em;
      color: white;
      text-align: center;
      font-family: 'Lato', 'Lucida Grande', 'Lucida Sans Unicode', Tahoma, Sans-Serif;
      line-height: 1.2;
      font-size: 1rem;
      position: relative;
      z-index: 2;
    }
    .referer-warning h1 { font-size: 1.2rem; margin: 0; }
    .referer-warning a { color: #56bcf9; } /* $linkColorOnBlack */
  </style>
</head>
<body class="">
<div class="referer-warning">
<h1>⚠️ Do not enter passwords or personal information on this page. ⚠️</h1>
This is a code demo posted by a web developer on <a href="https://codepen.io">codepen.io</a>.
<br />
A referer from CodePen is required to render this page view, and your browser is not sending one (<a href="https://blog.codepen.io/2017/10/05/regarding-referer-headers/" target="_blank">more details</a>).</h1>
</div>
<div id="result-iframe-wrap" role="main">
<iframe id="result" srcdoc="
<!DOCTYPE html>
<html lang=&quot;en&quot; >

<head>

  <meta charset=&quot;UTF-8&quot;>
  
<link rel=&quot;apple-touch-icon&quot; type=&quot;image/png&quot; href=&quot;https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png&quot; />
<meta name=&quot;apple-mobile-web-app-title&quot; content=&quot;CodePen&quot;>

<link rel=&quot;shortcut icon&quot; type=&quot;image/x-icon&quot; href=&quot;https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico&quot; />

<link rel=&quot;mask-icon&quot; type=&quot;&quot; href=&quot;https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg&quot; color=&quot;#111&quot; />


  <title>CodePen - Responsive Tables using LI</title>
  <link href=&quot;https://fonts.googleapis.com/css?family=Lato&quot; rel=&quot;stylesheet&quot;>
  <link rel=&quot;stylesheet&quot; href=&quot;https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css&quot;>

  
  
<style>
body {
  font-family: 'lato', sans-serif;
}

.container {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
}

h2 {
  font-size: 26px;
  margin: 20px 0;
  text-align: center;
}
h2 small {
  font-size: 0.5em;
}

.responsive-table li {
  border-radius: 3px;
  padding: 25px 30px;
  display: flex;
  justify-content: space-between;
  margin-bottom: 25px;
}
.responsive-table .table-header {
  background-color: #95A5A6;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 0.03em;
}
.responsive-table .table-row {
  background-color: #ffffff;
  box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
}
.responsive-table .col-1 {
  flex-basis: 10%;
}
.responsive-table .col-2 {
  flex-basis: 40%;
}
.responsive-table .col-3 {
  flex-basis: 25%;
}
.responsive-table .col-4 {
  flex-basis: 25%;
}
@media all and (max-width: 767px) {
  .responsive-table .table-header {
    display: none;
  }
  .responsive-table li {
    display: block;
  }
  .responsive-table .col {
    flex-basis: 100%;
  }
  .responsive-table .col {
    display: flex;
    padding: 10px 0;
  }
  .responsive-table .col:before {
    color: #6C7A89;
    padding-right: 10px;
    content: attr(data-label);
    flex-basis: 50%;
    text-align: right;
  }
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage(&quot;resize&quot;, &quot;*&quot;);
  }
</script>


</head>

<body translate=&quot;no&quot; >
  <div class=&quot;container&quot;>
  <h2>Responsive Tables Using LI <small>Triggers on 767px</small></h2>
  <ul class=&quot;responsive-table&quot;>
    <li class=&quot;table-header&quot;>
      <div class=&quot;col col-1&quot;>Job Id</div>
      <div class=&quot;col col-2&quot;>Customer Name</div>
      <div class=&quot;col col-3&quot;>Amount Due</div>
      <div class=&quot;col col-4&quot;>Payment Status</div>
    </li>
    <li class=&quot;table-row&quot;>
      <div class=&quot;col col-1&quot; data-label=&quot;Job Id&quot;>42235</div>
      <div class=&quot;col col-2&quot; data-label=&quot;Customer Name&quot;>John Doe</div>
      <div class=&quot;col col-3&quot; data-label=&quot;Amount&quot;>$350</div>
      <div class=&quot;col col-4&quot; data-label=&quot;Payment Status&quot;>Pending</div>
    </li>
    <li class=&quot;table-row&quot;>
      <div class=&quot;col col-1&quot; data-label=&quot;Job Id&quot;>42442</div>
      <div class=&quot;col col-2&quot; data-label=&quot;Customer Name&quot;>Jennifer Smith</div>
      <div class=&quot;col col-3&quot; data-label=&quot;Amount&quot;>$220</div>
      <div class=&quot;col col-4&quot; data-label=&quot;Payment Status&quot;>Pending</div>
    </li>
    <li class=&quot;table-row&quot;>
      <div class=&quot;col col-1&quot; data-label=&quot;Job Id&quot;>42257</div>
      <div class=&quot;col col-2&quot; data-label=&quot;Customer Name&quot;>John Smith</div>
      <div class=&quot;col col-3&quot; data-label=&quot;Amount&quot;>$341</div>
      <div class=&quot;col col-4&quot; data-label=&quot;Payment Status&quot;>Pending</div>
    </li>
    <li class=&quot;table-row&quot;>
      <div class=&quot;col col-1&quot; data-label=&quot;Job Id&quot;>42311</div>
      <div class=&quot;col col-2&quot; data-label=&quot;Customer Name&quot;>John Carpenter</div>
      <div class=&quot;col col-3&quot; data-label=&quot;Amount&quot;>$115</div>
      <div class=&quot;col col-4&quot; data-label=&quot;Payment Status&quot;>Pending</div>
    </li>
  </ul>
</div>
  
  
  
  
  

</body>

</html>
 
" sandbox="allow-downloads allow-forms allow-modals allow-pointer-lock allow-popups allow-presentation  allow-scripts allow-top-navigation-by-user-activation" allow="accelerometer; ambient-light-sensor; camera; encrypted-media; geolocation; gyroscope; microphone; midi; payment; vr" allowTransparency="true" allowpaymentrequest="true" allowfullscreen="true" class="result-iframe">
      </iframe>
</div>
</body>
</html>
