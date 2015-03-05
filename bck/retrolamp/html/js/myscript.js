$(function(){
      //подсказка в текстовом поле  
    var inputText = $("header input[type='text']");
        
    inputText.focus(function(){
        if($(this).val() == 'поиск по сайту') {
            $(this).val('');
        }
        $(this).addClass('text');
    });
    
    inputText.blur(function(){
        if($(this).val()=='') {
            $(this).val('поиск по сайту');
            }
        if($(this).val() == "поиск по сайту" || $(this).val() == ""){
        $(this).removeClass('text');

        }
    });
    
    
    //слайдер
    
    var arrowLeft = $("#arrow_left");
    var arrowRight = $("#arrow_right");
    var sliderSpisokLi = $(".slider_spisok li");     
    
    arrowLeft.hide();
 
 
    var margins_2 = 349;
  
    var sliderSpisok = $(".slider_spisok");                 
  
    arrowRight.click(function(){
  
        if ( -(sliderSpisokLi.length-4) * margins_2 <= sliderSpisok.position().left ) {
            sliderSpisok.animate({
                left: sliderSpisok.position().left - margins_2
            }, 50);
   
            if ( -(sliderSpisokLi.length-4) * margins_2 >= sliderSpisok.position().left ) arrowRight.hide();
            if ( sliderSpisok.position().left <= 0 ) arrowLeft.show();
        }
    });
  
    arrowLeft.click(function(){
        if ( sliderSpisok.position().left < 0 ) {
            sliderSpisok.animate({
                left: sliderSpisok.position().left + margins_2
            }, 50);
         
            if ( sliderSpisok.position().left >= -margins_2 ) arrowLeft.hide();
            if ( -(sliderSpisokLi.length-3) * margins_2 <= sliderSpisok.position().left ) arrowRight.show();
        }
    });
    
    //колонки одной высоты
    
    setTimeout(function() {
      var mainDivs = $(".description"); //Получаем все элементы с классом description
      var maxHeight = 0;
      for (var i = 0; i < mainDivs.length; ++i) {
        if (maxHeight < $(mainDivs[i]).height()) { //Находим максимальную высоту
          maxHeight = $(mainDivs[i]).height(); 
        }
      }
      for (var i = 0; i < mainDivs.length; ++i) {
        $(mainDivs[i]).height(maxHeight); //Устанавливаем всем элементам максимальную высоту
      }
    }, 10);
    
    //галерея 
    
    $("#big a").hide();
    
    $("#small a").click(function(e){
        $("#big a").hide();
        $("#small a").css('border','2px solid transparent');
        $("#big a[href='"+$(this).attr('href')+"']").show();
        $(this).css('border','2px solid #F39C12');
        e.preventDefault();
    });
    
    $("#small a").eq(0).click();
    
    
    
    $(".fancybox-button").fancybox({
		prevEffect		: 'none',
		nextEffect		: 'none',
		closeBtn		: false,
		helpers		: {
			title	: { type : 'inside' },
			buttons	: {}
		}
	});
    
    
    
    
    
    //Описание, характеристика
    
    $(".spec div").hide();
    
    $("#specification ul li").click(function(){
        $("#specification ul li").removeClass('active');
        $(this).addClass('active');
        $(".spec div").hide();
        $("."+$(this).attr('id')).show();
    });
    
    $("#specification ul li").eq(0).click();
  
       
 });//конец ready