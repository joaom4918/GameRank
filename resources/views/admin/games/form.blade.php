 <label for="titulo">titulo</label>
        <input type="text" name="titulo" class="form-control" value="{{isset($registro->titulo)?$registro->titulo:''}}" placeholder="Digite titulo do jogo"> <br>

        <label for="ano_lancamento">ano de Lançamento</label>
        <input type="number" name="ano_lancamento" class="form-control" value="{{isset($registro->ano_lancamento)?$registro->ano_lancamento:''}}" placeholder="Digite o ano que o jogo foi lançado"> <br>

        <label for="plataforma">Plataforma</label> <br>
        <label>console</label>
        <input type="checkbox" class="form-check-input checkbox-dark" name="plataforma[]" value="console">

        <label>pc</label>
        <input type="checkbox" class="form-check-input checkbox-dark" name="plataformar[]" value="pc">
        <label>consoles Portateis</label>
        <input type="checkbox" class="form-check-input checkbox-dark" name="plataforma[]" value="consoles portateis">
        <label>mobile</label>
        <input type="checkbox" class="form-check-input checkbox-dark" name="plataforma[]" value="mobile"> <br> <br>
        
        
    <label for="Genero">Genero</label> <br>
    <label>Ação</label>
    <input class="form-check-input checkbox-dark" type="checkbox"  name="genero[]" value="acao"> 

    <label>Aventura</label> 
    <input class="form-check-input checkbox-dark" type="checkbox" name="genero[]" value="aventura"> 

    <label>Corrida</label>
    <input class="form-check-input checkbox-dark" type="checkbox" name="genero[]" value="corrida"> 
     
    <label>Esporte</label>
    <input class="form-check-input checkbox-dark" type="checkbox" name="genero[]" value="esporte"> 
     
    <label>plataforma</label>
    <input class="form-check-input checkbox-dark" type="checkbox" name="genero[]" value="plataforma"> 

    <label>Luta</label>
    <input class="form-check-input checkbox-dark" type="checkbox" name="genero[]" value="luta"> 

    <label>RPG</label>
    <input class="form-check-input checkbox-dark" type="checkbox" name="genero[]" value="rpg"> <br> <br>

    <label>Imagem</label>
    <input type="file" name="imagem" class="form-control"> <br>