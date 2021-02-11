(function($){
    $(document).ready(function (){

       $('a#student_add_modal_btn').click(function (e){
           e.preventDefault();
          $('#student_add_modal').modal('show');
       });

        $(document).on('submit','form#modal_form',function (e){
            e.preventDefault();
            let name = $('form#modal_form input[name="name"]').val();
            let email = $('form#modal_form input[name="email"]').val();
            let cell = $('form#modal_form input[name="cell"]').val();
            let username = $('form#modal_form input[name="username"]').val();

            let email_check = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            if (name==''||email==''||cell==''||username==''){
                $('.msg').html('<p class="alert alert-danger">all fields are required<button class="close" data-dismiss="alert">&times;</button></p>');
            }else if(email_check.test(email)==false){
                $('.msg').html('<p class="alert alert-danger">Invalid email Address<button class="close" data-dismiss="alert">&times;</button></p>')
            }else{
                $.ajax({
                    url:'student/store',
                    method : "POST",
                    data:new FormData(this),
                    processData: false,
                    contentType:false,
                    success:function (data){
                        $('.msg').html('<p class="alert alert-success">Data insert successfully<button class="close" data-dismiss="alert">&times;</button></p>')
                        $('form#modal_form')[0].reset();
                        all();
                    }
                })


            }

        });
        all();
        function all(){
           $.ajax({
               url : 'student/all',
               success : function (data){
                   $('tbody#data_show').html(data);
               }
           });
        }
        $(document).on('click','a#view_btn',function (e){
            e.preventDefault();

            let student_id = $(this).attr('view_data');
            $.ajax({
                url:'student/show/' + student_id,
                // data : {id:student_id},
                success : function (data){
                   $('.single-student img').attr('src','assets/media/img/'+data.photo);
                   $('.single-student h2').html(data.name);
                   $('.single-student #name').html(data.name);
                   $('.single-student #email').html(data.email);
                   $('.single-student #cell').html(data.cell);
                   $('.single-student #username').html(data.username);
                    $('#student_show_modal').modal('show');

                }
            })
        });
        $(document).on('click','a#edit_btn',function (e){
            e.preventDefault();
            let user_id = $(this).attr('edit_data');

            $.ajax({
               url : 'student/edit/'+ user_id,
               success : function (data){
                   $('#student_edit_modal').modal('show');
                   $('form#modal_edit_form input[name="name"]').val(data.name);
                   $('form#modal_edit_form input[name="email"]').val(data.email);
                   $('form#modal_edit_form input[name="cell"]').val(data.cell);
                   $('form#modal_edit_form input[name="username"]').val(data.username);
                   if(data.gender == "male"){
                       $('form#modal_edit_form input#male').attr('checked' , '');

                   }else if(data.gender == "female"){
                       $('form#modal_edit_form input#female').attr('checked' , '');
                   }

               }
            });
        });
        $(document).on('submit','form#modal_edit_form',function (e){
            e.preventDefault();

            $.ajax({
               url : 'student/update/',
               success : function (data){
                   $('.msg').html('data updated successfully');
               }
            });
        });




    });
})(jQuery)
