
    $(document).ready(function(){
        $(".mark-right a").click(function(){            
            $("body").animate({scrollTop: 0}, 1000);
        });
        $.datepicker.setDefaults( $.datepicker.regional[ "ko" ] );
        $( "#check-in" ).datepicker({
            dateFormat: "yy년mm월dd일"
        });
        $( "#check-out" ).datepicker({
            dateFormat: "yy년mm월dd일"
        });

        function doitlater(){
            				
			$.ajax({
                url: 'search',
                data: {location: $("#location").val()},
                success: function(res) {
					
                    $(".content-2 .container .row").html(res);

                    $("button").removeClass("disabled");
                    $("button").addClass("active");
                },
                failure: function(res) {
                    alert("Ajax call failure!");
                }
            });
        }
        $("button").click(function( e ) {

            if ($("button").hasClass("active") ){
                $("button").addClass("disabled");
                $("button").removeClass("active");
                setTimeout(doitlater, 500);

            }
        });
        /*console.log($(".content-2 .container .row a").length);*/
        $("body").on("click", ".content-2 .container .row .detail h4", function(e){
            console.log($(this).text());                
        });
		
		/*$("body").on("click", ".content-2 .container .row a", function(e){
                //////console.log(this.closest(''));
                e.preventDefault();
                console.log($(".content-2 .container .row a").closest(".col-md-3").find("h4").html());
        });
		$(".content-2 .container .row .detail h4").on("click", function(e) {
            console.log($(this).text());
        });
		*/
        
        

        $(document).ready(function(){
            $("header button").click(function(){
                $(".collapse").slideToggle("slow");
            });
        });
    });


