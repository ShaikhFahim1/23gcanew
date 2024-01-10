<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Know Our Partners - 23rd GCA</title>

    <?php
    include "includes/header_includes.php";
    ?>

    <style>
        .about .content-block {
            margin: 15px 0 !important;
        }

        .about .content-block .description-one p {
            margin-bottom: 15px;
        }

        label.label {
            color: #222;
        }

        .custom-card {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: row;
            /* Display children in a row */
            transition: box-shadow 0.3s ease;
            /* Transition for shadow */
        }

        .custom-card:hover {
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
            /* Shadow on hover */
        }

        .custom-card .card-body:first-child {
            flex: 1;
            /* Updated to 50% width */
            padding: 20px;
            background-color: #f8f9fa;
            /* Lighter background color */
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Center content horizontally */
            align-items: center; /* Center content vertically */
        }

        .company-logo {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
            max-height: 110px;
        }

        .company-name {
            font-size: 1.5em;
            /* Larger font size */
            font-weight: bold;
            margin-bottom: 10px;
            /* Increased margin */
            color: #007bff;
            /* Company title color */
        }

        .partnership-category {
            font-size: 1.1em;
            /* Larger font size */
            color: #6c757d;
            /* Company category color */
            margin-bottom: 10px;
            /* Increased margin */
        }

        .custom-card .card-body:last-child {
            flex: 3;
            /* Updated to 50% width */
            padding: 20px;
        }

        .description {
            font-size: 1em;
            line-height: 1.5;

            color: #111;
            overflow: hidden;
            height: 185px;
            /* Initial height */
        }

        .read-more {
            color: #007bff;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .fa-icon {
            margin-left: 5px;
        }

        .moretext {
            display: none;
        }

        .new-height {
            height: auto !important;
            margin-bottom: 20px;
        }
        .section.schedule.two a:not(.btn){
            color: #007bff;
        }
    </style>
</head>

<body class="body-wrapper">


    <!--========================================
=            Navigation Section            =
=========================================-->
    <?php
    include "includes/header.php"
    ?>

    <!--====  End of Navigation Section  ====-->


    <!--================================
=            Page Title            =
=================================-->

    <section class="page-title bg-title overlay-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="title">
                        <h3>Know Our Partners</h3>
                    </div>
                    <ol class="breadcrumb justify-content-center p-0 m-0">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active">Know Our Partners</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!--===========================
