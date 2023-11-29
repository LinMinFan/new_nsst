$(document).ready(function() {     
	        
    // init background slide images
    $.backstretch([
        '../../img/login/1.jpg',
        '../../img/login/2.jpg',
        '../../img/login/3.jpg',
        '../../img/login/4.jpg',
        ], 
        {
            fade: 1000,
            duration: 8000
        }
    );

    $(document).on('click','#btn_usecard',function(){

        $('#card_no').val('');
        $('#card_no').focus();
        
    });

});