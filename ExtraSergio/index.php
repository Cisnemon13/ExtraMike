<?php $conexion = mysqli_connect('localhost','root','','jardineria')?>
<!DOCTYPE html>
<html>
<head>
  <title>Mostrar Consultas</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- RUTA:  http://localhost/Recu/ -->
  <style>
		body {
			font-family: 'Helvetica Neue', sans-serif;
			margin: 0;
			padding: 0;
			color: #333;
		}

		h1 {
			background-color: #0D293B;
			color: #FFF;
      text-align:center;
			border-top: 5px solid #0A6377;
			border-bottom: 5px solid #0A6377;
			text-transform: uppercase;
			letter-spacing: 0.1em;
			font-weight: 20;
			box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
		}


		th, td {
			border: 1px solid #EEE;
			padding: 0.8em;
			vertical-align: top;
			word-wrap: break-word;
		}

		th {
			background-color: #0D293B;
			color: #FFF;
			text-transform: uppercase;
			font-weight: 300;
		}


	</style>
</head>
<body>
  <h1>Consulta Uno</h1>

  <table id="consultaUnoTabla" >
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre Cliente</th>
        <th>Nombre Contacto</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Fax</th>
        <th>Direccion 1</th>
        <th>Direccion 2</th>
        <th>Ciudad</th>
        <th>Region</th>
        <th>Pais</th>
        <th>C.P</th>
        <th>Codigo_empleado_rep_ventas</th>
        <th> Limite credito</th>
      </tr>
      <?php 
      $sql = 'SELECT * FROM cliente WHERE codigo_cliente NOT IN (SELECT DISTINCT codigo_cliente FROM pago);';
      $result =mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
        <th><?php echo $mostrar['codigo_cliente']?></th>
        <th><?php echo $mostrar['nombre_cliente']?></th>
        <th><?php echo $mostrar['nombre_contacto']?></th>
        <th><?php echo $mostrar['apellido_contacto']?></th>
        <th><?php echo $mostrar['telefono']?></th>
        <th><?php echo $mostrar['fax']?></th>
        <th><?php echo $mostrar['linea_direccion1']?></th>
        <th><?php echo $mostrar['linea_direccion2']?></th>
        <th><?php echo $mostrar['ciudad']?></th>
        <th><?php echo $mostrar['region']?></th>
        <th><?php echo $mostrar['pais']?></th>
        <th><?php echo $mostrar['codigo_postal']?></th>
        <th><?php echo $mostrar['codigo_empleado_rep_ventas']?></th>
        <th><?php echo $mostrar['limite_credito']?></th>
      </tr>
      <?php 
        }
        ?>
    </thead>
    <tbody></tbody>
  </table>
  <h1>Consulta Dos</h1>
  <table id="consultaDosTabla">
    <thead>
      <tr>
      <th>ID</th>
        <th>Nombre Cliente</th>
        <th>Nombre Contacto</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Fax</th>
        <th>Direccion 1</th>
        <th>Direccion 2</th>
        <th>Ciudad</th>
        <th>Region</th>
        <th>Pais</th>
        <th>C.P</th>
        <th>Codigo_empleado_rep_ventas</th>
        <th> Limite credito</th>
      </tr>
      <?php 
      $sql ='SELECT * FROM cliente WHERE codigo_cliente NOT IN (SELECT DISTINCT codigo_cliente FROM pedido);';
      $result =mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
            <th><?php echo $mostrar['codigo_cliente']?></th>
        <th><?php echo $mostrar['nombre_cliente']?></th>
        <th><?php echo $mostrar['nombre_contacto']?></th>
        <th><?php echo $mostrar['apellido_contacto']?></th>
        <th><?php echo $mostrar['telefono']?></th>
        <th><?php echo $mostrar['fax']?></th>
        <th><?php echo $mostrar['linea_direccion1']?></th>
        <th><?php echo $mostrar['linea_direccion2']?></th>
        <th><?php echo $mostrar['ciudad']?></th>
        <th><?php echo $mostrar['region']?></th>
        <th><?php echo $mostrar['pais']?></th>
        <th><?php echo $mostrar['codigo_postal']?></th>
        <th><?php echo $mostrar['codigo_empleado_rep_ventas']?></th>
        <th><?php echo $mostrar['limite_credito']?></th>
      </tr>
      <?php 
        }
        ?>
    </thead>
    </table>
    <h1>Consulta Tres</h1>
  <table id="consultaTresTabla">
    <thead>
      <tr>
      <th>ID</th>
        <th>Nombre Cliente</th>
        <th>Nombre Contacto</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Fax</th>
        <th>Direccion 1</th>
        <th>Direccion 2</th>
        <th>Ciudad</th>
        <th>Region</th>
        <th>Pais</th>
        <th>C.P</th>
        <th>Codigo_empleado_rep_ventas</th>
        <th> Limite credito</th>
      </tr>
      <?php 
      $sql ='SELECT * FROM cliente WHERE codigo_cliente NOT IN (
        SELECT codigo_cliente
       FROM pago
        )
       UNION
      SELECT *
      FROM cliente
      WHERE  codigo_cliente NOT IN (
      SELECT codigo_cliente
      FROM pedido
       );';
      $result =mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
            <th><?php echo $mostrar['codigo_cliente']?></th>
        <th><?php echo $mostrar['nombre_cliente']?></th>
        <th><?php echo $mostrar['nombre_contacto']?></th>
        <th><?php echo $mostrar['apellido_contacto']?></th>
        <th><?php echo $mostrar['telefono']?></th>
        <th><?php echo $mostrar['fax']?></th>
        <th><?php echo $mostrar['linea_direccion1']?></th>
        <th><?php echo $mostrar['linea_direccion2']?></th>
        <th><?php echo $mostrar['ciudad']?></th>
        <th><?php echo $mostrar['region']?></th>
        <th><?php echo $mostrar['pais']?></th>
        <th><?php echo $mostrar['codigo_postal']?></th>
        <th><?php echo $mostrar['codigo_empleado_rep_ventas']?></th>
        <th><?php echo $mostrar['limite_credito']?></th>
      </tr>
      <?php 
        }
        ?>
    </thead>
  </table>
  <h1>Consulta Cuatro</h1>
  <table id="consultaSesisTabla">
    <thead>
      <tr>
        <th>Codigo empleado</th>
        <th>Nombre</th>
        <th>Apellido 1</th>
        <th>Apellido 2</th>
        <th>Extension</th>
        <th>Email</th>
        <th>Codigo Oficina</th>
        <th>Codigo Jefe</th>
        <th>Puesto</th>
      </tr>
      <?php 
      $sql ='SELECT * FROM empleado WHERE codigo_oficina IS NULL;';
      $result =mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
        <th><?php echo $mostrar['codigo_empleado']?></th>
        <th><?php echo $mostrar['nombre']?></th>
        <th><?php echo $mostrar['apellido1']?></th>
        <th><?php echo $mostrar['apellido2']?></th>
        <th><?php echo $mostrar['extension']?></th>
        <th><?php echo $mostrar['email']?></th>
        <th><?php echo $mostrar['codigo_oficina']?></th>
        <th><?php echo $mostrar['codigo_jefe']?></th>
        <th><?php echo $mostrar['puesto']?></th>
      </tr>
      <?php 
        }
        ?>
    </thead>
  </table>
  <h1>Consulta Cinco</h1>
  <table id="consultaSesisTabla">
    <thead>
      <tr>
      <th>Codigo empleado</th>
        <th>Nombre</th>
        <th>Apellido 1</th>
        <th>Apellido 2</th>
        <th>Extension</th>
        <th>Email</th>
        <th>Codigo Oficina</th>
        <th>Codigo Jefe</th>
        <th>Puesto</th>
      </tr>
      <?php 
      $sql ='SELECT * FROM empleado WHERE codigo_empleado NOT IN (SELECT codigo_empleado_rep_ventas FROM cliente)';
      $result =mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
            <th><?php echo $mostrar['codigo_empleado']?></th>
        <th><?php echo $mostrar['nombre']?></th>
        <th><?php echo $mostrar['apellido1']?></th>
        <th><?php echo $mostrar['apellido2']?></th>
        <th><?php echo $mostrar['extension']?></th>
        <th><?php echo $mostrar['email']?></th>
        <th><?php echo $mostrar['codigo_oficina']?></th>
        <th><?php echo $mostrar['codigo_jefe']?></th>
        <th><?php echo $mostrar['puesto']?></th>
      </tr>
      <?php 
        }
        ?>
    </thead>
  </table>
  <h1>Consulta Seis</h1>
  <table id="consultaSesisTabla">
    <thead>
      <tr>
        <th>Numero de Empleados</th>
      </tr>
      <?php 
      $sql ='SELECT COUNT(*) AS total_empleados
      FROM empleado;';
      $result =mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
        <th><?php echo $mostrar['total_empleados']?></th>
      </tr>
      <?php 
        }
        ?>
    </thead>
  </table>
  <h1>Consulta Siete</h1>
  <table id="consultaSieteTabla">
    <thead>
      <tr>
        <th>Pais</th>
        <th>Clientes</th>
      </tr>
      <?php 
      $sql ='SELECT pais, COUNT(*) AS total_cliente
      FROM cliente
      GROUP BY pais;';
      $result =mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
        <th><?php echo $mostrar['pais']?></th>
        <th><?php echo $mostrar['total_cliente']?></th>
      </tr>
      <?php 
        }
        ?>
    </thead>
  </table>
  <h1>Consulta Ocho</h1>
  <table id="consultaOchoTabla">
    <thead>
      <tr>
        <th>Media de pago 2009</th>
      </tr>
      <?php 
      $sql ='SELECT AVG(total) AS pago_promedio_2009
      FROM pago
      WHERE YEAR(fecha_pago) = 2009;';
      $result =mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
        <th><?php echo $mostrar['pago_promedio_2009']?></th>
      </tr>
      <?php 
        }
        ?>
    </thead>
  </table>
  <h1>Consulta Nueve</h1>
  <table id="consultaNueveTabla">
    <thead>
      <tr>
        <th>Estado</th>
        <th>Cantidad de pedidos</th>
      </tr>
      <?php 
      $sql ='SELECT estado, COUNT(*) AS cantidad_pedidos
      FROM pedido
      GROUP BY estado
      ORDER BY cantidad_pedidos DESC;';
      $result =mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
        <th><?php echo $mostrar['estado']?></th>
        <th><?php echo $mostrar['cantidad_pedidos']?></th>
      </tr>
      <?php 
        }
        ?>
    </thead>
  </table>
  <h1>Consulta Diez</h1>
  <table id="consultaDiezTabla">
    <thead>
      <tr>
        <th>Nombre Cliente</th>
        <th>Limite Créditicio</th>
      </tr>
      <?php 
      $sql ='SELECT nombre_cliente, limite_credito
      FROM cliente
      ORDER BY limite_credito DESC
      LIMIT 1;';
      $result =mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
        <th><?php echo $mostrar['nombre_cliente']?></th>
        <th><?php echo $mostrar['limite_credito']?></th>
      </tr>
      <?php 
        }
        ?>
    </thead>
  </table>
</body>
</html>