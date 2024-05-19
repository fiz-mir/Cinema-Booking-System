<?php
session_start();
include 'dbConnect.php';

if (!isset($_SESSION['USER_ID'])) {
    header("location:login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Paragon | Privacy Policy</title>
     <!-- ::::::::::::::Icon Tab::::::::::::::-->
     <link rel="shortcut icon" href="assets/images/logo/paragon_logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/_navbarStyles.css" />
    <link rel="stylesheet" href="assets/_footerStyles.css" />
    <style>
    body {
      color: white;
    }
    .text-muted {
      color: #6c757d!important;
    }

</style>

</head>
<body id="page-top" class="index" data-pinterest-extension-installed="cr1.3.4">
      <!-- HEADER SECTION -->
      <?php include('header.php') ?>
  
      <div class="container my-4">
        <div class="row">
          <div class="col-lg-12">
            <h1>Privacy Policy</h1><br>
            <h4>Paragon’s Privacy Policy and Personal Data Notice</h4><br><hr><br>
            <p>The privacy and personal data policy and practices of Paragon Cinemas Sdn. Bhd., PARAGON Movies Sdn Bhd, and its affiliated/ related companies (PARAGON) set out in this Privacy Policy and Personal Data Notice apply to all personal data provided to PARAGON, whether in electronic form or otherwise. By visiting and/or using www.Paragon.com.my and www.Paragonmovies.com.my (PARAGON’s Website), any mobile applications run and maintained by PARAGON (PARAGON Mobile Application), and other services provided by PARAGON as well as by providing personal data to PARAGON, you agree to be bound by the terms and conditions of this Privacy Policy and Personal Data Notice. If you do not agree to such terms and conditions, please do not use or access PARAGON’s Website or PARAGON Mobile Application, use the services provided by PARAGON or provide any personal data to PARAGON.
                </p><p>
                PARAGON’s collection of your personal data is part of its normal operation of PARAGON’s services. PARAGON has developed this Privacy Policy to inform you about PARAGON’s policy and practices on personal data and privacy matters and because PARAGON believes that you should know as much as possible about such matters so that you can make informed decisions.
                <br></p><p>
                Notice
                This written notice serves to inform you that your personal data is being processed by or on behalf of PARAGON. For the purposes of this written notice, the terms “personal data” and “processing” shall have the meaning assigned to them in the Personal Data Protection Act 2010 (hereinafter referred to as the “PDPA”).
                </p><p>
                <h4>Description of your personal data</h4>
                Your personal data processed by PARAGON includes:-
                
                </p><p>
                1.your personal details such as name, gender, identification support documents (including NRIC or passport number), date of birth, race, nationality, country, marital status, occupation and contact details (such as current residential or business address, e-mail address, and phone numbers);<br>
                2.your feedback information gathered from multiple sources such as e-mail, phone and write-in;<br>
                3.your visits to PARAGON’s Websites/ PARAGON Mobile Application – name of internet service provider, the website from which you visit PARAGON Website/ PARAGON Mobile Application, the pages and content which you view, the date and duration of your visit, cookies to track usage patterns, etc from the analytics tools such as Google Analytics and others;<br>
                4.your personal interests and preferences to help PARAGON design the offering of its products;<br>
                5.recording of your image via CCTV cameras when you visit PARAGON cinemas;<br>
                6.your curriculum vitae or resume when you register your interest in having a career in PARAGON and/or its relevant subsidiary/subsidiaries; and <br>
                7.information given voluntarily by you during any on-ground promotions or digital activities, tie-ups, contests, etc.
                </p><p>
                <h4>Purposes for the processing of your personal data</h4>
                PARAGON may process your personal data collected from you or from any of the class of third parties stated in this Privacy Policy, for any one or more of the following purposes (hereinafter referred to as the “Purposes”):-
                </p>
                1.To verify your identity; <br>
                2.To communicate with you and deliver information that is requested by you to you and/or, in some cases, is targeted to your interests, such as targeted banner advertisements, administrative notices, product offerings, and communications relevant to your use of PARAGON’s Website, PARAGON Mobile Application and or PARAGON services; <br>
                3.To process any communication you send to PARAGON (for example, answering any queries, dealing with any complaints and/or feedbacks); <br>
                4.To notify and/or invite you to events or activities organized by PARAGON, its partners or sponsors; <br>
                5.To notify you about benefits, changes to the features, promotions, alerts, newsletter, updates, promotional materials and, special privileges; <br>
                6.To send you festive greetings and movie-related content; <br>
                7.To run PARAGON’s customer loyalty programmes where applicable; <br>
                8.To establish and better manage any business relationship PARAGON may have with you; <br>
                9.To help PARAGON monitor and improve its services to you, PARAGON’s customer service teams, PARAGON’s Website and PARAGON Mobile Application and other PARAGON related assets and services, and to facilitate and conduct PARAGON’s staff training and PARAGON’s quality control and audits; <br>
                10.To conduct marketing activities (for example, market research and surveys); <br>
                11.To maintain records required for auditing, security, claims and/or other legal purposes; <br>
                12.To investigate and resolve any ticketing issues or otherqueries or complaints that you may submit to or raise with PARAGON; <br>
                13.To investigate, respond to, and/ or defend claims made against, or involving PARAGON; <br>
                14.For compliance with and/or any purposes required by any relevant law, directives, guidelines, orders, rules, regulations and requirements of any governmental or statutory authority or administrative or regulatory or supervisory body (including disclosure thereunder); <br>
                15.To process and facilitate any payment and transactions with PARAGON including the purchase of movie tickets and other products or services from PARAGON; and <br>
                16.In a situation where you have applied for a job with us via PARAGON’s Website, to evaluate your suitability for the position applied for at PARAGON, for the general record keeping purposes of the Human Resource Department as well as for other purposes relating or incidental to employment with PARAGON, whether or not you are subsequently employed and <br>
                17.Any other purposes relating or incidental to any of the above. <br></p>
                 
                <h4>Source of your personal data</h4>
                <p>Your personal data is collected directly from you when you:-</p>
                
                1.interact and communicate with PARAGON at any of its events or activities; <br>
                2.communicate with PARAGON whether through email, phone, PARAGON’s Website or PARAGON Mobile Application, social media such as Facebook, Twitter and Instagram as well as other forms of communication; <br>
                3.register or subscribe for a specific service or publications of PARAGON (for example, newsletter or PARAGON membership registration); <br>
                4.participate in any of PARAGON’s surveys, polls or other similar vehicles used to improve the content of PARAGON’s Website/PARAGON Mobile Application or used for PARAGON’s marketing purposes; <br>
                5.enter or participate in any competitions, contests or loyalty programmes organized by PARAGON; <br>
                6.register your interest and/or request for information through PARAGON’s Website or PARAGON Mobile Application, online portals or other available channels; <br>
                7.respond to any marketing materials that PARAGON sends out; <br>
                8.visit or browse PARAGON’s website and any other PARAGON owned platforms; <br>
                9.lodge a complaint with PARAGON; and <br>
                10.provide feedback to PARAGON (for example via PARAGON’s website or in hard copy). <br> </p>
                 
                <p>Other than the personal data obtained from you directly as stated above, PARAGON may also obtain your personal data from third parties which PARAGON deals with or are connected with you, and from such other sources where you have given your consent for the disclosure of your personal data and/or where otherwise lawfully permitted.</p>
                
                <h4>Your rights</h4>
                <p>You have the following rights in relation to your Personal Data:-</p>
                
                1.to make a data request in writing to PARAGON for information of your personal data that is being processed by or on behalf of PARAGON (Section 30(2) of PDPA); <br>
                2.to correct any of your personal data which is inaccurate, incomplete, misleading or not up-to-date (Section 34(1) of PDPA) PARAGON’s website by completing the Personal Data Update Form and emailing it to PARAGON at cs@Paragon.com.my  .; <br>
                3.to limit the processing of your personal data including the personal data relating to other persons who may be identified from your personal data (Section 7(1)(f) of PDPA); and <br>
                4.to request for your personal data to be removed from PARAGON’s database. <br> </p>
                 
                <p>If you have any request in relation to the abovementioned rights or any inquiries or complaints in respect of your personal data, please contact:</p>
                
                <h5>Customer Relations</h5>
                
                (6) 03 - 7713 7888 <br>
                <p>Email Address: cs@Paragon.com.my</p>
                
                <p>PARAGON may refuse to comply with your data access request under the circumstances specified in the PDPA and if PARAGON does so, PARAGON will inform you of its refusal and the reason(s) for its refusal.</p>
                
                <h4>Class of third parties to PARAGON may disclose your personal data</h4>
                <p>This is the class of persons to whom PARAGON may disclose your personal data:-</p>
                
                1.Third party service provider(s) for the provision of administrative, communications, payment, event management, security, information technology (IT), data processing or other services to PARAGON. <br>
                2.Any third party or company that PARAGON engages or appoints to conduct statistical analysis; <br>
                3.PARAGON’s business partners in relation to any products offered by PARAGON or the said business partner, including Hong Leong Bank in relation to the PARAGON-Hong Leong Bank Credit Card <br>
                4.Lawyers for the enforcement of PARAGON’s legal rights; and <br>
                5.Such other authorities, bodies or parties when required by law. <br> </p>
                 
                <p>Your Personal Data is collected and processed to provide you with PARAGON services and to facilitate the Purposes pursuant to your request. Such recipients of your Personal Data are contractually prohibited from using Personal Data for any purpose other than for the purpose PARAGON specifies.</p>
                
                <h4>Your obligations</h4>
                <p>1.Unless otherwise specified, it is obligatory for you to supply PARAGON with your personal data and your failure to do so will result in PARAGON being unable to process your personal data for any of the Purposes. <br>
                2.You will take reasonable steps to ensure that your personal data is accurate, complete, not misleading and kept up-to-date (Section 11 of PDPA).
                </p>
                <h4>Security of your personal data</h4>
                <p>PARAGON, when processing your personal data, takes practical steps to protect your personal data from any loss, misuse, modification, unauthorized or accidental access or disclosure, alteration or destruction including but not limited to the use of procedural and technical safeguards such as encryption, “firewalls” and secure socket layers. If you are aware of any security breach, please let us know as soon as possible.</p>
                
                <p>However, “perfect security” does not exist on the internet, so PARAGON does not give an absolute assurance that your personal data that you provide to PARAGON will be secure at all times, and PARAGON will not be responsible for any event arising from unauthorised access to or theft of your personal data. PARAGON will not be held responsible for events arising from third parties gaining unauthorised access to or third parties’ theft of your personal data.</p>
                
                <h4>Retention of your personal data</h4>
                <p>PARAGON will keep your personal data for the duration that is necessary for the Purposes set out in this Privacy Policy and Personal Data Notice.</p>
                
                <h4>Amendment to this Privacy Policy and Personal Data Notice</h4>
                <p>PARAGON reserves the right to amend this Privacy Policy and Personal Data Notice at any time by posting an amended Privacy Policy and Personal Data Notice containing such amendments on PARAGON’s Website or by any other mode PARAGON deems suitable.</p>
                
                <h4>Users under the age of 18</h4>
                <p>The PARAGON website and its related services are not directed at persons under 18 years of age. </p>
                
                <h4>Inconsistency or conflict</h4>
                <p>In the event of any inconsistency or conflict between the English language version and the Bahasa Malaysia version, the English language version shall prevail.</p>
                
                <h4>Others rights</h4>
                <p>For avoidance of doubt, nothing in this Privacy Policy and Personal Data Notice shall limit such other rights of yourself or PARAGON under the PDPA.</p>
                
                <h4>Links to other websites</h4>
                <p>When you use a link from PARAGON’s Website/ PARAGON Mobile Application to another third party website, this Privacy Policy is no longer in effect. Once you have used such link, PARAGON does not have any control over that other third party website and PARAGON cannot and shall not be liable or responsible for the protection and privacy of any personal data which you provided whilst visiting such website(s). Your browsing of and interaction on any other third party website(s) will be subject to that websites’ own rules and policies.</p>  
                
                <h4>Cookies</h4>
                <p>“Cookies” are text files to store your preferences that are placed in the browser of your device. PARAGON’s Website or PARAGON Mobile Application may use Cookies to enhance your experience and understand the usage of the PARAGON’s Website or PARAGON Mobile Application. Cookies will not provide us with personally identifiable information unless you choose to provide such Personal Data to PARAGON. Once Personal Data is furnished, however, this information may be linked to the data stored in the Cookie.</p>
                
                <h4>Usage tracking and Log Files</h4>
                <p>PARAGON’s web server automatically collects information on your domain type, browser used and your IP address for statistical purposes only, which will be used to improve the content of the PARAGON Website or PARAGON Mobile Application and not sold to other organizations for any purpose. </p>
                
                <p>As with most other websites, PARAGON collects and uses the data contained in log files. The information in the log files include your IP (internet protocol) address, your ISP (internet service provider), the browser you used to visit the PARAGON’s Website, your screen resolutions and number of colors, the time you visited the Website and which pages you have visited throughout the PARAGON’s Website.</p>
                
                <h4>Processing of Personal Data</h4>
                <p>Your Personal Data may be transferred to another country as part of the processing of Personal Data. The jurisdictions in which the Personal Data or information is processed may or may not have laws to regulate the privacy of personal data, however, whenever your Personal Data is transferred by PARAGON and/or PARAGON third party service providers, PARAGON will use its best endeavor to ensure that your Personal Data is processed in accordance with the terms and conditions of this Policy.</p>
           </div>
         </div>
      </div>

          <!-- FOOTER SECTION -->
    <?php include('footer.php') ?>
</body>
</html>
