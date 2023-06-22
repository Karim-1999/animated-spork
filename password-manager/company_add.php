<?php

include('includes/header.php');
include('includes/database.php');
include('includes/functions.php');
secure();



if (isset($_POST['title'])){

    if ($stm = $connect->prepare('INSERT INTO posts (title, content, author, date, `Url-image`) VALUES (?, ?, ?, ?, ? )')){
        
     /*    $stm->bind_param('ssiss', $_POST['title'], $_POST['content'], $_SESSION['id'],  $_POST['date'],$_POST[`Url-image`]); */


        $stm->bind_param('ssiss', $_POST['title'], $_POST['content'], $_SESSION['id'], $_POST['date'], $_POST['Url-image']);


        $stm->execute();
        

        set_message("A new post " . $_SESSION['username'] . " has beed added");
        header('Location: posts.php');
        $stm->close();
        die();

    } else {
        echo 'Could not prepare statement!';
    }


}


?>
<div style="padding-top: 120px;" class="container mt-5 mb-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
        <h1 class="display-1">Add post</h1>
        <form method="post">
                <!-- Username input -->
                <div class="form-outline mb-4">
                    <input type="text" id="title" name="title" class="form-control" />
                    <label class="form-label" for="title">Title</label>
                </div>
                <!-- Content input -->
                <div class="form-outline mb-4">
                    <textarea name="content" id="content" ></textarea>
                </div>
                <!-- Image input -->
                <div class="form-outline mb-4">
                    <input type="text" name="Url-image" id="Url-image" class="form-control" ></input>
                    <label class="form-label" for="Url Image">Url Image</label>
                </div>
                <!-- Date select -->
                <div class="form-outline mb-4">
                <input type="date" id="date"  name="date" class="form-control" />
                <label class="form-label" for="date">Date</label>
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Add post</button>
            </form>
        </div>
    </div>
</div>


<?php
include('includes/footer.php');
?>