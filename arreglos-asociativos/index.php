<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Document</title>
</head>

<body>

    <script>
        add = (nombre1,
            nombre2,
            nombre3,
            apellido1,
            apellido2,
            apellido3,
            cedula1,
            cedula2,
            cedula3,
            sueldo1,
            sueldo2,
            sueldo3,
            departamento1,
            departamento2,
            departamento3,
            lugar1,
            lugar2,
            lugar3) => {
            let parameters = {
                "nombre1": nombre1,
                "nombre2": nombre2,
                "nombre3": nombre3,
                "apellido1": apellido1,
                "apellido2": apellido2,
                "apellido3": apellido3,
                "cedula1": cedula1,
                "cedula2": cedula2,
                "cedula3": cedula3,
                "sueldo1": sueldo1,
                "sueldo2": sueldo2,
                "sueldo3": sueldo3,
                "departamento1": departamento1,
                "departamento2": departamento2,
                "departamento3": departamento3,
                "lugar1": lugar1,
                "lugar2": lugar2,
                "lugar3": lugar3,
            }

            $.ajax({
                url: "addToArray.php",
                type: "post",
                data: parameters,
                beforeSend: () => $("#result").html("Procesing, Please wait.."),
                fail: () => {
                    $("#result").html("Error");
                },
                success: (response) => {
                    $("#result").html(response);
                },
                error: (jqXHR, textStatus, errorThrown) => {
                    console.log(textStatus, errorThrown);
                }
            })
        };
    </script>


    <h3 class="mx-auto" style="width: 30%;"> <b>Ingresar datos de trabajadores </b> </h3>

    <div class="mx-auto bg-secondary text-white  ">
        <div class="mx-5">

            <div class="d-flex mx-auto " style="width: 65%;">



                <div>
                    <div class="mx-5 mb-3">
                        <label>Nombre :</label> <br>
                        <input class="ml-4" type="text" name="nombre1" id="nombre1" placeholder="Nombre">
                    </div>
                    <div class="mx-5 mb-3">
                        <label>Apellido</label> <br>
                        <input class="ml-4" type="text" name="apellido1" id="apellido1" placeholder="Apellido">

                    </div>
                    <div class="mx-5 mb-3">
                        <label>Cedula:</label> <br>
                        <input class="ml-4" type="text" name="cedula1" id="cedula1" placeholder="cedula">
                    </div>
                    <div class="mx-5 mb-3">
                        <label>Sueldo $:</label> <br>
                        <input class="ml-4" type="number" name="sueldo1" id="sueldo1" placeholder="Sueldo">
                    </div>
                    <div class="mx-5 mb-3">
                        <label>Departamento</label> <br>
                        <input class="ml-4" type="text" name="departamento1" id="departamento1" placeholder="dept">
                    </div>
                    <div class="mx-5 mb-3">
                        <label>Lugar de trabajo</label> <br>
                        <input class="ml-4" type="text" name="lugar1" id="lugar1" placeholder="lugar">
                    </div>

                </div>

                <div>
                    <div style="justify-content: space-between;" class="mx-5 mb-3">
                        <label>Nombre :</label> <br />
                        <input type="text" name="nombre2" id="nombre2" placeholder="Nombre">
                    </div>
                    <div class="mx-5 mb-3">
                        <label>Apellido</label> <br />
                        <input type="text" name="apellido2" id="apellido2" placeholder="Apellido">

                    </div>
                    <div class="mx-5 mb-3">
                        <label>Cedula:</label> <br />
                        <input type="text" name="cedula2" id="cedula2" placeholder="cedula">
                    </div>
                    <div class="mx-5 mb-3">
                        <label>Sueldo $:</label> <br />
                        <input type="number" name="sueldo2" id="sueldo2" placeholder="Sueldo">
                    </div>
                    <div class="mx-5 mb-3">
                        <label>Departamento</label> <br />
                        <input type="text" name="departamento2" id="departamento2" placeholder="dept">
                    </div>
                    <div class="mx-5 mb-3">
                        <label>Lugar de trabajo</label> <br />
                        <input type="text" name="lugar2" id="lugar2" placeholder="lugar">
                    </div>

                </div>

                <div>
                    <div class="mx-5 mb-3">
                        <label>Nombre :</label> <br />
                        <input type="text" name="nombre3" id="nombre3" placeholder="Nombre">
                    </div>
                    <div class="mx-5 mb-3">
                        <label>Apellido</label> <br />
                        <input type="text" name="apellido3" id="apellido3" placeholder="Apellido">

                    </div>
                    <div class="mx-5 mb-3">
                        <label>Cedula:</label> <br />
                        <input type="text" name="cedula3" id="cedula3" placeholder="cedula">
                    </div>
                    <div class="mx-5 mb-3">
                        <label>Sueldo $:</label> <br />
                        <input type="number" name="sueldo3" id="sueldo3" placeholder="Sueldo">
                    </div>
                    <div class="mx-5 mb-3">
                        <label>Departamento</label> <br />
                        <input type="text" name="departamento3" id="departamento3" placeholder="dept">
                    </div>
                    <div class="mx-5 mb-3">
                        <label>Lugar de trabajo</label> <br />
                        <input type="text" name="lugar3" id="lugar3" placeholder="lugar">
                    </div>

                </div>

            </div>
        </div>


        <div class="mx-5 mb-3">
            <button style="width: 40%; margin-left:380px" class="btn-primary" onclick="add(             
             $('#nombre1').val(),            $('#nombre2').val(),             $('#nombre3').val(),
             $('#apellido1').val(),          $('#apellido2').val(),           $('#apellido3').val(),
             $('#cedula1').val(),            $('#cedula2').val(),             $('#cedula3').val(),
             $('#sueldo1').val(),            $('#sueldo2').val(),             $('#sueldo3').val(),
             $('#departamento1').val(),     $('#departamento2').val(),        $('#departamento3').val(),  
             $('#lugar1').val(),             $('#lugar2').val(),              $('#lugar3').val()

             )" class="btn waves-effect waveslight" type="submit" name="action">Imprimir

            </button>
        </div>
    </div>

    <div id="result" class="col s6"></div>
    </div>
    <div class="container section-plan">

        </div>
    </div>



</body>

</html>