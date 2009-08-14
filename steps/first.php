<?php the_header() ?><h2>Welcome to WordPress QI, The Single-file WordPress Quick Installer</h2>
<p>Since you're viewing this text, It means you've suceeded in copying the only file needed for WordPress QI to your webhost.</p>
<p>The following screens will ask for a few details in order to install and set up wordpress correctly. The items you'll need to know are:
<ol>
<?php if ( 'direct' != get_filesystem_method() ) :?>
	<li>Your FTP Details to connect to your Web Server; These are needed in order to create the new WordPress files</li>
<?php endif; ?>
	<li>The Database Details you'd like to use for WordPress</li>
	<li>A Blog Title and a contact email for the default <code>admin</code> account</li>
</ol>
</p>

<p class="step"><a href="?step=<?php echo ( 'direct' == get_filesystem_method() ) ? 'ftp-detail-check' : 'ftp-details' ?>" class="button">Let&#8217;s go!</a></p>
<?php
the_footer();

