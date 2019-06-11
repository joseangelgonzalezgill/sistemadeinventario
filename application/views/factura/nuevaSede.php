<div class="col-md-8">
    <?= form_open("sedes/guardar", array("role" => "form")) ?>
    <div class="form-group">
        <label>
            Nombre
        </label>
        <input type="text" name="nombre" class="form-control" autofocus="autofocus"/>
    </div>

    <div class="form-group">
        <label>
            Direccion
        </label>
        <input type="text" name="direccion" class="form-control"/>
    </div>

    <div class="form-group">
        <label>
            Telefono
        </label>
        <input type="text" name="telefono" class="form-control"/>
    </div>

    <div class="form-group">
        <label>
            E-Mail
        </label>
        <input type="text" name="email" class="form-control"/>
    </div>
    <div class="form-group">
        <select name="empresa_id" class="form-control">
            <?php foreach ($empresas as $value) { ?>
                <option value="<?= $value->id ?>">
                    <?= $value->nombre ?>
                </option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-0 col-lg-10">
            <button type="submit" class="btn btn-default">Guardar</button>
            <button type="reset" class="btn btn-default">Resetear</button>
        </div>
    </div>

</form>
</div>