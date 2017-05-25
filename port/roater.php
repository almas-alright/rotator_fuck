


<?php

$page = '';
/* ==================header+social+logo===================== */
$site['instagram'] = "#";
$site['facebook'] = "#";
$site['logo'] = "images/logo.png";
$site['baseurl'] = "http://localhost/123/new";
$site['menuimage'] = 'images/9.jpg'; //menu image
/* ======================================================== */



/* ======================footer variables================= */
$footer['con1'] = ' Follow us on Instagram ';
$footer['coninsta'] = '@Lifepathbalance';
$footer['about'] = 'ABOUT US';
$footer['aboutcontent'] = 'Life Path Balance was created to be your #1 source for news, tips, and trends to living a well balanced lifestyle and healthy.  We strive to bring you the quality  content that can be applied to daily living';
$footer['follow'] = 'FOLLOW US';
$footer['contact'] = 'support@lifepathbalance.com';
$footer['copyright'] = ' &copy; 2017 Life Path Balance ';
$footer['policy'] = 'Privacy Policy';
/* ========================================================= */

/* =============================Sidebar====================== */
$site['ad-image'] = "images/ad1.png";
$site['sidebar-content'] = array(
    array(
        'title' => 'Fresh Salad Cider',
        'author' => 'Esther Holloway',
        'date' => 'Feb 28th, 2017',
        'comcount' => '10',
    ),
    array(
        'title' => 'Smoothies Vs Juices Which Is Healthier?',
        'author' => 'Esther Holloway',
        'date' => 'Feb 28th, 2017',
        'comcount' => '15',
    ),
    array(
        'title' => 'Why Stretching Before Exercise Is Importing',
        'author' => 'Esther Holloway',
        'date' => 'Feb 28th, 2017',
        'comcount' => '2',
    ),
    array(
        'title' => 'Dont Dryclean Anymore Of Your Clothes Until You Read This',
        'author' => 'Esther Holloway',
        'date' => 'Feb 28th, 2017',
        'comcount' => '0',
    ),
    array(
        'title' => 'Is President Trump The Leader We Expected?',
        'author' => 'Esther Holloway',
        'date' => 'Feb 28th, 2017',
        'cpmcount' => '18',
    )
);





$ADURL = "blog";
/* =============================Sidebar====================== */

