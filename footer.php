			<div id="Footer">
				<div class="wrap">
		            <footer id="bottom" class="clearfix">
		                <small><b>&copy; <?php echo date('Y'); ?></b>. Seems like you've reached the end&hellip;</small>
		                <ul role="navigation">
		                    <li><a href="<?php echo rss_url(); ?>">Feed Me</a></li>
		                    <?php if ((user_authed()) && (user_authed_role() == "administrator")): ?>
		                    <li><a href="<?php echo base_url('feeds/json'); ?>">Bleep Bloop</a></li>
		                    <li id="last-normal"><a href="<?php echo base_url('admin'); ?>">Admin Panel</a></li>
		                    <?php else: ?>
							<li id="last-normal"><a href="<?php echo base_url('feeds/json'); ?>">Bleep Bloop</a></li>
		                    <?php endif ?>
		                    <br class="mobile-break" />
		                    <ul id="social-icons">
		                    	<?php if(twitter_account() != ''): ?>
		                    	<li class="social-icon"><a href="<?php echo twitter_url() ?>" title="<?php echo twitter_account() . ' on Twitter' ?>">
		                    		<span class="sr-only"><?php echo twitter_account() . ' on Twitter' ?></span><i class="ion-social-twitter" aria-hidden="true"></i>
		                    	</a></li>
			                    <?php endif ?>
			                    <?php if (facebook_account() != ''): ?>
			                    <li class="social-icon"><a href="<?php echo facebook_url() ?>" title="<?php echo facebook_title() . ' on Facebook' ?>">
		                    		<span class="sr-only"><?php echo facebook_title() . ' on Facebook' ?></span><i class="ion-social-facebook" aria-hidden="true"></i>
		                    	</a></li>
			                    <?php endif ?>
			                    <?php if (github_account() != ''): ?>
			                    <li class="social-icon"><a href="<?php echo github_url() ?>" title="<?php echo github_account() . ' on GitHub' ?>">
		                    		<span class="sr-only"><?php echo github_account() . ' on GitHub' ?></span><i class="ion-social-github" aria-hidden="true"></i>
		                    	</a></li>
			                    <?php endif ?>
			                    <?php if (instagram_account() != ''): ?>
			                    <li class="social-icon"><a href="<?php echo instagram_url() ?>" title="<?php echo instagram_account() . ' on Instagram' ?>">
		                    		<span class="sr-only"><?php echo instagram_account() . ' on Instagram' ?></span><i class="ion-social-instagram" aria-hidden="true"></i>
		                    	</a></li>
			                    <?php endif ?>
			                    <?php if (youtube_account() != ''): ?>
			                    <li class="social-icon"><a href="<?php echo youtube_url() ?>" title="<?php echo youtube_title() . ' on YouTube' ?>">
		                    		<span class="sr-only"><?php echo youtube_title() . ' on YouTube' ?></span><i class="ion-social-youtube" aria-hidden="true"></i>
		                    	</a></li>
			                    <?php endif ?>
		                    </ul>
		                </ul>
		            </footer>
		        </div>
			</div>
        </div>
        <script>
        	['<?php echo asset_url('/js/zepto.js'); ?>', '<?php echo theme_url('/js/main.js'); ?>', '<?php echo theme_url('/js/console.js'); ?>'].forEach(function(src) { var script = document.createElement('script'); script.src = src; script.async = false; document.head.appendChild(script); });
        </script>
    </body>
</html>