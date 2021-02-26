<!DOCTYPE html>
<html>

<head>
    <x-header-scripts />
</head>

<body class="loading" id="{{ $view_name }}">

<header class="bg-white shadow py-2 md:pb-0">
    <div class="container max-w-none flex items-center select-none">
        <img src="{{ $site['branding']['logo'] ?? null }}" class="h-12 md:h-16 mx-auto sm:mx-0" />
        <div class="hidden sm:block flex-1"></div>
        <div class="hidden md:flex items-start">
            <div class="flex flex-col items-center p-2">
                <span class="text-lg text-gray-800 font-light leading-none">We Can Assist You</span>
                <a href="tel:{{ $site['branding']['phone'] ?? null }}" class="text-3xl font-bold text-blue-900 hover:underline leading-tight">{{ $site['branding']['phone'] ?? 'Call Now' }}</a>
                <span class="text-sm text-gray-600 font-light leading-none flex items-center">
                    <span class="inline-block flex-none rounded-full h-3 w-3 bg-green-400 pulse-green-200 mr-1"></span> Expert Agents Available Now
                </span>
            </div>
            <img src="img/agent.png" class="h-24 w-24" />
        </div>
        <a href="tel:{{ $site['branding']['phone'] ?? null }}" class="py-2 px-4 text-center font-medium bg-white border text-black border-gray-400 rounded-md focus:outline-none leading-none hidden sm:flex items-center justify-center md:hidden">
            <span class="inline-block flex-none rounded-full h-3 w-3 bg-green-400 pulse-green-200 mr-2"></span> Agents Online
        </a>
    </div>
</header>

