!function(e){function i(i,t){if(0===i.indexOf("#"))e(i).clone(!0).appendTo(n.empty()).show();else{if(t){var a=e("<iframe />").attr({src:i,frameborder:0,hspace:0}).css({width:"100%",height:"100%"});n.html(a)}else n.load(i);n.data("localEl",!1)}}function t(e,i){var t=n.outerWidth(!0),s={},l={};if(!n.is(":visible")&&!d){switch(d=!0,e){case"left":n.css({left:"auto",right:"-"+t+"px"}),s["margin-left"]="-="+t,l.right="+="+t;break;default:n.css({left:"-"+t+"px",right:"auto"}),s["margin-left"]="+="+t,l.left="+="+t}a.animate(s,i),n.show().animate(l,i,function(){d=!1})}}var a=e("body"),n=e("#pageslide"),d=!1,s;0==n.length&&(n=e("<div />").attr("id","pageslide").css("display","none").appendTo(e("body"))),e.fn.pageslide=function(i){this.click(function(t){var a=e(this),d=e.extend({href:a.attr("href")},i);t.preventDefault(),t.stopPropagation(),n.is(":visible")&&a[0]==s?e.pageslide.close():(e.pageslide(d),s=a[0])})},e.fn.pageslide.defaults={speed:200,direction:"right",modal:!1,iframe:!0,href:null},e.pageslide=function(a){var d=e.extend({},e.fn.pageslide.defaults,a);n.is(":visible")&&n.data("direction")!=d.direction?e.pageslide.close(function(){i(d.href,d.iframe),t(d.direction,d.speed)}):(i(d.href,d.iframe),n.is(":hidden")&&t(d.direction,d.speed)),n.data(d)},e.pageslide.close=function(i){var t=e("#pageslide"),n=t.outerWidth(!0),s=t.data("speed"),l={},o={};if(!t.is(":hidden")&&!d){switch(d=!0,t.data("direction")){case"left":l["margin-left"]="+="+n,o.right="-="+n;break;default:l["margin-left"]="-="+n,o.left="-="+n}t.animate(o,s),a.animate(l,s,function(){t.hide(),d=!1,"undefined"!=typeof i&&i()})}},n.click(function(e){e.stopPropagation()}),e(document).bind("click keyup",function(i){"keyup"==i.type&&27!=i.keyCode||n.is(":visible")&&!n.data("modal")&&e.pageslide.close()})}(jQuery);