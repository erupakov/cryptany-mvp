$(document).ready(function() {
    
function CbuttonSet() {
    if ($('.itxt').val()!='') {
        $('#cbtn').text($('.itxt').val());
    } else {
        $('#cbtn').text('Button text');
    }
    $('#cbtn').css('background-color',$('.colorbox').css('background-color'));
    $('#cbtn').removeClass('medium').removeClass('small').removeClass('large').addClass($(".xsize").val());
}
    
$('.colorbox').colpick({
	layout:'rgbhex',
	color:'55288c',
	onSubmit:function(hsb,hex,rgb,el) {
		$(el).css('background-color', '#'+hex);
		$(el).colpickHide();
        CbuttonSet();
	}
})
    
$(".js-butcng").change(function(){ 
    CbuttonSet();
});
    
$('.itxt').keyup(function(){ 
    CbuttonSet();
});

CbuttonSet();
    
});