  /**
 *  @file       app.js
 *  @author     Jeremy Ball <jball [at] artfact.com>
 **/

/**
 * @module app
 */
    define(function(require){ 
         var  $ = require("jquery"), 
              _ = require("underscore"),
              backgrounds = require("backgrounds"),
              menuDisplay = require("menuPage"),
              blog = require("blog"),
              archive = require("archive"),
              subMenus = require("subMenus"),
              exports = { 
                   initialize: function(){ 

                      backgrounds.initialize();

                      (function(){
   
                        $(".showChildFlyout").click(function(e){
                          e.preventDefault();
                          
                          var self = this;

                          $(".navFlyout").hide();
                          $(this).next('.navFlyout').toggle("slide",500, function(){

                            var flyoutPosition = (function(){flyoutBottom > windowHeight
   
                                  var flyoutHeight = $(self).next('.navFlyout').height(),
                                      flyoutOffset = $(self).next('.navFlyout').offset().top,
                                      windowHeight = $(window).height(),
                                      flyoutBottom = flyoutHeight + flyoutOffset,
                                      isOverflow = false,
                                      moveUp = 0;

                                      if (flyoutBottom > windowHeight) {
                                        isOverflow = true;
                                        moveUp = (flyoutBottom - windowHeight) + 60;
                                      }

                                      return {
                                        isOverflow : isOverflow,
                                        moveUp : moveUp
                                      }

                                })();

                            if (flyoutPosition.isOverflow) {
                              $(self).next('.navFlyout').animate({top: "-" + flyoutPosition.moveUp + "px"}, 300);
                            }
                          });
                          $(".mainNav a").removeClass("salmon");
                          $(this).addClass("salmon");
                        });
                        $(".navFlyout").mouseleave(function(){

                          if(!($("input.mailingListInput").is(":focus"))){
                            $(".mainNav a").removeClass("salmon");
                            $(".mainNav a.currentPage").addClass("salmon");
                            $(this).toggle("slide",500, function(){
                              $(this).css("top", 0);
                            });
                          }
                        
                        });
                      })();

                      $("#sisterRestaurants h1, #sisterRestaurants #sisterRestaurantArrow").click(function(){

                        $("#sisterRestaurantContent").animate({width: 'toggle'});

                        if ($("#sisterRestaurantContent").width() > 1) {
                          $("#sisterRestaurants #sisterRestaurantArrow").removeClass("closeArrow");
                          $("#sisterRestaurants #sisterRestaurantArrow").addClass("openArrow");
                        }
                        else {
                          $("#sisterRestaurants #sisterRestaurantArrow").removeClass("openArrow");
                          $("#sisterRestaurants #sisterRestaurantArrow").addClass("closeArrow");
                        }

                      });

                    setCenterheight = function() {
                        var windowHeight = $(window).height(),
                            footerHeight = $("#footer").height(),
                            newCenterHeight = windowHeight - footerHeight - 105,
                            article_content_height = newCenterHeight - 100;
                        
                        newCenterHeight += "px";
                        article_content_height += "px";

                        window.es_globals.maxCenterHeight = newCenterHeight;
                        
                        $("#center_content").css("height", newCenterHeight);

                        $(".article_content_container").css("height", article_content_height);

                    }

                    setCenterWidth = function() {
                        var windowWidth = $(window).width(),
                            getElementWidth = function(element){
                              var eWidth = $(element).outerWidth(),
                                  ePadding = parseInt($(element).css("margin-left")) + parseInt($(element).css("margin-right")),
                                  totalWidth = eWidth + ePadding;
                              return totalWidth;
                            },
                            leftNavWidth = getElementWidth("#left_nav"),
                            centerPadding = $("#center_content").outerWidth() - $("#center_content").width(),
                            centerMargin = parseInt($("#center_content").css("margin-left")) + parseInt($("#center_content").css("margin-right")),
                            newCenterWidth = windowWidth - centerPadding - centerMargin - 30;
                        
                        newCenterWidth += "px";
                        
                        $("#center_content").width(newCenterWidth);

                    }

                    setCenterheight();

                    if (($("#subPageNav").length) || ($("#mainPageContent").length)) {
                      subMenus.initialize();
                    }

                    if ($(".menuContent").length) {
                      menuDisplay.initialize();
                    }

                    if ($("#blog_archive").length) {
                      archive.initialize();
                    }

                    if ($(".blog").length) {
                      blog.initialize();
                    }

                    $(window).resize(function(){
                      setCenterheight();
                    });

                    $('.mailingListInput').focus(function() {

                      if ($(this).attr("name") == "your-email") {
                        if ($(this).val() == "ENTER EMAIL") {
                          $(this).val("");
                        }
                      }
                      else if ($(this).attr("name") == "re-enter-email") {
                        if ($(this).val() == "RE-ENTER EMAIL") {
                          $(this).val("");
                        }
                      }

                    });

                    $('.mailingListInput').blur( function() {

                      if ($(this).attr("name") == "your-email") {
                        if ($(this).val().length == 0) {
                          $(this).val("ENTER EMAIL");
                        }
                      }
                      else if ($(this).attr("name") == "re-enter-email") {
                        if ($(this).val().length == 0) {
                          $(this).val("RE-ENTER EMAIL");
                        }
                      }

                    });

                   }
              } 
          
         return { 
              initialize: exports.initialize 
         }; 
    
    }); 
    
