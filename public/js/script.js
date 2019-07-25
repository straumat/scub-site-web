$(document).ready(function() {

/*
	var menuEl = document.getElementById('ml-menu'),
		mlmenu = new MLMenu(menuEl, {
			// breadcrumbsCtrl : true, // show breadcrumbs
			// initialBreadcrumb : 'all', // initial breadcrumb text
			backCtrl : true, // show back button
			// itemsDelayInterval : 60, // delay between each menu item sliding animation
			onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
		});

	// mobile menu toggle
	// var openMenuCtrl = document.querySelector('.action--open'),
	// 	closeMenuCtrl = document.querySelector('.action--close');

	// openMenuCtrl.addEventListener('click', openMenu);
	// closeMenuCtrl.addEventListener('click', closeMenu);

	function openMenu() {
		classie.add(menuEl, 'menu--open');
	}

	function closeMenu() {
		classie.remove(menuEl, 'menu--open');
	}
*/

	// simulate grid content loading
	var gridWrapper = document.querySelector('.content');

	function loadDummyData(ev, itemName) {
		ev.preventDefault();

		closeMenu();
		gridWrapper.innerHTML = '';
		classie.add(gridWrapper, 'content--loading');
		setTimeout(function() {
			classie.remove(gridWrapper, 'content--loading');
			gridWrapper.innerHTML = '<ul class="products">' + dummyData[itemName] + '<ul>';
		}, 700);
	}

	///// MENU /////

	$('ul.nav__main li a span').each(function () {
		if ($(this).text() == $('main').attr('data-menu-parent')) {
			$(this).addClass('menu__link--current');
			$(this).parent().parent().children('ul.nav__child').show();
		}
	});

	$('ul.nav__child li a').each(function () {
		if ($(this).text().replace(/\s\s+/g, ' ') == $('main').attr('data-menu-child')) {
			$(this).addClass('menu__sublink--current');
		}
	});
	$('.toggle-menu').click(function() {
		$('header').toggleClass('active');
	});

	///// HOMESLIDER /////

	if($('.homeslider-wrapper').length) {

	// 	if(window.matchMedia("(min-width: 801px)").matches) {
	// 		var scene1 = document.getElementById('scene1');
	// 		var parallaxInstance = new Parallax(scene1);

	// 		var scene2 = document.getElementById('scene2');
	// 		var parallaxInstance = new Parallax(scene2);

	// 		var scene3 = document.getElementById('scene3');
	// 		var parallaxInstance = new Parallax(scene3);
	// 	}
		
		var count = 0;

		$('.homeslider-item').each(function() {
			count++;
			$('.homeslider-nav').append("<div class='homeslider-btn' id='item-" + count + "'>0" + count + "</div>");
		});

		$('.homeslider-btn#item-1').addClass('active');

		$('.homeslider-btn').click(function() {
			var e = $(this).attr('id');
			console.log(e);

			$('.homeslider-item.active').removeClass('active');
			$('.homeslider-btn.active').removeClass('active');

			$('.homeslider-item.' + e).addClass('active');
			$(this).addClass('active');
		});
	}

	var icons = {
      header: "iconAccordion",
      activeHeader: "iconAccordion"
    };

    $( "#accordion" ).accordion({
      icons: icons,
      header: "div.head",
    });

    $( "#toggle" ).button().on( "click", function() {
      if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
        $( "#accordion" ).accordion( "option", "icons", null );
      } else {
        $( "#accordion" ).accordion( "option", "icons", icons );
      }
    });

    ///// SLIDER /////

    $('.slider-item .prev').click(function() {
    	var e = $(this).closest('.slider-item');
    	var prev = e.prev('.slider-item');
    	if(prev.length) {
    		e.removeClass('active');
    		prev.addClass('active');
    	}
    });

    $('.slider-item .next, .slider-item .bottom').click(function() {
    	var e = $(this).closest('.slider-item');
    	var next = e.next('.slider-item');
    	if(next.length) {
    		e.removeClass('active');
    		next.addClass('active');
    	}
    });

    ///// TOOTLTIP /////

    $('[data-toggle="tooltip"]').tooltip();

    ///// SCROLLTOP /////

    $('.scrolltop').click(function() {
    	$('html,body').animate({ scrollTop: 0 }, 800);
    });

});