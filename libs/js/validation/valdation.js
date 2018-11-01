/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
    /* =========================
     User Brach Validation
     ===========================*/
    $('#addbranch').validate({
        errorClass: 'validation-error', // so that it doesn't conflict with the error class of alert boxes
        rules: {
            branch_name: {
                required: true
            },
            branch_email: {
                required: true,
                email: true
            },
            branch_tele: {
                required: true,
                number: true
            },
            branch_fax: {
                required: true
            },
            branch_loc:{
                required: true

            }
        },
        highlight: function(element) {
            $(element).closest('.space').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.space').removeClass('has-error');
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        messages: {
            branch_name: {
                required: "Field is required!"
            },
            branch_email: {
                required: "Field is required!",
                email: "Please enter a valid email address"
            },
            branch_tele: {
                required: "Field is required!"
            },
            branch_fax: {
                required: "Field is required!"
            },
            branch_loc:{
                required: "Field is required!"

            }

        },
        submitHandler: function(form) {
        $('#myModal').modal('show');

            var result;
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
                url: "addbranch.php",
                success: function(msg) {
                    if (msg === 'OK') {

                        result = '<div class="alert success"><i class="fa fa-check-circle-o"></i> Event Aded Successfully</div>';
                        $('#addbranch').clearForm();
                    } else {
                        result = '<div class="alert error"><i class="fa fa-times-circle"></i>' + msg + '</div>';
                        $('#addbranch').clearForm();
                    }
                    $("#formstatus").fadeOut(4000).html(result);
                   
        $('#myModal').modal('hide');

                },
                error: function() {
                    alert("not work");

                }
            });
        }
    });


    /* =========================
     User Brach Update Validation
     ===========================*/
    $('#editbranch').validate({
        errorClass: 'validation-error', // so that it doesn't conflict with the error class of alert boxes
        rules: {
            branch_name: {
                required: true
            },
            branch_email: {
                required: true,
                email: true
            },
            branch_tele: {
                required: true
            },
            branch_fax: {
                required: true
            },
            branch_loc:{
                required: true

            }
        },
        highlight: function(element) {
            $(element).closest('.space').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.space').removeClass('has-error');
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        messages: {
            branch_name: {
                required: "Field is required!"
            },
            branch_email: {
                required: "Field is required!",
                email: "Please enter a valid email address"
            },
            branch_tele: {
                required: "Field is required!"
            },
            branch_fax: {
                required: "Field is required!"
            },
            branch_loc:{
                required: "Field is required!"

            }

        },
        submitHandler: function(form) {
        $('#myModal').modal('show');

            var result;
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
                url: "updatebranch.php",
                success: function(msg) {
                    if (msg === 'OK') {

                        result = '<div class="alert success"><i class="fa fa-check-circle-o"></i> Branch Updated Successfully</div>';
                         $('#editbranch').clearForm();
                    } else {
                        result = '<div class="alert error"><i class="fa fa-times-circle"></i>' + msg + '</div>';
                         $('#editbranch').clearForm();
                    }
                    $("#formstatus").fadeOut(4000).html(result);
                   
              $('#myModal').modal('hide');

                },
                error: function() {
                    alert("not work");

                }
            });
        }
    });
    /* =========================
     brand form Validation
     ===========================*/

    $('#add_brand').validate({
        errorClass: 'validation-error', // so that it doesn't conflict with the error class of alert boxes
        rules: {
            brand_name: {
                required: true
            },
            brand_img_sq: {
                required: true
               
            },
            brand_img_rc:{
                 required: true
            }
        },
        highlight: function(element) {
            $(element).closest('.space').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.space').removeClass('has-error');
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        messages: {
            brand_name: {
                required: "Field is required!"
            },
            brand_img_sq: {
                required: "Field is required!"
            },
            brand_img_rc:{
                required: "Field is required!"
                
            }
        },
        submitHandler: function(form) {
        $('#myModal').modal('show');
         
            var result;
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
                url: "addbrand.php",
                success: function(msg) {
                    if (msg === 'OK') {

                        result = '<div class="alert success"><i class="fa fa-check-circle-o"></i> Brand Added Successfully</div>';
                        $('#add_brand').clearForm();
                    } else {
                        result = '<div class="alert error"><i class="fa fa-times-circle"></i>' + msg + '</div>';
                        $('#add_brand').clearForm();
                    }
                    $("#formstatus").fadeOut(2000).html(result);
        $('#myModal').modal('hide');


                },
                error: function(msg) {
                    alert(msg);

                }
            });
        }
    });
    /* =========================
     brand  Upadte form Validation
     ===========================*/

    $('#editbrand').validate({
        errorClass: 'validation-error', // so that it doesn't conflict with the error class of alert boxes
        rules: {
            brand_name: {
                required: true
            }
        },
        highlight: function(element) {
            $(element).closest('.space').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.space').removeClass('has-error');
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        messages: {
            brand_name: {
                required: "Field is required!"
            }
        },
        submitHandler: function(form) {
        $('#myModal').modal('show');
         
            var result;
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
                url: "updatebrand.php",
                success: function(msg) {
                    if (msg === 'OK') {

                        result = '<div class="alert success"><i class="fa fa-check-circle-o"></i> Brand Added Successfully</div>';
                        $('#editbrand').clearForm();
                    } else {
                        result = '<div class="alert error"><i class="fa fa-times-circle"></i>' + msg + '</div>';
                        $('#editbrand').clearForm();
                    }
                    $("#formstatus").fadeOut(4000).html(result);
        $('#myModal').modal('hide');


                },
                error: function(msg) {
                    alert(msg);

                }
            });
        }
    });
    /* =========================
     Addevent form Validation
     ===========================*/

    $('#addevent').validate({
        errorClass: 'validation-error', // so that it doesn't conflict with the error class of alert boxes
        rules: {
            event_name: {
                required: true
            },
            event_place: {
                required: true
            },
            event_booth_no: {
                required: true
            },
            event_date:{
                required: true

            },
            event_banner:{
                required: true

            }

        },
        highlight: function(element) {
            $(element).closest('.space').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.space').removeClass('has-error');
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        messages: {
            event_name: {
                required: "Field is required!"
            },
            event_place: {
                required: "Field is required!"
            },
            event_booth_no: {
                required: "Field is required!"
            },
             event_date: {
                required: "Field is required!"
            },
             event_banner: {
                required: "Field is required!"
            }
        },
        submitHandler: function(form) {
        $('#myModal').modal('show');
            var result;
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
                url: "addevent.php",
                success: function(msg) {
                    if (msg === 'OK') {

                        result = '<div class="alert success"><i class="fa fa-check-circle-o"></i> Event Added Successfully</div>';
                        $('#addevent').clearForm();

                    } else {
                        result = '<div class="alert error"><i class="fa fa-times-circle"></i>' + msg + '</div>';
                        $('#addevent').clearForm();
                    }
                    $("#formstatus").fadeOut(4000).html(result);
                         $('#myModal').modal('hide');


                },
                error: function(msg) {
                    alert(msg);

                }
            });
        }
    });

    $('#editevent').validate({
        errorClass: 'validation-error', // so that it doesn't conflict with the error class of alert boxes
        rules: {
            event_name: {
                required: true
            },
            event_place: {
                required: true
            },
            event_booth_no: {
                required: true
            },
            event_date:{
                required: true

            }

        },
        highlight: function(element) {
            $(element).closest('.space').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.space').removeClass('has-error');
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        messages: {
            event_name: {
                required: "Field is required!"
            },
            event_place: {
                required: "Field is required!"
            },
            event_booth_no: {
                required: "Field is required!"
            },
             event_date: {
                required: "Field is required!"
            }
        },
        submitHandler: function(form) {
        $('#myModal').modal('show');
            var result;
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
                url: "updateevent.php",
                success: function(msg) {
                    if (msg === 'OK') {

                        result = '<div class="alert success"><i class="fa fa-check-circle-o"></i> Event Updated Successfully</div>';
                        $('#editevent').clearForm();

                    } else {
                        result = '<div class="alert error"><i class="fa fa-times-circle"></i>' + msg + '</div>';
                        $('#editevent').clearForm();
                    }
                    $("#formstatus").fadeOut(2000).html(result);
                         $('#myModal').modal('hide');


                },
                error: function(msg) {
                    alert(msg);

                }
            });
        }
    });

    /* =========================
     addproduct form Validation
     ===========================*/

    $('#addproduct').validate({
        errorClass: 'validation-error', // so that it doesn't conflict with the error class of alert boxes
        rules: {
            brand: {
                required: true
            },
            product:{
                required: true

            },
            "diamond_color[]":{

                required: true
            },
            "gold_color[]":{
                required: true

            },
            "diamond_quality[]":{
                required: true

            },
             "product_purity[]":{
                required: true

            },
            g_weight:{
                required: true

            },
            d_weight:{
                required: true

            },
            "pimage[]":{
                extension: "jpg|jpeg|png|bmp",
                maxfilesizeb: true,
                required: true
            }
         
        },
        highlight: function(element) {
            $(element).closest('.space').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.space').removeClass('has-error');
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        messages: {
            brand: {
                required: "Field is required!"
            },
            product: {
                required: "Field is required!"

            },
            "diamond_color[]": {
                required: "Field is required!"
            },
            "gold_color[]": {
                required: "Field is required!"
            },
            "diamond_quality[]": {
                required: "Field is required!"
            },
            "product_purity[]": {
                required: "Field is required!"
            },
            "pimage[]": {
                required: "Field is required!"
            },
            g_weight: {
                required: "Field is required!"
            },
            d_weight:{
                required: "Field is required!"

            }

        },
        submitHandler: function(form) {
        $('#myModal').modal('show');

            var result;
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
                url: "addproduct.php",
                success: function(msg) {
                    if (msg === 'OK') {

                        result = '<div class="alert success"><i class="fa fa-check-circle-o"></i> product Added Successfully</div>';
                        $('#addproduct').clearForm();
                    } else {
                        result = '<div class="alert error"><i class="fa fa-times-circle"></i>' + msg + '</div>';
                        $('#addproduct').clearForm();
                    }
                    $("#formstatus").fadeOut(4000).html(result);
        $('#myModal').modal('hide');


                },
                error: function(msg) {
                    alert(msg);

                }
            });
        }
    });

