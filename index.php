<?php include("database.php");?>
<!DOCTYPE HTML >
<html><head>
<title>Hobbies Club</title>
<link href='http://fonts.googleapis.com/css?family=Nothing+You+Could+Do' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
<!--css links -->
<link rel="stylesheet" href="hobbies.css">
<!-- ends -->
 <!-- java scripts -->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
 <script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" src="js/jquery.reveal.js"></script>
 <script type="text/javascript" src="menu.js"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery easing.js" type="text/javascript"></script>
<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - various
			*/
			
			$("#38").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				:'iframe'
			});

		});
	</script>

<script>

	function tick(){
		$('#ticker li:first').slideUp( function () { $(this).appendTo($('#ticker')).slideDown(); });
	}
	setInterval(function(){ tick () }, 2500);
</script>

<!--ends-->
</head>

<!--BODY STARS HERE-->

<body>
<div id="left" style="position:absolute; text-align:center;font-size:30px; font-family: 'Nothing You Could Do', cursive;">
	<!--ICONS-->
    <a href="#" id="abot">
    	<div><img src="images/Home_60.png"/><sup>ABOUT</sup></div>
    </a>
    <a href="#" id="nwes">
    	<div><img src="images/Envelope_60.png"/><sup> NEWS</sup></div>
    </a>
    <a href="#" id="eve">
    	<div><img src="images/Calendar_60.png"/><sup> EVENTS</sup><hr color="#002200" size="2"/></div>
    </a>
    <!--ICONS-->
    
    
    <div><!--news display-->
         <ul id="ticker">
    		<?php
            
        	$see=mysql_query("SELECT * FROM notices");
			while($row=mysql_fetch_array($see))
			{
				 $id=$row['id'];
			$dat=date('20y-m-d H:i:s');
			$new=strtotime ('-1 week' , strtotime($dat));
			$newdate=date('20y-m-d H:i:s' , $new);
			$expire=$row['date'];
			$today_time = strtotime($newdate);
			$expire_time = strtotime($expire);
			//if ($expire_time > $today_time)
				{
				?> 
				
				<li><a href="#" class="big-link" data-reveal-id="<?php echo $row['id']?>"> <?php echo $row['heading'];?> </a> </li>
				
				<?php
			}
			
			}
			?>
        </ul>
	</div><!--news display-->

</div>

