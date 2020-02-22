$(function()
{
  $('#pathsend').click(function()
  {
    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });
    $.ajax(
      {
        type:"POST",
        url: "postpath", //Controller@postpath
        data: {"image_path":$('#path1').val()},
        success: function(imgok) //Controller@postpathの処理を受取
        {
          alert(imgok);
        },
        error: function(XMLHttpRequest,textStatus,errorThrown)
        {
          console.log('error!!');
        }
      });
    return false;
  });
});
