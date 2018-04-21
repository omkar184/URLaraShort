<style>
    *{
    transition: all 0.6s;
}

html {
    height: 100%;
}

body{
    font-family: 'Lato', sans-serif;
    color: #888;
    margin: 0;
}

#main{
    display: table;
    width: 100%;
    height: 100vh;
    text-align: center;
}

.fof{
	  display: table-cell;
	  vertical-align: middle;
          background: #002047;
}

.fof h1{
	  font-size: 50px;
	  display: inline-block;
	  padding-right: 12px;
	  animation: type .5s alternate infinite;
          color:#fff;
}

@keyframes type{
	  from{box-shadow: inset -3px 0px 0px #888;}
	  to{box-shadow: inset -3px 0px 0px transparent;}
}
.go-back-btn{
    border:2px solid #fff;
    padding:10px 20px 10px 20px;
    margin-top: 50px;
    color: #f1f1f1;
}
.go-back-btn:hover{
    background: #fff;
}
</style>
<div id="main">
    	<div class="fof">
        		<h1>Oops...!<br>404 Page Not Found</h1>
                        <br>
                        <br>                       
                        <br>                       
                        <a href="{{url()}}" class="go-back-btn">
                            Go Back Home
                        </a>
    	</div>
</div>