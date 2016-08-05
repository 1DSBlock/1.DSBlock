
$(window).load(function(){
	// $('.img_detail_product img,.col-md-6.left img').height($('.img_detail_product,.col-md-6.left').height());
	// $('.col-md-6.left.fixheight img').height($('.col-md-6.left.fixheight').height());
	
	// $('.img_product img').height($('.img_product').height());
	// $('.img_product img').width($('.img_product').width());
	
	// $('.col-md-6.left.fixheight img').width($('.col-md-6.left.fixheight').width());
	// $('.col-md-6.left.fix.fix_width img').height($('.col-md-6.left.fix.fix_width').height());
	// $('.col-md-6.left.fix.fix_width img').width($('.col-md-6.left.fix.fix_width').width());
	
	// $('.col-md-6.float_right.fix.fix_width .avatar img').height($('.col-md-6.float_right.fix.fix_width .avatar').height());
	// $('.col-md-6.float_right.fix.fix_width .avatar img').width($('.col-md-6.float_right.fix.fix_width .avatar').width());
	
	// // $('.flexslider .slides img').height($('.flexslider').height());
	
	// $('.img_product img,.img_detail_product img,.col-md-6.left img').width($('.img_product,.img_detail_product,.col-md-6.left').width());
	
	
	// $('.col-md-6.left.width34 .avatar_customer.border_color img').width($('.col-md-6.left.width34 .avatar_customer.border_color a ').height())
	
	// $('.img_center_right img,.img_center_left img').height($('.img_center_right,.img_center_left').height());
	
	// $('.wrapper_slide .img_product img').height($('.wrapper_slide .img_product').height());
	// $('.wrapper_slide .img_product img').width($('.wrapper_slide .img_product').width());
	// $('.opacity').height($('.wrapper_slide').height());
	
	// $('.middle-img > a').each(function(){					$(this).width($(this).parent().width()).height($(this).parent().height());
	// });
	
	// $('.media_picture_img img').height($('.media_picture_img').height());
 //    $('.media_new_img img').height($('.media_new_img').height());
	
	// /* chinh chieu cao cho img nguoi noi tieng */
	
	// var a = $('.item_product.six_item .img_product');
	// var img = $('.item_product.six_item img');
	
	// $(a).height($(a).width());
	// $(img).width($(a).height());
	// $(img).height($(a).height());	
	
})
var Website = {
	run: function(){
		$('.flexslider').flexslider({ animation: "fade" });
		
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) $('#goTop').fadeIn();
			
			else $('#goTop').fadeOut();
		});
		$('#goTop').click(function () {
			$('body,html').animate({ scrollTop: 0 }, 'slow');
		});
		
		$('.name_').each(function(index,ele){
			var height = $(ele).height();
			var t = $(ele).parent().height() - height;
			var p = t/2;
			$(ele).parent().css({'padding-top':p + 'px', 'padding-bottom':p + 'px'});
		});
		
		$(window).scroll(function(){
			if($(this).scrollTop() < 200)
				$('.node_share_feelings').addClass('hidden');
			else
			$('.node_share_feelings').removeClass('hidden');
		});
		//luan xu ly
		if($(window).width() > 992){
			$('body').css({'padding-top':$('header').height() + 'px'});
			$('.col-living .content_').each(function(){
				$(this).css('max-height', $('.col-living-img').height()/1.2);
			})
		}
		$('.img_product').height($('.img_product').innerWidth());
		$(window).resize(function(){
			if($(window).width() > 992){
				$('body').css({'padding-top':$('header').height() + 'px'});
			}else{
				$('body').removeAttr('style');
			}
			$('.img_product').height($('.img_product').innerWidth());
		});
		//
        $("#owl-demo0,#owl-demo1,#owl-demo2,#owl-demo3,#owl-demo4,#owl-demo5,#owl-demo6").owlCarousel({
             navigation: false,
             pagination: true,
             items: 1,
			 itemsDesktop : [1199,1],
			 autoPlay:false,itemsDesktopSmall : [979,1],
			 itemsTablet : [768,1],
			 itemsTabletSmall : [480,1],
			 itemsMobile : [340,1],
        });
		$("#owl-demo7").owlCarousel({
             navigation: true,
             pagination: false,
             items: 4,
			 autoPlay:false
        });
        
		$('#close').click(function(){
			$('.poup-hidden').hide();$('.background_popup_feelings').hide();
		});
		$('#show').click(function(){
			$('.background_popup_feelings').show();
		});
		if($(window).width() > 992) var hei = $('header').height(); else var hei = 0;
		$('.ask_a_question').click(function(){
			$('.poup-hidden').show();
			$('.background_popup_feelings.question').show().css('top',$(window).scrollTop()+50+hei);
		});
		$('.show_vote_your_opinions1').click(function(){
			$('.poup-hidden').show();
			$('.background_popup_feelings').show().css('top',$(window).scrollTop()+50+hei);
		});
		$('.poup-hidden').click(function(){
			$(this).hide();$('.background_popup_feelings').hide();
		})
		$('.img_detail_product').height($('.img_detail_product').width());
		$(window).resize(function(){
			if($(window).width() > 992) var hei = $('header').height(); else var hei = 0;
			$('.ask_a_question').click(function(){
				$('.poup-hidden').show();
				$('.background_popup_feelings.question').show().css('top',$(window).scrollTop()+50+hei);
			});
			$('.poup-hidden').click(function(){
				$(this).hide();$('.background_popup_feelings').hide();
			})
			$('.img_detail_product').height($('.img_detail_product').width());
		})
		$('.overlay').each(function (index,ele) {
        var height = $(ele).children('.new_overlay').height();
        var pad = $(ele).height() - height;
        $(ele).css({'padding-top': pad/2 + 'px','padding-bottom': pad/2 + 'px' });
		
		
    })
		
	}
};
$(document).ready(function(){
	Website.run();
});