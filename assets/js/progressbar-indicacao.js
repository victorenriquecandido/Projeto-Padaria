  $(document).ready(function(){
    $("#temp_indicacao_pessoa").change(function(){
      $(this).find("option:selected").each(function(){
        var optionValue = $(this).attr("value");

        $(".progress-bar").html(optionValue+'%');
        $('.progress-bar').attr('style','width: '+optionValue+'%');

        if(optionValue <= 30){
          $('.progress-bar').attr('class','progress-bar progress-bar-striped progress-bar-animated bg-success');
        } else if(optionValue <= 70){
          $('.progress-bar').attr('class','progress-bar progress-bar-striped progress-bar-animated bg-warning');
        } else if(optionValue <= 100){
          $('.progress-bar').attr('class','progress-bar progress-bar-striped progress-bar-animated bg-danger');
        };
        
      });
    }).change();
  });

    $(document).ready(function(){
    $("#temp_indicacao_empresa").change(function(){
      $(this).find("option:selected").each(function(){
        var optionValue = $(this).attr("value");

        $(".progress-bar").html(optionValue+'%');
        $('.progress-bar').attr('style','width: '+optionValue+'%');

        if(optionValue <= 30){
          $('.progress-bar').attr('class','progress-bar progress-bar-striped progress-bar-animated bg-success');
        } else if(optionValue <= 70){
          $('.progress-bar').attr('class','progress-bar progress-bar-striped progress-bar-animated bg-warning');
        } else if(optionValue <= 100){
          $('.progress-bar').attr('class','progress-bar progress-bar-striped progress-bar-animated bg-danger');
        };
        
      });
    }).change();
  });