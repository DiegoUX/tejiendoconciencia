/**
 * Equal Heights Plugin
 * Equalize the heights of elements. Great for columns or any elements
 * that need to be the same size (floats, etc).
 *
 * Version 1.0
 * Updated 12/10/2008
 *
 * Copyright (c) 2008 Rob Glazebrook (cssnewbie.com)
 *
 * Usage: $(object).equalHeights([minHeight], [maxHeight]);
 *
 * Example 1: $(".cols").equalHeights(); Sets all columns to the same height.
 * Example 2: $(".cols").equalHeights(400); Sets all cols to at least 400px tall.
 * Example 3: $(".cols").equalHeights(100,300); Cols are at least 100 but no more
 * than 300 pixels tall. Elements with too much content will gain a scrollbar.
 *
 */

 !function(t){function e(e,i){return tallest=e?e:0,this.height("auto").each(function(){t(this).height()>tallest&&(tallest=t(this).height())}),i&&tallest>i&&(tallest=i),this.each(function(){t(this).height(tallest).css("overflow","auto")})}t.fn.equalHeights=function(i,h){var l=this;return t(window).resize(function(){e.call(l,i,h)}),e.call(l,i,h),this}}(jQuery);
 

/*
 * jQuery.appear
 * https://github.com/bas2k/jquery.appear/
 * http://code.google.com/p/jquery-appear/
 *
 * Copyright (c) 2009 Michael Hixson
 * Copyright (c) 2012 Alexander Brovikov
 * Licensed under the MIT license (http://www.opensource.org/licenses/mit-license.php)
 */
(function(e){e.fn.appear=function(t,n){var r=e.extend({data:undefined,one:true,accX:0,accY:0},n);return this.each(function(){var n=e(this);n.appeared=false;if(!t){n.trigger("appear",r.data);return}var i=e(window);var s=function(){if(!n.is(":visible")){n.appeared=false;return}var e=i.scrollLeft();var t=i.scrollTop();var s=n.offset();var o=s.left;var u=s.top;var a=r.accX;var f=r.accY;var l=n.height();var c=i.height();var h=n.width();var p=i.width();if(u+l+f>=t&&u<=t+c+f&&o+h+a>=e&&o<=e+p+a){if(!n.appeared)n.trigger("appear",r.data)}else{n.appeared=false}};var o=function(){n.appeared=true;if(r.one){i.unbind("scroll",s);var o=e.inArray(s,e.fn.appear.checks);if(o>=0)e.fn.appear.checks.splice(o,1)}t.apply(this,arguments)};if(r.one)n.one("appear",r.data,o);else n.bind("appear",r.data,o);i.scroll(s);e.fn.appear.checks.push(s);s()})};e.extend(e.fn.appear,{checks:[],timeout:null,checkAll:function(){var t=e.fn.appear.checks.length;if(t>0)while(t--)e.fn.appear.checks[t]()},run:function(){if(e.fn.appear.timeout)clearTimeout(e.fn.appear.timeout);e.fn.appear.timeout=setTimeout(e.fn.appear.checkAll,20)}});e.each(["append","prepend","after","before","attr","removeAttr","addClass","removeClass","toggleClass","remove","css","show","hide"],function(t,n){var r=e.fn[n];if(r){e.fn[n]=function(){var t=r.apply(this,arguments);e.fn.appear.run();return t}}})})(jQuery);


/* https://github.com/mhuggins/jquery-countTo
   CountTo */
!function(t){"function"==typeof define&&define.amd?define(["jquery"],t):t("object"==typeof exports?require("jquery"):jQuery)}(function(t){function e(t,e){return t.toFixed(e.decimals)}var o=function(e,i){this.$element=t(e),this.options=t.extend({},o.DEFAULTS,this.dataOptions(),i),this.init()};o.DEFAULTS={from:0,to:0,speed:1e3,refreshInterval:100,decimals:0,formatter:e,onUpdate:null,onComplete:null},o.prototype.init=function(){this.value=this.options.from,this.loops=Math.ceil(this.options.speed/this.options.refreshInterval),this.loopCount=0,this.increment=(this.options.to-this.options.from)/this.loops},o.prototype.dataOptions=function(){var t={from:this.$element.data("from"),to:this.$element.data("to"),speed:this.$element.data("speed"),refreshInterval:this.$element.data("refresh-interval"),decimals:this.$element.data("decimals")},e=Object.keys(t);for(var o in e){var i=e[o];"undefined"==typeof t[i]&&delete t[i]}return t},o.prototype.update=function(){this.value+=this.increment,this.loopCount++,this.render(),"function"==typeof this.options.onUpdate&&this.options.onUpdate.call(this.$element,this.value),this.loopCount>=this.loops&&(clearInterval(this.interval),this.value=this.options.to,"function"==typeof this.options.onComplete&&this.options.onComplete.call(this.$element,this.value))},o.prototype.render=function(){var t=this.options.formatter.call(this.$element,this.value,this.options);this.$element.text(t)},o.prototype.restart=function(){this.stop(),this.init(),this.start()},o.prototype.start=function(){this.stop(),this.render(),this.interval=setInterval(this.update.bind(this),this.options.refreshInterval)},o.prototype.stop=function(){this.interval&&clearInterval(this.interval)},o.prototype.toggle=function(){this.interval?this.stop():this.start()},t.fn.countTo=function(e){return this.each(function(){var i=t(this),n=i.data("countTo"),s=!n||"object"==typeof e,r="object"==typeof e?e:{},a="string"==typeof e?e:"start";s&&(n&&n.stop(),i.data("countTo",n=new o(this,r))),n[a].call(n)})}});


// ********************************** //

// Custom Scripts...


(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// $(window).load(function(){
		//     $('#preloader').fadeOut('slow',function(){
		//     	$(this).remove();
		//     });
		// });
		setTimeout(function(){   
		    $('#preloader').fadeOut('slow',function(){
		    	$(this).remove();
		    });
		}, 5000);

		// DOM ready, take it away
		// Logo header scroll down...
		$('.home header').removeClass("minify");
		$(window).scroll(function() {
			if ($(this).scrollTop() > '80') {  
			    $('.home header').addClass("minify");
			}
			else{
			    $('.home header').removeClass("minify");
			}
		});

		// Set equalCols...
		$(".equalCol").equalHeights();
		$(".equalBlog").equalHeights();

		// Counter...
	    $('.timer').appear(function () {
	      $(this).countTo({
			  formatter: function (value, options) {
			    value = value.toFixed(options.decimals);
			    value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
			    return value;
			  }
			});
	    });
	});
	
})(jQuery, this);
