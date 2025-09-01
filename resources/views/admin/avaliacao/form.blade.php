<select name="game_id" class="form-control">
    @foreach ($games as $game) 
    <option value="{{$game->idgame}} "> {{$game->titulo}} 
    </option>
    @endforeach
</select> 
<br>
<input type="text" name="nota" class="form-control" value="{{isset($registro->nota)?$registro->nota:''}}" placeholder="digite a nota para o jogo"> <br>
<textarea name="comentario" id="" class="form-control"  cols="30" rows="10"></textarea>
 