$('#editproduct').validate({
        errorClass: 'validation-error', // so that it doesn't conflict with the error class of alert boxes
        rules: {
            brand: {
                required: true
            },
            product:{
                required: true

            },
            "diamond_color[]":{

                required: true
            },
            "gold_color[]":{
                required: true

            },
            "diamond_quality[]":{
                required: true

            },
             "product_purity[]":{
                required: true

            },
            g_weight:{
                required: true

            },
            d_weight:{
                required: true

            }
         
        },
        highlight: function(element) {
            $(element).closest('.space').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.space').removeClass('has-error');
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        messages: {
            brand: {
                required: "Field is required!"
            },
            product: {
                required: "Field is required!"

            },
            "diamond_color[]": {
                required: "Field is required!"
            },
            "gold_color[]": {
                required: "Field is required!"
            },
            "diamond_quality[]": {
                required: "Field is required!"
            },
            "product_purity[]": {
                required: "Field is required!"
            },
            
            g_weight: {
                required: "Field is required!"
            },
            d_weight:{
                required: "Field is required!"

            }

        },
        submitHandler: function(form) {
        $('#myModal').modal('show');

            var result;
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
                url: "updateproduct.php",
                success: function(msg) {
                    if (msg === 'OK') {

                        result = '<div class="alert success"><i class="fa fa-check-circle-o"></i> product Added Successfully</div>';
                        $('#addproduct').clearForm();
                    } else {
                        result = '<div class="alert error"><i class="fa fa-times-circle"></i>' + msg + '</div>';
                        $('#addproduct').clearForm();
                    }
                    $("#formstatus").html(result);
        $('#myModal').modal('hide');


                },
                error: function(msg) {
                    alert(msg);

                }
            });
        }
    });

    /* =========================
     Region form Validation
     ===========================*/

    $('#addregion').validate({
        errorClass: 'validation-error', // so that it doesn't conflict with the error class of alert boxes
        rules: {
            region_name: {
                required: true
            }
        },
        highlight: function(element) {
            $(element).closest('.space').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.space').removeClass('has-error');
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        messages: {
            region_name: {
                required: "Field is required!"
            }
        },
        submitHandler: function(form) {
$('#myModal').modal('show');
            var result;
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
                url: "addregion.php",
                success: function(msg) {
                    if (msg === 'OK') {

                        result = '<div class="alert success"><i class="fa fa-check-circle-o"></i>Region Added Successfully</div>';
                        $('#addregion').clearForm();
                    } else {
                        result = '<div class="alert error"><i class="fa fa-times-circle"></i>' + msg + '</div>';
                        $('#addregion').clearForm();
                    }
                    $("#formstatus").html(result);
        $('#myModal').modal('hide');


                },
                error: function(msg) {
                    alert(msg);

                }
            });
        }
    });
    

    // edit region validation


        $('#editregion').validate({
        errorClass: 'validation-error', // so that it doesn't conflict with the error class of alert boxes
        rules: {
            region_name: {
                required: true
            }
        },
        highlight: function(element) {
            $(element).closest('.space').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.space').removeClass('has-error');
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        messages: {
            region_name: {
                required: "Field is required!"
            }
        },
        submitHandler: function(form) {
$('#myModal').modal('show');
            var result;
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
                url: "updateregion.php",
                success: function(msg) {
                    if (msg === 'OK') {

                        result = '<div class="alert success"><i class="fa fa-check-circle-o"></i>Region Added Successfully</div>';
                        $('#editregion').clearForm();
                    } else {
                        result = '<div class="alert error"><i class="fa fa-times-circle"></i>' + msg + '</div>';
                        $('#editregion').clearForm();
                    }
                    $("#formstatus").html(result);
        $('#myModal').modal('hide');


                },
                error: function(msg) {
                    alert(msg);

                }
            });
        }
    });

     /* =========================
     country form Validation
     ===========================*/

    $('#addcountry').validate({
        errorClass: 'validation-error', // so that it doesn't conflict with the error class of alert boxes
        rules: {
            region_name: {
                required: true
            },
            country_name:{
                required: true

            }
        },
        highlight: function(element) {
            $(element).closest('.space').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.space').removeClass('has-error');
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        messages: {
            region_name: {
                required: "Field is required!"
            },
            country_name: {
                required: "Field is required!"
            }
        },
        submitHandler: function(form) {
$('#myModal').modal('show');
            var result;
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
                url: "addcountry.php",
                success: function(msg) {
                    if (msg === 'OK') {

                        result = '<div class="alert success"><i class="fa fa-check-circle-o"></i>Country Added Successfully</div>';
                        $('#addregion').clearForm();
                    } else {
                        result = '<div class="alert error"><i class="fa fa-times-circle"></i>' + msg + '</div>';
                        $('#addregion').clearForm();
                    }
                    $("#formstatus").html(result);
        $('#myModal').modal('hide');


                },
                error: function(msg) {
                    alert(msg);

                }
            });
        }
    });


      /* =========================
     country form Validation
     ===========================*/

    $('#addsperson').validate({
        errorClass: 'validation-error', // so that it doesn't conflict with the error class of alert boxes
        rules: {
            s_user: {
                required: true
            },
            s_email:{
                required: true,
                email: true

            },
            s_pass:{
                required: true,

            },
            s_cpass:{
                required: true,
                equalTo: "#pwd"

            },
            s_contact:{
                required: true,
                number: true

            },
            s_region:{
                required: true
                

            }
        },
        highlight: function(element) {
            $(element).closest('.space').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.space').removeClass('has-error');
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        messages: {
            s_user: {
                required: "Field is required!"
            },
            s_email: {
                required: "Field is required!"
            },
            s_pass: {
                required: "Field is required!"
            },
            s_cpass: {
                required: "Field is required!",
                equalTo:"please enter same password"
            },
            s_contact: {
                required: "Field is required!"
            },
            s_region:{
                required: "Field is required!"

            }
        },
        submitHandler: function(form) {
$('#myModal').modal('show');
            var result;
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
                url: "addsperson.php",
                success: function(msg) {
                    if (msg === 'OK') {

                        result = '<div class="alert success"><i class="fa fa-check-circle-o"></i>Country Added Successfully</div>';
                        $('#addsperson').clearForm();
                    } else {
                        result = '<div class="alert error"><i class="fa fa-times-circle"></i>' + msg + '</div>';
                        $('#addsperson').clearForm();
                    }
                    $("#formstatus").html(result);
        $('#myModal').modal('hide');


                },
                error: function(msg) {
                    alert(msg);

                }
            });
        }
    });
    
    /*Edit sales person Validation*/ 
    $('#editsperson').validate({
        errorClass: 'validation-error', // so that it doesn't conflict with the error class of alert boxes
        rules: {
            s_user: {
                required: true
            },
            s_email:{
                required: true,
                email: true

            },
           
            s_cpass:{
                
                equalTo: "#pwd"

            },
            s_contact:{
                required: true,
                number: true

            },
            s_region:{
                required: true
                

            }
        },
        highlight: function(element) {
            $(element).closest('.space').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.space').removeClass('has-error');
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        messages: {
            s_user: {
                required: "Field is required!"
            },
            s_email: {
                required: "Field is required!"
            },
            s_pass: {
                required: "Field is required!"
            },
            s_cpass: {
                required: "Field is required!",
                equalTo:"please enter same password"
            },
            s_contact: {
                required: "Field is required!"
            },
            s_region:{
                required: "Field is required!"

            }
        },
        submitHandler: function(form) {
$('#myModal').modal('show');
            var result;
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
                url: "updatesperson.php",
                success: function(msg) {
                    if (msg === 'OK') {

                        result = '<div class="alert success"><i class="fa fa-check-circle-o"></i>Country Added Successfully</div>';
                        $('#editsperson').clearForm();
                    } else {
                        result = '<div class="alert error"><i class="fa fa-times-circle"></i>' + msg + '</div>';
                        $('#editsperson').clearForm();
                    }
                    $("#formstatus").html(result);
        $('#myModal').modal('hide');


                },
                error: function(msg) {
                    alert(msg);

                }
            });
        }
    });


       /* =========================
     Email form Validation
     ===========================*/

    $('#sendmail').validate({
        errorClass: 'validation-error', // so that it doesn't conflict with the error class of alert boxes
        rules: {
            emailto: {
                required: true,
                 email: true
            },
            subject: {
                
                required: true
            },
            message: {
                required: true,
                

            }
        },
        highlight: function(element) {
            $(element).closest('.space').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.space').removeClass('has-error');
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        messages: {
            emailto: {
                required: "Field is required!"
            },
            subject: {
                required: "Field is required!"

            },
            message: {
                required: "Field is required!"
            }
        },
        submitHandler: function(form) {

            var result;
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
                url: "sendmail.php",
                success: function(msg) {
                    if (msg === 'OK') {

                        result = '<div class="alert success"><i class="fa fa-check-circle-o"></i>Mail Send Successfully</div>';
                        $('#sendmail').clearForm();
                    } else {
                        result = '<div class="alert error"><i class="fa fa-times-circle"></i>' + msg + '</div>';
                        $('#sendmail').clearForm();
                    }
                    $("#formstatus").html(result);


                },
                error: function(msg) {
                    alert(msg);

                }
            });
        }
    }); 
    
    $.validator.addMethod(
            "maxfilesizeb",
            function(value, element) {
                return this.optional(element) || (element.files && element.files[0]
                        && element.files[0].size < 1024 * 1000);
            },
            'The file size can not exceed 1 MB.'
            );




});

