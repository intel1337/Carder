<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Profile Form</title>
    <style>
        body {
            background-image: url(./images/paul-volkmer-qVotvbsuM_c-unsplash.jpg);
            background-size: cover;
            color: #fff;
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            padding: 30px;
            text-align: center;
        }

        input[type="text"],
        textarea {
            width: 85%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 50px;
            background-color: #ffffff;
            color: #000000;
            font-size: 25px;
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
        }

        .button input[type="submit"] {
            border-radius: 100px;
            background: #fff;
            color: #000;
            border-color: #fff;
            padding: 10px 20px;
            border: 10px;
            border-radius: 50px;
            font-size:23px ;
            cursor: pointer;
        }

        .button:hover {
            background: #ccc;
            color: #000;
            border: 10px;
            border-radius: 50px;
            cursor: pointer;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .social-icons i {
            font-size: 24px;
            margin: 0 10px;
            color: #fff;
        }
        
        #frm {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        #profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50px;
            border: 2px solid #fff;
            margin: 10px;
            padding: 10px;
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $prenom = '';
        $name = '';
        $description = '';
        $work = '';
        $image = '';
        ?>
        <form method="POST" id="uploadimage">
            <label for="image">Photo</label>
                <input type="text" name="image" id="image" required>

        <label for="prenom">Prénom</label><br>
        <input method="post" type="text" id="prenom" name="prenom" required style="width: 89%; height: 30px; margin-bottom: 10px; padding: 10px; border: 1px solid #ccc;"><br>
          
        <label for="name">Nom:</label>
          <input method="post" type="text" id="name" name="name" required style="width: 90%; height: 30px; margin-bottom: 10px; padding: 10px; border: 1px solid #ccc;"><br>
        
          <label for="work">Métier :</label>
          <input method="post" type="text" id="work" name="work" required style="width: 90%; height: 30px; margin-bottom: 10px; padding: 10px; border: 1px solid #ccc;"><br>
        
          <label for="description">Description:</label>
          <textarea method="post" id="description" name="description" required style="width: 90%; height: 100px; margin-bottom: 10px; padding: 10px; border: 1px solid #ccc; border-radius: 40px;"></textarea><br>

        <div class="button">
        <input type="submit" value="Submit" id="submit" formaction="./portfolio/index.php"/>


        </div>
        
          <div class="social-icons">
              <a href=""><i class="fab fa-twitter"></i></a>
              <a href=""><i class="fab fa-instagram"></i></a>
              <a href=""><i class="fab fa-linkedin"></i></a>
              <a href=""><i class="fab fa-github"></i></a>
        </div><br>
    </form>

    </div>
</body>
</html>