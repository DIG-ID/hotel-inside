import { Fancybox } from "@fancyapps/ui";

$(function() {

	Fancybox.bind('.wp-block-gallery figure img', {
		groupAll : true,
		Toolbar: false,
	});
	Fancybox.bind('[data-fancybox="about-gesell-modal"]', {
		Thumbs: {
			autoStart: false,
		},
  });
	
});