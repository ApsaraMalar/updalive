<?php get_header(); ?>
<!-- Page heading Section -->
<?php esol_breadcrumbs(); ?>	
<!-- Page heading Section -->
<style>
.modal{
   display: none; 
   position: fixed; 
   z-index: 99999; 
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4);	
}
.modal-content{
    background-color: #fefefe;
    margin: auto;
    border: 1px solid #888;
    width: 750px;
height: 1200px;
max-height: calc(100vh - 160px);
    overflow-y: auto;
}
.close{
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover,
.close:focus{
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
th{
font-size:20px;}
td{
font-size:17px;}
td a{
font-size:18px;
color:#002b80;
text-decoration: underline;}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
mark{ 
    background-color: #000033;
    color: #ffcc00;
	font-size:18px;
	text-align:right;
}
</style>
<a href="#openmodal" id="openmodal"><STRONG><mark>WEBSITE KEYPLAN</mark></a></STRONG>

<div id="mymodal" class="modal">

  <div class="modal-content">
  <span class="close">×</span>
  <table style="width:100%">
  <tr>
    <th><center>CONTENT</center></th>
    <th><center>FREE</center></th> 
    <th><center>PREMIUM</center></th>
  </tr>
  <tr>
    <td><center><a href="https://www.updatraining.com/2018/10/19/mock-track/">MOCK TEST(REAL TIME UPDA EXAM BASED PATTERN)</a></td>
    <td>1 QUESTION PAPER</td>
    <td>MULTIPLE QUESTION PAPERS</td>
  </tr>
  <tr>
    <td><center><a href="https://www.updatraining.com/2018/08/25/thermodynamics/"><img src="https://www.updatraining.com/wp-content/uploads/2018/11/thermocover.jpg" alt="" style="width:80px;height:80px;"/></br>THERMODYNAMICS</center></td>
    <td>FULL CONTENT,LIMITED PRACTICE TESTS</td>
    <td>FULL ACCESS</td>
  </tr>
  <tr>
    <td><center><a href="https://www.updatraining.com/2018/08/25/refrigeration/"><img src="https://www.updatraining.com/wp-content/uploads/2018/11/refcover.jpg" alt="" style="width:60px;height:60px;"/></br>REFRIGERATION</td>
   <td>LIMITED ACCESS</td>
    <td>FULL ACCESS</td>
  </tr>
    <tr>
    <td><center><a href="https://www.updatraining.com/2018/08/25/pmp/"><img src="https://www.updatraining.com/wp-content/uploads/2018/11/pmpcover.jpg"  alt="" style="width:60px;height:60px;"/></br>PMP</center></td>
   <td>LIMITED ACCESS</td>
    <td>FULL ACCESS</td>
  </tr>
    <tr>
    <td><center><a href="https://www.updatraining.com/2018/08/25/nfpa/"><img src="https://www.updatraining.com/wp-content/uploads/2018/11/nfpacover.jpg" alt="" style="width:60px;height:60px;"/></br>NFPA</center></td>
   <td>LIMITED ACCESS</td>
    <td>FULL ACCESS</td>
  </tr>
    <tr>
    <td><center><a href="https://www.updatraining.com/2018/08/25/ic-engines-gas-turbines/"><img src="https://www.updatraining.com/wp-content/uploads/2018/11/iccover.jpg" alt="" style="width:60px;height:60px;"/></br>IC ENGINES AND COMPRESSORS</center></td>
   <td>LIMITED ACCESS</td>
    <td>FULL ACCESS</td>
  </tr>
    <tr>
    <td><center><a href="https://www.updatraining.com/2018/08/26/hookes-law/"><img src="https://www.updatraining.com/wp-content/uploads/2018/11/hookcover.jpg" alt="" style="width:60px;height:60px;"/></br>HOOKE'S LAW AND YOUNG'S MODULUS</center></td>
   <td>LIMITED ACCESS</td>
    <td>FULL ACCESS</td>
  </tr>
    <tr>
    <td><center><a href="https://www.updatraining.com/2018/08/31/heat-and-mass-transfer/"><img src="https://www.updatraining.com/wp-content/uploads/2018/11/hmtcover.jpg" alt="" style="width:60px;height:60px;"/></br>HEAT AND MASS TRANSFER</center></td>
   <td>LIMITED ACCESS</td>
    <td>FULL ACCESS</td>
  </tr>
    <tr>
    <td><center><a href="https://www.updatraining.com/2018/09/03/general/"><img src="https://www.updatraining.com/wp-content/uploads/2018/11/generalcover.jpg" alt="" style="width:60px;height:60px;"/></br>GENERAL</center></td>
   <td>LIMITED ACCESS</td>
    <td>FULL ACCESS</td>
  </tr>
    <tr>
    <td><center><a href="https://www.updatraining.com/2018/08/25/gas-dynamics/"><img src="https://www.updatraining.com/wp-content/uploads/2018/11/gdcover.jpg" alt="" style="width:60px;height:60px;"/></br>GAS DYNAMICS</center></td>
   <td>LIMITED ACCESS</td>
    <td>FULL ACCESS</td>
  </tr>
  <tr>
    <td><center><a href="https://www.updatraining.com/2018/08/25/fluid-mechanics/"><img src="https://www.updatraining.com/wp-content/uploads/2018/11/fluidcover.jpg" alt="" style="width:60px;height:60px;"/></br>FLUID MECHANICS</center></td>
   <td>LIMITED ACCESS</td>
    <td>FULL ACCESS</td>
  </tr>
</table>
<h4><center><strong>CONTACT <u>admin@updatraining.com</u> TO AVAIL THE PREMIUM PLAN</strong></center></h4>
  </div>
  </div>
<div class="clearfix"></div>

	<div class="container ">
		<div class="row"><!-- Blog Area Section -->	
			<div class="col-md-8">
				<?php
				if(have_posts()):
					the_post(); ?>
					<p><?php the_content(); ?></p>
				<div class="blog-area" data-aos="fade-up" data-aos-duration="200" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<h3 class="content_headings_black"><a href="<?php the_permalink(); ?>"><?php  ?></a></h3>	
				</div><!--/.blog-item-->	
				<?php endif; 								comments_template( '', true ); ?>
			</div>			
			<!-- /Blog Area Section -->
			<?php get_sidebar(); ?>
		</div>
	</div>
	
<?php get_footer(); ?>
<script>
var modal = document.getElementById('mymodal');
var btn = document.getElementById("openmodal");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.addEventListener("click", function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
});
</script>
