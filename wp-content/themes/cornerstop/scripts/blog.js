/**
 *  @file       blogs.js
 *  @author     Jeremy Ball <jerball [at] gmail.com>
 **/

/**
 * @module menu
 */
    define(function(require){ 
         var  $ = require("jquery"), 
              _ = require("underscore"),
              // createScrollDots = require("jquery.createScrollDots"),
              fancybox = require("vendor/jquery.fancybox.pack"),
              customScroll = require("jquery.mCustomScrollbar.concat.min"),
              // fancybox = require("jquery.fancybox.pack.js"),
              exports = { 
                   initialize: function(){ 

                      var openBlogPopup = function(e) {
                            e.preventDefault();

                            // $(".fancybox").show();

                            $.fancybox.open($(e.target).parent().next(".fancybox"));

                          },
                          archivesTopPosition = (function(){
                            var bottomMainNav = $('#left_nav').position().top+$('#left_nav').outerHeight(true);                            
                            return bottomMainNav + 20;
                          })()

                    // $(".moretag").click(openBlogPopup);

                  $("a.moretag").fancybox({
                    autoSize: false,
                    height: "98%",
                    width: "900"
                    // scrolling: false,
                    // afterLoad: function(current, previoius) {
                    //   $(".fancybox-inner").mCustomScrollbar({
                    //     autoDraggerLength: false,
                    //     theme: "dark"
                    //   });
                    // }
                  });

                    $(".article_content_container").mCustomScrollbar({
                      autoDraggerLength: false,
                      theme: "dark"
                    });

                    $("#blogArchives").css("top",archivesTopPosition);
                    $("#blogArchives").show();

                   }
              } 
          
         return { 
              initialize: exports.initialize 
         }; 
    
    }); 
    
