<section class="container">
    <h1>Editar publicationes</h1>
    <form action="?controller=publication&method=update_register" method="POST">
        <input type="hidden" name="id" value="<?= $publications->id ?>">
        <section class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required class="form-control" value="<?= $publication->title ?>">
        </section>
        <section class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" required class="form-control" value="<?= $publication->description?>">
        </section>
        <section class="form-group">
            <label for="url_image">url_image</label>
            <input type="text" name="url_image" id=url_image required class="form-control" value="<?= $publication->url_image ?>">
        </section>
        <section class="form-group">
            <input type="submit" value="Actualizar" class="btn btn-green">
        </section>
    </form>
    
</section>