<h1>Thêm category trong dự án </h1>
<form action="<?php echo route('categories.add') ?>" method="post">
    <div>
        <input type="text" name="category_name" placeholder="Thêm category" value="<?php echo old('category_name')  ?>">
    </div>
    <?php echo csrf_field() ?>
    <!--<input type="hidden" name="_token" value="<?php echo csrf_token()  ?>">-->
    <button type="submit">Thêm category</button>
</form>