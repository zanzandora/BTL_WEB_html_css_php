<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        

        .overlay {
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 55vh;
	z-index: 100;

	background: rgb(255, 255, 255);
	background: linear-gradient(
		0deg,
		rgba(255, 255, 255, 1) 75%,
		rgba(255, 255, 255, 0.9) 80%,
		rgba(255, 255, 255, 0.25) 95%,
		rgba(255, 255, 255, 0) 100%
	);
}

.text {
	font-family: "Yanone Kaffeesatz";
	font-size: 100px;
	display: flex;
	position: absolute;
	bottom: 40vh;
	left: 50%;
	transform: translateX(-50%);
	user-select: none;

	.wrapper-text {
		padding-left: 20px;
		padding-right: 20px;
		padding-top: 20px;
		.letter {
			transition: ease-out 1s;
			transform: translateY(40%);
		}
		.shadow {
			transform: scale(1, -1);
			color: #999;
			transition: ease-in 5s, ease-out 5s;
		}
		&:hover {
			.letter {
				transform: translateY(-200%);
			}
			.shadow {
				opacity: 0;
				transform: translateY(200%);
			}
		}
	}
}


    </style>
</head>
<body>

<div class="dashboard">
<div class="overlay"></div>

<div class="text">
	<div class="wrapper-text">
		<div id="L" class="letter">W</div>
		<div class="shadow">W</div>
	</div>
	<div class="wrapper-text">
		<div id="I" class="letter">E</div>
		<div class="shadow">E</div>
	</div>
	<div class="wrapper-text">
		<div id="G" class="letter">L</div>
		<div class="shadow">L</div>
	</div>
	<div class="wrapper-text">
		<div id="H" class="letter">C</div>
		<div class="shadow">C</div>
	</div>
	<div class="wrapper-text">
		<div id="T" class="letter">O</div>
		<div class="shadow">O</div>
	</div>
	<div class="wrapper-text">
		<div id="N" class="letter">M</div>
		<div class="shadow">M</div>
	</div>
	<div class="wrapper-text">
		<div id="E" class="letter">E</div>
		<div class="shadow">E</div>
	</div>
	<!-- <div class="wrapper-text">
		<div id="S" class="letter">A</div>
		<div class="shadow">A</div>
	</div>
	<div class="wrapper-text">
		<div id="Stwo" class="letter">D</div>
		<div class="shadow">D</div>
	</div> -->
</div>
</div>

</body>
</html>
