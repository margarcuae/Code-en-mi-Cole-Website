
<style>
@-webkit-keyframes scroll {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  99% {
    -webkit-transform: translateX(calc(-300px * 21));
            transform: translateX(calc(-300px * 21));
  }
  100% {
    -webkit-transform: translateX(calc(0));
            transform: translateX(calc(0));
  }
}

@keyframes scroll {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  99% {
    -webkit-transform: translateX(calc(-300px * 21));
            transform: translateX(calc(-300px * 21));
  }
  100% {
    -webkit-transform: translateX(calc(0));
            transform: translateX(calc(0));
  }
}
.slider {
  height: 100px;
overflow:hidden;
  position: relative;
  
  margin-right:3%;
  margin-left:3%;
}
.slider::before, .slider::after {
  background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
  content: "";
  height: 100px;
  position: absolute;
  width: 200px;
  z-index: 2;
}
.slider::after {
  right: 0;
  top: 0;
  -webkit-transform: rotateZ(180deg);
          transform: rotateZ(180deg);
}
.slider::before {
  left: 0;
  top: 0;
}
.slider .slide-track {
  -webkit-animation: scroll 60s linear infinite;
          animation: scroll 60s linear infinite;
  display: flex;
  
}
.slider .slide {
  height: 100px;
  margin-left:50px;
}
</style>


<div class="slider">
	<div class="slide-track">
		
		<div class="slide">
			<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/2.png" height="70" alt="" />
		</div>
		<div class="slide">
			<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/3.png" height="100" alt="" />
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/4.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/5.png" height="70"/>
		</div>
		<div class="slide">
			<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/1.png" height="70"  alt="" />
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/6.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/7.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/8.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/9.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/10.png" height="70"/>

		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/11.png" height="70"/>

		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/12.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/13.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/14.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/15.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/16.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/17.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/18.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/19.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/20.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/21.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/22.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/23.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/24.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/25.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/26.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/27.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/28.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/29.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/30.png" height="70"/>
		</div>
		<div class="slide">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/31.png" height="70"/>
		</div>
		<div class="slide">
			<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/6.png" height="70"  alt="" />
		</div>
		<div class="slide">
			<img src="<?php echo get_bloginfo('template_directory'); ?>/img/home/aliados2/7.png" height="70" alt="" />
		</div>
	</div>
</div>


