$(function () {
  let $signForm = $("#contact-form");
  $.validator.addMethod(
    "noSpace",
    function (value, element) {
      return value == "" || value.trim().length != 0;
    },
    "Spaces not allowed"
  );

  $.validator.addMethod(
    "test",
    function (Email, element) {
      var pattern =
        /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

      return $.trim(Email).match(pattern) ? true : false;
    },
    "invalid email pattern"
  );

  $.validator.addMethod(
    "phone",
    function (phone, element) {
      var pattern =
      /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;

      return $.trim(phone).match(pattern) ? true : false;
    },
    "invalid phone number"
  );
//   function validatePhone(phone) {
//     var a = document.getElementById(phone).value;
//     var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
//     if (filter.test(a)) {
//         return true;
//     }
//     else {
//         return false;
//     }
// }

  if ($signForm.length) {
    $signForm.validate({
      rules: {
        email: {
          required: true,
          test: true,
          noSpace: true,
        },

        f_name: {
          required: true,
          noSpace: true,
        },
        l_name: {
          required: true,
          noSpace: true,
        },
        b_name:{
          required: true,
          noSpace: true,
        },
        bc_name:{
          required: true,
          noSpace: true,
        },
        state:{
            required: true,
          noSpace: true,

        },
        city:{
            required: true,
          noSpace: true,

        },
        address:{
            required: true,
          noSpace: true,

        },
        zip:{
            required: true,
            noSpace: true,

        },
        phone:{
            phone:true,
            noSpace: true,

        },
        comment:{
          required: true,
          noSpace: true,

      },
     
      

      },
      messages: {
        email: {
          required: "Invalid",
        },
      
      },
    });
  }
});
