    $("input[name=numeroend]").change(function(data){ 
    var selection = $("input[name=numeroend]:checked").val();
    console.log(selection); 
    if(selection != "1")
    $("#campo-escondidoend").hide();
    else
    $("#campo-escondidoend").show();
    });

    $("#campo-escondidoend").hide();

    $(".empresa").hide();
    $(".pessoa").hide();

    $("input[name=numeroendconsultor]").change(function(data){ 
    var selection = $("input[name=numeroendconsultor]:checked").val();
    console.log(selection); 
    if(selection != "1")
    $("#campo-escondidoendconsultor").hide();
    else
    $("#campo-escondidoendconsultor").show();
    });

    $("#campo-escondidoendconsultor").hide();

    $(".empresa").hide();
    $(".pessoa").hide();

    $(document).ready(function(){
    $("#tipocliente").change(function(){
    $(this).find("option:selected").each(function(){
    var optionValue = $(this).attr("value");
    if(optionValue == 'pessoa'){
    $("." + optionValue).show();
    $(".empresa").hide();          
    }else{
    $("." + optionValue).show();
    $(".pessoa").hide();
    }
    });
    }).change();
    });


// Pessoa Fisica

    $(document).ready(function(){

    //Aqui a ativa a imagem de load
    function loading_show(){
    $('#loading').html("<img src='../assets/img/loading.gif'/>").fadeIn('fast');
    }
    
    //Aqui desativa a imagem de loading
    function loading_hide(){
        $('#loading').fadeOut('fast');
    }       
    
    
    // aqui a função ajax que busca os dados em outra pagina do tipo html, não é json
    function load_dados(valores, page, div)
    {
        $.ajax
            ({
                type: 'POST',
                dataType: 'html',
                url: page,
                beforeSend: function(){//Chama o loading antes do carregamento
                  loading_show();
        },
                data: valores,
                success: function(msg)
                {
                    loading_hide();
                    var data = msg;
              $(div).html(data).fadeIn();       
                }
            });
    }
    
    //Aqui eu chamo o metodo de load pela primeira vez sem parametros para pode exibir todos
    load_dados(null, 'pesquisa.php', '#MostraPesq');
    
    
    //Aqui uso o evento key up para começar a pesquisar, se valor for maior q 0 ele faz a pesquisa
    $('#pesquisaCliente').keyup(function(){
        
        var valores = $('#form_pesquisa').serialize()//o serialize retorna uma string pronta para ser enviada
        
        //pegando o valor do campo #pesquisaCliente
        var $parametro = $(this).val();
        
        if($parametro.length >= 1)
        {
            load_dados(valores, 'pesquisa.php', '#MostraPesq');
        }else
        {
            load_dados(null, 'pesquisa.php', '#MostraPesq');
        }
    });

  });


// Empresa

    $(document).ready(function(){

    //Aqui a ativa a imagem de load
    function loading_show(){
    $('#loading2').html("<img src='../assets/img/loading.gif'/>").fadeIn('fast');
    }
    
    //Aqui desativa a imagem de loading
    function loading_hide(){
        $('#loading2').fadeOut('fast');
    }       
    
    
    // aqui a função ajax que busca os dados em outra pagina do tipo html, não é json
    function load_dados(valores, page, div)
    {
        $.ajax
            ({
                type: 'POST',
                dataType: 'html',
                url: page,
                beforeSend: function(){//Chama o loading antes do carregamento
                  loading_show();
        },
                data: valores,
                success: function(msg)
                {
                    loading_hide();
                    var data = msg;
              $(div).html(data).fadeIn();       
                }
            });
    }
    
    //Aqui eu chamo o metodo de load pela primeira vez sem parametros para pode exibir todos
    load_dados(null, 'pesquisaempresa.php', '#PesqEmp');
    
    
    //Aqui uso o evento key up para começar a pesquisar, se valor for maior q 0 ele faz a pesquisa
    $('#pesquisaEmpresa').keyup(function(){
        
        var valores = $('#form_pesquisaempresa').serialize()//o serialize retorna uma string pronta para ser enviada
        
        //pegando o valor do campo #pesquisaCliente
        var $parametroempresa = $(this).val();
        
        if($parametroempresa.length >= 1)
        {
            load_dados(valores, 'pesquisaempresa.php', '#PesqEmp');
        }else
        {
            load_dados(null, 'pesquisaempresa.php', '#PesqEmp');
        }
    });

  });

// Pessoa Fisisica (Meus)

