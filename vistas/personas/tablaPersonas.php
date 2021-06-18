<?php 
    include "../../clases/Conexion.php";
    $obj=new Conexion();
    $conexion=$obj->conectar();
    $sql="SELECT paterno, materno, nombre, email, telefono, id_persona FROM t_persona";
    $result=mysqli_query($conexion,$sql);
?>
<div class="table-responsive">
    <table class="table table-condensed table-hover" id="personasDataTable">
        <thead>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            <?php while($ver=mysqli_fetch_row($result)):?>
            <tr>
                <td><?php echo $ver[0]; ?></td>
                <td><?php echo $ver[1]; ?></td>
                <td><?php echo $ver[2]; ?></td>
                <td><?php echo $ver[3]; ?></td>
                <td><?php echo $ver[4]; ?></td>
                <td>
                    <span class="btn btn-warning" data-toggle="modal" data-target="#modalActualizarPersona" onclick="obtenerDatos(<?php echo $ver[5]; ?>)">
                        Editar
                    </span>
                </td>
                <td>
                    <span class="btn btn-danger" onclick="eliminarPersona(<?php echo $ver[5]; ?>)" >Eliminar</span>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function(){
        $('#personasDataTable').DataTable();
    });
</script>