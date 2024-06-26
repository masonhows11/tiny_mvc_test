<?php $this->include('panel.layouts.header') ?>

<form action="<?php $this->url('article/store') ?>" method="POST">
    <section class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="title ...">
    </section>
    <section class="form-group">
        <label for="cat_id">Category</label>
        <select class="form-control" id="cat_id" name="cat_id">
            <?php foreach($categories as $category): ?>
            <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
            <?php endforeach ?>
        </select>
    </section>
    <section class="form-group">
        <label for="body">Body</label>
        <textarea name="body"  class="form-control" id="body" rows="5" placeholder="body ..."></textarea>
    </section>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

<?php $this->include('panel.layouts.footer') ?>