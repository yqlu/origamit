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
<TITLE>OrigaMIT - Paperfolding at MIT: EVENTS</TITLE>
</HEAD>
<link rel="stylesheet" type="text/css" href="style.css" />

<TABLE WIDTH="100%" CELLSPACING="0" CELLPADDING="5" BORDER="0">

<!-- row for header graphic -->
<TR>
<TD  COLSPAN="3" ALIGN="CENTER" VALIGN="TOP">
<IMG SRC="images/origamit-header.gif" WIDTH="750" HEIGHT="175">
</TD>
</TR>

<!-- main page content row, contains menu and page body -->
<TR>

<!-- menu -->
<?php
include("sidelinksmenu.php");
?>

</TD>
<!-- page body -->
<TD ALIGN="LEFT" VALIGN="TOP" width ='100%'>

<TABLE align='center' width='500' CELLSPACING="20" CELLPADDING="5" BORDER="0">
<TR>
<TD>
<H2>Upcoming Events:</H2>
<hr>

<h4>Weekly Meeting</h4>

<p>Our twelfth meeting of this semester will be this Sunday, and we'll be folding two dinosaurs by John Montroll -- the triceratops and the apatosaurus. The former is a bit more challenging but also hugely satisfying. Choose your own adventure!</p>
<b>Date:</b> Sunday, May 4th
<br/>
<b>Room:</b> <a href="http://whereis.mit.edu/?q=W20-491">W20-491</a> 
<br/>
<b>Time:</b> 3pm-5pm<br/>
<br/>
</p>
<p> 
<img src="../../../images/triceratops.jpg" width=400>
</p>
<p> 
<img src="../../../images/apatosaurus.jpg" width=400>
</p><p>Some updates on the Pokeball: after last Sunday, we tried assembling the Cosmosphere but met with very little success. The unit has a complicated folding sequence which did not lend itself to crowd sourced folding by our club members easily. As such, we made this difficult decision to instead switch to PHiZZ units, which will look similarly amazing but are much easier to fold by everybody, experts and beginners alike. We have since folded more than 50% of the required and are currently happily assembling it!</p>
<p>If you took back paper last Sunday to help us fold units: it would be super helpful if you helped us fold PHiZZ units according to <a href="https://www.usd.edu/arts-and-sciences/math/upload/The_PHiZZ_Unit.pdf">this diagram</a> instead and passed them to us by this Sunday. If you've folded a bunch of Cosmosphere units instead -- pass them to ask anyway and we'll construct something small out of it! Thanks for your support!
</p>
<p>
As always, paper will be provided with access to our substantial origami book library. </p>
<hr/>
<h4>4th OrigaMIT Convention</h4>
<p>
Mark your calendars -- the 4th OrigaMIT Convention will be held Saturday, Nov 8th 2014. More details coming soon!</p>
<hr/>
<h4>13th Annual Student OrigaMIT Competition - Exhibit Gallery!</h4>
<p>Thank you everyone who submitted your gorgeous artwork for the 13th Annual Student OrigaMIT Competition! The submissions will be displayed for the entire month of April in the Wiesner Student Art Gallery on the second floor of the student center.</p>

<p>Here are <a href="S14_competition_winners.pdf">the results of the competition</a>. Congratulations to all award-winners!</p>

<p>This year's competition was judged by a panel with incredible combined folding experience and longtime affiliation with the club. Learn more about <a href="S14_origamit_competitionJudges.pdf">the judges here.</a></p>
<hr/>



