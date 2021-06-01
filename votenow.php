<?php
session_start();
include("uploads.php");
include("db-config.php");


// This page can be accessed only after login
// Redirect user to login page, if user email is not available in session
if (!isset($_SESSION["email"])) {
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html class="logged-out-1">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={licenseKey:"ecbe44911a",applicationID:"35958959"};window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var i=t[n]={exports:{}};e[n][0].call(i.exports,function(t){var i=e[n][1][t];return r(i||t)},i,i.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(e,t,n){function r(){}function i(e,t,n){return function(){return o(e,[u.now()].concat(c(arguments)),t?null:this,n),t?void 0:this}}var o=e("handle"),a=e(7),c=e(8),f=e("ee").get("tracer"),u=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(e,t){s[t]=i(p+t,!0,"api")}),s.addPageAction=i(p+"addPageAction",!0),s.setCurrentRouteName=i(p+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,i="function"==typeof t;return o(l+"tracer",[u.now(),e,n],r),function(){if(f.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return t.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],n),e}finally{f.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=i(l+t)}),newrelic.noticeError=function(e,t){"string"==typeof e&&(e=new Error(e)),o("err",[e,u.now(),!1,t])}},{}],2:[function(e,t,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=e(9);t.exports=r,t.exports.offset=a,t.exports.getLastTimestamp=i},{}],3:[function(e,t,n){function r(e){return!(!e||!e.protocol||"file:"===e.protocol)}t.exports=r},{}],4:[function(e,t,n){function r(e,t){var n=e.getEntries();n.forEach(function(e){"first-paint"===e.name?d("timing",["fp",Math.floor(e.startTime)]):"first-contentful-paint"===e.name&&d("timing",["fcp",Math.floor(e.startTime)])})}function i(e,t){var n=e.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(e){e.getEntries().forEach(function(e){e.hadRecentInput||d("cls",[e])})}function a(e){if(e instanceof m&&!g){var t=Math.round(e.timeStamp),n={type:e.type};t<=p.now()?n.fid=p.now()-t:t>p.offset&&t<=Date.now()?(t-=p.offset,n.fid=p.now()-t):t=p.now(),g=!0,d("timing",["fi",t,n])}}function c(e){d("pageHide",[p.now(),e])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var f,u,s,d=e("handle"),p=e("loader"),l=e(6),m=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){f=new PerformanceObserver(r);try{f.observe({entryTypes:["paint"]})}catch(v){}u=new PerformanceObserver(i);try{u.observe({entryTypes:["largest-contentful-paint"]})}catch(v){}s=new PerformanceObserver(o);try{s.observe({type:"layout-shift",buffered:!0})}catch(v){}}if("addEventListener"in document){var g=!1,w=["click","keydown","mousedown","pointerdown","touchstart"];w.forEach(function(e){document.addEventListener(e,a,!1)})}l(c)}},{}],5:[function(e,t,n){function r(e,t){if(!i)return!1;if(e!==i)return!1;if(!t)return!0;if(!o)return!1;for(var n=o.split("."),r=t.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,f=c.match(a);f&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=f[1])}t.exports={agent:i,version:o,match:r}},{}],6:[function(e,t,n){function r(e){function t(){e(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,t,!1)}t.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],7:[function(e,t,n){function r(e,t){var n=[],r="",o=0;for(r in e)i.call(e,r)&&(n[o]=t(r,e[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],8:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,i=n-t||0,o=Array(i<0?0:i);++r<i;)o[r]=e[t+r];return o}t.exports=r},{}],9:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function i(e){function t(e){return e&&e instanceof r?e:e?u(e,f,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!l.aborted||o){e&&a&&e(n,r,i);for(var c=t(i),f=v(n),u=f.length,s=0;s<u;s++)f[s].apply(c,r);var p=d[h[n]];return p&&p.push([b,n,r,c]),c}}function o(e,t){y[e]=v(e).concat(t)}function m(e,t){var n=y[e];if(n)for(var r=0;r<n.length;r++)n[r]===t&&n.splice(r,1)}function v(e){return y[e]||[]}function g(e){return p[e]=p[e]||i(n)}function w(e,t){s(e,function(e,n){t=t||"feature",h[n]=t,t in d||(d[t]=[])})}var y={},h={},b={on:o,addEventListener:o,removeEventListener:m,emit:n,get:g,listeners:v,context:t,buffer:w,abort:c,aborted:!1};return b}function o(e){return u(e,f,a)}function a(){return new r}function c(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var f="nr@context",u=e("gos"),s=e(7),d={},p={},l=t.exports=i();t.exports.getOrSetContext=o,l.backlog=d},{}],gos:[function(e,t,n){function r(e,t,n){if(i.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return e[t]=r,r}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){i.buffer([e],r),i.emit(e,t,n)}var i=e("ee").get("handle");t.exports=r,r.ee=i},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,o,function(){return i++})}var i=1,o="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!E++){var e=x.info=NREUM.info,t=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return u.abort();f(h,function(t,n){e[t]||(e[t]=n)});var n=a();c("mark",["onload",n+x.offset],null,"api"),c("timing",["load",n]);var r=l.createElement("script");r.src="https://"+e.agent,t.parentNode.insertBefore(r,t)}}function i(){"complete"===l.readyState&&o()}function o(){c("mark",["domContent",a()+x.offset],null,"api")}var a=e(2),c=e("handle"),f=e(7),u=e("ee"),s=e(5),d=e(3),p=window,l=p.document,m="addEventListener",v="attachEvent",g=p.XMLHttpRequest,w=g&&g.prototype;if(d(p.location)){NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:g,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var y=""+location,h={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1208.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=t.exports={offset:a.getLastTimestamp(),now:a,origin:y,features:{},xhrWrappable:b,userAgent:s};e(1),e(4),l[m]?(l[m]("DOMContentLoaded",o,!1),p[m]("load",r,!1)):(l[v]("onreadystatechange",i),p[v]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var E=0}},{}],"wrap-function":[function(e,t,n){function r(e,t){function n(t,n,r,f,u){function nrWrapper(){var o,a,s,p;try{a=this,o=d(arguments),s="function"==typeof r?r(o,a):r||{}}catch(l){i([l,"",[o,a,f],s],e)}c(n+"start",[o,a,f],s,u);try{return p=t.apply(a,o)}catch(m){throw c(n+"err",[o,a,m],s,u),m}finally{c(n+"end",[o,a,p],s,u)}}return a(t)?t:(n||(n=""),nrWrapper[p]=t,o(t,nrWrapper,e),nrWrapper)}function r(e,t,r,i,o){r||(r="");var c,f,u,s="-"===r.charAt(0);for(u=0;u<t.length;u++)f=t[u],c=e[f],a(c)||(e[f]=n(c,s?f+r:r,i,f,o))}function c(n,r,o,a){if(!m||t){var c=m;m=!0;try{e.emit(n,r,o,t,a)}catch(f){i([f,n,r,o],e)}m=c}}return e||(e=s),n.inPlace=r,n.flag=p,n}function i(e,t){t||(t=s);try{t.emit("internal-error",e)}catch(n){}}function o(e,t,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(e);return r.forEach(function(n){Object.defineProperty(t,n,{get:function(){return e[n]},set:function(t){return e[n]=t,t}})}),t}catch(o){i([o],n)}for(var a in e)l.call(e,a)&&(t[a]=e[a]);return t}function a(e){return!(e&&e instanceof Function&&e.apply&&!e[p])}function c(e,t){var n=t(e);return n[p]=e,o(e,n,s),n}function f(e,t,n){var r=e[t];e[t]=c(r,n)}function u(){for(var e=arguments.length,t=new Array(e),n=0;n<e;++n)t[n]=arguments[n];return t}var s=e("ee"),d=e(8),p="nr@original",l=Object.prototype.hasOwnProperty,m=!1;t.exports=r,t.exports.wrapFunction=c,t.exports.wrapInPlace=f,t.exports.argsToArray=u},{}]},{},["loader"]);</script>
    <title>Vote Now!</title>
    <meta name="description" content="Find out what your pics are really saying about you. Choose photos that make the right impression for your professional, social, and dating profiles." />
    <meta name="theme-color" content="#A3D9DE">
    <link rel="author" href="https://plus.google.com/117480045292551501788">
    <link rel="shortcut icon" href="https://drive.google.com/thumbnail?id=1voMm2-SjUXa1mz47W_2NuDXjR4YvwBY5" type="image/x-icon">
    <link rel="icon" href="https://drive.google.com/thumbnail?id=1voMm2-SjUXa1mz47W_2NuDXjR4YvwBY5" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://drive.google.com/thumbnail?id=1voMm2-SjUXa1mz47W_2NuDXjR4YvwBY5">
    <meta property="fb:app_id" content="310261842437710" />
    <meta property="og:site_name" content="FaceOff" />
    <meta property="og:image" content="http://d1r8m46oob3o9u.cloudfront.net/images/photofeeler-results-sample-2.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <script>
        window.pfDeferredFunctions = window.pfDeferredFunctions || [];
        function pfDocumentReady(f) {
        if (window.pfDeferredFunctions === null) {f();} else {window.pfDeferredFunctions.push(f);}
        }
    </script>
    <script crossorigin="anonymous" defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script crossorigin="anonymous" defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script crossorigin="anonymous" defer src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.14/vue.min.js"></script>
    <script crossorigin="anonymous" defer src="https://d1r8m46oob3o9u.cloudfront.net/js/2021-04-22-13-42-27/www-all.min.js"></script>
    <meta id="pfViewport" name="viewport" content="width=device-width, initial-scale=1">
    <script>
        function viewportUpdate() {
        var estimatedWidth = (window.innerWidth < window.innerHeight ? Math.min(screen.width, screen.height) : Math.max(screen.width, screen.height));
        if (estimatedWidth < 320) {
        document.getElementById('pfViewport').setAttribute('content','width=320, initial-scale='+(estimatedWidth/320));
        } else {
        document.getElementById('pfViewport').setAttribute('content','width=device-width, initial-scale=1');
        }
        }
        viewportUpdate();
        pfDocumentReady(function() {
        $(window).on('resize', viewportUpdate);
        });
    </script>
    <script>
        var ga_account = "UA-40617210-2";
        pfDocumentReady(function() {
        BrowserDetection.init();
        window.PageError.initialize(false);
        });
    </script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');


    #rangeValue {
        position: relative;
        display: block;
        text-align: center;
        font-size: 6.3;
        color: #111;
        font-weight: 400;
    }

    .range {
        width: 400px;
        height: 15px;
        -webkit-appearance: none;
        background: #a1e9ff;
        outline: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: inset 0 0 5px #a1e9ff;
    }

        .range::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: #FF5F1F;
            cursor: pointer;
            border: 4px solid #333;
            box-shadow: -407px 0 0 400px #FF5F1F;
        }
        /*! normalize.css v3.0.2 | MIT License | git.io/normalize */ html {
            font-family: sans-serif;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
            display: block
        }

        audio, canvas, progress, video {
            display: inline-block;
            vertical-align: baseline
        }

            audio:not([controls]) {
                display: none;
                height: 0
            }

        [hidden], template {
            display: none
        }

        a {
            background-color: transparent
        }

            a:active, a:hover {
                outline: 0
            }

        abbr[title] {
            border-bottom: 1px dotted
        }

        b, strong {
            font-weight: 700
        }

        dfn {
            font-style: italic
        }

        h1 {
            font-size: 2em;
            margin: .67em 0
        }

        mark {
            background: #ff0;
            color: #000
        }

        small {
            font-size: 80%
        }

        sub, sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sup {
            top: -.5em
        }

        sub {
            bottom: -.25em
        }

        img {
            border: 0
        }

        svg:not(:root) {
            overflow: hidden
        }

        figure {
            margin: 1em 40px
        }

        hr {
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            height: 0
        }

        pre {
            overflow: auto
        }

        code, kbd, pre, samp {
            font-family: monospace,monospace;
            font-size: 1em
        }

        button, input, optgroup, select, textarea {
            color: inherit;
            font: inherit;
            margin: 0
        }

        button {
            overflow: visible
        }

        button, select {
            text-transform: none
        }

        button, html input[type=button], input[type=reset], input[type=submit] {
            -webkit-appearance: button;
            cursor: pointer
        }

            button[disabled], html input[disabled] {
                cursor: default
            }

            button::-moz-focus-inner, input::-moz-focus-inner {
                border: 0;
                padding: 0
            }

        input {
            line-height: normal
        }

            input[type=checkbox], input[type=radio] {
                box-sizing: border-box;
                padding: 0
            }

            input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button {
                height: auto
            }

            input[type=search] {
                -webkit-appearance: textfield;
                -moz-box-sizing: content-box;
                -webkit-box-sizing: content-box;
                box-sizing: content-box
            }

                input[type=search]::-webkit-search-cancel-button, input[type=search]::-webkit-search-decoration {
                    -webkit-appearance: none
                }

        fieldset {
            border: 1px solid silver;
            margin: 0 2px;
            padding: .35em .625em .75em
        }

        legend {
            border: 0;
            padding: 0
        }

        textarea {
            overflow: auto
        }

        optgroup {
            font-weight: 700
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        td, th {
            padding: 0
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        :after, :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        html {
            font-size: 10px;
            -webkit-tap-highlight-color: transparent
        }

        body {
            font-family: Roboto,sans-serif;
            font-size: 17px;
            line-height: 1.42857143;
            color: #333;
            background-color: #fff
        }

        button, input, select, textarea {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        a {
            color: #fc6a49;
            text-decoration: none
        }

            a:focus, a:hover {
                color: #f43004;
                text-decoration: underline
            }

            a:focus {
                outline: thin dotted;
                outline: 5px auto -webkit-focus-ring-color;
                outline-offset: -2px
            }

        img {
            vertical-align: middle

        }

        hr {
            margin-top: 24px;
            margin-bottom: 24px;
            border: 0;
            border-top: 1px solid #eee
        }

        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit
        }

            .h1 .small, .h1 small, .h2 .small, .h2 small, .h3 .small, .h3 small, .h4 .small, .h4 small, .h5 .small, .h5 small, .h6 .small, .h6 small, h1 .small, h1 small, h2 .small, h2 small, h3 .small, h3 small, h4 .small, h4 small, h5 .small, h5 small, h6 .small, h6 small {
                font-weight: 400;
                line-height: 1;
                color: #777
            }

        .h1, .h2, .h3, h1, h2, h3 {
            margin-top: 24px;
            margin-bottom: 12px
        }

            .h1 .small, .h1 small, .h2 .small, .h2 small, .h3 .small, .h3 small, h1 .small, h1 small, h2 .small, h2 small, h3 .small, h3 small {
                font-size: 65%
            }

        .h4, .h5, .h6, h4, h5, h6 {
            margin-top: 12px;
            margin-bottom: 12px
        }

            .h4 .small, .h4 small, .h5 .small, .h5 small, .h6 .small, .h6 small, h4 .small, h4 small, h5 .small, h5 small, h6 .small, h6 small {
                font-size: 75%
            }

        .h1, h1 {
            font-size: 30px
        }

        .h2, h2 {
            font-size: 24px
        }

        .h3, h3 {
            font-size: 20px
        }

        .h4, h4 {
            font-size: 17px
        }

        .h5, h5 {
            font-size: 14px
        }

        .h6, h6 {
            font-size: 12px
        }

        p {
            margin: 0 0 12px
        }

        .small, small {
            font-size: 88%
        }

        .text-left {
            text-align: left
        }

        .text-right {
            text-align: right
        }

        .text-center {
            text-align: center
        }

        .text-justify {
            text-align: justify
        }

        .text-nowrap {
            white-space: nowrap
        }

        .text-lowercase {
            text-transform: lowercase
        }

        .text-uppercase {
            text-transform: uppercase
        }

        .text-capitalize {
            text-transform: capitalize
        }

        .text-muted {
            color: #777
        }

        .text-primary {
            color: #fc6a49
        }

        a.text-primary:hover {
            color: #fb4117
        }

        .text-success {
            color: #3c763d
        }

        a.text-success:hover {
            color: #2b542c
        }

        .text-info {
            color: #31708f
        }

        a.text-info:hover {
            color: #245269
        }

        .text-warning {
            color: #8a6d3b
        }

        a.text-warning:hover {
            color: #66512c
        }

        .text-danger {
            color: #a94442
        }

        a.text-danger:hover {
            color: #843534
        }

        .bg-primary {
            color: #fff;
            background-color: #fc6a49
        }

        a.bg-primary:hover {
            background-color: #fb4117
        }

        .bg-success {
            background-color: #dff0d8
        }

        a.bg-success:hover {
            background-color: #c1e2b3
        }

        .bg-info {
            background-color: #d9edf7
        }

        a.bg-info:hover {
            background-color: #afd9ee
        }

        .bg-warning {
            background-color: #fcf8e3
        }

        a.bg-warning:hover {
            background-color: #f7ecb5
        }

        .bg-danger {
            background-color: #f2dede
        }

        a.bg-danger:hover {
            background-color: #e4b9b9
        }

        .page-header {
            padding-bottom: 11px;
            margin: 48px 0 24px;
            border-bottom: 1px solid #eee
        }

        ol, ul {
            margin-top: 0;
            margin-bottom: 12px
        }

            ol ol, ol ul, ul ol, ul ul {
                margin-bottom: 0
            }

        .list-unstyled {
            padding-left: 0;
            list-style: none
        }

        .list-inline {
            padding-left: 0;
            list-style: none;
            margin-left: -5px
        }

            .list-inline > li {
                display: inline-block;
                padding-left: 5px;
                padding-right: 5px
            }

        abbr[data-original-title], abbr[title] {
            cursor: help;
            border-bottom: 1px dotted #777
        }

        .container {
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px
        }

        @media (min-width:768px) {
            .container {
                width: 750px
            }
        }

        @media (min-width:992px) {
            .container {
                width: 970px
            }
        }

        @media (min-width:1200px) {
            .container {
                width: 1170px
            }
        }

        .container-fluid {
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px
        }

        .row {
            margin-left: -15px;
            margin-right: -15px
        }

        .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px
        }

        .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
            float: left
        }

        .col-xs-12 {
            width: 100%
        }

        .col-xs-11 {
            width: 91.66666667%
        }

        .col-xs-10 {
            width: 83.33333333%
        }

        .col-xs-9 {
            width: 75%
        }

        .col-xs-8 {
            width: 66.66666667%
        }

        .col-xs-7 {
            width: 58.33333333%
        }

        .col-xs-6 {
            width: 50%
        }

        .col-xs-5 {
            width: 41.66666667%
        }

        .col-xs-4 {
            width: 33.33333333%
        }

        .col-xs-3 {
            width: 25%
        }

        .col-xs-2 {
            width: 16.66666667%
        }

        .col-xs-1 {
            width: 8.33333333%
        }

        .col-xs-pull-12 {
            right: 100%
        }

        .col-xs-pull-11 {
            right: 91.66666667%
        }

        .col-xs-pull-10 {
            right: 83.33333333%
        }

        .col-xs-pull-9 {
            right: 75%
        }

        .col-xs-pull-8 {
            right: 66.66666667%
        }

        .col-xs-pull-7 {
            right: 58.33333333%
        }

        .col-xs-pull-6 {
            right: 50%
        }

        .col-xs-pull-5 {
            right: 41.66666667%
        }

        .col-xs-pull-4 {
            right: 33.33333333%
        }

        .col-xs-pull-3 {
            right: 25%
        }

        .col-xs-pull-2 {
            right: 16.66666667%
        }

        .col-xs-pull-1 {
            right: 8.33333333%
        }

        .col-xs-pull-0 {
            right: auto
        }

        .col-xs-push-12 {
            left: 100%
        }

        .col-xs-push-11 {
            left: 91.66666667%
        }

        .col-xs-push-10 {
            left: 83.33333333%
        }

        .col-xs-push-9 {
            left: 75%
        }

        .col-xs-push-8 {
            left: 66.66666667%
        }

        .col-xs-push-7 {
            left: 58.33333333%
        }

        .col-xs-push-6 {
            left: 50%
        }

        .col-xs-push-5 {
            left: 41.66666667%
        }

        .col-xs-push-4 {
            left: 33.33333333%
        }

        .col-xs-push-3 {
            left: 25%
        }

        .col-xs-push-2 {
            left: 16.66666667%
        }

        .col-xs-push-1 {
            left: 8.33333333%
        }

        .col-xs-push-0 {
            left: auto
        }

        .col-xs-offset-12 {
            margin-left: 100%
        }

        .col-xs-offset-11 {
            margin-left: 91.66666667%
        }

        .col-xs-offset-10 {
            margin-left: 83.33333333%
        }

        .col-xs-offset-9 {
            margin-left: 75%
        }

        .col-xs-offset-8 {
            margin-left: 66.66666667%
        }

        .col-xs-offset-7 {
            margin-left: 58.33333333%
        }

        .col-xs-offset-6 {
            margin-left: 50%
        }

        .col-xs-offset-5 {
            margin-left: 41.66666667%
        }

        .col-xs-offset-4 {
            margin-left: 33.33333333%
        }

        .col-xs-offset-3 {
            margin-left: 25%
        }

        .col-xs-offset-2 {
            margin-left: 16.66666667%
        }

        .col-xs-offset-1 {
            margin-left: 8.33333333%
        }

        .col-xs-offset-0 {
            margin-left: 0
        }

        @media (min-width:768px) {
            .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9 {
                float: left
            }

            .col-sm-12 {
                width: 100%
            }

            .col-sm-11 {
                width: 91.66666667%
            }

            .col-sm-10 {
                width: 83.33333333%
            }

            .col-sm-9 {
                width: 75%
            }

            .col-sm-8 {
                width: 66.66666667%
            }

            .col-sm-7 {
                width: 58.33333333%
            }

            .col-sm-6 {
                width: 50%
            }

            .col-sm-5 {
                width: 41.66666667%
            }

            .col-sm-4 {
                width: 33.33333333%
            }

            .col-sm-3 {
                width: 25%
            }

            .col-sm-2 {
                width: 16.66666667%
            }

            .col-sm-1 {
                width: 8.33333333%
            }

            .col-sm-pull-12 {
                right: 100%
            }

            .col-sm-pull-11 {
                right: 91.66666667%
            }

            .col-sm-pull-10 {
                right: 83.33333333%
            }

            .col-sm-pull-9 {
                right: 75%
            }

            .col-sm-pull-8 {
                right: 66.66666667%
            }

            .col-sm-pull-7 {
                right: 58.33333333%
            }

            .col-sm-pull-6 {
                right: 50%
            }

            .col-sm-pull-5 {
                right: 41.66666667%
            }

            .col-sm-pull-4 {
                right: 33.33333333%
            }

            .col-sm-pull-3 {
                right: 25%
            }

            .col-sm-pull-2 {
                right: 16.66666667%
            }

            .col-sm-pull-1 {
                right: 8.33333333%
            }

            .col-sm-pull-0 {
                right: auto
            }

            .col-sm-push-12 {
                left: 100%
            }

            .col-sm-push-11 {
                left: 91.66666667%
            }

            .col-sm-push-10 {
                left: 83.33333333%
            }

            .col-sm-push-9 {
                left: 75%
            }

            .col-sm-push-8 {
                left: 66.66666667%
            }

            .col-sm-push-7 {
                left: 58.33333333%
            }

            .col-sm-push-6 {
                left: 50%
            }

            .col-sm-push-5 {
                left: 41.66666667%
            }

            .col-sm-push-4 {
                left: 33.33333333%
            }

            .col-sm-push-3 {
                left: 25%
            }

            .col-sm-push-2 {
                left: 16.66666667%
            }

            .col-sm-push-1 {
                left: 8.33333333%
            }

            .col-sm-push-0 {
                left: auto
            }

            .col-sm-offset-12 {
                margin-left: 100%
            }

            .col-sm-offset-11 {
                margin-left: 91.66666667%
            }

            .col-sm-offset-10 {
                margin-left: 83.33333333%
            }

            .col-sm-offset-9 {
                margin-left: 75%
            }

            .col-sm-offset-8 {
                margin-left: 66.66666667%
            }

            .col-sm-offset-7 {
                margin-left: 58.33333333%
            }

            .col-sm-offset-6 {
                margin-left: 50%
            }

            .col-sm-offset-5 {
                margin-left: 41.66666667%
            }

            .col-sm-offset-4 {
                margin-left: 33.33333333%
            }

            .col-sm-offset-3 {
                margin-left: 25%
            }

            .col-sm-offset-2 {
                margin-left: 16.66666667%
            }

            .col-sm-offset-1 {
                margin-left: 8.33333333%
            }

            .col-sm-offset-0 {
                margin-left: 0
            }
        }

        @media (min-width:992px) {
            .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
                float: left
            }

            .col-md-12 {
                width: 100%
            }

            .col-md-11 {
                width: 91.66666667%
            }

            .col-md-10 {
                width: 83.33333333%
            }

            .col-md-9 {
                width: 75%
            }

            .col-md-8 {
                width: 66.66666667%
            }

            .col-md-7 {
                width: 58.33333333%
            }

            .col-md-6 {
                width: 50%
            }

            .col-md-5 {
                width: 41.66666667%
            }

            .col-md-4 {
                width: 33.33333333%
            }

            .col-md-3 {
                width: 25%
            }

            .col-md-2 {
                width: 16.66666667%
            }

            .col-md-1 {
                width: 8.33333333%
            }

            .col-md-pull-12 {
                right: 100%
            }

            .col-md-pull-11 {
                right: 91.66666667%
            }

            .col-md-pull-10 {
                right: 83.33333333%
            }

            .col-md-pull-9 {
                right: 75%
            }

            .col-md-pull-8 {
                right: 66.66666667%
            }

            .col-md-pull-7 {
                right: 58.33333333%
            }

            .col-md-pull-6 {
                right: 50%
            }

            .col-md-pull-5 {
                right: 41.66666667%
            }

            .col-md-pull-4 {
                right: 33.33333333%
            }

            .col-md-pull-3 {
                right: 25%
            }

            .col-md-pull-2 {
                right: 16.66666667%
            }

            .col-md-pull-1 {
                right: 8.33333333%
            }

            .col-md-pull-0 {
                right: auto
            }

            .col-md-push-12 {
                left: 100%
            }

            .col-md-push-11 {
                left: 91.66666667%
            }

            .col-md-push-10 {
                left: 83.33333333%
            }

            .col-md-push-9 {
                left: 75%
            }

            .col-md-push-8 {
                left: 66.66666667%
            }

            .col-md-push-7 {
                left: 58.33333333%
            }

            .col-md-push-6 {
                left: 50%
            }

            .col-md-push-5 {
                left: 41.66666667%
            }

            .col-md-push-4 {
                left: 33.33333333%
            }

            .col-md-push-3 {
                left: 25%
            }

            .col-md-push-2 {
                left: 16.66666667%
            }

            .col-md-push-1 {
                left: 8.33333333%
            }

            .col-md-push-0 {
                left: auto
            }

            .col-md-offset-12 {
                margin-left: 100%
            }

            .col-md-offset-11 {
                margin-left: 91.66666667%
            }

            .col-md-offset-10 {
                margin-left: 83.33333333%
            }

            .col-md-offset-9 {
                margin-left: 75%
            }

            .col-md-offset-8 {
                margin-left: 66.66666667%
            }

            .col-md-offset-7 {
                margin-left: 58.33333333%
            }

            .col-md-offset-6 {
                margin-left: 50%
            }

            .col-md-offset-5 {
                margin-left: 41.66666667%
            }

            .col-md-offset-4 {
                margin-left: 33.33333333%
            }

            .col-md-offset-3 {
                margin-left: 25%
            }

            .col-md-offset-2 {
                margin-left: 16.66666667%
            }

            .col-md-offset-1 {
                margin-left: 8.33333333%
            }

            .col-md-offset-0 {
                margin-left: 0
            }
        }

        @media (min-width:1200px) {
            .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9 {
                float: left
            }

            .col-lg-12 {
                width: 100%
            }

            .col-lg-11 {
                width: 91.66666667%
            }

            .col-lg-10 {
                width: 83.33333333%
            }

            .col-lg-9 {
                width: 75%
            }

            .col-lg-8 {
                width: 66.66666667%
            }

            .col-lg-7 {
                width: 58.33333333%
            }

            .col-lg-6 {
                width: 50%
            }

            .col-lg-5 {
                width: 41.66666667%
            }

            .col-lg-4 {
                width: 33.33333333%
            }

            .col-lg-3 {
                width: 25%
            }

            .col-lg-2 {
                width: 16.66666667%
            }

            .col-lg-1 {
                width: 8.33333333%
            }

            .col-lg-pull-12 {
                right: 100%
            }

            .col-lg-pull-11 {
                right: 91.66666667%
            }

            .col-lg-pull-10 {
                right: 83.33333333%
            }

            .col-lg-pull-9 {
                right: 75%
            }

            .col-lg-pull-8 {
                right: 66.66666667%
            }

            .col-lg-pull-7 {
                right: 58.33333333%
            }

            .col-lg-pull-6 {
                right: 50%
            }

            .col-lg-pull-5 {
                right: 41.66666667%
            }

            .col-lg-pull-4 {
                right: 33.33333333%
            }

            .col-lg-pull-3 {
                right: 25%
            }

            .col-lg-pull-2 {
                right: 16.66666667%
            }

            .col-lg-pull-1 {
                right: 8.33333333%
            }

            .col-lg-pull-0 {
                right: auto
            }

            .col-lg-push-12 {
                left: 100%
            }

            .col-lg-push-11 {
                left: 91.66666667%
            }

            .col-lg-push-10 {
                left: 83.33333333%
            }

            .col-lg-push-9 {
                left: 75%
            }

            .col-lg-push-8 {
                left: 66.66666667%
            }

            .col-lg-push-7 {
                left: 58.33333333%
            }

            .col-lg-push-6 {
                left: 50%
            }

            .col-lg-push-5 {
                left: 41.66666667%
            }

            .col-lg-push-4 {
                left: 33.33333333%
            }

            .col-lg-push-3 {
                left: 25%
            }

            .col-lg-push-2 {
                left: 16.66666667%
            }

            .col-lg-push-1 {
                left: 8.33333333%
            }

            .col-lg-push-0 {
                left: auto
            }

            .col-lg-offset-12 {
                margin-left: 100%
            }

            .col-lg-offset-11 {
                margin-left: 91.66666667%
            }

            .col-lg-offset-10 {
                margin-left: 83.33333333%
            }

            .col-lg-offset-9 {
                margin-left: 75%
            }

            .col-lg-offset-8 {
                margin-left: 66.66666667%
            }

            .col-lg-offset-7 {
                margin-left: 58.33333333%
            }

            .col-lg-offset-6 {
                margin-left: 50%
            }

            .col-lg-offset-5 {
                margin-left: 41.66666667%
            }

            .col-lg-offset-4 {
                margin-left: 33.33333333%
            }

            .col-lg-offset-3 {
                margin-left: 25%
            }

            .col-lg-offset-2 {
                margin-left: 16.66666667%
            }

            .col-lg-offset-1 {
                margin-left: 8.33333333%
            }

            .col-lg-offset-0 {
                margin-left: 0
            }
        }

        label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-weight: 700
        }

        input[type=search] {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        input[type=checkbox], input[type=radio] {
            margin: 4px 0 0;
            line-height: normal
        }

        input[type=file] {
            display: block
        }

        input[type=range] {
            display: block;
            width: 100%
        }

        select[multiple], select[size] {
            height: auto
        }

        input[type=checkbox]:focus, input[type=file]:focus, input[type=radio]:focus {
            outline: thin dotted;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px
        }

        .form-control {
            display: block;
            width: 100%;
            height: 38px;
            padding: 6px 12px;
            font-size: 17px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s
        }

            .form-control:focus {
                border-color: #66afe9;
                outline: 0;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)
            }

            .form-control::-moz-placeholder {
                color: #999;
                opacity: 1
            }

            .form-control:-ms-input-placeholder {
                color: #999
            }

            .form-control::-webkit-input-placeholder {
                color: #999
            }

            .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
                cursor: not-allowed;
                background-color: #eee;
                opacity: 1
            }

        textarea.form-control {
            height: auto
        }

        input[type=search] {
            -webkit-appearance: none
        }

        @media screen and (-webkit-min-device-pixel-ratio:0) {
            input[type=date], input[type=datetime-local], input[type=month], input[type=time] {
                line-height: 38px
            }

                input[type=date].input-sm, input[type=datetime-local].input-sm, input[type=month].input-sm, input[type=time].input-sm {
                    line-height: 34px
                }

                input[type=date].input-lg, input[type=datetime-local].input-lg, input[type=month].input-lg, input[type=time].input-lg {
                    line-height: 52px
                }
        }

        .form-group {
            margin-bottom: 15px
        }

        .checkbox, .radio {
            position: relative;
            display: block;
            margin-top: 10px;
            margin-bottom: 10px
        }

            .checkbox label, .radio label {
                min-height: 24px;
                padding-left: 20px;
                margin-bottom: 0;
                font-weight: 400;
                cursor: pointer
            }

            .checkbox input[type=checkbox], .checkbox-inline input[type=checkbox], .radio input[type=radio], .radio-inline input[type=radio] {
                position: absolute;
                margin-left: -20px
            }

            .checkbox + .checkbox, .radio + .radio {
                margin-top: -5px
            }

        .checkbox-inline, .radio-inline {
            display: inline-block;
            padding-left: 20px;
            margin-bottom: 0;
            vertical-align: middle;
            font-weight: 400;
            cursor: pointer
        }

            .checkbox-inline + .checkbox-inline, .radio-inline + .radio-inline {
                margin-top: 0;
                margin-left: 10px
            }

        fieldset[disabled] input[type=checkbox], fieldset[disabled] input[type=radio], input[type=checkbox].disabled, input[type=checkbox][disabled], input[type=radio].disabled, input[type=radio][disabled] {
            cursor: not-allowed
        }

        .checkbox-inline.disabled, .radio-inline.disabled, fieldset[disabled] .checkbox-inline, fieldset[disabled] .radio-inline {
            cursor: not-allowed
        }

        .checkbox.disabled label, .radio.disabled label, fieldset[disabled] .checkbox label, fieldset[disabled] .radio label {
            cursor: not-allowed
        }

        .form-group-sm .form-control, .input-sm {
            height: 34px;
            padding: 5px 10px;
            font-size: 15px;
            line-height: 1.5;
            border-radius: 4px
        }

        select.form-group-sm .form-control, select.input-sm {
            height: 34px;
            line-height: 34px
        }

        select[multiple].form-group-sm .form-control, select[multiple].input-sm, textarea.form-group-sm .form-control, textarea.input-sm {
            height: auto
        }

        .form-group-lg .form-control, .input-lg {
            height: 52px;
            padding: 10px 16px;
            font-size: 22px;
            line-height: 1.33;
            border-radius: 6px
        }

        select.form-group-lg .form-control, select.input-lg {
            height: 52px;
            line-height: 52px
        }

        select[multiple].form-group-lg .form-control, select[multiple].input-lg, textarea.form-group-lg .form-control, textarea.input-lg {
            height: auto
        }

        @media (min-width:768px) {
            .form-inline .form-group {
                display: inline-block;
                margin-bottom: 0;
                vertical-align: middle
            }

            .form-inline .form-control {
                display: inline-block;
                width: auto;
                vertical-align: middle
            }

            .form-inline .form-control-static {
                display: inline-block
            }

            .form-inline .input-group {
                display: inline-table;
                vertical-align: middle
            }

                .form-inline .input-group .form-control, .form-inline .input-group .input-group-addon, .form-inline .input-group .input-group-btn {
                    width: auto
                }

                .form-inline .input-group > .form-control {
                    width: 100%
                }

            .form-inline .control-label {
                margin-bottom: 0;
                vertical-align: middle
            }

            .form-inline .checkbox, .form-inline .radio {
                display: inline-block;
                margin-top: 0;
                margin-bottom: 0;
                vertical-align: middle
            }

                .form-inline .checkbox label, .form-inline .radio label {
                    padding-left: 0
                }

                .form-inline .checkbox input[type=checkbox], .form-inline .radio input[type=radio] {
                    position: relative;
                    margin-left: 0
                }

            .form-inline .has-feedback .form-control-feedback {
                top: 0
            }
        }

        .form-horizontal .checkbox, .form-horizontal .checkbox-inline, .form-horizontal .radio, .form-horizontal .radio-inline {
            margin-top: 0;
            margin-bottom: 0;
            padding-top: 7px
        }

        .form-horizontal .checkbox, .form-horizontal .radio {
            min-height: 31px
        }

        .form-horizontal .form-group {
            margin-left: -15px;
            margin-right: -15px
        }

        @media (min-width:768px) {
            .form-horizontal .control-label {
                text-align: right;
                margin-bottom: 0;
                padding-top: 7px
            }
        }

        .form-horizontal .has-feedback .form-control-feedback {
            right: 15px
        }

        @media (min-width:768px) {
            .form-horizontal .form-group-lg .control-label {
                padding-top: 14.3px
            }
        }

        @media (min-width:768px) {
            .form-horizontal .form-group-sm .control-label {
                padding-top: 6px
            }
        }

        .btn {
            display: inline-block;
            margin-bottom: 0;
            font-weight: 400;
            text-align: center;
            vertical-align: middle;
            touch-action: manipulation;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            white-space: nowrap;
            padding: 6px 12px;
            font-size: 17px;
            line-height: 1.42857143;
            border-radius: 4px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

            .btn.active.focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn:active:focus, .btn:focus {
                outline: thin dotted;
                outline: 5px auto -webkit-focus-ring-color;
                outline-offset: -2px
            }

            .btn.focus, .btn:focus, .btn:hover {
                color: #333;
                text-decoration: none
            }

            .btn.active, .btn:active {
                outline: 0;
                background-image: none;
                -webkit-box-shadow: inset 0 3px 5px rgba(0,0,0,.125);
                box-shadow: inset 0 3px 5px rgba(0,0,0,.125)
            }

            .btn.disabled, .btn[disabled], fieldset[disabled] .btn {
                cursor: not-allowed;
                pointer-events: none;
                opacity: .65;
                -webkit-box-shadow: none;
                box-shadow: none
            }

        .btn-default {
            color: #333;
            background-color: #e4e4e4;
            border-color: #e4e4e4
        }

            .btn-default.active, .btn-default.focus, .btn-default:active, .btn-default:focus, .btn-default:hover, .open > .dropdown-toggle.btn-default {
                color: #333;
                background-color: #cbcbcb;
                border-color: #c5c5c5
            }

            .btn-default.active, .btn-default:active, .open > .dropdown-toggle.btn-default {
                background-image: none
            }

            .btn-default.disabled, .btn-default.disabled.active, .btn-default.disabled.focus, .btn-default.disabled:active, .btn-default.disabled:focus, .btn-default.disabled:hover, .btn-default[disabled], .btn-default[disabled].active, .btn-default[disabled].focus, .btn-default[disabled]:active, .btn-default[disabled]:focus, .btn-default[disabled]:hover, fieldset[disabled] .btn-default, fieldset[disabled] .btn-default.active, fieldset[disabled] .btn-default.focus, fieldset[disabled] .btn-default:active, fieldset[disabled] .btn-default:focus, fieldset[disabled] .btn-default:hover {
                background-color: #e4e4e4;
                border-color: #e4e4e4
            }

            .btn-default .badge {
                color: #e4e4e4;
                background-color: #333
            }

        .btn-primary {
            color: #fff;
            background-color: #fc6a49;
            border-color: #fc6a49
        }

            .btn-primary.active, .btn-primary.focus, .btn-primary:active, .btn-primary:focus, .btn-primary:hover, .open > .dropdown-toggle.btn-primary {
                color: #fff;
                background-color: #fb4117;
                border-color: #fb390d
            }

            .btn-primary.active, .btn-primary:active, .open > .dropdown-toggle.btn-primary {
                background-image: none
            }

            .btn-primary.disabled, .btn-primary.disabled.active, .btn-primary.disabled.focus, .btn-primary.disabled:active, .btn-primary.disabled:focus, .btn-primary.disabled:hover, .btn-primary[disabled], .btn-primary[disabled].active, .btn-primary[disabled].focus, .btn-primary[disabled]:active, .btn-primary[disabled]:focus, .btn-primary[disabled]:hover, fieldset[disabled] .btn-primary, fieldset[disabled] .btn-primary.active, fieldset[disabled] .btn-primary.focus, fieldset[disabled] .btn-primary:active, fieldset[disabled] .btn-primary:focus, fieldset[disabled] .btn-primary:hover {
                background-color: #fc6a49;
                border-color: #fc6a49
            }

            .btn-primary .badge {
                color: #fc6a49;
                background-color: #fff
            }

        .btn-success {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c
        }

            .btn-success.active, .btn-success.focus, .btn-success:active, .btn-success:focus, .btn-success:hover, .open > .dropdown-toggle.btn-success {
                color: #fff;
                background-color: #449d44;
                border-color: #398439
            }

            .btn-success.active, .btn-success:active, .open > .dropdown-toggle.btn-success {
                background-image: none
            }

            .btn-success.disabled, .btn-success.disabled.active, .btn-success.disabled.focus, .btn-success.disabled:active, .btn-success.disabled:focus, .btn-success.disabled:hover, .btn-success[disabled], .btn-success[disabled].active, .btn-success[disabled].focus, .btn-success[disabled]:active, .btn-success[disabled]:focus, .btn-success[disabled]:hover, fieldset[disabled] .btn-success, fieldset[disabled] .btn-success.active, fieldset[disabled] .btn-success.focus, fieldset[disabled] .btn-success:active, fieldset[disabled] .btn-success:focus, fieldset[disabled] .btn-success:hover {
                background-color: #5cb85c;
                border-color: #4cae4c
            }

            .btn-success .badge {
                color: #5cb85c;
                background-color: #fff
            }

        .btn-info {
            color: #fff;
            background-color: #5bc0de;
            border-color: #46b8da
        }

            .btn-info.active, .btn-info.focus, .btn-info:active, .btn-info:focus, .btn-info:hover, .open > .dropdown-toggle.btn-info {
                color: #fff;
                background-color: #31b0d5;
                border-color: #269abc
            }

            .btn-info.active, .btn-info:active, .open > .dropdown-toggle.btn-info {
                background-image: none
            }

            .btn-info.disabled, .btn-info.disabled.active, .btn-info.disabled.focus, .btn-info.disabled:active, .btn-info.disabled:focus, .btn-info.disabled:hover, .btn-info[disabled], .btn-info[disabled].active, .btn-info[disabled].focus, .btn-info[disabled]:active, .btn-info[disabled]:focus, .btn-info[disabled]:hover, fieldset[disabled] .btn-info, fieldset[disabled] .btn-info.active, fieldset[disabled] .btn-info.focus, fieldset[disabled] .btn-info:active, fieldset[disabled] .btn-info:focus, fieldset[disabled] .btn-info:hover {
                background-color: #5bc0de;
                border-color: #46b8da
            }

            .btn-info .badge {
                color: #5bc0de;
                background-color: #fff
            }

        .btn-warning {
            color: #fff;
            background-color: #f0ad4e;
            border-color: #eea236
        }

            .btn-warning.active, .btn-warning.focus, .btn-warning:active, .btn-warning:focus, .btn-warning:hover, .open > .dropdown-toggle.btn-warning {
                color: #fff;
                background-color: #ec971f;
                border-color: #d58512
            }

            .btn-warning.active, .btn-warning:active, .open > .dropdown-toggle.btn-warning {
                background-image: none
            }

            .btn-warning.disabled, .btn-warning.disabled.active, .btn-warning.disabled.focus, .btn-warning.disabled:active, .btn-warning.disabled:focus, .btn-warning.disabled:hover, .btn-warning[disabled], .btn-warning[disabled].active, .btn-warning[disabled].focus, .btn-warning[disabled]:active, .btn-warning[disabled]:focus, .btn-warning[disabled]:hover, fieldset[disabled] .btn-warning, fieldset[disabled] .btn-warning.active, fieldset[disabled] .btn-warning.focus, fieldset[disabled] .btn-warning:active, fieldset[disabled] .btn-warning:focus, fieldset[disabled] .btn-warning:hover {
                background-color: #f0ad4e;
                border-color: #eea236
            }

            .btn-warning .badge {
                color: #f0ad4e;
                background-color: #fff
            }

        .btn-danger {
            color: #fff;
            background-color: #d9534f;
            border-color: #d43f3a
        }

            .btn-danger.active, .btn-danger.focus, .btn-danger:active, .btn-danger:focus, .btn-danger:hover, .open > .dropdown-toggle.btn-danger {
                color: #fff;
                background-color: #c9302c;
                border-color: #ac2925
            }

            .btn-danger.active, .btn-danger:active, .open > .dropdown-toggle.btn-danger {
                background-image: none
            }

            .btn-danger.disabled, .btn-danger.disabled.active, .btn-danger.disabled.focus, .btn-danger.disabled:active, .btn-danger.disabled:focus, .btn-danger.disabled:hover, .btn-danger[disabled], .btn-danger[disabled].active, .btn-danger[disabled].focus, .btn-danger[disabled]:active, .btn-danger[disabled]:focus, .btn-danger[disabled]:hover, fieldset[disabled] .btn-danger, fieldset[disabled] .btn-danger.active, fieldset[disabled] .btn-danger.focus, fieldset[disabled] .btn-danger:active, fieldset[disabled] .btn-danger:focus, fieldset[disabled] .btn-danger:hover {
                background-color: #d9534f;
                border-color: #d43f3a
            }

            .btn-danger .badge {
                color: #d9534f;
                background-color: #fff
            }

        .btn-lg {
            padding: 10px 16px;
            font-size: 22px;
            line-height: 1.33;
            border-radius: 6px
        }

        .btn-sm {
            padding: 5px 10px;
            font-size: 15px;
            line-height: 1.5;
            border-radius: 4px
        }

        .btn-xs {
            padding: 1px 5px;
            font-size: 15px;
            line-height: 1.5;
            border-radius: 4px
        }

        input[type=button].btn-block, input[type=reset].btn-block, input[type=submit].btn-block {
            width: 100%
        }

        .collapse {
            display: none;
            visibility: hidden
        }

            .collapse.in {
                display: block;
                visibility: visible
            }

        tr.collapse.in {
            display: table-row
        }

        tbody.collapse.in {
            display: table-row-group
        }

        .caret {
            display: inline-block;
            width: 0;
            height: 0;
            margin-left: 2px;
            vertical-align: middle;
            border-top: 4px solid;
            border-right: 4px solid transparent;
            border-left: 4px solid transparent
        }

        .dropdown {
            position: relative
        }

        .dropdown-menu {
            display: none
        }

        .nav {
            margin-bottom: 0;
            padding-left: 0;
            list-style: none
        }

            .nav > li {
                position: relative;
                display: block
            }

                .nav > li > a {
                    position: relative;
                    display: block;
                    padding: 10px 15px
                }

                    .nav > li > a:focus, .nav > li > a:hover {
                        text-decoration: none;
                        background-color: #eee
                    }

                .nav > li.disabled > a {
                    color: #777
                }

                    .nav > li.disabled > a:focus, .nav > li.disabled > a:hover {
                        color: #777;
                        text-decoration: none;
                        background-color: transparent;
                        cursor: not-allowed
                    }

            .nav .open > a, .nav .open > a:focus, .nav .open > a:hover {
                background-color: #eee;
                border-color: #fc6a49
            }

            .nav .nav-divider {
                height: 1px;
                margin: 11px 0;
                overflow: hidden;
                background-color: #e5e5e5
            }

            .nav > li > a > img {
                max-width: none
            }

        .tab-content > .tab-pane {
            display: none;
            visibility: hidden
        }

        .tab-content > .active {
            display: block;
            visibility: visible
        }

        .nav-tabs .dropdown-menu {
            margin-top: -1px;
            border-top-right-radius: 0;
            border-top-left-radius: 0
        }

        .navbar {
            position: relative;
            min-height: 46px;
            margin-bottom: 24px;
            border: 1px solid transparent
        }

        @media (min-width:768px) {
            .navbar {
                border-radius: 4px
            }
        }

        @media (min-width:768px) {
            .navbar-header {
                float: left
            }
        }

        .navbar-collapse {
            overflow-x: visible;
            padding-right: 15px;
            padding-left: 15px;
            border-top: 1px solid transparent;
            box-shadow: inset 0 1px 0 rgba(255,255,255,.1);
            -webkit-overflow-scrolling: touch
        }

            .navbar-collapse.in {
                overflow-y: auto
            }

        @media (min-width:768px) {
            .navbar-collapse {
                width: auto;
                border-top: 0;
                box-shadow: none
            }

                .navbar-collapse.collapse {
                    display: block !important;
                    visibility: visible !important;
                    height: auto !important;
                    padding-bottom: 0;
                    overflow: visible !important
                }

                .navbar-collapse.in {
                    overflow-y: visible
                }

            .navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse, .navbar-static-top .navbar-collapse {
                padding-left: 0;
                padding-right: 0
            }
        }

        .navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse {
            max-height: 340px
        }

        @media (max-device-width:480px) and (orientation:landscape) {
            .navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse {
                max-height: 200px
            }
        }

        .container-fluid > .navbar-collapse, .container-fluid > .navbar-header, .container > .navbar-collapse, .container > .navbar-header {
            margin-right: -15px;
            margin-left: -15px
        }

        @media (min-width:768px) {
            .container-fluid > .navbar-collapse, .container-fluid > .navbar-header, .container > .navbar-collapse, .container > .navbar-header {
                margin-right: 0;
                margin-left: 0
            }
        }

        .navbar-static-top {
            z-index: 1000;
            border-width: 0 0 1px
        }

        @media (min-width:768px) {
            .navbar-static-top {
                border-radius: 0
            }
        }
.navbar-fixed-bottom, .navbar-fixed-top {
            position: fixed;
            right: 0;
            left: 0;
            z-index: 1030
        }

        @media (min-width:768px) {
            .navbar-fixed-bottom, .navbar-fixed-top {
                border-radius: 0
            }
        }

        .navbar-fixed-top {
            top: 0;
            border-width: 0 0 1px
        }

        .navbar-fixed-bottom {
            bottom: 0;
            margin-bottom: 0;
            border-width: 1px 0 0
        }

        .navbar-brand {
            float: left;
            padding: 11px 15px;
            font-size: 22px;
            line-height: 24px;
            height: 46px
        }

            .navbar-brand:focus, .navbar-brand:hover {
                text-decoration: none
            }

            .navbar-brand > img {
                display: block
            }

        @media (min-width:768px) {
            .navbar > .container .navbar-brand, .navbar > .container-fluid .navbar-brand {
                margin-left: -15px
            }
        }

        .navbar-toggle {
            position: relative;
            float: right;
            margin-right: 15px;
            padding: 9px 10px;
            margin-top: 6px;
            margin-bottom: 6px;
            background-color: transparent;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px
        }

            .navbar-toggle:focus {
                outline: 0
            }

            .navbar-toggle .icon-bar {
                display: block;
                width: 22px;
                height: 2px;
                border-radius: 1px
            }

                .navbar-toggle .icon-bar + .icon-bar {
                    margin-top: 4px
                }

        @media (min-width:768px) {
            .navbar-toggle {
                display: none
            }
        }

        .navbar-nav {
            margin: 5.5px -15px
        }

            .navbar-nav > li > a {
                padding-top: 10px;
                padding-bottom: 10px;
                line-height: 24px
            }

        @media (max-width:767px) {
            .navbar-nav .open .dropdown-menu {
                position: static;
                float: none;
                width: auto;
                margin-top: 0;
                background-color: transparent;
                border: 0;
                box-shadow: none
            }

                .navbar-nav .open .dropdown-menu .dropdown-header, .navbar-nav .open .dropdown-menu > li > a {
                    padding: 5px 15px 5px 25px
                }

                .navbar-nav .open .dropdown-menu > li > a {
                    line-height: 24px
                }

                    .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-nav .open .dropdown-menu > li > a:hover {
                        background-image: none
                    }
        }

        @media (min-width:768px) {
            .navbar-nav {
                float: left;
                margin: 0
            }

                .navbar-nav > li {
                    float: left
                }

                    .navbar-nav > li > a {
                        padding-top: 11px;
                        padding-bottom: 11px
                    }
        }

        .navbar-nav > li > .dropdown-menu {
            margin-top: 0;
            border-top-right-radius: 0;
            border-top-left-radius: 0
        }

        .navbar-btn {
            margin-top: 4px;
            margin-bottom: 4px
        }

            .navbar-btn.btn-sm {
                margin-top: 6px;
                margin-bottom: 6px
            }

            .navbar-btn.btn-xs {
                margin-top: 12px;
                margin-bottom: 12px
            }

        .navbar-text {
            margin-top: 11px;
            margin-bottom: 11px
        }

        @media (min-width:768px) {
            .navbar-text {
                float: left;
                margin-left: 15px;
                margin-right: 15px
            }
        }

        @media (min-width:768px) {
            .navbar-left {
                float: left !important
            }

            .navbar-right {
                float: right !important;
                margin-right: -15px
            }

                .navbar-right ~ .navbar-right {
                    margin-right: 0
                }
        }

        .navbar-default {
            background-color: #fff;
            border-color: #ddd
        }

            .navbar-default .navbar-brand {
                color: #333
            }

                .navbar-default .navbar-brand:focus, .navbar-default .navbar-brand:hover {
                    color: #1a1a1a;
                    background-color: transparent
                }

            .navbar-default .navbar-text {
                color: #777
            }

            .navbar-default .navbar-nav > li > a {
                color: #333
            }

                .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover {
                    color: #000;
                    background-color: transparent
                }

            .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:focus, .navbar-default .navbar-nav > .active > a:hover {
                color: #333;
                background-color: #edf7fa
            }

            .navbar-default .navbar-nav > .disabled > a, .navbar-default .navbar-nav > .disabled > a:focus, .navbar-default .navbar-nav > .disabled > a:hover {
                color: #ccc;
                background-color: transparent
            }

            .navbar-default .navbar-toggle {
                border-color: #ddd
            }

                .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {
                    background-color: #ddd
                }

                .navbar-default .navbar-toggle .icon-bar {
                    background-color: #888
                }

            .navbar-default .navbar-collapse, .navbar-default .navbar-form {
                border-color: #ddd
            }

            .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .open > a:hover {
                background-color: #edf7fa;
                color: #333
            }

        @media (max-width:767px) {
            .navbar-default .navbar-nav .open .dropdown-menu > li > a {
                color: #333
            }

                .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover {
                    color: #000;
                    background-color: transparent
                }

            .navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover {
                color: #333;
                background-color: #edf7fa
            }

            .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover {
                color: #ccc;
                background-color: transparent
            }
        }

        .navbar-default .navbar-link {
            color: #333
        }

            .navbar-default .navbar-link:hover {
                color: #000
            }

        .navbar-default .btn-link {
            color: #333
        }

            .navbar-default .btn-link:focus, .navbar-default .btn-link:hover {
                color: #000
            }

            .navbar-default .btn-link[disabled]:focus, .navbar-default .btn-link[disabled]:hover, fieldset[disabled] .navbar-default .btn-link:focus, fieldset[disabled] .navbar-default .btn-link:hover {
                color: #ccc
            }

        .clearfix:after, .clearfix:before, .container-fluid:after, .container-fluid:before, .container:after, .container:before, .form-horizontal .form-group:after, .form-horizontal .form-group:before, .nav:after, .nav:before, .navbar-collapse:after, .navbar-collapse:before, .navbar-header:after, .navbar-header:before, .navbar:after, .navbar:before, .row:after, .row:before {
            content: " ";
            display: table
        }

        .clearfix:after, .container-fluid:after, .container:after, .form-horizontal .form-group:after, .nav:after, .navbar-collapse:after, .navbar-header:after, .navbar:after, .row:after {
            clear: both
        }

        .center-block {
            display: block;
            margin-left: auto;
            margin-right: auto
        }

        .pull-right {
            float: right !important
        }

        .pull-left {
            float: left !important
        }

        .hide {
            display: none !important
        }

        .show {
            display: block !important
        }

        .invisible {
            visibility: hidden
        }

        .text-hide {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0
        }

        .hidden {
            display: none !important;
            visibility: hidden !important
        }

        @-ms-viewport {
            width: device-width
        }

        .visible-lg, .visible-md, .visible-sm, .visible-xs {
            display: none !important
        }

        .visible-lg-block, .visible-lg-inline, .visible-lg-inline-block, .visible-md-block, .visible-md-inline, .visible-md-inline-block, .visible-sm-block, .visible-sm-inline, .visible-sm-inline-block, .visible-xs-block, .visible-xs-inline, .visible-xs-inline-block {
            display: none !important
        }

        @media (max-width:767px) {
            .visible-xs {
                display: block !important
            }

            table.visible-xs {
                display: table
            }

            tr.visible-xs {
                display: table-row !important
            }

            td.visible-xs, th.visible-xs {
                display: table-cell !important
            }
        }

        @media (max-width:767px) {
            .visible-xs-block {
                display: block !important
            }
        }

        @media (max-width:767px) {
            .visible-xs-inline {
                display: inline !important
            }
        }

        @media (max-width:767px) {
            .visible-xs-inline-block {
                display: inline-block !important
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .visible-sm {
                display: block !important
            }

            table.visible-sm {
                display: table
            }

            tr.visible-sm {
                display: table-row !important
            }

            td.visible-sm, th.visible-sm {
                display: table-cell !important
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .visible-sm-block {
                display: block !important
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .visible-sm-inline {
                display: inline !important
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .visible-sm-inline-block {
                display: inline-block !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .visible-md {
                display: block !important
            }

            table.visible-md {
                display: table
            }

            tr.visible-md {
                display: table-row !important
            }

            td.visible-md, th.visible-md {
                display: table-cell !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .visible-md-block {
                display: block !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .visible-md-inline {
                display: inline !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .visible-md-inline-block {
                display: inline-block !important
            }
        }

        @media (min-width:1200px) {
            .visible-lg {
                display: block !important
            }

            table.visible-lg {
                display: table
            }

            tr.visible-lg {
                display: table-row !important
            }

            td.visible-lg, th.visible-lg {
                display: table-cell !important
            }
        }

        @media (min-width:1200px) {
            .visible-lg-block {
                display: block !important
            }
        }

        @media (min-width:1200px) {
            .visible-lg-inline {
                display: inline !important
            }
        }

        @media (min-width:1200px) {
            .visible-lg-inline-block {
                display: inline-block !important
            }
        }

        @media (max-width:767px) {
            .hidden-xs {
                position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .hidden-sm {
                display: none !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .hidden-md {
                display: none !important
            }
        }

        @media (min-width:1200px) {
            .hidden-lg {
                display: none !important
            }
        }

        @media (max-width:399px) {
            .container {
                padding-left: 10px;
                padding-right: 10px
            }

                .container > .navbar-collapse, .container > .navbar-header {
                    margin-left: -10px;
                    margin-right: -10px
                }

            .row {
                margin-left: -10px;
                margin-right: -10px
            }

            .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
                padding-left: 10px;
                padding-right: 10px
            }
        }

        .spacer-xs-2 {
            padding: 1px 0
        }

        .spacer-xs-6 {
            padding: 3px 0
        }

        .spacer-xs-10 {
            padding: 5px 0
        }

        .spacer-xs-16 {
            padding: 8px 0
        }

        .spacer-xs-20 {
            padding: 10px 0
        }

        .spacer-xs-30 {
            padding: 15px 0
        }

        .spacer-xs-40 {
            padding: 20px 0
        }

        .spacer-xs-80 {
            padding: 40px 0
        }

        .spacer-xs-120 {
            padding: 60px 0
        }

        .spacer-xs-40-80 {
            padding: 20px 0
        }

        @media (min-width:400px) {
            .spacer-xs-0-20 {
                padding: 2px 0
            }

            .spacer-xs-0-80 {
                padding: 8px 0
            }

            .spacer-xs-40-80 {
                padding: 24px 0
            }
        }

        @media (min-width:470px) {
            .spacer-xs-0-20 {
                padding: 4px 0
            }

            .spacer-xs-0-80 {
                padding: 16px 0
            }

            .spacer-xs-40-80 {
                padding: 28px 0
            }
        }

        @media (min-width:540px) {
            .spacer-xs-0-20 {
                padding: 6px 0
            }

            .spacer-xs-0-80 {
                padding: 24px 0
            }

            .spacer-xs-40-80 {
                padding: 32px 0
            }
        }

        @media (min-width:610px) {
            .spacer-xs-0-20 {
                padding: 8px 0
            }

            .spacer-xs-0-80 {
                padding: 32px 0
            }

            .spacer-xs-40-80 {
                padding: 36px 0
            }
        }

        @media (min-width:680px) {
            .spacer-xs-0-20 {
                padding: 10px 0
            }

            .spacer-xs-0-80 {
                padding: 40px 0
            }

            .spacer-xs-40-80 {
                padding: 40px 0
            }
        }

        @media (min-width:768px) {
            .spacer-sm-10 {
                padding: 5px 0
            }

            .spacer-sm-20 {
                padding: 10px 0
            }

            .spacer-sm-30 {
                padding: 15px 0
            }

            .spacer-sm-40 {
                padding: 20px 0
            }

            .spacer-sm-60 {
                padding: 30px 0
            }

            .spacer-sm-80 {
                padding: 40px 0
            }

            .spacer-sm-100 {
                padding: 50px 0
            }
        }

        @media (min-width:992px) {
            .spacer-md-10 {
                padding: 5px 0
            }

            .spacer-md-20 {
                padding: 10px 0
            }

            .spacer-md-40 {
                padding: 20px 0
            }

            .spacer-md-60 {
                padding: 30px 0
            }

            .spacer-md-70 {
                padding: 35px 0
            }

            .spacer-md-80 {
                padding: 40px 0
            }

            .spacer-md-100 {
                padding: 50px 0
            }

            .spacer-md-120 {
                padding: 60px 0
            }

            .spacer-md-140 {
                padding: 70px 0
            }
        }

        @media (min-width:1200px) {
            .spacer-lg-30 {
                padding: 15px 0
            }
        }

        .btn {
            font-size: 14px;
            padding: 9px 17px;
            border-radius: 999px
        }

        .btn-secondary {
            color: #333;
            background-color: #fff;
            border-color: #6bc4cd
        }

            .btn-secondary.active, .btn-secondary.focus, .btn-secondary:active, .btn-secondary:focus, .btn-secondary:hover, .open > .dropdown-toggle.btn-secondary {
                color: #333;
                background-color: #e6e6e6;
                border-color: #3fb0bb
            }

            .btn-secondary.active, .btn-secondary:active, .open > .dropdown-toggle.btn-secondary {
                background-image: none
            }

            .btn-secondary.disabled, .btn-secondary.disabled.active, .btn-secondary.disabled.focus, .btn-secondary.disabled:active, .btn-secondary.disabled:focus, .btn-secondary.disabled:hover, .btn-secondary[disabled], .btn-secondary[disabled].active, .btn-secondary[disabled].focus, .btn-secondary[disabled]:active, .btn-secondary[disabled]:focus, .btn-secondary[disabled]:hover, fieldset[disabled] .btn-secondary, fieldset[disabled] .btn-secondary.active, fieldset[disabled] .btn-secondary.focus, fieldset[disabled] .btn-secondary:active, fieldset[disabled] .btn-secondary:focus, fieldset[disabled] .btn-secondary:hover {
                background-color: #fff;
                border-color: #6bc4cd
            }

            .btn-secondary .badge {
                color: #fff;
                background-color: #333
            }

        .navbar {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            margin-bottom: 0;
            border-width: 0 0 1px
        }

            .navbar .navbar-brand {
                padding-top: 14px;
                padding-bottom: 11px
            }

        @media (max-width:399px) {
            .navbar .navbar-brand {
                padding-left: 10px
            }
        }

        .navbar .navbar-brand img {
            height: 21px;
            max-width: 116px;
            max-height: 100%
        }

        .navbar .navbar-brand .short {
            display: none
        }

        .navbar .navbar-toggle {
            border: none;
            border-radius: 0;
            padding: 14.5px;
            margin: 0 .5px 0 0
        }

            .navbar .navbar-toggle .icon-bar {
                width: 24px;
                height: 3px;
                border-radius: 3px;
                background-color: #949494
            }

            .navbar .navbar-toggle:focus, .navbar .navbar-toggle:hover {
                background: 0 0
            }

            .navbar .navbar-toggle:not(.collapsed) .icon-bar {
                position: relative;
                width: 20px;
                margin-left: 2px
            }

                .navbar .navbar-toggle:not(.collapsed) .icon-bar:nth-child(1) {
                    top: 7px;
                    transform: rotate(45deg)
                }

                .navbar .navbar-toggle:not(.collapsed) .icon-bar:nth-child(2) {
                    visibility: hidden
                }

                .navbar .navbar-toggle:not(.collapsed) .icon-bar:nth-child(3) {
                    bottom: 7px;
                    transform: rotate(-45deg)
                }

        @media (min-width:768px) {
            .navbar .navbar-nav > li > a {
                min-width: 54px;
                text-align: center
            }
        }

        .navbar .navbar-nav > li > a .pf-icon {
            fill: #949494
        }

        @media (min-width:768px) {
            .navbar .navbar-nav > li.sm-80 > a {
                min-width: 80px
            }
        }

        @media (min-width:768px) {
            .navbar .navbar-nav > li.sm-120 > a {
                min-width: 120px
            }
        }

        .navbar .navbar-nav .dropdown.open .dropdown-toggle .caret {
            transform: rotate(180deg)
        }

        @media (max-width:767px) {
            .navbar .navbar-nav .dropdown-toggle .caret {
                position: absolute;
                top: 0;
                bottom: 0;
                margin: auto 0;
                right: 15px
            }
        }

        @media (max-width:399px) {
            .navbar .navbar-nav .dropdown-toggle .caret {
                right: 10px
            }
        }

        .navbar .navbar-nav .dropdown-menu > li > a {
            padding-top: 8px;
            padding-bottom: 8px
        }

        .navbar .navbar-nav > .open > a, .navbar .navbar-nav > .open > a:focus, .navbar .navbar-nav > .open > a:hover {
            color: #fff;
            background-color: #6bc4cd
        }

        .navbar .navbar-nav .dropdown-more {
            height: 46px
        }

            .navbar .navbar-nav .dropdown-more .icon-bar {
                width: 21px;
                height: 3px;
                border-radius: 3px;
                background-color: #949494;
                margin: 4px auto 0 auto
            }

        .navbar .navbar-nav > .open > a.dropdown-more .icon-bar {
            position: relative;
            width: 20px;
            margin-left: 2px;
            background-color: #fff
        }

            .navbar .navbar-nav > .open > a.dropdown-more .icon-bar:nth-child(1) {
                top: 7px;
                transform: rotate(45deg)
            }

            .navbar .navbar-nav > .open > a.dropdown-more .icon-bar:nth-child(2) {
                visibility: hidden
            }

            .navbar .navbar-nav > .open > a.dropdown-more .icon-bar:nth-child(3) {
                bottom: 7px;
                transform: rotate(-45deg)
            }

        .navbar .logged-out .navbar-nav {
            margin: 0
        }

        @media (min-width:768px) {
            .navbar .logged-out .navbar-nav {
                margin: 0 -15px
            }
        }

        .navbar .logged-out .navbar-nav > li {
            float: left
        }

            .navbar .logged-out .navbar-nav > li > a {
                padding-top: 11px;
                padding-bottom: 11px
            }

        @media (max-width:359px) {
            .navbar .logged-out .navbar-nav > li > a {
                padding-left: 10px;
                padding-right: 10px
            }
        }

        .navbar .logged-out .navbar-nav > li > a .btn {
            padding: 4px 16px;
            margin: -8px 0 -6px 0
        }

        @media (min-width:768px) {
            .navbar .logged-out .navbar-nav > li > a .btn {
                min-width: 120px
            }
        }

        .navbar .navbar-nav > .active > a.mobile-signup {
            color: #fc6a49;
            font-weight: 500
        }

        .navbar .vote.dropdown-menu .vote-on {
            display: none
        }

        .navbar.navbar-placeholder {
            visibility: hidden
        }

        .navbar .navbar-collapse.collapse-instant-js {
            -webkit-transition-duration: 0s;
            transition-duration: 0s
        }

        .navbar .back-link {
            float: left;
            padding: 11px 0 0 15px
        }

            .navbar .back-link .pf-icon.fa-angle-left {
                width: 16px;
                height: 16px;
                margin: -3px -.5px 0 -5px;
                fill: #fc6a49
            }

        body, html {
            height: 100%
        }

        @supports (padding-top:env(safe-area-inset-top)) {
            .ios-app body {
                padding-top: env(safe-area-inset-top)
            }
        }

        .ios-app .tab-bar-spacer {
            height: 53px
        }

        @media (min-height:750px) {
            .ios-app .tab-bar-spacer {
                height: 57px !important
            }
        }

        @supports (height:env(safe-area-inset-bottom)) {
            .ios-app .tab-bar-spacer {
                height: calc(53px + env(safe-area-inset-bottom))
            }

            @media (min-height:750px) {
                .ios-app .tab-bar-spacer {
                    height: calc(57px + env(safe-area-inset-bottom)) !important
                }
            }
        }

        .ios-app .m-safari-spacer {
            display: none
        }

        body.home .btn-get-started {
            font-size: 17px;
            font-weight: 500;
            padding: 18px 0;
            width: 200px
        }

        @media (max-width:767px) {
            body.home .btn-get-started {
                width: 100%
            }
        }

        body.home .btn-get-started .pf-icon.pf-spin {
            margin: -5px 0
        }

        body.home h6.already-using {
            font-weight: 400;
            margin: 15px 0
        }

        body.home .row-main {
            margin-top: 20px
        }

        @media (min-width:768px) {
            body.home .row-main {
                margin-top: 70px
            }
        }

        @media (min-width:992px) {
            body.home .row-main {
                margin-top: 100px
            }
        }

        @media (min-width:992px) and (max-height:800px) {
            body.home .row-main {
                margin-top: 50px
            }
        }

        @media (min-width:992px) and (max-height:700px) {
            body.home .row-main {
                margin-top: 35px
            }
        }

        @media (min-width:992px) {
            body.home .row-main .col-left {
                padding-right: 30px
            }

            body.home .row-main .col-right {
                padding-left: 30px
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            body.home .row-main .col-right {
                padding: 0 20px 0 50px
            }
        }

        body.home .row-main h1 {
            font-family: Raleway,sans-serif;
            font-weight: 500;
            font-size: 38px;
            line-height: 1.2;
            margin: 15px 0
        }

        body.home .row-main h4 {
            color: #555;
            font-size: 20px;
            font-weight: 400;
            line-height: 1.5
        }

            body.home .row-main h4 .business {
                font-weight: 500;
                color: #d5581f
            }

            body.home .row-main h4 .social {
                font-weight: 500;
                color: #259260
            }

            body.home .row-main h4 .dating {
                font-weight: 500;
                color: #d5581f
            }

        body.home .row-main .test-box {
            max-width: 327px;
            margin: 0 auto;
            padding-top: 0
        }

        @media (max-height:670px) {
            body.home .row-main .test-box {
                max-width: 300px
            }
        }

        @media (max-height:630px) {
            body.home .row-main .test-box {
                max-width: 270px
            }
        }

        body.home .row-main .test-box .test-box-frame {
            padding: 0;
            margin: 0;
            border-bottom: none
        }

        @media (min-width:768px) {
            body.home .row-main .test-box .test-box-frame .test-box-row {
                margin: 17px 0
            }

                body.home .row-main .test-box .test-box-frame .test-box-row.test-box-top-row {
                    margin: 20px 0
                }

                    body.home .row-main .test-box .test-box-frame .test-box-row.test-box-top-row .test-category {
                        font-size: 14px
                    }

                    body.home .row-main .test-box .test-box-frame .test-box-row.test-box-top-row .test-vote-count {
                        font-size: 18px
                    }

                        body.home .row-main .test-box .test-box-frame .test-box-row.test-box-top-row .test-vote-count .test-votes-word {
                            font-size: 15px;
                            margin-top: 2.5px
                        }

                body.home .row-main .test-box .test-box-frame .test-box-row.test-rank-row .test-rank-bar {
                    height: 11px
                }

                body.home .row-main .test-box .test-box-frame .test-box-row.test-rank-row .test-trait-name {
                    font-size: 14px
                }

                body.home .row-main .test-box .test-box-frame .test-box-row.test-rank-row .test-trait-value {
                    font-size: 15px
                }
        }

        @media (max-width:767px) {
            body.home .row-main h1 {
                margin: 15px 0 30px 0;
                text-align: center
            }

            body.home .row-main .col-left {
                padding: 0 10px
            }

                body.home .row-main .col-left .test-box-frame {
                    background: #ededed;
                    padding: 10px;
                    margin: 0
                }

                    body.home .row-main .col-left .test-box-frame .test-box-row.test-box-top-row {
                        background: #fff
                    }

                    body.home .row-main .col-left .test-box-frame .test-box-row.test-rank-row .test-rank-bar {
                        background: #fff
                    }

                    body.home .row-main .col-left .test-box-frame .test-box-row:last-child {
                        margin-bottom: 2px
                    }

            body.home .row-main .col-right {
                padding: 0 25px
            }

                body.home .row-main .col-right h4 {
                    margin-top: 24px;
                    font-size: 16px
                }

                    body.home .row-main .col-right h4.stop-guessing {
                        margin-top: 0
                    }

                body.home .row-main .col-right .btn-get-started {
                    font-size: 16px;
                    padding: 10px 12px
                }

            body.home .row-main.new-col-padding .col-left {
                padding: 0 15px
            }

            body.home .row-main.new-col-padding .col-right {
                padding: 0 20px 0 10px
            }
        }

        @media (max-width:767px) and (max-width:409px) {
            body.home .row-main h1 {
                line-height: 1.1
            }
        }

        @media (max-width:767px) and (max-width:409px) {
            body.home .row-main .col-right h4 {
                line-height: 1.4
            }
        }

        @media (max-width:767px) and (max-width:359px) {
            body.home .row-main h1 {
                margin: 5px 0 30px 0;
                font-size: 32px
            }

            body.home .row-main .col-left .test-box-frame {
                padding: 6px
            }

            body.home .row-main .col-right {
                padding: 0 12px
            }

                body.home .row-main .col-right h4 {
                    margin-top: 16px
                }

            body.home .row-main.new-col-padding .col-left {
                padding: 0 10px
            }

            body.home .row-main.new-col-padding .col-right {
                padding: 0 10px 0 5px
            }
        }

        body.home .row-how-it-works h2 {
            text-align: center
        }

        body.home .row-how-it-works h3 {
            text-align: center;
            line-height: 1.5
        }

            body.home .row-how-it-works h3:first-child {
                margin-top: 0
            }

        body.home .row-how-it-works p {
            color: #555;
            line-height: 1.5
        }

        body.home .social-proof img.as-seen-in {
            max-width: 100%
        }

        [v-cloak] {
            display: none !important
        }

        .console {
            display: none
        }

        .test-box {
            padding-top: 10px;
            margin-bottom: 10px;
            font-weight: 500;
            text-align: center;
            touch-action: manipulation
        }

            .test-box .test-box-frame {
                padding: 10px 11px 0 10px;
                margin: -10px -10px -1px -10px;
                border: 1px solid transparent;
                border-bottom-color: #e0e0e0
            }

        @media (max-width:399px) {
            .test-box .test-box-frame {
                padding: 6px 7px 0 6px;
                margin: -6px -6px -1px -6px
            }
        }

        .test-box .test-box-frame .test-photo-frame {
            position: relative;
            border: 1px solid #e0e0e0;
            border-radius: 2px;
            overflow: hidden
        }

            .test-box .test-box-frame .test-photo-frame .test-photo-sizer {
                padding: 50% 0
            }

            .test-box .test-box-frame .test-photo-frame img {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                margin: auto;
                max-width: 100%;
                max-height: 100%
            }

            .test-box .test-box-frame .test-photo-frame .test-state-label {
                position: absolute;
                left: 0;
                right: 0;
                text-align: center;
                top: 50%
            }

                .test-box .test-box-frame .test-photo-frame .test-state-label .active-rate {
                    display: inline-block;
                    background: rgba(0,0,0,.5);
                    color: #eee;
                    font-weight: 500;
                    font-size: 14px;
                    letter-spacing: .1em;
                    text-transform: uppercase;
                    padding: 0;
                    box-shadow: 0 0 3px 3px rgba(0,0,0,.5)
                }

                    .test-box .test-box-frame .test-photo-frame .test-state-label .active-rate .rate-gauge {
                        vertical-align: bottom;
                        width: 70px;
                        height: 70px;
                        margin-bottom: -11px
                    }

        @media (max-width:767px) {
            .test-box .test-box-frame .test-photo-frame .test-state-label .active-rate .rate-gauge {
                width: 50px;
                height: 50px;
                margin-bottom: -7px
            }
        }

        @media (max-width:359px) {
            .test-box .test-box-frame .test-photo-frame .test-state-label .active-rate {
                font-size: 12px
            }

                .test-box .test-box-frame .test-photo-frame .test-state-label .active-rate .rate-gauge {
                    width: 40px;
                    height: 40px;
                    margin-bottom: -6px
                }
        }

        .test-box .test-box-frame .test-box-row {
            position: relative;
            white-space: nowrap;
            margin: 13px 0
        }

            .test-box .test-box-frame .test-box-row:last-child {
                margin-bottom: 28px
            }

        @media (max-width:767px) {
            .test-box .test-box-frame .test-box-row {
                margin: 8px 0
            }

                .test-box .test-box-frame .test-box-row:last-child {
                    margin-bottom: 19px
                }
        }

        .test-box .test-box-frame .test-box-row.test-box-top-row {
            margin: 16px 0;
            background: #f0f8fa;
            border-radius: 3px;
            text-transform: uppercase
        }

        .test-box .test-box-frame .test-box-row .test-category {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50%;
            background: #393f4f;
            padding: 6.5px 0;
            border-radius: 3px;
            color: #fff !important;
            font-size: 11px;
            letter-spacing: .15em;
            text-transform: uppercase
        }

        @media (max-width:409px) {
            .test-box .test-box-frame .test-box-row .test-category.business {
                letter-spacing: .1em
            }
        }

        @media (max-width:359px) {
            .test-box .test-box-frame .test-box-row .test-category.business {
                letter-spacing: .05em
            }
        }

        .test-box .test-box-frame .test-box-row .test-vote-count {
            float: right;
            width: 48%;
            padding: 4px 0;
            font-size: 14px;
            white-space: nowrap
        }

            .test-box .test-box-frame .test-box-row .test-vote-count .test-votes-word {
                display: inline-block;
                margin-left: 2px;
                margin-top: 2px;
                color: #a3a3a3;
                font-size: 11px;
                letter-spacing: .15em;
                text-transform: uppercase;
                vertical-align: top
            }

        @media (max-width:449px) {
            .test-box .test-box-frame .test-box-row .test-vote-count .test-votes-word {
                margin-top: 2.5px
            }
        }

        @media (max-width:359px) {
            .test-box .test-box-frame .test-box-row .test-vote-count .test-votes-word {
                margin-top: 3px
            }
        }

        @media (max-width:767px) {
            #my-tests .test-box .test-box-frame .test-box-row.show-max-votes .test-category {
                width: 45%
            }

            #my-tests .test-box .test-box-frame .test-box-row.show-max-votes .test-vote-count {
                width: 54%
            }
        }

        @media (max-width:449px) {
            #my-tests .test-box .test-box-frame .test-box-row.show-max-votes .test-vote-count .test-votes-word {
                letter-spacing: .1em
            }

            #my-tests .test-box .test-box-frame .test-box-row.show-max-votes .test-vote-count.ac-min-5-digits .test-votes-word {
                display: none
            }
        }

        @media (max-width:409px) {
            #my-tests .test-box .test-box-frame .test-box-row.show-max-votes .test-category {
                width: 49%
            }

            #my-tests .test-box .test-box-frame .test-box-row.show-max-votes .test-vote-count {
                width: 50%
            }

                #my-tests .test-box .test-box-frame .test-box-row.show-max-votes .test-vote-count .test-votes-word {
                    display: none
                }
        }

        @media (max-width:359px) {
            .test-box .test-box-frame .test-box-row .test-vote-count .test-votes-word {
                letter-spacing: .05em;
                margin-left: 0
            }
        }

        .test-box .test-box-frame .test-box-row.test-rank-row {
            display: block;
            background: 0 0
        }

            .test-box .test-box-frame .test-box-row.test-rank-row .test-rank-bar {
                position: relative;
                height: 8px;
                background: #f0f8fa;
                border-radius: 5px;
                overflow: hidden
            }

                .test-box .test-box-frame .test-box-row.test-rank-row .test-rank-bar .test-rank-bar-fill {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    border-radius: 5px
                }

            .test-box .test-box-frame .test-box-row.test-rank-row .test-trait-name {
                float: left;
                font-size: 11px;
                letter-spacing: .15em;
                text-transform: uppercase;
                margin-left: .5px;
                margin-top: 6px
            }

            .test-box .test-box-frame .test-box-row.test-rank-row .test-trait-value {
                position: relative;
                float: right;
                color: #000;
                font-size: 12px;
                margin-right: .5px;
                margin-top: 5px
            }

            .test-box .test-box-frame .test-box-row.test-rank-row.competent .test-rank-bar-fill {
                background-color: #547fd6
            }

            .test-box .test-box-frame .test-box-row.test-rank-row.likable .test-rank-bar-fill {
                background-color: #f4b607
            }

            .test-box .test-box-frame .test-box-row.test-rank-row.influential .test-rank-bar-fill {
                background-color: #1eb771
            }

            .test-box .test-box-frame .test-box-row.test-rank-row.confident .test-rank-bar-fill {
                background-color: #f38634
            }

            .test-box .test-box-frame .test-box-row.test-rank-row.authentic .test-rank-bar-fill {
                background-color: #1eb771
            }

            .test-box .test-box-frame .test-box-row.test-rank-row.fun .test-rank-bar-fill {
                background-color: #9050b7
            }

            .test-box .test-box-frame .test-box-row.test-rank-row.smart .test-rank-bar-fill {
                background-color: #1eb771
            }

            .test-box .test-box-frame .test-box-row.test-rank-row.trustworthy .test-rank-bar-fill {
                background-color: #547fd6
            }

            .test-box .test-box-frame .test-box-row.test-rank-row.attractive .test-rank-bar-fill {
                background-color: #ef6324
            }

        @media (max-width:449px) {
            .test-box .test-box-frame .test-box .test-box-frame .test-box-row .test-category {
                font-size: 10px
            }

            .test-box .test-box-frame .test-box .test-box-frame .test-box-row .test-vote-count {
                font-size: 13px
            }

                .test-box .test-box-frame .test-box .test-box-frame .test-box-row .test-vote-count .test-votes-word {
                    font-size: 10px
                }
        }

        @media (max-width:359px) {
            .test-box .test-box-frame .test-box .test-box-frame .test-box-row.show-max-votes .test-category {
                width: 41%
            }

            .test-box .test-box-frame .test-box .test-box-frame .test-box-row.show-max-votes .test-vote-count {
                width: 58%
            }

            .test-box .test-box-frame .test-box .test-box-frame .test-box-row .test-category {
                font-size: 9px
            }

            .test-box .test-box-frame .test-box .test-box-frame .test-box-row .test-vote-count {
                font-size: 12px
            }

                .test-box .test-box-frame .test-box .test-box-frame .test-box-row .test-vote-count .test-votes-word {
                    font-size: 9px
                }

            .test-box .test-box-frame .test-box .test-box-frame .test-box-row.test-rank-row .test-trait-name {
                font-size: 10px
            }

            .test-box .test-box-frame .test-box .test-box-frame .test-box-row.test-rank-row .test-trait-value {
                font-size: 11px
            }
        }

        .rawbut {
            font-size: 1.3rem;
            padding: 1em 2em;
            margin: 0em;
            display: inline-block;
            border-radius: 4em;
            border: solid transparent;
            background: #ff6064;
            color: #ff6064;
            background-clip: border-box, text;
            background-position: center center;
            box-shadow: inset 0 0 0 100px  #dbfcff;
            background-size: 110% 110%;
        }
    </style>
    <script defer src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
    <script>
        WebFontConfig = {google: {families: ['Raleway:700','Roboto:400,500']}};
    </script>
    <script>
        pfDocumentReady(function() {
        var link = document.createElement('link');
        link.setAttribute('rel', 'stylesheet');
        link.setAttribute('type', 'text/css');
        window.postCssFunctions = [];
        link.onload = function() {
        for (var i in window.postCssFunctions) {
        window.postCssFunctions[i]();
        }
        window.postCssFunctions = null;
        };
        link.setAttribute('href', 'https://d1r8m46oob3o9u.cloudfront.net/css/2021-04-22-13-42-27/www-all.min.css');
        document.getElementsByTagName('head')[0].appendChild(link);
        window.v.$mount('#vue');
        });
    </script>
</head>

<body class="home">
    <div class="navbar navbar-placeholder"></div>      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

        <div class="container">
            <div class="navbar-header logged-out" style="float:none">
                <h1 style="margin:0">
                    <a class="navbar-brand" href="/">
                        <img class="long" src="https://drive.google.com/thumbnail?id=18UhUQt-nQ5rLlXHOyL0Ga5dBb6eXmD5F" alt="FaceOff">
                        <img class="short" src="https://drive.google.com/thumbnail?id=1voMm2-SjUXa1mz47W_2NuDXjR4YvwBY5" alt="FaceOff">
                    </a>
                </h1>
                <ul class="nav navbar-nav pull-right">
                    <li class="sm-80">

                    </li>
                    <li class="sm-80 hidden-xs">

                    </li>
                    <li>
                        <a href="http://www.faceoff.ml/logout.php">
                            <div class="btn btn-secondary">Logout</div>
                        </a>
                    </li>
                    <li>
                            <a href="http://www.faceoff.ml/mytest.php">
                            <div class="btn rawbut">My Tests!</div>
                            </a>
                    </li>
                    <li class="hidden-xs">
                        <a href="http://www.faceoff.ml/loggedinupload.php">
                            <div class="btn btn-primary">Test My Photo</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
       <div class="row row-main new-col-padding">
                <h1><p style="text-align:center;">Your Opinion Matters !</p></h1>
                <div class="col-xs-6 col-xs-push-6 col-sm-7 col-sm-push-5 col-md-7 col-md-push-5 col-lg-6 col-lg-push-6 col-right">
                    <div class="spacer-sm-20 spacer-md-60"></div>
                    <div class="spacer-sm-20"></div>
                    <div class="spacer-xs-2 spacer-sm-30"></div>
                </div>
                <div>
                    <div class="demo-results-row">
                        <div class="test-box">
                            <div class="test-box-frame">
                                <div >
                                    <div class="test-photo-sizer"></div>


                                    <?php
                                    session_start();
                                    include("db-config.php");
                                    if (!isset($_SESSION["email"])) {
                                    header("location: login.php");
                                    }
                                    $useremail=$_SESSION["email"];
                                    $table='globalimages';
                                    $result=$mysqli->query("SELECT * FROM $table where not useremail='$useremail' order by votecount ASC limit 1 ") or die($mysqli->error);
                                    while($data = $result->fetch_assoc()){
                                    $trial= $data['imagename'];
                                    $usertitle=$data['usertitle'];
                                    ?>
                                    <img v-if="0" src="<?php echo 'global_images/'.$trial;?>" width="250px" height="250px">
                                    
                                </div>


                                    


                                <div class="test-box-row test-box-top-row clearfix">
                                    <div v-if="0" class="test-category dating">Bussiness</div>
                                    <div v-cloak class="test-category" :class="topTest.category.toLowerCase()" v-text="topTest.category"></div>
                                    <div class="test-vote-count">
                                        <span class="test-votes-word"><?php echo $usertitle;?></span>
                                    </div>
                                </div>
                                <div v-cloak v-for="(trait,t) in Categories[topTest.category].traits" :class="trait.className" class="test-box-row test-rank-row clearfix">
                                    <div class="test-rank-bar"><div class="test-rank-bar-fill" :style="{width:10*topTest.ratings[t]+'%'}"></div></div>
                                    <div class="test-trait-name" v-text="trait.displayName"></div>
                                    <div class="test-trait-value" v-text="topTest.ratings[t].toFixed(1)"></div>
                                </div>
                                <div v-if="0" class="test-box-row test-rank-row clearfix smart">
                                    <div class="test-trait-name">Likable </div>
                                    <div>
                                        <form action="page-2.php" method="POST" id="allsubmit">
                                            <input  class="range" type="range" name="likablerange" value="0" min="0" max="10" link-to="allsubmit"/>
                                </div>

                                <div v-if="0" class="test-box-row test-rank-row clearfix trustworthy">
                                    <div class="test-trait-name">Influential </div>
                                    <div>
                                            <input  class="range" type="range" name="influentialrange"value="0" min="0" max="10"  link-to="allsubmit"/>
                                </div>

                                <div v-if="0" class="test-box-row test-rank-row clearfix attractive">
                                    <div class="test-trait-name">Competent </div>
                                    <div>
                                            <input  class="range" type="range" name="competentrange"value="0" min="0" max="10" link-to="allsubmit"/>
                                    </div>
                                </div>

                             
                            <input type="submit" name="allsubmit"  value="Submit Vote!"/>
                        </form>
                                <?php
                                   
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            





<!-- <td><img src="<?php echo 'global_images/'.$trial;?>" width="380px" height="250px" /></td>-->
 
        </body>
</div>
</div>
      <footer>
            <div class="footer-content container">
                

                    <div class="col-sm-3 hidden-xs">
                        <img src="https://drive.google.com/thumbnail?id=1F3Cnfb83EbV_Nf7hgU2yNxiEI_qaPfR6"href="http://www.faceoff.ml" alt="Faceoff" />
                    </div>

                    <div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-0 link-list">
                        <div class="col-head">Account</div>
                                            <a href="http://www.faceoff.ml/signup.php">Sign Up</a>
                        <a href="http://www.faceoff.ml/login.php">Login</a>
                                        </div>

                    <div class="col-xs-6 col-sm-3 link-list">
                        <div class="col-head">Resources</div>
                        <a href="http://www.faceoff.ml/">Home</a>
                        <a href="http://www.faceoff.ml/about.html">About Us</a>
                    </div>


                    <div class="clearfix"></div>
                    <div class="visible-xs-block logo-xs">
                        <img src="https://drive.google.com/thumbnail?id=1F3Cnfb83EbV_Nf7hgU2yNxiEI_qaPfR6" href="http://www.faceoff.ml" alt="Faceoff" />
                    </div>

                    <div>
                        <br />
                        <a href="http://www.faceoff.ml/terms.html">Terms of Use</a>
                        <a href="http://www.faceoff.ml/privacy_policy.html">Privacy Policy</a><br />
                        &copy; 2021 FaceOff.ml
                        <br />
                        &reg; Contact : <em> admin-sumit@faceoff.ml </em>
                        
                    </div>

                </div>            </div>        </footer>
    <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam-cell.nr-data.net","licenseKey":"ecbe44911a","applicationID":"35958959","transactionName":"M1MHZUZZW0RWVURZDQoZMENdF0VFXkBRUxtJRgpdXVtMGUdeQA==","queueTime":0,"applicationTime":44,"atts":"HxQEEw5DSEo=","errorBeacon":"bam-cell.nr-data.net","agent":""}</script></body>
</html>
