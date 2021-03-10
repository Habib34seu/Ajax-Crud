$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
// create task
$('#createTaskFrom').submit(function(e){
   e.preventDefault();
   let msg = $('#createTaskMassage');
   const inputName = $('#createTaskFrom input[name="name"]');
   // From Data 
   let formData= {
       name:$(inputName).val(),
   }
   console.log(formData);
   $.ajax({
    type:"POST",
    url:'/task/store',
    data:formData,
    success:function(data){
     // error massage nul when input fied not null
      $(msg).html('');
      // show success massage
      $(msg).append(`<div class="alert alert-success">Task Created Successfully</div>`);

      // input field clear
      $(inputName).val('');
     

     // append button submit
      $('#taskTableBody').append(`
        <tr>
            <td>`+data.id+`</td>
            <td>`+data.name+`</td>
            <td style="width:200px;">
            <a class="btn btn-primary">Edit</a>
            <a class="btn btn-danger">Delete</a>
            
            </td>
        </tr>
      `);
    },
    error:function(e){
        $(msg).html('');
        $(msg).append(`<ul id="errorMassage" class="alert alert-danger"></ul>`)
        $.each(e.responseJSON.errors, function(index, value){
              console.log(value[0]);

              $(msg).find('#errorMassage').append(`
              `+value[0]+`
              `) 
        });
    }
   })
});

// edit task