if ($page == "index") {
    $title = "Life Path Balance | Lifes Path To Balanced Wellness";

    $site['slider-content'] = array(
        array(
            'date' => "FEB 28TH, 2017",
            'content' => "Check Out This 30-Minute Abs Workout",
            'by' => "by Esther Hollyway in ",
            'img' => "images/abs.jpg",
        ),
        array(
            'date' => "FEB 28TH, 2017",
            'content' => "The Truth About Humidifiers",
            'by' => "by Esther Hollyway in ",
            'img' => "images/humid.jpg",
        ),
        array(
            'date' => "FEB 28TH, 2017",
            'content' => "Unique Wedding Cake Toppers",
            'by' => "by Esther Hollyway in ",
            'img' => 'images/cake.jpg',
        )
    );

    $site['thumbnail'] = array(
        array(
            'img' => 'images/abs.jpg',
            'name' => 'Wellness',
            'title' => 'Check Out This 30-Minute Abs Workout',
            'author' => 'Esther Holloway',
            'date' => 'Feb 28th, 2017',
            'comcount' => '17',
            'content' => ' This class from Grokker hits every inch of your core in half an hour. The secret? Trainer Sarah Kusch uses full body movements that challenge your body while blasting calories. Expect non-traditional movements on every plane, including standing lateral crunches and planks with a tuck. Oh, and these moves will really get your heart rate up, so you’re going to want to grab a towel. ',
        ),
        array(
            'img' => 'images/run.jpg',
            'name' => 'Trending',
            'title' => 'Watch This Why Exercise Is Good For Digestion',
            'author' => 'Esther Holloway',
            'date' => 'Feb 28th, 2017',
            'comcount' => '23',
            'content' => ' You need exercise for a healthy lifestyle, but did you know that it can also improve your digestion? Watch the video to learn how to stimulate your gut, boost your immune system, and even relieve constipation and bloating. ',
        ),
        array(
            'img' => 'images/sore.png',
            'name' => 'Life',
            'title' => 'When To Skip Working Out',
            'author' => 'Esther Holloway',
            'date' => 'Feb 28th, 2017',
            'content' => ' We all have those days when we literally can’t imagine making moves to the gym. Whether it’s that time of the month or you’ve lost your motivation, it’s better to take a rest day. ',
        ),
        array(
            'img' => 'images/5things.png',
            'name' => 'Viral',
            'title' => 'These 5 Exercise Moves You May Be Doing Wrong',
            'author' => 'Esther Holloway',
            'date' => 'Feb 28th, 2017',
            'comcount' => '19',
            'content' => ' You’re proud of your plank. You admire your squat form. You know your bicep curls look good. But could you be doing these common exercises all wrong? It’s totally possible, says.... ',
        ),
        array(
            'img' => 'images/wedding.jpg',
            'name' => 'Trending',
            'title' => 'Fairy Tale Wedding Destinations',
            'author' => 'Esther Holloway',
            'date' => 'Feb 28th, 2017',
            'comcount' => '49',
            'content' => ' As a little girl I often envisioned my wedding as the typical princess fairy tale…lavish, large, and complete with my own Prince Charming. When it came time to actually plan my wedding at thirty, my idea of the perfect wedding... ',
        ),
        array(
            'img' => "images/humid.jpg",
            'name' => "Viral",
            'title' => 'The Truth About Humidifiers',
            'author' => 'Esther Holloway',
            'date' => 'Feb 28th, 2017',
            'comcount' => '5',
            'content' => ' Of course, a lot of things are harmful when used improperly. The biggest concern with humidifiers may be operator error—or the fact that most of us don’t keep our machines clean. A past report from the Environmental Protection Agency recommends washing out your humidifier every third day. ',
        ),
        array(
            'img' => 'images/taupe.jpg',
            'name' => 'Trending',
            'title' => '6 Sophisticated Ways To Paint With Taupe',
            'author' => 'Esther Holloway',
            'date' => 'Feb 28th, 2017',
            'comcount' => '31',
            'content' => ' The color taupe in nature is often linked with hues of sand and stone with water from nearby streams. Mix these elements to curate a nature inspired space to evoke a feeling of serenity and peace. ',
        ),
        array(
            'img' => 'images/apples.jpg',
            'name' => 'Trending',
            'title' => 'Is Apple Cider Vinegar Healthy For You',
            'author' => 'Esther Holloway',
            'date' => 'Feb 28th, 2017',
            'content' => ' Apple cider vinegar—or “ACV,” as it’s often referred to among enthusiasts—is having its superfood moment. Made from fermented apple sugars, ACV’s benefits range from helping with type-2 diabetes to whitening teeth. ',
        ),
        array(
            'img' => 'images/cake.jpg',
            'name' => 'Trending',
            'title' => 'Unique Wedding Cake Toppers',
            'author' => 'Esther Holloway',
            'date' => 'Feb 28th, 2017',
            'comcount' => '63',
            'content' => ' That special day is around the corner, and as the finishing touches are completed on that perfect bridal gown, its
	 time to focus on the little details that make your wedding day as unique to your guests as it is unique to you ',
        ),
        array(
            'img' => 'images/arctic.jpg',
            'name' => 'Wellness',
            'author' => 'Esther Holloway',
            'date' => 'Feb 28th, 2017',
            'comcount' => '27',
            'content' => ' When it comes to picking a destination for a cruise, most of us would assume an island location a no brainer, but what about cruising the artic ocean, surrounded by snow capped mountains, icy waters, and artic wildlife? These following locations will have you exploring your options next time you plan a trip. ',
        )
    );
} elseif ($page == 'about') {
    $abttitle = 'About Us';
    $abtmainimg = "../images/about.jpg";
    $abtcontent = "
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		<br></p>";
} elseif ($page == 'contact') {
    $conttitle = 'Contact Us';
    $contcontant = "<p>You are a part of the Rebel Alliance and a traitor so what do you think of her Han. But with the blast shield down even see! How am I supposed to fight need your help Luke. She needs your help getting too old for this sort of thing.</p>
<p>Act so surprised your highness. You mercy mission this time several transmissions were beamed to this ship by Rebel spies.</p>
<ul>
<li>You mean it controls your actions?</li>
<li>But with the blast shield down can even see! How am I supposed to fight?</li>
<li>I get involved got work to do not that I like the Empire</li>
<li>But nothing can do about it right now such a long way from here.</li>
</ul>";
} elseif ($page == 'policy') {
    $policytitle = 'Privacy Policy';
    $policycontent = "<p>SECTION 1 – WHAT DO WE DO WITH YOUR INFORMATION?</p>
<p>When you purchase something from our store, as part of the buying and selling process, we collect the personal information you give us such as your name, address and email address.</p>
<p>When you browse our store, we also automatically receive your computer’s internet protocol (IP) address in order to provide us with information that helps us learn about your browser and operating system.</p>
<p>Email marketing (if applicable): With your permission, we may send you emails about our store, new products and other updates.<br>
SECTION 2 – CONSENT</p>
<p>How do you get my consent?</p>
<p>When you provide us with personal information to complete a transaction, verify your credit card, place an order, arrange for a delivery or return a purchase, we imply that you consent to our collecting it and using it for that specific reason only.</p>
<p>If we ask for your personal information for a secondary reason, like marketing, we will either ask you directly for your expressed consent, or provide you with an opportunity to say no.<br>
How do I withdraw my consent?</p>
<p>If after you opt-in, you change your mind, you may withdraw your consent for us to contact you, for the continued collection, use or disclosure of your information, at anytime, by contacting us by mail at: 
<!--?php// echo $--SITENAME;?--> <br>
<!--?php //echo $--ADDRESS;?--><br>
SECTION 3 – DISCLOSURE</p>
<p>We may disclose your personal information if we are required by law to do so or if you violate our Terms of Service.<br>
SECTION 4 – SHOPIFY</p>
<p>Our store is hosted on Shopify Inc. They provide us with the online e-commerce platform that allows us to sell our products and services to you.</p>
<p>Your data is stored through Shopify’s data storage, databases and the general Shopify application. They store your data on a secure server behind a firewall.<br>
Payment:</p>
<p>If you choose a direct payment gateway to complete your purchase, then Shopify stores your credit card data. It is encrypted through the Payment Card Industry Data Security Standard (PCI-DSS). Your purchase transaction data is stored only as long as is necessary to complete your purchase transaction. After that is complete, your purchase transaction information is deleted.</p>
<p>All direct payment gateways adhere to the standards set by PCI-DSS as managed by the PCI Security Standards Council, which is a joint effort of brands like Visa, MasterCard, American Express and Discover.</p>
<p>PCI-DSS requirements help ensure the secure handling of credit card information by our store and its service providers.</p>
<p>For more insight, you may also want to read Shopify’s Terms of Service here or Privacy Statement here.<br>
SECTION 5 – THIRD-PARTY SERVICES<br>
In general, the third-party providers used by us will only collect, use and disclose your information to the extent necessary to allow them to perform the services they provide to us.</p>
<p>However, certain third-party service providers, such as payment gateways and other payment transaction processors, have their own privacy policies in respect to the information we are required to provide to them for your purchase-related transactions.</p>
<p>For these providers, we recommend that you read their privacy policies so you can understand the manner in which your personal information will be handled by these providers.</p>
<p>In particular, remember that certain providers may be located in or have facilities that are located in a different jurisdiction than either you or us. So if you elect to proceed with a transaction that involves the services of a third-party service provider, then your information may become subject to the laws of the jurisdiction(s) in which that service provider or its facilities are located.</p>
<p>As an example, if you are located in Canada and your transaction is processed by a payment gateway located in the United States, then your personal information used in completing that transaction may be subject to disclosure under United States legislation, including the Patriot Act.</p>
<p>Once you leave our store’s website or are redirected to a third-party website or application, you are no longer governed by this Privacy Policy or our website’s Terms of Service.<br>
Links</p>
<p>When you click on links on our store, they may direct you away from our site. We are not responsible for the privacy practices of other sites and encourage you to read their privacy statements.<br>
SECTION 6 – SECURITY</p>
<p>To protect your personal information, we take reasonable precautions and follow industry best practices to make sure it is not inappropriately lost, misused, accessed, disclosed, altered or destroyed.</p>
<p>If you provide us with your credit card information, the information is encrypted using secure socket layer technology (SSL) and stored with a AES-256 encryption. Although no method of transmission over the Internet or electronic storage is 100% secure, we follow all PCI-DSS requirements and implement additional generally accepted industry standards.<br>
COOKIES</p>
<p>Here is a list of cookies that we use. We’ve listed them here so you can choose if you want to opt-out of cookies or not.</p>
<p>_session_id, unique token, sessional, Allows Shopify to store information about your session (referrer, landing page, etc).</p>
<p>_shopify_visit, no data held, Persistent for 30 minutes from the last visit, Used by our website provider’s internal stats tracker to record the number of visits</p>
<p>_shopify_uniq, no data held, expires midnight (relative to the visitor) of the next day, Counts the number of visits to a store by a single customer.</p>
<p>cart, unique token, persistent for 2 weeks, Stores information about the contents of your cart.</p>
<p>_secure_session_id, unique token, sessional</p>
<p>storefront_digest, unique token, indefinite If the shop has a password, this is used to determine if the current visitor has access.</p>
<p>SECTION 7 – AGE OF CONSENT</p>
<p>By using this site, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.<br>
SECTION 8 – CHANGES TO THIS PRIVACY POLICY</p>
<p>We reserve the right to modify this privacy policy at any time, so please review it frequently. Changes and clarifications will take effect immediately upon their posting on the website. If we make material changes to this policy, we will notify you here that it has been updated, so that you are aware of what information we collect, how we use it, and under what circumstances, if any, we use and/or disclose it.</p>
<p>If our store is acquired or merged with another company, your information may be transferred to the new owners so that we may continue to sell products to you.<br>
QUESTIONS AND CONTACT INFORMATION</p>
<p>If you would like to: access, correct, amend or delete any personal information we have about you, register a complaint, or simply want more information contact our Privacy Compliance Officer by mail at <!--?php // echo $--EMAIL;?--></p>
<p>Re: Privacy Compliance Officer</p>
<p><!--?php echo $--ADDRESS;?--></p>";
} elseif ($page == 'terms') {
    $termtitle = 'Terms';
    $termcontent = "<p>These terms and conditions outline the rules and regulations for the use of Pamela Casey Blog Website.</p>
<p>Pamela Casey Blog is located at:</p>
<p>12457 Fitzroy St, Odessa, FL 33556, United States</p>
<p>By accessing this website we assume you accept these terms and conditions in full. Do not continue to use Pamela Casey Blog website if you do not accept all of the terms and conditions stated on this page.</p>
<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and any or all Agreements: “Client”, “You” and “Your” refers to you, the person accessing this website and accepting the Company’s terms and conditions. “The Company”, “Ourselves”, “We”, “Our” and “Us”, refers to our Company. “Party”, “Parties”, or “Us”, refers to both the Client and ourselves, or either the Client or ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner, whether by formal meetings of a fixed duration, or any other means, for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services/products, in accordance with and subject to, prevailing law of United States. Any use of the above terminology or other words in the singular, plural, capitalisation and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>
<p>Cookies</p>
<p>We employ the use of cookies. By using Pamela Casey Blog‘s website you consent to the use of cookies in accordance with Pamela Casey Blog’s privacy policy.</p>
<p>Most of the modern day interactive web sites use cookies to enable us to retrieve user details for each visit. Cookies are used in some areas of our site to enable the functionality of this area and ease of use for those people visiting. Some of our affiliate / advertising partners may also use cookies.</p>
<p>License</p>
<p>Unless otherwise stated, Pamela Casey Blog and/or it’s licensors own the intellectual property rights for all material on Pamela Casey Blog</p>
<p>All intellectual property rights are reserved. You may view and/or print pages from http://dailyfaceandskin.com for your own personal use subject to restrictions set in these terms and conditions.</p>
<p>You must not:</p>
<p>Republish material from http://dailyfaceandskin.com</p>
<p>Sell, rent or sub-license material from http://dailyfaceandskin.com</p>
<p>Reproduce, duplicate or copy material from http://dailyfaceandskin.com</p>
<p>Redistribute content from Pamela Casey Blog (unless content is specifically made for redistribution).</p>
<p>User Comments</p>
<p>This Agreement shall begin on the date hereof.</p>
<p>Certain parts of this website offer the opportunity for users to post and exchange opinions, information, material and data (‘Comments’) in areas of the website. Pamela Casey Blog does not screen, edit, publish or review Comments prior to their appearance on the website and Comments do not reflect the views or opinions of Pamela Casey Blog, its agents or affiliates. Comments reflect the view and opinion of the person who posts such view or opinion. To the extent permitted by applicable laws Pamela Casey Blog shall not be responsible or liable for the Comments or for any loss cost, liability, damages or expenses caused and or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>
<p>Pamela Casey Blog reserves the right to monitor all Comments and to remove any Comments which it considers in its absolute discretion to be inappropriate, offensive or otherwise in breach of these Terms and Conditions.</p>
<p>You warrant and represent that:</p>
<p>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</p>
<p>The Comments do not infringe any intellectual property right, including without limitation copyright, patent or trademark, or other proprietary right of any third party;</p>
<p>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material or material which is an invasion of privacy</p>
<p>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</p>
<p>You hereby grant to Pamela Casey Blog a non-exclusive royalty-free license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>
<p>Hyperlinking to our Content</p>
<p>The following organizations may link to our Web site without prior written approval:</p>
<p>Government agencies;</p>
<p>Search engines;</p>
<p>News organizations;</p>
<p>Online directory distributors when they list us in the directory may link to our Web site in the same manner as they hyperlink to the Web sites of other listed businesses; and</p>
<p>Systemwide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</p>
<p>These organizations may link to our home page, to publications or to other Web site information so long as the link: (a) is not in any way misleading; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p>
<p>We may consider and approve in our sole discretion other link requests from the following types of organizations:</p>
<p>commonly-known consumer and/or business information sources such as Chambers of Commerce, American Automobile Association, AARP and Consumers Union;</p>
<p>dot.com community sites;</p>
<p>associations or other groups representing charities, including charity giving sites,</p>
<p>online directory distributors;</p>
<p>internet portals;</p>
<p>accounting, law and consulting firms whose primary clients are businesses; and</p>
<p>educational institutions and trade associations.</p>
<p>We will approve link requests from these organizations if we determine that: (a) the link would not reflect unfavorably on us or our accredited businesses (for example, trade associations or other organizations representing inherently suspect types of business, such as work-at-home opportunities, shall not be allowed to link); (b)the organization does not have an unsatisfactory record with us; (c) the benefit to us from the visibility associated with the hyperlink outweighs the absence of Pamela Casey Blog; and (d) where the link is in the context of general resource information or is otherwise consistent with editorial content in a newsletter or similar product furthering the mission of the organization.</p>
<p>These organizations may link to our home page, to publications or to other Web site information so long as the link: (a) is not in any way misleading; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and it products or services; and (c) fits within the context of the linking party’s site.</p>
<p>If you are among the organizations listed in paragraph 2 above and are interested in linking to our website, you must notify us by sending an e-mail to pamelac@pamelacasey-blog.com. Please include your name, your organization name, contact information (such as a phone number and/or e-mail address) as well as the URL of your site, a list of any URLs from which you intend to link to our Web site, and a list of the URL(s) on our site to which you would like to link. Allow 2-3 weeks for a response.</p>
<p>Approved organizations may hyperlink to our Web site as follows:</p>
<p>By use of our corporate name; or</p>
<p>By use of the uniform resource locator (Web address) being linked to; or</p>
<p>By use of any other description of our Web site or material being linked to that makes sense within the context and format of content on the linking party’s site.</p>
<p>No use of (cname)’s logo or other artwork will be allowed for linking absent a trademark license agreement.</p>
<p>Iframes</p>
<p>Without prior approval and express written permission, you may not create frames around our Web pages or use other techniques that alter in any way the visual presentation or appearance of our Web site.</p>
<p>Content Liability</p>
<p>We shall have no responsibility or liability for any content appearing on your Web site. You agree to indemnify and defend us against all claims arising out of or based upon your Website. No link(s) may appear on any page on your Web site or within any context containing content or materials that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>
<p>Reservation of Rights</p>
<p>We reserve the right at any time and in its sole discretion to request that you remove all links or any particular link to our Web site. You agree to immediately remove all links to our Web site upon such request. We also reserve the right to amend these terms and conditions and its linking policy at any time. By continuing to link to our Web site, you agree to be bound to and abide by these linking terms and conditions.</p>
<p>Removal of links from our website</p>
<p>If you find any link on our Web site or any linked web site objectionable for any reason, you may contact us about this. We will consider requests to remove links but will have no obligation to do so or to respond directly to you.</p>
<p>Whilst we endeavour to ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we commit to ensuring that the website remains available or that the material on the website is kept up to date.</p>
<p>Disclaimer</p>
<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website (including, without limitation, any warranties implied by law in respect of satisfactory quality, fitness for purpose and/or the use of reasonable care and skill). Nothing in this disclaimer will:</p>
<p>limit or exclude our or your liability for death or personal injury resulting from negligence;</p>
<p>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</p>
<p>limit any of our or your liabilities in any way that is not permitted under applicable law; or</p>
<p>exclude any of our or your liabilities that may not be excluded under applicable law.</p>
<p>The limitations and exclusions of liability set out in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer or in relation to the subject matter of this disclaimer, including liabilities arising in contract, in tort (including negligence) and for breach of statutory duty.</p>
<p>To the extent that the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>
<p>Inspired by Pamela Casey Blog. Follow us on Instagram .</p>";
} elseif ($page == 'blog') {
    
    
    $blog1title = 'Apple Cider Vinegar Tastes Bad, But Is It Good For You';
    $blog1author = 'Esther Holloway';
    $blog1date = 'Feb 28th, 2017';

    $blog2title = 'Apple Cider Vinegar Tastes Bad, But Is It Good For You';
    $blog2date = 'Feb 28th, 2017';
    $blog2content = "<p>Raw Organic Apple Cider Vinegar (ACV) is made from nutritious, organically grown apples and retains many beneficial components because raw apple cider vinegar is not pasteurized. ACV undergoes two fermentation processes where it produces enzymes and life giving nutrients that make apple cider vinegar the powerhouse it is. 1 tablespoon of Raw Apple Cider Vinegar mixed in 4 ounces of purified water after a meal has been used as a natural remedy for heartburn and as a replacement for toxic heartburn medications.</p><br>";
    $blog2image = "images/apple2.jpg";

    
    $blog3title = "Many health experts are hailing apple cider vinegar for its many benefits";
    $blog3content = "Raw Apple Cider Vinegar may help improve bowel irregularity, thereby removing toxins from the body at a faster rate.
Helps clear up skin conditions and blemishes giving a more smooth texture and appearance.
Raw Apple Cider vinegar may also help with joint pain and stiffness.
Apple Cider Vinegar helps to break down fats so that your body can use them rather than store them. For this reason, many diets include ACV in the regimen.";
    $blog3img = "images/apple3.jpg";
    
    

    $blog4title = "How Do I Take Raw Apple Cider Vinegar?";
    $blog4content = "Beneficial ingredients in raw apple cider vinegar give it its power to make us feel better, look better, and feel energized. Just look at some of the beneficial ingredients in raw apple cider vinegar:
– Potassium – helps to fight against brittle teeth, hair loss and runny noses.
– Pectin – helps to regulate blood pressure and reduce bad cholesterol.

– Malic Acid – gives ACV the properties of being resistant to viruses, bacteria, and fungus.

– Calcium – supports strong bones and teeth.

– Ash – gives ACV its alkaline property which aids your body in maintaining proper pH levels for a healthy alkaline state.

– Acetic Acid – It appears that this acid slows the digestion of starch which can help to lower the rise in glucose that commonly occurs after meals
    <img src=\"images/9.jpg\" alt=\"\">
    Clear vinegar has none of the benefits of raw organic apple cider vinegar. Through its processing and distilling, it’s been stripped of everything beneficial and can be detrimental to your health since it is dead instead of alive.

Only raw organic apple cider vinegar has the “mother of vinegar” that makes the vinegar so beneficial. The “mother” is made up of living nutrients and bacteria. You can actually see it settled in the bottom on the bottle.

Mixed with another powerhouse of beneficial goodness, organic honey, apple cider vinegar can be a tasty treat with healthy benefits. This is a great drink for fast energy. Remember, the mother of vinegar will settle at the bottom of the bottle between uses and you want the healthy ingredients it contains. Be sure to shake the bottle well before pouring. In a large pitcher, add together:

2 tablespoons of Raw Organic Apple Cider Vinegar,
1 gallon of purified water,
Raw locally harvested honey or agave nectar to suit your taste.  Raw honey or organic agave nectar is a great addition that tastes great, can help improve your energy, strengthen your immune system, and much more.

You can also find apple cider vinegar in tablet or capsule form. However, I do not recommend those sources because they are dried and not alive like the liquid.

Raw Apple Cider Vinegar is very strong so I recommend always diluting it with water. A good ratio is 1 tablespoon per 32 ounces of water for general use.";
}

$output = array('site' => $site, 'footer' => $footer, 'social' => $social, 'sidebar' => $sidebar);
echo json_encode($output);
?>