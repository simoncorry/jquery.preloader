/*
 *
 * NAME         : LOAD
 * INSTRUCTIONS : http://labs.simoncorry.com/load
 * GITHUB REPO  : 
 * AUTHORED BY  : Simon Corry, http://simoncorry.com
 * VERSION      : 1.0
 * UPDATED      : September 24th, 2012
 *
 * Load is a preloader plugin for jQuery. Please feel free to email me
 * questions or use case examples to labs@simoncorry.com.
 * 
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 * 
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

(function($){
  $.fn.extend({ 
    // Plugin Name : load
    load : function(options) {
            
      // Default Options    
      var defaults = $.extend({             
        'type'      : 1,                  /* Rectangle(1), Circle(2) */
        'box_color' : 'rgb(254,254,254)', /* Outer shell         - CSS color values */
        'bar_color' : 'rgb(204,102,51)' , /* Animated properties - CSS color values */            
      }, options);
      
      return this.each(function() {
        var o       = options;
        var body    = $('body');
        var wrapper = '<div id="wrapper"></div>';
        var target  = 'typeTarget'; 
                   
        //
        // First we write the 'load' animation div and 
        // content 'wrapper' div to the document body.
        //    
          
        // Rectangle //
        function typeRectangle() {
          body
            .wrapInner(wrapper)
            .prepend('<div id="typeRectangle" class="'+target+'"> \ <div class="bar"></div> \ </div>');
          $('#typeRectangle')
            .css('background-color', o.box_color)
            .css('border-color', o.box_color);
          $('#typeRectangle > .bar')
            .css('background-color', o.bar_color);
        };
        // Circle //
        function typeCircle() {
          body
            .wrapInner(wrapper)
            .prepend('<div id="typeRectangle" class="'+target+'"> \ <div class="bar"></div> \ </div>');
          $('#typeRectangle')
            .css('background-color', o.box_color)
            .css('border-color', o.box_color);
          $('#typeRectangle > .bar')
            .css('background-color', o.bar_color);
        };
        
        // Determine 'type' value and execute appropriate function //
        if(o.type == 1) {typeRectangle();}
        else if(o.type == 2) {typeCircle();}
        else {typeRectangle();}
        
        //
        // Once the document has loaded we hide the 
        // 'typeTarget' div and display the 'wrapper' div.
        //
        // We set a 1 sec timeout to allow at least one
        // animation cycle per load.
        //
        
        onload = function() {
          setTimeout(function() {       
            $('.typeTarget').addClass('topinvisible'),
            $('.typeTarget .bar').addClass('invisible'),
            $('#wrapper').addClass('show');
          },1000);
        }    
            
      });
    }
  });
})(jQuery);    