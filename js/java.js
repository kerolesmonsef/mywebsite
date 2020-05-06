function movesmizing(thewantedid,scrol_to=0,thisb=null){
    $('html').animate({
        scrollTop:$(thewantedid).offset().top-scrol_to
    },2000);
    $(thisb).parent('li').siblings('li').children('a').removeClass('active');
    $(thisb).addClass('active');
    console.log($(thisb));
}

$('.iii').mouseenter(function(){
	//alert();
	$(this).children('.iii-content').animate({top: '0px'},"fast");

});
$('.iii').mouseleave(function(){
	//alert();
	$(this).children('.iii-content').animate({top: '300px'},"fast");
});

$('.portofolio ul li').click(function(){
   $('.portofolio ul .active').toggleClass('active');
   $(this).toggleClass('active');
});
$('.login100-form-btn').click(function(event) {
  // if ($('.textarea-valid').val().length==0 && $('.name-valid').val().length >=0) { event.preventDefault();}
});

$('.languages li').click(function(event) {
    $(this).addClass('active');
    $(this).siblings('li').removeClass('active');
});

