<?php

if($_GET["idTabla"] == "criptomonedas"){
  $tabla= $_GET["idTabla"];
  $item = null;
  $valor = null;
  
  $fondo= ControladorFondo::ctrVerFondo($tabla,$item, $valor);
  
  echo'
  <section class="w3l-products py-5 mb-4" id="talks">
  <div class="container py-lg-3">
      <div class="header-section  mx-auto">
        <h2 class=""> </h2> 
        <h3 style="font-size:20px;"></h3>
         
      </div>

      <div class="card">
          <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Producto</th>
                <th>Spreads minimos</th>
                <th>Tamaño de lotes</th>
                <th>Tamaño de contrato</th>
                <th>Valor pip </th>
                <th>Divisa</th>
                <th>Cuentas 1400</th>
                <th>Cuentas 1200</th>
                <th>Cuentas 1100</th>
                <th>Swaps</th>
                <th>Horario Trading Lunes</th>
                <th>Horario Trading Martes</th>
                <th>Horario Trading Viernes</th>


              </tr>
            </thead>
            <tbody>
  ';
  foreach ($fondo as $key => $value) {

    echo' <tr>
    <td class="align-middle text-center">'.$value["nombre"].'</td>   
    <td class="align-middle text-center">'.$value["producto"].'</td>
    <td class="align-middle text-center">'.$value["spreads_minimos"].'</td>
    <td class="align-middle text-center">'.$value["tamano_de_lotes"].'</td>
    <td class="align-middle text-center">'.$value["tamano_de_contrato"].'</td>
    <td class="align-middle text-center">'.$value["valor_pip"].'</td>
    <td class="align-middle text-center">'.$value["divisa"].'</td>
    <td class="align-middle text-center">'.$value["cuentas_1400"].'</td>
    <td class="align-middle text-center">'.$value["cuentas_1200"].'</td>
    <td class="align-middle text-center">'.$value["cuentas_1100"].'</td>
    <td class="align-middle text-center">'.$value["swaps"].'</td>
    <td class="align-middle text-center">'.$value["horario_trading_lunes"].'</td>
    <td class="align-middle text-center">'.$value["horario_trading_martes"].'</td>
    <td class="align-middle text-center">'.$value["horario_trading_viernes"].'</td>


    </tr>
    ';

    
}
}else{
  echo'<section class="w3l-products py-5 mb-4" id="talks">
  <div class="container py-lg-3">
      <div class="header-section  mx-auto">
        <h2 class=""> </h2> 
        <h3 style="font-size:20px;"></h3>
         
      </div>

      <div class="card">
          <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Producto</th>
                <th>Spreads minimos</th>
                <th>Tamaño de lotes</th>
                <th>Tamaño de contrato</th>
                <th>valor pip </th>
                <th>Divisa</th>
                <th>Cuentas 1400</th>
                <th>Cuentas 1200</th>
                <th>Cuentas 1100</th>
                <th>Swaps</th>
                <th>inicio de sesion</th>
                <th>cierre de sesion</th>
                <th>Pausa del trading</th>


              </tr>
            </thead>
            <tbody>';

            $tabla= $_GET["idTabla"];
$item = null;
$valor = null;

$fondo= ControladorFondo::ctrVerFondo($tabla,$item, $valor);
foreach ($fondo as $key => $value) {

    echo' <tr>
    <td class="align-middle text-center">'.$value["nombre"].'</td>   
    <td class="align-middle text-center">'.$value["producto"].'</td>
    <td class="align-middle text-center">'.$value["spreads_minimos"].'</td>
    <td class="align-middle text-center">'.$value["tamano_de_lotes"].'</td>
    <td class="align-middle text-center">'.$value["tamano_de_contrato"].'</td>
    <td class="align-middle text-center">'.$value["valor_pip"].'</td>
    <td class="align-middle text-center">'.$value["divisa"].'</td>
    <td class="align-middle text-center">'.$value["cuentas_1400"].'</td>
    <td class="align-middle text-center">'.$value["cuentas_1200"].'</td>
    <td class="align-middle text-center">'.$value["cuentas_1100"].'</td>
    <td class="align-middle text-center">'.$value["swaps"].'</td>
    <td class="align-middle text-center">'.$value["inicio_de_sesion"].'</td>
    <td class="align-middle text-center">'.$value["cierre_de_sesion"].'</td>
    <td class="align-middle text-center">'.$value["pausa_del_trading"].'</td>


    </tr>
    ';

    
}

}

?>



              
              
             
            </tbody>
          </table>
        </div>

          
        </div>
        <!-- /.card-body -->
      </div>
  </div>
  <br>
</section>
