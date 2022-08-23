import { Fancybox } from "@fancyapps/ui";

$(function() {

	Fancybox.bind(".wp-block-gallery figure img", {
        groupAll : true, // Group all items
        on : {
          ready : (fancybox) => {
            console.log(`fancybox #${fancybox.id} is ready!`);
          }
        }
      });
	
});