/*Pre-load image for poster*/
var poster_image=new Image();
poster_image.src="/images/posters/wg"+Math.floor(Math.random()*8)+".jpg";



// This function changes the "src" attribute of img tag named "poster"
function loadPoster(){
	if(!!document.images){
		document.images.poster.src=poster_image.src;
	}else{
		return;
	}
}/*loadPoster*/


