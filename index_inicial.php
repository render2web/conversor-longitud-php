<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Conversor de Longitud</title>
  </head>
  <body>
    <h1 class="text-center">Conversor de Longitud</h1>

    <div class="container">
        <form>
        <div class="row mt-4">
           
                <div class="col-sm-6">
                
                    <select class="form-select">    
                            <option value="">--Selecciona un valor--</option>                       
                            <option value="Milimetro">Milímetro</option>
                            <option value="Centimetro">Centímetro</option>
                            <option value="Decimetro">Decímetro</option>
                            <option value="Metro">Metro</option>
                            <option value="Decámetro">Decámetro</option>
                            <option value="Hectómetro">Hectómetro</option>
                            <option value="Kilómetro">Kilómetro</option>
                    </select>
                
                
                </div>

                <div class="col-sm-6">
            
                        <select class="form-select">
                            <option value="">--Selecciona un valor--</option>  
                            <option value="Milimetro">Milímetro</option>
                            <option value="Centimetro">Centímetro</option>
                            <option value="Decimetro">Decímetro</option>
                            <option value="Metro">Metro</option>
                            <option value="Decámetro">Decámetro</option>
                            <option value="Hectómetro">Hectómetro</option>
                            <option value="Kilómetro">Kilómetro</option>
                        </select>              
                </div>
           
        </div>  

        <div class="row mt-4">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary w-100 py-4">CONVERTIR</button>
            </div>
                
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="resultado" class="form-label">RESULTADO:</label>
                    <input type="text" class="form-control">                
                </div>
            </div>
        </div> 

         </form>     
    </div>
    
  </body>
</html>