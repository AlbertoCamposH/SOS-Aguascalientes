$('document').ready(function() {
    $("#M").hide();
    $("#A").hide();
    $("#F").hide();
  $("#Mf").hover(function(){
    $("#Mf").hide();
    $("#M").show();

  });
  $("#M").mouseleave(function(){
    $("#M").hide();
    $("#Mf").show();
  });
  $("#Af").hover(function(){
    $("#Af").hide();
    $("#A").show();
  });
  $("#A").mouseleave(function(){
    $("#A").hide();
    $("#Af").show();
  });
  $("#Ff").hover(function(){
    $("#Ff").hide();
    $("#F").show();
  });
  $("#F").mouseleave(function(){
    $("#F").hide();
    $("#Ff").show();
  });
  $("#utrc").hide();
  $("#utr").hover(function(){
    $("#utr").hide();
    $("#utrc").show();
  });
    $("#utrc").mouseleave(function(){
    $("#utrc").hide();
    $("#utr").show();
  });
  $("#thincrsc").hide();
  $("#thincrs").hover(function(){
    $("#thincrs").hide();
    $("#thincrsc").show();
  });
    $("#thincrsc").mouseleave(function(){
    $("#thincrsc").hide();
    $("#thincrs").show();
  });
  $("#googlec").hide();
  $("#google").hover(function(){
    $("#google").hide();
    $("#googlec").show();
  });
    $("#googlec").mouseleave(function(){
    $("#googlec").hide();
    $("#google").show();
  });
  $("#mlc").hide();
  $("#ml").hover(function(){
    $("#ml").hide();
    $("#mlc").show();
  });
    $("#mlc").mouseleave(function(){
    $("#mlc").hide();
    $("#ml").show();
  });

  $('#allTeam').on('click',function(){
    if($(this).attr('data-click-state') == 1) {
        $("#Af").hide();
        $("#Ff").hide();
        $("#Mf").hide();
        $("#M").show();
        $("#A").show();
        $("#F").show();
        $(this).attr('data-click-state', 0);
    } else {
        $("#M").hide();
        $("#A").hide();
        $("#F").hide();
        $("#Mf").show();
        $("#Af").show();
        $("#Ff").show();
        $(this).attr('data-click-state', 1);
    }
  });
});

     

