$(document).ready(function(){
	
	$(".movie-image").hover(function(){
		$(this).find(".play").show();

	},
	function()
	{
		$(this).find(".play").hide();
	});


	$(".blink").focus(function() {
            if(this.title==this.value) {
                this.value = '';
            }
        })
        .blur(function(){
            if(this.value=='') {
                this.value = this.title;                    
			}
		});
      


        $(".log_inp").focus(function(){
            $(".log_inp").css("border-bottom","1px solid white");
            $(this).css("border-bottom","1px solid yellow");
        })
        $(".log_inp").focusout(function(){
            $(".log_inp").css("border-bottom","1px solid white");
        })
        $(".reg_inp").focus(function(){
            $(".reg_inp").css("border-bottom","1px solid white");
            $(this).css("border-bottom","1px solid yellow");
        })
        $(".reg_inp").focusout(function(){
            $(".reg_inp").css("border-bottom","1px solid white");
        })

        $(".reg_route").click(function(){
            $(".reg_route").css("border-bottom","1px solid #f3f58a");
            $(".log_route").css("border-bottom","0px solid #f3f58a");
            $(".log_bar").css("display","none");
            $(".reg_bar").css("display","block");
        });
        $(".log_route").click(function(){
            $(".reg_route").css("border-bottom","0px solid #f3f58a");
            $(".log_route").css("border-bottom","1px solid #f3f58a");
            $(".reg_bar").css("display","none");
            $(".log_bar").css("display","block");
        });

    
});

    