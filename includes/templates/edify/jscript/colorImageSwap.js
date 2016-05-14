var jq = jQuery.noConflict();

jq( document ).ready( function(){

    jq('.colorpick').css('cursor','pointer');

    jq('.colorpick').click(function(){
        var attribute_id = jq(this).attr('id');
        var colorimage = jq('#productMainImage').find('img').attr('src');
        var cloudAnchor = jq('#productMainImage').find('a').attr('href');
        var inlineJS = 	jq('#productMainImage').find('script').html();
        var split1 = inlineJS.split("=");
        var split2 = split1[3].split(" ");
        var split3 = split1[5].split(" ");
        var srcImg;
        switch (attribute_id){
            case 'color_16':
                srcImg = 'http://www.zpalette.studio/develop/images/large-zpalette-black_01.jpg';
                break;
            case 'color_70':
                srcImg = 'http://www.zpalette.studio/develop/images/large-zpalette-black_02.jpg';
                break;
            case 'color_69':
                srcImg = 'http://www.zpalette.studio/develop/images/large-zpalette-black_03.jpg';
                break;
            case 'color_25':
                srcImg = 'http://www.zpalette.studio/develop/images/large-zpalette-black_05.jpg';
                break;
            case 'color_17':
                srcImg = 'http://www.zpalette.studio/develop/images/large-zpalette-black_06.jpg';
                break;
            case 'color_30':
                srcImg = 'http://www.zpalette.studio/develop/images/large-zpalette-black_07.jpg';
                break;
            case 'color_27':
                srcImg = 'http://www.zpalette.studio/develop/images/large-zpalette-black_04.jpg';
                break;
            case 'color_15':
                srcImg = 'http://www.zpalette.studio/develop/images/large-zpalette-black_08.jpg';
                break;
            case 'color_29':
                srcImg = 'http://www.zpalette.studio/develop/images/large-zpalette-black.jpg';
                break;
            default:
                srcImg = colorimage;
        }
        split2[0] = srcImg;
        split3[0] = srcImg;
        split1[3] = '"'+split2[0]+'"'+" title"+split2[1];
        split1[5] = '"'+split3[0]+'"'+" "+split3[1];
        var strJoin = split1.join('=');
//        jq('#productMainImage').find('script').html(strJoin);

        var swapreplace = jq('#productMainImage').find('script').replaceWith(strJoin);

        alert(swapreplace)
        jq('#productMainImage').find('script').replaceWith(strJoin);
        jq('#productMainImage').find('a').attr('href', srcImg);
        jq('#productMainImage').find('img').attr('src', srcImg);


    /*	if(attribute_id = 'color_16') {
     srcImg = 'http://www.zpalette.studio/develop/images/large-zpalette-black_01.jpg';
     alert(attribute_id);
     //			jq('#productMainImage').find('img').attr('src', 'http://www.zpalette.studio/develop/images/large-zpalette-black_01.jpg');
     }
     if(attribute_id = 'color_70') {
     srcImg = 'http://www.zpalette.studio/develop/images/large-zpalette-black_02.jpg';
     alert(attribute_id);
     //			jq('#productMainImage').find('img').attr('src', 'http://www.zpalette.studio/develop/images/large-zpalette-black_02.jpg');
     }
     if(attribute_id = 'color_69') {
     srcImg = 'http://www.zpalette.studio/develop/images/large-zpalette-black_03.jpg';
     alert(attribute_id);
     // 			jq('#productMainImage').find('img').attr('src', 'http://www.zpalette.studio/develop/images/large-zpalette-black_03.jpg');
     }
     if(attribute_id = 'color_25') {
     jq('#productMainImage').find('img').attr('src', 'http://www.zpalette.studio/develop/images/large-zpalette-black_05.jpg');
     }
     if(attribute_id = 'color_17') {
     jq('#productMainImage').find('img').attr('src', 'http://www.zpalette.studio/develop/images/large-zpalette-black_06.jpg');
     }
     if(attribute_id = 'color_30') {
     jq('#productMainImage').find('img').attr('src', 'http://www.zpalette.studio/develop/images/large-zpalette-black_07.jpg');
     }
     if(attribute_id = 'color_27') {
     jq('#productMainImage').find('img').attr('src', 'http://www.zpalette.studio/develop/images/large-zpalette-black_04.jpg');
     }
     if(attribute_id = 'color_15') {
     jq('#productMainImage').find('img').attr('src', 'http://www.zpalette.studio/develop/images/large-zpalette-black_08.jpg');
     }
     if(attribute_id = 'color_29') {
     jq('#productMainImage').find('img').attr('src', 'http://www.zpalette.studio/develop/images/large-zpalette-black.jpg');
     }*/
    })
});

