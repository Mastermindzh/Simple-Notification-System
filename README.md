#Simple Notification System
A simple notification system built to be light yet functional.

Use the Table of contents for quick navigation around this readme file.

<ul>
	<li>Class options</li>
    <li>Usage without php</li>
    <li>Usage with php</li>
    <li>Editing the css</li>
</ul>

##Class options
These are all the options provided by default in the SNS.

<table>
	<tr>
		<th>Class</th>
        <th>Function</th>
    </tr>
    <tr>
    	<td>topleft</td>
        <td>Use this class if you want the popup on the top left</td>
    </tr>
    
    
</table>


##Usage without php
Using SNS without php requires you to write the html code yourself, this is fine if you want to have a single or very few popups. If you want to have a side-wide solution I suggest you go to "<a href = "#usagephp">Usage with php</a>"

To use SNS without php you will have to dig in the css file.
Let's have a look at notifier.css, in notifier.css you'll find 2 themes (blackred & whitered). These themes are examples upon which you can build yourself.
After you've created a css class with your own style (or if you want to use one of the provided themes) we can continue on to the html code.

The popup window will be constructed using a "div", for this explanation we will use the id "notifier" (we will require the id later). The div also requires the class "notifier". For now you should have the following code:
```
<div id="notifier" class = ""><a onclick="document.getElementById('notifier').style.display='none';return false;" href="#" id="close">
X</a>
    <b>Hello world.</b>
    <p>
       Popup box!
    </p>
</div>
```
As you can see, I've added a "close" button and some text to the div.

Now we will have to add more "class options"



<a name = "usagephp"></a>
##Usage with php
The php

##Editing the css


