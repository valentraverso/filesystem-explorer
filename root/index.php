<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Welcome</title>
</head>
<body>
    <header>
        <nav id="navigation">
            <div id="logo"> 
                <img src="../image/logoNew.png" alt="Logo" id="logo-panel">
            </div>
            <div id="search"> 
                <form method="get" action="../search.php">
            <input type="text" name="q" class="search" placeholder="Search">
</form>
            </div>
            <div id="user"> 
            <a href="../assets/close-session.php">
                <button>Sign out</button>
            </a>
            </div>
</nav>
</header>
<section class="pop-up-file hidden">
            <div class="close-popup-file">
                <i class="fa-solid fa-xmark" id="close-popup"></i>
                <i class="fa-solid fa-trash" id="delete-file"></i>
            </div>
            <div id="view-content"> </div>
            <div class="cover"></div>
</section>
<main>

<section id="folders">
    <p> My folders </p>
    <br><br>
<div id="folder">

    <?php

forEach (glob("*") as $name){
if(is_dir($name) && $name !== "index.php"){
    echo '<li><div class="select-folder" name-folder="'.$name .'"><img src="../image/folder.ico" alt="image folder" class="imageFolder" name-folder="'.$name .'"> ' . $name . '</div><span class="modify-name-folder"><i class="fa-solid fa-pen" actual-folder="'.$name .'"></i></span><span class="delete-folder"><i class="fa-solid fa-trash" id="delete-folder" actual-folder="'.$name .'"></i></span></li>'; 
}
}

?>
<div>
<input id="folder-name" type="text" placeholder="New folder">
<button id="button-folder-name">Create new folder</button>
</div>
</div>

<br><br>
<div id="trash-container">
<i class="fa-solid fa-trash"></i><h2 id="trash-p">Trash</p>
</div>

</section>


<section id="files">
    <p> My files </p>
    <div id="open-folder">
    </div>
<form method="post" action="../assets/upload-file.php" enctype="multipart/form-data">
    <input type="file" name="uploadFile" class="upload-new-file">
    <input type="hidden" name="uploadFolder" value="">
    <br>
    <button id="upload-file">Upload new file</button>
</form>
</section>



<script src="../assets/js/app.js"></script>
</body>
</html>