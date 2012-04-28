<?php
	/*
	Plugin Name: SyntaxHighlighter Evolved: Matlab
	Plugin URI: http://zheref.instartius.com/
	Description: Adds support for the Matlab language to the SyntaxHighlighter Evolved plugin.
	Author: Sergio Daniel Lozano
	Version: 1.0.0.
	Author URI: http://zheref.instartius.com/
	License: GPLv2
	based on the new PHP5 brush by Sandro Bilbeisi : http://www.sandrobilbeisi.org/wp/web-development/syntaxhighlighter-evolved-php5/
	*/

	// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
	add_action( 'init', 'syntaxhighlighter_matlab_regscript' );

	// Tell SyntaxHighlighter Evolved about this new language/brush
	add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_matlab_addlang' );

	// Register the brush file with WordPress
	function syntaxhighlighter_matlab_regscript() 
	{
		wp_register_script( 	'syntaxhighlighter-brush-matlab', 
								plugins_url('syntaxhighlighter-evolved-matlab/scripts/shBrushMatlab.js'),
								array('syntaxhighlighter-core'),
								'1.0.0'
				   		);
	}

	// Filter SyntaxHighlighter Evolved's language array
	function syntaxhighlighter_matlab_addlang( $brushes ) 
	{
		$brushes['matlab'] = 'matlab';
		$brushes['ml'] = 'matlab';
		return $brushes;
	}
?>