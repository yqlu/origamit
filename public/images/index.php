<?php

function selfURL() {
        $s = empty($_SERVER["HTTPS"]) ? ''
                : ($_SERVER["HTTPS"] == "on") ? "s"
                : "";
        $protocol = strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/").$s;
        $port = ($_SERVER["SERVER_PORT"] == "80") ? ""
                : (":".$_SERVER["SERVER_PORT"]);
        return $protocol."://".$_SERVER['SERVER_NAME'].$port.$_SERVER['REQUEST_URI'];
}
function strleft($s1, $s2) {
        return substr($s1, 0, strpos($s1, $s2));
}
?>
<HTML>
<HEAD>
<TITLE>OrigaMIT - Paperfolding at MIT</TITLE>
</HEAD>
<link rel="stylesheet" type="text/css" href="style.css" />

<TABLE WIDTH="100%" CELLSPACING="0" CELLPADDING="5" BORDER="0">

<!-- row for header graphic -->
<TR>
<TD  COLSPAN="3" ALIGN="CENTER" VALIGN="TOP">
<IMG SRC="images/origamit-header.gif" WIDTH="750" HEIGHT="175">
</TD>
</TR>

<!-- main page content row, contains menu, page body and photo columns -->
<TR>

<!-- menu -->
<?php
include("sidelinksmenu.php");
?>

</TD>

<!-- page body -->
<td valign="TOP" width="100%">

<table align='center' width="500" border="0" cellpadding="5" cellspacing="20">
<tbody><tr>
<td>
<p>Welcome to OrigaMIT, MIT's origami club, which exists to promote, practice, and teach
origami folding, analysis, and design.</p>
<hr><!--
<h4>4th OrigaMIT Convention</h4>
<p>
The 4th OrigaMIT Convention will be held Saturday, Nov 8th 2014 in the MIT Student Center. Event details and event registration may be found <a href="conv14.php">here</a>.</p>

<hr/>-->
<h4>Hello all!</h4>

<p>Our eighth meeting of the semester will be this Sunday, and we'll be learning to fold Robert Lang's Turtle.</p>

<p>
<img src="../../../images/lang_turtle.jpg" width=400>
</p>

<b>Date:</b> Sunday, April 4th<br>
<b>Time:</b> 3pm-5pm<br>
<b>Location:</b> W20-491<br>

<p>As always, paper will be provided with access to our substantial origami library. We have new additions to the library, including:</p>
<ul>
<li>Origami Starry Revolution by Yuri Shumakov</li>
<li>Origami em Flor by Flaviane Koti</li>
<li>Wondrous One Sheet Origami by Meenakshi Mukerji</li>
<li>Origami Ooh La La! Action Origami for Performance and Play by Jeremy Shafer</li>
<li>Origami Zoo by Robert Lang </li>
</ul>

<p>See you soon!</p>
<!--
<h4>Weekly Meeting</h4>

<p>Hello everyone!

OrigaMIT is on break until the spring. See you soon!
</p>
<hr>-->
<hr/>
<h4>14th Annual Student OrigaMIT Competition - Exhibit Gallery!</h4>
<p>Thank you everyone who submitted your gorgeous artwork for the 14th Annual Student OrigaMIT Competition! The submissions will be displayed for the entire month of April in the Wiesner Student Art Gallery on the second floor of the student center.</p>
<!--
<p>Here are <a href="S14_competition_winners.pdf">the results of the competition</a>. Congratulations to all award-winners!</p>

<p>This year's competition was judged by a panel with incredible combined folding experience and longtime affiliation with the club. Learn more about <a href="S14_origamit_competitionJudges.pdf">the judges here.</a></p>
-->
<hr/>
<h4>Menger Sponge Construction!</h4>
<p>We recently constructed one face of a Level 3 Menger Sponge as part of the MegaMenger project. This sculpture incorporates over 25,000 business cards and was built with the help of over 20 club members.<p>

<p>It is currently on display on the ground floor of the Stata Center. Check it out if you can!</p>

<p>Check out this amazing clip by MIT News covering the project:</p>
<iframe width="560" height="315" src="http://www.youtube.com/embed/YpmP8OJJ7W4" frameborder="0" allowfullscreen></iframe>

<!--<h4>Valentine's Day Display</h4>
<p>
Over January, our students have been hard at work folding various love-themed models in a very exciting collaboration with the restaurant chain <a href="http://www.wagamama.us">wagamama usa</a>. The models are currently being displayed in their four restaurants and have been publicized on their social media channels:</p>

<p>
<img src="../../../images/waga_1.png" width=400><br>
</p>
<p>
<img src="../../../images/waga_2.png" width=400><br>
</p>

<p>The project was also been picked up for coverage by <a href="http://www.boston.com/news/science/blogs/science-in-mind/2014/02/10/origami-valentine/2g3rqxQsmhBN5zgYfPZHkO/blog.html">Boston.com</a> and <a href="http://bostinno.streetwise.co/2014/02/07/valentines-day-origami-origamit-and-wagamama-partnership-1/">BostInno</a>. A big thank you to everyone who contributed: Mark Tompkins, Sara Goheen, Tracy Cheng, Jonathan Tidor, Elton Zhou, Ishara Nisley and YQ Lu.</p>
<hr/>

