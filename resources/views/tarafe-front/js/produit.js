$(document).ready(function(){
    $('.div_categorie03').hide();
    $('.trois').click(function(){
        $('.div_categorie03').toggle('fast');
    });
    $('.s02').hide();
    $('.s03').hide();
    $('.s04').hide();

    
    $('.vet').css('background-color','#582900');
    $('.vet').hover(function(){
        $('.s01').show('fast');
        $('.s02').hide('fast');
        $('.s03').hide('fast');
        $('.s04').hide('fast');
        $('.vet').css('background-color','#582900');
        $('.chau').css('background-color','rgba(230, 230, 230, 0)');
        $('.acc').css('background-color','rgba(230, 230, 230, 0)');
        $('.tex').css('background-color','rgba(230, 230, 230, 0)');
    });
    $('.chau').hover(function(){
        $('.s02').show('fast');
        $('.s01').hide('fast');
        $('.s03').hide('fast');
        $('.s04').hide('fast');
        $('.chau').css('background-color','#582900');
        $('.vet').css('background-color','rgba(230, 230, 230, 0)');
        $('.acc').css('background-color','rgba(230, 230, 230, 0)');
        $('.tex').css('background-color','rgba(230, 230, 230, 0)');

    });
    $('.acc').hover(function(){
        $('.s03').show('fast');
        $('.s02').hide('fast');
        $('.s01').hide('fast');
        $('.s04').hide('fast'); 
        $('.acc').css('background-color','#582900');
        $('.vet').css('background-color','rgba(230, 230, 230, 0)');
        $('.chau').css('background-color','rgba(230, 230, 230, 0)');
        $('.tex').css('background-color','rgba(230, 230, 230, 0)');

    });
    $('.tex').hover(function(){
        $('.s04').show('fast');
        $('.s02').hide('fast');
        $('.s03').hide('fast');
        $('.s01').hide('fast'); 
        $('.tex').css('background-color','#582900');
        $('.vet').css('background-color','rgba(230, 230, 230, 0)');
        $('.acc').css('background-color','rgba(230, 230, 230, 0)');
        $('.chau').css('background-color','rgba(230, 230, 230, 0)');

    });
    
});