$(document).ready(function(){

    //Aqui a ativa a imagem de load
    function loading_show(){
    $('#loading3').html("<img src='../assets/img/loading.gif'/>").fadeIn('fast');
    }
    
    //Aqui desativa a imagem de loading
    function loading_hide(){
        $('#loading3').fadeOut('fast');
    }       
    
    
    // aqui a função ajax que busca os dados em outra pagina do tipo html, não é json
    function load_dados(valores, page, div)
    {
        $.ajax
            ({
                type: 'POST',
                dataType: 'html',
                url: page,
                beforeSend: function(){//Chama o loading antes do carregamento
                  loading_show();
        },
                data: valores,
                success: function(msg)
                {
                    loading_hide();
                    var data = msg;
              $(div).html(data).fadeIn();       
                }
            });
    }
    
    //Aqui eu chamo o metodo de load pela primeira vez sem parametros para pode exibir todos
    load_dados(null, 'pesquisameus.php', '#MostraPesqMeus');
    
    
    //Aqui uso o evento key up para começar a pesquisar, se valor for maior q 0 ele faz a pesquisa
    $('#pesquisaClienteMeus').keyup(function(){
        
        var valores = $('#form_pesquisameus').serialize()//o serialize retorna uma string pronta para ser enviada
        
        //pegando o valor do campo #pesquisaCliente
        var $parametromeus = $(this).val();
        
        if($parametromeus.length >= 1)
        {
            load_dados(valores, 'pesquisameus.php', '#MostraPesqMeus');
        }else
        {
            load_dados(null, 'pesquisameus.php', '#MostraPesqMeus');
        }
    });

  });

// Empresa (Meus)

    $(document).ready(function(){

    //Aqui a ativa a imagem de load
    function loading_show(){
    $('#loading4').html("<img src='../assets/img/loading.gif'/>").fadeIn('fast');
    }
    
    //Aqui desativa a imagem de loading
    function loading_hide(){
        $('#loading4').fadeOut('fast');
    }       
    
    
    // aqui a função ajax que busca os dados em outra pagina do tipo html, não é json
    function load_dados(valores, page, div)
    {
        $.ajax
            ({
                type: 'POST',
                dataType: 'html',
                url: page,
                beforeSend: function(){//Chama o loading antes do carregamento
                  loading_show();
        },
                data: valores,
                success: function(msg)
                {
                    loading_hide();
                    var data = msg;
              $(div).html(data).fadeIn();       
                }
            });
    }
    
    //Aqui eu chamo o metodo de load pela primeira vez sem parametros para pode exibir todos
    load_dados(null, 'pesquisaempresameus.php', '#PesqEmpMeus');
    
    
    //Aqui uso o evento key up para começar a pesquisar, se valor for maior q 0 ele faz a pesquisa
    $('#pesquisaEmpresaMeus').keyup(function(){
        
        var valores = $('#form_pesquisaempresameus').serialize()//o serialize retorna uma string pronta para ser enviada
        
        //pegando o valor do campo #pesquisaCliente
        var $parametroempresameus = $(this).val();
        
        if($parametroempresameus.length >= 1)
        {
            load_dados(valores, 'pesquisaempresameus.php', '#PesqEmpMeus');
        }else
        {
            load_dados(null, 'pesquisaempresameus.php', '#PesqEmpMeus');
        }
    });

  });


/////// Indicações (Pessoa)

$(document).ready(function(){

    //Aqui a ativa a imagem de load
    function loading_show(){
    $('#loading5').html("<img src='../assets/img/loading.gif'/>").fadeIn('fast');
    }
    
    //Aqui desativa a imagem de loading
    function loading_hide(){
        $('#loading5').fadeOut('fast');
    }       
    
    
    // aqui a função ajax que busca os dados em outra pagina do tipo html, não é json
    function load_dados(valores, page, div)
    {
        $.ajax
            ({
                type: 'POST',
                dataType: 'html',
                url: page,
                beforeSend: function(){//Chama o loading antes do carregamento
                  loading_show();
        },
                data: valores,
                success: function(msg)
                {
                    loading_hide();
                    var data = msg;
              $(div).html(data).fadeIn();       
                }
            });
    }
    
    //Aqui eu chamo o metodo de load pela primeira vez sem parametros para pode exibir todos
    load_dados(null, 'pesquisaindp.php', '#MostraPesqIndP');
    
    
    //Aqui uso o evento key up para começar a pesquisar, se valor for maior q 0 ele faz a pesquisa
    $('#pesquisaIndP').keyup(function(){
        
        var valores = $('#form_pesquisaindp').serialize()//o serialize retorna uma string pronta para ser enviada
        
        //pegando o valor do campo #pesquisaCliente
        var $parametroindp = $(this).val();
        
        if($parametroindp.length >= 1)
        {
            load_dados(valores, 'pesquisaindp.php', '#MostraPesqIndP');
        }else
        {
            load_dados(null, 'pesquisaindp.php', '#MostraPesqIndP');
        }
    });

  });

