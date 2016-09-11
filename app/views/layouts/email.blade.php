<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>{{$title}}</title>
<style>
/* -------------------------------------
		GLOBAL
------------------------------------- */
* {
	margin:0;
	padding:0;
	font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
	font-size: 100%;
	line-height: 1.6;
}

img {
	max-width: 100%;
}

body {
	-webkit-font-smoothing:antialiased;
	-webkit-text-size-adjust:none;
	width: 100%!important;
	height: 100%;
}


/* -------------------------------------
		ELEMENTS
------------------------------------- */
a {
	color: #348eda;
}

.btn-primary{
	text-decoration:none;
	color: #FFF;
	background-color: #348eda;
	border:solid #348eda;
	border-width:10px 20px;
	line-height:2;
	font-weight:bold;
	margin-right:10px;
	text-align:center;
	cursor:pointer;
	display: inline-block;
	border-radius: 25px;
}

.btn-secondary {
	text-decoration:none;
	color: #FFF;
	background-color: #aaa;
	border:solid #aaa;
	border-width:10px 20px;
	line-height:2;
	font-weight:bold;
	margin-right:10px;
	text-align:center;
	cursor:pointer;
	display: inline-block;
	border-radius: 25px;
}

.last {
	margin-bottom: 0;
}

.first{
	margin-top: 0;
}

.padding{
	padding:10px 0;
}


/* -------------------------------------
		BODY
------------------------------------- */
table.body-wrap {
	width: 100%;
	padding: 20px;
}

table.body-wrap .container{
	border: 1px solid #f0f0f0;
}


/* -------------------------------------
		FOOTER
------------------------------------- */
table.footer-wrap {
	width: 100%;
	clear:both!important;
}

.footer-wrap .container p {
	font-size:12px;
	color:#666;

}

table.footer-wrap a{
	color: #999;
}


/* -------------------------------------
		TYPOGRAPHY
------------------------------------- */
h1,h2,h3{
	font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; line-height: 1.1; margin-bottom:15px; color:#000;
	margin: 40px 0 10px;
	line-height: 1.2;
	font-weight:200;
}

td img {
	margin: 40px 0 10px;
}

td p {
	font-size: 120%;
}

h1 {
	font-size: 36px;
}
h2 {
	font-size: 28px;
}
h3 {
	font-size: 22px;
}

p, ul, ol {
	margin-bottom: 10px;
	font-weight: normal;
	font-size:14px;
}

ul li, ol li {
	margin-left:5px;
	list-style-position: inside;
	padding: 10px;
	font-size: 120%;
}

/* ---------------------------------------------------
		RESPONSIVENESS
		Nuke it from orbit. It's the only way to be sure.
------------------------------------------------------ */

/* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
.container {
	display:block!important;
	max-width:600px!important;
	margin:0 auto!important; /* makes it centered */
	clear:both!important;
}

/* Set the padding on the td rather than the div for Outlook compatibility */
.body-wrap .container{
	padding:20px;
}

/* This should also be a block element, so that it will fill 100% of the .container */
.content {
	max-width:600px;
	margin:0 auto;
	display:block;
}

/* Let's make sure tables in the content area are 100% wide */
.content table {
	width: 100%;
}

.wpframe {
background: #fff;
border-radius: 2px;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
padding: 8px;
-webkit-box-shadow: 1px 2px 1px #d1d1d1;
-moz-box-shadow: 1px 2px 1px #d1d1d1;
box-shadow: 1px 2px 1px #d1d1d1;
}
table.box
{
border-collapse: collapse;
border-spacing: 0px;
}
table.box, table.box th, table.box td
{
padding: 5px;
border: 1px solid black;
}
hr {
	color: #dcdcdc;
	border-style: solid;
	margin: 25px 0px;
	clear: both;
}
blockquote {
margin-left: 1em;
font-style: italic;
font-family: Georgia,"Bitstream Charter",serif;
border-left: 3px solid;
border-color: #57ad68;
padding-left: 20px;
float: left;
}
h1.chapter {
	float: left;
}
br {
	clear: both;
}
.alert {
	background-color: red;
	color: white;
	padding: 5px;
}
.alert a {
	color: #ffffff;
}
.info {
	background-color: #009688;
	color: white;
	padding: 5px;
}
.info a {
	color: #ffffff;
}
</style>
</head>

<body bgcolor="#f6f6f6">

<!-- body -->
<table class="body-wrap">
	<tr>
		<td></td>
		<td class="container" bgcolor="#FFFFFF">
			<!-- content -->
			<div class="content">
			<table>
				@if (isset($link))
				<tr><td align="center"><small>Is this email not displaying correctly? <a href="{{ $link }}">View it in your browser</a>.</small></td></tr>
				@endif
                <tr>
                  <td align="center"><img src="{{{ isset($message) ? $message->embed(public_path().'/mail-banner.jpg') : 'mail-banner.jpg' }}}" /></td>
                </tr>
				@yield('content')
			</table>
			</div>
		</td>
		<td></td>
	</tr>
</table>
<!-- /body -->

<!-- footer -->
<table class="footer-wrap">
	<tr>
		<td></td>
		<td class="container">

			<!-- content -->
			<div class="content">
				<table>
					<tr>
						<td align="center">
							<p><a href="http://srisrianna.com">Visit srisrianna.com</a>
							@if (isset($email))
							| Email was sent to {{ $email }}
							@endif
							@if (isset($preference))
							| <a href="{{ $preference }} ">Update your Subscription Preferences</a>
							@endif
							</p>
						</td>
					</tr>
					<tr>
						<td align="center">
							<p><a href="http://srisrianna.com/bhagavatha-dharmam">Subscribe Bhagavatha Dharmam</a></p>
						</td>
					</tr>

					<tr>
						<td align="center">
							<p>© ஶ்ரீ ஶ்ரீ க்ருஷ்ண ப்ரேமி ஸ்வாமிகள் பாகவத தர்மம் அறக்கட்டளை							</p>
						</td>
					</tr>
                </table>
			</div>
			<!-- /content -->

		</td>
		<td></td>
	</tr>
</table>
<!-- /footer -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42301403-2', 'srisrianna.com');
  ga('send', 'pageview');

</script>
</body>
</html>
