<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./static/css/main.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


</head>
<body class="bg-gray-200">

<?php
include("../config/session/session_control.php");

?>

  <section class="hero">
      <header>
        <nav>
          <div class="logo">
            LOGO
          </div>
          <input type="checkbox" id="check" />
          <label for="check" class="menu">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="30"
              height="30"
              fill="currentColor"
              class="bi bi-list"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
              />
            </svg>
          </label>
          <div class="nav-links">
            <a href="../view/main.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Home</a>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" onclick="openModal()">Gestion Vehicular</button>
            <button class="ml-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" onclick="openModal2()">Gasolina</button>
            <a href="./logout.php" class="ml-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" >Logout</a>

          </div>
        </nav>
      </header>
      <div class="intro">
        <div>
          <h1>Registra</h1>
          <h2>tus vehiculos</h2>
        </div>
        <div>
          <button>¿Que esperas?</button>
        </div>
      </div>
      <div class="hero-bg">
      
        <img src="./assets/imgs/content_main.png" alt="cup of coffee" />
      </div>
     
    </section>



    <div class="fixed z-10 inset-0 overflow-y-auto hidden" id="modal">
  <div class="flex items-center justify-center min-h-screen bg-black bg-opacity-50">
    <div class="bg-white rounded-lg shadow-lg p-6 w-96">
      <h2 class="text-lg font-semibold mb-4">Agregar vehículo</h2>
      <form method="POST" action="../auth/gestion_vehicular.php">
        <div class="mb-4">
          <label class="block font-bold mb-2" for="nombre">Quien Reporta:</label>
          <input class="border border-gray-400 p-2 w-full" type="text" id="nombre" name="nombre" required readonly onmousedown="return false;" value="<?php echo $_SESSION["nombre"] ?>">
        </div>
        <div class="mb-4">
          <label class="block font-bold mb-2" for="placa">Placa:</label>
          <input class="border border-gray-400 p-2 w-full" type="text" id="placa" name="placa" required>
        </div>
        <div class="mb-4">
          <label class="block font-bold mb-2" for="kilometraje">Kilometraje:</label>
          <input class="border border-gray-400 p-2 w-full" type="number" id="kilometraje" name="kilometraje" required>
        </div>
        <div class="flex justify-end">
          <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Agregar</button>
          <button type="button" class="bg-gray-400 text-white py-2 px-4 rounded hover:bg-gray-500 ml-2" onclick="closeModal()">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>





<div class="fixed z-10 inset-0 overflow-y-auto hidden" id="modal2">
  <div class="flex items-center justify-center min-h-screen bg-black bg-opacity-50">
    <div class="bg-white rounded-lg shadow-lg p-6 w-96">
      <h2 class="text-lg font-semibold mb-4">Gasolina</h2>
      <form action="../auth/auth_gasolina.php" method="POST">
        <div class="mb-4">
          <label class="block font-bold mb-2" for="nombre">Placa:</label>
          <input class="border border-gray-400 p-2 w-full" type="text" id="" name="placa" required>
        </div>
        <div class="mb-4">
          <label class="block font-bold mb-2" for="placa">Quien Reporta:</label>
          <input class="border border-gray-400 p-2 w-full" type="text" id="" name="name" required readonly onmousedown="return false;" value="<?php echo $_SESSION["nombre"] ?>">
        </div>
        <div class="mb-4">
          <label class="block font-bold mb-2" for="kilometraje">Estacion:</label>
          <input class="border border-gray-400 p-2 w-full" type="text" id="" name="estacion" required>
        </div>
        <div class="mb-4">
          <label class="block font-bold mb-2" for="kilometraje">Cantidad:</label>
          <input class="border border-gray-400 p-2 w-full" type="text" id="" name="cantidad" required>
        </div>
        <div class="mb-4">
          <label class="block font-bold mb-2" for="kilometraje">Valor Litro:</label>
          <input class="border border-gray-400 p-2 w-full" type="text" id="" name="valor_litro" required>
        </div>
        <div class="mb-4">
          <label class="block font-bold mb-2" for="kilometraje">Tipo Combustible:</label>
          <input class="border border-gray-400 p-2 w-full" type="text" id="" name="combustible" required>
        </div>
        <div class="mb-4">
          <label class="block font-bold mb-2" for="kilometraje">Valor:</label>
          <input class="border border-gray-400 p-2 w-full" type="text" id="" name="valor" required>
        </div>
        <div class="flex justify-end">
          <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Agregar</button>
          <button type="button" class="bg-gray-400 text-white py-2 px-4 rounded hover:bg-gray-500 ml-2" onclick="closeModal2()">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>


    <?php if(isset($_SESSION['message_title'])): ?>
        <script>toastr.success('<?php echo  $_SESSION['message_title'] ?>',"<?php echo  $_SESSION['message_content']; ?>")</script>
        <?php unset($_SESSION['message_title']); ?>
        <?php unset($_SESSION['message_content']); ?>

    <?php endif; ?>

<script src="./static/js/modals_actions/gasolina.js"></script>
<script src="./static/js/modals_actions/gestion_vehicular.js"></script>


 
</body>
</html>