<main id="app">
    <section class="bg-cover" style="background-image: url('img/hero.jpg')">
        <div class="container p-6 md:p-20">
            <h1 class="text-4xl leading-none font-bold text-center text-white text-shadow">Lock In Your Free All-Cash Offer Today</h1>
        </div>
    </section>
    <section>

        <div class="container mx-auto">
            <h1 class="text-center">Wait! Before You Go, We've Found Your Rates!</h1>
            <p class="lead text-center">You've been Connected with these top partners. Check the rates on AT LEAST 3 to find the best deal.</p>
            <div class="bg-white shadow-md rounded-md border border-solid border-gray-200 border-b-0 mb-3 max-w-2xl mx-auto hover:shadow-lg">
                <div class="block w-auto p-3 mb-0 bg-gray-100 border-b rounded-t flex items-center">
                    <h4>Discover it® Cash Back</h4>
                    <div class="ml-auto flex flex-col items-center">
                    <span class="text-orange-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </span>
                        <small>4.5 stars</small>
                    </div>
                </div>
                <div class="relative flex items-center p-5">
                    <div class="flex flex-col items-center border-r border-solid border-gray-300 mr-4 pr-4">
                        <img class="mb-2" src="https://m.foolcdn.com/media/affiliates/credit-card-art/discover-it-cash-back_Y9GsoXT.png?width=220" width="220px" />
                        <a href="#" class="btn btn-success flex w-full">Apply Now <i class="fas fa-lock ml-auto"></i></a>
                        <small class="text-xxs text-gray-600">On Discover's Secure Website</small>
                    </div>
                    <ul class="mb-0 mr-3">
                        <b>WHAT WE LIKE:</b>
                        <li class="icon before:text-green-600" data-icon="">Bonus cash back</li>
                        <li class="icon before:text-green-600" data-icon="">No annual fee</li>
                        <li class="icon before:text-green-600" data-icon="">0% intro APR offer</li>
                        <li class="icon before:text-green-600" data-icon="">FICO® Score for free</li>
                        <a href="#" class="text-gray-600 text-xs">See More <i class="far fa-angle-right"></i></a>
                    </ul>
                </div>
            </div>
            <section class="flex flex-col space-y-4">
            <div class="bg-white shadow-md rounded-md border border-solid border-gray-200 border-b-0 ml-5">
                <small class="block w-auto mb-0 border-b rounded-t bg-green-500 text-white text-center p-1">Instant Cash Offer</small>
                <div class="relative flex items-center p-5
                            before:fa-content before:left-content before:bg-green-500 before:border-2 before:border-green-500 before:w-10 before:h-10 before:rounded-full before:text-white" data-icon="">
                    <div class="flex flex-col items-center mr-4">
                        <img src="https://s3.consumersadvocate.org/prd/image/image/7073/medium_f31a91a6-c01b-423f-9f44-b1c698be3508.png" width="150px" />
                        <small class="text-xxs text-gray-600">Our Partner</small>
                        <span class="text-orange-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </span>
                        <a href="#" class="text-xs">Read Full Reviews</a>
                        <small>22 Reviews</small>
                    </div>
                    <ul class="text-sm mb-0 mr-3">
                        <li class="flex items-baseline before:fa-content before:w-4 before:h-4 before:rounded-full before:mr-2 before:text-green-600" data-icon="">Only Lender to Offer "RateShield"</li>
                        <li class="flex items-baseline before:fa-content before:w-4 before:h-4 before:rounded-full before:mr-2 before:text-green-600" data-icon="">Quicken Loans is the largest online mortgage lender</li>
                        <li class="flex items-baseline before:fa-content before:w-4 before:h-4 before:rounded-full before:mr-2 before:text-green-600" data-icon="">Continuously ranked #1 in customer satisfaction</li>
                        <li class="flex items-baseline before:fa-content before:w-4 before:h-4 before:rounded-full before:mr-2 before:text-green-600" data-icon="">Close electronically with unique eClosing service</li>
                        <li class="flex items-baseline before:fa-content before:w-4 before:h-4 before:rounded-full before:mr-2 before:text-green-600" data-icon="">Fast online application</li>
                        <a href="#" class="text-gray-600 text-xs">See More <i class="far fa-angle-right"></i></a>
                    </ul>
                    <div class="ml-auto flex flex-col text-center items-center">
                        <a href="#" class="btn bg-green-600 rounded-md flex items-center justify-center text-white px-6 py-4 mb-1">View Rates <i class="fad fa-chevron-double-right ml-1"></i></a>
                        <small class="text-gray-600"><i class="fad fa-shield-check"></i> Secured by <b class="text-pink-600">Bidobo</b></small>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-md border border-solid border-gray-200 border-b-0 ml-5">
                <div class="relative flex items-center p-5
                            before:count-content before:left-content before:bg-white before:border-2 before:border-blue-400 before:w-10 before:h-10 before:rounded-full before:text-blue-400">
                    <div class="flex flex-col items-center mr-4">
                        <img src="https://s3.consumersadvocate.org/prd/image/image/7073/medium_f31a91a6-c01b-423f-9f44-b1c698be3508.png" width="150px" />
                        <small class="text-xxs text-gray-600">Our Partner</small>
                        <span class="text-orange-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </span>
                        <a href="#" class="text-xs">Read Full Reviews</a>
                        <small>22 Reviews</small>
                    </div>
                    <ul class="text-sm mb-0 mr-3">
                        <li class="flex items-baseline before:fa-content before:w-4 before:h-4 before:rounded-full before:mr-2 before:text-green-600" data-icon="">Only Lender to Offer "RateShield"</li>
                        <li class="flex items-baseline before:fa-content before:w-4 before:h-4 before:rounded-full before:mr-2 before:text-green-600" data-icon="">Quicken Loans is the largest online mortgage lender</li>
                        <li class="flex items-baseline before:fa-content before:w-4 before:h-4 before:rounded-full before:mr-2 before:text-green-600" data-icon="">Continuously ranked #1 in customer satisfaction</li>
                        <li class="flex items-baseline before:fa-content before:w-4 before:h-4 before:rounded-full before:mr-2 before:text-green-600" data-icon="">Close electronically with unique eClosing service</li>
                        <li class="flex items-baseline before:fa-content before:w-4 before:h-4 before:rounded-full before:mr-2 before:text-green-600" data-icon="">Fast online application</li>
                        <a href="#" class="text-gray-600 text-xs">See More <i class="far fa-angle-right"></i></a>
                    </ul>
                    <div class="ml-auto flex flex-col text-center items-center">
                        <a href="#" class="btn bg-green-600 rounded-md flex items-center justify-center text-white px-6 py-4 mb-1">View Rates <i class="fad fa-chevron-double-right ml-1"></i></a>
                        <small class="text-gray-600"><i class="fad fa-shield-check"></i> Secured by <b class="text-pink-600">Bidobo</b></small>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-md border border-solid border-gray-200 border-b-0 ml-5">
                <div class="relative flex items-center p-5
                            before:count-content before:left-content before:bg-white before:border-2 before:border-blue-400 before:w-10 before:h-10 before:rounded-full before:text-blue-400">
                    <div class="flex flex-col items-center mr-4">
                        <img src="https://s3.consumersadvocate.org/prd/image/image/7073/medium_f31a91a6-c01b-423f-9f44-b1c698be3508.png" width="150px" />
                        <small class="text-xxs text-gray-600">Our Partner</small>
                        <span class="text-orange-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </span>
                        <a href="#" class="text-xs">Read Full Reviews</a>
                        <small>22 Reviews</small>
                    </div>
                    <ul class="text-sm mb-0 mr-3">
                        <li class="flex items-baseline before:fa-content before:w-4 before:h-4 before:rounded-full before:mr-2 before:text-green-600" data-icon="">Only Lender to Offer "RateShield"</li>
                        <li class="flex items-baseline before:fa-content before:w-4 before:h-4 before:rounded-full before:mr-2 before:text-green-600" data-icon="">Quicken Loans is the largest online mortgage lender</li>
                        <li class="flex items-baseline before:fa-content before:w-4 before:h-4 before:rounded-full before:mr-2 before:text-green-600" data-icon="">Continuously ranked #1 in customer satisfaction</li>
                        <li class="flex items-baseline before:fa-content before:w-4 before:h-4 before:rounded-full before:mr-2 before:text-green-600" data-icon="">Close electronically with unique eClosing service</li>
                        <li class="flex items-baseline before:fa-content before:w-4 before:h-4 before:rounded-full before:mr-2 before:text-green-600" data-icon="">Fast online application</li>
                        <a href="#" class="text-gray-600 text-xs">See More <i class="far fa-angle-right"></i></a>
                    </ul>
                    <div class="ml-auto flex flex-col text-center items-center">
                        <a href="#" class="btn bg-green-600 rounded-md flex items-center justify-center text-white px-6 py-4 mb-1">View Rates <i class="fad fa-chevron-double-right ml-1"></i></a>
                        <small class="text-gray-600"><i class="fad fa-shield-check"></i> Secured by <b class="text-pink-600">Bidobo</b></small>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-md border border-solid border-gray-200 border-b-0 ml-5">
                <div class="relative flex items-center p-5
                            before:count-content before:left-content before:bg-white before:border-2 before:border-blue-400 before:w-10 before:h-10 before:rounded-full before:text-blue-400">
                    <div class="flex flex-col items-center border-r border-solid border-gray-300 mr-4 pr-4">
                        <img src="https://randomuser.me/api/portraits/men/31.jpg" class="w-24 h-24 rounded-full border-4 border-solid border-gray-300" width="100px" />
                        <b>Brittany Z.</b>
                        <span class="text-sm text-green-400 font-light leading-none flex items-center">
                            <span class="inline-block flex-none rounded-full h-3 w-3 bg-green-400 pulse-green-200 mr-1"></span> Online Now
                        </span>
                    </div>
                    <div class="flex flex-1 flex-col self-stretch w-auto mr-8">
                        <div class="flex justify-between border-b border-solid border-gray-200 mb-3 pb-3">
                            <div class="col flex-1 flex flex-col items-center text-center">
                                <i class="fad fa-user-shield fa-2x"></i>
                                <b>Years Of Experience</b>
                                18 years
                            </div>
                            <div class="col flex-1 flex flex-col items-center text-center">
                                <i class="fad fa-home-heart fa-2x"></i>
                                <b>Transactions Closed</b>
                                55 Homes
                            </div>
                            <div class="col flex-1 flex flex-col items-center text-center">
                                <i class="fad fa-calendar-check fa-2x"></i>
                                <b>Average Closing</b>
                                3 Weeks
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <div class="flex-1 flex items-center"><i class="fad fa-badge-dollar fa-lg text-blue-500 mr-1"></i> 200+ Sales made</div>
                            <div class="flex-1 flex items-center"><i class="fad fa-thumbs-up fa-lg text-blue-500 mr-1"></i> 98% client satisfaction</div>
                            <div class="flex-1 flex items-center"><i class="fad fa-badge-check fa-lg text-blue-500 mr-1"></i> Background check</div>
                        </div>
                    </div>
                    <div class="ml-auto flex flex-col text-center items-center">
                        <a href="#" class="btn bg-green-600 rounded-md flex items-center justify-center text-white px-6 py-4 mb-1"><i class="fad fa-phone fa-flip-horizontal mr-2"></i> Call Me</a>
                        <a href="#" class="mb-1">(407) 706-7201</a>
                    </div>
                </div>
            </div>

            <p class="text-right" style="background:#f2f2f2; padding: 4px 1em; ">Don't see the business you are looking for? <a href="#">Suggest a Business</a></p>

            <p><small><b>Additional Companies:</b> <a href="#" class="text-muted">Chase Bank Magnolia Bank CrossCountry Mortgage GetSmartGuide to Lenders Paramount Bank AmeriValue Sebonic Financial First Internet Bank of Indiana Nationstar Mortgage PHH Mortgage CitibankWells Fargo U.S. Bank Bank of America LendingTree Quicken Loans Rocket Mortgage Veterans United FIGURE CloseYourOwnLoan.com PenFed Credit Union Rate Marketplace Mortgages VA Benefit Survey Ally Bank Federal Trust Mortgage HomeDirect Mortgage LendingHome Third Federal Consumer Direct Credible HSBC Bank Alliant Mortgage</a></small></p>

            <div class="p-4 bg-green-500 text-white rounded">
                <div class="flex space-x-4 items-center">
                    <div class="w-full md:w-7/12 text-left">
                        <h4>Thinking About Selling?</h4>
                        <p class="mb-md-0">Investigate your local market and smartest options with a no-obligation consultation from a local professional.</p>
                    </div>
                    <div class="w-full md:w-5/12 text-center">
                        <a href="#" class="btn block bg-white rounded-md text-green-500 py-3"><span class="hidden md:inline">Request a </span>Free Consultation</a>
                    </div>
                </div>
            </div>
        </section>
        </div>

        <div class="container max-w-4xl relative p-6 md:py-12 md:px-20">
            @if (true)
                <h2 class="text-center text-bold mb-4"><b>Alright! Here's Your Automatic Valuation For:</b><br />
                    <span class="highlighter2"><span class="highlight">123 Shortwave Drive</span></span></h2>
            @else
                <div class="bg-yellow-100 border-t border-b border-yellow-500 text-yellow-700 px-4 py-3 mb-3 flex items-center" role="alert">
                    <i class="fad fa-exclamation-triangle fa-2x mr-4"></i>
                    <div class="flex-1">
                        <p class="font-bold inline md:block">Sorry!</p>
                        <p class="text-sm inline md:block">We had an issue pulling your property report</p>
                    </div>
                </div>
                <h2 class="text-center mb-4">Your Automatic Valuation Could Not Be Generated</h2>
            @endif
            <div class="flex space-x-2 mb-4">
                <div class="flex-1">
                    <div class="flex flex-col items-center">
                        <svg width="38" height="30" class="mb-2">
                            <path d="M37.24 18.433c0-.014-.003-.027-.004-.04a.65.65 0 00-.09-.282c-.002-.005-.003-.011-.007-.016l-5.343-8.401V2.048C31.796.918 30.898 0 29.793 0H7.448C6.342.001 5.447.918 5.445 2.048v7.646l-5.343 8.4c-.003.006-.004.012-.008.017a.652.652 0 00-.089.28c0 .015-.003.028-.004.042L0 18.447v10.906A.64.64 0 00.632 30a.64.64 0 00.633-.647v-4.425h34.712v4.425a.64.64 0 00.632.647.64.64 0 00.632-.647V18.447v-.014zM6.71 2.048c0-.416.33-.755.738-.755h22.346c.407 0 .737.338.737.755v7.167h-1.314c.006-.14.014-.283.014-.415 0-.424-.03-.893-.09-1.399.195-.343.26-.747.182-1.136a1.61 1.61 0 00-1.563-1.303c-.231 0-.46.052-.667.15-.577-.093-1.456-.18-2.706-.18-1.05 0-1.952.059-2.691.177-.3-.14-.635-.182-.96-.12a1.602 1.602 0 00-1.26 1.25 1.66 1.66 0 00.16 1.132c-.059.474-.09.951-.093 1.429 0 .139.004.278.01.415h-1.888c.005-.14.013-.283.013-.415 0-.424-.03-.893-.089-1.399.194-.343.259-.747.181-1.136a1.61 1.61 0 00-1.563-1.303c-.231 0-.46.052-.667.15-.577-.093-1.456-.18-2.706-.18-1.049 0-1.952.059-2.691.177-.3-.14-.635-.182-.96-.12a1.602 1.602 0 00-1.26 1.25 1.66 1.66 0 00.16 1.132c-.058.474-.09.951-.093 1.429 0 .139.004.278.01.415H6.71V2.048zm21.133 5.171c.06.428.124 1.016.124 1.58 0 .566-.064 1.154-.124 1.581a.46.46 0 00.147.393.336.336 0 01.093.306.33.33 0 01-.323.265.323.323 0 01-.21-.076.46.46 0 00-.293-.116.38.38 0 00-.075.007c-.504.101-1.387.216-2.795.216-1.391 0-2.27-.112-2.777-.212a.397.397 0 00-.076-.007.45.45 0 00-.29.112.322.322 0 01-.274.07.336.336 0 01-.175-.556.48.48 0 00.137-.393 11.87 11.87 0 01-.124-1.59c0-.568.064-1.16.124-1.588a.478.478 0 00-.138-.393.336.336 0 01-.082-.303.33.33 0 01.532-.183.45.45 0 00.29.112c.025 0 .05-.002.076-.008.507-.1 1.386-.211 2.777-.211 1.408 0 2.291.114 2.795.215a.38.38 0 00.075.008.46.46 0 00.294-.116.322.322 0 01.272-.071.334.334 0 01.167.566.461.461 0 00-.147.392zm-11.553 0c.06.428.124 1.016.124 1.58 0 .566-.064 1.154-.124 1.581a.462.462 0 00.147.393.333.333 0 01-.23.571.323.323 0 01-.21-.076.46.46 0 00-.293-.116.38.38 0 00-.074.007c-.505.101-1.388.216-2.796.216-1.39 0-2.27-.112-2.777-.212a.397.397 0 00-.077-.007.449.449 0 00-.289.112.322.322 0 01-.274.07.331.331 0 01-.257-.253.336.336 0 01.082-.303.48.48 0 00.138-.393c-.06-.429-.126-1.02-.126-1.59 0-.568.065-1.16.126-1.588a.481.481 0 00-.138-.393.336.336 0 01-.082-.303.33.33 0 01.531-.183.45.45 0 00.29.112.39.39 0 00.076-.008c.507-.1 1.387-.211 2.777-.211 1.408 0 2.291.114 2.795.215a.38.38 0 00.075.008.46.46 0 00.294-.116.322.322 0 01.272-.071.334.334 0 01.168.566.461.461 0 00-.148.392zm-9.854 3.29h1.53c-.143.444-.091.93.142 1.333.234.402.626.682 1.076.767.324.063.659.022.959-.118.739.118 1.642.177 2.691.177 1.25 0 2.129-.088 2.706-.18.3.141.633.184.957.123a1.619 1.619 0 001.273-1.276c.054-.275.037-.56-.049-.826h1.798c-.143.444-.091.93.142 1.333.233.402.625.682 1.075.767.324.063.66.022.96-.118.739.118 1.642.177 2.69.177 1.25 0 2.13-.088 2.707-.18.299.141.633.184.957.123a1.619 1.619 0 001.273-1.276c.053-.275.036-.56-.05-.826h1.533l4.637 7.292H1.798l4.638-7.292zm-5.171 8.585h34.712v4.54H1.265v-4.54z" fill="#26415D" fill-rule="nonzero"></path>
                        </svg>
                        <b>1</b>
                        <span>Beds</span>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex flex-col items-center">
                        <svg width="34" height="30" class="mb-2">
                            <path d="M28.41 27.931H4.694C2.106 27.931 0 26.055 0 23.751v-5.506c0-.364.309-.659.69-.659h31.724c.38 0 .69.295.69.659v5.505c0 2.304-2.106 4.18-4.694 4.18v.001zM1.38 18.903v4.847c0 1.579 1.486 2.864 3.314 2.864H28.41c1.827 0 3.314-1.285 3.314-2.864v-4.847H1.38z"></path><path d="M9.412 30H5.578a.696.696 0 01-.709-.682v-2.514c0-.377.317-.682.709-.682h3.834c.391 0 .708.305.708.682v2.514a.696.696 0 01-.708.682zm-3.126-1.364h2.417v-1.15H6.287v1.15zM26.188 30h-3.835a.696.696 0 01-.708-.682v-2.514c0-.377.317-.682.708-.682h3.835c.391 0 .709.305.709.682v2.514a.696.696 0 01-.709.682zm-3.126-1.364h2.417v-1.15h-2.417v1.15zM1.743 17.713a.696.696 0 01-.709-.682V5.173C1.034 2.32 3.624 0 6.81 0c2.336 0 4.043.984 4.935 2.847a.671.671 0 01-.346.904.72.72 0 01-.94-.333C9.794 2.035 8.6 1.364 6.807 1.364c-2.402 0-4.356 1.708-4.356 3.809v11.858a.696.696 0 01-.709.682z"></path><path d="M11.029 7.608c-.2 0-.39-.093-.52-.255a.766.766 0 01-.156-.588l.705-4.877c.08-.547.556-.914 1.076-.845l4.957.695c.28.039.51.259.576.553a.756.756 0 01-.275.773l-5.974 4.414a.654.654 0 01-.39.13zm1.318-5.06l-.4 2.761 3.205-2.369-2.805-.392zm1.178 7.255a.666.666 0 01-.527-.264l-.29-.373a.766.766 0 01.096-1.022.654.654 0 01.958.088l.29.373c.169.218.205.521.092.778a.683.683 0 01-.619.42zm2.777-.911a.666.666 0 01-.526-.263l-.29-.373a.771.771 0 01-.116-.721.698.698 0 01.527-.467.662.662 0 01.642.254l.289.372c.169.218.205.52.093.777a.683.683 0 01-.619.42zm1.852-1.822a.666.666 0 01-.527-.265l-.29-.372a.766.766 0 01.096-1.022.654.654 0 01.958.088l.288.373c.17.218.206.52.093.777a.683.683 0 01-.618.42v.001zm-2.777 6.378a.666.666 0 01-.527-.264l-.29-.372a.766.766 0 01.09-1.03.655.655 0 01.963.095l.29.373c.17.218.206.521.093.778a.683.683 0 01-.62.42zm2.777-.911a.668.668 0 01-.527-.263l-.29-.373a.767.767 0 01.09-1.03.656.656 0 01.964.095l.288.373c.169.218.204.52.092.776a.684.684 0 01-.617.422zm1.852-1.822a.666.666 0 01-.527-.265l-.29-.372a.766.766 0 01.096-1.022.654.654 0 01.957.088l.29.373c.17.218.206.52.093.777a.683.683 0 01-.62.421z" fill="#3F5770" fill-rule="nonzero"></path>
                        </svg>
                        <b>1</b>
                        <span>Baths</span>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex flex-col items-center">
                        <svg width="36" height="30" class="mb-2">
                            <g stroke="#082746" fill="none" fill-rule="evenodd"><path d="M20.136 16.864V29.5H35.5V16.864H20.136z"></path><path d="M.818.682v27.273" stroke-linecap="square"></path><path d="M.818 27.955h14.727V14.318h14.728V.682H.818"></path></g>
                        </svg>
                        <b>123 <sup class="hidden md:inline"><small>Sqft</small></sup></b>
                        <span class="hidden md:block">Living Area</span>
                        <span class="md:hidden">Sq ft.</span>
                    </div>
                </div>
                <div class="flex-1 hidden md:block">
                    <div class="flex flex-col items-center">
                        <svg width="34" height="30" class="mb-2">
                            <g stroke="#082746" fill="none" fill-rule="evenodd"><path d="M.5.5h33v29H.5z"></path><path d="M16.528 15L27.86 5M16.528 15l-10.39 9.09M18.7 5h9.161v7.76M6.139 16.135v7.956h9.182" stroke-linecap="round" stroke-linejoin="round"></path></g>
                        </svg>
                        <b>123 <sup><small>Sqft</small></sup></b>
                        <span>Lot Size</span>
                    </div>
                </div>
                <div class="flex-1 hidden md:block">
                    <div class="flex flex-col items-center">
                        <svg width="22" height="30" class="mb-2">
                            <g stroke="#082746" fill="none" fill-rule="evenodd"><path d="M11.34 10.018a1.5 1.5 0 00-.704 1.934l6.81 15.804a1.5 1.5 0 002.05.747l.784-.394a1.5 1.5 0 00.704-1.934l-6.81-15.804a1.5 1.5 0 00-2.05-.746l-.784.393z"></path><path d="M1.86 6.107L12.72.901c.445-.227 2.328-.342 2.883-.356 2.89-.073 5.29-.075 5.413.21.122.284.394.426-2.313 3.47-.393.443-2.792 3.16-3.203 3.367L4.826 12.958c-1.134.57-2.46.09-2.96-1.074L.725 9.24c-.119-.814-.113-1.4.017-1.758.13-.358.502-.816 1.118-1.375z" stroke-linejoin="round"></path></g>
                        </svg>
                        <b>1234</b>
                        <span>Year Built</span>
                    </div>
                </div>
            </div>

            <div class="extra-blur border rounded p-4 mb-4">
                <h4 class="text-center mb-4">Estimated Value <small class="text-gray-500"><i class="fal fa-question-circle"></i></small></h4>
                <div class="flex space-x-2 items-stretch">
                    <div class="flex-1 hidden md:flex flex-col items-center justify-between">
                        <svg width="90" height="55">
                            <defs><filter x="-33.6%" y="-41.7%" width="167.1%" height="257.9%" filterUnits="objectBoundingBox" id="Low_Bell_Graph_svg__a"><feMorphology radius="1.5" operator="dilate" in="SourceAlpha" result="shadowSpreadOuter1"></feMorphology><feOffset dy="12" in="shadowSpreadOuter1" result="shadowOffsetOuter1"></feOffset><feMorphology radius="1.5" in="SourceAlpha" result="shadowInner"></feMorphology><feOffset dy="12" in="shadowInner" result="shadowInner"></feOffset><feComposite in="shadowOffsetOuter1" in2="shadowInner" operator="out" result="shadowOffsetOuter1"></feComposite><feGaussianBlur stdDeviation="5" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur><feColorMatrix values="0 0 0 0 0.470588235 0 0 0 0 0.564705882 0 0 0 0 0.611764706 0 0 0 0.243716033 0" in="shadowBlurOuter1"></feColorMatrix></filter><path d="M69.809 28.702c-4.173-.92-7.272-2.327-9.298-4.22-3.039-2.842-7.455-16.25-15.126-21.306C37.714-1.88 31.651-1.68 23.81 9.538c-7.84 11.218-7.262 11.73-10.717 14.943C10.789 26.623 7.028 28.463 1.809 30" id="Low_Bell_Graph_svg__b"></path></defs><g fill="none" fill-rule="evenodd"><path fill="#F7B500" opacity="0.209" d="M28.423 35.25l-19.392.6L9 30.999l2.577-.784h2.069l1.661-.358 1.683 1.142 2.811-2.505 2.818-1.784 2.59-5.5L29 16.85z"></path><g stroke-linecap="round" stroke-linejoin="round" transform="translate(9 2)"><use fill="#000" filter="url(#Low_Bell_Graph_svg__a)" xlink:href="#Low_Bell_Graph_svg__b"></use><use stroke="#FEB50B" stroke-width="3" xlink:href="#Low_Bell_Graph_svg__b"></use></g></g>
                        </svg>
                        <b>$123</b>
                        <span>Low Estimate</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center justify-between">
                        <svg width="92" height="57">
                            <defs><linearGradient x1="90.441%" y1="57.027%" x2="12.347%" y2="39.632%" id="Mid_Bell_Graph_svg__c"><stop stop-color="#47CF73" offset="0%"></stop><stop stop-color="#56EC86" offset="100%"></stop></linearGradient><filter x="-32.7%" y="-39.2%" width="165.2%" height="248.6%" filterUnits="objectBoundingBox" id="Mid_Bell_Graph_svg__a"><feMorphology radius="1.5" operator="dilate" in="SourceAlpha" result="shadowSpreadOuter1"></feMorphology><feOffset dy="12" in="shadowSpreadOuter1" result="shadowOffsetOuter1"></feOffset><feMorphology radius="1.5" in="SourceAlpha" result="shadowInner"></feMorphology><feOffset dy="12" in="shadowInner" result="shadowInner"></feOffset><feComposite in="shadowOffsetOuter1" in2="shadowInner" operator="out" result="shadowOffsetOuter1"></feComposite><feGaussianBlur stdDeviation="5" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur><feColorMatrix values="0 0 0 0 0.470588235 0 0 0 0 0.564705882 0 0 0 0 0.611764706 0 0 0 0.243716033 0" in="shadowBlurOuter1"></feColorMatrix></filter><path d="M70 30.496c-4.296-.978-7.486-2.473-9.572-4.485-3.128-3.018-7.673-17.265-15.57-22.636-7.897-5.372-14.138-5.16-22.21 6.759-8.07 11.92-7.476 12.463-11.032 15.877C9.244 28.287 5.373 30.241 0 31.875" id="Mid_Bell_Graph_svg__b"></path></defs><g fill="none" fill-rule="evenodd"><path d="M53.403 36H40.625l-.439-20.389c-.221-3.865-.221-6.668 0-8.41.222-1.742.514-2.21.874-1.406l2.977-1.953 2.974-1.03 2.112.794 1.571.236.862-.558.653 1.392 1.194-.551V36z" fill="#47CF73" opacity="0.209"></path><g stroke-linecap="round" stroke-linejoin="round" transform="translate(11 2)"><use fill="#000" filter="url(#Mid_Bell_Graph_svg__a)" xlink:href="#Mid_Bell_Graph_svg__b"></use><use stroke="url(#Mid_Bell_Graph_svg__c)" stroke-width="3" xlink:href="#Mid_Bell_Graph_svg__b"></use></g></g>
                        </svg>
                        <b>$123</b>
                        <span>Mid Estimate</span>
                    </div>
                    <div class="flex-1 hidden md:flex flex-col items-center justify-between">
                        <svg width="91" height="57">
                            <defs><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="High_Bell_Graph_svg__c"><stop stop-color="#0CB2FF" offset="0%"></stop><stop stop-color="#057BFF" offset="100%"></stop></linearGradient><filter x="-33.2%" y="-39.2%" width="166.2%" height="248.6%" filterUnits="objectBoundingBox" id="High_Bell_Graph_svg__a"><feMorphology radius="1.5" operator="dilate" in="SourceAlpha" result="shadowSpreadOuter1"></feMorphology><feOffset dy="12" in="shadowSpreadOuter1" result="shadowOffsetOuter1"></feOffset><feMorphology radius="1.5" in="SourceAlpha" result="shadowInner"></feMorphology><feOffset dy="12" in="shadowInner" result="shadowInner"></feOffset><feComposite in="shadowOffsetOuter1" in2="shadowInner" operator="out" result="shadowOffsetOuter1"></feComposite><feGaussianBlur stdDeviation="5" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur><feColorMatrix values="0 0 0 0 0.470588235 0 0 0 0 0.564705882 0 0 0 0 0.611764706 0 0 0 0.243716033 0" in="shadowBlurOuter1"></feColorMatrix></filter><path d="M68.986 30.496c-4.234-.978-7.378-2.473-9.433-4.485C56.47 22.993 51.99 8.746 44.208 3.375c-7.783-5.372-13.934-5.16-21.888 6.759-7.954 11.92-7.368 12.463-10.873 15.877C9.111 28.287 5.295 30.241 0 31.875" id="High_Bell_Graph_svg__b"></path></defs><g fill="none" fill-rule="evenodd"><path d="M80.245 36h-21.73l-.864-25.968c.576 0 1.122-.17 1.64-.51.518-.34.978.352 1.38 2.078l3.484 2.245 4.426 7.703.942 1.676.76 2.302 1.728.9 2.332 3.987 6.641 3.086-.74 2.501z" fill="#0091FF" opacity="0.209"></path><g stroke-linecap="round" stroke-linejoin="round" transform="translate(11 2)"><use fill="#000" filter="url(#High_Bell_Graph_svg__a)" xlink:href="#High_Bell_Graph_svg__b"></use><use stroke="url(#High_Bell_Graph_svg__c)" stroke-width="3" xlink:href="#High_Bell_Graph_svg__b"></use></g></g>
                        </svg>
                        <b>$123</b>
                        <span>High Estimate</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center justify-between relative">
                        <svg width="67" height="66" class="mb-3 mb-md-0">
                            <g fill="none" fill-rule="evenodd"><ellipse stroke="#D9D9D9" stroke-width="3.78" cx="33.5" cy="32.726" rx="31.61" ry="30.836"></ellipse><ellipse stroke="#0EBEFF" stroke-width="4" cx="33.5" cy="33" rx="31.5" ry="31"></ellipse></g>
                        </svg>
                        <b style="position:absolute; top:24px;">95</b>
                        <span>Confidence</span>
                    </div>
                </div>
            </div>

            <div class="text-left mb-4 text-sm">
                <!-- Success -->
                <p class="mb-2">This is an automated valuation based off of tax records, public data and recently sold properties. It is not an appraisal. Use it as a starting point to determine value. An approved local expert may follow up with a more detailed report shortly.</p>
                <p>So please take the valuation above as just a starting point and request a more detailed no-obligation report from one of approved local experts.</p>
            </div>

            <div class="text-left mb-4 text-sm">
                <!-- Fail -->
                <p class="mb-2">Our AVM (automated valuation model) uses many different algorithm models to analyze a home’s value. And we only display a value if the criteria for an accurate result is fulfilled, such as having enough sold data. Also some homes that are very rural or unique in other ways are not candidates for an accurate automated valuation.</p>
                <p class="mb-2">But no worries! It just means it requires a manual review by a local expert that specializes in your type of home.</p>
                <p>So please <a href="#" class="text-blue-500 underline">request a more detailed report</a> from one of our approved local experts. There’s no-obligation and we’ll provide you with a comprehensive report that will be much more accurate than any computer generated report.</p>
            </div>

            <div class="p-4 mb-3 bg-blue-500 text-white rounded">
                <div class="flex md:space-x-4 items-center">
                    <div class="col w-full md:w-7/12 text-left">
                        <h4>Is your value incorrect?</h4>
                        <p class="mb-md-0">Get an accurate home value report from a local pro here. (It's free)</p>
                    </div>
                    <div class="col w-full md:w-5/12 text-center">
                        <a href="#" class="btn block bg-white rounded-md text-blue-500 py-3">Ask a Professional!</a>
                        <small class="block"><i>1000's of accurate valuations given!</i></small>
                    </div>
                </div>
            </div>

            <div class="p-4 md:bg-green-500 text-white rounded">
                <div class="flex space-x-4 items-center">
                    <div class="w-full md:w-7/12 text-left">
                        <h4>Thinking About Selling?</h4>
                        <p class="mb-md-0">Investigate your local market and smartest options with a no-obligation consultation from a local professional.</p>
                    </div>
                    <div class="w-full md:w-5/12 text-center">
                        <a href="#" class="btn block bg-white rounded-md text-green-500 py-3"><span class="hidden md:inline">Request a </span>Free Consultation</a>
                    </div>
                </div>
            </div>

            <small class="mx-auto flex items-center justify-center text-gray-700"><i class="fas fa-lock mr-1"></i> 100% free savings estimate</small>
        </div>
    </section>
</main>

<footer class="text-center bg-gray-100 border-t-2 border-solid border-gray-200 flex flex-col space-y-4 py-10">
    <img src="{{ $site['branding']['logo'] ?? null }}" class="mx-auto h-6 md:h-8" />
    <ul class="inline-flex items-center justify-center mx-auto space-x-4">
        <li><a href="/pages/contact" class="hover:text-brand1">Contact</a></li>
        <li><a href="/pages/privacy" class="hover:text-brand1">Privacy Policy</a></li>
        <li><a href="/pages/terms" class="hover:text-brand1">Terms of Service</a></li>
    </ul>
    <address class="flex flex-col items-center text-xs">
        <span>{{ $site['branding']['address'] ?? null }}</span>
        <a href="mailto:{{ $site['branding']['email'] ?? null }}" class="text-blue-400">{{ $site['branding']['email'] ?? null }}</a>
        <a href="tel:{{ $site['branding']['phone'] ?? null }}">{{ $site['branding']['phone'] ?? null }}</a>
    </address>
    <small class="leading-none text-gray-400">© 2020 Copyright {{ $site["name"] }}</small>
</footer>

<x-alert />

<x-footer-scripts />
</body>
</html>