// Indicações  (Empresa)

    $(document).ready(function(){

    //Aqui a ativa a imagem de load
    function loading_show(){
    $('#loading6').html("<img src='../assets/img/loading.gif'/>").fadeIn('fast');
    }
    
    //Aqui desativa a imagem de loading
    function loading_hide(){
        $('#loading6').fadeOut('fast');
    }       
    
    
    // aqui a função ajax que busca os dados em outra pagina do tipo html, não é json
    function load_dados(valores, page, div)
    {
        $.ajax
            ({
                type: 'POST',
                dataType: 'html',
                url: page,
                beforeSend: function(){//Chama o loading antes do carregamento
                  loading_show();
        },
                data: valores,
                success: function(msg)
                {
                    loading_hide();
                    var data = msg;
              $(div).html(data).fadeIn();       
                }
            });
    }
    
    //Aqui eu chamo o metodo de load pela primeira vez sem parametros para pode exibir todos
    load_dados(null, 'pesquisainde.php', '#PesqIndE');
    
    
    //Aqui uso o evento key up para começar a pesquisar, se valor for maior q 0 ele faz a pesquisa
    $('#pesquisaIndE').keyup(function(){
        
        var valores = $('#form_pesquisainde').serialize()//o serialize retorna uma string pronta para ser enviada
        
        //pegando o valor do campo #pesquisaCliente
        var $parametroinde = $(this).val();
        
        if($parametroinde.length >= 1)
        {
            load_dados(valores, 'pesquisainde.php', '#PesqIndE');
        }else
        {
            load_dados(null, 'pesquisainde.php', '#PesqIndE');
        }
    });

  });


// Consultores

    $(document).ready(function(){

    //Aqui a ativa a imagem de load
    function loading_show(){
    $('#loading7').html("<img src='../assets/img/loading.gif'/>").fadeIn('fast');
    }
    
    //Aqui desativa a imagem de loading
    function loading_hide(){
        $('#loading7').fadeOut('fast');
    }       
    
    
    // aqui a função ajax que busca os dados em outra pagina do tipo html, não é json
    function load_dados(valores, page, div)
    {
        $.ajax
            ({
                type: 'POST',
                dataType: 'html',
                url: page,
                beforeSend: function(){//Chama o loading antes do carregamento
                  loading_show();
        },
                data: valores,
                success: function(msg)
                {
                    loading_hide();
                    var data = msg;
              $(div).html(data).fadeIn();       
                }
            });
    }
    
    //Aqui eu chamo o metodo de load pela primeira vez sem parametros para pode exibir todos
    load_dados(null, 'pesquisa_consultores.php', '#PesqConsultor');
    
    
    //Aqui uso o evento key up para começar a pesquisar, se valor for maior q 0 ele faz a pesquisa
    $('#pesquisaConsultores').keyup(function(){
        
        var valores = $('#form_pesquisaconsultores').serialize()//o serialize retorna uma string pronta para ser enviada
        
        //pegando o valor do campo #pesquisaCliente
        var $parametroconsultor = $(this).val();
        
        if($parametroconsultor.length >= 1)
        {
            load_dados(valores, 'pesquisa_consultores.php', '#PesqConsultor');
        }else
        {
            load_dados(null, 'pesquisa_consultores.php', '#PesqConsultor');
        }
    });

  });


// Administradores

    $(document).ready(function(){

    //Aqui a ativa a imagem de load
    function loading_show(){
    $('#loading8').html("<img src='../assets/img/loading.gif'/>").fadeIn('fast');
    }
    
    //Aqui desativa a imagem de loading
    function loading_hide(){
        $('#loading8').fadeOut('fast');
    }       
    
    
    // aqui a função ajax que busca os dados em outra pagina do tipo html, não é json
    function load_dados(valores, page, div)
    {
        $.ajax
            ({
                type: 'POST',
                dataType: 'html',
                url: page,
                beforeSend: function(){//Chama o loading antes do carregamento
                  loading_show();
        },
                data: valores,
                success: function(msg)
                {
                    loading_hide();
                    var data = msg;
              $(div).html(data).fadeIn();       
                }
            });
    }
    
    //Aqui eu chamo o metodo de load pela primeira vez sem parametros para pode exibir todos
    load_dados(null, 'pesquisa_administradores.php', '#PesqAdministrador');
    
    
    //Aqui uso o evento key up para começar a pesquisar, se valor for maior q 0 ele faz a pesquisa
    $('#pesquisaAdministrador').keyup(function(){
        
        var valores = $('#form_pesquisaadministradores').serialize()//o serialize retorna uma string pronta para ser enviada
        
        //pegando o valor do campo #pesquisaCliente
        var $parametroadministrador = $(this).val();
        
        if($parametroadministrador.length >= 1)
        {
            load_dados(valores, 'pesquisa_administradores.php', '#PesqAdministrador');
        }else
        {
            load_dados(null, 'pesquisa_administradores.php', '#PesqAdministrador');
        }
    });

  });