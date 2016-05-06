
$(document).ready(function(){

	$('.styler').styler();

	$('.compare_product_wrap').mCustomScrollbar({
		axis: 'x',
		scrollbarPosition: "outside"
	});

	$('.det_prod__img_list').owlCarousel({
		center: true,
		items:1,
		loop:false,
		dots: true,
		nav: false,
		navText: ['<','>'],
		onInitialized: function(){
			var current = this.current();
			$('.owl-next').toggleClass('disabled', current === this.maximum());
			$('.owl-prev').toggleClass('disabled', current === this.minimum());
		},
		responsive:{
			991:{
				items:1,
				center: false,
				nav: true
			}
		}
	});
	$(".det_prod__img_list").on(' changed.owl.carousel refreshed.owl.carousel', function (event) {
		if (!event.namespace) return;
		var carousel = event.relatedTarget,
			element = event.target,
			current = carousel.current();
		$('.owl-next', element).toggleClass('disabled', current === carousel.maximum());
		$('.owl-prev', element).toggleClass('disabled', current === carousel.minimum());
	});





//modal
	(function() {

		$('body').on('click', '[data-toggle="modal"]', function(e) {
			e.preventDefault();

			var $modal = $('#modal'),
				$this = $(this);
			if($this.hasClass('youtube_pp_link')){

				//open youtube video in popup
				var id = getYoutubeID($this.data('href')),
					//height_this = $(this).height(),
					src = '//www.youtube.com/embed/'+id+'?rel=0&autoplay=1',
					iframe = '<iframe id="youtube" width="100%" frameborder="0" src="'+src+'" allowfullscreen></iframe>';
					//$video_wrap = $(this).siblings(".video-wrap");
				$modal.find('.modal_content').html(iframe);
				$modal.find('iframe').on('load', function() {
					showModal();
				});

				//get youtube id by link
				function getYoutubeID(url) {
					var id = url.match("[\\?&]v=([^&#]*)");
					id = id[1];
					return id;
				}


			} else {
				$modal.find('.modal_content').load($this.attr('data-href'), showModal);
			}


			$modal.on('shown.bs.modal', centeredPopUp);
			$modal.on('show.bs.modal', centeredPopUp);
			$(window).on('resize', centeredPopUp);

			function showModal() {


				$modal.modal();
			}
			return false;
		});


		function centeredPopUp() {
			var $modal = $('.modal_block'),
				blockHeight = $modal.outerHeight(),
				windowHeight = $(window).outerHeight(),
				margin = (windowHeight - blockHeight)/2;

			if(windowHeight < blockHeight) {
				$modal.css('marginTop', 20);
			}

			else {
				$modal.css('marginTop', margin);
			}
		}
		//clear modal after close
		$('#modal').on('hidden.bs.modal', function () {
			$('#modal').find('.modal_content').find('iframe').remove();
		});
	})();
});
