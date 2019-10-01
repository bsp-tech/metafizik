<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5d8bf12b6c1dde20ed037c74/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

	<nav class="navbar mobilnav navbar-inverse r d-lg-none" style="background-color: #fd861f">
        <div class="container-fluid">
            <a href="/" class="col-8 own_logo text-decoration-none">
                <span style="color: #000;">SELAHATTIN</span><span class="text-light"> AKKAYA</span>
            </a>
            <div class="navbar-header">
                <button type="button" class="clicknav navbar-toggle border-0 bg-transparent text-white"
                    data-toggle="collapse" data-target="#myNavbar" aria-expanded="true">
                    <span style="font-size: 2.5em;">
                        <i class="fas fa-bars"></i>
                    </span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="myNavbar">
			<?php require('menulistmobile.php');?>
            </div>
        </div>
    </nav>
    <section style="z-index: 9999;background-color: #fd861f" class="text-right navbar text-white d-none d-lg-block">
        <div class="row m-0">
            <a href="/" class="text-center own_logo col-4 mt-3 text-decoration-none">
                <span style="color: #000;">SELAHATTIN</span><span class="text-light"> AKKAYA</span>
            </a>
            <div class="col-8">
			<?php require('menulist.php');?>
            </div>
        </div>
    </section>