<html>
<head>
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="/css/stylish-portfolio.css" rel="stylesheet">
    <script>
        function load(){
            setTimeout(timefunction, 2000);
        }
        function timefunction(){
            sessionStorage.setItem('number', "<?php echo $_POST['phone'];?>,");
            //alert(sessionStorage.getItem('number'));
            window.location.replace("/roulettewheel.php");
        }
    </script>
</head>
<body onload="load()">
<section class="services bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 mx-auto">

                <h2> You entered your phone number:  </h2>
                <hr class="small">
                <h3>
                    <?php
                    echo $_POST['phone'];
                    ?>
                </h3>
            </div>
        </div>
    </div>
</section>
</body>
</html>