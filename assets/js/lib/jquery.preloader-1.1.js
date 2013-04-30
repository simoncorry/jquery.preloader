/*
 *
 * NAME         : Moomba Preloader
 * INSTRUCTIONS : http://labs.simoncorry.com/plugins/preloader
 * GITHUB REPO  : https://github.com/simoncorry/jquery.preloader
 * AUTHORED BY  : Simon Corry, http://simoncorry.com
 * VERSION      : 1.1
 * UPDATED      : October 29th, 2012
 *
 * Moomba Preloader is a plugin for jQuery. Please feel free to email
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
 *
 * Version 1.1 (October 29th, 2012)
 * - Various bug fixes.
 *
 * Version 1.1 (April 30th, 2013)
 * - Fixed bug that prevented content being hidden on ready.  
 *
*/

(function($){

  // Plugin Methods
  var methods = {
    
    // Settings Method
    settings : function() {      
      var settings = {             
        'type'      : 1,                  /* Rectangle(1), Circle(2) */
        'box_color' : 'rgb(254,254,254)', /* Outer shell         - CSS color values */
        'bar_color' : 'rgb(204,102,51)' , /* Animated properties - CSS color values */            
      };
    },
  
    // Initialise Method
    init : function(options) {  
      var o       = options;
      var body    = $('body');
      var wrapper = '<div id="wrapper" />';
      var target  = 'typeTarget'; 
      
      // Plugin
      return this.each(function() {
  
        // Rectangle
        function typeRectangle() {
          body
            .css('display','block')
            .wrapInner(wrapper)
            .prepend('<div id="typeRectangle" class="'+target+'"> \ <div class="bar"></div> \ </div>');
          $('#typeRectangle')
            .css('background-color', o.box_color)
            .css('border-color', o.box_color);
          $('#typeRectangle > .bar')
            .css('background-color', o.bar_color);
        };
        
        // Circle
        function typeCircle() {
          body
            .css('display','block')
            .wrapInner(wrapper)
            .prepend('<div id="typeRectangle" class="'+target+'"> \ <div class="bar"></div> \ </div>');
          $('#typeRectangle')
            .css('background-color', o.box_color)
            .css('border-color', o.box_color);
          $('#typeRectangle > .bar')
            .css('background-color', o.bar_color);
        };
        
        // Determine 'type'
        if(o.type == 1) {typeRectangle();}
        else if(o.type == 2) {typeCircle();}
        else {typeRectangle();}
        
        // Initialise
        onload = function() {
          setTimeout(function() {       
            $('.typeTarget').addClass('topinvisible'),
            $('.typeTarget .bar').addClass('invisible'),
            $('#wrapper').addClass('show');
          },1000);
        }    
    
      });  
    }
  }; 
  
  // Call Plugin Methods 
  $.fn.moombaPreloader = function(method) {       
    if (methods[method]) {
      return methods[method].apply(this,Array.prototype.slice.call(arguments,1));        
    } else if (typeof method === 'object' || ! method) {
      return methods.init.apply(this,arguments);
    } else {
      $.error('Method ' + method + ' does not exist on jQuery.load');
    } 
  }
  
})(jQuery);    