

<h2>TABLA DE TAREAS</h2>
    <form method="POST" action="add" class="my-4">
<div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label>titulo</label>
                    <input type="text" name="title" class="form-control">
                </div>
            </div>
       
        <div class="col-3">
            <div class="form-group">
                <label>Prioridad</label>
                <select name="priority"  class="form-control" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
</div>
<div class="form-group">
        <label>Descripcion</label>
        <textarea name="description" class="form-control" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary mt-2" name="btn">Guardar</button>
    </form>
       