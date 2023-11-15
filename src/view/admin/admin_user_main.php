<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_User</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



</head>

<body>



    <?php 
  include('../../config/session/session_control_admin.php');
  include('../../view/helpers/admin_count_users.php');
  include('../helpers/user_all.php');
  include('../helpers/all_rols.php');
  include('../helpers/rols.php');
  include('../helpers/gestion_vehicular.php')
?>
    <div class="min-h-screen bg-blue-gray-50/50">
        <aside
            class="bg-white shadow-2xl -translate-x-80 fixed inset-0 z-50 my-4 ml-4 h-[calc(100vh-32px)] w-72 rounded-xl transition-transform duration-300 xl:translate-x-0"
            id="open">
            <div class="relative border-b border-gray-200">
                <a href="" class="flex items-center gap-4 py-6 px-8">
                    <img src="../assets/imgs/logo_imagen.png"
                        class="inline-block relative object-cover object-center w-9 h-9 rounded-md">
                    <h6
                        class="block antialiased tracking-normal font-sans text-base font-bold leading-relaxed text-black">
                        PANEL ADMIN</h6>
                </a>
                <button
                    class="middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-black hover:bg-gray-300 active:bg-gray-300 absolute right-0 top-0 grid rounded-br-none rounded-tl-none xl:hidden"
                    id="close_menu">
                    <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" aria-hidden="true" class="h-5 w-5 text-black">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>

                    </span>

                </button>
            </div>





            <div class="m-4">
                <ul class="mb-4 flex flex-col gap-2">
                    <li class="bg-gray-300 px-3 rounded-md">
                        <span class="text-blue-700"><b>User: </b></span><span class="font-bold">

                            <?php echo $_SESSION['user_admin_email'] ?>
                        </span>
                    </li>
                    <li class="mt-2">
                        <a aria-current="page" class="active" href="#/home"><button onclick="cambiarDiv('home')"
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/40 active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize"
                                type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                    <path fill-rule="evenodd"
                                        d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    Usuarios</p>
                            </button></a>
                    </li>
                    <li>
                        <button onclick="cambiarDiv('div-2')"
                            class="middle  none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/40 active:opacity-[0.85] w-full  flex items-center gap-4 px-4 capitalize"
                            type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                <path fill-rule="evenodd"
                                    d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <p
                                class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                Roles</p>
                        </button>
                    </li>

                    <li class="mt-4">
                        <button onclick="cambiarDiv('div-3')"
                            class="middle  none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/40 active:opacity-[0.85] w-full  flex items-center gap-4 px-4 capitalize"
                            type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                <path fill-rule="evenodd"
                                    d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <p
                                class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                Gestion Vehicular</p>
                        </button>
                    </li>

                    <li>
                        <button onclick="cambiarDiv('div-4')"
                            class="middle  none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/40 active:opacity-[0.85] w-full  flex items-center gap-4 px-4 capitalize"
                            type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                <path fill-rule="evenodd"
                                    d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <p
                                class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                Combustible</p>
                        </button>
                    </li>

                    <li class="mx-3.5 mt-4 mb-2">
                        <p
                            class="block antialiased font-sans text-sm leading-normal  font-black uppercase opacity-75 text-black">
                            auth pages</p>
                    </li>
                    <li>
                        <a class="" href="../../view/admin/logout_admin.php"><button
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white bg-gradient-to-tr from-blue-600 to-blue-400 w-full flex items-center gap-4 px-4 capitalize"
                                type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                    <path fill-rule="evenodd"
                                        d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    Logout</p>
                            </button></a>
                    </li>


                </ul>

            </div>
        </aside>

        <div class="p-4 xl:ml-80" id="home">
            <nav
                class="block w-full max-w-full bg-transparent text-black shadow-none rounded-xl transition-all px-0 py-1">
                <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
                    <div class="capitalize">

                        <h6
                            class="block antialiased tracking-normal font-sans text-3xl font-bold  leading-relaxed text-blue-gray-900">
                            Usuarios</h6>
                    </div>
                    <div class="flex items-center">
                        <div class="mr-auto md:mr-4 md:w-56">
                            <div class="relative w-full min-w-[200px] h-10"><input type="text" id="searchInput"
                                    onkeyup="searchTable()"
                                    class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                                    placeholder=" "><label
                                    class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">
                                    Search
                                </label></div>
                        </div><button
                            class="open-menu relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 grid xl:hidden"
                            type="button" id="toggle-aside" style="position: relative; overflow: hidden;"><span
                                class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" stroke-width="3" class="h-6 w-6 text-blue-gray-500">
                                    <path fill-rule="evenodd"
                                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                        clip-rule="evenodd"></path>
                                </svg></span></button>
                    </div>
                </div>
            </nav>









            <div class="mt-12">
                <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
                    <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                        <div
                            class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="w-6 h-6 text-white">
                                <path
                                    d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                                </path>
                            </svg>
                        </div>


                        <div class="p-4 text-right">
                            <h4
                                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                Usuarios</h4>
                        </div>

                        <div class="border-t border-blue-gray-50 p-4">
                            <button id="modal-btn">
                                <p
                                    class="pl-0 block antialiased font-sans text-base leading-relaxed font-bold text-green-500">
                                    <strong class="text-green-500 font-bold pl-4 text-2xl">+</strong> Añadir Usuario
                                </p>
                            </button>
                        </div>
                    </div>




                    <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                        <div
                            class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-pink-600 to-pink-400 text-white shadow-pink-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="w-6 h-6 text-white">
                                <path fill-rule="evenodd"
                                    d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="p-4 text-right">

                            <h4
                                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                <?php echo $row[0] ?>
                            </h4>
                        </div>
                        <div class="border-t border-blue-gray-50 p-4">
                            <p
                                class="block antialiased font-sans text-base leading-relaxed font-bold text-blue-gray-600">
                                <strong class="text-green-500">Total </strong>&nbsp;Usuarios
                            </p>
                        </div>
                    </div>



                </div>
            </div>

            <h1 class="text-black font-bold text-2xl">Tabla De Usuarios</h1>

            <div class="overflow-x-auto">
                <div class="min-w-screen min-h-screen bg-transparent flex  bg-gray-100 font-sans overflow-hidden">
                    <div class="w-full lg:w-full">
                        <div class="bg-white shadow-xl rounded my-6 overflow-x-auto ">
                            <table id="miTabla3" class="min-w-max w-full table-auto">
                                <thead>
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                        <th class="py-3 px-6 text-left">Id</th>
                                        <th class="py-3 px-6 text-left">Correo</th>
                                        <th class="py-3 px-6 text-center">Contraseña</th>
                                        <th class="py-3 px-6 text-center">Rol</th>
                                        <th class="py-3 px-6 text-center">Accion</th>
                                    </tr>
                                </thead>
                                <tbody class="text-black text-sm font-light">
                                    <?php 
                                while ($row = mysqli_fetch_assoc($result)) : ?>
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-left whitespace-wrap w-24">
                                            <div class="flex items-center">
                                                <span class="font-medium"><?php echo $row['id'] ?></span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-left w-28">
                                            <div class="flex items-center">
                                                <span><?php echo $row['vccorreo'] ?></span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex items-center justify-center">
                                                <span><?php echo $row['vccontrasena'] ?></span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <span
                                                class="bg-blue-500 text-white py-1 px-3 rounded-full font-bold text-xs"><?php echo $row['vcrol'] ?></span>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex item-center justify-center">
                                                <button class="open-modal" data-rol="<?php echo $row["vcrol"]?>"
                                                    data-id="<?php echo $row["id"]?>"
                                                    data-name="<?php echo $row["vcnombre"]?>"
                                                    data-email="<?php echo $row['vccorreo'] ?>">
                                                    <div class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                        </svg>
                                                    </div>
                                                </button>
                                                <form id="delete-form-<?php echo $row['id']; ?>"
                                                    action="../helpers/delete_user_id.php" method="POST">
                                                    <input name="id" value="<?php echo $row['id']?> " hidden>

                                                    <button type="submit" id="delete-button-<?php echo $row['id']; ?>">
                                                        <div
                                                            class="w-4 mr-2 transform hover:text-red-400 hover:scale-110">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                    </button>
                                            </div>
                                            </form>
                        </div>
                        </td>
                        </tr>

                        <div id="modal_edit" class="fixed z-50 inset-0 overflow-y-auto hidden">
                            <div class="flex items-center justify-center min-h-screen px-4">
                                <div class="fixed inset-0 transition-opacity">
                                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                </div>
                                <div
                                    class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                                    <div class="bg-blue-600 px-4 py-2 flex justify-between items-center">
                                        <h2 class="text-white font-bold">Modificar Usuario</h2>
                                        <button class="modal-close-2 text-white font-bold text-xl">&times;</button>
                                    </div>
                                    <div class="px-4 py-2">
                                        <form action="../helpers/update_user.php" method="POST">
                                            <input type="hidden" name="id" id="id">
                                            <div class="mb-3">
                                                <label class="block text-gray-700 font-bold mb-2" for="correo">
                                                    Nombre Completo:
                                                </label>
                                                <input
                                                    class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    id="name" name="name" type="name" placeholder="Juan Jose Caicedo"
                                                    required>
                                            </div>

                                            <div class="mb-3">
                                                <label class="block text-gray-700 font-bold mb-2" for="correo">
                                                    Correo electrónico:
                                                </label>
                                                <input
                                                    class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    id="email" name="email" type="email" value="">
                                            </div>

                                            <div class="mb-3">
                                                <label class="block text-gray-700 font-bold mb-2" for="correo">
                                                    Contraseña:
                                                </label>
                                                <input
                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    id="password" name="password" type="password" value="">
                                            </div>

                                            <div class="mb-3">
                                                <label class="block text-gray-700 font-bold mb-2" for="correo">
                                                    rol:
                                                </label>
                                                <select name="rol">
                                                    <option value="" class="font-bold">-- <b>Selecciona una opción<b> --
                                                    </option>

                                                    <?php 
                                while ($row_rols_ = mysqli_fetch_assoc($result_rols)) : ?>
                                                    <option value="<?php echo  $row_rols_['vcnombre']?>">
                                                        <?php echo  $row_rols_['vcnombre']?></option>

                                                    <?php endwhile ?>
                                                </select>
                                            </div>




                                            <div class="flex justify-end">
                                                <button type="submit"
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endwhile ?>
                        </tbody>

                        </table>

                    </div>

                    <div id="paginacion" class="mt-8 relative right-0">

                        <button id="anterior-3"
                            class="bg-blue-500 rounded-full px-3 hover:bg-blue-700 text-white font-bold ">Anterior</button>
                        <button id="siguiente-3"
                            class="bg-blue-500 rounded-full px-3 hover:bg-blue-700 text-white font-bold ">Siguiente</button>
                    </div>
                </div>
            </div>
        </div>




    </div>

    <div id="div-2" class="p-4  xl:ml-80" style="display:none;">
        <nav class="block w-full max-w-full bg-transparent text-black shadow-none rounded-xl transition-all px-0 py-1">
            <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
                <div class="capitalize">
                    <h6
                        class="block antialiased tracking-normal font-sans text-3xl font-bold leading-relaxed text-blue-gray-900">
                        Roles</h6>
                </div>
                <div class="flex items-center">
                    <div class="mr-auto md:mr-4 md:w-56">
                        <div class="relative w-full min-w-[200px] h-10"><input
                                class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                                type="text" id="searchInput-rol" onkeyup="searchTableRol()" placeholder=" "><label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">Search
                            </label></div>
                    </div><button
                        class="open-menu relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 grid xl:hidden"
                        type="button" id="toggle-aside" style="position: relative; overflow: hidden;"><span
                            class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" stroke-width="3" class="h-6 w-6 text-blue-gray-500">
                                <path fill-rule="evenodd"
                                    d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                    clip-rule="evenodd"></path>
                            </svg></span></button>
                </div>
            </div>
        </nav>


        <div class="mb-12 grid gap-y-10 mt-8  gap-x-6 md:grid-cols-2 xl:grid-cols-4">
            <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                <div
                    class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                    <img src="../assets/imgs/rol (1).png" alt="">
                </div>


                <div class="p-4 text-right">
                    <h4
                        class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                        Roles</h4>
                </div>

                <div class="border-t border-blue-gray-50 p-4">
                    <button id="modal-btn-3">
                        <p class="pl-0 block antialiased font-sans text-base leading-relaxed font-bold text-green-500">
                            <strong class="text-green-500 font-bold pl-4 text-2xl">+</strong> Añadir Rol
                        </p>
                    </button>
                </div>
            </div>




            <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                <div
                    class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-pink-600 to-pink-400 text-white shadow-pink-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                    <img src="../assets/imgs/roles (1).png" alt="">
                </div>
                <div class="p-4 text-right">

                    <h4
                        class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                        <?php echo $row_rols[0]; ?> </h4>
                </div>
                <div class="border-t border-blue-gray-50 p-4">
                    <p class="block antialiased font-sans text-base leading-relaxed font-bold text-blue-gray-600">
                        <strong class="text-green-500">Total </strong>&nbsp;Roles
                    </p>
                </div>
            </div>



        </div>


        <h1 class="text-2xl font-bold mt-4">Tabla De Roles</h1>
        <table id="miTabla" class="min-w-max w-full mt-4 table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Id</th>
                    <th class="py-3 px-6 text-left">Nombre</th>
                    <th class="py-3 px-6 text-center">Descripcion</th>
                    <th class="py-3 px-6 text-center">Estado</th>
                    <th class="">Accion</th>
                </tr>
            </thead>
            <tbody class="text-black text-sm font-light">
                <?php 
                                while ($row = mysqli_fetch_assoc($result_table_rols)) : ?>
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-wrap w-24">
                        <div class="flex items-center">
                            <span class="font-medium"><?php echo $row['id'] ?></span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-left w-28">
                        <div class="flex items-center">
                            <span><?php echo $row['vcnombre'] ?></span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex items-center justify-center">
                            <span><?php echo $row['vcdescripcion'] ?></span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span
                            class="bg-blue-500 text-white py-1 px-3 rounded-full font-bold text-xs"><?php echo $row['vcestado'] ?></span>
                    </td>

                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                            <button class="open-modal-2" data-estado="<?php echo $row["vcestado"]?>"
                                data-id="<?php echo $row["id"]?>" data-name="<?php echo $row["vcnombre"]?>"
                                data-descripcion="<?php echo $row['vcdescripcion'] ?>">
                                <div class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </div>
                            </button>
                            <form id="delete-form-<?php echo $row['id']; ?>" action="../helpers/delete_rol.php"
                                method="POST">
                                <input name="id" value="<?php echo $row['id']?> " hidden>

                                <button type="submit" id="delete-button-<?php echo $row['id']; ?>">
                                    <div class="w-4 mr-2 transform hover:text-red-400 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                </button>
                        </div>
                        </form>
    </div>
    </td>

    <div id="modal_edit-2" class="fixed z-50 inset-0 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                <div class="bg-blue-600 px-4 py-2 flex justify-between items-center">
                    <h2 class="text-white font-bold">Modificar Rol</h2>
                    <button class="modal-close-here text-white font-bold text-xl">&times;</button>
                </div>
                <div class="px-4 py-2">
                    <form action="../helpers/update_rol.php" method="POST">
                        <input type="hidden" name="id_rol" id="id_rol" value="">
                        <div class="mb-3">
                            <label class="block text-gray-700 font-bold mb-2" for="correo">
                                Nombre del rol:
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name_rol" name="name_rol" type="text" value="" required>
                        </div>

                        <div class="mb-3">
                            <label class="block text-gray-700 font-bold mb-2" for="correo">
                                Descripcion:
                            </label>
                            <textarea
                                class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="desc" name="desc" type="text" value=""></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="block text-gray-700 font-bold mb-2" for="correo">
                                Estado:
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="estado" name="estado" type="text" value="">
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile ?>
    </tbody>
    </table>


    <div id="paginacion" class="mt-8 relative right-0">

        <button id="anterior"
            class="bg-blue-500 rounded-full px-3 hover:bg-blue-700 text-white font-bold ">Anterior</button>
        <button id="siguiente"
            class="bg-blue-500 rounded-full px-3 hover:bg-blue-700 text-white font-bold ">Siguiente</button>
    </div>




    </div>




    <!-- Div Del Panel Vehicular -->
    <div id="div-3" class="p-4  xl:ml-80" style="display:none;">
        <nav class="block w-full max-w-full bg-transparent text-black shadow-none rounded-xl transition-all px-0 py-1">
            <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
                <div class="capitalize">
                    <h6
                        class="block antialiased tracking-normal font-sans text-3xl font-bold leading-relaxed text-blue-gray-900">
                        Gestion Vehicular</h6>
                </div>
                <div class="flex items-center">
                    <div class="mr-auto md:mr-4 md:w-56">
                        <div class="relative w-full min-w-[200px] h-10"><input
                                class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                                type="text" id="searchInput-ges" onkeyup="searchTableGestion()" placeholder=" "><label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">Search
                            </label></div>
                    </div><button
                        class="open-menu relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 grid xl:hidden"
                        type="button" id="toggle-aside" style="position: relative; overflow: hidden;"><span
                            class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" stroke-width="3" class="h-6 w-6 text-blue-gray-500">
                                <path fill-rule="evenodd"
                                    d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                    clip-rule="evenodd"></path>
                            </svg></span></button>
                </div>
            </div>
        </nav>


        <div class="mb-12 grid gap-y-10 mt-8  gap-x-6 md:grid-cols-2 xl:grid-cols-4">
            <!---   
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                <div
                    class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                    <img src="../assets/imgs/coche (1).png" alt="">
                </div>


                
                <div class="p-4 text-right">
                    <h4
                        class="block antialiased tracking-normal font-sans text-2xl font-bold leading-snug text-blue-gray-900">
                         Vehicular</h4>


            
                </div>

                <div class="border-t border-blue-gray-50 p-4">
                    <button id="modal-btn-3">
                        <p class="pl-0 block antialiased font-sans text-base leading-relaxed font-bold text-green-500">
                            <strong class="text-green-500 font-bold pl-4 text-2xl">+</strong> Añadir Gestion
                        </p>
                    </button>
                </div>
            </div>
                                -->



            <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                <div
                    class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-pink-600 to-pink-400 text-white shadow-pink-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                    <img src="../assets/imgs/coche.png" alt="">
                </div>
                <div class="p-4 text-right">

                    <h4
                        class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                        <?php echo $row_vehicular[0]; ?> </h4>
                </div>
                <div class="border-t border-blue-gray-50 p-4">
                    <p class="block antialiased font-sans text-base leading-relaxed font-bold text-blue-gray-600">
                        <strong class="text-green-500">Total </strong>&nbsp;Registros
                    </p>
                </div>
            </div>



        </div>


        <h1 class="text-2xl font-bold mt-4">Tabla De Roles</h1>
        <table id="miTabla_gestion" class="min-w-max w-full mt-4 table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Id</th>
                    <th class="py-3 px-6 text-left">Fecha Reporte</th>
                    <th class="py-3 px-6 text-center">Quien Reporta</th>
                    <th class="py-3 px-6 text-center">Placa</th>
                    <th class="py-3 px-6 text-center">Kilometraje</th>
                    <th class="">Accion</th>
                </tr>
            </thead>
            <tbody class="text-black text-sm font-light">
                <?php 
                                while ($row = mysqli_fetch_assoc($result_gestion)) : ?>
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-wrap w-24">
                        <div class="flex items-center">
                            <span class="font-medium"><?php echo $row['id'] ?></span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-left ">
                        <div class="flex items-center">
                            <span>
                                <?php 
                                
                                echo date("d-m-Y", strtotime($row["dtfecha_reporte"]));
    
                                ?>
                            </span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex items-center justify-center">
                            <span><?php echo $row['vcreporta'] ?></span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex items-center justify-center">
                            <span><?php echo $row['vcplaca'] ?></span>
                        </div>
                    </td>

                    <td class="py-3 px-6 text-center">
                        <div class="flex items-center justify-center">
                            <span><?php echo $row['intkilometraje'] ?></span>
                        </div>
                    </td>


                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                            <button class="open-modal-3" data-kilometraje="<?php echo $row["intkilometraje"]?>"
                                data-id="<?php echo $row["id"]?>" data-placa="<?php echo $row["vcplaca"] ?>"
                                data-name="<?php echo $row["vcreporta"]?>">
                                <div class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </div>
                            </button>
                            <form id="delete-form-<?php echo $row['id']; ?>" action="../helpers/delete_gestion.php"
                                method="POST">
                                <input name="id" value="<?php echo $row['id']?> " hidden>

                                <button type="submit" id="delete-button-<?php echo $row['id']; ?>">
                                    <div class="w-4 mr-2 transform hover:text-red-400 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                </button>
                        </div>
                        </form>
    </div>
    </td>

    <div id="modal_edit-3" class="fixed z-50 inset-0 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                <div class="bg-blue-600 px-4 py-2 flex justify-between items-center">
                    <h2 class="text-white font-bold">Modificar Registro Vehicular</h2>
                    <button class="modal-close-gestion text-white font-bold text-xl">&times;</button>
                </div>
                <div class="px-4 py-2">
                    <form action="../helpers/update_gestion.php" method="POST">
                        <input type="hidden" name="id_gestion" id="id_gestion" value="">
                        <div class="mb-3">
                            <label class="block text-gray-700 font-bold mb-2" for="correo">
                                Quien Reporta
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name_gestion" name="name_gestion" type="text" value="" required>
                        </div>

                        <div class="mb-3">
                            <label class="block text-gray-700 font-bold mb-2" for="correo">
                                Placa
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="placa" name="placa" type="text" value="" required>
                        </div>

                        <div class="mb-3">
                            <label class="block text-gray-700 font-bold mb-2" for="correo">
                                Kilometraje:
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="kilometraje" name="kilometraje" type="number" value="">
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile ?>
    </tbody>
    </table>


    <div id="paginacion" class="mt-8 relative right-0">

        <button id="anterior-4"
            class="bg-blue-500 rounded-full px-3 hover:bg-blue-700 text-white font-bold ">Anterior</button>
        <button id="siguiente-4"
            class="bg-blue-500 rounded-full px-3 hover:bg-blue-700 text-white font-bold ">Siguiente</button>
    </div>


    </div>

    <!-- Div Del Panel Combustible -->
    <div id="div-4" class="p-4  xl:ml-80" style="display:none;">
        <nav class="block w-full max-w-full bg-transparent text-black shadow-none rounded-xl transition-all px-0 py-1">
            <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
                <div class="capitalize">
                    <h6
                        class="block antialiased tracking-normal font-sans text-3xl font-bold leading-relaxed text-blue-gray-900">
                        Combustible</h6>
                </div>
                <div class="flex items-center">
                    <div class="mr-auto md:mr-4 md:w-56">
                        <div class="relative w-full min-w-[200px] h-10"><input
                                class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                                type="text" id="searchInput-gs" onkeyup="searchTableGasolina()" placeholder=" "><label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">Search
                            </label></div>
                    </div><button
                        class="open-menu relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 grid xl:hidden"
                        type="button" id="toggle-aside" style="position: relative; overflow: hidden;"><span
                            class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" stroke-width="3" class="h-6 w-6 text-blue-gray-500">
                                <path fill-rule="evenodd"
                                    d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                    clip-rule="evenodd"></path>
                            </svg></span></button>
                </div>
            </div>
        </nav>


        <div class="mb-12 grid gap-y-10 mt-8  gap-x-6 md:grid-cols-2 xl:grid-cols-4">
            <!---    
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                <div
                    class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                    <img src="../assets/imgs/gasolinera (1).png" alt="">
                </div>


                <div class="p-4 text-right">
                    <h4
                        class="block antialiased tracking-normal font-sans text-2xl font-bold leading-snug text-blue-gray-900">
                         Vehicular</h4>


            
                </div>

                <div class="border-t border-blue-gray-50 p-4">
                    <button id="modal-btn-3">
                        <p class="pl-0 block antialiased font-sans text-base leading-relaxed font-bold text-green-500">
                            <strong class="text-green-500 font-bold pl-4 text-2xl">+</strong> Añadir 
                        </p>
                    </button>
                </div>
            </div>-->




            <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                <div
                    class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-pink-600 to-pink-400 text-white shadow-pink-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                    <img src="../assets/imgs/gasolinera.png" alt="">
                </div>
                <div class="p-4 text-right">

                    <h4
                        class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                        <?php echo $row_cmb[0]; ?> </h4>
                </div>
                <div class="border-t border-blue-gray-50 p-4">
                    <p class="block antialiased font-sans text-base leading-relaxed font-bold text-blue-gray-600">
                        <strong class="text-green-500">Total </strong>&nbsp;Registros
                    </p>
                </div>
            </div>



        </div>


        <h1 class="text-2xl font-bold mt-4">Tabla De Registros</h1>
        <div class="overflow-x-auto">
            <table id="miTabla-gs" class="min-w-max w-full mt-4 table-auto ">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal ">
                        <th class="py-3 px-6 text-left">Id</th>
                        <th class="py-3 px-6 text-left">Fecha Reporte</th>
                        <th class="py-3 px-6 text-center">Quien Reporta</th>
                        <th class="py-3 px-6 text-center">Placa</th>
                        <th class="py-3 px-6 text-center">Estacion</th>
                        <th class="py-3 px-6 text-center">Cantidad</th>
                        <th class="py-3 px-6 text-center">Valor Litro</th>
                        <th class="py-3 px-6 text-center">Tipo Combustible</th>
                        <th class="py-3 px-6 text-center">Valor</th>
                        <th class="">Accion</th>
                    </tr>
                </thead>
                <tbody class="text-black text-sm font-light">
                    <?php 
                                while ($row = mysqli_fetch_assoc($result_cmb)) : ?>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-wrap w-24">
                            <div class="flex items-center">
                                <span class="font-medium"><?php echo $row['id'] ?></span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-left ">
                            <div class="flex items-center">
                                <span>
                                    <?php 
                                
                                echo date("d-m-Y", strtotime($row["dtfecha_reporte"]));
    
                                ?>
                                </span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center justify-center">
                                <span><?php echo $row['vcreporta'] ?></span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center justify-center">
                                <span><?php echo $row['vcplaca'] ?></span>
                            </div>
                        </td>

                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center justify-center">
                                <span><?php echo $row['vcestacion'] ?></span>
                            </div>
                        </td>

                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center justify-center">
                                <span><?php echo $row['dccantidad'] ?></span>
                            </div>
                        </td>

                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center justify-center">
                                <span><?php echo $row['dcvalor_litro'] ?></span>
                            </div>
                        </td>

                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center justify-center">
                                <span><?php echo $row['vctipo_combustible'] ?></span>
                            </div>
                        </td>

                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center justify-center">
                                <span><?php echo $row['dcvalor'] ?></span>
                            </div>
                        </td>



                        <td class="py-3 px-6 text-center">
                            <div class="flex item-center justify-center">
                                <button class="open-modal-4" data-estacion="<?php echo $row["vcestacion"]?>"
                                    data-cantidad="<?php echo $row["dccantidad"]?>"
                                    data-valor-litro="<?php echo $row['dcvalor_litro']?>"
                                    data-tipo-combustible="<?php echo $row['vctipo_combustible'] ?>"
                                    data-valor="<?php echo $row['dcvalor']?>" data-id="<?php echo $row["id"]?>"
                                    data-placa="<?php echo $row["vcplaca"] ?>"
                                    data-name="<?php echo $row["vcreporta"]?>">
                                    <div class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                </button>
                                <form id="delete-form-<?php echo $row['id']; ?>"
                                    action="../helpers/delete_combustible.php" method="POST">
                                    <input name="id" value="<?php echo $row['id']?> " hidden>

                                    <button type="submit" id="delete-button-<?php echo $row['id']; ?>">
                                        <div class="w-4 mr-2 transform hover:text-red-400 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                    </button>
                            </div>
                            </form>
        </div>
        </td>

        <div id="modal_edit-4" class="fixed z-50 inset-0 overflow-y-auto hidden">
            <div class="flex items-center justify-center min-h-screen px-4">
                <div class="fixed inset-0 transition-opacity">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>
                <div
                    class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                    <div class="bg-blue-600 px-4 py-2 flex justify-between items-center">
                        <h2 class="text-white font-bold">Modificar Registro</h2>
                        <button class="modal-close-cmb text-white font-bold text-xl">&times;</button>
                    </div>
                    <div class="px-4 py-2">
                        <form action="../helpers/update_combustible.php" method="POST">
                            <input type="hidden" name="id_cmb" id="id_cmb" value="">
                            <div class="mb-3">
                                <label class="block text-gray-700 font-bold mb-2" for="correo">
                                    Quien Reporta
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="name_cmb" name="name_cmb" type="text" value="" required>
                            </div>

                            <div class="mb-3">
                                <label class="block text-gray-700 font-bold mb-2" for="correo">
                                    Placa
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="placa_cmb" name="placa_cmb" type="text" value="" required>
                            </div>

                            <div class="mb-3">
                                <label class="block text-gray-700 font-bold mb-2" for="correo">
                                    Estacion:
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="estacion" name="estacion" type="text" value="">
                            </div>

                            <div class="mb-3">
                                <label class="block text-gray-700 font-bold mb-2" for="correo">
                                    Cantidad:
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="cantidad" name="cantidad" type="text" value="">
                            </div>

                            <div class="mb-3">
                                <label class="block text-gray-700 font-bold mb-2" for="correo">
                                    Valor litro:
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="litro" name="litro" type="text" value="">
                            </div>

                            <div class="mb-3">
                                <label class="block text-gray-700 font-bold mb-2" for="correo">
                                    Tipo Combustible:
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="tipo" name="tipo" type="text" value="">
                            </div>

                            <div class="mb-3">
                                <label class="block text-gray-700 font-bold mb-2" for="correo">
                                    Valor:
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="valor" name="valor" type="text" value="">
                            </div>



                            <div class="flex justify-end">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile ?>
        </tbody>
        </table>
    </div>


    <div id="paginacion" class="mt-8 relative right-0">

        <button id="anterior-5"
            class="bg-blue-500 rounded-full px-3 hover:bg-blue-700 text-white font-bold ">Anterior</button>
        <button id="siguiente-5"
            class="bg-blue-500 rounded-full px-3 hover:bg-blue-700 text-white font-bold ">Siguiente</button>
    </div>

    </div>

    </div>





    <div id="modal" class="fixed z-50 inset-0 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                <div class="bg-blue-600 px-4 py-2 flex justify-between items-center">
                    <h2 class="text-white font-bold">Crear Usuario</h2>
                    <button class="modal-close text-white font-bold text-xl">&times;</button>
                </div>
                <div class="px-4 py-2">
                    <form action="../../auth/register_auth.php" method="POST">

                        <div class="mb-3">
                            <label class="block text-gray-700 font-bold mb-2" for="correo">
                                Nombre Completo:
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name" name="name" type="name" placeholder="Juan Jose Caicedo" required>
                        </div>

                        <div class="mb-3">
                            <label class="block text-gray-700 font-bold mb-2" for="correo">
                                Correo electrónico:
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" name="email" type="email" placeholder="example@gmail.com" required>
                        </div>

                        <div class="mb-3">
                            <label class="block text-gray-700 font-bold mb-2" for="correo">
                                Contraseña:
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="password" name="password" type="password" placeholder="********" required>
                        </div>
                        <div class="mb-3">
                            <label class="block text-gray-700 font-bold mb-2" for="correo">
                                rol:
                            </label>
                            <select name="rol" id="rol" required>
                                <option value="" class="font-bold">-- <b>Selecciona una opción<b> --</option>

                                <?php 
                                while ($row_rols = mysqli_fetch_assoc($result_query)) : ?>
                                <option value="<?php echo  $row_rols['vcnombre']?>"><?php echo  $row_rols['vcnombre']?>
                                </option>
                                <?php endwhile ?>
                            </select>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






    <!--Crear Rol-->


    <div id="modal-3" class="fixed z-50 inset-0 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                <div class="bg-blue-600 px-4 py-2 flex justify-between items-center">
                    <h2 class="text-white font-bold">Crear Rol</h2>
                    <button class="modal-close-3 text-white font-bold text-xl">&times;</button>
                </div>
                <div class="px-4 py-2">
                    <form action="../../auth/rol_auth.php" method="POST">

                        <div class="mb-3">
                            <label class="block text-gray-700 font-bold mb-2" for="rol">
                                Nombre del Rol:
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name_rol" name="name_rol" type="text" placeholder="ej:usuario" required>
                        </div>

                        <div class="mb-3">
                            <label class="block text-gray-700 font-bold mb-2" for="correo">
                                Descripcion
                            </label>
                            <textarea
                                class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="desc" name="desc" type="text" placeholder="descripcion ..." required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="block text-gray-700 font-bold mb-2" for="estado">
                                Estado:
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="estado" name="estado" type="text" placeholder="activo" required>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script src="../static/js/pagination.js"></script>
    <script src="../static/js/modal_user.js"></script>
    <script src="../static/js/modal_rol.js"></script>



    <script src="../static/js/add_user_modal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6"></script>
    <script>
    // Obtener todos los botones de eliminar y agregar un evento de clic a cada uno
    const deleteButtons = document.querySelectorAll('[id^="delete-button-"]');
    deleteButtons.forEach((button) => {
        button.addEventListener('click', (event) => {
            // Prevenir el comportamiento predeterminado del botón de enviar
            event.preventDefault();

            // Obtener el formulario y el id correspondiente al botón de eliminar
            const id = button.getAttribute('id').replace('delete-button-', '');
            const deleteForm = document.querySelector(`#delete-form-${id}`);

            // Mostrar un toast de confirmación utilizando SweetAlert2
            Swal.fire({
                icon: 'warning',
                title: '¿Estás seguro?',
                text: 'De Eliminarlo?',
                showCancelButton: true,
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                // Si el usuario confirma la acción, enviar el formulario
                if (result.isConfirmed) {
                    deleteForm.submit();
                }
            });
        });
    });
    </script>
    <!--<script >
        // Obtener el modal y el botón para abrirlo
