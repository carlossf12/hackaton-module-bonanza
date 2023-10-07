<?php
require_once("./conekta/lib/Conekta.php");
\Conekta\Conekta::setApiKey("key_msQB6PWGPOrKlZdWdm72RiK");
\Conekta\Conekta::setApiVersion("2.0.0");



try {

  $thirty_days_from_now = (new DateTime())->add(new DateInterval('P30D'))->getTimestamp();

  $order = \Conekta\Order::create(
    [
      "line_items" => [
        [
          "name" => "Box of Cohiba S1s",
          "unit_price" => 100 * 100,
          "quantity" => 1
        ]
      ],
      "shipping_lines" => [
        [
          "amount" => 0,
          "carrier" => "DHL"
        ]
      ],
      "currency" => "MXN",
      "customer_info" => [
        "name" => "Carlos Flores",
        "phone" => "+5213353319758",
        "email" => "carlossfl_04@hotmail.com"
      ],
      "charges" => [
        [
          "payment_method" => [
            "type" => "oxxo_cash",
            "expires_at" => $thirty_days_from_now
          ]
        ]
      ],
      "metadata" => [
        "reference" => "12987324097",
        "more_info" => "lalalalala",
        "more_info2" => "lalalalalajorge",
      ],
      "shipping_contact" => [
        "address" => [
          "street1" => "250 Alexis St",
          "postal_code" => "98121",
          "country" => "US"
        ]
      ]
    ]
  );
} catch (\Conekta\ParameterValidationError $error) {
  echo $error->getMessage();
} catch (\Conekta\Handler $error) {
  echo $error->getMessage();
}


?>
<!DOCTYPE html>
<html lang="zxx" dir="ltr" class="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Bonanza</title>
  <link rel="icon" type="image/png" href="assets/images/logo/favicon.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" href="assets/css/rt-plugins.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="stylesheet" href="style.css">

  <!-- End : Theme CSS-->
  <script src="assets/js/settings.js" sync></script>
  <link href="./tallerconekta/stylesoxxo.css" media="all" rel="stylesheet" type="text/css">
</head>

