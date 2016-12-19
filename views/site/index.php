<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<form>
    <label for="title">Filter by title:</label>
    <input type="text" name="title" id="title" placeholder="Title" class="form-control"<?php if (isset($title)): ?> value="<?php echo $title; ?>"<?php endif; ?>>
    <label for="description">Filter by description:</label>
    <input type="text" name="description" id="description" placeholder="Description" class="form-control"<?php if (isset($description)): ?> value="<?php echo $description; ?>"<?php endif; ?>>
    <input type="submit" class="btn btn-primary">
</form>
<table class="table table-striped">
    <thead>
    <tr>
        <td>id</td>
        <td>title</td>
        <td>description</td>
        <td>created at</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $item): ?>
        <tr>
            <td><?php echo $item->id; ?></td>
            <td><?php echo $item->title; ?></td>
            <td><?php echo $item->description; ?></td>
            <td><?php echo (new DateTime())->setTimestamp($item->created_at)->format('d.m.Y H:i:s'); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
