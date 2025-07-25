<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Info - Thaalam Summer Festival</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R8MGX2H3KC"></script>
    <script src="https://static.zohocdn.com/backstage/v1.0/javascript/ticket-widget/v1.3/register-widget.min.js" defer></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-R8MGX2H3KC');
    </script>

    <!-- Head Css -->
    <?php include 'php/css.php'; ?>
    <link rel='stylesheet' href='https://static.zohocdn.com/backstage/v1.0/styles/ticket-widget/v1.3/register-widget.min.css'>

</head>

<body class="custom-cursor">
    <!-- Preloader Secton -->
    <?php include 'php/preloader.php'; ?>
    <!-- Preloader Secton End -->

    <div class="page-wrapper">

        <!-- Main Header Start -->
        <?php include 'php/header.php'; ?>
        <!-- Main Header End -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="container">
                <div class="page-header__inner">
                    <h2 data-key="info">Info</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="/index" data-key="home">Home</a></li>
                            <li><span>//</span></li>
                            <li data-key="info">Info</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <section class="tab-section-modern">
            <div class="container">
                <h2 data-key="festivalInfo.title" style="text-align: center;" class="mb-4"></h2>
                <div class="tab-section__header">
                    <ul class="nav nav-tabs modern-tabs" id="infoTab" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general-information" type="button" role="tab">
                                <span class="tab-icon"><i class="fas fa-info-circle"></i></span>
                                <span class="tab-label" data-key="">General Information</span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="rules-tab" data-bs-toggle="tab" data-bs-target="#festival-rules" type="button" role="tab">
                                <span class="tab-icon"><i class="fas fa-clipboard-list"></i></span>
                                <span class="tab-label" data-key="">Festival Rules</span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="arrival-tab" data-bs-toggle="tab" data-bs-target="#arrival" type="button" role="tab">
                                <span class="tab-icon"><i class="fas fa-route"></i></span>
                                <span class="tab-label" data-key="">Arrival</span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="ticket-tab" data-bs-toggle="tab" data-bs-target="#ticket-information" type="button" role="tab">
                                <span class="tab-icon"><i class="fas fa-ticket-alt"></i></span>
                                <span class="tab-label" data-key="">Ticket Information</span>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="general-information-tab">
                    <div class="tab-pane fade show active" id="general-information" role="tabpanel" aria-labelledby="general-information-tab">
                        <div class="event-details__content-box">
                            <div class="accordion modern-accordion" id="generalInformation">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingTwentyFive">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                            data-bs-target="#festivalCollapseTwentyFive" aria-expanded="true"
                                            aria-controls="festivalCollapseTwentyFive">
                                            <i class="fas fa-bullhorn"></i>
                                            <span data-key="festivalInfo.idCheck.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseTwentyFive" class="accordion-collapse show"
                                        aria-labelledby="festivalHeadingTwentyFive" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <p data-key="festivalInfo.idCheck.content"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingTwentySix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#festivalCollapseTwentySix" aria-expanded="false"
                                            aria-controls="festivalCollapseTwentySix">
                                            <i class="fas fa-bullhorn"></i>
                                            <span data-key="festivalInfo.admissionMinors.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseTwentySix" class="accordion-collapse collapse"
                                        aria-labelledby="festivalHeadingTwentySix" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <p data-key="festivalInfo.admissionMinors.content1"></p><br>
                                            <p data-key="festivalInfo.admissionMinors.content2"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingTwentySeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#festivalCollapseTwentySeven" aria-expanded="false"
                                            aria-controls="festivalCollapseTwentySeven">
                                            <i class="fas fa-bullhorn"></i>
                                            <span data-key="festivalInfo.childrenUnder6.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseTwentySeven" class="accordion-collapse collapse"
                                        aria-labelledby="festivalHeadingTwentySeven" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <p data-key="festivalInfo.childrenUnder6.content1"></p><br>
                                            <p data-key="festivalInfo.childrenUnder6.content2"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingTwentyEight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#festivalCollapseTwentyEight" aria-expanded="false"
                                            aria-controls="festivalCollapseTwentyEight">
                                            <i class="fas fa-bullhorn"></i>
                                            <span data-key="festivalInfo.children6to16.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseTwentyEight" class="accordion-collapse collapse"
                                        aria-labelledby="festivalHeadingTwentyEight" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <p data-key="festivalInfo.children6to16.content"></p><br>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingNine">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#festivalCollapseNine" aria-expanded="false" aria-controls="festivalCollapseNine">
                                            <i class="fas fa-bullhorn"></i> <span data-key="festivalInfo.chargeUp_title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseNine" class="accordion-collapse collapse" aria-labelledby="festivalHeadingNine" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <h4 data-key="festivalInfo.chargeUp_note"></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingTwentyNine">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#festivalCollapseTwentyNine" aria-expanded="false"
                                            aria-controls="festivalCollapseTwentyNine">
                                            <i class="fas fa-bullhorn"></i>
                                            <span data-key="festivalInfo.siteMap.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseTwentyNine" class="accordion-collapse collapse"
                                        aria-labelledby="festivalHeadingTwentyNine" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <p data-key="festivalInfo.siteMap.content"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingThirty">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#festivalCollapseThirty" aria-expanded="false"
                                            aria-controls="festivalCollapseThirty">
                                            <i class="fas fa-bullhorn"></i>
                                            <span data-key="festivalInfo.openingHours.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseThirty" class="accordion-collapse collapse"
                                        aria-labelledby="festivalHeadingThirty" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <ul>
                                                <li data-key="festivalInfo.openingHours.friday"></li>
                                                <li data-key="festivalInfo.openingHours.saturday"></li>
                                                <li data-key="festivalInfo.openingHours.sunday"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingThirtyOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#festivalCollapseThirtyOne" aria-expanded="false"
                                            aria-controls="festivalCollapseThirtyOne">
                                            <i class="fas fa-bullhorn"></i>
                                            <span data-key="festivalInfo.personalCare.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseThirtyOne" class="accordion-collapse collapse"
                                        aria-labelledby="festivalHeadingThirtyOne" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <p data-key="festivalInfo.personalCare.intro"></p>
                                            <ul>
                                                <li data-key="festivalInfo.personalCare.point1"></li>
                                                <li data-key="festivalInfo.personalCare.point2"></li>
                                                <li data-key="festivalInfo.personalCare.point3"></li>
                                                <li data-key="festivalInfo.personalCare.point4"></li>
                                                <li data-key="festivalInfo.personalCare.point5"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingsix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#festivalCollapsesix" aria-expanded="false" aria-controls="festivalCollapsesix">
                                            <i class="fas fa-bullhorn"></i> <span data-key="festivalInfo.foodDrink_title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapsesix" class="accordion-collapse collapse" aria-labelledby="festivalHeadingsix" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <p data-key="festivalInfo.foodDrink_info1"></p>
                                            <p data-key="festivalInfo.foodDrink_info1_1"></p>
                                            <ul>
                                                <li data-key="festivalInfo.foodDrink_info2"></li>
                                                <li data-key="festivalInfo.foodDrink_info3"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingfive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#festivalCollapsefive" aria-expanded="false" aria-controls="festivalCollapsefive">
                                            <i class="fas fa-bullhorn"></i> <span data-key="festivalInfo.safety_title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapsefive" class="accordion-collapse collapse" aria-labelledby="festivalHeadingfive" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <ul>
                                                <li data-key="festivalInfo.safety_rule1"></li>
                                                <li data-key="festivalInfo.safety_rule2"></li>
                                                <li data-key="festivalInfo.safety_rule3"></li>
                                                <li data-key="festivalInfo.safety_rule4"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingThirtyTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#festivalCollapseThirtyTwo" aria-expanded="false"
                                            aria-controls="festivalCollapseThirtyTwo">
                                            <i class="fas fa-bullhorn"></i>
                                            <span data-key="festivalInfo.sanitary.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseThirtyTwo" class="accordion-collapse collapse"
                                        aria-labelledby="festivalHeadingThirtyTwo" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <p data-key="festivalInfo.sanitary.content"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingThirtyThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#festivalCollapseThirtyThree" aria-expanded="false"
                                            aria-controls="festivalCollapseThirtyThree">
                                            <i class="fas fa-bullhorn"></i>
                                            <span data-key="festivalInfo.medical.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseThirtyThree" class="accordion-collapse collapse"
                                        aria-labelledby="festivalHeadingThirtyThree" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <p data-key="festivalInfo.medical.content"></p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingThirtyFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#festivalCollapseThirtyFour" aria-expanded="false"
                                            aria-controls="festivalCollapseThirtyFour">
                                            <i class="fas fa-bullhorn"></i>
                                            <span data-key="festivalInfo.hearing.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseThirtyFour" class="accordion-collapse collapse"
                                        aria-labelledby="festivalHeadingThirtyFour" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <p data-key="festivalInfo.hearing.content1"></p>
                                            <p data-key="festivalInfo.hearing.content2"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingThirtyFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#festivalCollapseThirtyFive" aria-expanded="false"
                                            aria-controls="festivalCollapseThirtyFive">
                                            <i class="fas fa-bullhorn"></i>
                                            <span data-key="festivalInfo.security.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseThirtyFive" class="accordion-collapse collapse"
                                        aria-labelledby="festivalHeadingThirtyFive" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <p data-key="festivalInfo.security.intro"></p>
                                            <p data-key="festivalInfo.security.instruction"></p>
                                            <ul>
                                                <li data-key="festivalInfo.security.contact1"></li>
                                                <li data-key="festivalInfo.security.contact2"></li>
                                                <li data-key="festivalInfo.security.contact3"></li>
                                                <li data-key="festivalInfo.security.contact4"></li>
                                                <li data-key="festivalInfo.security.contact5"></li>
                                                <li data-key="festivalInfo.security.contact6"></li>
                                            </ul>
                                            <p data-key="festivalInfo.security.emergency"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingThirtySix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#festivalCollapseThirtySix" aria-expanded="false"
                                            aria-controls="festivalCollapseThirtySix">
                                            <i class="fas fa-bullhorn"></i>
                                            <span data-key="festivalInfo.tickets.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseThirtySix" class="accordion-collapse collapse"
                                        aria-labelledby="festivalHeadingThirtySix" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <p data-key="festivalInfo.tickets.content"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingThirtySeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#festivalCollapseThirtySeven" aria-expanded="false"
                                            aria-controls="festivalCollapseThirtySeven">
                                            <i class="fas fa-bullhorn"></i>
                                            <span data-key="festivalInfo.lineup.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseThirtySeven" class="accordion-collapse collapse"
                                        aria-labelledby="festivalHeadingThirtySeven" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <p data-key="festivalInfo.lineup.content"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingThirtyEight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#festivalCollapseThirtyEight" aria-expanded="false"
                                            aria-controls="festivalCollapseThirtyEight">
                                            <i class="fas fa-bullhorn"></i>
                                            <span data-key="festivalInfo.accommodation.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseThirtyEight" class="accordion-collapse collapse"
                                        aria-labelledby="festivalHeadingThirtyEight" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <p data-key="festivalInfo.accommodation.content"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingeight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#festivalCollapseeight" aria-expanded="false" aria-controls="festivalCollapseeight">
                                            <i class="fas fa-bullhorn"></i> <span data-key="festivalInfo.lostFound_title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseeight" class="accordion-collapse collapse" aria-labelledby="festivalHeadingeight" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <h4 data-key="festivalInfo.lostFound_note"></h4>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingSeventeen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#festivalCollapseSeventeen" aria-expanded="false" aria-controls="festivalCollapseSeventeen">
                                            <i class="fas fa-bullhorn"></i> <span data-key="festivalInfo.sustainabilitySection.commitmentTitle"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseSeventeen" class="accordion-collapse collapse" aria-labelledby="festivalHeadingSeventeen" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <h6 data-key="festivalInfo.sustainabilitySection.commitmentText"></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingEightteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#festivalCollapseEightteen" aria-expanded="false" aria-controls="festivalCollapseEightteen">
                                            <i class="fas fa-bullhorn"></i> <span data-key="festivalInfo.sustainabilitySection.ecological.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseEightteen" class="accordion-collapse collapse" aria-labelledby="festivalHeadingEightteen" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <h4 data-key="festivalInfo.sustainabilitySection.ecological.carbonFootprint" class="mb-2"></h4>
                                            <h6 data-key="festivalInfo.sustainabilitySection.ecological.carbonFootprintText" class="mb-4"></h6>
                                            <h4 data-key="festivalInfo.sustainabilitySection.ecological.publicTransport" class="mb-2"></h4>
                                            <h6 data-key="festivalInfo.sustainabilitySection.ecological.publicTransportText" class="mb-4"></h6>
                                            <h4 data-key="festivalInfo.sustainabilitySection.ecological.useInfrastructure" class="mb-2"></h4>
                                            <h6 data-key="festivalInfo.sustainabilitySection.ecological.useInfrastructureText" class="mb-4"></h6>
                                            <h4 data-key="festivalInfo.sustainabilitySection.ecological.foodForAll" class="mb-2"></h4>
                                            <h6 data-key="festivalInfo.sustainabilitySection.ecological.foodForAllText" class="mb-4"></h6>
                                            <h4 data-key="festivalInfo.sustainabilitySection.ecological.treePlanting" class="mb-2"></h4>
                                            <h6 data-key="festivalInfo.sustainabilitySection.ecological.treePlantingText" class="mb-4"></h6>
                                            <h4 data-key="festivalInfo.sustainabilitySection.ecological.recycling" class="mb-2"></h4>
                                            <h6 data-key="festivalInfo.sustainabilitySection.ecological.recyclingText" class="mb-4"></h6>
                                            <!-- <h4 data-key="festivalInfo.sustainabilitySection.ecological.tentDeposit" class="mb-2"></h4>
                                <h6 data-key="festivalInfo.sustainabilitySection.ecological.tentDepositText" class="mb-4"></h6> -->
                                            <h4 data-key="festivalInfo.sustainabilitySection.ecological.ecoMeasures" class="mb-2"></h4>
                                            <h6 data-key="festivalInfo.sustainabilitySection.ecological.ecoMeasuresText" class="mb-4"></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingNineteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#festivalCollapseNineteen" aria-expanded="false" aria-controls="festivalCollapseNineteen">
                                            <i class="fas fa-bullhorn"></i> <span data-key="festivalInfo.sustainabilitySection.economic.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseNineteen" class="accordion-collapse collapse" aria-labelledby="festivalHeadingNineteen" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <h4 data-key="festivalInfo.sustainabilitySection.economic.greenEnergy" class="mb-2"></h4>
                                            <h6 data-key="festivalInfo.sustainabilitySection.economic.greenEnergyText" class="mb-4"></h6>
                                            <h4 data-key="festivalInfo.sustainabilitySection.economic.supportLocal" class="mb-2"></h4>
                                            <h6 data-key="festivalInfo.sustainabilitySection.economic.supportLocalText" class="mb-4"></h6>
                                            <h4 data-key="festivalInfo.sustainabilitySection.economic.smartEnergy" class="mb-2"></h4>
                                            <h6 data-key="festivalInfo.sustainabilitySection.economic.smartEnergyText" class="mb-4"></h6>
                                            <h4 data-key="festivalInfo.sustainabilitySection.economic.foodWaste" class="mb-2"></h4>
                                            <h6 data-key="festivalInfo.sustainabilitySection.economic.foodWasteText" class="mb-4"></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingTewnty">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#festivalCollapseTwenty" aria-expanded="false" aria-controls="festivalCollapseTwenty">
                                            <i class="fas fa-bullhorn"></i> <span data-key="festivalInfo.sustainabilitySection.social.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseTwenty" class="accordion-collapse collapse" aria-labelledby="festivalHeadingTewnty" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <h4 data-key="festivalInfo.sustainabilitySection.social.awareness" class="mb-2"></h4>
                                            <h6 data-key="festivalInfo.sustainabilitySection.social.awarenessText" class="mb-4"></h6>
                                            <h4 data-key="festivalInfo.sustainabilitySection.social.equality" class="mb-2"></h4>
                                            <h6 data-key="festivalInfo.sustainabilitySection.social.equalityText" class="mb-4"></h6>
                                            <h4 data-key="festivalInfo.sustainabilitySection.social.accessibility" class="mb-2"></h4>
                                            <h6 data-key="festivalInfo.sustainabilitySection.social.accessibilityText" class="mb-4"></h6>
                                            <h4 data-key="festivalInfo.sustainabilitySection.social.consciousCommunity" class="mb-2"></h4>
                                            <h6 data-key="festivalInfo.sustainabilitySection.social.consciousCommunityText" class="mb-4"></h6>
                                            <h4 data-key="festivalInfo.sustainabilitySection.closingLine"></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingFifteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#festivalCollapseFifteen" aria-expanded="false" aria-controls="festivalCollapseFifteen">
                                            <i class="fas fa-bullhorn"></i> <span data-key="festivalInfo.waterStations.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseFifteen" class="accordion-collapse collapse" aria-labelledby="festivalHeadingFifteen" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <h4 data-key="festivalInfo.waterStations.details"></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingTen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#festivalCollapseTen" aria-expanded="false" aria-controls="festivalCollapseTen">
                                            <i class="fas fa-bullhorn"></i> <span data-key="festivalInfo.infoHelp_title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseTen" class="accordion-collapse collapse" aria-labelledby="festivalHeadingTen" data-bs-parent="#generalInformation">
                                        <div class="accordion-body">
                                            <ul>
                                                <li data-key="festivalInfo.infoHelp_info1"></li>
                                                <li data-key="festivalInfo.infoHelp_info2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade " id="festival-rules" role="tabpanel" aria-labelledby="festival-rules-tab">
                        <div class="event-details__content-box">
                            <div class="accordion modern-accordion" id="festivalrules">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#festivalCollapseOne" aria-expanded="true" aria-controls="festivalCollapseOne">
                                            <i class="fas fa-bullhorn"></i> <span data-key="festivalInfo.essentialInfo"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseOne" class="accordion-collapse collapse show" aria-labelledby="festivalHeadingOne" data-bs-parent="#festivalrules">
                                        <div class="accordion-body">
                                            <h4 data-key="festivalInfo.alcoholPolicy_title"></h4>
                                            <ul class="mb-4">
                                                <li data-key="festivalInfo.alcoholPolicy_rule1"></li>
                                                <li data-key="festivalInfo.alcoholPolicy_rule2"></li>
                                                <li data-key="festivalInfo.alcoholPolicy_rule3"></li>
                                            </ul>
                                            <h4 data-key="festivalInfo.wellbeing_title"></h4>
                                            <ul class="mb-4">
                                                <li data-key="festivalInfo.wellbeing_tip1"></li>
                                                <li data-key="festivalInfo.wellbeing_tip2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingThirtyNine">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#festivalCollapseThirtyNine" aria-expanded="false"
                                            aria-controls="festivalCollapseThirtyNine">
                                            <i class="fas fa-bullhorn"></i>
                                            <span data-key="festivalInfo.crowdsurfing.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseThirtyNine" class="accordion-collapse collapse"
                                        aria-labelledby="festivalHeadingThirtyNine" data-bs-parent="#festivalrules">
                                        <div class="accordion-body">
                                            <p data-key="festivalInfo.crowdsurfing.content"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#festivalCollapseTwo" aria-expanded="false" aria-controls="festivalCollapseTwo">
                                            <i class="fas fa-bullhorn"></i> <span data-key="festivalInfo.wristbands_title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseTwo" class="accordion-collapse collapse" aria-labelledby="festivalHeadingTwo" data-bs-parent="#festivalrules">
                                        <div class="accordion-body">
                                            <ul>
                                                <li data-key="festivalInfo.wristbands_info1"></li>
                                                <li data-key="festivalInfo.wristbands_info2"></li>
                                                <li data-key="festivalInfo.wristbands_info3"></li>
                                                <li data-key="festivalInfo.wristbands_info4"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#festivalCollapseThree" aria-expanded="false" aria-controls="festivalCollapseThree">
                                            <i class="fas fa-bullhorn"></i> <span data-key="festivalInfo.accessibility_title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseThree" class="accordion-collapse collapse" aria-labelledby="festivalHeadingThree" data-bs-parent="#festivalrules">
                                        <div class="accordion-body">
                                            <h4 data-key="festivalInfo.accessibility_wait"></h4>
                                            <!-- <ul>
                                    <li data-key="festivalInfo.accessibility_info1"></li>
                                    <li data-key="festivalInfo.accessibility_info2"></li>
                                    <li data-key="festivalInfo.accessibility_info3"></li>
                                    <li data-key="festivalInfo.accessibility_info4"></li>
                                </ul> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingfour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#festivalCollapsefour" aria-expanded="false" aria-controls="festivalCollapsefour">
                                            <i class="fas fa-bullhorn"></i> <span data-key="festivalInfo.cashless_title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapsefour" class="accordion-collapse collapse" aria-labelledby="festivalHeadingfour" data-bs-parent="#festivalrules">
                                        <div class="accordion-body">
                                            <h4 data-key="festivalInfo.cashless_note"></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingForty">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#festivalCollapseForty" aria-expanded="false"
                                            aria-controls="festivalCollapseForty">
                                            <i class="fas fa-bullhorn"></i>
                                            <span data-key="festivalInfo.photo.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseForty" class="accordion-collapse collapse"
                                        aria-labelledby="festivalHeadingForty" data-bs-parent="#festivalrules">
                                        <div class="accordion-body">
                                            <p data-key="festivalInfo.photo.content"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingFourteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#festivalCollapseFourteen" aria-expanded="false" aria-controls="festivalCollapseFourteen">
                                            <i class="fas fa-bullhorn"></i> <span data-key="festivalInfo.petsPolicy.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseFourteen" class="accordion-collapse collapse" aria-labelledby="festivalHeadingFourteen" data-bs-parent="#festivalrules">
                                        <div class="accordion-body">
                                            <h4 data-key="festivalInfo.petsPolicy.details"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade " id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
                        <div class="event-details__content-box">
                            <div class="accordion modern-accordion" id="arrivalTab">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingSixteen">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#festivalCollapseSixteen" aria-expanded="true" aria-controls="festivalCollapseSixteen">
                                            <i class="fas fa-bullhorn"></i> <span data-key="festivalInfo.arrivalInfo.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseSixteen" class="accordion-collapse collapse show" aria-labelledby="festivalHeadingSixteen" data-bs-parent="#arrivalTab">
                                        <div class="accordion-body">
                                            <h4 data-key="festivalInfo.arrivalInfo.train"></h4>
                                            <h6 data-key="festivalInfo.arrivalInfo.trainDetails" class="mb-4"></h6>
                                            <h4 data-key="festivalInfo.arrivalInfo.car"></h4>
                                            <h6 data-key="festivalInfo.arrivalInfo.carDetails" class="mb-4"></h6>
                                            <h4 data-key="festivalInfo.arrivalInfo.parking"></h4>
                                            <h6 data-key="festivalInfo.arrivalInfo.parkingDetails" class="mb-4"></h6>
                                            <h4 data-key="festivalInfo.arrivalInfo.shuttle"></h4>
                                            <h6 data-key="festivalInfo.arrivalInfo.shuttleDetails" class="mb-4"></h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="ticket-information" role="tabpanel" aria-labelledby="ticket-information-tab">
                        <div class="event-details__content-box">
                            <div class="accordion modern-accordion" id="ticketInformation">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingFortyTwo">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#festivalCollapseFortyTwo" aria-expanded="true"
                                            aria-controls="festivalCollapseFortyTwo">
                                            <i class="fas fa-bullhorn"></i>
                                            <span data-key="festivalInfo.ticketRefund.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseFortyTwo" class="accordion-collapse collapse show"
                                        aria-labelledby="festivalHeadingFortyTwo" data-bs-parent="#ticketInformation">
                                        <div class="accordion-body">
                                            <p data-key="festivalInfo.ticketRefund.content1"></p>
                                            <p data-key="festivalInfo.ticketRefund.content2"></p>
                                            <p data-key="festivalInfo.ticketRefund.content3"></p>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingFortyThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#festivalCollapseFortyThree" aria-expanded="false"
                                            aria-controls="festivalCollapseFortyThree">
                                            <i class="fas fa-bullhorn"></i>
                                            <span data-key="festivalInfo.vipBenefits.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseFortyThree" class="accordion-collapse collapse"
                                        aria-labelledby="festivalHeadingFortyThree" data-bs-parent="#ticketInformation">
                                        <div class="accordion-body">
                                            <ul>
                                                <li data-key="festivalInfo.vipBenefits.benefit1"></li>
                                                <li data-key="festivalInfo.vipBenefits.benefit2"></li>
                                                <li data-key="festivalInfo.vipBenefits.benefit3"></li>
                                                <li data-key="festivalInfo.vipBenefits.benefit4"></li>
                                                <li data-key="festivalInfo.vipBenefits.benefit5"></li>
                                                <li data-key="festivalInfo.vipBenefits.benefit6"></li>
                                                <li data-key="festivalInfo.vipBenefits.benefit7"></li>
                                                <li data-key="festivalInfo.vipBenefits.benefit8"></li>
                                                <li data-key="festivalInfo.vipBenefits.benefit9"></li>
                                                <li data-key="festivalInfo.vipBenefits.benefit10"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="festivalHeadingFortyOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#festivalCollapseFortyOne" aria-expanded="false"
                                            aria-controls="festivalCollapseFortyOne">
                                            <i class="fas fa-bullhorn"></i>
                                            <span data-key="festivalInfo.ticketChecks.title"></span>
                                        </button>
                                    </h2>
                                    <div id="festivalCollapseFortyOne" class="accordion-collapse collapse"
                                        aria-labelledby="festivalHeadingFortyOne" data-bs-parent="#ticketInformation">
                                        <div class="accordion-body">
                                            <p data-key="festivalInfo.ticketChecks.content"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <div class="coming-soon-container">
            <h1 data-key="coming_soon">Coming Soon ...</h1>
        </div> -->
        <!--Site Footer Start-->
        <?php include 'php/footer.php'; ?>
        <!--Site Footer End-->

    </div><!-- /.page-wrapper -->


    <!-- Mobile Nav Section -->
    <?php include 'php/mobile-nav.php'; ?>
    <!-- Mobile Nav Section End -->

    <!-- Scripts Links -->
    <?php include 'php/script.php'; ?>
    <!-- Scripts Links End -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.modern-tabs .nav-link');
            const tabPanes = document.querySelectorAll('.modern-tab-content .tab-pane');

            // Tabs click — toggle active tab and content
            tabs.forEach(tab => {
                tab.addEventListener('click', function(event) {
                    event.preventDefault();
                    const target = this.getAttribute('data-bs-target');

                    tabs.forEach(t => t.classList.remove('active'));
                    tabPanes.forEach(p => p.classList.remove('show', 'active'));

                    this.classList.add('active');
                    const targetPane = document.querySelector(target);
                    targetPane.classList.add('show', 'active');

                    // Close all accordions in other tabs
                    const allAccordions = document.querySelectorAll('.accordion');
                    allAccordions.forEach(accordion => {
                        const allButtons = accordion.querySelectorAll('.accordion-button');
                        const allCollapses = accordion.querySelectorAll('.accordion-collapse');

                        allButtons.forEach(btn => btn.classList.add('collapsed'));
                        allCollapses.forEach(collapse => {
                            const collapseInstance = bootstrap.Collapse.getOrCreateInstance(collapse);
                            collapseInstance.hide();
                        });
                    });

                    // Open first accordion in this tab via Bootstrap Collapse API
                    const firstAccordionButton = targetPane.querySelector('.accordion-button');
                    const firstAccordionCollapse = targetPane.querySelector('.accordion-collapse');
                    if (firstAccordionButton && firstAccordionCollapse) {
                        const collapseInstance = bootstrap.Collapse.getOrCreateInstance(firstAccordionCollapse);
                        collapseInstance.show();
                        firstAccordionButton.classList.remove('collapsed');
                        firstAccordionButton.setAttribute('aria-expanded', 'true');
                    }
                });
            });

            // Accordion single-open toggle behavior inside each tab using Bootstrap events
            const allAccordions = document.querySelectorAll('.accordion');

            allAccordions.forEach(accordion => {
                accordion.addEventListener('show.bs.collapse', function(e) {
                    // Close all other open accordions inside this container
                    const openItems = accordion.querySelectorAll('.accordion-collapse.show');
                    openItems.forEach(item => {
                        if (item.id !== e.target.id) {
                            const collapseInstance = bootstrap.Collapse.getInstance(item);
                            if (collapseInstance) {
                                collapseInstance.hide();
                                // Also update button state
                                const relatedBtn = accordion.querySelector(`[data-bs-target="#${item.id}"]`);
                                if (relatedBtn) {
                                    relatedBtn.classList.add('collapsed');
                                    relatedBtn.setAttribute('aria-expanded', 'false');
                                }
                            }
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>