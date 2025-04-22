[content]
<h4>{EXAMPLE_HEADLINE}</h4>
    
 #### This will be filled withe the template time_output}  
{TIME_OUTPUT}

<div class="timd-dempendent-text-block">
{TIME_DEPENDENT_TEXT_BLOCK}
</div>

<a href="example_02.php">Refresh</a>


########### 
[time_output]
<div class="time-output">
    <h5>The time is</h5>
    <strong>{TIME}</strong>
</div>


#### Alternative text blocks

[text_block_0]
<p>This is a text that is displayed if seconds divided by 3 has a remainder of 0.<br>
    Control value = {CONTROL_VALUE}</p>

[text_block_1]
<h5>Variation of the time block</h5>
<p>This is a text that is displayed if seconds divided by 3 has a remainder of 1.<br>
    Control value = {CONTROL_VALUE}</p>
    
    
[text_block_2]
<div style="border:2px dotted red">
<p>This is a text that is displayed if seconds divided by 3 has a remainder of 1.<br>
    Control value = {CONTROL_VALUE}</p></div>
