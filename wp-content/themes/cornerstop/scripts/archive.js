/**
 *  @file       archive.js
 *  @author     Jeremy Ball <jerball [at] gmail.com>
 **/

/**
 * @module menu
 */
    define(function(require){ 
         var  $ = require("jquery"), 
              _ = require("underscore"),
              customScroll = require("jquery.mCustomScrollbar.concat.min"),
              exports = { 
                   initialize: function(){ 
                    var archivesTopPosition = (function(){
                          var bottomMainNav = $('#left_nav').position().top+$('#left_nav').outerHeight(true);                            
                          return bottomMainNav + 20;
                        })();

                    $(".article_content_container").mCustomScrollbar({
                      autoDraggerLength: false,
                      theme: "dark"
                    });

                    $("#blogArchives").css("top",archivesTopPosition);
                    $("#blogArchives").show();


                    $("a.moretag").fancybox({
                      autoSize: false,
                      height: "98%",
                      width: "900"
                    });

                   }
              } 
          
         return { 
              initialize: exports.initialize 
         }; 
    
    }); 
    
