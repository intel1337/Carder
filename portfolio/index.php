<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Portfolio</title>
</head>

<body>
    <header id="header">

        <div id="logo" class="logo">
            logo
      
            
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="mainicon">
            <div class="menu" id="menu">
                <i class="bi bi-list"></i>
            </div>
        </label>
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Skills</a>
            <a href="#">Portfolio</a>
            <a href="#">Contact</a>
        </nav>
    </header>
    <section>
        <div class="main">
            <div class="Information">
            <form action="./form.php">
            <h3 id="user-greeting">Je suis <?= $_POST['prenom']; ?> <?= $_POST['name'];?></h3>
            <h1 id="metier"><?= $_POST['work']; ?></h1>
            <p id="desc"><?= $_POST['description']; ?></h1></p>
                <div class="social">
                    <a href="https://github.com/CHAOUCHI"><i class="bi bi-github"></i></a>
                    <a href="https://www.youtube.com/channel/UCV2rGiTHvgH03KZ-jrYZMTA"><i class="bi bi-youtube"></i></a>
                    <a href="https://t.me/web_devs_i"><i class="bi bi-telegram"></i></a>
                    <a href="https://www.linkedin.com/in/vikash-web-dev/"><i class="bi bi-linkedin"></i></a>
                </div>
            </form>
                <button onclick="report(a)" class="cv-btn">Download</button>
            </div>
                <div class="blue-bg-1">
                   <div class="white-bg">
                        <div class="blue-bg-2">
                            <img src="<?=$_POST['image']?>" alt="Massinissa Chaouchi pic">
                        </div>
                   </div>
                </div>
                
                <!--<div class="test">
                <p>Screenshot tester</p>
    <button onclick="report()" class="caca">Take screenshot</button>
    <div class="container" id="containerr">
        <img width="75%" class="screen" style="display:none">
        <a id="dlink" href="#" style="display:none;">download link</a>
    </div>-->

<script>
    function report() {
        var d = new Date();
        var n = d.getTime();
        let region = document.querySelector("body"); // whole screen
        html2canvas(region, {
            onrendered: function (canvas) {
                let pngUrl = canvas.toDataURL(); // png in dataURL format

                let img = document.querySelector(".screen");
                img.src = pngUrl;
                imgs = new Image();
                imgs.id = "containerr";
                imgs.src = img.src;
                //save file
                if (window.navigator.msSaveBlob) {
                    //IE11 & Edge 
                    var blobdata = canvas.msToBlob();
                    window.navigator.msSaveBlob(blobdata, n + ".png");
                }
                else {
                    //Other browsers 
                    canvas.toBlob(function (blob) {                           
                        $("#dlink").attr("href", window.URL.createObjectURL(blob));
                        $("#dlink").attr("download", n + ".png")
                        $("#dlink")[0].click();
                    });                       
                } 
            }
        });            
    }
</script>
                </div>
            </div>
        </div>
    </section>
</html>

