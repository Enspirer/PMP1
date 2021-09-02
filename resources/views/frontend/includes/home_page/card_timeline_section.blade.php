<style>
    #card-swipper .timeline title{
        font-size: 17px;
        /*max-width: 90px;*/
    }
</style>

<section id="card-swipper">
    <div class="container">
        <div class="heading-text">
            <h1 data-animscroll="fade-up" style="font-size: 42px;color: #361d41">
                Pick your challenge & Get started
            </h1>
            <p data-animscroll="fade-up" data-animscroll-delay="100" style="font-size: 18px">
                The easiest way to grab your next project… Select the project
                matches your team profile and get hired immediately by companies
                around the world. <b>It’s that Simple</b>

            </p>
        </div>
    </div>

    <div class="">
        <div class="timeline" data-animscroll="fade-up" data-animscroll-delay="100">
            <div class="swiper-container swiper-container1">
                <div class="swiper-wrapper ol">
                    <div class="swiper-slide li">
                        <div class="anim-hover-grow">
                            <a href="{{route('frontend.project_page',1)}}">
                                <div class="card">
                                        <div class="circle">
                                            <div class="inner">
                                                <img src="{{url('theme_light/assets/image/icon/browser.png')}}" alt="" />
                                            </div>
                                        </div>
                                        <title>Mobile app Development</title>
                                        <div class="small-text">
                                            {{--<p>--}}
                                            {{--Lorem brand is a startup clothing company we need--}}
                                            {{--perfect logo for our brand....--}}
                                            {{--</p>--}}
                                        </div>
                                        <div class="arrow-inline">
                                            <p>{{rand(10,100)}} Views</p>
                                            <span><i class="color-green">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11.25" height="15" viewBox="0 0 11.25 15">
                                                    <path id="Icon_open-arrow-thick-top" data-name="Icon open-arrow-thick-top" d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"></path>

                                                </svg> </i>
                                            </span>
                                        </div>

                                        <div class="button">
                                            <form action="{{route('frontend.project_page',1)}}" method="get">
                                                <button type="submit" class="btn btn-outline-dark">
                                                    View Project
                                                </button>
                                            </form>
                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide li">
                        <div class="anim-hover-grow">
                            <a href="{{route('frontend.project_page',1)}}">
                                <div class="card">
                                    <div class="circle">
                                        <div class="inner">
                                            <img src="{{url('theme_light/assets/image/icon/screen.png')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="arrow-inline">
                                        <p>{{rand(10,100)}} Views</p>
                                        <span>
                                                <i class="color-yellow"><svg xmlns="http://www.w3.org/2000/svg" width="11.25" height="15" viewBox="0 0 11.25 15">
                                                        <path id="Icon_open-arrow-thick-top" data-name="Icon open-arrow-thick-top" d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"></path>
                                                    </svg>
                                                </i>
                                            </span>
                                    </div>

                                    <title>Multivendor ecommerce solution</title>
                                    <div class="small-text">
                                        {{--<p>--}}
                                            {{--Lorem brand is a startup clothing company we need--}}
                                            {{--perfect logo for our brand....--}}
                                        {{--</p>--}}
                                    </div>

                                    <div class="button">
                                        <form action="{{route('frontend.project_page',1)}}" method="get">
                                            <button type="submit" class="btn btn-outline-dark">
                                                View Project
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide li">
                        <div class="anim-hover-grow">
                            <a href="{{route('frontend.project_page',1)}}">
                                <div class="card">
                                    <div class="circle">
                                        <div class="inner">
                                            <img src="{{url('theme_light/assets/image/icon/browserspaceone.png')}}" alt=""/>
                                        </div>
                                    </div>
                                    <title>Dynamic web solution</title>
                                    <div class="small-text">
                                        {{--<p>--}}
                                            {{--Lorem brand is a startup clothing company we need--}}
                                            {{--perfect logo for our brand....--}}
                                        {{--</p>--}}
                                    </div>
                                    <div class="arrow-inline">
                                        <p>{{rand(10,100)}} Views</p>
                                        <span>
                                                <i class="color-yellow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11.25" height="15" viewBox="0 0 11.25 15">
                                                        <path id="Icon_open-arrow-thick-top" data-name="Icon open-arrow-thick-top" d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"></path>
                                                    </svg>
                                                </i>
                                            </span>
                                    </div>
                                    <div class="button">
                                        <form action="{{route('frontend.project_page',1)}}" method="get">
                                            <button type="submit" class="btn btn-outline-dark">
                                                View Project
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide li">
                        <div class="anim-hover-grow">
                            <a href="{{route('frontend.project_page',1)}}">
                                <div class="card">
                                    <div class="circle">
                                        <div class="inner">
                                            <img src="{{url('theme_light/assets/image/icon/folder.png')}}" alt="" />
                                        </div>
                                    </div>
                                    <title>Customized CRM solution</title>
                                    <div class="small-text">
                                        {{--<p>--}}
                                            {{--Lorem brand is a startup clothing company we need--}}
                                            {{--perfect logo for our brand....--}}
                                        {{--</p>--}}
                                    </div>
                                    <div class="arrow-inline">
                                        <p>{{rand(10,100)}} Views</p>
                                        <span>
                                            <i class="color-red">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="11.25"  height="15"  viewBox="0 0 11.25 15">
                                                    <path id="Icon_open-arrow-thick-top" data-name="Icon open-arrow-thick-top" d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"></path>
                                                </svg>
                                            </i>
                                        </span>
                                    </div>
                                    <div class="button">
                                        <form action="{{route('frontend.project_page',1)}}" method="get">
                                            <button type="submit" class="btn btn-outline-dark">
                                                View Project
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide li">
                        <div class="anim-hover-grow">
                            <a href="{{route('frontend.project_page',1)}}">
                                <div class="card">
                                    <div class="circle">
                                        <div class="inner">
                                            <img src="{{url('theme_light/assets/image/icon/folder.png')}}" alt=""/>
                                        </div>
                                    </div>
                                    <title>Customize CRM solution</title>
                                    <div class="small-text">
                                        {{--<p>--}}
                                            {{--Lorem brand is a startup clothing company we need--}}
                                            {{--perfect logo for our brand....--}}
                                        {{--</p>--}}
                                    </div>
                                    <div class="arrow-inline">
                                        <p>{{rand(10,100)}} Views</p>
                                        <span>
                                            <i class="color-red">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="11.25"  height="15"  viewBox="0 0 11.25 15">
                                                    <path id="Icon_open-arrow-thick-top" data-name="Icon open-arrow-thick-top" d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"></path>
                                                </svg>
                                            </i>
                                        </span>
                                    </div>
                                    <div class="button">
                                        <form action="{{route('frontend.project_page',1)}}" method="get">
                                            <button type="submit" class="btn btn-outline-dark">
                                                View Project
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide li">
                        <div class="anim-hover-grow">
                            <a href="{{route('frontend.project_page',1)}}">
                                <div class="card">
                                    <div class="circle">
                                        <div class="inner">
                                            <img src="{{url('theme_light/assets/image/icon/folder.png')}}" alt="" />
                                        </div>
                                    </div>
                                    <title>Dynamic web site solution</title>
                                    <div class="small-text">
                                        {{--<p>--}}
                                        {{--Lorem brand is a startup clothing company we need--}}
                                        {{--perfect logo for our brand....--}}
                                        {{--</p>--}}
                                    </div>
                                    <div class="arrow-inline">
                                        <p>{{rand(10,100)}} Views</p>
                                        <span>
                                            <i class="color-red">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11.25" height="15" viewBox="0 0 11.25 15">
                                                    <path id="Icon_open-arrow-thick-top" data-name="Icon open-arrow-thick-top" d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"></path>
                                                </svg>
                                            </i>
                                        </span>
                                    </div>
                                    <div class="button">
                                        <form action="{{route('frontend.project_page',1)}}" method="get">
                                            <button type="submit" class="btn btn-outline-dark">
                                                View Project
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide li">
                        <div class="anim-hover-grow">
                            <a href="{{route('frontend.project_page',1)}}">
                                <div class="card">
                                    <div class="circle">
                                        <div class="inner">
                                            <img src="{{url('theme_light/assets/image/icon/folder.png')}}" alt="" />
                                        </div>
                                    </div>
                                    <title>Digital Marketing campaign</title>
                                    <div class="small-text">
                                        {{--<p>--}}
                                            {{--Lorem brand is a startup clothing company we need--}}
                                            {{--perfect logo for our brand....--}}
                                        {{--</p>--}}
                                    </div>
                                    <div class="arrow-inline">
                                        <p>{{rand(10,100)}} Views</p>
                                        <span>
                                            <i class="color-red">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11.25" height="15" viewBox="0 0 11.25 15">
                                                    <path id="Icon_open-arrow-thick-top" data-name="Icon open-arrow-thick-top" d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"></path>
                                                </svg>
                                            </i>
                                        </span>
                                    </div>
                                    <div class="button">
                                        <form action="{{route('frontend.project_page',1)}}" method="get">
                                            <button type="submit" class="btn btn-outline-dark">
                                                View Project
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide li">
                        <div class="anim-hover-grow">
                            <a href="{{route('frontend.project_page',1)}}">
                                <div class="card">
                                    <div class="circle">
                                        <div class="inner">
                                            <img src="{{url('theme_light/assets/image/icon/folder.png')}}" alt="" />
                                        </div>
                                    </div>
                                    <title>Organic Search Engine Optimisation</title>
                                    <div class="small-text">
                                        {{--<p>--}}
                                            {{--Lorem brand is a startup clothing company we need--}}
                                            {{--perfect logo for our brand....--}}
                                        {{--</p>--}}
                                    </div>
                                    <div class="arrow-inline">
                                        <p>{{rand(10,100)}} Views</p>
                                        <span>
                                            <i class="color-red">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11.25" height="15" viewBox="0 0 11.25 15">
                                                    <path id="Icon_open-arrow-thick-top" data-name="Icon open-arrow-thick-top" d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"></path>
                                                </svg>
                                            </i>
                                        </span>
                                    </div>
                                    <div class="button">
                                        <form action="{{route('frontend.project_page',1)}}" method="get">
                                            <button type="submit" class="btn btn-outline-dark">
                                                View Project
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide li">
                        <div class="anim-hover-grow">
                            <a href="{{route('frontend.project_page',1)}}">
                                <div class="card">
                                    <div class="circle">
                                        <div class="inner">
                                            <img src="{{url('theme_light/assets/image/icon/folder.png')}}" alt="" />
                                        </div>
                                    </div>
                                    <title>Audio Visual production</title>
                                    <div class="small-text">
                                        {{--<p>--}}
                                            {{--Lorem brand is a startup clothing company we need--}}
                                            {{--perfect logo for our brand....--}}
                                        {{--</p>--}}
                                    </div>
                                    <div class="arrow-inline">
                                        <p>{{rand(10,100)}} Views</p>
                                        <span>
                                            <i class="color-red">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11.25" height="15" viewBox="0 0 11.25 15">
                                                    <path id="Icon_open-arrow-thick-top" data-name="Icon open-arrow-thick-top" d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"></path>
                                                </svg>
                                            </i>
                                        </span>
                                    </div>
                                    <div class="button">
                                        <form action="{{route('frontend.project_page',1)}}" method="get">
                                            <button type="submit" class="btn btn-outline-dark">
                                                View Project
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{route('frontend.project_explore',['category','search_keyword','country','bids_range','sort_by','infrack'])}}" class="btn btn-primary" style="margin: 0;background: #0F9D58;border: none;color: #fff;padding: 12px 25px">VIEW ALL PROJECTS</a>
        </div>

    </div>
