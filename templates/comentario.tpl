{* ADMIN TAMBIEN PUEDE AGREGAR COMENTARIO?? *}
{if  $user != null }
    <div  class=" show-windows">
{else}
    <div  class="hidden-windows">
{/if}
        <form id="form-comentario" action="insertarComentario" method="post"> 
            <div class="form-comentar">
                <label class="titulo-box">Ingrese su comentario</label>
                <input type="text" name="usuario" value="{$user->id_usuario}" class="hidden-windows">
                 <input type="text" name="serie" value="{$ser->id_serie}" class="hidden-windows">
                <textarea type="text" name="comentario" class="input-comentario" required placeholder="Comentario"></textarea>
                
                <input type="number" name="puntaje" class="input-puntaje" min="1" max="5" required placeholder="Puntaje">
                <input type="submit" value="Insertar" class="btn-primary">
            </div>
        </form>
    </div>

  


