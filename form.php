<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="form.css">
    <title>Profile Form</title>
</head>
<body>
<?php
        $prenom = '';
        $name = '';
        $description = '';
        $work = '';
        $image = '';
        $hiddenInput4 = '';
        $hiddenInput3 = '';
        $hiddenInput2 = '';
        $hiddenInput = '';
        ?>

    <div class="container">
        <form method="post" id="uploadimage" action="./portfolio/index.php">
            <label for="image">Photo</label>
            <input type="text" name="avatar" id="avatar"  style="width: 90%; height: 30px; margin-bottom: 10px; padding: 10px; border: 1px solid #ccc;"><br>

            <label for="prenom">Prénom</label><br>
            <input method="post" type="text" id="prenom" name="prenom" style="width: 89%; height: 30px; margin-bottom: 10px; padding: 10px; border: 1px solid #ccc;"><br>
            
            <label for="name">Nom:</label>
            <input method="post" type="text" id="name" name="name" style="width: 90%; height: 30px; margin-bottom: 10px; padding: 10px; border: 1px solid #ccc;"><br>
            
            <label for="work">Métier :</label>
            <input method="post" type="text" id="work" name="work" style="width: 90%; height: 30px; margin-bottom: 10px; padding: 10px; border: 1px solid #ccc;"><br>
            
            <label for="description">Description:</label>
            <textarea method="post" id="description" name="description" style="width: 90%; height: 100px; overflow: hidden ;margin-bottom: 10px; padding: 10px; border: 1px solid #ccc; border-radius: 40px;"></textarea><br>
            
            <input type="text" name="hiddenInput" id="hiddenInput" placeholder="Entrez votre lien..." style="display: none; width: 60%;">
            <input type="text" name="hiddenInput2" id="hiddenInput2" placeholder="Entrez votre lien..." style="display: none; width: 60%;">
            <input type="text" name="hiddenInput3" id="hiddenInput3" placeholder="Entrez votre lien..." style="display: none; width: 60%;">
            <input type="text" name="hiddenInput4" id="hiddenInput4" placeholder="Entrez votre lien..." style="display: none; width: 60%;">  
            
            <div class="button">
                <input type="submit" value="Submit" id="submit" formaction="./portfolio/index.php"/>
            </div>
        </form>
        
        <div class="social-icons">
            <button id="showInputBtn" style="background-color: transparent; border: none; cursor: pointer"><i class="fab fa-twitter"></i></button>
            <button id="showInputBtn2" style="background-color: transparent; border: none; cursor: pointer"><i class="fab fa-instagram"></i></button>
            <button id="showInputBtn3" style="background-color: transparent; border: none; cursor: pointer"><i class="fab fa-linkedin"></i></button>
            <button id="showInputBtn4" style="background-color: transparent; border: none; cursor: pointer"><i class="fab fa-github"></i></button>
        </div><br>
        <script>
        document.getElementById('showInputBtn').addEventListener('click', function() {
            let input = document.getElementById('hiddenInput');
            if (input.style.display === 'none') {
                input.style.display = 'block';
            } else {
                input.style.display = 'none';
            }
        });

        document.getElementById('showInputBtn2').addEventListener('click', function() {
            let input = document.getElementById('hiddenInput2');
            if (input.style.display === 'none') {
                input.style.display = 'block';
            } else {
                input.style.display = 'none';
            }
        });

        document.getElementById('showInputBtn3').addEventListener('click', function() {
            let input = document.getElementById('hiddenInput3');
            if (input.style.display === 'none') {
                input.style.display = 'block';
            } else {
                input.style.display = 'none';
            }
        });

        document.getElementById('showInputBtn4').addEventListener('click', function() {
            let input = document.getElementById('hiddenInput4');
            if (input.style.display === 'none') {
                input.style.display = 'block';
            } else {
                input.style.display = 'none';
            }
        });
    </script>
    </div>
</body>
</html>