</section>


@push('after-scripts')
    <script>
        (function () {

            // VARIABLES
                const timeline = document.querySelector(".timeline .ol"),
                elH = document.querySelectorAll(".timeline li > div"),
                arrows = document.querySelectorAll(".timeline .arrows .arrow"),
                arrowPrev = document.querySelector(".timeline .arrows .arrow__prev"),
                arrowNext = document.querySelector(".timeline .arrows .arrow__next"),
                firstItem = document.querySelector(".timeline li:first-child"),
                lastItem = document.querySelector(".timeline li:last-child"),
                xScrolling = 280,
                disabledClass = "disabled";

            // START
            // window.addEventListener("load", init);
            // $(function() {
            //     init();
            // })

            // function init() {
            //     setEqualHeights(elH);
            //     animateTl(xScrolling, arrows, timeline);
            //     setSwipeFn(timeline, arrowPrev, arrowNext);
            //     setKeyboardFn(arrowPrev, arrowNext);

            //     console.log(timeline);
            // }

            // SET EQUAL HEIGHTS
            function setEqualHeights(el) {
                let counter = 0;
                for (let i = 0; i < el.length; i++) {
                    const singleHeight = el[i].offsetHeight;

                    if (counter < singleHeight) {
                        counter = singleHeight;
                    }
                }

                for (let i = 0; i < el.length; i++) {
                    el[i].style.height = `${counter}px`;
                }
            }

            // CHECK IF AN ELEMENT IS IN VIEWPORT
            // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
            function isElementInViewport(el) {
                const rect = el.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth));

            }

            // SET STATE OF PREV/NEXT ARROWS
            function setBtnState(el, flag = true) {
                if (flag) {
                    el.classList.add(disabledClass);
                } else {
                    if (el.classList.contains(disabledClass)) {
                        el.classList.remove(disabledClass);
                    }
                    el.disabled = false;
                }
            }

            // ANIMATE TIMELINE
            function animateTl(scrolling, el, tl) {
                let counter = 0;
                for (let i = 0; i < el.length; i++) {
                    el[i].addEventListener("click", function () {
                        if (!arrowPrev.disabled) {
                            arrowPrev.disabled = true;
                        }
                        if (!arrowNext.disabled) {
                            arrowNext.disabled = true;
                        }
                        const sign = this.classList.contains("arrow__prev") ? "" : "-";
                        if (counter === 0) {
                            tl.style.transform = `translateX(-${scrolling}px)`;
                        } else {
                            const tlStyle = getComputedStyle(tl);
                            // add more browser prefixes if needed here
                            const tlTransform = tlStyle.getPropertyValue("-webkit-transform") || tlStyle.getPropertyValue("transform");
                            const values = parseInt(tlTransform.split(",")[4]) + parseInt(`${sign}${scrolling}`);
                            tl.style.transform = `translateX(${values}px)`;
                        }

                        setTimeout(() => {
                            isElementInViewport(firstItem) ? setBtnState(arrowPrev) : setBtnState(arrowPrev, false);
                            isElementInViewport(lastItem) ? setBtnState(arrowNext) : setBtnState(arrowNext, false);
                        }, 1100);

                        counter++;
                    });
                }
            }

            // ADD SWIPE SUPPORT FOR TOUCH DEVICES
            function setSwipeFn(tl, prev, next) {
                // const hammer = new Hammer(tl);
                hammer.on("swipeleft", () => next.click());
                hammer.on("swiperight", () => prev.click());
            }

            // ADD BASIC KEYBOARD FUNCTIONALITY
            function setKeyboardFn(prev, next) {
                document.addEventListener("keydown", e => {
                    if (e.which === 37 || e.which === 39) {
                        const timelineOfTop = timeline.offsetTop;
                        const y = window.pageYOffset;
                        if (timelineOfTop !== y) {
                            window.scrollTo(0, timelineOfTop);
                        }
                        if (e.which === 37) {
                            prev.click();
                        } else if (e.which === 39) {
                            next.click();
                        }
                    }
                });
            }

            })();
    </script>
@endpush