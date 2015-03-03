window.onload = function(){
  var items = document.getElementsByTagName("li");

  if(items.length>0){
    for(var i=0; i<items.length; i++){
        the_class = items[i].className;
        pattern = /(\s|^)grayscale(\s|$)/;

        if(!pattern.test(the_class)){
            continue;
        }

        var item = items[i];
        var item_image = item.firstChild.firstChild;
        var color_image_src = item_image.src;
        var grayscale_image_src = "/templates/lonne/js/grayscale.php?source_file="+color_image_src;
        item_image.src = grayscale_image_src;
        item.onmouseover = function(){
            var this_img = this.firstChild.firstChild;
            this_img.src = this_img.src.substring(this_img.src.lastIndexOf("=")+1);
        }
        item.onmouseout = function(){
            var this_img = this.firstChild.firstChild;
            this_img.src = "/templates/lonne/js/grayscale.php?source_file="+this_img.src;
        }
    }
  }


  var items = document.getElementsByTagName("div");

  if(items.length>0){
    for(var i=0; i<items.length; i++){
        the_class = items[i].className;
        pattern = /(\s|^)grayscale(\s|$)/;

        if(!pattern.test(the_class)){
            continue;
        }

        var item = items[i];
        var item_image = item.firstChild.firstChild;
        var color_image_src = item_image.src;
        var grayscale_image_src = "/templates/lonne/js/grayscale.php?source_file="+color_image_src;
        item_image.src = grayscale_image_src;
        item.onmouseover = function(){
            var this_img = this.firstChild.firstChild;
            this_img.src = this_img.src.substring(this_img.src.lastIndexOf("=")+1);
        }
        item.onmouseout = function(){
            var this_img = this.firstChild.firstChild;
            this_img.src = "/templates/lonne/js/grayscale.php?source_file="+this_img.src;
        }
    }
  }


}