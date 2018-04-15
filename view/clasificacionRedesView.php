<p class="western" align="justify" lang="es-ES">
    <font color="#FF8c3f" size="3">
    <b>Clasificación de Redes</b>
    </font>
</p>

<p class="western" align="justify" lang="es-ES">
    <font color="#000000" size="3">
    <b>Instrucciones:</b>
    </font>
</p>

<p class="western" align="justify" lang="es-ES">
    <font color="#000000" size="3">
    Determinar la clasificación de redes (clases A o B), a partir de los
    siguiente criterios que el usuario podrá definir gracias a la interfaz.<br>
    Confiabilidad<br>
    Número de enlaces<br>
    Capacidad<br>
    Costo
    </font>
</p>

<br>

<form onsubmit="return send_seven_form();">
    <table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">
        <tbody>
            <tr>
                <td style="vertical-align: top; width: 25%;">
                    <select id="form_seven_reliability">
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    Confiabilidad<br>
                </td>
                <td style="vertical-align: top; width: 25%;">
                    <input id="form_seven_links" value="0" type="number" min="0" pattern="^[0-9]+" required/>
                    N&uacute;mero de enlaces
                </td>
                <td style="vertical-align: top;">
                    <select id="form_seven_capacity">
                        <option value="Low">Baja</option>
                        <option value="Medium">Media</option>
                        <option value="High">Alta</option>
                    </select>
                    Capacidad</td>
                <td style="vertical-align: top;">
                    <select id="form_seven_cost">
                        <option value="Low">Baja</option>
                        <option value="Medium">Media</option>
                        <option value="High">Alta</option>
                    </select>
                    Costo</td>
            </tr>
        </tbody>
    </table>
    <br>
    <input value="Calcular" type="submit" id='form_seven_button'/>
    <input type="text" id="form_seven_result" size="50"/>
    <br>
</form>