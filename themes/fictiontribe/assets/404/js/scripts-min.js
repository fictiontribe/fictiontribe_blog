jQuery(document).ready((function(e){var o=window.location.protocol+"//"+window.location.host+"/";console.log(o),function(){follower=e(".follow");var o=0,t=0,n=0,l=0;TweenMax.to({},.016,{repeat:-1,onRepeat:function(){o+=(n-o)/9,t+=(l-t)/9,TweenMax.set(follower,{css:{left:o-12,top:t-12}})}}),e(document).on("mousemove",(function(e){n=e.pageX,l=e.pageY})),e("a, svg, .fallback-img").on("mouseenter",(function(){follower.addClass("active")})),e("a, svg, .fallback-img").on("mouseleave",(function(){follower.removeClass("active")}))}(),function(){var t=navigator.userAgent,n=t.indexOf("Chrome")>-1,l=(t.indexOf("MSIE")>-1||t.indexOf("rv:"),t.indexOf("Firefox")>-1),a=t.indexOf("Safari")>-1;n&&a&&(a=!1);var r,i,s,c,g=t.indexOf("OP")>-1;if(n&&g&&(n=!1),1==n||1==l){console.log("this is chrome or firefox"),e("#animatedButton, #svgVideo").fadeIn();let t=new TimelineMax({repeat:-1,yoyo:!0}),n=document.querySelector("#feturbulence");function d(){randomImage=Math.floor(Math.random()*bgImage.length),console.log(bgImage[randomImage]);var e=o+"articles/themes/fictiontribe/assets/404/bg-images/"+bgImage[randomImage];document.querySelector(".bg-image").src=e;const t=Math.floor(Math.random()*bodyColor.length);document.querySelector("body").style.backgroundColor=bodyColor[t];const n=Math.floor(Math.random()*bodyColor.length);document.querySelector(".follow").style.backgroundColor=bodyColor[n],document.querySelector("#svgVideo > source").src=o+"articles/themes/fictiontribe/assets/404/video/"+function(e,o){const t=Math.random()*(o-e)+e;return Math.floor(t)}(0,21)+".mp4",videoElement=document.querySelector("#svgVideo"),videoElement.load()}t.add(TweenMax.to(n,1,{onUpdate:function(){let e=.115*this.progress()+.015,o=.05*this.progress()+.2;n.setAttribute("baseFrequency",`${e} ${o}`)}}),0),r=document.querySelectorAll("#animatedButton")[0],i={val:1e-6},s=document.querySelectorAll("#glitch feTurbulence")[0],(c=new TimelineLite({paused:!0,onUpdate:function(){s.setAttribute("baseFrequency","0.00001 "+i.val)},onStart:function(){r.style.filter="url(#glitch)"},onComplete:function(){r.style.filter="none"}})).to(i,.5,{val:.16}),c.to(i,.5,{val:1e-6}),r.addEventListener("click",(function(){c.restart()})),bodyColor=["orange","salmon","teal","aqua","coral","darkkhaki","lightcoral","lightseagreen","orangered","tomato","yellowgreen","thistle","honeydew"],bgImage=["1.jpg","2.jpg","3.gif","5.jpg","6.jpg","7.jpg","8.gif","9.gif","10.jpg","11.jpg","12.jpg","13.jpg","14.jpg","15.jpg","16.gif"],MorphSVGPlugin.convertToPath("#f, #t"),tl=gsap.timeline({onComplete:function(){e("#hover-f, #hover-t").removeClass("disabled")}}),e("#hover-t").on("mouseenter",(function(o){e("#hover-f").addClass("disabled"),original=document.getElementById("f"),tl.to(original,{morphSVG:"#t"})})),e("#hover-f").on("mouseenter",(function(o){e("#hover-t").addClass("disabled"),original=document.getElementById("f"),tl.to(original,{morphSVG:"#f"})})),e("#animatedButton").on("click",(function(){e(this).addClass("disabled"),d();var o=gsap.timeline({onComplete:function(){e("#animatedButton").removeClass("disabled")}}),t=document.getElementById("f");o.to(t,{morphSVG:"#f-n-t"},"+=1").to(t,{morphSVG:"#t"},"+=1").to(t,{morphSVG:t},"+=1")})),d()}else{function u(){const e=Math.floor(Math.random()*staticImg.length);console.log(staticImg[e]);var t=o+"articles/themes/fictiontribe/assets/404/static-img/"+staticImg[e];document.querySelector(".fallback-img").src=t;const n=Math.floor(Math.random()*bodyColor.length);console.log(bodyColor[n]),document.querySelector("body").style.backgroundColor=bodyColor[n]}console.log("this is not chrome or firefox"),e(".fallback").fadeIn(),function(){var e=document.querySelector(".fallback-img");console.log(e);var o={val:1.000001},t=document.querySelectorAll("#glitch feTurbulence")[0],n=new TimelineLite({paused:!0,onUpdate:function(){t.setAttribute("baseFrequency","1.00001 "+o.val)},onStart:function(){e.style.filter="url(#glitch)"},onComplete:function(){e.style.filter="none"}});n.to(o,.5,{val:.16}),n.to(o,.5,{val:1e-6}),e.addEventListener("click",(function(){n.restart(),console.log(e)}))}(),staticImg=["1.svg","2.png","3.svg","4.svg","5.svg","6.svg","7.svg","8.svg","9.svg","10.svg","11.svg","12.svg","13.svg","14.svg","15.svg","16.png","17.svg","18.png","19.svg","20.svg","21.svg","22.svg"],bodyColor=["orange","salmon","teal","aqua","coral","darkkhaki","lightcoral","lightseagreen","orangered","tomato","yellowgreen","thistle","honeydew"],e(".fallback").on("click",(function(){u()})),u(),alert("For best experience use Chrome or Firefox on Desktop")}}()}));