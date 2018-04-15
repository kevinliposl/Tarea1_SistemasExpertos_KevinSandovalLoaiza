<p class="western" align="justify" lang="es-ES">
    <font color="FF8c3f" size="3">
    <b>CUAL ES SU ESTILO DE APRENDIZAJE?</b>
    </font>
</p>

<p class="western" align="justify" lang="es-ES">
    <font color="#000000" size="3">
    <b>Instrucciones:</b>
    </font>
</p>

<p class="western" align="justify" lang="es-ES">
    <font color="#000000" size="3">
    Seleccione su recinto(Paraíso o Turrialba), su último promedio para matrícula y su sexo.
    </font>
</p>

<form name="estilo">
    <table>
        <thead>
        <th>Sexo</th>
        <th>Promedio de Matricula</th>
        <th>Recinto</th>
        </thead>
        <tbody>
            <tr>
                 <td style='width:33%;'>
                    <select id="form_four_gender" style='width:100%;'>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </td>

                <td style='width:33%;'>
                    <input id="form_four_average" style="width:100%;" type="text" value="8.00" required/>
                </td>
                
                <td style='width:33%;'>
                    <select id="form_four_enclosure" style='width:100%;'>
                        <option value="Paraiso">Paraiso</option>
                        <option value="Turrialba">Turrialba</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <input value="Adivinar Estilo de Apredizaje" type="button" id="form_four_button"/>
    <input type="text" id="form_four_result" size="50"/>
    <br>
</form>

<script>

    /** 
     * @description Escucha el evento de click del botón de recintoOrigenView.php.  
     * @param null  
     * @return null  
     */
    $('#form_four_button').click(function () {

        var gender = $('#form_four_gender').val();
        var average = parseInt($('#form_four_average').val());
        var enclosure = $('#form_four_enclosure').val();

        var args = {
            'gender': gender,
            'average': average,
            'enclosure': enclosure
        };

        $.post('?action=calcToGuessLearningStyle', args, function (data) {
            $('#form_four_result').val(data.result);
        }, 'JSON').fail(function () {
            alert("La solicitud a fallado!!!");
        });
    });

</script>
