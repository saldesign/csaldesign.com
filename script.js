$( function() {
	$('#contact, #introContact').click(function(){
		$('#form').toggleClass('open');
	});
	if ( document.location.href.indexOf('#contactform') > -1 ) {
		$(document).scrollTop($("#contactform").offset().top);
	}
	$('a[href*="#"]:not([href="#"])').click(function() {
	  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	    var target = $(this.hash);
	    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	    if (target.length) {
	      $('html, body').animate({
	        scrollTop: target.offset().top
	      }, 1000);
	      return false;
	    }
	  }
	});
});


AOS.init({
  duration: 600,
  offset: 96,
  easing: 'ease-in-out',
});


// Analytics

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-74487279-3', 'auto');
ga('send', 'pageview');



// prefixFree

(function($, self){

if(!$ || !self) {
	return;
}

for(var i=0; i<self.properties.length; i++) {
	var property = self.properties[i],
		camelCased = StyleFix.camelCase(property),
		PrefixCamelCased = self.prefixProperty(property, true);
	
	$.cssProps[camelCased] = PrefixCamelCased;
}

})(window.jQuery, window.PrefixFree);

/**
 * Polyfill for the vw, vh, vm units
 * Requires StyleFix from -prefix-free http://leaverou.github.com/prefixfree/
 * @author Lea Verou
 */

(function() {

if(!window.StyleFix) {
	return;
}

// Feature test
var dummy = document.createElement('_').style,
	units = ['vw', 'vh', 'vmin', 'vmax'].filter(function(unit) {
		dummy.width = '';
		dummy.width = '10' + unit;
		return !dummy.width;
	});

if(!units.length) {
	return;
}

StyleFix.register(function(css) {
	var w = innerWidth, h = innerHeight;
	return css
	    // Strip out comments that include viewport units. [\w\W] matches any char including new lines; equiv to (?:.|\n).
			// More help: https://www.debuggex.com/r/SkAo6MSzOJjQ-UMK
			.replace(RegExp('\/\*(?!<)[\w\W]*?\d\s*(' + units.join('|') + ')([\w\W]*?(?!>)[\w\W])?\*\/', 'gi'), '')
			// For help with this monster regex: https://www.debuggex.com/r/IJ5stKswd3W_Au-v
			.replace(
					RegExp('(?:\/\*<)?(-?\d*\.?\d+)\s*(' + units.join('|') + ')\b(?:>\*\/-?\d*\.?\d+px)?', 'gi'),
					function (match, num, unit) {
						var factor;
						switch (unit) {
							case 'vw':
								factor = w;
								break;
							case 'vh':
								factor = h;
								break;
							case 'vmin':
								factor = Math.min(w, h);
								break;
							case 'vmax':
								factor = Math.max(w, h);
								break;
						}
						return '/*<' + num + unit + '>*/' + (num * factor / 100) + 'px';
					}
	);
});

var styleFixResizeTimer;

var resizeListener = function () {
	// 100ms interruptable delay because the computation is expensive
	if (typeof styleFixResizeTimer !== 'undefined') clearTimeout(styleFixResizeTimer);
	styleFixResizeTimer = setTimeout(function () {
		StyleFix.process();
	}, 100);
};

window.addEventListener('resize', resizeListener, false);
window.addEventListener('orientationchange', resizeListener, false);

})();