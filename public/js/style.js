$(function(){
  //フッター枠を固定
  var $ftr = $('.footer');
  if(window.innerHeight > $ftr.offset().top + $ftr.outerHeight()){
  $ftr.attr({'style': 'position:fixed; top:' + (window.innerHeight - $ftr.outerHeight()) +'px;' });
  }
});