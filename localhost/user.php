<?php
	session_start();
	if (!isset($_SESSION["username"])) {
		header("Location: index.html");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
	<header class="site-header">
		<div class="site-identity">
			<hl><img src="canada_flag.png" alt="Site Name"/></hl>
			<h1>Provinces and Territories of Canada</h1>
		</div>  
		<nav class="site-navigation">
			<ul class="nav">
				<li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="color: black; width: auto; text-decoration: none; text-align:center;"><?php echo $_SESSION["username"]; ?></a></li> 
			</ul>
		</nav>
		<div id="id01" class="modal">
			<form class="modal-content animate" method="post">
				<div class="container">
					<style>
						a {
							margin-bottom: 10px;
							text-align:center;
							color: #333;
							text-decoration: none;
							font-weight: bold;
						}
						a:hover {
							text-decoration: underline;
						}
					</style>
					<div style="text-align: center;">
						<a href="comm.php">Leave a comment</a>
					</div>
					<p></p>
					<div style="text-align: center;">
						<a href="index.html">Sign out</a>
					</div>
				</div>
			</form>
		</div>
		<script>
			var modal = document.getElementById('id01');
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}
		</script>
	</header>	
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link rel="stylesheet" href="index.css">
		<title>Provinces and Territories of Canada</title>
	</head>
	<body>			
		<svg class="map" id="wrapper" viewBox="0 0 324.464 280.907" preserveAspectRatio="xMinYMin" height="1080" width="924" style="background-color: none">
			<a href="https://en.wikipedia.org/wiki/British_Columbia">
				<g>
					<path d="m27.724 117.767.53 5.95-.8 1.72 2.12.13.53.27.8.13.66-1.06.92-.4 2.39.67.13 2.11h-.53l.26 1.2.53 1.45-.53.66.66 4.23-.26.4-.4 7.28-.92.66.53.66-.8.8.27.92-.27.93.66.4 1.6 2.9.26 1.33.92.66-.26 1.19-1.06.53-1.06 2.51-.8.66v.8l-3.83 2.64.66 1.59-.4.66.4 4.1.4.13.8-1.19 2.5.4-2.5 1.98.26 1.99-.14 1.72.4.53-.8.92-.65.4.66 1.85 3.04-.26v1.32l-3.97.93-.53 1.85.93.26-2.12 1.99 1.2 2.78.79-.53 2.11 2.25-1.19 1.32 2.25 1.45h.53l1.59 1.99v1.06l-.66.26.66 2.25 1.32.27.13 1.05-.53.14.27 1.58.92.53.14 1.46-.53.92 1.59.53.74-.28-.18.48 5.92 2.85 9.79 3.96 7.8 2.91 8.34 2.78-.14-1.58-1.04-2.02.8-3.08.29-2.54-1.18-1.36-1.18-2.02.28-1.09-.65-1.1-.95-1.78.1-2.32-1.23-.34-.03-1.52-.96-1.4-.69-.33-.03-1.4-.95-.67.12-2.25-1.48-1.86.5-1.07-1.34-.67.25-.4-1.34-1.6 1.16-.65-.63-.42-.76-.76-.17.1 13.63-33.2-.07-.27-9.59-4.23-1.62-.6-10.66-5.9-14.1-8.92zm-5.16 38.23-1.32 1.72-.4 1.06-.66.66.66.66-.26 2.25 1.85.13 1.19-1.58 2.65-1.99-1.6-.4-1.05 1.72-1.45-.4.13-.26 1.45-.13.53-.8-.4-.92-.66-.26-.13-.93zm5.3 5.56.92 1.19.8-.53-.67-.66zm-5.17 1.19-2.38.13.14.4v1.72l.66 4.63.92.13v-.66l-.4-.27v-1.98l-.4-1.32.67-1.72 1.46-.14zm6.88 0-.4.26.54 4.1.4-.92zm-1.45.92-.8.8.93 2.38.66-.66-.53-1.86zm3.97 2.25-.4.8 1.46-.67zm-.93 2.12-1.72 1.85.13.93.93 1.72 1.32-2.25zm-2.64 2.25-.4 1.45h1.06l.13-1.32zm5.29 5.16-3.05.4v.66l3.18-.4zm-7.15 6.22-.92.13-.4 1.06.8 1.32h1.58l-.13.66-1.2.13-.79 1.2 1.86 1.58-.4.27.53 1.05 1.06.27.13 1.98h-.53l-.13.53.4.93h.92l.4 2.11-.4.53.93 1.46 1.19-.27.13.67-.53.79 2.25 3.04 1.85 1.06.8-1.45.26-3.05-2.38-2.78-.13-5.55-4.63-4.5-.66-1.59zm1.33 7.8-.93.93 1.19.79zm7.4 3.97-.26 1.19 1.32 1.98.4-1.05z"></path>
					<title>British Columbia</title>
				</g>
			</a>
			<a href="https://en.wikipedia.org/wiki/Quebec">
				<g>
					<path d="m200.234 136.287-2.51 2.9-.8-.52-.8.4-5.42-.14-1.32 1.72.4 1.6 1.85 2.37.4 2.38-.53 1.6.4.79.52-.4 1.33 2.9 1.45 2-.66.79-.13 2.51-.53 1.85-1.06.66.8 1.46 1.05 1.06 1.46.4 2.78 1.71 2.77 2.92 1.2 3.04.4 4.1-.67 2.38-2.78 4.9-1.32.92-1.2 1.46-2.1.4.26.65.92.27.93 1.32.93.66.66.67-.14.79.8 2.38 1.19 1.59.66 1.32.66 2.12.66.13.53 1.45-.8 1.6-.12 1.18 1.05 1.06v.93l-.66.4-.4-1.06-1.18-.67-.67.8.43 2 .19.07 5.2 20.95.93 2.25 2.25 2.24 2.51 1.46 4.37-.13 1.98 1.32 1.72-.26.8 1.45 1.6.35.75-.22.95-.53 3.7-2.64 2 .13.26 1.2.48 1.91-.11-.93.16.9-.04.03v.06l.02.15.02-.01v-.02l.14-.21 11.76-4.27-.13-1.85h.93l.53-.8.52.53.14-1.19.79-.13-.8-.66.93-1.72-.26-.53.26-.4-.13-.92-.8-1.2.4-1.18-.4-1.6.82-4.26.52-1.29h.52l.13.8.28-.48.08.15.96-.86.53-1.33-.8-1.45.8-1.2 1.86-.79.52.4.53-.13 1.86-1.72 1.45-.93-.2-.5.47-.16 1.58-1.32.53.26h1.46l1.32-2.11.93-1.6-.14-2.1-1.05-1.2-3.05-.26-2.25.52-4.9 4.9-4.36 6.09-1.05 2.24-1.46 6.35-.66 1.33-1.59 1.45-1.06 1.85-.8.27-2.24 2.12-2.25 3.96-.53 2.91-1.06 1.33-.84.6v-.03l1.24-1.37.4-2.11.13-1.46 1.32-2.25 3.18-3.83 2.64-2.91.8-1.46-.14-1.72.8-.8 1.06-6.47 1.45-3.97 1.33-2.78 1.85-.93v-3.44l.8-2.38 2.37-1.98 8.07-4.1h.4l5.03-2.52h.92l2.12-1.72 3.04-1.85.13-.4v-1.45l.53-1.85.53-1.72-.4-.53v-.53l.53-.53-.13-1.06 1.85-1.32-.13-.66.53-1.33 1.59-.53c-.86-1.16-.74-1.1-2.06-2.65-.21.36-18.29 10.9-18.83 11.53-.25.29-.02.13-1.35.8-.26.13-.35-.63-.65-.98-.33-.38-.68-.17-1.44-.83a.94.94 0 0 1-.32-.75c.07-.75.64-.78 1.15-1.56l-1.03-.5-.72 1.55-.04.98.81.96.6 2.09c.55 1.84.54 1.36.73 2.15l-.92 1.1-1.2-1.19-1.19.53-1.85-1.45-.13.66-1.72.4-.93-.66-.3.5c-.09 0-.16-.02-.25-.03l-.38-.47.4-.67-.66-.79.13-.53-1.45-1.59-.67.93.67 1.06-.27.53-2.11-.8-.67-.8 1.06-.65-1.45-2.12-.53.27-2.65-1.99.13-1.19-1.19-.8 1.33-.92.53-1.06-1.6-1.06-.79-1.05 3.18 1.19-.13-1.33-1.6-1.72 2.26.93 2.64.26 1.86-1.85.79.66 1.06-.79.92.4 1.33-.53-1.2-1.2.8-.39-.8-1.72-.26-1.32-1.19.26.53-.53-1.72-2.11.4-.66-1.33.4-1.05-1.73h.66l-1.72-1.32.66-1.2-.93-.92.4-.92-.8-.4.27-.93-.8-1.19-1.18-.26-2.12-.93-.26-.8.79-1.05-1.06-1.32 1.2-1.2-.4-.39-1.2.8-.79-.14-1.98.53 1.32-1.06-.93-1.06-.53-1.32-.4.66-.92-.53-.26-1.06v-.92l-.8-.13.27-.53.13-.17.26-.23-.05-.03.19-.23-.37.14-1.22-.67.13 3.97.4 1.05.53 4.63h-1.06l.26 1.99-2.11 2.9-1.46-1.18-.8-.13-1.84-1.06-2.25 1.72-.66 1.06-.4-.14-.66-1.19.8.27.26-.4-.27-.53.8-.8-1.06-1.32-.53.4-.4-.66v-.53l-1.06-2.25h-.26l-.14-.53.27-.13-1.2-1.59-.65-1.45.26-.4.4-.8-.93-.79-.4.4.67.8h-1.2l-.26-.67-1.19.27v.66l-3.44-.13-.66-1.33.13-.66-.26-.4-.4.27-2.51-1.06-.8-.92zm30.39 97.33-.01-.03-.09.07zm-2.65-94.21.05.34-.26-.05-.01-.1zm2.82 32.33-.66.93-.27.4.53.53.8-.4.86.87.01.05-1.67.14.53.92-.13.4-.27-.26-.66-.27-.8-1.06h-1.58l-.13.53 1.19.8v.66l.93-.4.13.26-.27.8 2.91-.27v.53h-1.44l-.8.8.27.66-.13.26-.4-.53-1.06-.13-.26-.8-.8.67-.53-.66-1.45-.53.13-.53 1.59-.66-.27-.66h-.52l-.67-.93.53-.13 1.6-1.33 1.05.27 1.72-.93zm-24.87 12.3h1.45l.4.8-.53.66-.8 1.32.14.4h.4l1.58-.8h.27l.4.54-1.46.8-2.25 1.45-.92.13-.27-.8-.26-.4-.67-.12-.13-.27.53-.4 1.46-.92v-.4l1.32-1.45zm57.28 5.17-1.06.52-1.32-.26-4.37 1.59 2.65.4 1.32.92 3.31-.13 1.72-.8 2.65-.4.13-.92-.8-.53-2.11-.13zm9.92 7.67-1.32 1.85.26 1.72.53.13.66-.4-.66-.79-.13-.8.8-1.05z"></path>
					<title>Quebec</title>
				</g>
			</a>
			<a href="https://en.wikipedia.org/wiki/Nunavut">
				<g>
					<path d="m168.354 20.137-1.2.13-.92 2.12h-.8l.67-1.06-.27-.93-1.05.53-1.99-.13-.26.66h-.93l-.66 1.06-2.51-.27-.14 1.06.66.66v.27l-2.38-.27-1.05 1.33.52.92-.92-.4-.13 1.99.4.66-.93.4-1.86-1.59v1.32l-.92.53 1.72 1.33-1.32.13-.53-.4h-.8l-.66 1.46-.4-.4-2.24 1.72.79.93.8-.67.39.14-.66 1.05 1.19 1.06-.66.66.26.8 2.91-.8 1.46-1.32-.93 1.85-2.51.53v.53l2.11 1.06.53-1.32.27 1.72 2.51-.4.13-.66.67-.13.26.79 2.51-1.85.53-1.06 1.33.13-1.6 2.52-2.5 1.58.13.66 1.72 1.2-.27.66 1.06 1.19-.8-.14-.79-1.19h-.53l-1.45-1.58h-2.91v.8l.4.78.26 1.2 1.59 1.05 1.19 2.25.13 1.46 2.12.26.4-.4.66.4-1.33 1.32-.8-.79-2.5.13-1.06.93-.14.93-.52.79.13 2.25h.66l.66-.66.53.53h.4l.66-.4-.27 1.19.4 1.19 1.59 1.06.66-.66.26-.93.4.93-.13.66-1.06.53-1.72.13-.53-.8-.92-1.45h-1.86v.93l.27.53.26 1.45.8.27.13.4-.8.92-.52-.13-1.46 1.98.26 1.85-.13.53 1.59.13.53.27 1.59-1.2.79.54 2.38.8-.26-.93.26-.67 1.85-.4.27.8.92-.66-.13-.8h1.72l.13 1.86.4.26 3.04-3.04.4-1.59-.8-1.45-.52.4v.66l-.27.26-.92-.8.4-.66-.4-.66-.8.53-2.64.13-.27-2.24.93 1.05 1.98.27 1.86-1.59-.93-2.25.93-.53.4.27 1.58-1.46-1.2-.66 1.2-.4-.26-1.05-1.06-.8h1.19l-.27-1.59-1.06-.52-.4-.53-1.32.26.53-1.06 2.25-.26-.8-.93-3.17.93 1.6-1.2.79-.13 1.72-1.71-.4-1.06.92.53 1.06-1.6.13-1.71-1.71.8 1.32-1.73-.13-.8.66-.26 1.06-4.1.26-1.72.66-1.98-.66-.66-.93.53-1.58 3.04-.8.13 1.33-2.78-1.33.67-.4-.27 2.12-.93 1.72-2.9-.26-3.05-.53-.8-1.2.27zm-22.89 14.95-.26.66 1.19.66-.8 1.06-.53-.53h-.66l-.13 1.32.93.93.13.53-1.32.13-.53 2.25.53-.13.28.82.54.14.07.56-.76-.28-.66-.72v2.39l.79.79-.13 1.06.43 1.05.4.2.1-.67.32-.28.34.46.86.07.57-.6.6.06-.14.72.1 1.18h-1.03l-1.1.19 1.46 2.78 1.06.13-.66.93 1.85 1.45.92-.13.27-.53 1.19-.66.26.8.53.12.13-1.58.53-.27-.13-.8 1.06-2.37 1.72-.93-.13-1.98-1.99-1.06-.66-1.99-.66-.66v-1.85l-1.2-.26.54.66v1.32h-.4l-.92-2.25h-.8l-.26-1.06-2.25-3.7zm-5.82 7.27-.4 1.2.93 1.45h.8l-.14-2.25zm-4.76 3.84-1.72.8v1.18l1.85 2.78-.13.66-1.06-.53-.93.53.66 1.33 1.33-.14 2.25.8.26.4.13 1.58 1.46 1.2.92-.54-.52-3.17.26-2.12-1.59-.93-.66-1.71-1.06.79-.26-1.32zm-7.54 2.64-.66 2.78.79.4.66-.53.27-.93zm13.5 1.72.39 1.06-.27 1.72 1.34 1.47-.93-.13.66 1.71 1.32-.13 1.86-1.19-.8-1.85.27-.66-.8-.27-.4-.66-2.11-1.06zm-9.93 5.16.13 1.72.13 1.46 1.06.66.4-.4-.93-3.17zm4.36.14.67.92 1.45.13-.13-.53zm8.6.66-.92 1.45 2.9.27.8.4.53-1.73-1.98-.26-.27.26zm6.22.4-.53.79.13 1.06 1.06 1.19h1.06l-.13-1.46zm-24.2 3.17-.93 1.45-1.6.93 1.07 1.59.26.8-.8-.14-.52.66 1.85 2.38-.66.13-1.59-.79-.88 4.25 1.94-.55.8 1.06 1.05-.13.66.4 1.6-.53 1.05-1.2.13-.65.8-1.72v-1.46l-1.06-1.19h-.93l-.66.53-1.06-1.06-.4-.26.8-.53-.4-1.33.27-1.32-.14-1.06zm17.45.93-1.05.79-.14 1.06 1.86 2.38.26-.4-.26 1.2 2.64-.4.93-.27.26 1.72 1.06 1.06.27 1.72-.8 1.98 1.06.66-.13 1.86h.53l.92 1.05.93-.13 1.45.53 1.2-1.72.79.4-.4 1.06h4.1l1.2-.4.79-.66h1.58l.93-1.2 2.12 1.07.92-1.06h.8l.4-1.85.66-.27v-.92h-.93v-.67l.53-1.32-.8-.53h-1.05l.13-.92-1.32-.14-.67-.79-3.17.93-.93 1.45-1.45.27-.66.66.13 1.19-1.32-1.33-1.99.4v-.8h-.8l-.12 1.2-.4-.13.13-1.2-.93-1.18h-1.58l-.53-.4 1.06-1.06 1.05-.4-1.85-.8v-.65l-1.19-.93-.92-.13-.8 1.06-.4-.4-.92-1.59h-.8zm7.68.79.53 2.9h.66l-.4-1.84zm-13.63.13-1.45 1.46.53.66 1.58-1.33zm-5.03.66-1.05.53.66.8v.66h1.45l.13-.66zm6.09.66-1.85 1.33.92.66v.92l.66 1.72-.92-.79-1.2-2.65-.79.27-.13 1.85.93 1.72-1.06-.8-1.59 1.86 4.76-.4-.13.53-1.72 1.59.93 2.25 1.19-.53.93.4 1.45-1.06.4-1.46.26-.92-.26-1.33.26-.66v-2.11l-.53-1.06-1.06-1.33-.66 1.33h-.53zm-4.37 1.86-2.38.13.4 1.06 1.98-.53zm-.4 1.58-1.05 1.2 1.19.13 1.06-1.2zm11.65.8-.66.26.8 1.06.92-.26zm-2.38 1.85-1.33.8.53.92 1.6-1.2zm2.25 0-1.2.53-.52 1.32-1.2 1.85 2.92 2.38 1.98-.26v-3.7zm-14.69.13-.13.93-.53.92.93.67 1.32-.14-.53-1.06-.13-1.32zm42.73 7.8-1.72.14-1.32.53-2.12-.27-.13.67.66 1.98 1.2.93.65 2.24 1.33-.26.26-1.19 1.2-.66 3.7-.27-.4-.92zm-25.93.67-1.98.53-.8 1.19.53.92-1.45-.13.26.93-.26 4.9 1.06 2.24.26 1.99 1.32.26 1.33-2.91-.53-1.32.53-.53 1.06.66.92.13 1.59-2.25v-1.19l1.32-2.38-.8-2.25-2.37.66zm19.32.26-3.18.8-.8 1.32-.78 1.06-.4 1.98-.4 1.2.13 2.37 1.2.53-1.2 2.25 1.2 1.46 1.45.26v2.65l-1.06-.27.53-.66-2.91-3.3-1.06-5.3.27-2.25 1.58-2.64-1.05-.8-2.39.27-2.9 3.57-.4 1.99-.66 3.7.66 5.69.92.4 2.65.13 1.19 1.06-1.32.4-1.46-.93-.92.66.13 1.72.4-.13 1.85 1.72v.66l2.25.13.26-1.32 2.91 3.17 1.72-1.85.66.66 3.04-.53 1.46.93 1.19-.93.8.8.79-.67-.93-1.19 2.25-.26.66.8 1.85-.8-1.32-2.12h-.92v-.79l3.3 1.07 1.2 1.98 1.58-.66.4.93-.53.52 1.32.14 2.38 1.45-.4 1.2-1.05.52.13 1.72 1.85-1.32.27-1.32 2.64 1.32h1.2v1.06l2.64 1.32 2.9 3.97-.39.4-.13 3.7-2.12 3.04.66.8 2.25 1.05.14 1.46-1.06-.13-.27 1.32h-1.19l-.8 1.2-2.1.39-.27-.4-2.25.13-.4.66.13.67.67.79-1.72 1.06.52 1.59.67.92 1.58 1.06 1.2.26.52-.79 1.99-1.45-.53-.93.66-.53 2.25.66.13-.53 1.06-1.72.53 1.99.4-.93 5.02 2.91 1.2-.26.92.13.13 2.12 1.46.92.53-.4 3.3.4.53-.53h.8l.53.93 2.24.8 2.65-.67h3.57l.93.27.66-1.46-1.2-.93-1.98-1.19-3.57-1.19-1.32-.26-3.18-2.25 1.06-1.06 2.12 1.72 1.19-.26 2.38 1.19 2.38-.66 1.46.4.8.52.12-.66-.4-.8-.13-1.05-.92-.8-1.06-1.45 1.59.8v-1.2l-1.85-1.19v-.8l-2.65-.79.8-.4-.67-1.18-.92.66-1.46-1.85-.53.53-1.72-.4-2.9-2.52-1.2.53-.26-.53-1.2-1.05.27-.93.8.93 1.18-.8-.4-.53-1.05-.26-.8-1.06 1.2.13-.8-1.19 1.33-.66 1.45 1.32 2.25.8 1.06-1.2-.53 1.6 1.45.52.93 1.2 1.32 1.18 1.33-1.05 1.32.66v-1.46l-1.2-2.9.8.12.93-1.58-.4-2.12h-1.19v-1.2l1.06-.13.13-.4-.66-.93.8-.79-3.05-.8-1.72 1.73-.26-2.38-1.6 1.72-.65-.4-.93-1.85-1.72-.4-.8.8.4-1.46-.4-.53-1.98 2.12-2.11-.27-1.2-1.85-.79.26-3.97.27v-.66l1.33-.14.66-.52-.66-1.86-.8-.26 1.86-.4.79-.92-.27-.67-2.64.4-1.2.13.14-.79 1.72-1.46-2.12-1.98-.66.13.13 1.33-.79.4-.66-.54-1.32 1.2-.4-.4 2.51-2.52-.26-.53-2.65-.53-.8 1.2-.52.26.53-1.19-1.59 1.32-.13-2.11-.8-.27-.4 1.59-.39-.66-1.06.8.53.65.93-.66-.53 1.06-.93-.27-.26-1.45 1.19-1.06-.13-.66-1.99-1.46-.8.8-.39 1.98-2.25-2.64-1.58 1.98-.27-.26 1.2-1.72-.67-1.6-1.32.27-.14-.92-1.58-.8-.66.53-1.6-.92-2.5 1.32v3.84h-.4l-.27-2.25-1.32.53.13-.93-.8.53-.39 2.78h-.66l.4-2.65-.27-1.72-.66-1.98-.66-.4-.66-.13-.13-1.06zm-27.25.27-1.33.53.27.8 2.38-.94-.27-.4zm-12.97.53-1.32 1.06 2.25 3.96 2.11-3.3-1.45-1.72zm10.72 0-1.86.4.14 1.58-1.06.4-.13 1.59 1.45 1.05-.2 1.32-.3.74-1.02-.08-1.12-2.5-1.2 1.85 1.06 2.11.27.66 2.25 2.39.92 1.98v.93l1.85 1.32.8-.8.13-1.45h.4l.4.4 2.24-1.46-.13-.8-.13-1.71.53-1.06-1.32-1.59v-.66l-.27-1.06-1.45.27v-.8l1.45-1.45.27-1.2.66-.12-.93-1.72-2.91 1.05-.4-.13zm-13.5 1.58-.53.27-.92 7.14.53 1.59-1.2 1.32-.13-1.85-.4-.4.4-.92-.4-1.46.27-1.32-.26-.53-1.46-2.78-.26 1.06.13.53-.8.93.06.3-3.36 14.51-13.88-4.19.14.08-.02.01v1.85l.93 1.99 1.32 1.32 2.78 1.32-.27 1.2.8 2.77 2.64 1.06 4.5.53 3.04-1.32 2.12.13 1.85-1.46.13-.66-.11-.05.1-.03.01.08.4.14v.92l2.25 1.46.53-.27-.93 1.06.8.53h2.11l.8.66 2.11-.13 1.2-.8.13-1.71-.27-.67-.8-.4-1.05.93-.53-1.98 1.46.8.26-.8.93-.66.4-.53.13 1.32 1.45-.8-.26 1.2.92-.8.13-2.25-1.05.14-1.06-.93-1.59-1.85-.66.13-1.2-2.25-.79-1.98.93-1.06-.8-1.98-.26-7.15-2.11-2.51-.67.4zm18 3.05-.53 1.06.79.66.8-.8zm3.7 7.54-.8.13-.13.93-1.19.79.93.66-.53 1.06-.66-.66-.93.92.4.53v1.46l-.53.8 1.19.92-.53.53-.8.8.14 1.71 2.9 3.04.67-.26 1.06 1.32.8-.53.39 1.06-1.06-.4-.4 1.2-.79 1.85.93.8.53-.54.26-1.06h.4l.13 2.78-.53-.13-1.45 2.64-1.6.4-.52.66.53 1.86v2.24h-.4l-.8-.92-.79.53.27-1.06-.4-.66.4-1.2-.13-2.37.53-.53h-.8l-2.12-.93-1.19-1.06v.93l-1.58.26.53 1.06.13 1.06 1.32.4h.4l.8 1.19-.8.4-2.38-1.99-.4 1.19-1.46-.26-1.05-.67h-1.33l-.66.8-2.9-.13-3.05-2.91-.53.52-1.2-.66-.12-.4-1.46-1.32.27-1.19-.93-2.11-.66-.14-1.99.93h-2.77l-1.06 1.72 1.19.8.8-.67.92.4 2.25-.4.53-.8.66.27.13.93-4.9 1.72-.92.8.53 1.71.4 2.52.26 1.32h-.4l-.66-.8-.53 1.06-.8-.66.54-1.98-1.33-2.65-2.11-2.64-1.59.79-.53-.4-3.3-.26-5.43-2.25-.26-.93 1.45-1.06.4.4 1.45.4.53-1.2-.66-2.5-1.85-1.86h-1.85l-3.05-1.98v-.93l-3.1-3.36-3.8 8.08 12.55 19.1 4.4 1.66 2.1 4.3 17.37 6.53-2.58 24.02c6.86.9 13.59 1.55 20.64 1.11l.71-1.78-.13-.92.92-.66 1.33-4.63-.27-.53 1.59-1.32-.8-.67 3.58-3.3-.53-.53 1.45-.4-1.19-1.06.4-.53 2.12.14 1.32-1.46.26-1.2-3.17-2.1-.8.39-3.17-1.85-1.06.26 1.06-1.06 2.91 1.72 1.59-.13 2.25 1.06 1.58-.66.4-2.12.93-.26 1.59.26 2.24-1.59.27-1.85.66-.8.8-3.3-4.64-.26-2.51-2.12-1.98-.66v-.53l2.64.26 2.91 1.99 2.78.26 2.25-2.78-.13-.4.66-1.45-.53-.66-1.59-.66-.13-1.2 2.65.4.79.93 1.45.27.4-.8 1.32.66.67-.13-.8-1.06v-.92l.93.8 1.72-1.07 1.45-3.3h.66l-.13-3.05-1.59-1.19-2.38-3.57v-.53l1.2.13 1.18-1.85-1.05-1.32.4-.93-1.07-.53h-1.19l-.66-.8-.26-1.05-2.91.13-1.46-.4-1.45.4.4 3.05 1.58 1.19-.26 1.45.4.27-.54.4-.66-.4-.53.4.53 3.96-.92 1.32-.14 2.78h-1.19l.27.8-1.06.66.13-.66-2.78-3.97v-2.65l.67.93h.92l-.53-1.72-2.25-2.91-.79-.8-1.45 1.2.4 2.38-.4.4.26 1.98-.93.13-.79-3.7-1.2-1.99 1.07-1.45-.53-.4-1.59-.27-.8.8-1.18-1.32.92-1.86-.8-.79 1.07.66.66-.66-1.2-1.06.14-.66-1.45-1.46-.53-3.3-2.25-2.78-.53.53zm33.47 8.46-1.32.27-.53 1.32zm-2.91.14-1.32.4h-.67l-.66.79 1.2.66 1.45-1.2zm5.29.53-1.06.92.8 1.06.92-1.32zm-20.5.13-.93.92 1.59.14.13-.4zm16.93 1.19-.4 3.3 1.06-1.05v-2.12zm-38.51 1.18-1.45 1.59-.27 1.85-.4.66-1.05-.26-.53 1.05.79.93 5.69 2.65 2.51-2.12-.4-.66-.92-.13.13-1.06-1.72-1.85-.13-.8zm46.17.53.66 1.59.93.53.13-.4zm-41.94 1.19-.66.8 1.06.92.66-.8zm45.12.93-.53 1.45.53.8 1.58-.14 1.06-.53-.4-.8h-1.45zm-3.7.26-1.73.93.13 4.5 1.06.92 1.59-.4 1.59.14.66-1.86-.4-1.45-1.06-1.33.4-1.32zm-50.8 1.85-.93.27.66 1.32.66-.66zm-3.58.66-.66.66.8.93.65-.66zm-5.95.53-.66.8.92.66.4-.4zm74.18.9.14.27.38.35.36.26h.52l.25-.28.69.09.23.3.15.17 1 .1.25.47v1.06l-.24.36-.4.05-.33-.39-.4.12-.05.46-.29.3-.35.07-.04.26-.46-.33-.6.07.13 1.51.2.24-.34.22-.47-.08-.07-1.35-.21-.25-.05-.3-.26-.1-.02-.29-.3-.07-.03-.2-.22-.23-.21-.14-.04.01v.04l-.38.01-1.88.24-.04.13-1.28.05 1.32-.18.06-.18 1.82-.06.38-.05-.03-1.5-.24-.16-.02-.47-.26-.27.17-.28zm-35.82 1.62-1.19.66.93 1.98.53-.4zm36.36 4.1.09.85.31.07-.06 2.53v.07l.6.05.25.24.42.06.28.31.38.1.19.17.83.02.23.45.4.44.64.47.36.48-.5.4-.45-.02-.14-.36-.24-.23-.38.02-.16.26-.23.22v.68l-.4.04-.08.22-.62-.03-.14-.35-.19.05-.35-.26-.4-.07-.19-.36.12-.28.43-.12.47-.02-.03-.69-.24-.14-.18-.47-.38-.45-.05-.31-.33-.17.08-.42-.25-2.6-.09-.02v-.82zm-29.48 7.67 1.32 2.12h1.6l.12-.53-1.06-.8zm-1.59.53.66 2.25.93-.27zm-.92.8-1.2.65.14 2.65.53.66-.4 6.48-1.85 2.91.4.8 3.3-1.46.66.27v1.19l.67 1.72 1.72-1.06 1.05-2.25.4-.26 1.06-.8-.53-1.06.93-1.19 1.05.66 1.06.27.8.93 1.19.26 1.58.8 1.86-2 .13-.92-1.46-1.32-.4.93-1.32-.14-.66.8-.4-.13.8-1.2-1.59-2.5-1.72-.67-2.38-1.59h-1.06l-1.32-1.32-.53.13-.13 1.32-.53.14zm56.62 6.6-1.06 1.07 1.85 1.05.8-.53-.8-1.32zm-17.73.54 1.72 1.58.93-.26v-.66zm-16.8 1.19 1.72 1.06.8-.27v-.66zm-1.85 1.19-.66.8.26.65.53.27.93.8.92-.93.13-1.06zm-8.47 5.29-1.72.4-1.06.92-.92-.66-.27 1.46-1.19 1.85 1.06 1.19.53.13h1.06l1.32-.53-.26-.53 1.72-2.51zm39.95 1.32-.4 1.33-.52.92.92.66.93-1.19v-1.59zm-33.07.13-1.72 1.06-.13 1.86 1.85 2.64.93-.66-.14-2.78zm9.66 32.28-.4.27v.66l-.53.8-.26-.67-.27 1.59-.66 1.72 1.06-.93.53.66 1.59-1.71-.8-1.2zm-1.85 1.46-1.06.93.79-.14zm3.43 7.8-1.85 1.33.66.4 1.6-1.06zm-5.55 11.91-1.46.66-.53.93.67.53 2.64.13 1.99.53.66-.27-1.85-2.5zm8.73 4.63-.8.93.14.66 1.72-1.32z"></path>
					<title>Nunavut</title>
				</g>
			</a>
			<a href="https://en.wikipedia.org/wiki/Nova_Scotia">
				<g>
					<path d="m278.554 198.207-.4.52.26.8-.4.52-.26 5.56 2.12 1.72 3.7-2.25-.26-1.85 1.06-.53-.93-1.2.27-.26-1.86.67-.4-.27-1.18.8.13-2.25-.4-.67zm.26 9.38-.93.8-.52-.53h-.53l-1.6 2.12-1.58-.14-.8.4-.12.66-1.2-.26-.79.13-.92-.27-.05.13-1.54 2.12.26-.09.13.1-1.05 3.3.4-.13 1.85-1.32 1.85-1.06.92.13v.26l-.8.4-1.05 1.2-.4.79h-.4l-.26-.93h-.26l-1.85 2.51-.27.93-2.51 4.23.92.27-.4 1.58 1.86 1.86.66-.4 1.06.53.13.8 1.46-.93v-.8l.79-.8 1.59-4.62-.27-.4-.53-.8.8-.92.92.4 1.06-.93-.26-.8 1.19-.92 1.19-1.32 2.78-4.1 1.19-1.2 1.06-.79v-.26l-1.86.26-.13-.4z"></path>
					<title>Nova Scotia</title>
				</g>
			</a>
			<a href="https://en.wikipedia.org/wiki/Ontario">
				<g>
					<path d="m163.864 176.877-.09.12-.02-.07-.03-.03-13.63 18.13-5.82 6.08-.13 20.69v.08l1.32-.26.53 3.57.8.53 1.98.13.66.53.8.13 1.32-.66 1.98.27 1.72 1.71-.13.4 1.32-.8 1.85 1.46 1.33.14 1.58-1.33h.4l.53.8h2.51l.53.4.55-.18.11.04.92.1-.01-.1h.15l.4-.8.13-.92.93-.92.53.66.53-.4.66-2.25.53.13-.53 1.72 1.32-1.98-.4-.8.27-.4 2.11.93 3.7-.26 1.6.8.13.79 2.38 2.64h1.98l1.72-.4v1.6l1.86 1.98-.53 1.59 1.45.52-.13 1.33-.26.8 1.71-.14 2.39 1.19 1.19-.4h3.04l4.1-.26.53.53h1.85l1.06-.93 2.78 2.91 1.19.66.13.53 1.99 2.25-.67 1.99-1.32.13-1.45-.93h-1.2l-.79-1.19-1.45-1.32-1.46.4 1.99 2.24.26 1.72-1.2 1.46.8 6.08-2.11 1.99-.14 2.12.14 1.98-2.38 1.2.66 1.45h2.38l.13-.93 1.85-1.46.53-.13.93-1.85.92-1.19 4.37-.27.93-.52-1.06-.27v-.53l1.19-.4 3.44-1.45h1.06l.26-.8-.53-.52-.53-1.06-1.06.53-1.85.4-.8-.53 1.33-2.12 1.32-1.59 4.63-2.38 1.2-.26.13.26 1.85-.4.92-.66-1.19-.53.27-.4h.66l.93-.92.55-.45.58-.05.18-.09 1.07-.47.8-1.45.12-.8.66-.8 1.46-2.24 1.1-.45 1-.2.02-.01-.53-2.12-.27-1.19-1.98-.13-3.7 2.64-.96.53-.75.22-1.6-.35-.8-1.45-1.72.26-1.98-1.32-4.37.13-2.51-1.45-2.25-2.25-.92-2.25-5.44-21.86v.07l-.12-.56-.13-.54.13 1.99h-.03l-1.56.26-2.12-1.32-2.38-2.38-.53.13-1.58-1.85-2.65-2.65h-.8l.14-2.51-.8-2.52-1.18-3.04v-2.12l.52-.26-.92-2.25-.53.53h-1.2l-1.58-.4-.13.13-6.35.53-3.04-1.72-.67.14-2.24-1.06h-1.6l-1.31-.4-.14-.53-1.72-2.25-2.4-1.5v-.11zm6.47 37.99v1.85l.53.53-.13 2.12-.27.4-.53.26-.4-.4-.52.53-.4-.4-.13-.52-.66.4-.13-.14.26-.8-.8-.39.93-1.06v-.53l-.4-.4 1.33-1.05h.66zm28.58 21.56-.66.4-1.46.13-.53.53h-2.25l.13.66h2.25l3.18.8.66-.66-.13-1.6-.66.27z"></path>
					<title>Ontario</title>
				</g>
			</a>
			<a href="https://en.wikipedia.org/wiki/Saskatchewan">
				<g>
					<path d="m102.074 154.937-.85 3.3-.08.27 1.68-.88 1.27.14.2.93 2.45.01 3.51 1.6-1.38.14-1.25-.52-1.26.8-2.7-.52-2.91-.1-.04.12-13.72 57.02 5.82 1.32 7.54 1.46 7.14 1.19 5.7.8 7 .79 1.86-41.28.73-6.31-.47.23-.26.92-1.33 1.33-1.19.92-1.06.13-.4-.52.14-.53.92-.14.14.4 1.58-1.06.27-.92-.13-.8-1.06-1.72 1.32-1.72.53.14.53-1.06 1.27-1.14.05-.32-.17-.06 1.23-10.65-3.3-.27-8.87-1.32z"></path>
					<title>Saskatchewan</title>
				</g>
			</a>
			<a href="https://en.wikipedia.org/wiki/Northwest_Territories">
				<g>
					<path d="m126.684 48.707-1.6.8-1.84.13-.4.53 1.45.66.8.53.4-.4.26.13v.27l.93.13.66-2.65zm-5.7 2.52-.79.52.4 1.06-.13.8 1.32-.66zm2.52 1.32-1.32.66-.13.93-.53.92 1.19 1.32h2.64v-2.5l.93-.4.4-.8zm-8.07.92-1.19.14-3.17 2.38h-1.6l-.12 1.06-.93-.27-1.72.8v1.58l1.59.53.8-.13-.14 1.06 1.32.4.8-.4v-.66h.92l2.51-3.05.14.27-1.06 1.59.8 1.58.92-1.05 1.59-.4.13-1.46h.4v-.79l-.14-.93.66.27.53-.4-.66-2.12h-.66l-.4.8-.4.13zm2.91 4.77.4 1.06h1.32l.27-.53zm-1.98 1.98-.53.66h-.13l-1.46 1.72 1.06.93-1.2-.4-1.18.93 1.58 1.06-2.24-.27-.67.53 1.72 1.85.4.66 2.25.8.53-.93.66.13-.26.93h3.7v.93l-1.98-.53-1.86.8-1.05.12-.27 1.2 1.72 1.45h1.06l3.78-1.15.7-4.64-1.17-.16v-1.46l-.8-.53.4-.53-.66-.66v-.8l-1.46-.92v-.66l-.66-.93zm-2.78.66-2.12 1.06-1.72.66.8 1.46 3.04-2.78zm-13.76 5.56v1.19l-.8.66.4 1.99-7.54 7.14 2.25 4.23-.13.66-.66 1.33.26.8h2.25l.93-.67.26.53 1.99.4 2.11-3.44 1.72-.53 1.06-1.2 4.9-2.38 1.45.14 1.2-1.2-1.2-3.83-1.19-1.06-1.59-.13-1.06-.53-1.05-1.19-.4-2.25-2.12.13-1.06-.52zm12.96 11.24-3.3 1.2-.66-.27-1.6.26-2.64 1.99-.13 1.59-.53-.27-1.06 1.06h-.53l-.66.8.4.52.66.4.4.53-.53.53.66.8 2.12.26 2.51.26-.13.53h-5.3l-1.05 1.46.66 1.58 1.59.53 1.62 1.04-3.07 1.84-.93.03v.4l.14.04 13.88 4.2 3.36-14.52.08-.3-1.72.66-1.06.13-.13-.4.92-.26.14-1.06-1.6-2.25-.92-.53-1.45 1.85-1.46-.13 2.12-1.72zm-42.2 2.52-1.19.66-.66-.4-1.06.4h-1.72l.27.4.26 1.32.4.4h1.06l3.44-1.33zm-5.95 1.45-4.23 5.7-.13.78-1.33 2.12-.53.13 1.72 1.2 2.25 2.23-.8 2.38-1.84 2.65.26.4h.53l.53.92 1.19.14-.93 2.9-.53-.13-1.32.67-.4.4.14.65-1.06 1.33.66 1.05-.53.8.53.66-.4.26 1.33 1.33-.14.53-.53 1.98 1.33.93-.8.8.4 1.84-1.45.4.4 1.72-.93.8v2.64l-.4.93-.53.66.53.92h1.18l.53 4.5.93 1.2-1.2 1.58-.13 1.85 1.06.53 1.46.13.79 1.06 2.51.53.4.66-.8.27.27 4.63.3.19-.3-.06.74.33.32.19v-.06l8.86 3.9 9.53 3.7 9.79 3.05 8.2 2.38 10.45 2.12 8.86 1.32 2.91.23.37.08v-.04h.03l2.78-24.21-17.33-6.22-2.38-4.5-3.8-1.18-.34-.16-12.62-19.2 3.54-8.3-2.79-3.04-1.19-.27-.53.67-1.06.79-1.06-.13-.53-.53.8-1.59-.13-1.06 1.32-1.59-.4-.4-1.85 1.6-.93.66-.92 1.19-.8-.53-.13-2.25.27-3.84-.4-1.45-.93.26.27 1.59-1.85.13.26.93-1.19.4.13-.8-3.17-.66-1.2.66h-.65v-.53l-1.72-.13-2.65.66-.8.93-.79-.8.27-.79 4.76-.66.53.26 5.16-.4-.8-.92-.92-.13-.8-.66-1.98.66-3.3-.93-.8 1.2-1.46-.67-1.05.66-2.25.27-.67-.53-.92.66-.13-.93-.4-.8-.4-.26-.12.24-.01-.37zm53.84 0v.66l.53.53.27-1.06zm1.06 0-.4 1.2zm-41.67 26.06 1.19.8 2.78.4.66-.27.66.26 3.3-.13 1.2-.26.66.53 1.46-.4 1.05.26.93 1.33-1.19-.27-1.85.27-1.06.8.26.52 1.72 1.32 1.46.53h1.06l1.45-1.32h.4l-.4.66v1.2l-1.85 1.45-.4.4v.66l.4.4-.53.26-.26-.4h-1.06l-1.2-1.46-.79.27-.79-.13-.13.53.4 1.58-.8-.13-1.19.8h-.8l-1.71.92-.66-.26v-.4l1.05.13 1.06-.8 1.72-1.05-.8-1.59-1.84.13-1.2 1.06-.4.8h-1.05l-2.12-2.12.67-.13.4.4h.39l.13-1.06.66-.14.66-.4h.93l.13-.13v-.92l-.4-.8v-.26l1.46.93 1.46.4-1.06-2.12-1.99-.66-.66.26-.66-.53h-.93l-.13-.8-1.45-.13-.93.93.13-1.98zm12.7 25.4.26.93h.27l.53-.4h.66l-1.46 1.06.4 1.2 1.59 1.84 1.19.8.8 1.59.92.66 3.04.26 1.59-.92 2.12-1.86 1.19-.4 1.32.27 2.51.93.66.53-.13.4-.53.13-1.32-1.2-1.72-.4-1.32.27-1.46.66.8.53 2.51-.66.13.27-1.72.79.8.53h-1.86l-1.32.93-2.51 1.85-1.06.66h-1.06l-.4-.53-1.32.26-.53.93-1.19 1.06-3.17-.27-2.39-.53-.79-.4-.8-1.18-1.45-.66-2.11-2.91.13-.8 2.64 3.44 1.06-.53 1.59 1.2.53-.93.8-.14.65-1.19 1.6.14h-.14l.66.13.53-.93-.4-1.59-.66-.4.4-.92-1.06-1.06-.13-1.72-.27-.53zm8.33 8.34-1.58.13v.66zm-.92.92-1.2.53 1.33.27 1.2-.66z"></path>
					<title>Northwest Territories</title>
				</g>
			</a>
			<a href="https://en.wikipedia.org/wiki/Yukon">	
				<g>
					<path d="m60.254 71.857-1.15 1.58-34.55 39.43.92 1.06.53-.13.53 1.32h1.2l1.26 1.05.07-.1.02.19-.1-.09-.27.38.4-.06v.04l-1.26 1.23v.14l6.55 5.36 9.6 6.68 8.99 5.42 11.64 5.96-.26-4.63.79-.27-.4-.66-2.51-.53-.8-1.06-1.45-.13-1.06-.53.13-1.85 1.2-1.59-.93-1.19-.53-4.5h-1.2l-.52-.92.53-.66.4-.93v-2.65l.92-.79-.4-1.72 1.46-.4-.4-1.85.8-.8-1.33-.92.53-1.98.14-.53-1.33-1.33.4-.26-.53-.66.53-.8-.66-1.05 1.06-1.33-.14-.66.4-.4 1.32-.66.53.14.93-2.91-1.2-.14-.52-.92h-.53l-.26-.4 1.85-2.65.8-2.38-2.26-2.25-1.72-1.19.53-.13 1.33-2.12.13-.79 4.23-5.69-1.32-1.32-.4-1.06v-1.59l-.4-.26.14-1.59-.6-.86zm-32.4 45.9.86-1.2-.86.15z" ></path>
					<title>Yukon</title>
				</g>
			</a>
			<a href="https://en.wikipedia.org/wiki/Prince_Edward_Island">
				<g>
					<path d="m265.714 205.607-.26 1.72-.27.52 2.39 1.2h1.05l2.91-.14.4.8h.4l.13-.8 2.12-.26.4-.66-.8-1.33v-.52l.66-.93-.13-.8-1.46 1.06-.66.4-.26-.66-.66.26-.27.8-1.06.26-.13.4-1.59.13-.4.53-.52-.4-.53-.13z"></path>
					<title>Prince Edward Island</title>
				</g>
			</a>
			<a href="https://en.wikipedia.org/wiki/New_Brunswick">
				<g>
					<path d="m261.084 202.827-1.45.8-.66 1.32-.8.13-.66-.93-2.64.14h-.02l-.12.18-.08-.05-.05.13-1.45.93-1.86 1.72-.52.13-.53-.4-1.86.8-.79 1.19.8 1.45-.54 1.33-1.05.92.74-.52-.87.76.92.16 1.85-1.32 1.06-.14 1.59 1.06.4.53 2.24 4.9.8 1.45 1.59.13.4 1.2.79.79 1.19.13.66-.66h.66l1.98-1.06.27-1.06.92-.13.8-1.2 1.06-1.71.53-.53.52-.66.4-1.59.93-.53.26-1.19 1.06-.53.13-.92h-2.9l-.8.26-1.72-1.72-.66.13-.66-1.45-.93-.14-.26.4-.53-.13.53-1.06v-.66l-.27-1.85z"></path>
					<title>New Brunswick</title>
				</g>
			</a>
			<a href="https://en.wikipedia.org/wiki/Manitoba">
				<g>
					<path d="m124.704 158.377-.2 1.9-1.05 9.1.36-.16-.06.46.03-.2.51.15-.52 1.45.79-.26h.53l-1.9 2.63.31 1.2-.54.21-.03.23-.14-.03-.74 6.47-1.84 40.87-.02.35v.06h.07l.07.13.04-.12 9.35.78 11.24.4h3.05v-2.23l.13.03.13-20.69 5.82-6.08 13.52-17.85.1-.15h-.1l.05-.05-.1.05-.02-.01-2.6-.12-1.85-1.32-2.38-.4-2.65 1.72-1.85-.66.4-.8-1.2-5.42-1.05-1.32.4-1.59-1.2-.4-.66.54-2.91-.14v-.79l-.93-1.06.27-1.45-.13-4v.03h-.09l.1-.04-.01-.23-7.41.13-8.86-.52-4.05-.5-.04-.02zm9.78 33.6.4 1.2-.66.26.13.93.26.26.14 1.19.13.4-.13.66.92.92.66 1.99.4 3.04.66 1.2.13 1.32.66 1.05.27 1.72 1.32 2.52-.26.53-.13 1.72.13.92-.66.53-.67 1.2-.52-.14-.27-2.51.27-1.06.26-1.33-.4-.4.53-1.58-.26-.53-.4.13-.66 1.6-.26-.27-.14-1.72.27-.4v-.4l-1.2-.8.14-.78h-.53l-.66 1.19-.53-.27-.4-1.85-.92-.4-.27-.66-.13-.66-.66-.8.13-.26-.8-.8.27-.52h.93l.4-.27v-.26l-1.2-.13-.66.26-.8-1.59 1.86-2.77-.13-1.06 2.25 1.06.4-.67-.67-.52.13-1.06-.79-.4z"></path>
					<title>Manitoba</title>
				</g>
			</a>
			<a href="https://en.wikipedia.org/wiki/Alberta">
				<g>
					<path d="m74.554 145.807-.06.21-.2-.07-13.63 33.2.17-.1.76.76.63.42-1.16.65 1.34 1.6-.25.4 1.35.67-.51 1.07 1.48 1.86-.12 2.25.95.67.03 1.4.69.33.96 1.4.03 1.52 1.23.34-.1 2.32.95 1.79.65 1.1-.28 1.08 1.18 2.02 1.18 1.36-.29 2.54-.8 3.08 1.04 2.02.14 1.58 5.55 1.59 9.53 2.51 13.76-57.01v-.07l-.8.2-.8.53-1.05 1.06-.8-.53-.79-.14-.13-.4.4-.26.8.27.39-.53 1.59-1.2 1.45-.79v.2l.13-.06.86-3.46.07-.12v-.13l-8.2-2.38-9.8-3.04-9.52-3.7z"></path>
					<title>Alberta</title>
				</g>
			</a>
			<a href="https://en.wikipedia.org/wiki/Newfoundland_and_Labrador">
				<g>
					<path d="m228.934 138.347-.53.65-.26.6.8.13v.92l.26 1.06.93.53.4-.66.52 1.32.93 1.06-1.32 1.06 1.98-.53.8.13 1.19-.79.4.4-1.2 1.19 1.06 1.32-.8 1.06.27.8 2.12.92 1.19.26.8 1.2-.27.92.8.4-.4.92.92.93-.66 1.19 1.72 1.32h-.66l1.06 1.72 1.32-.4-.4.67 1.72 2.11-.53.53 1.2-.26.26 1.32.8 1.72-.8.4 1.19 1.19-1.32.53-.93-.4-1.06.8-.8-.67-1.85 1.85-2.64-.26-2.25-.93 1.59 1.72.13 1.33-3.18-1.2.8 1.06 1.59 1.06-.53 1.06-1.33.93 1.2.8-.14 1.18 2.65 1.99.53-.27 1.45 2.12-1.06.66.67.8 2.11.79.27-.53-.66-1.06.66-.93 1.45 1.6-.13.52.66.8-.4.66.53.66.4-.66.93.66 1.72-.4.13-.66 1.85 1.45 1.2-.53 1.18 1.06.93-1.06-.93-2.38-.4-1.85-.66-1.06v-.92l.67-1.33.92.53-1.19 1.2.13.79 1.72 1.19.53.92 20.37-12.43 1.93 2.56.06-.08v.1l.86-.73.8-3.04.26-2.38-.66-1.06-.53-1.06-.9.26-.05-.02-2.1-3.02-2.11-.8-1.72-.12-.93.92v1.46l-.66-.4-.26-1.32-1.6-1.33-2.37 1.86.4.53-1.6 2.11v1.72l-.52.27-1.66 3.3-.07-.07-.13-3.23 1.99-3.18v-1.06l2.38-3.17-.13-1.2-1.72.14-.66-.66-.53.4v1.05l-1.06.4-2.38-.8-.8.8-1.05-.53-.93 1.2-1.46.26.27-1.2-1.06-1.32-1.98.66-1.2-.52-.66.52v-.79l-.92-.4-.8.53-1.32-1.06-.53-1.72.27-1.98-.4-.4-1.32.14-.27-.53-1.72-.4.66-.93-.7-1.04h-.01c-.13.21-1.35.25-1.53.25l-.14-.93-1.45-.53-.27-.66-1.86.75-.07-.06.48-.95-.53-1.32-.66.13-1.72-1.32-.8-.14-.52-.4-2.12-.92-1.2-1.59-.1-.12zm50.15 27.04-.14.53h-.53l-1.05 3.44-.14 3.57.27 1.86 1.31 5.02-.26 1.86 1.05 1.19.53.26-.79.4v2.25l.26.92h-1.05l-.8 1.06.8.4.92-.66.13-.27.67-.53.4.53-.4.27v2.24l-.8 1.6.93.65-.13.67h.92l.93-.4 1.59-1.72 1.19-.93.66-.13 1.45-1.06.93.13 1.19-.66.53-1.06 1.45-1.45.4-.66.4-.4.53.4.13 1.06 1.45-.67-.26-1.05 1.06-1.06.92.53-.66.92-.26 2.12-.8 1.72.67.66 1.98-1.72.13-.53-.26-2.38.92-1.06-.66-2.78.4-.26h.66l1.2 1.32.92 1.72-.13.8.79.79.53-.26.26-2.25.53-.27v1.06l1.46 1.32.26-.92.66-.66v-.67l-.66-1.85-.4-2.78-1.58-.53-.27 1.72-.53.8-.66-.53.13-1.59-.26-.66.26-.8-.52-.39-.67.66v3.44l.4.53-.26-.13-1.33-.8.27-.66-.4-.53h-1.19l-.13-.13 1.06-1.32v-.4l.4-.4-.27-2.24-.53-.14v.66l-.66.8.13.92-1.19.53.13-.92-.53-.53-1.06.13-.4-.4.4-2.11-.4-.4-1.05-.13-2.78 1.32v.66l-1.19 1.72-.93-1.06-.26.67-.93.66-2.11-.53.53-.93.4-.92-.27-.67-.66.53-1.06.4-.27-.13-.79.13.4 1.32-.53.8.4 1.58-1.2-1.72-.26-4.1-1.2-1.45.54-.27.4.4-.27-2.25-.26-.66-.8.93-.26-.67 1.06-1.19-.14-1.19zm-30.83.53.53.66-.13.53.66 1.33h-.53l-.53.53v.52l-1.32.93-.8-.53-1.05-.13.53.66-.4.4-.53.26.66.66-.8.53-.79-.26.8 1.59 2.38.26v.53l-1.46-.13h-1.58l-1.2-2.12-.4-.26h-.39l-3.3-1.06-1.33.13.4-1.98.66 1.05 3.3 1.33.4-.53-.92-1.59.8-.8 1.58 1.2.26-.53-.4-.4 1.2-.8-.53-1.58 2.11 1.59 1.33.53.26-.4-.92-.53.26-.53z"></path>
					<title>Newfoundland and Labrador</title>
				</g>
			</a>
		</svg>
		<footer>
			<p>Creator: Artem Pylypchuk<br> 
			<a href="cont.html">Contacts</a></p>
		</footer>
	</body>
</html>