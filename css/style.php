<style type="text/css">

html{
	scroll-behavior: smooth;
}

*{
	margin: 0;
	padding: 0;
	box-sizing:border-box;
	font-family: 'Muli', sans-serif; 
}
.row{
	margin-left: 0!important;
	margin-right: 0!important;
}
.nav_style{
background-color: #a29bfe!important;
width: 100%;

}
.navbar-toggler-icon{
	
	}
.nav_style a{
color: white;
}

/** main header**/

.main-header{
	height: 450px;
	width: 100%;

}
.rightside h2{
	font-size: 2rem;

}
.corona_rot img{
	animation: corona 3s linear infinite;
}
@keyframes corona{
0% { transform: rotate(0); }
100%{ transform: rotate(360deg); }

}

.leftside img{animation: beat 5s linear infinite; }

@keyframes beat{
	0%{transform: scale(.75);  }
	20%{transform: scale(1);  }
	40%{transform: scale(.75);  }
	60%{transform: scale(1);}
	80%{transform: scale(.75);}
	100%{transform: scale(.75);}

}

/*****corona_update**/
.corona_update{
	margin: 0 0 30px 0;
}
.corona_update h3{
	color: #ff6666;
}
.corona_update h1{
	font-size: 2rem;
	text-align: center;
}

/**about section**/
.sub_section{
	background-color: #fbfafd;

}
.tamal{
	color: #660033;
	font-size: 20px;
	
}

/***footer**/
.footer_style{
	background-color: #a29bfe!important;
	padding-top: 30px;
	padding-bottom: 30px;
}
.footer_style p{
	margin: 0;

}


.back-to-top{
display: none;
position: fixed;
bottom: 30px;
right: 40px;
z-index: 99;
border: none;
outline: none;
background-color: #00abff;
color: white;
cursor: pointer;
padding: 10px;
border-radius: 10px;
}
.back-to-top: hover{
	background-color: #606060;
}


/*responsive*/
@media(max-width: 750px)
{
	.main_header{
		height: 400px;
		text-align: center;
	}

	.main_header h2{
		text-align: center;
		padding: 0;
		width: 100%;
		font-size: 22px;
		height: 147px;
	}
	.tamal{
		text-align: center;
		font-size: 15px;
	}
	.count_style{
		display: inline!important;

	}
	.count_style p{
		text-align: center;
	}
	.nav_style{
		width: 100%;
	}
.about_res{
	margin-left: 0!important;
}

}
</style>