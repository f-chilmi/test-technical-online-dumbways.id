<?php include "templates/header.php"; ?><h2>Add Hero</h2>
<div id="container" class="container">
    <form action=" <?php echo BASE_URL."proses_create.php"; ?>" method = "POST">
        <div class="element-form">
            <label>id</label>
            <span><input type = "text" name="id" /></span>
        </div>
        <div class="element-form">
            <label>Name</label>
            <span><input type = "text" name="name" /></span>
        </div>
        <div class="element-form">
            <label>Type</label>
            <span><input type = "text" name="type" /></span>
        </div>
        <div class="element-form">
            <label>Photo</label>
            <span><input type = "text" name="photo" /></span>
        </div>
        <div class="element-form">
            <label></label>
            <span><input type = "submit" name="create" /></span>
        </div>
    </form>
</div>
<?php include "templates/footer.php"; ?><h2></h2>