<H2>Past Events:</H2>
<li>05-05-14 -- Benefit Night @ wagamama Harvard's Square
<li>14-02-14 -- Valentine's Day Display @ wagamama
<li>12-09-13 -- Fold Your Own Holiday Tree Study Break
<li>11-28-13 -- MIT Thanksgiving Display Feature
<li>11-05-13 -- Fireworks Study Break
<li>10-19-13 -- <a href="http://origamit.scripts.mit.edu/conv13.php">Third OrigaMIT Convention!</a>
<li>05-05-13 -- End of Semester Study Break
<li>04-13-13 -- CPW Fold a Beaver Event
<li>04-06-13 -- OrigaMIT Exhibit Opening: 12th Annual Student Design Competition
<li>03-11-13 -- Flour Cookies Study Break
<li>03-10-13 -- <a href="http://video.mit.edu/watch/origamit-mits-origami-club-13939/">MIT News Feature</a>
<li>01-03-13 -- OrigaMIT Newton Library Exhibit Opening
<li>12-11-12 -- OrigaMIT Exhibit Opening: Holiday Tree
<li>12-10-12 -- Holiday Tree Study Break
<li>10-27-12 -- <a href="http://origamit.scripts.mit.edu/conv12.php">Second OrigaMIT Convention!</a>
<li>10-18-12 -- Fall Study Break
<li>10-14-12 -- Origami Paper 101 Presentation
<li>05-03-12 -- End of Term Study Break
<li>04-21-12 -- CPW Fold a Beaver Event
<li>03-11-12 -- OrigaMIT Exhibit Opening: 11th Annual Student Design Competition
<li>02-04-12 -- OrigaMIT Exhibit Opening at the Fuller Craft Museum
<li>11-19-11 -- <a href="http://origamit.scripts.mit.edu/conv11.php">First OrigaMIT Convention!</a>
<li>11-13-11 -- OrigaMIT Special Seminar with Origamido Studios
<li>11-04-11 -- OrigaMIT Screening: Between the Folds
<li>10-28-11 -- OrigaMIT @ Nightmarket
<li>10-15-11 -- OrigaMIT Crane Booth
<li>04-30-11 -- OrigaMIT Exhibit Opening: Large T-Rex Skeleton
<li>04-09-11 -- CPW Workshop
<li>04-08-11 -- CPW Activities Midway
<li>03-14-11 -- OrigaMIT Exhibit Opening: Annual Student Design Competition
<li>02-14-11 -- OrigaMIT featured on the <a href="http://www.boston.com/news/local/massachusetts/articles/2011/02/14/at_mit_math_and_engineering_take_origami_to_new_dimensions/">front page</a> of the Boston Globe
<li>12-12-10 -- OrigaMIT Exhibit Opening: Life-size Triceratops
<li>11-08-10 -- OrigaMIT Crane Booth, (11/8-11/12)
<li>10-19-10 -- OrigaMIT Screening: Between the Folds
<li>05-16-10 -- OrigaMIT Workshop: Design Masterclass
<li>04-29-10 -- OrigaMIT Workshop @ the Cambridge Science Festival
<li>04-26-10 -- Special Guest Lecture with <a href='http://www.langorigami.com'>Dr. Robert Lang</a><br>
&nbsp&nbsp&nbsp&nbsp Flapping Birds to Space Telescopes: The Modern Science of Origami
<li>04-25-10 -- Special Guest Workshop with <a href='http://www.langorigami.com'>Dr. Robert Lang</a><br>
&nbsp&nbsp&nbsp&nbsp Beyond Circle Packing: Origami Design with Semiregular Polygons
<li>04-11-10 -- OrigaMIT Workshop: Intermediate Origami Design
<li>04-10-10 -- CPW Activities Midway
<li>04-08-10 -- CPW Festival Booth
<li>03-14-10 -- OrigaMIT Workshop: Design Masterclass
<li>03-07-10 -- OrigaMIT Workshop: Creasepattern Analysis
<li>03-01-10 -- OrigaMIT Event: Exhibit Opening and Awards Ceremony
<li>02-28-10 -- OrigaMIT Workshop: Introduction to Origami Design
<li>02-24-10 -- OrigaMIT Lecture: Japanese Lunch Table
<li>02-21-10 -- OrigaMIT Workshop: Intermediate Folding Techniques
<li>02-13-10 -- OrigaMIT Workshop: Beginning Folding Techniques
<li>12-09-09 -- OrigaMIT Lecture: Prof. Erik Demaine
<li>12-06-09 -- OrigaMIT Workshop: Tessellations
<li>12-01-09 -- OrigaMIT Special Seminar with Origamido Studios
<li>11-15-09 -- OrigaMIT Workshop: Creasepattern Analysis II
<li>10-25-09 -- OrigaMIT Workshop: Wet-Folding
<li>10-20-09 -- OrigaMIT Screening: Between the Folds
<li>10-17-09 -- OrigaMIT Workshop: Creasepattern Folding
<li>10-11-09 -- OrigaMIT Workshop: Creasepattern Analysis I
<li>10-11-09 -- OrigaMIT Trip: Origamido Papermaking
<li>10-04-09 -- OrigaMIT Workshop: Diagramming Conventions
<li>09-27-09 -- OrigaMIT Workshop: Introduction to Origami Design
<li>09-13-09 -- OrigaMIT Workshop: Beginning Folding Techniques

</TD>
</TR>
</TABLE>
<P>&nbsp;</P>

</TD>
<TD VALIGN="TOP">
<p>
<a href="http://web.mit.edu/~origamit/posters/F11/F11_OrigaMIT_general_2.pdf">
<img style="display:block;margin-left:auto;margin-right:auto" src="http://web.mit.edu/~origamit/posters/F11/F11_OrigaMIT_general_2.jpg" width="400"/>
</a>
<br/>
<a href="http://web.mit.edu/~origamit/posters/F11/Midway_pamphlet_2.pdf">
<img style="display:block;margin-left:auto;margin-right:auto" src="http://web.mit.edu/~origamit/posters/F11/Midway_pamphlet_2.jpg" width="400"/>
</a>
<br/>
<img style="display:block;margin-left:auto;margin-right:auto" src="images/btfposter.jpg" width="400"/>
<br/>
<img style="display:block;margin-left:auto;margin-right:auto" src="images/btfposter.jpg" width="400"/>
<br/>
<img style="display:block;margin-left:auto;margin-right:auto" src="images/btfposter.jpg" width="400"/>
</p>
</TD>
</Table>

<!-- page footer info -->

<P ALIGN="center"><FONT SIZE="-1"><I>
This page is: </I><TT>
<?php
echo selfURL();
?>
</TT>
<BR>
<I>Last modified:
<?
$last_modified = filemtime('events.php');
date_default_timezone_set('America/New_York');
print(date("h:i M d, Y", $last_modified));
?>
</FONT></P>

<?php
include("google_analytics.php");
?>

</BODY>
</HTML>
