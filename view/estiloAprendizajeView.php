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

<form onsubmit="return send_four_form();">
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
                    <input id="form_four_average" style="width:100%;" type="number" min="0" value="8.00" required/>
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
    <input value="Adivinar Estilo de Apredizaje" type="submit" id="form_four_button"/>
    <input type="text" id="form_four_result" size="50"/>
    <br>
</form>