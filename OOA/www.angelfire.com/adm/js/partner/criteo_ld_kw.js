function CriteoLoad(){function b(){var g=(document.location.protocol=="https:"&&"https:"||"http:")+"//dap.criteo.com/dis/dis.aspx";g+="?t1=sendData&kpid="+cto_conf.i;g+="&kw="+encodeURIComponent(cto_conf.kw);if(typeof(cto_conf.c)!="undefined"&&cto_conf.c=="img"){g+="&resptype=gif"}try{g+="&cb="+Math.floor(Math.random()*99999999999)}catch(k){}try{g+="&ref="+encodeURIComponent(document.referrer)}catch(k){}try{g+="&sc_r="+encodeURIComponent(screen.width+"x"+screen.height)}catch(k){}try{g+="&sc_d="+encodeURIComponent(screen.colorDepth)}catch(k){}return g}function h(g){if(window.addEventListener){window.addEventListener("load",g,false)}else{if(window.attachEvent){window.attachEvent("onload",g)}else{var k=window.onload;window.onload=function(){if(k&&typeof(k.fired)=="undefined"){k.fired=true;k()}g()}}}}function e(){var g=document.createElement((typeof(cto_conf.c)!="undefined"&&cto_conf.c=="img")?"img":"iframe");if(g){g.width="1px";g.height="1px";g.style.display="none";g.src=b()}else{return}return g}function a(g){var k;k=document.getElementsByTagName("body");if(!k||k.length==0){return}k=k[0];if(k!=null&&k.appendChild){k.appendChild(g)}}try{var i="0.6";if(typeof(cto_conf)=="undefined"||!cto_conf.i){return}if(typeof(cto_conf.kw)=="undefined"||cto_conf.kw==""){cto_conf.kw="";if(typeof(cto_conf.r)!="undefined"){var f=typeof(cto_conf.g)!="undefined"?cto_conf.g:1;var j=new RegExp(cto_conf.r);var d=j.exec(window.location.href);cto_conf.kw=(d==null)?"":decodeURIComponent(d[f])}}if(typeof(cto_conf.a)=="undefined"){h(function(){a(e())})}else{a(e())}}catch(c){}}CriteoLoad();