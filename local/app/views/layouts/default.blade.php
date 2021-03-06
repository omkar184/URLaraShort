<!DOCTYPE html>
<html>
<title>TinyLinks</title>
<head>
    <script type="text/javascript" src="{{url()}}/assets/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="{{url()}}/assets/js/custom.js"></script>
    <link rel="stylesheet" type="text/css" href="{{url()}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{url()}}/assets/css/custom.css">
</head>
<body>
<header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar"> </header>
<div class="container">
<div class="row">
<div class="col-md-8 url-div">
<h1 class="bd-title mt-0">Short Your URL with Laravel</h1>
<div class="form-group">
Enter URL:
<input type="url" name="url" class="main-url form-control" id="main-url" placeholder="Enter your url">
</div>
<div class="loader-div"></div>
<div class="form-group">
Short URL:
<input type="url" name="url" class="short-url form-control" id="short-url" disabled="" placeholder="Your short URL">
</div>
<button onclick="app.shortUrl({element:this});" data-url="{{url('shortUrl')}}" class="btn btn-primary">Short Now</button>
</div>
<div class="col-md-3">
<h4>Top Recently Used Urls to Short</h4>
<div class="top-100-urls">
<ul>
</ul>
</div>
</div>
</div>
</div>
</body>
</html>