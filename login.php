

                <?php


session_start();

// Create database connection using config file
include_once("db-config.php");

// If form submitted, collect email and password from form
if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];
    
    // Check if a user exists with given username & password
    $result = mysqli_query($mysqli, "select 'email', 'password' from accounts
        where email='$email' and password='$password'");
    
    // Count the number of user/rows returned by query 
    $user_matched = mysqli_num_rows($result);

    // Check If user matched/exist, store user email in session and redirect to sample page-1
    if ($user_matched > 0) {
        $_SESSION["email"] = $email;
        header("location: loggedinupload.php");
    } else {

        header("location: loginfailed.html");
    }
}
?>
<body class="logged-out-1">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={licenseKey:"ecbe44911a",applicationID:"35958959"};window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var i=t[n]={exports:{}};e[n][0].call(i.exports,function(t){var i=e[n][1][t];return r(i||t)},i,i.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(e,t,n){function r(){}function i(e,t,n){return function(){return o(e,[u.now()].concat(c(arguments)),t?null:this,n),t?void 0:this}}var o=e("handle"),a=e(7),c=e(8),f=e("ee").get("tracer"),u=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(e,t){s[t]=i(p+t,!0,"api")}),s.addPageAction=i(p+"addPageAction",!0),s.setCurrentRouteName=i(p+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,i="function"==typeof t;return o(l+"tracer",[u.now(),e,n],r),function(){if(f.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return t.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],n),e}finally{f.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=i(l+t)}),newrelic.noticeError=function(e,t){"string"==typeof e&&(e=new Error(e)),o("err",[e,u.now(),!1,t])}},{}],2:[function(e,t,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=e(9);t.exports=r,t.exports.offset=a,t.exports.getLastTimestamp=i},{}],3:[function(e,t,n){function r(e){return!(!e||!e.protocol||"file:"===e.protocol)}t.exports=r},{}],4:[function(e,t,n){function r(e,t){var n=e.getEntries();n.forEach(function(e){"first-paint"===e.name?d("timing",["fp",Math.floor(e.startTime)]):"first-contentful-paint"===e.name&&d("timing",["fcp",Math.floor(e.startTime)])})}function i(e,t){var n=e.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(e){e.getEntries().forEach(function(e){e.hadRecentInput||d("cls",[e])})}function a(e){if(e instanceof m&&!g){var t=Math.round(e.timeStamp),n={type:e.type};t<=p.now()?n.fid=p.now()-t:t>p.offset&&t<=Date.now()?(t-=p.offset,n.fid=p.now()-t):t=p.now(),g=!0,d("timing",["fi",t,n])}}function c(e){d("pageHide",[p.now(),e])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var f,u,s,d=e("handle"),p=e("loader"),l=e(6),m=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){f=new PerformanceObserver(r);try{f.observe({entryTypes:["paint"]})}catch(v){}u=new PerformanceObserver(i);try{u.observe({entryTypes:["largest-contentful-paint"]})}catch(v){}s=new PerformanceObserver(o);try{s.observe({type:"layout-shift",buffered:!0})}catch(v){}}if("addEventListener"in document){var g=!1,w=["click","keydown","mousedown","pointerdown","touchstart"];w.forEach(function(e){document.addEventListener(e,a,!1)})}l(c)}},{}],5:[function(e,t,n){function r(e,t){if(!i)return!1;if(e!==i)return!1;if(!t)return!0;if(!o)return!1;for(var n=o.split("."),r=t.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,f=c.match(a);f&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=f[1])}t.exports={agent:i,version:o,match:r}},{}],6:[function(e,t,n){function r(e){function t(){e(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,t,!1)}t.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],7:[function(e,t,n){function r(e,t){var n=[],r="",o=0;for(r in e)i.call(e,r)&&(n[o]=t(r,e[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],8:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,i=n-t||0,o=Array(i<0?0:i);++r<i;)o[r]=e[t+r];return o}t.exports=r},{}],9:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function i(e){function t(e){return e&&e instanceof r?e:e?u(e,f,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!l.aborted||o){e&&a&&e(n,r,i);for(var c=t(i),f=v(n),u=f.length,s=0;s<u;s++)f[s].apply(c,r);var p=d[h[n]];return p&&p.push([b,n,r,c]),c}}function o(e,t){y[e]=v(e).concat(t)}function m(e,t){var n=y[e];if(n)for(var r=0;r<n.length;r++)n[r]===t&&n.splice(r,1)}function v(e){return y[e]||[]}function g(e){return p[e]=p[e]||i(n)}function w(e,t){s(e,function(e,n){t=t||"feature",h[n]=t,t in d||(d[t]=[])})}var y={},h={},b={on:o,addEventListener:o,removeEventListener:m,emit:n,get:g,listeners:v,context:t,buffer:w,abort:c,aborted:!1};return b}function o(e){return u(e,f,a)}function a(){return new r}function c(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var f="nr@context",u=e("gos"),s=e(7),d={},p={},l=t.exports=i();t.exports.getOrSetContext=o,l.backlog=d},{}],gos:[function(e,t,n){function r(e,t,n){if(i.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return e[t]=r,r}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){i.buffer([e],r),i.emit(e,t,n)}var i=e("ee").get("handle");t.exports=r,r.ee=i},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,o,function(){return i++})}var i=1,o="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!E++){var e=x.info=NREUM.info,t=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return u.abort();f(h,function(t,n){e[t]||(e[t]=n)});var n=a();c("mark",["onload",n+x.offset],null,"api"),c("timing",["load",n]);var r=l.createElement("script");r.src="https://"+e.agent,t.parentNode.insertBefore(r,t)}}function i(){"complete"===l.readyState&&o()}function o(){c("mark",["domContent",a()+x.offset],null,"api")}var a=e(2),c=e("handle"),f=e(7),u=e("ee"),s=e(5),d=e(3),p=window,l=p.document,m="addEventListener",v="attachEvent",g=p.XMLHttpRequest,w=g&&g.prototype;if(d(p.location)){NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:g,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var y=""+location,h={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1208.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=t.exports={offset:a.getLastTimestamp(),now:a,origin:y,features:{},xhrWrappable:b,userAgent:s};e(1),e(4),l[m]?(l[m]("DOMContentLoaded",o,!1),p[m]("load",r,!1)):(l[v]("onreadystatechange",i),p[v]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var E=0}},{}],"wrap-function":[function(e,t,n){function r(e,t){function n(t,n,r,f,u){function nrWrapper(){var o,a,s,p;try{a=this,o=d(arguments),s="function"==typeof r?r(o,a):r||{}}catch(l){i([l,"",[o,a,f],s],e)}c(n+"start",[o,a,f],s,u);try{return p=t.apply(a,o)}catch(m){throw c(n+"err",[o,a,m],s,u),m}finally{c(n+"end",[o,a,p],s,u)}}return a(t)?t:(n||(n=""),nrWrapper[p]=t,o(t,nrWrapper,e),nrWrapper)}function r(e,t,r,i,o){r||(r="");var c,f,u,s="-"===r.charAt(0);for(u=0;u<t.length;u++)f=t[u],c=e[f],a(c)||(e[f]=n(c,s?f+r:r,i,f,o))}function c(n,r,o,a){if(!m||t){var c=m;m=!0;try{e.emit(n,r,o,t,a)}catch(f){i([f,n,r,o],e)}m=c}}return e||(e=s),n.inPlace=r,n.flag=p,n}function i(e,t){t||(t=s);try{t.emit("internal-error",e)}catch(n){}}function o(e,t,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(e);return r.forEach(function(n){Object.defineProperty(t,n,{get:function(){return e[n]},set:function(t){return e[n]=t,t}})}),t}catch(o){i([o],n)}for(var a in e)l.call(e,a)&&(t[a]=e[a]);return t}function a(e){return!(e&&e instanceof Function&&e.apply&&!e[p])}function c(e,t){var n=t(e);return n[p]=e,o(e,n,s),n}function f(e,t,n){var r=e[t];e[t]=c(r,n)}function u(){for(var e=arguments.length,t=new Array(e),n=0;n<e;++n)t[n]=arguments[n];return t}var s=e("ee"),d=e(8),p="nr@original",l=Object.prototype.hasOwnProperty,m=!1;t.exports=r,t.exports.wrapFunction=c,t.exports.wrapInPlace=f,t.exports.argsToArray=u},{}]},{},["loader"]);</script>
	<title>Login</title>
	<meta name="description" content="Do you already have a FaceOff account? Awesome. Returning users login here."/>
	<meta name="theme-color" content="#A3D9DE">	<link rel="author" href="https://plus.google.com/117480045292551501788">
	<link rel="author" href="https://plus.google.com/117480045292551501788">
	<link rel="shortcut icon" href="https://drive.google.com/thumbnail?id=1voMm2-SjUXa1mz47W_2NuDXjR4YvwBY5" type="image/x-icon">
    <link rel="icon" href="https://drive.google.com/thumbnail?id=1voMm2-SjUXa1mz47W_2NuDXjR4YvwBY5" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://drive.google.com/thumbnail?id=1voMm2-SjUXa1mz47W_2NuDXjR4YvwBY5">
	<link rel="stylesheet" href="new%20login.css">
	<meta property="fb:app_id" content="310261842437710" />
    <meta property="og:site_name" content="Faceoff" />
    <meta property="og:image" content="http://d1r8m46oob3o9u.cloudfront.net/images/photofeeler-results-sample-2.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
	<script>
		window.pfDeferredFunctions = window.pfDeferredFunctions || [];
		function pfDocumentReady(f) {
			if (window.pfDeferredFunctions === null) {f();} else {window.pfDeferredFunctions.push(f);}
		}
	</script>
    <script crossorigin="anonymous" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script crossorigin="anonymous" defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script crossorigin="anonymous" defer src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.14/vue.min.js"></script>
    <script crossorigin="anonymous" defer src="https://d1r8m46oob3o9u.cloudfront.net/js/2021-03-30-15-51-59/www-all.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://d1r8m46oob3o9u.cloudfront.net/css/2021-03-30-15-51-59/www-all.min.css">
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
	    $(window).on('resize', viewportUpdate);
	</script>
	<script>
	    var ga_account = "UA-40617210-2";
		pfDocumentReady(function() {
			BrowserDetection.init();
			window.PageError.initialize(false);
		});
	</script>
	<script>
		pfDocumentReady(function() {
            window.v = new Vue(new LoginPageVueModel(
                "\/my-tests", null            ));
            window.v.$mount('#vue');
					});
	</script>
</head>
<body class="login">
		    <div class="navbar navbar-placeholder"></div>		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

			<div class="container">
				<div class="navbar-header logged-out hidden-xs" style="float:none">
					<h1 style="margin:0">						<a class="navbar-brand" href="/">
							<img class="long" src="https://drive.google.com/thumbnail?id=18UhUQt-nQ5rLlXHOyL0Ga5dBb6eXmD5F" alt="FaceOff">
							<img class="short" src="https://drive.google.com/thumbnail?id=1voMm2-SjUXa1mz47W_2NuDXjR4YvwBY5" alt="FaceOff">
						</a>
					</h1>
					<ul class="nav navbar-nav pull-right">

						<li>
							<a href="http://www.faceoff.ml/login.php">
								<div class="btn btn-secondary">Login</div>
							</a>
						</li>
						<li class="hidden-xs">
							<a href="http://www.faceoff.ml/signup.php">
								<div class="btn btn-primary">Signup</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
          <div class="container visible-xs-block">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
                    <h1 style="margin:0">                        <a class="navbar-brand" href="/">
                            <img class="long" src="https://drive.google.com/thumbnail?id=18UhUQt-nQ5rLlXHOyL0Ga5dBb6eXmD5F" alt="FaceOff">
                            <img class="short" src="https://drive.google.com/thumbnail?id=1voMm2-SjUXa1mz47W_2NuDXjR4YvwBY5" alt="FaceOff">
                        </a>
                    </h1>
              </div>

				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav navbar-right">
						    <li>
								<a class="mobile-signup" href="http://www.faceoff.ml/signup.php">Signup</a>
							</li>

						<li class="sm-80 active">
							<a href="http://www.faceoff.ml/login.php">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

<div id="vue" class="container container-page" style="text-align:center;max-width:1040px">
<br/>
<br/>
<img class="long" src="https://drive.google.com/thumbnail?id=1qycWcJAmWgvKLQBK72vYoyVYta0Zcy-2" alt="FaceOff">

	
			

	<div class="row">


		<div class="form-group" style="position:relative">
			<h2>Login</h2>
			<form  action="login.php" method="post" name="form1">
				<table width="35%">
                            <tr><table align='center' style='text-align:center'>
                                <td>Email : </td>
                                <td><input class="form-control" type="text" name="email" required placeholder="Email" style="min-width:200px;"></td>
                            </tr>
                            <tr>
                                <td>Password : </td>
                                <td><input class="form-control" type="password" name="password" required placeholder="Password" style="min-width:200px;" autocomplete="off"></td>
                            </tr>
                            <tr>
                                <td></td>

                            </tr>
                        </table>
                        <br />
                        <input class="btn btn-primary" type="submit" name="login" value="Login">
                        <button class="btn btn-primary" style="min-width:100px;display:none">
                            <pf-icon which="pf-spinner-fff" class="pf-spin"></pf-icon>
                        </button>
                        <br />
                        <br />
                        <p>No account? <a href="http://www.faceoff.ml/signup.php">Sign up now</a>.</p>
		<hr>
					</div>
                   
				</div>

			</form>

		</div>

	</div>
</div>
      <footer>
            <div class="footer-content container">
                

                    <div class="col-sm-3 hidden-xs">
                        <img src="https://drive.google.com/thumbnail?id=1F3Cnfb83EbV_Nf7hgU2yNxiEI_qaPfR6" alt="Faceoff" />
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
                        <img src="https://drive.google.com/thumbnail?id=1F3Cnfb83EbV_Nf7hgU2yNxiEI_qaPfR6" alt="Faceoff" />
                    </div>

                    <div >
                       <br />

                <a href="http://www.faceoff.ml/terms.html">Terms of Use</a>
                <a href="http://www.faceoff.ml/privacy_policy.html">Privacy Policy</a><br />
                &copy; 2021 FaceOff.ml
                <br />
                &reg; Contact : <em> admin-sumit@faceoff.ml </em>
                    </div>

                </div>            </div>        </footer>

	<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam-cell.nr-data.net","licenseKey":"ecbe44911a","applicationID":"35958959","transactionName":"M1MHZUZZW0RWVURZDQoZMENdF1lYUF9eHhIMRg==","queueTime":0,"applicationTime":51,"atts":"HxQEEw5DSEo=","errorBeacon":"bam-cell.nr-data.net","agent":""}</script></body>
</body>
</html>
