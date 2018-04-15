<p class="western" align="justify" lang="es-ES">
    <font color="#FF8c3f" size="3">
    <b>Clasificación de Profesores</b>
    </font>
</p>

<p class="western" align="justify" lang="es-ES">
    <font color="#000000" size="3">
    <b>Instrucciones:</b>
    </font>
</p>

<p class="western" align="justify" lang="es-ES">
    <font color="#000000" size="3">
    Determinar el tipo de profesor (beginner, intermediate, advanced), a
    partir de los siguiente criterios que el usuario podrá definir gracias a la interfaz
    <br>
    A. Age.<br>
    B. Gender.<br>
    C. Teacher’s self-evaluation of his skill or experience teaching the selected subject.<br>
    D. Number of times the teacher has taught this type of course.<br>
    E. Teacher’s background discipline or area of expertise.<br>
    F. Teacher’s skills using computers.<br>
    G. Teacher’s experience using Web-based technology for teaching.<br>
    H. Teacher’s experience using a Web site.<br>
    </font>
</p>

<br>

<form name="estilo">
    <table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">
        <tbody>
            <tr>
                <td style="vertical-align: top; width: 25%;">
                    <select id="re">
                        <option value="1">Teacher’s age <= 30</option>
                        <option value="2">Teacher’s age > 30 AND <= 55</option>
                        <option value="3">Teacher’s age > 55</option>
                    </select>
                    Age (A)<br>
                </td>
                <td style="vertical-align: top; width: 25%;">
                    <select id="li">
                        <option value="F">Female</option>
                        <option value="M">Male</option>
                        <option value="NA">Not available</option>
                    </select>
                     Gender (B)<br>
                </td>
                <td style="vertical-align: top;">
                    <select id="ca">
                        <option value="B">Beginner</option>
                        <option value="I">Intermediate</option>
                        <option value="A">Advanced</option>
                    </select>
                     For teacher’s self-evaluation (C)</td>
                <td style="vertical-align: top;">
                    <select id="co">
                        <option value="1">Never</option>
                        <option value="2">1 to 5 times</option>
                        <option value="3">More than 5 times</option>
                    </select>
                    For times teaching a course (D)
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top; width: 25%;">
                    <select id="re">
                        <option value="DM">Decision-making</option>
                        <option value="ND">Network design</option>
                        <option value="O">Other</option>
                    </select>
                    For teacher’s background discipline (E)<br>
                </td>
                <td style="vertical-align: top; width: 25%;">
                    <select id="li">
                        <option value="L">Low</option>
                        <option value="A">Average</option>
                        <option value="H">High</option>
                    </select>
                    For teacher’s skills using computers (F)<br>
                </td>
                <td style="vertical-align: top;">
                    <select id="ca">
                        <option value="N">Never</option>
                        <option value="S">Sometimes</option>
                        <option value="O">Often</option>
                    </select>
                    For teacher’s experience using Web-based technology (G)</td>
                <td style="vertical-align: top;">
                    <select id="co">
                        <option value="N">Never</option>
                        <option value="S">Sometimes</option>
                        <option value="O">Often</option>
                    </select>
                    For teacher’s experience using the Web site (H)
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <input value="Calcular" type="button" id='form_six_button'/>
    <input type="text" id="form_six_result"/>
    <br>
</form>