=            About            =
============================-->
    <?php
    $partnerPath = "assets/images/partners/";
    ?>
    <section class="section schedule two">

        <div class="container">
            <div class="card custom-card">
                <!-- First Section (30%) -->
                <div class="card-body text-center">
                    <img class="company-logo" src="<?= $partnerPath; ?>K A Pandit_AGFA.png" alt="Company Logo">
                    <div class="company-name">AGFA Partner</div>
                    <!-- <div class="partnership-category"></div> -->
                </div>

                <!-- Border between sections -->
                <!-- //my-3 -->
                <div class="border-left"></div>

                <!-- Second Section (70%) -->
                <div class="card-body">
                    <p class="description new-height">
                        Established in 1943, K. A. Pandit has navigated a historical journey of 80 years. It is the oldest Actuarial Firm in India. Our central working theme of a ‘client centric approach’ finds us in the constant endeavour to understand our clients better, address their needs and find innovative business solutions for them, which in fact, also derives its inspiration from our business tag line “We work for you, wherever your business takes you!’’
                        We have 3 distinguished service lines namely – Employee Benefits, Insurance and Corporate Solutions catering to 5000+ clients across globe. We strongly believe in building meaningful relationships, facilitating sustainable growth and development for the business while nurturing purposeful contributions to the society and world.
                        
                    </p>
                    <a href="https://www.ka-pandit.com/" target="_blank" class="btn btn-main-md">Partner Website</a>
                </div>
            </div>

            <div class="card custom-card mt-5">
                <!-- First Section (30%) -->
                <div class="card-body text-center">
                    <img class="company-logo" src="<?= $partnerPath; ?>M&G Global.png" alt="Company Logo">
                    <div class="company-name">Gold Partner</div>
                    <div class="partnership-category"></div>
                </div>

                <!-- Border between sections -->
                <!-- //my-3 -->
                <div class="border-left"></div>

                <!-- Second Section (70%) -->
                <div class="card-body">
                    <p class="description">
                        A strong partner within the M&G plc group, enabling our international savings and investment business.
                        <br>M&G Global Services Private Limited is M&G plc’s fully owned entity in India, delivering with excellence since inception in 2003.

                        <br>We serve international customers through our customer brands – international asset manager M&G Investments, and Prudential which manages long-term savings, investments and retirement solutions within the M&G plc group.
                        <br><br>About Us

                        <br>M&G Global Services was established in Mumbai, India in 2003. We focus on delivering positive outcomes for our customers and clients across the M&G plc group, providing knowledge-based and digitally led solutions.

                        <br>We partner with our colleagues across business areas and international locations for the group such as digital, finance, actuarial, quants, investment management, wealth operations, technology, risk, compliance, and audit, including M&G’s third parties in India.

                        <br>Our focus on <a href="https://www.mandgplc.com/sitecore/service/notfound.aspx?item=web%3a%7b767FAE7C-535F-408E-9AFC-A60930A5C0D5%7d%40en" target="_blank">sustainability</a>, <a href="https://www.mandgplc.com/our-business/diversity-and-inclusion"  target="_blank">diversity and inclusion</a> along with our <a href="https://www.mandgplc.com/sitecore/service/notfound.aspx?item=web%3a%7b2248D51B-C480-44B7-AC6B-19D83EB23A1F%7d%40en" target="_blank">Corporate Responsibility (CR)</a> initiatives, helps us to build a well-knit and sustainable community.

                
                    </p>
                    <p class="read-more" onclick="toggleDescription(this)">
                        Read More <i class="fa fa-chevron-down fa-icon"></i>
                    </p>
                    <a href="https://www.mandg.com/mandgglobalservices.com" target="_blank" class="btn btn-main-md">Partner Website</a>
                </div>
            </div>
            <div class="card custom-card mt-5">
                <!-- First Section (30%) -->
                <div class="card-body text-center">
                    <img class="company-logo" src="<?= $partnerPath; ?>Swiss Re.png" alt="Company Logo">
                    <div class="company-name">Gold Partner</div>
                    <div class="partnership-category"></div>
                </div>

                <!-- Border between sections -->
                <!-- //my-3 -->
                <div class="border-left"></div>

                <!-- Second Section (70%) -->
                <div class="card-body">
                    <p class="description new-height">
                        The Swiss Re Group is one of the world's leading providers of reinsurance, insurance and other forms of insurance-based risk transfer, working to make the world more resilient. The aim of the Swiss Re Group is to enable society to thrive and progress, creating new opportunities and solutions for its clients. Our Reinsurance Business Unit covers both Property & Casualty and Life & Health. We're a leading, diversified global reinsurer with offices in more than 20 countries, providing expertise and services to clients throughout the world. We've been engaged in the reinsurance business since our foundation in Zurich, Switzerland in 1863.
                       
                    </p>
                    <a href="https://www.swissre.com/" target="_blank" class="btn btn-main-md">Partner Website</a>
                </div>
            </div>
            
            <div class="card custom-card mt-5">
                <!-- First Section (30%) -->
                <div class="card-body text-center">
                    <img class="company-logo" src="<?= $partnerPath; ?>CAS Logo.png" alt="Company Logo">
                    <div class="company-name">Silver Partner</div>
                    <div class="partnership-category"></div>
                </div>

                <!-- Border between sections -->
                <!-- //my-3 -->
                <div class="border-left"></div>

                <!-- Second Section (70%) -->
                <div class="card-body">
                    <p class="description new-height">
                        The Casualty Actuarial Society (CAS) is a leading international organization for credentialing and professional education. Founded in 1914, the CAS is the world’s only actuarial organization focused exclusively on general insurance risks and serves over 10,000 members worldwide. CAS members are experts in general insurance, reinsurance, finance, risk management, and enterprise risk management. Professionals educated by the CAS empower business and government to make well-informed strategic, financial and operational decisions.
                        

                    </p>
                    <a href="https://www.casact.org" target="_blank" class="btn btn-main-md">Partner Website</a>
                </div>
            </div>
            <div class="card custom-card mt-5">
                <!-- First Section (30%) -->
                <div class="card-body text-center">
                    <img class="company-logo" src="<?= $partnerPath; ?>HDFC ERGO.png" alt="Company Logo">
                    <div class="company-name">Silver Partner</div>
                    <div class="partnership-category"></div>
                </div>

                <!-- Border between sections -->
                <!-- //my-3 -->
                <div class="border-left"></div>

                <!-- Second Section (70%) -->
                <div class="card-body">
                    <p class="description">
                        HDFC ERGO General Insurance Company Limited was promoted by erstwhile Housing Development Finance Corporation Ltd. (HDFC), India&rsquo;s premier Housing Finance Institution and ERGO International AG, the primary insurance entity of Munich Re Group. Consequent to the implementation of the Scheme of Amalgamation of HDFC with and into HDFC Bank Limited (Bank), one of India&rsquo;s leading private sector banks, the Company has become a subsidiary of the Bank. HDFC ERGO is the second largest non-life insurance company in the Private Sector as on 31st March 2023 based on gross premium garnered. &nbsp;
                        <br><br>A digital-first company, transforming into an AI-first company, HDFC ERGO is a leader in implementing technology to offer customers the best-in-class service experience. The company has created a stream of innovative &amp; new products as well as services using technologies like Artificial Intelligence (AI), Machine Learning (ML), Natural Processing Language (NLP), and Robotics. HDFC ERGO offers a range of general insurance products and has a completely digital sales process with ~93% of retail policies issued digitally. HDFC ERGO&rsquo;s technology platform has empowered it to service 66% of policy servicing requests digitally on a 24x7 basis with one third of the requests serviced through Artificial Intelligence. &nbsp;
                        <br><br>In FY23, the company has issued 1.22 crore policies and has settled ~50 lakhs claims. The Company has an active data base of 1.5+ crore customers. HDFC ERGO is present in 490 districts of the country through their 215 branches, 10,000+ employees and 1.8 lakhs agents and channel partners.&nbsp;
                        <br><br>HDFC ERGO offers a complete range of General Insurance products including Health, Motor, Home, Agriculture, Travel, Credit, Cyber and Personal Accident in the retail space along with Property, Marine, Engineering, Marine Cargo, Group Health and Liability Insurance in the corporate space. Be it unique insurance products, integrated customer service models, top-in-class claim processes or a host of technologically innovative solutions, HDFC ERGO has been able to delight its customers at every touch-point and milestone to ensure consumers are serviced in real-time.&nbsp;
                        <br><br>Please log on to <a href="https://www.hdfcergo.com" target="_blank">www.hdfcergo.com</a> or stay connected on the following social media handles to get more information on HDFC ERGO and the products and services offered by the company. &nbsp;
                
                    </p>
                    <p class="read-more" onclick="toggleDescription(this)">
                        Read More <i class="fa fa-chevron-down fa-icon"></i>
                    </p>
                    <a href="https://www.hdfcergo.com/" target="_blank" class="btn btn-main-md">Partner Website</a>
                </div>
            </div>
            <div class="card custom-card mt-5">
                <!-- First Section (30%) -->
                <div class="card-body text-center">
                    <img class="company-logo" src="<?= $partnerPath; ?>ICICI pru Logo.jpg" alt="Company Logo">
                    <div class="company-name">Silver Partner</div>
                    <div class="partnership-category"></div>
                </div>

                <!-- Border between sections -->
                <!-- //my-3 -->
                <div class="border-left"></div>

                <!-- Second Section (70%) -->
                <div class="card-body">
                    <p class="description">
                        ICICI Prudential Life Insurance Company Limited (ICICI Prudential Life) is promoted by ICICI Bank Limited and Prudential Corporation Holdings Limited.

                        <br><br>ICICI Prudential Life began its operations in the fiscal year 2001. On a retail weighted received premium basis (RWRP), it has consistently been amongst the top companies in the Indian life insurance sector. Our Assets Under Management (AUM) at September 30, 2023 were ₹2,719.03 billion.

                        <br><br>At ICICI Prudential Life, we operate on the core philosophy of customer-centricity. We offer long-term savings and protection products to meet the different life stage requirements of our customers. We have developed and implemented various initiatives to provide cost-effective products, superior quality services, consistent fund performance and a hassle-free claim settlement experience to our customers.
                    </p>
                    <p class="read-more" onclick="toggleDescription(this)">
                        Read More <i class="fa fa-chevron-down fa-icon"></i>
                    </p>
                    <a href="https://www.iciciprulife.com/" target="_blank" class="btn btn-main-md">Partner Website</a>
                </div>
            </div>


        </div>



    </section>




    <!--====  End of Speakers  ====-->

    <!--==============================
=            Schedule            =
===============================-->



    <?php
    include "includes/footer.php";
    include "includes/footer_includes.php";
    ?>


    <script>
        function toggleDescription(element) {
            var cardBody = element.parentElement;
            var description = cardBody.querySelector('.description');
            var readMore = cardBody.querySelector('.read-more');

            if (description.style.height === '' || description.style.height === '185px') {
                description.style.height = 'auto';
                readMore.innerHTML = 'Read Less <i class="fa fa-chevron-up fa-icon"></i>';
            } else {
                description.style.height = '185px';
                readMore.innerHTML = 'Read More <i class="fa fa-chevron-down fa-icon"></i>';
            }
        }
    </script>

</body>

</html>