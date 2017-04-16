        </main>
        <footer>
        	<div id="footer-container">
	        	<address>
	        		<p class="footer-heading">Petit Four</p>
		        	<p>Stadsgatan 23<br>
		        	111 11 Staden</p>
		        	<a href="mailto:info@petitfour.se">info@petitfour.se</a>
		        	<p>00-123 45 67</p>
	        	</address>
	        	<div id="footer-logo">
	        		<a href="<?php echo get_option('home'); ?>">
	        			<img src="<?php echo get_template_directory_uri();?>/images/logo-white.png" alt="Logotyp">
	        		</a>
	        	</div><!-- /#footer-logo -->
	            <div id="hours">
	            	<p class="footer-heading">Öppettider</p>
	            	<p>Måndag-Torsdag 10-23<br>
	            	Fredag-Söndag 16-01</p>
	            </div><!-- /#hours -->
	        </div><!-- /#footer-container -->
        </footer>
		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
        <!-- JS-fil -->
        <script src="<?php echo get_template_directory_uri();?>/script/script.js"></script>
	    <!-- Ger plats åt plugins -->
	    <?php wp_footer(); ?>
    </body>
</html>