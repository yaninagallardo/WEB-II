<div class="box-editar" >
    <div id="box-editarGen" class="hidden-windows">
    
        <label class="titulo-editarGen">EDITAR GÉNERO</label>
        
        {* EDITAR GENERO *}
        <form action="editarGenero" method="POST" class='form-editarGen' required>
            <input type="hidden" name="id" class="id-hidden">
            <input type="text" name="genero" placeholder="Género"  class="input-editar" required>
        <div class="btns-guardar-cancelar">
                <input type="submit" value="Guardar" class="btn-guardar">
            </form>
            <button  class="btn-cancelar">Cancelar</button>
        </div>
   </div>
</div>