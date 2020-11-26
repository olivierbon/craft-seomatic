/*!
 * @project        SEOmatic
 * @name           seomatic-tokens.js
 * @author         Andrew Welch
 * @build          Thu, Nov 26, 2020 10:29 PM ET
 * @release        63a6bc07f499627c5a2a6e95d0694f300a082215 [feature/social-images]
 * @copyright      Copyright (c) 2020 nystudio107
 *
 */!function(e){function t(t){for(var n,a,i=t[0],l=t[1],c=t[2],p=0,s=[];p<i.length;p++)a=i[p],Object.prototype.hasOwnProperty.call(o,a)&&o[a]&&s.push(o[a][0]),o[a]=0;for(n in l)Object.prototype.hasOwnProperty.call(l,n)&&(e[n]=l[n]);for(f&&f(t);s.length;)s.shift()();return u.push.apply(u,c||[]),r()}function r(){for(var e,t=0;t<u.length;t++){for(var r=u[t],n=!0,i=1;i<r.length;i++){var l=r[i];0!==o[l]&&(n=!1)}n&&(u.splice(t--,1),e=a(a.s=r[0]))}return e}var n={},o={7:0},u=[];function a(t){if(n[t])return n[t].exports;var r=n[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,a),r.l=!0,r.exports}a.m=e,a.c=n,a.d=function(e,t,r){a.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,t){if(1&t&&(e=a(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(a.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)a.d(r,n,function(t){return e[t]}.bind(null,n));return r},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.p="";var i=window.webpackJsonp=window.webpackJsonp||[],l=i.push.bind(i);i.push=t,i=i.slice();for(var c=0;c<i.length;c++)t(i[c]);var f=l;u.push([114,13]),r()}({114:function(e,t,r){"use strict";r.r(t);var n=r(39),o=document.querySelector(".seomatic-keywords"),u=void 0;if(o){o.value&&(u=o.value.split(",").map((function(e,t){if(""!==e)return{id:t,name:e}})));var a={el:o,addItemOnBlur:!0,addItemsOnPaste:!0,delimiters:[","]};void 0!==u&&void 0!==u[0]&&(a.setItems=u),new n.a(a).on("change",(function(e){var t=e._vars.setItems.map((function(e){return e.name}));e.el.value=t.join(",")}))}}});
//# sourceMappingURL=seomatic-tokens.js.map