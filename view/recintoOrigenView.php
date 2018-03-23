<p class="western" align="justify" lang="es-ES">
    <font color="#FF0000" size="3">
    <b>CUAL ES SU RECINTO DE ORIGEN?</b>
    </font>
</p>

<p class="western" align="justify" lang="es-ES">
    <font color="#000000" size="3">
    <b>Instrucciones:</b>
    </font>
</p>

<p class="western" align="justify" lang="es-ES">
    <font color="#000000" size="3">
    Seleccione su estilo de aprendizaje de los cuatro usados (divergente, convergente, asimilador, acomodador),
    su último promedio para matrícula y su sexo.
    </font>
</p>

<form name="estilo">
    <table>
    <thead>
        <th>Estilo de Aprendizaje</th>
        <th>Promedio de Matricula</th>
        <th>Sexo</th>
    </thead>
        <tbody>
            <tr>
                <td style='width:33%;'>
                    <select id="form_two_style" style='width:100%;'>
                        <option value="ACOMODADOR">Acomodador</option>
                        <option value="CONVERGENTE">Convergente</option>
                        <option value="ASIMILADOR">Asimilador</option>
                        <option value="DIVERGENTE">Divergente</option>
                    </select>
                </td>

                <td style='width:33%;'>
                    <input id='form_two_average' style='width:100%;' type="text" required/>
                </td>
                <td style='width:33%;'>
                    <select id="form_two_gender" style='width:100%;'>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <input value="Adivinar Recinto de Origen" type="button" id="form_two_button"/>
    <input type="text" id="form_two_result"/>
    <br>
</form>

<script>
$('#form_two_button').click(function(){

    var style = $('#form_two_style').val();
    var average = parseInt($('#form_two_average').val());
    var gender = $('#form_two_gender').val();

    var args = {
        'style': style,
        'average': average,
        'gender': gender
    };

    $.post('?action=calcDistanceStyleGenderAverageEnclosure', args, function (data) {
        $('#form_two_result').val(data.result);

    }, 'JSON').fail(function () {
        alert("La solicitud a fallado!!!");
    });
});


</script>
