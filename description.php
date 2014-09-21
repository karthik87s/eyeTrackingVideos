<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<title>Actions in the Eye: Human Eye Movement Datasets</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="stylesheet" type="text/css" href="style2.css" />
	</head>
	<body>
		<div id="pageWrapper">
			<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-21670334-2");
pageTracker._trackPageview();
} catch(err) {}</script>


<div id="logo"></div>

<ul class="menu"><li class="menu"><a href="main_login.php">Login</a></li><li class="menu" style="float:right; border:0; border-left:1px solid #000;"><a href="license.php">License</a></li></ul>


			<div id="page">
			<div id="tabContainer">
				<div id="tabs">
					<ul>
						<li class="menu" id="tabHeader_1">Overview</li>
						<li class="menu" id="tabHeader_7">Video Presentation</li>
						<li class="menu" id="tabHeader_2">Stimuli</li>
						<li class="menu" id="tabHeader_3">Setup and Protocol</li>
																		<li class="menu" id="tabHeader_6">Acknowledgements</li>
					</ul>
				</div>
			<div id="tabscontent">
				<div id="tabpage_1">
					<p class="para_h2"> Highlights </p>
					<table style="border-bottom:3px solid #222222; width: 100%">
						<tbody>
							<tr>
								<td>
									<ul class="ul_description">
										<li> <p class="para_li_nospace">Human fixations for the Hollywood-2 and UCF Sports action datasets </p></li>
										<li> <p class="para_li_nospace">16 subjects (both male and female) </p></li>
										<li> <p class="para_li_nospace">669.187 human fixations, 92 subject-video hours </p></li>
										<li> <p class="para_li_nospace">Task specific and task-independent free viewing conditions </p></li>
										<li> <p class="para_li_nospace">High quality capture (500Hz sampling rate, average calibration error less than 0.45 degrees) </p></li>
									</ul>
									<p></p>
								</td>
							</tr>
						</tbody>
					</table>
					<p class="para_h2"> References </p>
					<table style="border-bottom:0px solid #222222; width: 100%">
						<tbody>
							<tr>
								<td>
									<p class="para_description">
										The datasets, alignment and saliency models, and related experiments are described in:
									</p>
									<ul class="ul_description">
										<li class="li_description">
											<p class="para_li">
												Stefan Mathe and Cristian Sminchisescu, <i>Dynamic Eye Movement Datasets and Learnt Saliency Models for Visual Action Recognition</i>,
												European Conference on Computer Vision (ECCV), 2012 [<span class="mylink"><a href="http://www.imar.ro/clvp/documente/publications/19-62.pdf">pdf</a></span>][<span class="mylink"><a href="eccv2012.bib">bibtex</a></span>]
											</p>
										</li>
										<li class="li_description">
											<p class="para_li">
												Stefan Mathe and Cristian Sminchisescu, <i>Actions in the Eye: Dynamic Gaze Datasets and Learnt Saliency Models for Visual Recognition</i>,
												Technical Report, Institute of Mathematics at the Romanian Academy and University of Bonn (Februray 2012) [<span class="mylink"><a href="http://www.imar.ro/clvp/documente/publications/19-63.pdf">pdf</a></span>][<span class="mylink"><a href="tr.bib">bibtex</a></span>]
											</p>
										</li>
									</ul>
									<p class="para_description">
										The <span class="mylink"><a href="license.php">license agreement</a></span> for data usage implies the citation of the two papers above. Please notice that citing the dataset URL instead of the publications would not be compliant with this license agreement.
									</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div id="tabpage_2">
					<p class="para_h2"> Hollywood-2 </p>
					<table style="border-bottom:3px solid #222222;">
						<tbody>
							<tr>
								<td>
									<p class="para_description">
										This <span class="mylink"><a href="http://www.di.ens.fr/~laptev/actions/hollywood2/">dataset</a></span> is one of
										the largest and most challenging available for real world actions. It contains 12 classes: answering phone,
										driving car, eating, fighting, getting out of car, shaking hands, hugging, kissing, running,
										sitting down, sitting up and standing up. These actions are collected from a set of 69 Hollywood
										movies. It consists of about 487k frames totalling about 20 hours of video and is split into a training set of 823
										sequences and a test of 884 sequences. There is no overlap between the 33 movies in the training set and the 36 movies in the
										test set.
									</p>
								</td>
							</tr>
						</tbody>
					</table>
					<p class="para_h2"> UCF Sports </p>
					<table style="border-bottom:0px solid #222222;">
						<tbody>
							<tr>
								<td>
									<p class="para_description">
										This <span class="mylink"><a href="http://crcv.ucf.edu/data/UCF_Sports_Action.php">high resolution dataset</a></span> was collected
										mostly from broadcast television channels. It contains 150 videos covering 9 sports action classes: diving,
										golf-swinging, kicking, lifting, horseback riding, running, skateboarding, swinging and walking. Unlike Hollywood-2,
										there are no separate training and test sets, and evaluation of action recognition learning algorithms is typically
										carried out by leave-one-out cross-validation.
									</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div id="tabpage_3">
					<p class="para_h2">Eyetracking Setup and Geometry</p>
					<table style="border-bottom:3px solid #222222;">
						<tbody>
							<tr>
								<td>
									<p class="para_description">
										Eye movements were recorded using an SMI iView X HiSpeed 1250 tower-mounted eye tracker, with a sampling frequency of 500Hz.
										The head of the subject was placed on a chin-rest located at 60cm from the display. Viewing conditions were binocular and
										gaze data was collected from the dominant eye of the participant. The LCD display had a resolution 1280 x 1024 pixels, with
										a physical screen size of 47.5 x 29.5cm. Because the resolution varies across the datasets, each video was rescaled to fit the screen,
										preserving the original aspect ratio. The visual angles subtended by the stimuli were 38.4 degrees in the horizontal plane and ranged from 13.81 to 26.18 degrees in the vertical plane.
									</p>
								</td>
							</tr>
							<tr>
								<td>
									<p class="fig_centered"><img src="images/eyetracker_small.jpg" width="40%" alt="snapshot of our eyetracker"/></p>
								</td>
							</tr>
						</tbody>
					</table>
					<p class="para_h2">Calibration and Validation Procedures</p>
					<table style="border-bottom:3px solid #222222;">
						<tbody>
							<tr>
								<td>
									<p class="para_description">
										The calibration procedure was carried out at the beginning of each block. The subject had to follow a target that was placed
										sequentially at 13 locations evenly distributed across the screen. Accuracy of the calibration was then validated at 4 of these
										calibrated locations. If the error in the estimated position was greater than 0.75 degrees of visual angle, the experiment was stopped
										and calibration restarted. At the end of each block, validation was carried out again, to account for fluctuations in the
										recording environment. If the validation error exceeded 0.75 degrees of visual angle, the data acquired during the block was deemed noisy
										and discarded from further analysis. Following this procedure, 1.71% of the data had to be discarded.
									</p>
								</td>
							</tr>
							<tr>
								<td>
									<p class="fig_centered"><img src="images/calibration.jpg" width="40%" alt="calibration points"/></p>
								</td>
							</tr>
						</tbody>
					</table>
					<p class="para_h2"> Subjects </p>
					<table style="border-bottom:3px solid #222222;">
						<tbody>
							<tr>
								<td>
									<p class="para_description">
										We have collected data from 16 human volunteers (9 male and 7 female) aged between 21 and 41.
										We split them into an active group, which had to solve an action recognition task, and a free-viewing group, which was not required to solve any specific task while being presented the videos in the two datasets.
										There were 12 active subjects (7 male and 5 female) and 4 free viewing subjects (2 male and 2 female). None of the free viewers was aware of the task of the active group and none was a cognitive scientist.
									</p>
								</td>
							</tr>
						</tbody>
					</table>
					<p class="para_h2">Recording Protocol</p>
					<table style="border-bottom:0px solid #222222;">
						<tbody>
							<tr>
								<td>
									<p class="para_description">
										Before each video sequence was shown, participants in the active group were required to fixate the center of the screen. Display would
										proceed automatically using the trigger area-of-interest feature provided by the iView X software.
									</p>
								</td>
							</tr>
							<tr>
								<td>
									<p class="para_description">
										Participants in the active group had to identify the actions in each video sequence. Their multiple choice actions were recorded through a set of check-boxes
										displayed at the end of each video, which the subject manipulated using a mouse. Participants in the free viewing group underwent a similar protocol,
										the only difference being that the questionnaire step was skipped.
									</p>
								</td>
							</tr>
							<tr>
								<td>
									<p class="fig_centered"><img src="images/questionnaire.jpg" width="40%" alt="snapshot of the questionnaire screen"/></p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div id="tabpage_5">
					<h2>Data</h2>
					<p>Use the links below to download our gaze data:</p>
					<table style="border:1px solid;">
						<tr>
							<td>
								<ul class="downlink">
									<li class="downlink"> <a href="http://vision.imar.ro/eyetracking/getdata.php?filepath=data&amp;filename=gaze_hollywood2.zip">Hollywood-2 gaze data (1.8Gib)</a> </li>
									<li class="downlink"> <a href="http://vision.imar.ro/eyetracking/getdata.php?filepath=data&amp;filename=gaze_ucfsa.zip">UCFSA gaze data (87MiB)</a> </li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
				<div id="tabpage_8">
					<h2>Code</h2>
					<p>Use the link below to download binaries for our HoG-MBH fixation detector:</p>
					<table style="border:1px solid;">
						<tr>
							<td>
								<ul class="downlink">
									<li class="downlink"> <a href="http://vision.imar.ro/eyetracking/getdata.php?filepath=code&amp;filename=hogmbhdetector-1.0.0-x86_64.zip">HoG-MBH fixation detector binaries (67.8Mib)</a> </li>
								</ul>
							</td>
						</tr>
					</table>
					<p>Please refer to the included readme file for additional information.</p>
				</div>
				<div id="tabpage_6">
					<h2>Acknowledgements</h2>
					<table style="border-bottom:0px solid #222222;">
						<tr>
							<td>
								<p class="para_description">This work was supported by a grant of the Romanian National Authority for Scientific Research, CNCS - UEFISCDI, under PNII-RU-RC-2/2009.</p>
							</td>
						</tr>
					</table>
				</div>
				<div id="tabpage_7" style="display:none; margin:0 auto; width:854px;">
					<!--<video width="854" controls="controls" poster="images/video_site_poster.jpg">
						<source src="video/video_eccv2012.mp4" type="video/mp4" />
						<source src="video/video_eccv2012.ogg" type="video/ogg" />
						<source src="video/video_eccv2012.webm" type="video/webm" />
						<object data="video/video_eccv2012.mp4" width="1280" height="720">
							<embed src="video/video_eccv2012.mp4" width="1280" height="720"/>
						</object>
					</video>-->
					<video width="854" height="480" controls="controls" poster="images/video_site_poster.png">
						<source src="video/video_site.mp4" type="video/mp4" />
						<source src="video/video_site.ogg" type="video/ogg" />
						<source src="video/video_site.webm" type="video/webm" />
						<object data="video/video_site.mp4" width="1280" height="720">
							<embed src="video/video_site.mp4" width="1280" height="720"/>
						</object>
					</video>
				</div>
				<!--<div id="tabpage_8" style="display:none; margin:0 auto; width:854px;">
					<p style="font-size:2em; text-align:center">License Agreement</p><p class="eula_text"> 1. GRANT OF LICENCE FREE OF CHARGE FOR ACADEMIC USE ONLY </p><p class="eula_text"> The authors, Stefan Mathe and Cristian Sminchisescu, are the owners of all intellectual property rights, including copyright, of this dataset and its associated software. Licenses free of charge are limited to academic use only. Provided you send the request from an academic address, you are granted a limited, non-exclusive, non-assignable and non-transferable license to use this dataset subject to the terms below. This license is not a sale of any or all of the owner's rights. This product may only be used by you, and you may not rent, lease, lend, sub-license or transfer the dataset or any of your rights under this agreement to anyone else.</p><p class="eula_text"> 2. NO WARRANTIES </p><p class="eula_text"> The authors do not warrant the quality, accuracy, or completeness of any information or data. Such information and data is provided "AS IS" without warranty or condition of any nature. The authors disclaim all other warranties, expressed or implied, including but not limited to implied warranties of merchantability and fitness for a particular purpose, with respect to the data and any accompanying materials.</p><p class="eula_text"> 3. RESTRICTION AND LIMITATION OF LIABILITY </p><p class="eula_text"> In no event shall the authors be liable for any other damages whatsoever arising out of the use of, or inability to use this dataset and its associated software, even if the authors have been advised of the possibility of such damages.</p><p class="eula_text"> 4. RESPONSIBLE USE </p><p class="eula_text"> It is YOUR RESPONSIBILITY to ensure that your use of this product complies with these terms and to seek prior written permission from the authors and pay any additional fees or royalties, as may be required, for any uses not permitted or not specified in this agreement. </p><p class="eula_text"> 5. ACCEPTANCE OF THIS AGREEMENT </p><p class="eula_text"> Any use whatsoever of this dataset and its associated software shall constitute your acceptance of the terms of this agreement. By using the dataset and its associated software, you agree to cite the papers by S. Mathe and C. Sminchisescu, in any of your publications by you and your collaborators, that makes any use of the dataset, in the following format. <span style="color: #FFFFFF">Please notice that citing the dataset url instead of the publications, would not be compliant with this license agreement:</span></p><table><tr><td colspan="2"><p class="eula_bibline">@inproceedings{MatheSminchisescuECCV2012,</p></td></tr><tr><td style="width: 2em"> </td><td> <p class="eula_bibline">author = {Stefan Mathe, Cristian Sminchisescu} </p></td></tr><tr><td style="width: 2em"> </td><td> <p class="eula_bibline">title = {Dynamic Eye Movement Datasets and Learnt Saliency Models for Visual Action Recognition}, </p></td></tr><tr><td style="width: 2em"> </td><td> <p class="eula_bibline">booktitle = {European Conference on Computer Vision} </p></td></tr><tr><td style="width: 2em"> </td><td><p class="eula_bibline">year = {2012}</p></td></tr><tr><td colspan="2"><p class="eula_bibline">}</p></td></tr></table><p class="eula_text"></p><table><tr><td colspan="2"><p class="eula_bibline">@techreport{MatheSminchisescuTR201202,</p></td></tr><tr><td style="width: 2em"> </td><td> <p class="eula_bibline">author = {Stefan Mathe, Cristian Sminchisescu} </p></td></tr><tr><td style="width: 2em"> </td><td> <p class="eula_bibline">title       = {Actions in the Eye: Dynamic Gaze Datasets and Learnt Saliency Models for Visual Recognition}, </p></td></tr><tr><td style="width: 2em"> </td><td> <p class="eula_bibline">institution = {Institute of Mathematics of the Romanian Academy and University of Bonn},</p></td></tr><tr><td style="width: 2em"></td><td><p class="eula_bibline">month = {February}</p></td></tr><tr><td style="width: 2em"></td><td><p class="eula_bibline">year = {2012}</p></td></tr><tr><td colspan="2"><p class="eula_bibline">}</p></td></tr></table><p class="eula_text"> 6. FURTHER INFORMATION AND COMMERCIAL LICENSING </p><p class="eula_text"> For further information, or for commercial licensing, please contact the authors at the following email address: </p><p style="text-align: center; margin: 0 0 0 0"><img style="width: 12em; border: 1px solid #bbb" src="images/eyetracking.gif"/></p>				</div>-->
			</div> <!--tabscontent-->
			</div> <!--tabContainer-->
			</div> <!-- page -->
		</div> <!-- pageWrapper -->
		<script type="text/javascript" src="tabs_old.js"></script> 
	</body>
</html>
