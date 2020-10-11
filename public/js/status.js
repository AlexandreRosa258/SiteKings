$(function() {
   $('.toggle-class').change(function() {
       var status = $(this).prop('checked') == true ? 1 : 0;
       var user_id = $(this).data('id');

       $.ajax({
           type: "GET",
           dataType: "json",
           url: '/changeStatus',
           data: {'status': status, 'level_id': level_id},
           success: function(data){
             console.log(data.success)
           }
       });
   })
 })
