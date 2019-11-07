/* A placer dans adtech.js */
/*
* ADTECH.loadAd - Asynchronously loads an ad into a specified html target.
* (c) 2012 AOL Advertising.
* @param id ID value of the container where ad will be displayed.
* @param url ADTECH addyn tag URL.
*/
if (window.adgroupid == undefined ) { window.adgroupid = Math.round(Math.random()*1000); }
var ADTECH = ADTECH || {};
ADTECH.loadAd = function (id, url) {
$el = $('#' + id);
console.info($el);
$.writeCapture.autoAsync();
$el.writeCapture().html('<script type="text/javascript" src="' + url + '"><\/script>');
};
function callAds(){
		// horizontal_top
	ADTECH.loadAd('placement_2055513', 'http://adserver.adtech.de/addyn|3.0|927.1|2055513|0|225|ADTECH;loc=100;target=_blank;key=key1+key2+key3+key4;alias=;grp='+window.adgroupid+';misc='+new Date().getTime());
		// rectangle_top
	ADTECH.loadAd('placement_2054999', 'http://adserver.adtech.de/addyn|3.0|927.1|2054999|0|170|ADTECH;loc=100;target=_blank;key=key1+key2+key3+key4;alias=;grp='+window.adgroupid+';misc='+new Date().getTime());
	ADTECH.loadAd('placement_2055106', 'http://adserver.adtech.de/addyn|3.0|927.1|2055106|0|261|ADTECH;loc=100;target=_blank;key=key1+key2+key3+key4;alias=;grp='+window.adgroupid+';misc='+new Date().getTime());
	ADTECH.loadAd('placement_3908060', 'http://adserver.adtech.de/addyn|3.0|927.1|3908060|0|225|ADTECH;loc=100;target=_blank;key=key1+key2+key3+key4;alias=;grp='+window.adgroupid+';misc='+new Date().getTime());
}
$( document ).ready( function(){
	callAds();
});