<h4>Thanksgiving News Feature</h4>
<p>
OrigaMIT was featured on <a href="http://web.mit.edu/site/spotlight/3862">mit.edu</a>'s homepage over Thanksgiving with a collection of Thanksgiving themed models folded by various club members.
</p>

<p>The story was picked up by <a href="http://www.wired.com/design/2013/11/a-thanksgiving-scene-made-entirely-out-of-folded-paper/">Wired</a>, the <a href="http://www.boston.com/news/science/blogs/science-in-mind/2013/11/25/mit-thanksgiving/pwRj0z7PLzxSD91wdzVolJ/blog.html">Boston Globe</a>, <a href="http://www.cnn.com/2013/11/28/tech/gallery/origami-geeks-mit-thanksgiving/index.html">CNN</a>, <a href="http://bostinno.streetwise.co/2013/11/22/mits-origami-club-__-festive-for-thanksgiving/">Bostinno</a>, <a href="http://www.bostonmagazine.com/arts-entertainment/blog/2013/11/22/mit-origamit-origami-thanksgiving/">Boston Magazine</a>, and <a href="http://alum.mit.edu/pages/sliceofmit/2013/11/28/origamit-thanksgiving/"> MIT's Alumni Association</a>.
</p>

<p>
A big thank you to MIT News and everyone who helped to fold!
</p>

<hr/>

<h4>3rd OrigaMIT Convention</h4>
<p>
The 3rd annual OrigaMIT convention was held successfully on 19th October right here on campus. A big thank you to everybody who came and made it a success! See photos from the event <a href="gallery/meeting.php?t=2013/10/19">here</a>.
</p>
<hr/>-->
<hr/>

<h4>MIT News Feature!</h4>
<p>
MIT News did a spotlight on us in 2013! Check out the video below for a beautiful introduction to the club and the origami we explore together every Sunday.</p>
<p>
<iframe width="560" height="315" src="http://www.youtube.com/embed/C-2Tt4g5Dw0" frameborder="0" allowfullscreen></iframe>
</p>

<p>Thank you, MIT News!</p>
<hr/>

<h4>Meetings and Workshops</h4>

<p>This semester, our meetings will be held weekly on Sunday afternoons. Details for our next meeting can be found in the <a href="http://origamit.scripts.mit.edu/events.php">events</a> section or on the <a href='http://www.google.com/calendar/embed?src=origamit-calendar%40mit.edu&ctz=America/New_York'>calendar</a> on the left. Anyone interested in origami is invited to attend (including members of the public unaffiliated with MIT) - and origami beginners are always welcome!</p>

<hr/>

<h4>Support Us!</h4>

<p>
We do our best at OrigaMIT to provide the MIT community with high level Workshops and Lectures free of charge.
Much of our funding comes from the MIT Undergraduate Association, but this funding is only supposed to be used to
fund the activities of current MIT students, and generally not enough to cover the expenses related to events
open to the general public.
</p>

<p>
If you enjoy our events and would like to support OrigaMIT through a donation, you can do so online through
<a href="https://giving.mit.edu/givenow/add-designation.dyn?designationId=2720207">MIT Give</a>, or by sending
a check made out to <b>OrigaMIT - MIT</b> to:
</p>
<p style="text-align:center">
Student Activities Office<br/>
W20-549 (c/o OrigaMIT)<br/>
84 Massachusetts Ave<br/>
Cambridge, MA 02139</b> </p>

<!--
<p>A big thank you to Greg Lichniak for his recent contributions to the club!</p>
-->
<hr/>

<h4>Contact Us!</h4>

<p>
If you're interested in participating, or being part of our mailing list, please contact
<a href="mailto:origami-info@mit.edu">origami-info@mit.edu</a>
or add yourself to the <a href="http://mailman.mit.edu/mailman/listinfo/origamit">mailing list</a>.
</p>
<br>
</td>
</tr>
</tbody></table>
</td>


<!-- photo column -->

<TD VALIGN="top">
<img src="images/chan-mens.jpg" width='400'><br><br>
<FONT SIZE="-1">The header graphic is composed of letters from MIT
alum and OrigaMIT member <A HREF="http://world.std.com/~j9">Jeannine Mosely's</A> "Four-Fold Origami Alphabet," published in
<I>Origami Tanteidan Convention Diagrams, Vol. 8</I>. Photo depicts <I>Mens et Manus II</I>, copyright 2007 <a
href="http://chosetec.darkclan.net/origami/">Brian Chan</a>.
</TD>

</TABLE>

<!-- page footer info -->

<P ALIGN="center"><FONT SIZE="-1"><I>
This page is: </I><TT>
<?php
echo selfURL();
?><BR>
Officers: <a href="http://origamit.scripts.mit.edu/mediawiki/">http://origamit.scripts.mit.edu/mediawiki/</a>
</TT>
<BR>
<I>Last modified:
<?
$last_modified = filemtime('members.php');
date_default_timezone_set('America/New_York');
print(date("h:i M d, Y", $last_modified));
?>
</FONT></P>

<?php
include("google_analytics.php");
?>


</BODY>
</HTML>
