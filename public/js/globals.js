/** 
 * @description Escucha el evento de click del botón de asiAprendoView.php  
 * @param null  
 * @return null  
 */
function send_one_form() {

    var ec = parseInt($('#c5').val()) + parseInt($('#c9').val()) +
            parseInt($('#c13').val()) + parseInt($('#c17').val()) +
            parseInt($('#c25').val()) + parseInt($('#c29').val());
    var or = parseInt($('#c2').val()) + parseInt($('#c10').val()) +
            parseInt($('#c22').val()) + parseInt($('#c26').val()) +
            parseInt($('#c30').val()) + parseInt($('#c34').val());
    var ca = parseInt($('#c7').val()) + parseInt($('#c11').val()) +
            parseInt($('#c15').val()) + parseInt($('#c19').val()) +
            parseInt($('#c31').val()) + parseInt($('#c35').val());
    var ea = parseInt($('#c4').val()) + parseInt($('#c12').val()) +
            parseInt($('#c24').val()) + parseInt($('#c28').val()) +
            parseInt($('#c32').val()) + parseInt($('#c36').val());

    var args = {
        'ec': ec,
        'or': or,
        'ca': ca,
        'ea': ea
    };

    $.post('?action=calcLearningStyles', args, function (data) {
        $('#form_one_result').val(data.result);
    }, 'JSON').fail(function () {
        alert("La solicitud a fallado!!!");
    });
    return false;
}

/** 
 * @description Escucha el evento de click del botón de recintoOrigenView.php.  
 * @param null  
 * @return null  
 */
function send_two_form() {

    var style = $('#form_two_style').val();
    var average = parseInt($('#form_two_average').val());
    var gender = $('#form_two_gender').val();

    var args = {
        'style': style,
        'average': average,
        'gender': gender
    };

    $.post('?action=calcToGuessTheEnclosure', args, function (data) {
        $('#form_two_result').val(data.result);
    }, 'JSON').fail(function () {
        alert("La solicitud a fallado!!!");
    });
    return false;
}

/** 
 * @description Escucha el evento de click del botón de recintoOrigenView.php.  
 * @param null  
 * @return null  
 */
function send_three_form() {

    var style = $('#form_three_style').val();
    var average = parseInt($('#form_three_average').val());
    var enclosure = $('#form_three_enclosure').val();

    var args = {
        'style': style,
        'average': average,
        'enclosure': enclosure
    };

    $.post('?action=calcToGuessGender', args, function (data) {
        $('#form_three_result').val(data.result);
    }, 'JSON').fail(function () {
        alert("La solicitud a fallado!!!");
    });
    return false;
}

/** 
 * @description Escucha el evento de click del botón de recintoOrigenView.php.  
 * @param null  
 * @return null  
 */
function send_four_form() {

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
    return false;
}

/** 
 * @description Escucha el evento de click del botón de recintoOrigenView.php.  
 * @param null  
 * @return null  
 */
function send_six_form() {

    var age = parseInt($('#form_six_age').val());
    var gender = $('#form_six_gender').val();
    var evaluation = $('#form_six_self-evaluation').val();
    var experience = parseInt($('#form_six_experience').val());
    var discipline = $('#form_six_discipline').val();
    var abilities_computers = $('#form_six_abilities_computers').val();
    var abilities_use_technologies = $('#form_six_abilities_use_technologies').val();
    var experience_website = $('#form_six_experience_website').val();


    var args = {
        'age': age,
        'evaluation': evaluation,
        'gender': gender,
        'experience': experience,
        'discipline': discipline,
        'abilities_computers': abilities_computers,
        'abilities_use_technologies': abilities_use_technologies,
        'experience_website': experience_website
    };

    $.post('?action=calcToGuessTypeOfProfessor', args, function (data) {
        $('#form_six_result').val(data.result);
    }, 'JSON').fail(function () {
        alert("La solicitud a fallado!!!");
    });
    return false;
}

/** 
 * @description Escucha el evento de envio del botón de clasificacionRedesView.php.  
 * @param null  
 * @return null  
 */
function send_seven_form() {

    var capacity = $('#form_seven_capacity').val();
    var cost = $('#form_seven_cost').val();
    var links = parseInt($('#form_seven_links').val());
    var reliability = parseInt($('#form_seven_reliability').val());

    var args = {
        'capacity': capacity,
        'cost': cost,
        'links': links,
        'reliability': reliability
    };

    $.post('?action=calcToGuessClassificationOfNetworks', args, function (data) {
        $('#form_seven_result').val(data.result);
    }, 'JSON').fail(function () {
        alert("La solicitud a fallado!!!");
    });
    return false;
}
