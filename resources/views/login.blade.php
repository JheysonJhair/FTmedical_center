<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('estilos/EstiloLogin.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Cairo:wght@200;300&family=Josefin+Sans:ital,wght@0,100;0,400;1,100&family=Roboto+Slab:wght@500&family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <img src="https://img.freepik.com/vector-premium/plantilla-logotipo-centro-medico-logotipo-centro-salud_664675-877.jpg?w=2000" alt="" width="90">
        <p>Centro médico | Universidad Nacional Micaela Bastidas de Apurímac</p>
    </div>
    <section>
        <form action="{{route('validarLogin')}}" method="post">
        @csrf  
            <div class="cabeza">
                <p>INICIA SESIÓN</p>
            </div>
            <div class="form">
                <div>
                    <img src="https://static.wixstatic.com/media/d6b959_fc023c51b60f43ab8f1ef076fa2df1cf~mv2.jpg/v1/fit/w_2500,h_1330,al_c/d6b959_fc023c51b60f43ab8f1ef076fa2df1cf~mv2.jpg" alt="">
                </div>
                <input type="text" name="usuario" id="usuario" placeholder="Usuario"><br>
                <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña"><br>

                <button type="submit" class="submit-button">
                    <i class="fas fa-lock"></i> ENTRAR
                </button>
                <hr style="margin-top:20px; margin-bottom:12px; border-top: 1px solid #ccc;">
                <a href="{{ url('student') }}">¿No tienes cuenta?</a>
            </div>
        </form>
    </section>
</body>
</html>