<html>
    <head></head>
    <body>
        <form  method="POST" action="pages/assinaturas_cadastro_salvar.php">
            
            <h1>Realizar Cadastro do Plano </h1>
            <br>
            <br>
        
            <div class="mb-3">
                <label  for = "plano" class="form-label"> Plano: </label><br>
                <select id = "plano" name = "plano" class="form-select" required>
                    <option value = ""> Selecione...</option>
                    <option value = "Plano A"> Plano A </option>
                    <option value = "Plano B"> Plano B </option>
                    <option value = "Plano C"> Plano C </option>
          
                </select><br>
            </div>      

            <div class="mb-3">
                <label for="data_inicio" class="form-label">Data Inicio : </label><br>
                <input type="date" id="data_inicio" name="data_inicio" class="form-control"><br>
            </div> 

            <div class="mb-3">
                <label for="data_fim" class="form-label">Data Fim: </label><br>
                <input type="date" id="data_fim" name="data_fim" class="form-control"><br>
           </div>  
             
            <br>
            <button type="submit" class="btn btn-secondary btn-sm" style="background-color: #fad0dd; color:black"> Enviar </button>
    </form>
    </body>
</html>