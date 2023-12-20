<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.10.16/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.10.16/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.10.16/themes/color.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.10.16/demo/demo.css">
    <script type="text/javascript" src="jquery-easyui-1.10.16/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.10.16/jquery.easyui.min.js"></script>
</head>

<body>

    <main>


        <aside>
            <h2>CRUD Students</h2>
            <p>Click the buttons on datagrid toolbar to do crud actions.</p>

            <table id="dg" title="Estudiantes" class="easyui-datagrid" style="width:700px;height:250px" method="GET" url="http://localhost/quintosoa/api.php" toolbar="#toolbar" pagination="true" rownumbers="true" fitColumns="true" singleSelect="true">
                <thead>
                    <tr>
                        <th field="cedula" width="50">Cedula</th>
                        <th field="nombre" width="50">Nombre</th>
                        <th field="apellido" width="50">Apellido</th>
                        <th field="direccion" width="50">Direccion</th>
                        <th field="telefono" width="50">Telefono</th>
                    </tr>
                </thead>

            </table>
            <div id="toolbar">
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">New User</a>
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Edit User</a>

                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove User</a>
                <a href="../../reportes/reporteEstudiantes.php" class="easyui-linkbutton" iconCls="icon-remove" plain="true">Reporte con FPDF</a>
                <a href="../../phpjasperxml/examples/RepoEstJasper.php" class="easyui-linkbutton" iconCls="icon-remove" plain="true">Reporte con JasperReport</a>
            </div>

            <div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
                <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
                    <h3>Informacion de Estudiante</h3>
                    <div style="margin-bottom:10px">
                        <input name="cedula" class="easyui-textbox" required="true" label="cedula:" style="width:100%">
                    </div>
                    <div style="margin-bottom:10px">
                        <input name="nombre" class="easyui-textbox" required="true" label="Nombre:" style="width:100%">
                    </div>
                    <div style="margin-bottom:10px">
                        <input name="apellido" class="easyui-textbox" required="true" label="Apellido:" style="width:100%">
                    </div>
                    <div style="margin-bottom:10px">
                        <input name="direccion" class="easyui-textbox" required="true" label="Direccion:" style="width:100%">
                    </div>
                    <div style="margin-bottom:10px">
                        <input name="telefono" class="easyui-textbox" required="true" label="Telefono:" style="width:100%">
                    </div>
                </form>
            </div>
            <div id="dlg-buttons">
                <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a>
                <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="actualizar()" style="width:90px">Editar</a>
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
            </div>
            <script type="text/javascript">
                var url;

                function newUser() {
                    $('#dlg').dialog('open').dialog('center').dialog('setTitle', 'New User');
                    $('#fm').form('clear');
                    url = 'http://localhost/quintosoa/api.php';
                }



                function editUser() {
            var row = $('#dg').datagrid('getSelected');
            $('#botonAct').show();
            $('#botonGuardar').hide();
            if (row) {
                $('#dlg').dialog('open').dialog('center').dialog('setTitle', 'Edit User');
                $('#fm').form('load', row);
                urlAct = 'http://localhost/quintosoa/api.php';
            };

        }

        function actualizar() {
            var formData = $('#fm').serializeArray();
            var data = formData.reduce(function (obj, item) {
                obj[item.name] = item.value;
                return obj;
            }, {});

            $.ajax({
                url: urlAct,
                type: 'PUT',
                data: JSON.stringify(data),
                success: function (result) {
                    if (result) {
                        console.log("Se actualizo correctamente ");
                         $('#dg').datagrid('reload'); // reload the user data   // reload the user data
                          $('#dlg').dialog('close');
                    } else {
                        $.messager.show({ // show error message
                            title: 'Error',
                            msg: result.errorMsg
                        });
                    }
                    // location.reload();
                },
                dataType: 'json'
            });
        }

                function saveUser() {
                    $('#fm').form('submit', {
                        method : 'post',
                        url: url,
                        iframe: false,
                        onSubmit: function() {
                            return $(this).form('validate');
                        },
                        success: function(result) {
                            var result = eval('(' + result + ')');
                            if (result.errorMsg) {
                                $.messager.show({
                                    title: 'Error',
                                    msg: result.errorMsg
                                });
                            } else {
                                $('#dlg').dialog('close'); // close the dialog
                                $('#dg').datagrid('reload'); // reload the user data
                            }
                        }
                    });
                }


                function destroyUser() {
                    var row = $('#dg').datagrid('getSelected');
                    if (row) {
                        $.messager.confirm('Confirm', 'Are you sure you want to destroy this user?', function(r) {
                            if (r) {
                                $.ajax({
                                    url: 'http://localhost/quintosoa/api.php?cedula=' + row.cedula,
                                    type: 'DELETE',
                                    data: {
                                        cedula: row.cedula
                                    },
                                    success: function(result) {
                                        $('#dg').datagrid('reload');
                                    }
                                });
                            }
                        });
                    }
                }
            </script>
        </aside>
    </main>

</body>

</html>