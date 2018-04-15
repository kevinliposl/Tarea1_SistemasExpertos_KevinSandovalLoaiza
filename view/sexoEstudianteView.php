<p class="western" align="justify" lang="es-ES">
    <font color="FF8c3f" size="3">
    <b>CUAL ES SU SEXO?</b>
    </font>
</p>

<p class="western" align="justify" lang="es-ES">
    <font color="#000000" size="3">
    <b>Instrucciones:</b>
    </font>
</p>

<p class="western" align="justify" lang="es-ES">
    <font color="#000000" size="3">
    Seleccione su estilo de aprendizaje de los cuatro usados (divergente, convergente, asimilador,
    acomodador), su último promedio para matrícula y su recinto (Paraíso o Turrialba).
    </font>
</p>

<form onsubmit="return send_three_form();">
    <table>
        <thead>
        <th>Estilo de Aprendizaje</th>
        <th>Promedio de Matricula</th>
        <th>Recinto</th>
        </thead>
        <tbody>
            <tr>
                <td style='width:33%;'>
                    <select id="form_three_style" style='width:100%;'>
                        <option value="ACOMODADOR">Acomodador</option>
                        <option value="CONVERGENTE">Convergente</option>
                        <option value="ASIMILADOR">Asimilador</option>
                        <option value="DIVERGENTE">Divergente</option>
                    </select>
                </td>

                <td style='width:33%;'>
                    <input id="form_three_average" style="width:100%;" type="number" value="8.00" required/>
                </td>
                <td style='width:33%;'>
                    <select id="form_three_enclosure" style='width:100%;'>
                        <option value="Paraiso">Paraiso</option>
                        <option value="Turrialba">Turrialba</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <input value="Adivinar Sexo del Estudiante" type="submit" id="form_three_button"/>
    <input type="text" id="form_three_result" size="50"/>
    <br>
</form>