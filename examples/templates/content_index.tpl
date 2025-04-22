[content]

# Command lines have a sharp as first char.
   # Space before the sharp are allowed
   ####### Multiple sharps are allowed too. ############

# Empty lines are ignored.

!
Empty lines that should not be ignored are marked with an exclamation mark!


Placeholders are capitalized and enclosed in curly brackets:
This is a {PLACEHOLDER}. 
First phone {PHONE_1}, second phone {PHONE_2}.

############################
[main]
<p>Template identifier stand alone in a row and are case sensitive.</p>

[td]
<td>{VALUE}</td>

[td_ID]
<td class="td-id"> data-id="{VALUE}">{VALUE}</td>

<strong>But be careful with terms that cause confusion.</strong>
#### Both [td_id] and [td_ID] are not a good idea.


\# This is no comment line, onley a sharp.
\! 
The line above is no protected empty line but only a line, starting with a normal exclamation mark.


