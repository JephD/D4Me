  		<style type="text/css">

/*
 * Main navigation
 *
 * Turn the `.navbar` at the top of the docs purple.
 */

.bs-docs-nav {
  text-shadow: 0 -1px 0 rgba(0,0,0,.15);
  background-color: #f7505a;
  border-color: #fff;
  border-color: rgba(255,255,255,.33);
}
.bs-docs-nav .navbar-collapse {
  border-color: #463265;
}
.bs-docs-nav .navbar-brand {
  color: #fff;
}
.bs-docs-nav .navbar-nav > li > a {
  color: #fff;
}
.bs-docs-nav .navbar-nav > li > a:hover {
  color: #fff;
}
.bs-docs-nav .navbar-nav > .active > a,
.bs-docs-nav .navbar-nav > .active > a:hover {
  color: #fff;
  background-color: rgba(255,255,255,.3);
}
.bs-docs-nav .navbar-toggle {
  border-color: #563d7c;
}
.bs-docs-nav .navbar-toggle:hover {
  background-color: #463265;
  border-color: #463265;
}

/* Navbars */
.bs-example .navbar:last-child {
  margin-bottom: 0;
}
.bs-navbar-top-example,
.bs-navbar-bottom-example {
  z-index: 1;
  padding: 0;
  overflow: hidden; /* cut the drop shadows off */
}
.bs-navbar-top-example .navbar-header,
.bs-navbar-bottom-example .navbar-header {
  margin-left: 0;
}
.bs-navbar-top-example .navbar-fixed-top,
.bs-navbar-bottom-example .navbar-fixed-bottom {
  position: relative;
  margin-left: 0;
  margin-right: 0;
}
.bs-navbar-top-example {
  padding-bottom: 45px;
}
.bs-navbar-top-example:after {
  top: auto;
  bottom: 15px;
}
.bs-navbar-top-example .navbar-fixed-top {
  top: -1px;
}
.bs-navbar-bottom-example {
  padding-top: 45px;
}
.bs-navbar-bottom-example .navbar-fixed-bottom {
  bottom: -1px;
}
.bs-navbar-bottom-example .navbar {
  margin-bottom: 0;
}
@media (min-width: 768px) {
  .bs-navbar-top-example .navbar-fixed-top,
  .bs-navbar-bottom-example .navbar-fixed-bottom {
    position: absolute;
  }
  .bs-navbar-top-example {
    border-radius: 0 0 4px 4px;
  }
  .bs-navbar-bottom-example {
    border-radius: 4px 4px 0 0;
  }
}


		</style>
		<!-- Main Navigation & Logo -->                    
					<div class="main-navigation">
                    
                    	<div class="row">
                            
                            <!-- Main Navigation -->
                            <div class="col-md-12 columns">

							

		<div class="header-main  shrink" style="position:fixed;">

			 <div class="navbar-header">
             <div class="navbar-brand">
	  			D4ME
	  		  </div>
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
					
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
				
	  		<nav class="collapse navbar-collapse   bs-navbar-collapse d4me"  style="height:50px;background-color:#222;border-color:#080808;padding:0 130px 0 150px;">
	  		
		      <ul class="nav navbar-nav navbar-right">
				<li><a  href="#" target="_blank" >Home</a></li>
					<li><a  href="#" target="_blank" >About Us</a></li>
					<li><a  href="#" target="_blank" >Designers</a></li>
					<li><a  href="#" target="_blank" >Contact Us</a></li>
					<!-- <li><a  href="#" target="_blank" >Sign Up</a></li> -->
					
					<li><a href="/signup">Sign Up</a></li>



          <li class="divider-vertical"></li>
					 <li class="dropdown" id="menuLogin">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login</a>
            <div class="dropdown-menu" style="padding:17px;">
              <form class="form" id="formLogin"> 
                <input name="username" id="username" type="text" placeholder="Username" class="form-group"> 
                <input name="password" id="password" type="password" placeholder="Password" class="form-group"><br>
                <button type="button" id="btnLogin" class="btn">Login</button>
              </form>
            </div>
          </li>
            	</ul>
							
			</nav>

		</div>

                            </div>
                            <!-- /Main Navigation -->
                        
                        </div>              
                    
					</div>
                    <!-- /Main Navigation & Logo -->

		<script type="text/javascript">
       $(document).ready(function(){
    //Handles menu drop down
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
    });
});

		</script>