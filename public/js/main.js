
window.addEventListener("scroll", function(){
	var banner;
    if(document.querySelector("#banner") == null){
        banner = 0;
    }else{
    var banner = document.querySelector("#banner").clientHeight/4;
    }

    if (this.scrollY >= banner){
    	var bar = document.querySelector("#nav-bar");
    	bar.style.background = "#fff";
        bar.style.color = "#000";
    	bar.style.height = "70px";

    }else{
    	var bar = document.querySelector("#nav-bar");
    	bar.style.background = "";
    	bar.style.height = "140px";
    	bar.style.color = "#fff";
    }
}, false);