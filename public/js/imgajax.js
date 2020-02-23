$(function()
{
  $('#pathsend').click(function()
  {
    var img_path = $("#path1").val();
    $(".img_path").val(img_path);
    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });
    $.ajax(
      {
        type:"POST",
        url: "postpath", //Controller@postpath
//        url: "http://example.com/"
        data: {"image_path":$('#path1').val()},
        success: function(json) //Controller@postpathの処理を受取
        {
          alert(json);//Json形式である事を明示
          json = JSON.parse( json );
          $('.status').val(json["success"]);
          $('.details').val(json["message"]);
          $('.classification').val(json["estimated_data"]["class"]);
          $('.confidence').val(json["estimated_data"]["confidence"]);
        },
        error: function(XMLHttpRequest,textStatus,errorThrown)
        {
          console.log('error!!'); //Ajax通信失敗
        }
      });
    return false;
  });
});
