<?php get_header(); ?>
<!-- Page heading Section -->
<?php esol_breadcrumbs(); ?>
<!-- /Page Title Section -->
<style>
.modalM{
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
.modal-contentM{
    background-color: #fefefe;
    margin: auto;
    border: 1px solid #888;
    width: 750px;
height: 1200px;
max-height: calc(100vh - 160px);
    overflow-y: auto;
}
.closeM{
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.closeM:hover,
.closeM:focus{
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
mark { 
    background-color: #000033;
    color: #ffcc00;
	font-size:18px;
	text-align:right;
}    
</style>
<a href="#openmodalM" id="openmodalM" style="color:#00bfff;"><STRONG><mark>WEBSITE KEYPLAN</mark></a></STRONG>

<div id="mymodalM" class="modalM">

  <div class="modal-contentM">
  <span class="closeM">×</span>
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
<div class="container">
	<div class="row">
<!-- blog-area -->
		<div class="col-md-8">
			<div class="blog-post">
				<div class="row">
				<?php 
				if(have_posts()) :
					the_post(); ?>
					<div class="col-md-12">
						<div class="blog-item" data-aos="fade-up" data-aos-duration="1500">
						 <?php $esol_default_img = array('class' => "img-responsive");?>
								<?php if(has_post_thumbnail()) : ?>
										<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('',$esol_default_img);?> </a>
										<?php endif; ?>
							<div class="text-content">
								<?php the_content(); ?>
								<?php wp_link_pages( array( 'before' => '<div class="blog-pagination wow animated fadeInLeft">' . __( 'Pages:', 'esol' ), 'after' => '</div>' ) ); ?>
							</div>
							
						</div>
					</div>
					<?php endif; comments_template( '', true );?>
				</div>
			</div>
		</div>	
<!-- Sidebar Section -->	
<?php get_sidebar(); ?>	
	</div>
</div>

<?php get_footer(); ?>
<script>
var modalM = document.getElementById('mymodalM');
var btnM = document.getElementById("openmodalM");
var spanM = document.getElementsByClassName("closeM")[0];
btnM.onclick = function() {
    modalM.style.display = "block";
}
spanM.onclick = function() {
    modalM.style.display = "none";
}
window.addEventListener("click", function(event) {
    if (event.target == modalM) {
        modalM.style.display = "none";
    }
});
</script>	