<form action="<?php echo APP_URL; ?>categories/edit" method="POST">
    <input type="hidden" name="id" value="<?php echo $category['id']; ?>">
    <p><label for="new_name">Nombre de Categoria nueva:</label>
    <input type="text" name="new_name"></p>
    <p><input type="submit" value="update"></p>
</form>