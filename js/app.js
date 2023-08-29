// konrad - 6/1 temporary commented out shipping elements modifications

const $ = jQuery
	var clcked_alread = localStorage.getItem('clcked_alread')
	if(clcked_alread == 'yes'){
		$(".elementor-element-502cb03").hide();
	}
$(document).ready(function(){
// 	    $(window).on('elementor/frontend/init', function () {
//         // wait for elementor pro to load
//         elementorFrontend.on('components:init', function () {
// 		   const imageCarousel = jQuery ( '.blog  .eael-post-grid' ),
// 		   swiperInstance = imageCarousel.data( 'swiper' );
// 		   swiperInstance.params.observer = true;
// 		   swiperInstance.params.observeParents = true;
// 		   swiperInstance.update();
// 		})
			
// 		})
	
	var _URL = window.URL || window.webkitURL;
	$("#upload_b").change(function(e) {
		var image, file;
		if ((file = this.files[0])) {
			image = new Image();
			image.onload = function() {
					src = this.src;
			$('#artwork-img-prev').html('<img src="'+ src +'"></div>');
					e.preventDefault();
				}
			};
			image.src = _URL.createObjectURL(file);
		console.log(image);
	});
// 	$('<span class="btn-hoiver-bg"></span>').insertBefore('.elementor-button-link span.elementor-button-text')
	$('.all-images-123').hide()
//     $('[data-showme]').on('click', function(e){
// 		e.preventDefault();
//         var showme = $(this).attr('data-showme')
// 		$('[data-showme]').removeClass('active-box')
//         $(this).addClass('active-box')
        
//         $('#' + showme).show()
//     })
	$('.twentytwenty-before-label').attr('data-content', 'DTLA')
	$('.twentytwenty-after-label').attr('data-content', 'Competitors')
	
	var $temp = $("<input>");
	var $url = $(location).attr('href');
		
	$('.clipboard').on('click', function(e) {
		e.preventDefault();
	  $("body").append($temp);
	  $temp.val($url).select();
	  document.execCommand("copy");
	  $temp.remove();
	  $(".elementor-216 .elementor-element.elementor-element-da9fed3 .elementor-button .elementor-button-text").text("Link copied!");
	})
	$('.address-field-form').wrapAll('<div class="adress-main-box"></div>');
	$('.address-field-form-2').wrapAll('<div class="adress-main-box"></div>');
	$('.company-field-form').wrapAll('<div class="company-field-box"></div>');
	$('.company-field-form-2').wrapAll('<div class="company-field-box"></div>');
	//$('<h2 class="">Shipping address  </h2>').insertBefore('h3#ship-to-different-address')
	$('label.e-coupon-anchor-description').text('Coupon / Gift Card');
	$('.elementor-10 .elementor-element.elementor-element-639ae99 .e-coupon-box').insertBefore('.elementor-10 .elementor-element.elementor-element-639ae99 .e-checkout__order_review');
	$('.elementor-widget-woocommerce-checkout-page .woocommerce-checkout #payment .payment_methods').insertAfter('.woocommerce-shipping-fields');
	$('<h3>Payment Method</h3>').insertBefore('.wc_payment_methods.payment_methods.methods');
	//$('.woocommerce ul#shipping_method').insertBefore('div#customer_details')
	//$('<h2 class="">Delivery Options</h2>').insertBefore('.woocommerce ul#shipping_method')
	$('.elementor-element-4e7c51c').insertAfter('.elementor-element-b4290bb .elementor-loop-container.elementor-grid');
	$('.elementor-2937 .elementor-element.elementor-element-5d981a1 .elementor-pagination .page-numbers.prev, .elementor-2937 .elementor-element.elementor-element-5d981a1 .elementor-pagination .page-numbers.next, .prod-archive-grid .woocommerce-pagination .page-numbers.prev, .prod-archive-grid .woocommerce-pagination .page-numbers.next').html('<svg xmlns="http://www.w3.org/2000/svg" width="6" height="12" viewBox="0 0 6 12" fill="none"><path d="M5.5 11L0.5 6L5.5 1" stroke="#6B7280" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>');
// 	jQuery('.prod-feat-sec').insertBefore('.single-product .related.products')
// 	$('.sorting-dropdown-box .elementor-widget-wrap').html('<form class="woocommerce-ordering" method="get"><select name="orderby" class="orderby" aria-label="Shop order"><option value="menu_order" selected="selected">Default sorting</option><option value="popularity">Sort by popularity</option><option value="rating">Sort by average rating</option><option value="date">Sort by latest</option><option value="price">Sort by price: low to high</option><option value="price-desc">Sort by price: high to low</option></select><input type="hidden" name="paged" value="1"></form>');
	$('.archive-title-head-67 h2').each(function(){
    $(this).html($(this).html().split("Category:").join(""));
		
});
$('.archive-title-head-67 h2').each(function(){
    $(this).html($(this).html().split("Archives:").join(""));
});
	$('.prod-archive-grid p.woocommerce-result-count').insertAfter('.archive-title-head-67');
	$('.prod-archive-grid .wpc-custom-selected-terms').insertBefore('.wpc-filters-scroll-container .wpc-filters-widget-wrapper .wpc-filters-section-3342')
// 	localStorage.removeItem('clcked_alread')
	$(".close-not-pop svg").click(function(){
		localStorage.setItem('clcked_alread', 'yes');
	  $(".elementor-element-502cb03").hide();
	});
	$(document).on('click','.elementor-element-4f6aff9 .elementor-button-link', function(event){
		elementorProFrontend.modules.popup.closePopup( {}, event);
	});
	$(document).on('click','.elementor-element-da205cc .elementor-button-link', function(event){
		elementorProFrontend.modules.popup.closePopup( {}, event);
	});
// 	$('.elementor-button').on('mouseover', function() {
// 		var color = $( this ).css( "color" );
// 		$(this).append('<span class="btn-hoiver-bg"></span>');
//  	 	console.log(color)
// 		$('.btn-hoiver-bg').css('background-color', color)
// 	})
// 		$('.elementor-button').on('mouseleave', function() {
// 		$('.btn-hoiver-bg').remove()
// 	})
$( document ).on('submit_success', function(event, response){ 
if (event.target.id == "request_callback_form"){ 
	$('.elementor-element-da205cc .elementor-button-text').text('Okay')
 } 
if (event.target.id == "order_blank_samples"){ 
	$('.cncle-btn-cs .elementor-button-text').text('Okay')
 } 
	if (event.target.id == "compare_decoration_methods"){ 
	$('.cncle-btn-cs .elementor-button-text').text('Okay')
 } 
});
	$('<p class="cs-wc-termsservice">By clicking the button, you agree to our Terms of Service and Terms of sales.</p>').insertAfter('.e-checkout__order_review-2')
	
	/* kg not needed 
	$("input#ship-to-different-address-checkbox").click(function() {
    if($(this).is(":checked")) {

         $(".woocommerce-billing-fields").hide(200);
    } else {
         $(".woocommerce-billing-fields").show(300);
    }
});
*/
	
	
/*
	$('.woocommerce ul#shipping_method li.shipping__list_item').each(function() {
		$(this).click(function(){
			$('.woocommerce ul#shipping_method li.shipping__list_item').removeClass('flatship-checked')
			$('.woocommerce ul#shipping_method li.shipping__list_item input').attr('checked', false);
			$(this).addClass('flatship-checked');
			$(this).find('input').attr('checked', true);
		}) 
	})
	*/

	$('.sub-menu-screen .elementor-nav-menu--main.elementor-nav-menu__container li:nth-child(1) a').addClass('elementor-items-active')
	
$('.sub-menu-screen .elementor-nav-menu--main.elementor-nav-menu__container li a').click(function(e) {
	$('.sub-menu-screen .elementor-nav-menu--main.elementor-nav-menu__container li a').removeClass('elementor-items-active');
			$(this).addClass('elementor-items-active');
});
	$('.woocommerce div.product form.cart table#table_d tr:nth-child(1) td:nth-child(2) select').change(function () {
    if ($(this).val() == 'Screen Print') {
        $('.woocommerce div.product form.cart table thead tr td:nth-child(3)').css("font-size", "12px");
    }
    else {
	 $('.woocommerce div.product form.cart table thead tr td:nth-child(3)').css("font-size", "0px");
    }
});
var bg =   $(".elementor-element-bce1de3 .elementor-background-overlay").css('background-image');
if ( typeof bg !== 'undefined' ) { // kg correction
	bg = bg.replace('url(','').replace(')','').replace(/\"/gi, "");
}
	
$('.hme-tabmain-box .elementor-widget-image-box').mouseenter(function () {
	$('.cursor').addClass('active-hvr')
    var rhomboidImg = $(this).data('bgimg');
	if(rhomboidImg) {
	    $('.elementor-element-bce1de3 .elementor-background-overlay').css('background', 'url(' + rhomboidImg + ') center center / cover no-repeat');
	  }
 
});
$('.hme-tabmain-box .elementor-widget-image-box').mouseleave(function () {
	$('.cursor').removeClass('active-hvr')
	var rhomboidImg = $(this).data('bgimg');
	if(rhomboidImg) {
    	$('.elementor-element-bce1de3 .elementor-background-overlay').css('background', 'url(' + bg + ') center center / cover no-repeat');
	}
});
	/* tabs - double icons... ? kg */
	/*
	$('.single-product div.product .woocommerce-tabs ul.tabs li:nth-child(1) a').prepend(' <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none"><path d="M5.83333 18.8537V13.8537H2.5V10.5203L9.16667 7.56201V7.02035C8.68056 6.85368 8.28111 6.5584 7.96833 6.13451C7.65611 5.71118 7.5 5.22868 7.5 4.68701C7.5 3.97868 7.73972 3.38479 8.21917 2.90535C8.69806 2.42646 9.29167 2.18701 10 2.18701C10.6944 2.18701 11.2847 2.43007 11.7708 2.91618C12.2569 3.40229 12.5 3.99257 12.5 4.68701H10.8333C10.8333 4.4509 10.7536 4.25285 10.5942 4.09285C10.4342 3.9334 10.2361 3.85368 10 3.85368C9.76389 3.85368 9.56611 3.9334 9.40667 4.09285C9.24667 4.25285 9.16667 4.4509 9.16667 4.68701C9.16667 4.92312 9.24667 5.12118 9.40667 5.28118C9.56611 5.44062 9.76389 5.52035 10 5.52035H10.8333V7.56201L17.5 10.5203V13.8537H14.1667V18.8537H5.83333ZM7.5 13.0203H12.5H7.5ZM4.16667 12.187H5.83333V11.3537H14.1667V12.187H15.8333V11.6037L10 9.02035L4.16667 11.6037V12.187ZM7.5 17.187H12.5V13.0203H7.5V17.187Z" fill="#9CA3AF"/></svg>');
	$('.single-product div.product .woocommerce-tabs ul.tabs li:nth-child(2) a').prepend(' <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none"><path d="M5.0026 17.1864C4.30816 17.1864 3.71788 16.9433 3.23177 16.4572C2.74566 15.9711 2.5026 15.3808 2.5026 14.6864C2.04427 14.6864 1.65205 14.5233 1.32594 14.1972C0.999271 13.8705 0.835938 13.478 0.835938 13.0197V5.51969C0.835938 5.06136 0.999271 4.66914 1.32594 4.34303C1.65205 4.01636 2.04427 3.85303 2.5026 3.85303H12.5026C12.9609 3.85303 13.3534 4.01636 13.6801 4.34303C14.0062 4.66914 14.1693 5.06136 14.1693 5.51969V7.18636H16.2526C16.3915 7.18636 16.5165 7.21414 16.6276 7.26969C16.7387 7.32525 16.8359 7.40858 16.9193 7.51969L19.0026 10.2905C19.0582 10.36 19.0998 10.4364 19.1276 10.5197C19.1554 10.603 19.1693 10.6933 19.1693 10.7905V13.853C19.1693 14.0891 19.0893 14.2869 18.9293 14.4464C18.7698 14.6064 18.5721 14.6864 18.3359 14.6864H17.5026C17.5026 15.3808 17.2596 15.9711 16.7734 16.4572C16.2873 16.9433 15.697 17.1864 15.0026 17.1864C14.3082 17.1864 13.7179 16.9433 13.2318 16.4572C12.7457 15.9711 12.5026 15.3808 12.5026 14.6864H7.5026C7.5026 15.3808 7.25955 15.9711 6.77344 16.4572C6.28733 16.9433 5.69705 17.1864 5.0026 17.1864ZM5.0026 15.5197C5.23872 15.5197 5.43677 15.4397 5.59677 15.2797C5.75622 15.1202 5.83594 14.9225 5.83594 14.6864C5.83594 14.4502 5.75622 14.2525 5.59677 14.093C5.43677 13.933 5.23872 13.853 5.0026 13.853C4.76649 13.853 4.56844 13.933 4.40844 14.093C4.24899 14.2525 4.16927 14.4502 4.16927 14.6864C4.16927 14.9225 4.24899 15.1202 4.40844 15.2797C4.56844 15.4397 4.76649 15.5197 5.0026 15.5197ZM2.5026 5.51969V13.0197H3.16927C3.40538 12.7697 3.67622 12.5683 3.98177 12.4155C4.28733 12.2627 4.6276 12.1864 5.0026 12.1864C5.3776 12.1864 5.71788 12.2627 6.02344 12.4155C6.32899 12.5683 6.59983 12.7697 6.83594 13.0197H12.5026V5.51969H2.5026ZM15.0026 15.5197C15.2387 15.5197 15.4365 15.4397 15.5959 15.2797C15.7559 15.1202 15.8359 14.9225 15.8359 14.6864C15.8359 14.4502 15.7559 14.2525 15.5959 14.093C15.4365 13.933 15.2387 13.853 15.0026 13.853C14.7665 13.853 14.5687 13.933 14.4093 14.093C14.2493 14.2525 14.1693 14.4502 14.1693 14.6864C14.1693 14.9225 14.2493 15.1202 14.4093 15.2797C14.5687 15.4397 14.7665 15.5197 15.0026 15.5197ZM14.1693 11.353H17.7109L15.8359 8.85303H14.1693V11.353Z" fill="#9CA3AF"/></svg>');
		$('.single-product div.product .woocommerce-tabs ul.tabs li:nth-child(3) a').prepend(' <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none"> <path d="M9.16927 16.8114L5.0026 14.4155C4.73872 14.2627 4.53399 14.058 4.38844 13.8014C4.24233 13.5441 4.16927 13.2628 4.16927 12.9572V8.18636C4.16927 7.88081 4.24233 7.59942 4.38844 7.34219C4.53399 7.08553 4.73872 6.88081 5.0026 6.72803L9.16927 4.33219C9.43316 4.17942 9.71094 4.10303 10.0026 4.10303C10.2943 4.10303 10.572 4.17942 10.8359 4.33219L15.0026 6.72803C15.2665 6.88081 15.4715 7.08553 15.6176 7.34219C15.7632 7.59942 15.8359 7.88081 15.8359 8.18636V12.9572C15.8359 13.2628 15.7632 13.5441 15.6176 13.8014C15.4715 14.058 15.2665 14.2627 15.0026 14.4155L10.8359 16.8114C10.572 16.9641 10.2943 17.0405 10.0026 17.0405C9.71094 17.0405 9.43316 16.9641 9.16927 16.8114ZM9.16927 14.8947V11.0614L5.83594 9.14469V12.978L9.16927 14.8947ZM10.8359 14.8947L14.1693 12.978V9.14469L10.8359 11.0614V14.8947ZM0.835938 5.51969V3.85303C0.835938 3.15858 1.07899 2.56831 1.5651 2.08219C2.05122 1.59608 2.64149 1.35303 3.33594 1.35303H5.0026V3.01969H3.33594C3.09983 3.01969 2.90205 3.09942 2.7426 3.25886C2.5826 3.41886 2.5026 3.61692 2.5026 3.85303V5.51969H0.835938ZM3.33594 19.6864C2.64149 19.6864 2.05122 19.4433 1.5651 18.9572C1.07899 18.4711 0.835938 17.8808 0.835938 17.1864V15.5197H2.5026V17.1864C2.5026 17.4225 2.5826 17.6203 2.7426 17.7797C2.90205 17.9397 3.09983 18.0197 3.33594 18.0197H5.0026V19.6864H3.33594ZM15.0026 19.6864V18.0197H16.6693C16.9054 18.0197 17.1032 17.9397 17.2626 17.7797C17.4226 17.6203 17.5026 17.4225 17.5026 17.1864V15.5197H19.1693V17.1864C19.1693 17.8808 18.9262 18.4711 18.4401 18.9572C17.954 19.4433 17.3637 19.6864 16.6693 19.6864H15.0026ZM17.5026 5.51969V3.85303C17.5026 3.61692 17.4226 3.41886 17.2626 3.25886C17.1032 3.09942 16.9054 3.01969 16.6693 3.01969H15.0026V1.35303H16.6693C17.3637 1.35303 17.954 1.59608 18.4401 2.08219C18.9262 2.56831 19.1693 3.15858 19.1693 3.85303V5.51969H17.5026ZM10.0026 9.60303L13.3359 7.68636L10.0026 5.76969L6.66927 7.68636L10.0026 9.60303Z" fill="#9CA3AF"/> </svg>');
	
	*/
})
$('.bulk_pricing-modal-toggle').on('click', function(e) {
  e.preventDefault();
  $('.bulk_pricing-modal').toggleClass('is-visible');
});
	$('.woocommerce-checkout .woocommerce-privacy-policy-text p').text('By clicking the button, you agree to our Terms of Service and Terms of sales.')
	$('.woocommerce-terms-and-conditions-wrapper').insertAfter('.woocommerce #payment #place_order')


const slider = document.querySelector('.wc-products-product');
let isDown = false;
let startX;
let scrollLeft;
if(slider){
slider.addEventListener('mousedown', (e) => {
  isDown = true;
  slider.classList.add('active');
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});
slider.addEventListener('mouseleave', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mouseup', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mousemove', (e) => {
  if(!isDown) return;
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 3; //scroll-fast
  slider.scrollLeft = scrollLeft - walk;
  console.log(walk);
});
}
//  Animations
const cursor = document.querySelector('.cursor');
const cursorInner = document.querySelector('.cursor-move-inner');
const cursorOuter = document.querySelector('.cursor-move-outer');
const cursorMedias = document.querySelectorAll(".cursor__media");
const navLinks = document.querySelectorAll(".nav__link");
const dataShowme = document.querySelectorAll("[data-showme]");
const triggers = document.querySelectorAll('a');

let mouseX = 0;
let mouseY = 0;
let mouseA = 0;

let innerX = 0;
let innerY = 0;

let outerX = 0;
let outerY = 0;

let loop = null;

document.addEventListener('mousemove', (e) => {
  mouseX = e.clientX;
  mouseY = e.clientY;
  
  if (!loop) {
    loop = window.requestAnimationFrame(render);
  }
});
triggers.forEach(trigger => {
 	trigger.addEventListener('mouseenter', () => {
  	 //cursor.classList.add('cursor--hover');  // kg 
 	});

	trigger.addEventListener('mouseleave', () => {
		//cursor.classList.remove('cursor--hover');  // kg 
	});
});
if(navLinks) {
navLinks.forEach((navLink, i) => {
 	navLink.addEventListener('mouseenter', () => {
  	 cursor.classList.add('image-hover-12');
		let dataCursorImg = navLink.getAttribute('data-cursorimg');
		cursorOuter.style.backgroundImage = 'url('+dataCursorImg+')';
// 		cursorOuter.style.backgroundImage = 'url(https://images.unsplash.com/photo-1646303746488-3927e8bf81a7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)';

		console.log(dataCursorImg)
 	});

	navLink.addEventListener('mouseleave', () => {
		cursor.classList.remove('image-hover-12');
		cursorOuter.style.backgroundImage = "";
	});
});
}
if(navLinks) {
// image box cursor
dataShowme.forEach((box, i) => {
 	box.addEventListener('mouseenter', () => {
  	 cursor.classList.add('imagebox-hover-12');
		let dataCursorImg = navLink.getAttribute('data-cursorimg');
		cursorOuter.style.backgroundImage = 'url('+dataCursorImg+')';
 	});

	box.addEventListener('mouseleave', () => {
		cursor.classList.remove('imagebox-hover-12');
		cursorOuter.style.backgroundImage = "";
	});
});
}
function render() {

  loop = null;
  
  innerX = lerp(innerX, mouseX, 0.15);
  innerY = lerp(innerY, mouseY, 0.15);
  
  outerX = lerp(outerX, mouseX, 0.13);
  outerY = lerp(outerY, mouseY, 0.13);
  
  const angle = Math.atan2(mouseY - outerY, mouseX - outerX) * 180 / Math.PI;
  
  const normalX = Math.min(Math.floor((Math.abs(mouseX - outerX) / outerX) * 1000) / 1000, 1);
  const normalY = Math.min(Math.floor((Math.abs(mouseY - outerY) / outerY) * 1000) / 1000, 1);
  const normal  = normalX + normalY * .5;
  const skwish  = normal * .7;
   // kg 
  cursorInner.style.transform = `translate3d(${innerX}px, ${innerY}px, 0)`;
  cursorOuter.style.transform = `translate3d(${outerX}px, ${outerY}px, 0) rotate(${angle}deg) scale(${1 + skwish}, ${1 - skwish})`;
 
  
  // Stop loop if interpolation is done.
  if (normal !== 0) {
    loop = window.requestAnimationFrame(render);
  }

}

function lerp(s, e, t) {
  return (1 - t) * s + t * e;
}



// Button Hover
gsap.registerPlugin(ScrollTrigger);

let revealContainers = document.querySelectorAll(".reveal-old");
let revealLeftContainers = document.querySelectorAll(".reveal-left-old");


revealContainers.forEach((container) => {
  let image = container.querySelector("img");
  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: container,
      toggleActions: "restart none none restart"
    }
  });

  tl.set(container, { autoAlpha: 1 });
  tl.from(container, 1.5, {
    xPercent: 100,
    ease: Power2.out
  });
  tl.from(image, 1.5, {
    xPercent: -100,
    scale: 1.3,
    delay: -1.5,
    ease: Power2.out
  });
});


revealLeftContainers.forEach((container) => {
  let image = container.querySelector("img");
  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: container,
      toggleActions: "restart none none restart"
    }
  });

  tl.set(container, { autoAlpha: 1 });
  tl.from(container, 1.5, {
    xPercent: -100,
    ease: Power2.out
  });
  tl.from(image, 1.5, {
    xPercent: 100,
    scale: 1.3,
    delay: -1.5,
    ease: Power2.out
  });
});




// jQuery(".filter-tab-posts .swiper-slide").each(function(){
// 	var entryWrapper = jQuery(this).find(".eael-entry-wrapper");
// 	var entryContent = jQuery(this).find(".eael-entry-content");
// 	var entryfooter = jQuery(this).find(".eael-entry-footer");
// 	jQuery( entryWrapper).wrap('<div class="moreInfo"></div>');
// 	jQuery(entryContent).appendTo($(this).find('.moreInfo'))
// 	jQuery(entryfooter).appendTo($(this).find('.moreInfo'))
// });