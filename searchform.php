<form action="<?php echo home_url('/') ?>" method="get" class="form">
    <div class="form-group group-with-button">

        <input type="text" name="s"  value="<?php echo get_search_query() ?>" placeholder="eg. ลาเต้, มอคค่า, คาปู" class="form-control">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
</form>