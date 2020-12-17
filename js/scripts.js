(function ($) {
    "use strict"; // Start of use strict
  
    $(document).ready(function () {
        // Header
		$(function() {
			var header = $("#wrapper-navbar");
			$(window).scroll(function() {    
				var scroll = $(window).scrollTop();
	
				if (scroll >= 400) {
					header.addClass("fixed-header");
				} else {
					header.removeClass("fixed-header");
				}
			});
		});

        (function() {

			"use strict";
			var toggles = document.querySelectorAll(".cmn-toggle-switch");
			for (var i = toggles.length - 1; i >= 0; i--) {
			  var toggle = toggles[i];
			  toggleHandler(toggle);
			};
		  
			function toggleHandler(toggle) {
			  toggle.addEventListener( "click", function(e) {
				e.preventDefault();
				(this.classList.contains("active") === true) ? this.classList.remove("active") : this.classList.add("active");
			  });
			}
          })();

          // Reveal
    });
})(jQuery); // End of use strict