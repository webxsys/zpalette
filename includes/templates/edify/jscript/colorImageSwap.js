var jq = jQuery.noConflict();

jq( document ).ready( function(){

    jq('.colorpick').css('cursor','pointer');

    jq('.owl-item').find('img').css('cursor','pointer');

    jq('.additionalImages')
        .mouseover(function(){
            //var thisSrc = jq ( '.additionalImages').find('img').attr('src');
           // var thisSrc = jq (this).find('a').attr('href');
            var c1 = jq(this).children('a').attr('href');
            jq('#productMainImage').find('img').attr('src', c1);
            jq('#productMainImage').find('img').css("width", "+=333");

});


    jq('.colorpick').click(function(){
        var attribute_id = jq(this).attr('id');
        var colorimage = jq('#productMainImage').find('img').attr('src');
        var cloudAnchor = jq('#productMainImage').find('a').attr('href');
        var inlineJS = 	jq('#productMainImage').find('script').html();
        var split1 = inlineJS.split("=");
        var split2 = split1[3].split(" ");
        var split3 = split1[5].split(" ");
        var srcImg;
        var base_color;

        var zapi = jq('#zapi').attr('value');

        switch (attribute_id){
            case 'color_16':
                if(zapi == '316') {
                    srcImg = 'http://www.zpalette.studio/develop/images/small-black-zpalette_small-pink.jpg';
                }else{
                    srcImg = 'http://www.zpalette.studio/develop/images/large-color/01-large_pink.jpg';
                }
                break;
            case 'color_70':
                if(zapi == '316') {
                    srcImg = 'http://www.zpalette.studio/develop/images/small-black-zpalette_small-leopard.jpg';
                }else{
                    srcImg = 'http://www.zpalette.studio/develop/images/large-color/01-large_leopard.jpg';
                }
                break;
            case 'color_69':
                srcImg = 'http://www.zpalette.studio/develop/images/large-color/01-large_zebra.jpg';
                break;
            case 'color_25':
                srcImg = 'http://www.zpalette.studio/develop/images/large-color/01-large_orange.jpg';
                break;
            case 'color_17':
                srcImg = 'http://www.zpalette.studio/develop/images/large-color/01-large_yellow.jpg';
                break;
            case 'color_30':
                srcImg = 'http://www.zpalette.studio/develop/images/large-color/01-large_pearlwhite.jpg';
                break;
            case 'color_27':
                srcImg = 'http://www.zpalette.studio/develop/images/large-color/01-large_lavender.jpg';
                break;
            case 'color_15':
                srcImg = 'http://www.zpalette.studio/develop/images/large-color/01-large_skyblue.jpg';
                break;
            case 'color_29':
                if(zapi == '316') {
                    srcImg = 'http://www.zpalette.studio/develop/images/small-black-zpalette.jpg';
                }else {
                    srcImg = 'http://www.zpalette.studio/develop/images/large-color/01-large.jpg';
                }
                break;
            default:
                srcImg = colorimage;
        }

        bc_split = srcImg.split("_");

        split2[0] = srcImg;
        split3[0] = srcImg;
        split1[3] = '"'+split2[0]+'"'+" title"+split2[1];
        split1[5] = '"'+split3[0]+'"'+" "+split3[1];
        var jstag_start = '<script language="javascript" type="text/javascript">';
        var jstag_end = '</script>';
        var strJoin = jstag_start + split1.join('=') + jstag_end;
//       jq('#productMainImage').find('script').html(strJoin);

 //      var swapreplace = jq('#productMainImage').find('script').replaceWith(strJoin);

 ///       alert(strJoin);
 //       jq('#productMainImage').find('script').replaceWith(swapreplace);
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

