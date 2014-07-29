/**
 *  @file       app.js
 *  @author     Jeremy Ball <jerball [at] gmail.com>
 **/

/**
 * @module menu
 */
    define(function(require){ 
         var  $ = require("jquery"), 
              _ = require("underscore"),
              exports = { 
                   initialize: function(){ 

                      var setMenuHeight = function() {

                           // var height = $(window).height(),
                           //      offset = Math.round($(".menuContent").offset().top),
                           //      menuHeight = 0;

                           //  height = height - offset - 60;

                           //  height = height.toString() + "px";

                            $(".menuContent").css("height", es_globals.maxCenterHeight);

                            $(".scrollable_nav").css("height", es_globals.maxCenterHeight);

                          },
                          showDots = function() {
                            $(".menu_item_row").each(function(){
                              
                              var thisWidth = $(this).width(),
                                  leftColWidth = $(this).children("div:first-child").width();
                                  rightColWidth = $(this).children("div:last-child").width();
                                  middleColWidth = Math.round(thisWidth - leftColWidth - rightColWidth).toString() + "px";

                              $(this).children(".menu_item_dots").width(middleColWidth);

                            });
                          },
                          breakMenuNames = function() {
                            $(".menuItemName").each(function(){

                                if($(this).width() > $(this).parent(".menuItemNameContainer").width()) {
                                
                                    var myText = $(this).text().split(/\s+/),
                                        myNewTextAry = [],
                                        myNewText = "",
                                        currentRow = this,
                                        currentContainer = $(this).parent(".menuItemNameContainer");
                                    
                                    for (var i = 0, len = myText.length; i < len; i++) {
                                        myNewTextAry.push("<span class='wordWrapper'>" + myText[i] + "</span>");
                                    }
                                
                                    myNewText = myNewTextAry.join(" ");
                                    
                                    $(this).html(myNewText);
                                
                                    $(this).children(".wordWrapper").each(function(){

                                        var wordLeft = Math.round($(this).position().left),
                                            wordWidth = Math.round($(this).width()),
                                            wordRight = wordLeft + wordWidth;
                                            
                                        if(wordRight > $(currentContainer).width()) {
                                            $("</br>").insertBefore($(this));
                                        }

                                    
                                    });

                                }

                            });
                          }

                      showDots();

                      setMenuHeight();

                      $(".scrollToSubPage").click(function(e){
                        
                        e.preventDefault();

                        $(".article_content_wrapper").slideDown(function(){
                          breakMenuNames();
                        });

                        var target = $(e.target).attr("href"),
                            relativeY = $("#content").offset().top - $(target).offset().top;

                        document.getElementById("content").scrollTop = relativeY;

                      });

                      $(window).resize(setMenuHeight);

                   }
              } 
          
         return { 
              initialize: exports.initialize 
         }; 
    
    }); 
    