<!-- Scroll bar -->
<div id="header">
        <div id="header_left">
          <img src="images/LOGO HC NEW.png" width="170">
        </div><!-- header left-->
    <div id="header_right">
            <div id="wrapper">
            <div id="slider">
                <div id="menu">
                    <ul class="menu" id="navigation">
                        <li><a href="#home" id="abot" class="parent"><span>Home</span></a></li>
                        <li><a href="#web" id="abot"><span>Web-D</span></a></li>
                        <li><a href="#arts" id="abot"><span>Fine Arts</span></a></li> 
                        <li><a href="#literary" id="abot"><span>Literary</span></a></li>
                        <li><a href="#modelling" id="abot"><span>Modelling</span></a></li>
                        <li><a href="#photo" id="abot"><span>Photography</span></a></li>
                        <li><a href="#electronics" id="abot"><span>Electronics</span></a></li>
                        <li class="last"><a href="#contact"><span>Contact Us</span></a></li>
                    </ul>
                </div><!-- menu -->
            
               
           
            <!-- scroll box-->
            <div id="box_main">
            <div id="main"> 
            <div class="scroll">
            <div class="scrollContainer">  
                                 
            <!-- new slide begins -->                     
            <div class="panel" id="home">
            <div id="right">
            <div id="abt">
                        <h2>HOBBIES CLUB</h2>
            <p>The Hobbies Club at the IIT Roorkee,Saharanpur Campus, is the only one of its kind amongst all the IITs. It aims at facilitating activities like Photography, Web Designing,Modelling etc. which are normally beyond the reach of any student. The hobbies club council is headed by a Chief Advisor, who is well supported by two Deputy Chief Advisors (for administration and finance) and a council secretary (student representative).The personnel consist of a Staff Advisor supported by a Secretary,who is selected from amongst the members. This Administrative Hierarchy ensures active student participation as well as the smooth running of the Hobbies Club.</p>
            </div>
            <div id="evnt" style="display:none">
            
                        <h2>UPCOMING EVENTS</h2>
            <div id='sub'>
					<?php 
                    
                    $secy=mysql_query("SELECT * FROM members");
                    $note=mysql_query("SELECT * FROM notices where category='Student General Notice Board, Department (Academic) Notice Board'");
                    
                    ?>
                            <table width="900"><tr><td>Ref.No</td><td>Event Name</td><td>Date</td></tr>
                            <tr><td colspan="3"><hr/></td></tr>
                    <?php
                        while($club=mysql_fetch_array($note))
                        {    
                         $id=$club['id'];
                        $dat=date('20y-m-d H:i:s');
                        $expire=$club['expiry'];
                        $today_time = strtotime($dat);
                    $expire_time = strtotime($expire);
                    
                    if ($expire_time > $today_time)
                    {
                    ?>
                            <tr><td width="100px"><?php echo $club['id'];?></td><td> <a href="#" class="big-link" data-reveal-id="<?php echo $club['id']?>"><?php echo $club['heading'];?></a></td><td><?php echo $club['expiry'];?></td></tr>
                           
                    <?php
                    }
                        }
                    ?>
                    </table>
            </div><!-- sub-->    
            </div>
            <div id="nws" style="display:none">
                                <h2>NOTICE BOARD</h2>
                     <div id='sub'>
                    <?php 
                    
                    $note=mysql_query("SELECT * FROM notices where category='Student General Notice Board, Department (Academic) Notice Board'");
                    ?>
                            <table width="900px"><tr><td width="100px">Ref No.</td><td>Heading</td><td>Date of Notice</td></tr>
                            <tr><td colspan="4"><hr/></td></tr>
                    <?php
                        while($club=mysql_fetch_array($note))
                        {     
                    ?>
                            <tr><td><?php echo $club['id'];?></td> <td> <a href="#" class="big-link" data-reveal-id="<?php echo $club['id'];?>"><?php echo $club['heading'];?></a></td>
                            <td><?php echo $club['date'];?></td> <td><?php echo $club['deadline'];?></td></tr>
                           
                    <?php
                        }
                    ?>
                    </table>
            </div><!-- sub-->
            </div>
            </div><!-- right -->
            </div><!--panel's-->
            
            <!-- new slide begins -->
            
            <div class="panel" id="web" style="background-image:url(images/webd.png); background-repeat:no-repeat;">
            <div id="right">
            <div id="abt">
                        <h2>WEB-D</h2>
            <p>Web Designing & Software Development is the newest jewel added in the crown of Hobbies Club.
            The objective of the section is to provide a platform for the young budding engineers to acquire and further enrich their designing and programming skills.Some students like to work on computer which later turns into a passion. They have zeal to develop innovative applications. In this section they can utilize their time and facilities provided here, to learn and to do innovative work.
                 Time to time, lectures on different programming languages (for example C++, Javascript, Java, JSP) and workshops on various application software (for example Visual basic, flash, dream weaver, Photoshop, Matlab etc.) are organized.Students are also developing commercial websites & applications for various organizations. The section has a long list of achievements and we are hoping much more for the future.</p>
            </div>
            <div id="evnt" style="display:none">
                        <h2>UPCOMING EVENTS</h2>
            <div id='sub'>
            <?php 
            
            $secy=mysql_query("SELECT * FROM members");
            $note=mysql_query("SELECT * FROM notices where category='webd'");
            
            ?>
                    <table width="900"><tr><td>Ref.No</td><td>Event Name</td><td>Date</td></tr>
                    <tr><td colspan="3"><hr/></td></tr>
            <?php
                while($club=mysql_fetch_array($note))
                {    
                 $id=$club['id'];
                $dat=date('20y-m-d H:i:s');
                $expire=$club['expiry'];
                $today_time = strtotime($dat);
            $expire_time = strtotime($expire);
            
            if ($expire_time > $today_time)
            {
            ?>
                    <tr><td width="100px"><?php echo $club['id'];?></td><td> <a href="#" class="big-link" data-reveal-id="<?php echo $club['id']?>"><?php echo $club['heading'];?></a></td><td><?php echo $club['expiry'];?></td></tr>
                   
            <?php
            }
                }
            ?>
            </table>
            </div><!-- sub-->    
            </div>
            <div id="nws" style="display:none">
                        <h2>NOTICE BOARD</h2>
            <div id='sub'>
            <?php 
            
            $note=mysql_query("SELECT * FROM notices where category='webd'");
            ?>
                    <table width="800px"><tr><td>Ref No.</td><td>Heading</td><td>Date of Notice</td><td>Deadline</td></tr>
                    <tr><td colspan="4"><hr/></td></tr>
            <?php
                while($web=mysql_fetch_array($note))
                { 
            ?>
                    <tr><td><?php echo $web['id'];?></td> <td> <a href="#" class="big-link" data-reveal-id="<?php echo $web['id'];?>"><?php echo $web['heading'];?></a></td>
                    <td><?php echo $web['date'];?></td> <td><?php echo $web['deadline'];?></td></tr>
            
            <?php
                }
            ?>
            </table>
            </div><!-- sub-->
            </div>
            </div><!-- right -->
            </div><!--panel's-->   
                      
            <!-- new slide begins-->
            <div class="panel" id="arts" style="background-image:url(images/FINE%20ARTS1.png); background-repeat:no-repeat;">
            <div id="right">
            <div id="abt">
                    <h2>FINE ARTS</h2>
            <p>With the expansion & increasing sophistication of human brain, the need to express the creative feelings making waves in his brain became urgent. This urge led to the birth of art and the aesthetic sense in human life. The art is a human creation. Artistic images reflect & embody the finest of human feelings , the dreams & ideals. You simply can't think of life without greeting cards or crafted tokens. There is no better way of heart to heart conversation. The inner ripples of the heart is captured by the sketch & the words of the artist, who cunningly enough, knows your personal feelings towards someone and crystallizes it in the form of few lines, hence helping us to present the entangled thoughts & feelings in an integral and clear form. So much dependence on the pen of an artist!!! 
            
            Fine Arts Section is a place where all the students can flaunt their artistic skills. This section helps you to master that hidden cunning artist in you. Here you get all facilities in painting and sculpture besides handicrafts. There is a well equipped studio for the use of members.</p>
            </div>
            <div id="evnt" style="display:none">
                    <h2>UPCOMING EVENTS</h2>
            <div id='sub'>
            <?php 
            
            $secy=mysql_query("SELECT * FROM members");
            $note=mysql_query("SELECT * FROM notices where category='finearts'");
            
            ?>
                    <table width="900"><tr><td>Ref.No</td><td>Event Name</td><td>Date</td></tr>
                    <tr><td colspan="3"><hr/></td></tr>
            <?php
                while($club=mysql_fetch_array($note))
                {    
                 $id=$club['id'];
                $dat=date('20y-m-d H:i:s');
                $expire=$club['expiry'];
                $today_time = strtotime($dat);
            $expire_time = strtotime($expire);
            
            if ($expire_time > $today_time)
            {
            ?>
                    <tr><td width="100px"><?php echo $club['id'];?></td><td> <a href="#"class="big-link" data-reveal-id="<?php echo $club['id']?>"><?php echo $club['heading'];?></a></td><td><?php echo $club['expiry'];?></td></tr>
                   
            <?php
            }
                }
            ?>
            </table>
            </div><!-- sub--> 
            </div>
            <div id="nws" style="display:none">
                    <h2>NOTICE BOARD</h2>
            <div id='sub'>
            <?php 
            
            $note=mysql_query("SELECT * FROM notices where category='finearts'");
            ?>
                    <table width="800px"><tr><td>Ref No.</td><td>Heading</td><td>Date of Notice</td><td>Deadline</td></tr>
                    <tr><td colspan="4"><hr/></td></tr>
            <?php
                while($art=mysql_fetch_array($note))
                {
            ?>
                    <tr><td><?php echo $art['ref_no'];?></td> <td> <a href="#" class="big-link" data-reveal-id="<?php echo $art['id'];?>"><?php echo $art['heading'];?></a></td>
                    <td><?php echo $art['date'];?></td> <td><?php echo $web['deadline'];?></td></tr>
            
            <?php
                }
            ?>
            </table>
            </div><!-- sub-->
            </div>
            </div><!-- right -->
            </div><!--panel's-->
            
            <!-- new slide begins -->
            <div class="panel" id="literary" style="background-image:url(images/literarynew.png); background-repeat:no-repeat;">
            <div id="right" > 
            <div id="abt"style="position:absolute; margin-left:150px; width:700px">
                    <h2>LITERARY</h2>
            <p>The literary section or as it is popularly called 'LitSec' is the primary associate in the campus for conducting all literary events. The literary section, which has a total membership of over 50 people, conducts a plethora of events like quizzes, debates and word games. The Literary Section conducts a total of around 20 events throughout the calender year. Unlike other sections the events organised by the Literary Section are open to all the students on the campus.
            
            LitSec is not just a group, it's a state of mind.</p>
            </div>
            <div id="evnt" style="display:none">
                    <h2>UPCOMING EVENTS</h2>
            <div id='sub'>
            <?php 
            
            $secy=mysql_query("SELECT * FROM members");
            $note=mysql_query("SELECT * FROM notices where category='literary'");
            
            ?>
                    <table width="900"><tr><td>Ref.No</td><td>Event Name</td><td>Date</td></tr>
                    <tr><td colspan="3"><hr/></td></tr>
            <?php
                while($club=mysql_fetch_array($note))
                {    
                 $id=$club['id'];
                $dat=date('20y-m-d H:i:s');
                $expire=$club['expiry'];
                $today_time = strtotime($dat);
            $expire_time = strtotime($expire);
            
            if ($expire_time > $today_time)
            {
            ?>
                    <tr><td width="100px"><?php echo $club['id'];?></td><td> <a href="#" class="big-link" data-reveal-id="<?php echo $club['id']?>"><?php echo $club['heading'];?></a></td><td><?php echo $club['expiry'];?></td></tr>
                   
            <?php
            }
                }
            ?>
            </table>
            </div><!-- sub--> 
            </div>
            <div id="nws" style="display:none">
                    <h2>NOTICE BOARD</h2>
            <div id='sub'>
            <?php 
            
            $note=mysql_query("SELECT * FROM notices where category='literary'");
            ?>
                    <table width="800px"><tr><td>Ref No.</td><td>Heading</td><td>Date of Notice</td><td>Deadline</td></tr>
                    <tr><td colspan="4"><hr/></td></tr>
            <?php
                while($lit=mysql_fetch_array($note))
                {
            ?>
                    <tr><td><?php echo $lit['ref_no'];?></td> <td> <a href="#" class="big-link" data-reveal-id="<?php echo $lit['id'];?>"><?php echo $lit['heading'];?></a></td>
                    <td><?php echo $lit['date'];?></td> <td><?php echo $lit['deadline'];?></td></tr>
            
            <?php
                }
            ?>
            </table>
            </div><!-- sub-->
            </div>
            </div><!-- right -->
            </div><!--panel's-->
            
            <!-- new slide begins -->
            <div class="panel" id="modelling">
            <div id="right">
            <div id="abt">
                        <h2>MODELLING</h2>
            <p>The Model & Robotics Section is the arena where young budding engineers put their ideas , imagination into the shape of either static or dynamic models.  This section has a full fledged workshop with necessary machinery for the fabrication of the ideas into real existence. More emphasis is laid on dynamic models , though static modeling has it's own importance. Such a section is an inspiration for all the technical institutes to develop creativity & innovativeness among students. This section is basically for mechanical studs. Lastly, it can be said that the day is not far when the homo sapiens would start making models like once God did ...</p>
            </div>
            <div id="evnt" style="display:none">
                        <h2>UPCOMING EVENTS</h2>
            <div id='sub'>
            <?php 
            
            $secy=mysql_query("SELECT * FROM members");
            $note=mysql_query("SELECT * FROM notices where category='modelling'");
            
            ?>
                    <table width="900"><tr><td>Ref.No</td><td>Event Name</td><td>Date</td></tr>
                    <tr><td colspan="3"><hr/></td></tr>
            <?php
                while($club=mysql_fetch_array($note))
                {    
                 $id=$club['id'];
                $dat=date('20y-m-d H:i:s');
                $expire=$club['expiry'];
                $today_time = strtotime($dat);
            $expire_time = strtotime($expire);
            
            if ($expire_time > $today_time)
            {
            ?>
                    <tr><td width="100px"><?php echo $club['id'];?></td><td> <a href="#" class="big-link" data-reveal-id="<?php echo $club['id']?>"><?php echo $club['heading'];?></a></td><td><?php echo $club['expiry'];?></td></tr>
                   
            <?php
            }
                }
            ?>
            </table>
            </div><!-- sub--> 
            </div>
            <div id="nws" style="display:none">
                        <h2>NOTICE BOARD</h2>
            <div id='sub'>
            <?php 
            
            $note=mysql_query("SELECT * FROM notices where category='modelling'");
            ?>
                    <table width="800px"><tr><td>Ref No.</td><td>Heading</td><td>Date of Notice</td><td>Deadline</td></tr>
                    <tr><td colspan="4"><hr/></td></tr>
            <?php
                while($mod=mysql_fetch_array($note))
                {
            ?>
                    <tr><td><?php echo $mod['ref_no'];?></td> <td> <a href="#" class="big-link" data-reveal-id="<?php echo $mod['id'];?>"><?php echo $mod['heading'];?></a></td>
                    <td><?php echo $mod['date'];?></td> <td><?php echo $mod['deadline'];?></td></tr>
            
            <?php
                }
            ?>
            </table>
            </div><!-- sub-->
            </div>
            </div><!-- right -->
            </div><!--panel's-->
            
             <!-- new slide begins -->
             <div class="panel" id="photo"  style="background-image:url(images/graphicdesignmanchester2-960x500.png); background-repeat:no-repeat;">
             <div id="right" >
            <div id="abt"style="position:absolute; margin-left:150px; width:700px">
                    <h2>PHOTOGRAPHY</h2>
            <p>The Photography Section has come a long way since it's inception standing as a testimony of the doctrine of life "Survival Of the Fittest". Photography can be a scintillating experience for a novice , a treat for the interested ones & an art for the experts.</p>
            </div>
            <div id="evnt" style="display:none">
                    <h2>UPCOMING EVENTS</h2>
            <div id='sub'>
            <?php 
            
            $secy=mysql_query("SELECT * FROM members");
            $note=mysql_query("SELECT * FROM notices where category='photography'");
            
            ?>
                    <table width="900"><tr><td>Ref.No</td><td>Event Name</td><td>Date</td></tr>
                    <tr><td colspan="3"><hr/></td></tr>
            <?php
                while($club=mysql_fetch_array($note))
                {    
                 $id=$club['id'];
                $dat=date('20y-m-d H:i:s');
                $expire=$club['expiry'];
                $today_time = strtotime($dat);
            $expire_time = strtotime($expire);
            
            if ($expire_time > $today_time)
            {
            ?>
                    <tr><td width="100px"><?php echo $club['id'];?></td><td> <a href="#" class="big-link" data-reveal-id="<?php echo $club['id']?>"><?php echo $club['heading'];?></a></td><td><?php echo $club['expiry'];?></td></tr>
                   
            <?php
            }
                }
            ?>
            </table>
            </div><!-- sub-->  
            </div>
            <div id="nws" style="display:none">
                    <h2>NOTICE BOARD</h2>
            <div id='sub'>
            <?php 
            
            $note=mysql_query("SELECT * FROM notices where category='photography'");
            ?>
                    <table width="800px"><tr><td>Ref No.</td><td>Heading</td><td>Date of Notice</td><td>Deadline</td></tr>
                    <tr><td colspan="4"><hr/></td></tr>
            <?php
                while($photo=mysql_fetch_array($note))
                {
            ?>
                    <tr><td> <?php echo $photo['ref_no'];?></td> <td><a href="#" class="big-link" data-reveal-id="<?php echo $photo['id'];?>"><?php echo $photo['heading'];?></a></td>
                    <td><?php echo $photo['date'];?></td> <td><?php echo $photo['deadline'];?></td></tr>
                   
            
            <?php
                }
                
                
            ?>
            </table>
            </div><!-- sub-->
            </div>
             </div><!-- right -->
             </div><!--panel's-->
             
             <!-- new slide begins -->
             <div class="panel" id="electronics" style="background-image:url(images/electronics1.png); background-repeat:no-repeat;">
             <div id="right" >
            <div id="abt">
                    <h2>ELECTRONICS</h2>
            <p>In this modern world we can not imagine a life without electronic gadgets. Be it the radio or the DVD players, or be it the complex control systems.
            
            Electronics section guides the young and imaginative brains through the fascinating world of electronics, it caters to their needs. It provides a platform for the burgeoning minds of the institute, to  spot the talent in them and exploit it for the betterment of the country. The Section provides every bit of assistance it can, to help the students in developing the circuit as well as in troubleshooting.</p>
            </div>
            <div id="evnt" style="display:none">
                    <h2>UPCOMING EVENTS</h2>
            <div id='sub'>
            <?php 
            
            $secy=mysql_query("SELECT * FROM members");
            $note=mysql_query("SELECT * FROM notices where category='electronics'");
            
            ?>
                    <table width="900"><tr><td>Ref.No</td><td>Event Name</td><td>Date</td></tr>
                    <tr><td colspan="3"><hr/></td></tr>
            <?php
                while($club=mysql_fetch_array($note))
                {    
                 $id=$club['id'];
                $dat=date('20y-m-d H:i:s');
                $expire=$club['expiry'];
                $today_time = strtotime($dat);
            $expire_time = strtotime($expire);
            
            if ($expire_time > $today_time)
            {
            ?>
                    <tr><td width="100px"><?php echo $club['id'];?></td><td> <a href="#" class="big-link" data-reveal-id="<?php echo $club['id']?>"><?php echo $club['heading'];?></a></td><td><?php echo $club['expiry'];?></td></tr>
                   
            <?php
            }
                }
            ?>
            </table>
            </div><!-- sub--> 
            </div>
            <div id="nws" style="display:none">
                    <h2>NOTICE BOARD</h2>
            <div id='sub'>
            <?php 
            
            $note=mysql_query("SELECT * FROM notices where category='electronics'");
            ?>
                    <table width="800px"><tr><td>Ref No.</td><td>Heading</td><td>Date of Notice</td><td>Deadline</td></tr>
                    <tr><td colspan="4"><hr/></td></tr>
            <?php
                while($elec=mysql_fetch_array($note))
                {
            ?>
                    <tr><td><?php echo $elec['ref_no'];?></td> <td><a href="#" class="big-link" data-reveal-id="<?php echo $elec['id'];?>"> <?php echo $elec['heading'];?></a></td>
                    <td><?php echo $elec['date'];?></td> <td><?php echo $elec['deadline'];?></td></tr>
            
            <?php
                }
            ?>
            </table>
            </div><!-- sub-->
            </div>
            </div><!-- right -->
            </div><!--panel's--> 
                           
            <!-- new slide begins -->
            <div class="panel" id="contact" style="color:#000">
                    <h2> GET IN TOUCH @</h2>
                    <form action="#" method="post">
            <table align="left" style="margin-top:20px" width="400px">
                <tr><td>USERNAME: </td><td><input type="text" name="usname" /></td></tr>
                <tr><td>SUBJECT  : </td><td><input type="text" name="sub" /></td></tr>
                <tr><td>EMAIL ID : </td><td><input type="text" name="mail" /></td></tr>
                <tr><td>COMMENT: </td><td><textarea style="height:100px; width:300px" name="desc"></textarea></td></tr>
                <tr><td colspan="2" align="center"><input type="submit" name="submit" value="send message"/></td></tr>
            </table>
            </form>
            <?php
            if(isset($_POST['submit']))
            {
            $to = "hobbiesclub.iitr@gmail.com";
            $subject = "Test mail";
            $message = "Hello! This is a simple email message.";
            $from = "webmaster@dptv.com";
            $headers = "From: $from";
            mail($to,$subject,$message,$headers);
            if(mail($to, $subject, $message, $headers)) { 
                    print "success\n"; 
            }   
            else { 
                    print "failure\n"; 
            } 
            }
            ?>
            <!-- contact us-->
            <div id="last">
            <table width="500px" height="400px">
            <tr><td colspan="2" align="center"><b style="text-decoration:underline">Faculty Incharge</b><br/>Dr.YOGESH SHARMA</td></tr>
            <tr><td colspan="2" align="center"> <b style="text-decoration:underline">General Secretary</b><br/>RAJESH RANJAN (08126786207)</td></tr>
            <tr>
            <td align="center"> <b style="text-decoration:underline">Web Designing Club</b><br/>A.HARI SAI SANDEEP (09045225389)</td>
            <td align="center"> <b style="text-decoration:underline">Fine Arts Club</b><br/>KUMAR CHITRESH (09451300869)</td>
            </tr>
            <tr>
            <td align="center"> <b style="text-decoration:underline">Photography Club</b><br/>RAJAS SHAH<br/>(08791647322)</td>
            <td align="center"> <b style="text-decoration:underline">Electronics Club</b><br/>K.SHIVA TEJA (09536532411)</td>
            </tr>
            <tr>
            <td align="center"> <b style="text-decoration:underline">Literary Club</b><br/>G.D.V.NARENDRA (07417836303)</td>
            <td align="center"> <b style="text-decoration:underline">Modelling Club</b><br/>M.S.P.Prabhat Reddy (08791229522)</td>
            </tr>
            </table>
            </div><!-- last -->
            </div><!--panel's-->
            <!-- xtra slide -->
            <div class="panel" id="contact">
            </div>
        </div><!--panel's-->
        </div><!--Scroll container-->
        </div><!-- scroll--> 
        </div>
        </div><!--boxmenu-->
        <!--#######################################################################-->
        </div><!--slider-->
        </div><!--wrapper-->
</div>
<div ><a href="http://apycom.com/"></a></div>
 <!--footer-->  
<div id="foot">
<p>&copy;2012 Web-designing club, IIT ROORKEE<span style="position:absolute; right:50px; font-size:16px"><sup>Follow Us</sup>
				<a href="https://www.facebook.com/groups/113178788783859/" target="_blank"><img src="images/fb.png" height="17"/></a> </span>
                </p>

</div><!-- foot -->

<!-- div for matter inside popup box-->
<?php

$desc=mysql_query("SELECT * FROM notices");
while($check=mysql_fetch_array($desc))
{
	
?><div id="<?php echo $check['id'];?>" class="reveal-modal">
<h2><?php echo $check['heading'];?></h2>
<hr/>
<?php echo $check['text'];?>
<br/>
Thanks,<br/>
(Name of the candidate uploaded).<br/>
(<?php echo $check['designation'];?>)
            <a class="close-reveal-modal">&#215;</a>    
		</div>
  <?php 
  
}
     ?>        
<!-- ends -->

</body>
</html>