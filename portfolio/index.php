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
        <a href="../index.html"><img src="./logo.png" alt="" style="display: flex; width: 200px; height: 200px; position: relative; padding-right: 500px; bottom: 50px; "></a>
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="mainicon">
            <div class="menu" id="menu">
                <i class="bi bi-list"></i>
            </div>
        </label>
        <nav>
            <a href="../index.html">Home</a>
            <a href="./skills.php">Skills</a>
            <a href="./contact.html">Contact</a>
        </nav>
    </header>
    <section>
        <div class="main">
            <div class="Information">
        <form action="./form.php">
            <h3 id="user-greeting">Je suis <?= $_POST['prenom']; ?> <?= $_POST['name'];?></h3>
            <h1 id="metier"><?= $_POST['work']; ?></h1>
            <p id="desc"><?= $_POST['description']; ?></h1></p>
        </form>
        <form action="./form.php">
            <div class="social">
                <a href="<?= $_POST['hiddenInput4']; ?>"><i class="bi bi-github"></i></a>
                <a href="<?= $_POST['hiddenInput2']; ?>"><i class="bi bi-instagram"></i></a>
                <a href="<?= $_POST['hiddenInput']; ?>"><i class="bi bi-twitter"></i></a>
                <a href="<?= $_POST['hiddenInput3']; ?>"><i class="bi bi-linkedin"></i></a>
            </div>
        </form>
            </div>
                <div class="blue-bg-1">
                   <div class="white-bg">
                        <div class="blue-bg-2">
                            <img src="<?=$_POST['avatar']?>" alt="User_Pic">
                        </div>
                   </div>
                </div>
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

