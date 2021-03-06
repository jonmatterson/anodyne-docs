<div class="row">
	<div class="span6">
		<div class="alert alert-danger"><p><strong>Note:</strong> Due to several bugs we've been unable to track down in Thresher and the SMS Archives feature, both now require PHP 5.0 or higher in order to be used. We apologize for the inconvenience, but at this time, the decision is unavoidable.</p></div>
	</div>
	
	<div class="span6">
		<div class="alert alert-info"><p><strong>Important Note for GoDaddy Hosted Sites:</strong> GoDaddy users will need to change several of CodeIgniter's settings to avoid 404s, blank white pages, and email problems. A full explanation of the changes and instructions are available <?php echo Html::anchor('nova1/overview/godaddy', 'here');?>.</p></div>
	</div>
</div>

<p>The Nova User Guide is the single most exhaustive source for information about Nova, whether it's tutorials, developer resources, information about individual pages in Nova or general reference. If you've got questions, odds are it's answered here somewhere.</p>

<br>

<ul class="thumbnails">
	<li class="span6">
		<div class="thumbnail">
			<div class="caption">
				<h2>General Information</h2>
				<p>These links provide general information about Nova includes changes, licenses and requirements.</p>
				<ul>
					<li><?php echo Html::anchor('nova1/overview/changes', 'Changes Since SMS 2');?></li>
					<li><?php echo Html::anchor('nova1/overview/changelog', 'Change Log');?></li>
					<li><?php echo Html::anchor('nova1/overview/license/nova', 'Nova License Agreement');?></li>
					<li><?php echo Html::anchor('nova1/overview/license/ci', 'CodeIgniter License Agreement');?></li>
					<li><?php echo Html::anchor('nova1/overview/requirements', 'Server &amp; Browser Requirements');?></li>
					<li><?php echo Html::anchor('nova1/overview/faq', 'Frequently Asked Questions');?></li>
				</ul>
			</div>
		</div>
	</li>
	
	<li class="span6">
		<div class="thumbnail">
			<div class="caption">
				<h2>Getting Started</h2>
				<p>These guides are your one-stop-shop for installing, upgrading and updating Nova. Make sure to read through them <strong>before</strong> you try to do anything with Nova!</p>
				<ul>
					<li><?php echo Html::anchor('nova1/overview/install', 'Install Guide');?></li>
					<li><?php echo Html::anchor('nova1/overview/upgrade', 'SMS Upgrade Guide');?></li>
					<li><?php echo Html::anchor('nova1/overview/update', 'Updating Nova');?></li>
					<li><?php echo Html::anchor('nova1/tutorials/intro/backup', 'Backup Guide');?></li>
					<li><?php echo Html::anchor('nova1/overview/whatsnew', "What's New?");?></li>
				</ul>
			</div>
		</div>
	</li>
	
	<li class="span6">
		<div class="thumbnail">
			<div class="caption">
				<h2>Take a Tour</h2>
				<p>Nova is the next evolution of RPG management software. Complete with a wide array of new features, Nova brings an unprecedented amount of power and ease-of-use to game masters to run their RPGs the way they want and focus on getting back to playing the game.</p>
				<p><?php echo Html::anchor('nova1/tour/index', 'Take a tour of Nova &raquo;', array('class' => 'btn'));?></p>
			</div>
		</div>
	</li>
	
	<li class="span6">
		<div class="thumbnail">
			<div class="caption">
				<h2>Page Guides</h2>
				<p>Every page in Nova is packed full of functionality, but if you don&rsquo;t know all those pieces, you can lose out on a lot of Nova&rsquo;s power and ease. To help you get the most out of Nova, we&rsquo;ve compiled page guides for nearly every page in the system that will explain in detail how to use every feature on every page in the system.</p>
				<p><?php echo Html::anchor('nova1/pages/index', 'See all pages guides &raquo;', array('class' => 'btn'));?></p>
			</div>
		</div>
	</li>
	
	<li class="span6">
		<div class="thumbnail">
			<div class="caption">
				<h2>Tutorials</h2>
				<p>We are pleased to be able to make a wide array of tutorials available for people curious about Nova and developing for it. The tutorials cover many different topics and are a fairly comprehensive look at their particular subject matter. Requests for additional tutorials should be done on the <a href="http://forums.anodyne-productions.com" target="_blank">Anodyne forums</a>.</p>
				<p><?php echo Html::anchor('nova1/tutorials/index', 'See all tutorials &raquo;', array('class' => 'btn'));?></p>
			</div>
		</div>
	</li>
	
	<li class="span6">
		<div class="thumbnail">
			<div class="caption">
				<h2>Developer Resources</h2>
				<p>Whether you're building a new skin, extending Nova or developing something brand new, the resources here have the information for you! If you're interested in extending Nova, learning about features or pouring through countless pages of technical documentation about the pieces that make Nova tick, this is the place to do it!</p>
				<p><?php echo Html::anchor('nova1/developers/index', 'See developer resources &raquo;', array('class' => 'btn'));?></p>
			</div>
		</div>
	</li>
</ul>