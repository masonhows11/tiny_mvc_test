<?php $this->include('panel.layouts.header') ?>

<form action="<?php $this->url('article/update/'.$article['id']) ?>" method="POST">

    <section class="form-group">
        <label for="title">Title</label>
        <input name="title" value="<?php echo $article['title'] ?>" type="text" class="form-control" id="title" placeholder="title ...">
    </section>

    <section class="form-group">
        <label for="cat_id">Category</label>
        <select  name="cat_id"  class="form-control" id="cat_id">
            <?php foreach($categories as $category): ?>
            <option value="<?php echo $category['id'] ?>" <?php if($article['cat_id'] == $category['id'])  echo 'selected';  ?> >
                <?php echo $category['name'] ?>
            </option>
            <?php endforeach ?>
        </select>
    </section>

    <section class="form-group">
        <label for="body">Body</label>
        <textarea  name="body" class="form-control" id="body" rows="5" placeholder="body ..."><?php echo $article['body'] ?></textarea>
    </section>

    <button type="submit" class="btn btn-primary">Update</button>

</form>

<?php $this->include('panel.layouts.footer') ?>