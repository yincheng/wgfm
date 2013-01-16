/*Pre-load images for ad banner*/
var ad_img_array = new Array;
var ad_link_array = new Array;
var counter=0;
ad_img_array[0]=new Image();
ad_img_array[0].src="/images/ad_membership.png";
ad_img_array[0].alt="Become Our Member";
ad_link_array[0]="/m_joinus.html";

ad_img_array[1]=new Image();
ad_img_array[1].src="/images/ad_evaluation.png";
ad_img_array[1].alt="Complimentary Fitness Evaluation";
ad_link_array[1]="/s_evaluation.html";

ad_img_array[2]=new Image();
ad_img_array[2].src="/images/ad_prostore.png";
ad_img_array[2].alt="World Gym Pro Store";
ad_link_array[2]="/s_store.html";

var ad_track_timeout=nil;

// This function changes the ad image and links on index.html when it's called.
// It also set a timer to call itself again after a specific time interval
function switchAd(counter){
	clearTimeout(ad_track_timeout);
	
	if (!!document.images && !!document.getElementById) {
		document.images.ad.src=ad_img_array[counter].src;
		document.images.ad.alt=ad_img_array[counter].alt;
		document.getElementById("ad_link").href=ad_link_array[counter];
	}else{
		return;
	}
	
	if (counter>=(ad_img_array.length-1)){
		counter=0;
	}else{
		counter++;
	}

	ad_track_timeout=setTimeout("switchAd("+counter+")",5000);
}/*switchBanner*/