<body class=" font-inter dashcode-app" id="body_class">
  <!-- [if IE]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif] -->
  <main class="app-wrapper">
    <!-- BEGIN: Sidebar -->
    <!-- BEGIN: Sidebar -->
    <div class="sidebar-wrapper group">
      <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div>
      <div class="logo-segment">
        <a class="flex items-center" href="index.php">
          <img src="assets/images/logo/BONANZA.png" class="black_logo" alt="logo">
          <img src="assets/images/logo/BONANZA.png" class="white_logo" alt="logo">
          <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white"></span>
        </a>
        <!-- Sidebar Type Button -->
        <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
          <span class="sidebarDotIcon extend-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
            <div class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150 ring-2 ring-inset ring-offset-4 ring-black-900 dark:ring-slate-400 bg-slate-900 dark:bg-slate-400 dark:ring-offset-slate-700"></div>
          </span>
          <span class="sidebarDotIcon collapsed-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
            <div class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150"></div>
          </span>
        </div>
        <button class="sidebarCloseIcon text-2xl">
          <iconify-icon class="text-slate-900 dark:text-slate-200" icon="clarity:window-close-line"></iconify-icon>
        </button>
      </div>
      <div id="nav_shadow" class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
      opacity-0"></div>
      <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] overflow-y-auto z-50" id="sidebar_menus">
        <ul class="sidebar-menu">

          <!-- Apps Area -->
          <li class="sidebar-menu-title">MENU</li>

          <li class="">
            <a href="javascript:void(0)" class="navItem">
              <span class="flex items-center">
                <iconify-icon class=" nav-icon" icon="heroicons-outline:document"></iconify-icon>
                <span>Pagos</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a href="index.php">Pagar</a>
              </li>
            </ul>
          </li>
      </div>
    </div>
    <!-- End: Sidebar -->
    <!-- End: Sidebar -->
    <!-- BEGIN: Settings -->

    <!-- BEGIN: Settings -->
    <!-- Settings Toggle Button -->
    <button class="fixed ltr:md:right-[-29px] ltr:right-0 rtl:left-0 rtl:md:left-[-29px] top-1/2 z-[888] translate-y-1/2 bg-slate-800 text-slate-50 dark:bg-slate-700 dark:text-slate-300 cursor-pointer transform rotate-90 flex items-center text-sm font-medium px-2 py-2 shadow-deep ltr:rounded-b rtl:rounded-t" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
      <iconify-icon class="text-slate-50 text-lg animate-spin" icon="material-symbols:settings-outline-rounded"></iconify-icon>
      <span class="hidden md:inline-block ltr:ml-2 rtl:mr-2">Chat</span>
    </button>

    <!-- BEGIN: Settings Modal -->
    <div class="offcanvas offcanvas-end fixed bottom-0 flex flex-col max-w-full bg-white dark:bg-slate-800 invisible bg-clip-padding shadow-sm outline-none transition duration-300 ease-in-out text-gray-700 top-0 ltr:right-0 rtl:left-0 border-none w-96" tabindex="-1" id="offcanvas" aria-labelledby="offcanvas">
      <div class="offcanvas-header flex items-center justify-between p-4 pt-3 border-b border-b-slate-300">
      

        <button type="button" class="box-content text-2xl w-4 h-4 p-2 pt-0 -my-5 -mr-2 text-black dark:text-white border-none rounded-none opacity-100 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="offcanvas"><iconify-icon icon="line-md:close"></iconify-icon></button>
      </div>
      <div class="offcanvas-body flex-grow overflow-y-auto">
        <div class="settings-modal">
        


          <div class="divider"></div>
          <div class="p-6">



          </div>

          <div class="divider"></div>
          <div class="divider"></div>

          <div class="wrapper">
        <div class="title">Chat Bonanza</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hola, ¿cómo puedo ayudarte?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Escribe algo aquí.." required>
                <button id="send-btn">Enviar</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#send-btn").on("click", function() {
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');

                // iniciar el código ajax
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                        $(".form").append($replay);
                        // cuando el chat baja, la barra de desplazamiento llega automáticamente al final
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>

        </div>
      </div>
    </div>
    <!-- END: Settings Modal -->
    <!-- END: Settings -->

    <!-- End: Settings -->
    <div class="flex flex-col justify-between min-h-screen">
      <div>
        <!-- BEGIN: Header -->
        <!-- BEGIN: Header -->
        <div class="z-[9]" id="app_header">
          <div class="app-header z-[999] ltr:ml-[248px] rtl:mr-[248px] bg-white dark:bg-slate-800 shadow-sm dark:shadow-slate-700">
            <div class="flex justify-between items-center h-full">
              <div class="flex items-center md:space-x-4 space-x-2 xl:space-x-0 rtl:space-x-reverse vertical-box">
                <a href="index.html" class="mobile-logo xl:hidden inline-block">
                  <img src="assets/images/logo/logo-c.svg" class="black_logo" alt="logo">
                  <img src="assets/images/logo/logo-c-white.svg" class="white_logo" alt="logo">
                </a>
                <button class="smallDeviceMenuController hidden md:inline-block xl:hidden">
                  <iconify-icon class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white" icon="heroicons-outline:menu-alt-3"></iconify-icon>
                </button>
                <button class="flex items-center xl:text-sm text-lg xl:text-slate-400 text-slate-800 dark:text-slate-300 px-1
        rtl:space-x-reverse search-modal" data-bs-toggle="modal" data-bs-target="#searchModal">
                  <iconify-icon icon="heroicons-outline:search"></iconify-icon>
                  <span class="xl:inline-block hidden ml-3">Search...
                  </span>
                </button>

              </div>
              <!-- end vertcial -->
              <div class="items-center space-x-4 rtl:space-x-reverse horizental-box">
                <a href="index.html">
                  <span class="xl:inline-block hidden">
                    <img src="assets/images/logo/logo.svg" class="black_logo " alt="logo">
                    <img src="assets/images/logo/logo-white.svg" class="white_logo" alt="logo">
                  </span>
                  <span class="xl:hidden inline-block">
                    <img src="assets/images/logo/logo-c.svg" class="black_logo " alt="logo">
                    <img src="assets/images/logo/logo-c-white.svg" class="white_logo " alt="logo">
                  </span>
                </a>
                <button class="smallDeviceMenuController  open-sdiebar-controller xl:hidden inline-block">
                  <iconify-icon class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white" icon="heroicons-outline:menu-alt-3"></iconify-icon>
                </button>

              </div>
              <!-- end horizental -->



              <div class="main-menu">
               
              </div>
              <!-- end top menu -->
              <div class="nav-tools flex items-center lg:space-x-5 space-x-3 rtl:space-x-reverse leading-0">

                <!-- BEGIN: Language Dropdown  -->
                <!-- Theme Changer -->
                <!-- END: Language Dropdown -->

                <!-- BEGIN: Toggle Theme -->
                <div>
                  <button id="themeMood" class="h-[28px] w-[28px] lg:h-[32px] lg:w-[32px] lg:bg-gray-500-f7 bg-slate-50 dark:bg-slate-900 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center">
                    <iconify-icon class="text-slate-800 dark:text-white text-xl dark:block hidden" id="moonIcon" icon="line-md:sunny-outline-to-moon-alt-loop-transition"></iconify-icon>
                    <iconify-icon class="text-slate-800 dark:text-white text-xl dark:hidden block" id="sunIcon" icon="line-md:moon-filled-to-sunny-filled-loop-transition"></iconify-icon>
                  </button>
                </div>
                <!-- END: TOggle Theme -->

                <!-- BEGIN: Profile Dropdown -->
                
                <!-- END: Header -->
                <button class="smallDeviceMenuController md:hidden block leading-0">
                  <iconify-icon class="cursor-pointer text-slate-900 dark:text-white text-2xl" icon="heroicons-outline:menu-alt-3"></iconify-icon>
                </button>
                <!-- end mobile menu -->
              </div>
              <!-- end nav tools -->
            </div>
          </div>
        </div>

        <!-- BEGIN: Search Modal -->
        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
          <div class="modal-dialog relative w-auto pointer-events-none top-1/4">
            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-900 bg-clip-padding rounded-md outline-none text-current">
              <form>
                <div class="relative">
                  <input type="text" class="form-control !py-3 !pr-12" placeholder="Search">
                  <button class="absolute right-0 top-1/2 -translate-y-1/2 w-9 h-full border-l text-xl border-l-slate-200 dark:border-l-slate-600 dark:text-slate-300 flex items-center justify-center">
                    <iconify-icon icon="heroicons-solid:search"></iconify-icon>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- END: Search Modal -->
        <!-- END: Header -->
        <!-- END: Header -->
        <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
          <div class="page-content">
            <div class="transition-all duration-150 container-fluid" id="page_layout">
              <div id="content_layout">

                <div class="space-y-5">
                  <div class="grid xl:grid-cols-3 grid-cols-1 gap-5">

                  </div>
                  <div class="grid grid-cols-12 gap-5">
                    <div class="xl:col-span-8 lg:col-span-7 col-span-12">
                      <div class="card">
                        <div class="card-header noborder">
                          <h4 class="card-title ">Seleccione el método de pago</h4>
                          <div>...</div>
                        </div>
                        <div class="card-body p-6">

                          <!-- BEGIN: Team Table -->

                          <div class="overflow-x-auto -mx-6">
                            <div class="inline-block min-w-full align-middle">
                              <div class="overflow-hidden ">
                                <div class="card">
                                  <div class="card-body flex flex-col p-6">
                                    <div class="card-text h-full">
                                      <div>
                                        <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4" id="tabs-tab" role="tablist">
                                          <li class="nav-item" role="presentation">
                                            <a href="#tabs-messages-withIcon" class="nav-link w-full flex items-center font-medium text-sm font-Inter leading-tight capitalize border-x-0 border-t-0 border-b border-transparent px-4 pb-2 my-2 hover:border-transparent focus:border-transparent dark:text-slate-300" id="tabs-messages-withIcon-tab" data-bs-toggle="pill" data-bs-target="#tabs-messages-withIcon" role="tab" aria-controls="tabs-messages-withIcon" aria-selected="false">
                                              <iconify-icon class="mr-1" icon="heroicons-outline:chat-alt-2"></iconify-icon>
                                              Conekta</a>
                                          </li>
                                        </ul>
                                        <div class="tab-content" id="tabs-tabContent">
                                          <div class="tab-pane fade" id="tabs-messages-withIcon" role="tabpanel" aria-labelledby="tabs-messages-withIcon-tab">
                                            <p class="text-sm text-gray-500 dark:text-gray-200">
                                              Utilizar el metodo de pago.
                                            <div class="card">
                                              <div class="card-body rounded-md bg-white dark:bg-slate-800 shadow-base">
                                                <div class="items-center text-center p-5">
                                                  <h3 class="card-title text-slate-900 dark:text-white">Conekta</h3>
                                                  <div class="bg-no-repeat bg-cover bg-center px-5 py-8 rounded-[6px] relative flex items-center" style="background-image: url(assets/images/all-img/widget-bg-6.png)">
                                                    <div class="flex-1">
                                                      <div class="max-w-[180px]">
                                                        <h4 class="text-2xl font-medium text-white mb-2">
                                                          <span class="block text-sm">Total a pagar</span>
                                                          <span class="block">$100</span>
                                                        </h4>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <button data-bs-toggle="modal" data-bs-target="#successModal" class="btn inline-flex justify-center btn-outline-success capitalize">proceder al pago</button>

                                                  <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog relative w-auto pointer-events-none">
                                                      <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding
                                                                      rounded-md outline-none text-current">
                                                        <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                                                          <!-- Modal header -->
                                                          <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-success-500">
                                                            <h3 class="text-base font-medium text-white dark:text-white capitalize">
                                                              Proceder al pago
                                                              Modal
                                                            </h3>
                                                            <button type="button" class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center
                                                                                  dark:hover:bg-slate-600 dark:hover:text-white" data-bs-dismiss="modal">
                                                              <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10
                                                                                          11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                              </svg>
                                                              <span class="sr-only">Close modal</span>
                                                            </button>
                                                          </div>
                                                          <!-- Modal body -->
                                                          <div class="p-6 space-y-4">
                                                            <div class="opps">
                                                              <div class="opps-header">
                                                                <div class="opps-reminder">Ficha digital. No es necesario imprimir.</div>
                                                                <div class="opps-info">
                                                                  <div class="opps-brand"><img src="./tallerconekta/oxxopay_brand.png" alt="OXXOPay"></div>
                                                                  <div class="opps-ammount">
                                                                    <h3>Monto a pagar</h3>
                                                                    <h2><?php echo  '$' . $order->amount / 100 ?> <sup>MXN</sup></h2>
                                                                    <p>OXXO cobrará una comisión adicional al momento de realizar el pago.</p>
                                                                  </div>
                                                                </div>
                                                                <div class="opps-reference">
                                                                  <h3>Referencia</h3>
                                                                  <h1><?php echo $order->charges[0]->payment_method->reference ?> </h1>
                                                                </div>
                                                                <div class="opps-reference">
                                                                  <h3>Referencia</h3>
                                                                  <img src="./img/qr-code-1.png" alt="" srcset="">
                                                                </div>
                                                              </div>
                                                              <div class="opps-instructions">
                                                                <h3>Instrucciones</h3>
                                                                <ol>
                                                                  <li>Acude a la tienda OXXO más cercana. <a href="https://www.google.com.mx/maps/search/oxxo/" target="_blank"><strong>Encuéntrala aquí</strong></a>.</li>
                                                                  <li>Indica en caja que quieres realizar un pago de servicio<strong></strong>.</li>
                                                                  <li>Dicta al cajero el número de referencia en esta ficha para que tecleé directamete en la pantalla de venta.</li>
                                                                  <li>Realiza el pago correspondiente con dinero en efectivo.</li>
                                                                  <li>Al confirmar tu pago, el cajero te entregará un comprobante impreso. <strong>En el podrás verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.</li>
                                                                </ol>
                                                                <div class="opps-footnote">Al completar estos pasos recibirás un correo de <strong>Nombre del negocio</strong> confirmando tu pago.</div>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <!-- Modal footer -->
                                                          <div class="flex items-center p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                                                            <button data-bs-dismiss="modal" class="btn inline-flex justify-center text-white bg-success-500">Aceptar</button>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            </p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END: Team table -->

                        </div>
                      </div>
                    </div>
                    <div class="xl:col-span-4 lg:col-span-5 col-span-12">
                      <div class="card h-full">
                        <div class="card-header">
                          <h4 class="card-title">Historial</h4>
                          <div>...</div>
                        </div>
                        <div class="card-body p-6">

                          <!-- BEGIN: Files Card -->


                          <ul class="divide-y divide-slate-100 dark:divide-slate-700">

                            <li class="block py-[8px]">
                              <div class="flex space-x-2 rtl:space-x-reverse">
                                <div class="flex-1 flex space-x-2 rtl:space-x-reverse">
                                  <div class="flex-none">
                                    <div class="h-8 w-8">
                                      <img src=assets/images/icon/file-1.svg alt="" class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                                    </div>
                                  </div>
                                  <div class="flex-1">
                                    <span class="block text-slate-600 text-sm dark:text-slate-300">
                                      Pago de luz
                                    </span>
                                    <span class="block font-normal text-xs text-slate-500 mt-1">
                                      06 June 2021 / 100 mx
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </li>

                            <li class="block py-[8px]">
                              <div class="flex space-x-2 rtl:space-x-reverse">
                                <div class="flex-1 flex space-x-2 rtl:space-x-reverse">
                                  <div class="flex-none">
                                    <div class="h-8 w-8">
                                      <img src=assets/images/icon/pdf-1.svg alt="" class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                                    </div>
                                  </div>
                                  <div class="flex-1">
                                    <span class="block text-slate-600 text-sm dark:text-slate-300">
                                      Pago de tenis
                                    </span>
                                    <span class="block font-normal text-xs text-slate-500 mt-1">
                                      06 June 2021 / 2000 mx
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </li>

                            <li class="block py-[8px]">
                              <div class="flex space-x-2 rtl:space-x-reverse">
                                <div class="flex-1 flex space-x-2 rtl:space-x-reverse">
                                  <div class="flex-none">
                                    <div class="h-8 w-8">
                                      <img src=assets/images/icon/pdf-2.svg alt="" class="block w-full h-full object-cover rounded-full border hover:border-white border-transparent">
                                    </div>
                                  </div>
                                  <div class="flex-1">
                                    <span class="block text-slate-600 text-sm dark:text-slate-300">
                                      Pago de amazon
                                    </span>
                                    <span class="block font-normal text-xs text-slate-500 mt-1">
                                      06 June 2021 / 1000 mx
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </li>

                          </ul>
                          <!-- END: FIles Card -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- BEGIN: Footer For Desktop and tab -->
      <footer class="md:block hidden" id="footer">
        <div class="site-footer px-6 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-300 py-4 ltr:ml-[248px] rtl:mr-[248px]">
          <div class="grid md:grid-cols-2 grid-cols-1 md:gap-5">
            <div class="text-center ltr:md:text-start rtl:md:text-right text-sm">
              COPYRIGHT ©
              <span id="thisYear"></span>
              Buhos Verdes, All rights Reserved
            </div>
            <div class="ltr:md:text-right rtl:md:text-end text-center text-sm">
              Hand-crafted &amp; Made by
              <a href="" target="_blank" class="text-primary-500 font-semibold">
                Buhos Verdes
              </a>
            </div>
          </div>
        </div>
      </footer>
      <!-- END: Footer For Desktop and tab -->

      <div class="bg-white bg-no-repeat custom-dropshadow footer-bg dark:bg-slate-700 flex justify-around items-center
    backdrop-filter backdrop-blur-[40px] fixed left-0 bottom-0 w-full z-[9999] bothrefm-0 py-[12px] px-4 md:hidden">
        <a href="chat.html">
          <div>
            <span class="relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900 ">
              <iconify-icon icon="heroicons-outline:mail"></iconify-icon>
              <span class="absolute right-[5px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
            justify-center rounded-full text-white z-[99]">
                10
              </span>
            </span>
            <span class="block text-[11px] text-slate-600 dark:text-slate-300">
              Messages
            </span>
          </div>
        </a>
        <a href="profile.html" class="relative bg-white bg-no-repeat backdrop-filter backdrop-blur-[40px] rounded-full footer-bg dark:bg-slate-700
      h-[65px] w-[65px] z-[-1] -mt-[40px] flex justify-center items-center">
          <div class="h-[50px] w-[50px] rounded-full relative left-[0px] hrefp-[0px] custom-dropshadow">
            <img src="assets/images/users/user-1.jpg" alt="" class="w-full h-full rounded-full border-2 border-slate-100">
          </div>
        </a>
        <a href="#">
          <div>
            <span class=" relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900">
              <iconify-icon icon="heroicons-outline:bell"></iconify-icon>
              <span class="absolute right-[17px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
            justify-center rounded-full text-white z-[99]">
                2
              </span>
            </span>
            <span class=" block text-[11px] text-slate-600 dark:text-slate-300">
              Notifications
            </span>
          </div>
        </a>
      </div>
    </div>
  </main>
  <!-- scripts -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/rt-plugins.js"></script>
  <script src="assets/js/app.js"></script>
</body>

</html>