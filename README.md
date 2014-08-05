#Simple Notification System
A simple notification system built to be light yet functional.

Use the Table of contents for quick navigation around this readme file.

<ul>
	<li><a href = "#class_options">class_options</a></li>
    <li><a href = "#nophp">Usage without php</a></li>
    <li><a href = "#usagephp">Usage with php</a></li>
    <li><a href = "#css">Editing the css</a></li>
    <li><a href = "#screenshots">Screenshots</a></li>
</ul>

<a name = "class_options"></a>
##Class options
These are all the options provided by default in the SNS. Have a look at the "Usage" part of this readme to find out how to apply these classes.

<table>
	<tr>
		<th>Class</th>
        <th>Function</th>
    </tr>
    <tr>
    	<td>topleft</td>
        <td>Use this class if you want the popup on the top left</td>
    </tr>
    <tr>
    	<td>topright</td>
        <td>Use this class if you want the popup on the top right</td>
    </tr>
    <tr>
    	<td>botleft</td>
        <td>Use this class if you want the popup on the bottom left</td>
    </tr>
    <tr>
    	<td>botright</td>
        <td>Use this class if you want the popup on the bottom right</td>
    </tr>
    <tr>
    	<td>flip</td>
        <td>flip will flip the border from top to bottom, usefull for when you your popup on the top of the page</td>
    </tr>
    <tr>
    	<td>edged</td>
        <td>edged will remove the margin and stick it to the bottom / top </td>
    </tr>
     <tr>
    	<td>lightshadow</td>
        <td>Replaces the default (black) shadow with a white one, perfect for dark backgrounds! </td>
    </tr>
      <tr>
    	<td>blackred</td>
        <td>Default black &amp; red theme </td>
    </tr>
      <tr>
    	<td>whitered</td>
        <td>Default white &amp; red theme </td>
    </tr>
</table>

<a name = "nophp"></a>
##Usage without php
Using SNS without php requires you to write the html code yourself, this is fine if you want to have a single or very few popups. If you want to have a side-wide solution I suggest you go to "<a href = "#usagephp">Usage with php</a>"

To use SNS without php you will have to dig in the css file.
Let's have a look at notifier.css, in notifier.css you'll find 2 themes (blackred & whitered). These themes are examples upon which you can build yourself.
After you've created a css class with your own style (or if you want to use one of the provided themes) we can continue on to the html code.

The popup window will be constructed using a "div", for this explanation we will use the id "notifier" (we will require the id later). The div also requires the class "notifier". For now you should have the following code:
```
<div id="notifier" class = "notifier"><a onclick="document.getElementById('notifier').style.display='none';return false;" href="#" id="close">
X</a>
    <b>Hello world.</b>
    <p>
       Popup box!
    </p>
</div>
```
As you can see, I've added a "close" button and some text to the div.

Now we will have to add more "<a href = "#class_options">class_options</a>". 
To do this edit the piece of code that says:
`<div id="notifier" class = "notifier">`
to include the new classes like so:
`<div id="notifier" class = "notifier whitered botright edged">`
In this example the popup will appear in the bottom right and will be stuck to the browsers bottom. (<a href = "#s1">screenshot 1)</a>




<a name = "usagephp"></a>
##Usage with php
The php
<a name = "css"></a>
##Editing the css

<a name = "Screenshots"></a>
##Screenshots
<a name = "s1"></a>
![screenshot1](Screenshots/s1.png)
