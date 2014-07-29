/**
 *  @file       subMenus.js
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

                    $(".scrollToSubPage").click(function(e){
  
                      $(".scrollToSubPage").removeClass("salmon");
                      $(e.target).addClass("salmon");

                      if (!$(".article_content_wrapper").is(":visible")) {

                        $(".article_content_wrapper").slideDown(function(){

                          $(".article_content_container").mCustomScrollbar("update");
                          $(".article_content_container").mCustomScrollbar("scrollTo", $(e.target).attr("href"));

                        });

                      }
                      else {
                        $(".article_content_container").mCustomScrollbar("scrollTo", $(e.target).attr("href"));
                      }

                    });

                    showScrollableContent = function() {

                        $(".article_content_wrapper").slideDown();

                    }

                    if ($("#subPageNav").length) {
                      $(".article_content_container").mCustomScrollbar({
                        autoDraggerLength: false,
                        theme: "dark"
                      });
                    }

                    $(".closeSubNav").click(function(){
                      $(".scrollToSubPage").removeClass("salmon");
                      $(".article_content_wrapper").slideUp();
                      window.location.hash = "";
                    });

                    if(window.location.hash.length > 0) {
                      $(".scrollToSubPage[href='" + window.location.hash + "']").trigger("click");
                    }

                    if ($("#mainPageContent").length) {
                      showScrollableContent();
                      $(".article_content_container").mCustomScrollbar({
                        autoDraggerLength: false,
                        theme: "dark"
                      });
                      
                    }

                  }
              } 
          
         return { 
              initialize: exports.initialize 
         }; 
    
    }); 
    
