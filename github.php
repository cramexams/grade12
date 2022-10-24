<!DOCTYPE html>
<html lang="en">
<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123711353-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123711353-2');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>K53-SA</title>
    <!--<link rel="stylesheet" type="text/css" href="./css/style.css">-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" type="image/ico" href="./img/images.png">
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon"  href="./images.png">
    <meta name="apple-mobile-web-app-status-bar" content="#000000">
</head>
<body>
    <div id="particles-js">
        <div class="btext">
            <h1>GRADE 12</h1>
            <p>November 2022</p>
            <p>Multiple Choice Questions</p>
            <a href="./home_images/login.php" class="btn" id="login">Start...</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        particlesJS.load('particles-js', 'particles.json',
        function(){
            console.log('particles.json loaded...')
        })
    </script>
    <div id="snackbars">     
    </div>  
</body>
</html>
<script type="text/javascript">
    var x = document.getElementById("snackbars");
    x.className = "show";
    setTimeout(function(){ 
      x.className = x.className.replace("show", "");
                          }, 3000);
    document.getElementById("snackbars").innerHTML = "BETA version 1.0.1";
    </script>
    <script type="text/javascript">
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
     </script>
     <script type="text/javascript">
        const butInstall = document.getElementById('butInstall');
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', function() {
        navigator.serviceWorker.register('sw.js').then(function(registration) {
          // Registration was successful
          console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
          // registration failed :(
          console.log('ServiceWorker registration failed: ', err);
        });
      });
    }
    let deferredPrompt;
    window.addEventListener('beforeinstallprompt', (event) => {
      console.log('👍', 'beforeinstallprompt', event);
      // Stash the event so it can be triggered later.
      window.deferredPrompt = event;
    });
    window.addEventListener('appinstalled', (event) => {
      console.log('👍', 'appinstalled', event);
    });
</script>