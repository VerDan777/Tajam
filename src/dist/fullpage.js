$(document).ready(function() {
	$('#fullpage').fullpage({
        anchors: ['Home', 'About', 'Expertise', 'Teams','Works','Peoplesay','contacts'],
        // menu: '.main-menu',
		lockAnchors: false,
		// anchors:['firstPage', 'secondPage'],
		navigation: false,
		navigationPosition: 'right',
		navigationTooltips: ['firstSlide', 'secondSlide'],
		showActiveTooltip: false,
		slidesNavigation: false,
		slidesNavPosition: 'bottom',
    });
});