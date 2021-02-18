<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap\css\style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	
<style>
.login-content{
	position: absolute;
	left:50%;
	top:50%;
	transform: translate(-50%, -50%);
}

.btn{
	border: none;
	display: block;
	font-size: 1.2rem;
	width: 300px;
	height: 50px;
	border-radius: 15px;
	background-image: linear-gradient(to right, #32be8f, #38d39f);
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	cursor: pointer;
	transition: .5s;
}
.btn:hover{
	transform:translateY(-3px);
	box-shadow: 0px 7px 7px 7px rgb(0, 0, 0,0.2);
	transition-duration: .5s;
}

.one{
	animation: moveInLeft 1.5s;
}

.two{
	animation: moveInRight 1.5s;
}

@keyframes moveInLeft{
	0%{
		opacity:0;
		transform:translateX(-50%);
	}
	80%{
		transform:translateX(3%)
	}
	100%{
		opacity:1;
		transform:translateX(0);
	}
}

@keyframes moveInRight{
	0%{
		opacity:0;
		transform:translateX(50%);
	}
	80%{
		transform:translateX(-3%)
	}
	100%{
		opacity:1;
		transform:translateX(0);
	}
}
</style>
</head>

<body>
		<div class="login-content">
			<form action="/dashboard">
				<input type="submit" class="btn one" value="Borrow Book">
				<br>
				<br>
				<input type="submit" class="btn two" value="Manage Books">
            </form>
        </div>
</body>
</html>
