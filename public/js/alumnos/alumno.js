var contador = 0;
$('#modalidad').change(function(){
    var route = "/alumnos/modalidad/" + $('#modalidad').val();
     $.get(route, function(res){
         $('#programa').find('option').remove();
         $.each(res, function(id, value) {
             $('#programa').append('<option value="'+value.id+'">'+value.programa+'</option>');
             $('#programa').selectpicker('refresh');
         });
     }).fail(function(res) {

     });

     })
$('#programa').change(function(){
    var route = "/alumnos/materia/" +  + $('#programa').val();
    $.get(route, function(res){
        $('#materia').find('option').remove();
        $.each(res, function(id, value) {
            $('#materia').append('<option value="'+value.id+'">'+value.nombres+'</option>');
            $('#materia').selectpicker('refresh');
        });
    }).fail(function(res) {

    });

})


$('#agregar').click(function(){
    contador ++
    $("tbody").append( "<tr>\n" +
        "      <th scope=\"col\">"+contador+"</th>\n" +
        "      <th scope=\"col\">"+ $('#materia :selected').text() +"</th>\n" +
        "      <th scope=\"col\"><input id=\"programaPWC\" type=\"text\" placeholder=\"PROGRAMA CONFORME PWC\" class=\"form-control\" name=\"programaPWC\"  required autofocus maxlength=\"60\"></th>\n" +
        "      <th scope=\"col\"><input id=\"cuatri\" type=\"text\" placeholder=\"Cuatrimestre\" class=\"form-control\" name=\"cuatri\"  required autofocus maxlength=\"60\"></th>\n" +
        "      <th scope=\"col\"><input id=\"claveMateria\" type=\"text\" placeholder=\"CLAVE DE LA MATERIA\" class=\"form-control\" name=\"claveMateria\"  required autofocus maxlength=\"60\"></th>\n" +
        "      <th scope=\"col\"><input id=\"ciclo\" type=\"text\" placeholder=\"CICLO\" class=\"form-control\" name=\"ciclo\"  required autofocus maxlength=\"60\"></th>\n" +
        "    </tr>" );
})






