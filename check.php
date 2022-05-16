<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="switch-lang">
    <button id="eng-lang">eng</button>
    <button id="es-lang">es</button>

    </div>
   

    <h1><span lang="en">Hello</span> <span lang="es">Hola</span></h1>

    <p lang="en">I really enjoy coding.</p>

    <p lang="es">Me gusta mucho la codificación.</p>



   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('[lang="es"]').hide();

        $('#switch-lang').click(function() {
            console.log('hellow world')
            $('[lang="es"]').toggle();
            $('[lang="en"]').toggle();
        });
    </script>

</body>

</html>