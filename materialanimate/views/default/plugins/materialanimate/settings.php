<p>
<label>
Welcome to the Material Design Animation Page
</label>
<br/><br/>
Please read the <a href="http://anijs.github.io/#documentation">AniJS Documentation</a> to make more custom animations. Be sure to use the following format ... 
<br/><br/>
<b>if: user-action, on: location, do: animation, to: object;</b>
<br/><br/>
Please insert the following code (if you haven't already) to create a rollIn Animation.
<br/><br/>
<b>if: scroll, on:window, do: rollIn animated, to: .elgg-item, before: scrollReveal, after: removeAnim;</b>
<br/><br/>
<?php 
$entity = elgg_extract('entity', $vars);

$codifica = elgg_view('input/plaintext', array(
	'name' => 'params[elcodigo]',
	'id' => 'codificando',
	'value' => $entity->elcodigo,
));

echo $codifica;
	
?>
</p>