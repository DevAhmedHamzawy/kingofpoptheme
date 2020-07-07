$(document).ready(function() {

        //options( 1 - ON , 0 - OFF)
        var auto_slide = 1;
            var hover_pause = 1;
        var key_slide = 1;

        //speed of auto slide(
        var auto_slide_seconds = 5000;
        /* IMPORTANT: i know the variable is called ...seconds but it's
        in milliseconds ( multiplied with 1000) '*/

        /*move the last list item before the first item. The purpose of this is
        if the user clicks to slide left he will be able to see the last item.*/
        $('#carousel_ul_side li:first').before($('#carousel_ul_side li:last'));

        //check if auto sliding is enabled
        if(auto_slide == 1){
            /*set the interval (loop) to call function slide with option 'right'
            and set the interval time to the variable we declared previously */
            var timer = setInterval('slide("bottom")', auto_slide_seconds);

            /*and change the value of our hidden field that hold info about
            the interval, setting it to the number of milliseconds we declared previously*/
            $('#hidden_auto_slide_seconds_side').val(auto_slide_seconds);
        }

        //check if hover pause is enabled
        if(hover_pause == 1){
            //when hovered over the list
            $('#carousel_ul_side').hover(function(){
                //stop the interval
                clearInterval(timer)
            },function(){
                //and when mouseout start it again
                timer = setInterval('slide("bottom")', auto_slide_seconds);
            });

        }

        //check if key sliding is enabled
        if(key_slide == 1){

            //binding keypress function
            $(document).bind('keypress', function(e) {
                //keyCode for left arrow is 37 and for right it's 39 '
                if(e.keyCode==37){
                        //initialize the slide to left function
                        slide('top');
                }else if(e.keyCode==39){
                        //initialize the slide to right function
                        slide('bottom');
                }
            });

        }

  });

//FUNCTIONS BELLOW

//slide function
function slide(where){

            //get the item width
            var item_width = $('#carousel_ul_side li').outerHeight() + 10;

            /* using a if statement and the where variable check
            we will check where the user wants to slide (left or right)*/
            if(where == 'top'){
                //...calculating the new left indent of the unordered list (ul) for left sliding
                var top_indent = parseInt($('#carousel_ul_side li').css('top')) + item_width;
            }else{
                //...calculating the new left indent of the unordered list (ul) for right sliding
                var top_indent = parseInt($('#carousel_ul_side li').css('top')) - item_width;

            }

            //make the sliding effect using jQuery's animate function... '
            $('#carousel_ul_side:not(:animated)').animate({'top' : top_indent},500,function(){

                /* when the animation finishes use the if statement again, and make an ilussion
                of infinity by changing place of last or first item*/
                if(where == 'top'){
                    //...and if it slided to left we put the last item before the first item
                    $('#carousel_ul_side li:first').before($('#carousel_ul_side li:last'));
                }else{
                    //...and if it slided to right we put the first item after the last item
                    $('#carousel_ul_side li:last').after($('#carousel_ul_side li:first'));
                }

                //...and then just get back the default left indent
                $('#carousel_ul_side').css({'top' : '-6px'});
            });

}