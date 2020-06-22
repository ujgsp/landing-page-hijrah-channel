<!-- <div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
						<h2><a href="index.html"><span>H</span>ijrah <i>Channel</i></a></h2>
		
					</div>
					<ul>
						<li><i class="fa fa-map-marker"></i> Jl. Lurah Namat Rt. 1 RW. 6 Kelurahan Jatirangga Kecamatan Jatisampurna Kota Bekasi.</li>
						<li><i class="fa fa-map-marker"></i> Jl. Kolonel Anas Bin Malik by Pas Simpang Apar Kota Pariaman.</li>
						<li><i class="fa fa-phone-square"></i><a href="https://api.whatsapp.com/send?phone=628111711251&text=Assalamualaikum,%20Apakah%20Paket%20Parabola%20Mini%20TV%20Islam%20+%20Rodja%20TV%20ini%20Ready?" target="_blank"> 0811 1778 678 </a></li>
						
					</ul> 
				</div>
				<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>Hijrah Channel</h3>
						<ul>
							<li><a href="about.html">Produk</a></li>
							<li><a href="marketplace.html">Partner</a></li>  
							<li><a href="kontak.php">Kontak</a></li>  
							<li><a href="tentang.php">Tentang</a></li>
						</ul>
					</div>
					
					
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div> -->
	<!-- //footer -->		
	<div class="copy-right"> 
		<div class="container">
			<p>© 2020 Hijrah Channel . All rights reserved | Design by <a href="http://w3layouts.com"> <span style="color: black;">W3layouts.</span></a></p>
		</div>
	</div> 
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->	
	<!-- countdown.js -->	
	<script src="js/jquery.knob.js"></script>
	<script src="js/jquery.throttle.js"></script>
	<script src="js/jquery.classycountdown.js"></script>
		<script>
			$(document).ready(function() {
				$('#countdown1').ClassyCountdown({
					end: '1388268325',
					now: '1387999995',
					labels: true,
					style: {
						element: "",
						textResponsive: .5,
						days: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#1abc9c",
								lineCap: 'round'
							},
							textCSS: 'font-weight:300; color:#fff;'
						},
						hours: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#05BEF6",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						},
						minutes: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#8e44ad",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						},
						seconds: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#f39c12",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						}

					},
					onEndCallback: function() {
						console.log("Time out!");
					}
				});
			});
		</script>
	<!-- //countdown.js -->
	<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 
</body>
</html>