<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Triangle PHP</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <script>
        calculating = (b, c) => {
            let parameters = {
                "b": b,
                "c": c
            }

            $.ajax({
                url: "calculate.php",
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




    <div class="mx-auto bg-danger text-white  " style="width: 500px;">
        <div class="mx-5">



            <p> Calculo de la hipotenusa de un triangulo </p> 
         
                 <div >
                     <div class="mx-5 mb-3">
                         <label>Valor a:</label>
                         <input type="number" name="b" id="b" value=3>
                     </div>
                     <div class="mx-5 mb-3">
                         <label>Valor b:</label>
                         <input type="number" name="c" id="c" value=4>
                     </div>
                 </div>
         
                     <div class="mx-5 mb-3">
                         <button class="mx-5 btn-primary" onclick="calculating($('#b').val(), $('#c').val())" class="btn waves-effect waveslight" type="submit" name="action">Calcular
         
                         </button>
                     </div>
        </div>

        <div id="result" class="col s6"></div>
    </div>



</body>

</html>