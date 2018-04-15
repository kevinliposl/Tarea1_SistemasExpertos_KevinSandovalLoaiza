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

<form name="estilo">
    <table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">
        <tbody>
            <tr>
                <td style="vertical-align: top; width: 25%;">
                    <select id="re">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    Reliability (Re)<br>
                </td>
                <td style="vertical-align: top; width: 25%;">
                    <select id="li">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    Number of links (Li)<br>
                </td>
                <td style="vertical-align: top;">
                    <select id="ca">
                        <option value="1">Low</option>
                        <option value="2">Medium</option>
                        <option value="3">High</option>
                    </select>
                    Capacity (Ca)</td>
                <td style="vertical-align: top;">
                    <select id="co">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    Cost (Co)</td>
            </tr>
        </tbody>
    </table>
    <br>
    <input value="Calcular" type="button" id='form_six_button'/>
    <input type="text" id="form_six_result"/>
    <br>
</form>
