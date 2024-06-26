<?php $this->include('panel.layouts.header') ?>

<form action="<?php $this->url('article/update') ?>" method="POST">
    <section class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" id="title" placeholder="title ...">
    </section>
    <section class="form-group">
        <label for="cat_id">Category</label>
        <select  name="cat_id"  class="form-control" id="cat_id">
            <option value="1">Sport</option>
            <option value="2">News</option>
        </select>
    </section>
    <section class="form-group">
        <label for="body">Body</label>
        <textarea name="body" class="form-control" id="body" rows="5" placeholder="body ..."></textarea>
    </section>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<?php $this->include('panel.layouts.footer') ?>