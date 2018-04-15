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
    A. Edad.<br>
    B. G&eacute;nero.<br>
    C. Autoevaluaci&oacute;n del docente de su habilidad o experiencia ense&ncaron;ando el tema seleccionado.<br>
    D. Cantidad de veces que el maestro ha enseñado este tipo de curso.<br>
    E. &Aacute;rea de especializaci&oacute;n.<br>
    F. Habilidades del maestro usando computadoras.<br>
    G. Experiencia del docente utilizando tecnolog&iacute;a basada en la web para la ense&ncaron;anza.<br>
    H. Experiencia del profesor usando un sitio web.<br>
    </font>
</p>

<form onsubmit="return send_six_form();">
    <table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">
        <tbody>
            <tr>
                <td style="vertical-align: top; width: 25%;">
                    <select id="form_six_age">
                        <option value="1"><= 30</option>
                        <option value="2">> 30 AND <= 55</option>
                        <option value="3">> 55</option>
                    </select>
                    Edad<br>
                </td>
                <td style="vertical-align: top; width: 25%;">
                    <select id="form_six_gender">
                        <option value="F">Femenino</option>
                        <option value="M">Masculino</option>
                        <option value="NA">No disponible</option>
                    </select>
                    G&eacute;nero<br>
                </td>
                <td style="vertical-align: top;">
                    <select id="form_six_self-evaluation">
                        <option value="B">Principiante</option>
                        <option value="I">Intermedio</option>
                        <option value="A">Avanzado</option>
                    </select>
                    Autoevaluaci&oacute;n</td>
                <td style="vertical-align: top;">
                    <select id="form_six_experience">
                        <option value="1">Nunca</option>
                        <option value="2">De 1 a 5 veces</option>
                        <option value="3">M&aacute;s de 5 veces</option>
                    </select>
                    Veces que ha dado el curso
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top; width: 25%;">
                    <select id="form_six_discipline">
                        <option value="DM">Toma de decisiones</option>
                        <option value="ND">Diseño de red</option>
                        <option value="O">Otro</option>
                    </select>
                    &Aacute;rea de especializaci&oacute;n<br>
                </td>
                <td style="vertical-align: top; width: 25%;">
                    <select id="form_six_abilities_computers">
                        <option value="L">Baja</option>
                        <option value="A">Promedio</option>
                        <option value="H">Alta</option>
                    </select>
                    Habilidades para el uso de computadoras<br>
                </td>
                <td style="vertical-align: top;">
                    <select id="form_six_abilities_use_technologies">
                        <option value="N">Ninguna</option>
                        <option value="S">A veces</option>
                        <option value="O">A menudo</option>
                    </select>
                    Habilidades utilizando tecnolog&iacute;a basada en la web para la ense&ncaron;anza</td>
                <td style="vertical-align: top;">
                    <select id="form_six_experience_website">
                        <option value="N">Ninguna</option>
                        <option value="S">A veces</option>
                        <option value="O">A menudo</option>
                    </select>
                    Utilizaci&oacute;n de sitios web
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <input value="Calcular" type="submit" id='form_six_button'/>
    <input type="text" id="form_six_result" size="50"/>
</form>
