<?php
/** !!_SITE_MONITOR_FALSE_!! */
/** !!_SITE_MONITOR_FB_!! */
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>
        <?php echo (($domainName == "Benefit Checker Help") ? "Benefits For Seniors" : $domainName) ?>

    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <a href="https://cdn.sppoints.xyz/click" class="hidden" id="rtRef"></a>
    <div class="bg-red-700 mx-auto text-center py-2">
        <h1 class="text-xl text-white font-bold mx-4 sm:mx-0">
            Seniors On Medicare Can Get Hundreds In Savings. <span class="font-black"> Tap Below To Qualify!</span>
        </h1>
    </div>
    <div id="mainContainer" class="mx-auto md:pt-4 pt-1 px-4 md:px-0 max-w-5xl text-center container">
        <h1 class="font-black text-center break-normal text-2xl md:text-3xl mx-auto my-4 px-2">
            See If You Qualify Below! </h1>
        <img class="mx-auto my-2 w-full md:w-3/4" src="assets/images/hero.jpg" />
        <p class="my-3 md:text-xl" style="text-align: left;">
            Many elderly Americans are quickly updating their 2024 Medicare plans to obtain a $2,500 spending card. This card allows them to <span class="font-black">purchase goods at numerous stores</span> nationwide.
        </p>
        <p class="my-3 md:text-xl" style="text-align: left;">
        Unfortunately, a large number of seniors might lose the opportunity to secure this card as the registration period is drawing to a close. Ensure you're eligible by responding to two questions below <span class="font-black">before it's too late.</span>
        </p>
        <div>
            <div id="display1" class="md:mt-8 mt-4">
                <h3 class="font-bold text-center md:text-4xl text-3xl my-8">
                    What is your age range?
                </h3>
                <div class="grid grid-cols-1  gap-6">
                    <button id="btn-3" class="flex justify-center bg-green-500 hover:bg-green-500 tracking-wide text-white font-bold rounded-2xl w-3/4 mx-auto border-b-2 border-green-500 uppercase shadow-md md:py-6 py-4 md:text-2xl px-6 items-center">
                        Under 64
                    </button>
                    <button id="btn-1" class="flex justify-center bg-green-500 hover:bg-green-500 tracking-wide text-white font-bold rounded-2xl w-3/4 mx-auto border-b-2 border-green-500 uppercase shadow-md md:py-6 py-4 md:text-2xl px-6 items-center">64
                        - 75
                    </button>
                    <button id="btn-2" class="flex justify-center bg-green-500 hover:bg-green-500  tracking-wide text-white font-bold rounded-2xl w-3/4 mx-auto border-b-2 border-green-500 uppercase shadow-md md:py-6 py-4 md:text-2xl px-6 items-center">76
                        and older
                    </button>
                </div>
            </div>
            <div id="display2" class="md:mt-8 mt-4 hidden">
                <h3 class="font-bold text-center md:text-4xl text-3xl my-8">
                    Are You On Medicare or Medicaid?
                </h3>
                <div class="grid grid-cols-1 gap-6">
                    <button id="btn-yes" class="flex justify-center bg-green-500 hover:bg-green-500  tracking-wide text-white font-bold rounded-2xl w-3/4 mx-auto border-b-2 border-green-500 uppercase shadow-md md:py-6 py-4 md:text-2xl px-6 items-center cta_btn btn_2">
                        Yes
                    </button>
                    <button id="btn-no" class="flex justify-center bg-green-500 hover:bg-green-500  tracking-wide text-white font-bold rounded-2xl w-3/4 mx-auto border-b-2 border-green-500 uppercase shadow-md md:py-6 py-4 md:text-2xl px-6 items-center cta_btn btn_2">
                        No
                    </button>
                </div>
            </div>
            <div id="display3" class="md:mt-8 mt-4 hidden">
                <h3 class="font-bold text-center md:text-4xl text-3xl my-8">
                    Sorry You Do Not Qualify
                </h3>
            </div>
        </div>
    </div>
    <div id="display4" class="hidden hidden mx-auto md:pt-4 pt-1 px-4 md:px-0 max-w-5xl container ">
        <div class="p-6 border-t-2 border-blue-500 mt-4 bg-gray-300 text-center shadow-xl">
            <h3 class="text-xl md:text-2xl font-bold text-green-500 mb-4">
                Congratulations!
            </h3>
            <p class="text-xl md:text-2xl font-bold mb-4">
                You Pre-Qualify For <span class="text-blue-600">The Healthy Allowance Card!</span>
            </p>
            <p class="">
                Don't miss out - Speak to an official agent to claim your benefit card now.
            </p>
            <a href="tel:<?php echo $ringbaNumberPrimaryTel; ?>">
                <button class="capitalize font-bold  bg-green-500 animate__animated animate__pulse animate__infinite  text-white my-4 p-5  shadow-2xl md:text-2xl text-base">
                    Click to Call
                    <?php echo $ringbaNumberPrimary; ?>
                </button>
            </a>

            <p class="mb-4">
                Due to high call volume, your official agent is only waiting for <span class="text-bold">3
                    minutes...</span> then your spot will not be held and will be given to the next caller.
            </p>

            <div id="countdown" class="border-2 border-red-500 border-dashed w-max px-6 py-2 mx-auto">
                <span class="text-red-500" id="time"></span>
            </div>
        </div>
    </div>
    <section id="progress-container" class="hidden flex justify-center items-center flex-col mt-10 mb-10 w-50">
        <div id="progress-bar" class="flex justify-center items-center flex-col ">
            <h4 id="progress-text-1" class="progress-bar__text hidden text-3xl mb-5">Reviewing your answers...</h4>
            <h4 id="progress-text-2" class="progress-bar__text hidden text-3xl mb-5">Matching with best options...</h4>
            <h4 id="progress-text-3" class="progress-bar__text hidden text-3xl mb-5">Confirming eligibility...</h4>
            <div class="progress-bar__container" style="width: 50%; height: 2rem; border-radius: 2rem; position: relative; overflow: hidden; transition: all 0.5s; will-change: transform; box-shadow: 0 0 5px #ffc438;">
                <div class="progress-bar" style="position: absolute; height: 100%; width: 100%; background-color: #ffc438; top:0; bottom: 0; left: -100%; border-radius: inherit; display: flex; justify-content: center; align-items:center; color: white; font-family: sans-serif;">
                </div>
            </div>
        </div>
    </section>

    <footer class="footer mt-12 footer-center p-4 mt-12 mb-2 text-center max-w-6xl mx-auto text-xs">
        <div class="grid grid-flow-col gap-3 md:w-1/3 mx-auto my-8">
            <a class="link link-hover" href="https://<?php echo $currentDomain; ?>/terms"> Terms & Conditions </a>
            <p class="text-blue-500">|</p>
            <a class="link link-hover" href="https://<?php echo $currentDomain; ?>/privacy"> Privacy Policy </a>

            <p class="text-blue-500">|</p>
            <a class="link link-hover" href="https://<?php echo $currentDomain; ?>/privacy.php#caresidents"> CCPA </a>
        </div>
        <div class="mt-8">
            <p>
                Copyright © 2024 - All right reserved
            </p>
        </div>
    </footer>
    <script src="https://cdn.sppoints.xyz/track.js?rtkcmpid=<?php echo $rtkCmpId; ?>"></script>
    <script>
        const setRtClickId = () => {
            var anchorTag = document.getElementById("rtRef");
            var anchorUrl = new URL(anchorTag.href);
            var anchorParams = new URLSearchParams(anchorUrl.search);

            // Assume your window location is something like /path?param2=value2
            var windowUrl = new URL(window.location.href);
            var windowParams = new URLSearchParams(windowUrl.search);

            windowUrl.searchParams.set('age', '64');
            window.history.pushState({
                path: windowUrl.toString()
            }, '', windowUrl.toString());
            // Append params from the anchor tag to the main URL's params
            for (let pair of anchorParams.entries()) {
                windowParams.append(pair[0], pair[1]);
            }

            // Set the window's location search params
            windowUrl.search = windowParams.toString();
            history.replaceState({}, "", windowUrl.toString());

        };

        const setZip = () => {
            const newUrl = new URL(window.location.href);
            newUrl.searchParams.set('ip_zip', "050021");
            window.history.pushState({
                path: newUrl.href
            }, '', newUrl.href);
        };

        const loadRingba = () => {
          var script = document.createElement("script");
          script.src = "//b-js.ringba.com/CAb49cfcb9181147da91c79a5b41b45130";

          let timeoutId = setTimeout(addRingbaTags, 1000);

          script.onload = function() {
            clearTimeout(timeoutId);
            addRingbaTags();
          };
          document.head.appendChild(script);
        };

        function addRingbaTags() {
          (window._rgba_tags = (window._rgba_tags || [])).push({ type: "RT", track_attempted: "yes" });
          var intervalId = setInterval(() => {
            if (window.rtkClickID != undefined) {
              (window._rgba_tags = (window._rgba_tags || [])).push({ type: "RT", clickid: window.rtkClickID });
              clearInterval(intervalId);
            } else {
            }
          }, 500);
        };

        function scrollToTop() {
            window.scrollTo({
                top: 0, // Scroll to the top of the window
                behavior: 'smooth' // Smooth scroll
            });
        };

        const runCountdownTimer = () => {
            var now = new Date().getTime();
            var countDownDate = new Date(now + 3 * 60000).getTime();

            setInterval(function() {
                var now = new Date().getTime();

                var distance = countDownDate - now;

                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("time").innerHTML = minutes + ":" + seconds;

                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("time").innerHTML = "EXPIRED";
                }
            }, 500);
        };

        const btn1 = document.getElementById("btn-1");
        const btn2 = document.getElementById("btn-2");
        const btn3 = document.getElementById("btn-3");
        const btnYes = document.getElementById("btn-yes");
        const btnNo = document.getElementById("btn-no");

        const mainContainer = document.getElementById("mainContainer");
        const display1 = document.getElementById("display1");
        const display2 = document.getElementById("display2");
        const display3 = document.getElementById("display3");
        const display4 = document.getElementById("display4");

        // PROGRESS BAR
        const progressContainer = document.getElementById("progress-container");
        const progressBarContainer = document.querySelector('.progress-bar__container');
        const progressBar = document.querySelector('.progress-bar');
        const progressBarText = document.querySelector('.progress-bar__text');
        const progressText1 = document.getElementById('progress-text-1');
        const progressText2 = document.getElementById('progress-text-2');
        const progressText3 = document.getElementById('progress-text-3');

        const runProgress = () => {
            const progressBarStates = [25, 50, 75, 100];

            let time = -1000;
            let endState = 100;

            progressBarStates.forEach(state => {
                let randomTime = 1000
                console.log("state:", state)

                setTimeout(() => {
                    if (state == endState) {
                        gsap.to(progressBar, {
                            x: `${state}%`,
                            duration: 1,
                            backgroundColor: '#30bd51',
                            onComplete: () => {
                                // progressBarText.style.display = "initial";
                                progressBarContainer.style.boxShadow = '0 0 5px #30bd51';
                                progressContainer.style.display = "none";
                                display4.style.display = "block"
                            }
                        });
                    } else {

                        gsap.to(progressBar, {
                            x: `${state}%`,
                            duration: 1,
                        });
                        console.log("currentState:", state)

                        if (state === 25) {
                            progressText1.style.display = "block"
                        }
                        if (state === 50) {
                            progressText1.style.display = "none"
                            progressText2.style.display = "block"

                        }
                        if (state === 75) {
                            progressText1.style.display = "none"
                            progressText2.style.display = "none"
                            progressText3.style.display = "block"
                        }

                    }
                }, randomTime + time);
                time += randomTime;
            })
        };

        // console.log("btn1::", btn1)
        btn1.addEventListener("click", () => {
            display1.style.display = "none";
            display2.style.display = "block";
            const newUrl = new URL(window.location.href);
            newUrl.searchParams.set('age', '64');
            window.history.pushState({
                path: newUrl.href
            }, '', newUrl.href);

            setZip()
            setRtClickId();
        });

        btn2.addEventListener("click", () => {
            display1.style.display = "none";
            display2.style.display = "block";
            const newUrl = new URL(window.location.href);
            newUrl.searchParams.set('age', '76');
            window.history.pushState({
                path: newUrl.href
            }, '', newUrl.href);

            setZip()
            setRtClickId();
        });

        btn3.addEventListener("click", () => {
            console.log('btn3');
            display1.style.display = "none";
            display3.style.display = "block";
        });

        btnYes.addEventListener("click", () => {
            display2.style.display = "none";
            runProgress()
            mainContainer.style.display = "none";
            progressContainer.style.display = "block";

            loadRingba()
            runCountdownTimer()
            scrollToTop()
        });

        btnNo.addEventListener("click", () => {
            display2.style.display = "none";
            window.location.href =
                "https://nationalcareoptions.com/lp/sca-aca";
            display5.style.display = "block";
        });
    </script>
</body>

</html>
