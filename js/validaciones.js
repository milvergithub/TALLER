$(function(){
   $('#formularioRegistroDoc').validate({
      rules :{
         nombreuser :{
            required : true, //para validar campo vacio
            minlength : 3, //para validar campo con minimo 3 caracteres
            maxlength : 15  //para validar campo con maximo 9 caracteres
         },
         nombres :{
            required : true,
            minlength : 3, //para validar campo con minimo 3 caracteres
            maxlength : 20  //para validar campo con maximo 9 caracteres
         },
         apellidos :{
            required : true,
            minlength : 3, //para validar campo con minimo 3 caracteres
            maxlength : 20  //para validar campo con maximo 9 caracteres
         },
         nrogrupo :{
            required : true,
            number : true   //para validar campo solo numeros
         },
         password :{
            required : true,
            minlength : 3, //para validar campo con minimo 3 caracteres
            maxlength : 16  //para validar campo con maximo 9 caracteres
         },
         emailDoc :{
            required : true, //para validar campo vacio
            email    : true  //para validar formato email
         },
         telefono : {
            required :false,
            number : true,
            minlength : 5, //para validar campo con minimo 3 caracteres
            maxlength : 9  //para validar campo con maximo 9 caracteres
         }
       },
       messages : {
         nombreuser :{
            required : "debe ingresar un nombre de usuario", //para validar campo vacio
            minlength : "El nombre debe tener un minimo de 3 caracteres",
            maxlength : "EL nombre debe tener un maximo de 15 caracteres"
         },
         nombres :{
            required : "debe ingresar un nombre de usuario", //para validar campo vacio
            minlength : "El nombre debe tener un minimo de 3 caracteres",
            maxlength : "EL nombre debe tener un maximo de 20 caracteres"
         },
         apellidos :{
            required : "debe ingresar un nombre de usuario", //para validar campo vacio
            minlength : "El nombre debe tener un minimo de 3 caracteres",
            maxlength : "EL nombre debe tener un maximo de 20 caracteres"
         },
         nrogrupo :{
            required : "debe ingresar un nombre de usuario", //para validar campo vacio
            number : "debe ingresar un numero entero"
         },
         password :{
            required : "debe ingresar un nombre de usuario", //para validar campo vacio
            minlength : "El nombre debe tener un minimo de 3 caracteres",
            maxlength : "EL nombre debe tener un maximo de 16 caracteres"
         },
         emailDoc :{
            required : "debe ingresar un nombre de usuario", //para validar campo vacio
            email    : "debe ingresar un email valido",
         },
         telefono : {
            number : "debe ingresar un numero",
            minlength : "debe ingresar 5 digitos como minimo",
            maxlength : "debe ingresas como 9 digitos como maximo"
         }
      },
      highlight: function(element) {
         $(element).closest('.control-group').removeClass('has-success').addClass('control-group has-error');
      },
      success: function(element) {
        element
        .closest('.control-group').removeClass('control-group has-error').addClass('has-success');
      }
   });    
});