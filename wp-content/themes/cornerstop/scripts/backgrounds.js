/**
 *  @file       app.js
 *  @author     Jeremy Ball <jerball [at] gmail.com>
 **/

/**
 * @module backgrounds
 */
    define(function(require){ 
         var  $ = require("jqueryui"), 
              _ = require("underscore"),
              caroufredsel = require("jquery.carouFredSel-6.2.1-packed"),
              tabSlideOut = require("jquery.tabSlideOut.v1.3"),
              exports = { 
                   initialize: function(){ 

                      var bgImages = es_globals.bgImages,
                          getMiddleOfPage = function() {
                            return Math.round($("#content").width() / 2);
                          },
                          middleOfPage = getMiddleOfPage(),
                          whichSide = "";

                      if (bgImages && bgImages.length > 0) {

                        var indx = 0,
                            containers = $(".bg_image_container");

                        while(indx < bgImages.length) {
                          var img = bgImages[indx],
                              target = containers.get(indx);

                          $(target).css({
                            "background-image": ['url(', img.src, ')'].join('')
                          });

                          indx++;
                        }

                      }

                      function loadBackgroundImages() {

                          $(".bg_image_container").css("width", $(window).width());
                          $(".bg_image_container").css("height", $(window).height());


                        // var wrapperWidth = $(window).width() * bgLength;

                        // $("#bg_images").css("width", wrapperWidth + "px");
                        // $("#bg_images").css("height", $(window).height() + "px");
                       
                        // $(".caroufredsel_wrapper").css("width", wrapperWidth + "px");
                        // $(".caroufredsel_wrapper").css("height", $(window).height() + "px");

                        // $(".bg_image").css("width", $(window).width() + "px");

                        $('#bg_images').carouFredSel({
                            auto: false,
                            transition: "true",
                            // responsive: "true",
                            height: "auto",
                            width: "auto",
                            scroll: {
                              duration: 500,
                              onBefore: function() {
                                $(".bg_image_container").addClass("sideShadows");
                              },
                              onAfter: function() {
                                $(".bg_image_container").removeClass("sideShadows");
                              }
                            }
                          });

                      }

                      resizeBackground = function() {

                        $(".bg_image_container").css("width", $(window).width());
                        $(".bg_image_container").css("height", $(window).height());

                        // $('#bg_images').trigger("configuration", [{"height",$(window).height()},{"width",$(window).width()}]);
                        $('#bg_images').trigger("configuration", ["height",$(window).height()]);
                        $('#bg_images').trigger("configuration", ["width",$(window).width()]);
                      }

                      bgArrows = function(e) {
                        var showArrows = function() {
                          var leftArrowSrc = es_globals.templateUrl + "/images/button-previous.png",
                              rightArrowSrc = es_globals.templateUrl + "/images/button-next.png";

                          if (e.pageX <= middleOfPage) {
                            
                            $("#background-arrow").removeClass("rightSide");
                            $("#background-arrow").addClass("leftSide");
                            $("#background-arrow img").attr("src", leftArrowSrc);

                            whichSide = "left";

                          }
                          else {

                            $("#background-arrow").removeClass("leftSide");
                            $("#background-arrow").addClass("rightSide");
                            $("#background-arrow img").attr("src", rightArrowSrc);

                            whichSide = "right";

                          }

                          $("#background-arrow").show();
                        }

                        if (($(e.target).closest(".noBGScroll").length === 0) && (es_globals.bgImages.length > 1)) {
  
                          if (!$(".article_content_wrapper").is(":visible")) {
                            showArrows();
                          }

                        }
                        else {
                            $("#background-arrow").removeClass("leftSide");
                            $("#background-arrow").removeClass("rightSide");
                            $("#background-arrow img").attr("src", "");
                            $("#background-arrow").hide();
                        }
                      }

                      $("#content").mouseover(function(e){
                        bgArrows(e);
                      });

                      $("#content").mousemove(function(e){
                        bgArrows(e);
                      });
                      
                      $(window).resize(function(){
                        resizeBackground();
                        middleOfPage = getMiddleOfPage();
                      });

                      $("#content").click(function(e){

                        var targetID = $(e.target).attr("id");

                        if ($(e.target).closest(".noBGScroll").length === 0) {

                          if (whichSide === 'left') {
                            $("#bg_images").trigger("prev");
                          }
                          else {
                            $("#bg_images").trigger("next");
                          }


                        }

                      });
                      
                      loadBackgroundImages();

                      $(".slideIn").click(function(){
                        $(this).next(".slideOut").toggle();
                      });

                   }
              } 
          
         return { 
              initialize: exports.initialize 
         }; 
    
    }); 
    
