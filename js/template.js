/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @since       3.2
 */

(function($)
{
	$(document).ready(function()	{
		var $body = $('body');

		$('.goods-category__title .icon-toggle').on('click', function() {
			$(this).parent().stop(0,0).toggleClass('active');
			$(this).parent().siblings('.goods-category__items').stop(0,0).slideToggle();
			return false;
		});

		// whats happening carousel init begin
		$('.small-banners').owlCarousel({
			margin:33,
			nav:false,
			dots: false,
			loop: true,
			responsive:{
				0:{
					items:1
				},
				768:{
					items:2
				},
				1200:{
					items:3
				}
			}
		});

		$('.red-select').styler();

		$('.about-prod__read-more').on('click', function() {
			$(this).hide().siblings('.about-prod__text').addClass('active');
			return false;
		});

		function toggleMenuExpand() {
			$('#backdrop1').toggleClass('collapsed');
			$('#main-nav').toggleClass('collapsed');
			$('#main-wrap').toggleClass('expanded');
		}

		function toggleProductMenuExpand() {
			$('#backdrop1').toggleClass('collapsed');
			$('#product-sidebar').toggleClass('collapsed');
			$('#main-wrap').toggleClass('expanded');
		}

		$('#product--btn').click(function(){
			toggleProductMenuExpand();
		});

		$('#backdrop1').click(function(){
			$('#backdrop1').addClass('collapsed');
			$('#product-sidebar').addClass('collapsed');
			$('#main-wrap').addClass('expanded');
			$('#main-nav').addClass('collapsed');
		});

		$('#nav-toggle').click(function(){
			toggleMenuExpand();
		});




		$(document).click(function(){
		  $(".dropdown").hide();
		});

		/* Clicks within the dropdown won't make
		   it past the dropdown itself */
		$(".dropdown").click(function(e){
		  e.stopPropagation();
		});
		//$(".header").sticky({topSpacing:0});

		//$(window).resize(function() {
			//var NewHeight = $(".header").outerHeight();
			//$("#sticky-wrapper").height(NewHeight);
		//});

		$('.header__search-btn').on('click', function() {
			$('.header__search').stop(0,0).toggleClass('active');
		});

		$body.on('click', '.video-one__upload .btn_play', function() {
			var id = getYoutubeID($(this).siblings('.youtube_link').data('link')),
				height_this = $(this).height(),
				src = '//www.youtube.com/embed/'+id+'?rel=0&autoplay=1',
				iframe = '<iframe id="youtube" width="100%" height="'+  height_this + '" frameborder="0" src="'+src+'" allowfullscreen></iframe>',
				$video_wrap = $(this).siblings(".video-wrap");
			$(this).siblings('.youtube_link').hide();
			$(this).siblings('.youtube__name').hide();
			$(this).siblings('.preloader').height(height_this).fadeIn();
			$(this).hide();
			$video_wrap.html(iframe).hide();
			$video_wrap.find('iframe').on('load', function() {
				var $parent = $(this).parent();
				$parent.siblings('.preloader').hide();
				$parent.show();
			});
			return false;
		});

		$body.on('click', '.modal-backdrop', function() {
			$('.youtube-modal').modal('hide');
		});

		$('.youtube-modal').on('hide.bs.modal', function () {
			$(this).html('');
		});

		// // upload image by youtube link
		// function eachYoutubeLink() {
		// 	$('.youtube_link').each(function(){
		// 		if ($(this).html().length > 0) {
		// 			return true;
		// 		}
		// 		var id = getYoutubeID( $(this).data('link'));
		// 		var thumb_url = "http://i.ytimg.com/vi/"+id+"/hqdefault.jpg";
		// 		$(this).addClass('has-image');
		// 		$('<img src="'+thumb_url+'" />').appendTo($(this));
		// 	});
		// }

		//get youtube id by link
		function getYoutubeID(url) {
			var id = url.match("[\\?&]v=([^&#]*)");
			id = id[1];
			return id;
		}

		//eachYoutubeLink();

	});

	$(window).load(function() {
		$('#main-nav ul.main-level ul').each(function () {
			if ($(this).parent().hasClass('special')) {
				return 0;
			}
			$(this).css('height', 'auto');
			var height = $(this).height();
			$(this).attr('data-height', height);
			$(this).css('height', '0');
		});
		$(window).resize(function () {
			if ($(window).innerWidth() > 767) {
				return 0;
			}
			$('#main-nav ul.main-level ul').each(function () {
				if ($(this).parent().hasClass('special')) {
					return 0;
				}
				$(this).css('height', 'auto');
				var height = $(this).height();
				$(this).attr('data-height', height);
				$(this).css('height', '0');
			});
		});
		var parent = $('.parent > a');
		parent.click(function () {
			var grandparent = $(this).parent('li');
			if ($(this).parent('li').hasClass('special')) {
				return 0;
			}
			var trueClass = false;
			$(this).parent('li').toggleClass('expanded');
			$(this).parent('li').siblings('.parent').children('#main-nav ul.main-level ul').css('height', '0');
			$(this).parent('li').children('#main-nav ul.main-level ul').css('height', '0');
			var height = $(this).parent('li').children('#main-nav ul.main-level ul').attr('data-height');
			if ($(this).parent('li').hasClass('expanded')) {
				$(this).parent('li').children('#main-nav ul.main-level ul').css('height', height);
				trueClass = true;
			}
			$(this).parent('li').siblings('.parent').removeClass('expanded');
			if (trueClass) {
				$(this).parent('li').addClass('expanded');
			}
			if ($(this).hasClass('parent-link')) {
				return false;
			}
		});

		var special = $('.parent.special > a');
		var returnMenu = $('.back');
		special.click(function () {
			if ($(window).innerWidth() > 767) {
				return 0;
			}
			if ($(this).parent('li').hasClass('expanded')) {
				return false;
			}
			$('#main-nav ul.main-level > li').hide();
			returnMenu.show();
			$(this).parent('li').show();
			$(this).parent('li').toggleClass('expanded');
			$(this).parent('li').children('#main-nav ul.sub-level').css('height', 'auto');
			if ($(this).hasClass('parent-link')) {
				return false;
			}
		});
		returnMenu.click(function () {
			$('#main-nav ul.sub-level').css('height', '0');
			parent.parent('li').removeClass('expanded');
			$('#main-nav ul.main-level > li').show();
			returnMenu.hide();
		});

	});




})(jQuery);