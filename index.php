<?php require "partials/header.php" ?>

<div class="container mt-5">
    <div class="col-6 mx-auto">
        <h1>Bienvenidos A LA CLASE DE ESI: </h1>
        <form action="def-palabra.php" method="post"></form>
        <label for="palabra">Elige una palabra</label>
        <select name="palabra" id="palabra"> 
            <option value="autocuidado">Autocuidado</option>
            <option value="respeto">Respeto</option>
            <option value="amistad">Amistad</option>

        </select>
<button type="button" class="btn btn-primary">Ver</button>
        </form>
    </div>
</div>

<?php require "partials/footer.php" ?>