var modal2 = document.getElementById("modal_edit");
var btn2 = document.getElementById("modal-btn-2");
// Obtener el botón para cerrar el modal
var closeBtn2= document.querySelector(".modal-close-2");

// Cuando se hace clic en el botón, se muestra el modal
btn2.onclick = function() {
  modal2.classList.remove("hidden");
}

// Cuando se hace clic en el botón de cerrar o en cualquier parte fuera del modal, se cierra
closeBtn2.onclick = function() {
  modal2.classList.add("hidden");
}

window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.classList.add("hidden");
  }
}


    </script>-->


    <script>
    const aside = document.getElementById('open');
    const btn_close = document.getElementById('close_menu')
    //const toggleButton = document.getElementById('toggle-aside');
    const toggleButtons = document.querySelectorAll('.open-menu');

    btn_close.addEventListener('click', function() {
        console.log("hizo click al boton de cerrar")
        if (aside.classList.contains('-translate-x-85')) {
            aside.classList.remove('-translate-x-85');
            aside.classList.add('-translate-x-80');


        }

    });
    toggleButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            console.log("Hizo clic en un botón que abre el menú");
            if (aside.classList.contains('-translate-x-80')) {
                aside.classList.remove('-translate-x-80');
                console.log("Hizo clic dentro");

                aside.classList.add('-translate-x-85');

            }

        });
    });

    /*
    toggleButton.addEventListener('click', function() {
        console.log("hizo click my bro")
        aside.classList.remove('-translate-x-80');
        if (aside.classList.contains('-translate-x-85')) {
            aside.classList.remove('-translate-x-85');
            aside.classList.add('-translate-x-80');

        } else {
            console.log("hizo click para abrir el menu")
            aside.classList.add('-translate-x-85');

        }

    });*/



    function cambiarDiv(destino) {

        const div1 = document.getElementById('home');
        const div2 = document.getElementById('div-2');

        const div3 = document.getElementById('div-3');
        const div4 = document.getElementById('div-4');


        if (destino === 'div-2') {
            div1.style.display = 'none';
            div3.style.display = 'none';
            div4.style.display = 'none';
            div2.style.display = 'block';
        } else if (destino === 'home') {
            div1.style.display = 'block';
            div2.style.display = 'none';
            div4.style.display = 'none';
            div3.style.display = 'none';
        } else if (destino === 'div-3') {
            div1.style.display = 'none';
            div4.style.display = 'none';
            div2.style.display = 'none';
            div3.style.display = 'block';
        } else {
            div1.style.display = 'none';
            div4.style.display = 'block';
            div2.style.display = 'none';
            div3.style.display = 'none';
        }
    }
    </script>

    <script>
    function openModal(event) {
        const btn = event.target;
        const email = btn.closest('[data-email]').getAttribute('data-email');
        const emailInput = document.getElementById('email');

        emailInput.value = email;
        const btn_name = event.target;
        const nombre = btn_name.closest('[data-name]').getAttribute('data-name');
        const nombre_input = document.getElementById('name');

        nombre_input.value = nombre;

        const btn_id = event.target;
        const id = btn_id.closest('[data-id]').getAttribute('data-id');
        const id_input = document.getElementById('id');

        id_input.value = id;


        console.log(email)
        console.log(nombre)
        // Abre el modal
        document.getElementById('modal_edit').classList.remove('hidden');
    }

    // Agrega el evento click a todos los botones que abren el modal
    const openModalButtons = document.querySelectorAll('.open-modal');
    openModalButtons.forEach(button => {
        button.addEventListener('click', openModal);
    });

    // Función que cierra el modal
    function closeModal() {
        document.getElementById('modal_edit').classList.add('hidden');
    }

    // Agrega el evento click al botón de cerrar el modal
    const closeModalButton = document.querySelector('.modal-close-2');
    closeModalButton.addEventListener('click', closeModal);
    </script>


    <!--Roles Funcionalidad De Editar-->
    <script>
    function openModal1(event) {
        const btn = event.target;
        const desc = btn.closest('[data-descripcion]').getAttribute('data-descripcion');
        const desclInput = document.getElementById('desc');

        desclInput.value = desc;
        const btn_name = event.target;
        const name = btn_name.closest('[data-name]').getAttribute('data-name');
        const name_input = document.getElementById('name_rol');

        name_input.value = name;

        const btn_estado = event.target;
        const estado = btn_estado.closest('[data-estado]').getAttribute('data-estado');
        const estado_input = document.getElementById('estado');

        estado_input.value = estado;


        const btn_id = event.target;
        const id = btn_id.closest('[data-id]').getAttribute('data-id');
        const idInput = document.getElementById('id_rol');
        console.log(idInput)

        idInput.value = id;
        /*
        const btn_id = event.target;
        const id = btn_id.closest('[data-id]').getAttribute('data-id');
        const id_input = document.getElementById('id');

        id_input.value = id;*/


        console.log(estado)
        console.log(name)
        console.log(id)
        // Abre el modal
        document.getElementById('modal_edit-2').classList.remove('hidden');
    }

    // Agrega el evento click a todos los botones que abren el modal
    const openModalButtons1 = document.querySelectorAll('.open-modal-2');
    openModalButtons1.forEach(button1 => {
        button1.addEventListener('click', openModal1);
    });

    // Función que cierra el modal
    function closeModal1() {
        console.log("hello wordl")
        document.getElementById('modal_edit-2').classList.add('hidden');
    }

    // Agrega el evento click al botón de cerrar el modal
    const closeModalButton1 = document.querySelector('.modal-close-here');
    closeModalButton1.addEventListener('click', closeModal1);
    </script>


    <!-- Gestion Vehicular Funcionalidad De Editar-->

    <script>
    function openModal_Gestion(event) {
        const btn = event.target;
        const placa = btn.closest('[data-placa]').getAttribute('data-placa');
        const placa_input = document.getElementById('placa');

        placa_input.value = placa;
        const btn_name = event.target;
        const name = btn_name.closest('[data-name]').getAttribute('data-name');
        const name_input = document.getElementById('name_gestion');

        name_input.value = name;

        const btn_kilometraje = event.target;
        const kilometraje = btn_kilometraje.closest('[data-kilometraje]').getAttribute('data-kilometraje');
        const kilometraje_input = document.getElementById('kilometraje');

        kilometraje_input.value = kilometraje;


        const btn_id = event.target;
        const id = btn_id.closest('[data-id]').getAttribute('data-id');
        const idInput = document.getElementById('id_gestion');
        console.log(idInput)

        idInput.value = id;
        /*
        const btn_id = event.target;
        const id = btn_id.closest('[data-id]').getAttribute('data-id');
        const id_input = document.getElementById('id');

        id_input.value = id;*/


        console.log(kilometraje)
        console.log(name)
        console.log(id)
        // Abre el modal
        document.getElementById('modal_edit-3').classList.remove('hidden');
    }

    // Agrega el evento click a todos los botones que abren el modal
    const openModalButtons2 = document.querySelectorAll('.open-modal-3');
    openModalButtons2.forEach(button2 => {
        button2.addEventListener('click', openModal_Gestion);
    });

    // Función que cierra el modal
    function closeModal3() {
        console.log("hello wordl")
        document.getElementById('modal_edit-3').classList.add('hidden');
    }

    // Agrega el evento click al botón de cerrar el modal
    const closeModalButton2 = document.querySelector('.modal-close-gestion');
    closeModalButton2.addEventListener('click', closeModal3);
    </script>


    <!-- Combustible Funcionalidad De Editar-->

    <script>
    function openModal_Cmb(event) {
        const btn = event.target;
        const placa = btn.closest('[data-placa]').getAttribute('data-placa');
        const placa_input = document.getElementById('placa_cmb');



        placa_input.value = placa;
        const btn_name = event.target;
        const name = btn_name.closest('[data-name]').getAttribute('data-name');
        const name_input = document.getElementById('name_cmb');

        name_input.value = name;

        const btn_cantidad = event.target;
        const cantidad_ = btn_cantidad.closest('[data-cantidad]').getAttribute('data-cantidad');
        const cantidad_Input = document.getElementById('cantidad');

        cantidad_Input.value = cantidad_;

        const btn_valor_litro = event.target;
        const valor_litro_ = btn_valor_litro.closest('[data-valor-litro]').getAttribute('data-valor-litro');
        const valor_litro_Input = document.getElementById('litro');

        valor_litro_Input.value = valor_litro_;

        const btn_tipo_combustible = event.target;
        const tipo_combustible = btn_tipo_combustible.closest('[data-tipo-combustible]').getAttribute(
            'data-tipo-combustible');
        const combustible_Input = document.getElementById('tipo');

        combustible_Input.value = tipo_combustible;

        const btn_valor_ = event.target;
        const valor_ = btn_valor_.closest('[data-valor]').getAttribute('data-valor');
        const valor_Input = document.getElementById('valor');

        valor_Input.value = valor_;

        const btn_estacion_ = event.target;
        const estacion_ = btn_estacion_.closest('[data-estacion]').getAttribute('data-estacion');
        const estacion_Input = document.getElementById('estacion');

        estacion_Input.value = estacion_;



        const btn_id = event.target;
        const id = btn_id.closest('[data-id]').getAttribute('data-id');
        const idInput = document.getElementById('id_cmb');
        console.log(idInput)

        idInput.value = id;
        /*
        const btn_id = event.target;
        const id = btn_id.closest('[data-id]').getAttribute('data-id');
        const id_input = document.getElementById('id');

        id_input.value = id;*/


        // Abre el modal
        document.getElementById('modal_edit-4').classList.remove('hidden');
    }

    // Agrega el evento click a todos los botones que abren el modal
    const openModalButtons3 = document.querySelectorAll('.open-modal-4');
    openModalButtons3.forEach(button3 => {
        button3.addEventListener('click', openModal_Cmb);
    });

    // Función que cierra el modal
    function closeModal4() {
        console.log("hello wordl")
        document.getElementById('modal_edit-4').classList.add('hidden');
    }

    // Agrega el evento click al botón de cerrar el modal
    const closeModalButton3 = document.querySelector('.modal-close-cmb');
    closeModalButton3.addEventListener('click', closeModal4);
    </script>




    <!--Paginacion-->

    <script>
    var paginaActual = 1;
    var numPaginas;

    $(document).ready(function() {
        actualizarTabla();

        $('#anterior').click(function() {
            if (paginaActual > 1) {
                paginaActual--;
                actualizarTabla();
            }
        });

        $('#siguiente').click(function() {
            if (paginaActual < numPaginas) {
                paginaActual++;
                actualizarTabla();
            }
        });


    });

    function actualizarTabla() {
        var filasPorPagina = 6; // Cambia este valor para ajustar el número de filas por página
        var inicio = (paginaActual - 1) * filasPorPagina;
        var fin = inicio + filasPorPagina;
        var tabla = $('#miTabla tbody');
        var filas = tabla.find('tr');
        var numFilas = filas.length;
        numPaginas = Math.ceil(numFilas / filasPorPagina);

        // Actualiza los botones de paginación
        $('#anterior').prop('disabled', paginaActual == 1);
        $('#siguiente').prop('disabled', paginaActual == numPaginas);

        // Oculta todas las filas de la tabla
        filas.hide();

        // Muestra las filas de la página actual
        for (var i = inicio; i < fin && i < numFilas; i++) {
            filas.eq(i).show();
        }
    }
    </script>

    <!--Tabla De Usuarios Paginacion-->

    <script>
    var paginaActual3 = 1;
    var numPaginas3;

    $(document).ready(function() {
        actualizarTabla3();

        $('#anterior-3').click(function() {
            if (paginaActual3 > 1) {
                paginaActual3--;
                actualizarTabla3();
            }
        });

        $('#siguiente-3').click(function() {
            if (paginaActual3 < numPaginas3) {
                paginaActual3++;
                actualizarTabla3();
            }
        });


    });

    function actualizarTabla3() {
        console.log("wacho")
        var filasPorPagina3 = 5; // Cambia este valor para ajustar el número de filas por página
        var inicio3 = (paginaActual3 - 1) * filasPorPagina3;
        var fin3 = inicio3 + filasPorPagina3;
        var tabla3 = $('#miTabla3 tbody');
        var filas3 = tabla3.find('tr');
        var numFilas3 = filas3.length;
        numPaginas3 = Math.ceil(numFilas3 / filasPorPagina3);

        // Actualiza los botones de paginación
        $('#anterior-3').prop('disabled', paginaActual3 == 1);
        $('#siguiente-3').prop('disabled', paginaActual3 == numPaginas3);

        // Oculta todas las filas de la tabla
        filas3.hide();

        // Muestra las filas de la página actual
        for (var i3 = inicio3; i3 < fin3 && i3 < numFilas3; i3++) {
            filas3.eq(i3).show();
        }
    }
    </script>

    <!--Tabla De Gestion Vehicular Paginacion-->

    <script>
    var paginaActual4 = 1;
    var numPaginas4;

    $(document).ready(function() {
        actualizarTabla4();

        $('#anterior-4').click(function() {
            if (paginaActual4 > 1) {
                paginaActual4--;
                actualizarTabla4();
            }
        });

        $('#siguiente-4').click(function() {
            if (paginaActual4 < numPaginas4) {
                paginaActual4++;
                actualizarTabla4();
            }
        });


    });

    function actualizarTabla4() {
        console.log("wacho")
        var filasPorPagina4 = 5; // Cambia este valor para ajustar el número de filas por página
        var inicio4 = (paginaActual4 - 1) * filasPorPagina4;
        var fin4 = inicio4 + filasPorPagina4;
        var tabla4 = $('#miTabla_gestion tbody');
        var filas4 = tabla4.find('tr');
        var numFilas4 = filas4.length;
        numPaginas4 = Math.ceil(numFilas4 / filasPorPagina4);

        // Actualiza los botones de paginación
        $('#anterior-4').prop('disabled', paginaActual4 == 1);
        $('#siguiente-4').prop('disabled', paginaActual4 == numPaginas4);

        // Oculta todas las filas de la tabla
        filas4.hide();

        // Muestra las filas de la página actual
        for (var i4 = inicio4; i4 < fin4 && i4 < numFilas4; i4++) {
            filas4.eq(i4).show();
        }
    }
    </script>



    <!--Tabla De Combustible Paginacion-->

    <script>
    var paginaActual5 = 1;
    var numPaginas5;

    $(document).ready(function() {
        actualizarTabla5();

        $('#anterior-5').click(function() {
            if (paginaActual5 > 1) {
                paginaActual5--;
                actualizarTabla5();
            }
        });

        $('#siguiente-5').click(function() {
            if (paginaActual5 < numPaginas5) {
                paginaActual5++;
                actualizarTabla5();
            }
        });


    });

    function actualizarTabla5() {
        console.log("wacho")
        var filasPorPagina5 = 4; // Cambia este valor para ajustar el número de filas por página
        var inicio5 = (paginaActual5 - 1) * filasPorPagina5;
        var fin5 = inicio5 + filasPorPagina5;
        var tabla5 = $('#miTabla-gs tbody');
        var filas5 = tabla5.find('tr');
        var numFilas5 = filas5.length;
        numPaginas5 = Math.ceil(numFilas5 / filasPorPagina5);

        // Actualiza los botones de paginación
        $('#anterior-5').prop('disabled', paginaActual5 == 1);
        $('#siguiente-5').prop('disabled', paginaActual5 == numPaginas5);

        // Oculta todas las filas de la tabla
        filas5.hide();

        // Muestra las filas de la página actual
        for (var i5 = inicio5; i5 < fin5 && i5 < numFilas5; i5++) {
            filas5.eq(i5).show();
        }
    }
    </script>

    <script src="../static/js/search_table_user.js"></script>
    <script src="../static/js/search_table_roles.js"></script>
    <script src="../static/js/search_gestion.js"></script>
    <script src="../static/js/search_table_gasolina.js"></script>





    <?php echo $_SESSION['message_title'] ?>
    <?php if(isset($_SESSION['message_title'])): ?>
        <script>toastr.success('<?php echo  $_SESSION['message_title'] ?>',"<?php echo  $_SESSION['message_content']; ?>")</script>
        <?php unset($_SESSION['message_title']); ?>
        <?php unset($_SESSION['message_content']); ?>

    <?php endif; ?>

    
    <?php echo $_SESSION['message_title_error'] ?>
    <?php if(isset($_SESSION['message_title_error'])): ?>
        <script>toastr.error('<?php echo  $_SESSION['message_title_error'] ?>',"<?php echo  $_SESSION['message_content_error']; ?>")</script>
        <?php unset($_SESSION['message_title_error']); ?>
        <?php unset($_SESSION['message_content_error']); ?>

    <?php endif; ?>

</body>

</html>