@include('projects::includes.project_page.project_header')
        <div class="body-section-single-project">
            <div class="container">
                <div class="row">
                    <div class="left col-md-8">
                       @include('projects::includes.project_page.project_description')

                        <h2 class="title-skill">Skill Set</h2>
                        <div class="row-skill row">
                            <button>Ui / UX expertise</button>
                            <button>PHP </button>
                            <button>HTML / CSS</button>
                        </div>

                        @auth
                             @include('projects::includes.project_page.project_scopre')
                        @else

                        @endauth
                    </div>
                    <div class="right col-md-4">

                        @auth
                             <a href="{{route('frontend.apply_project',1)}}" class="apply-button" style="margin: 10px 0;">APPLY TO THIS PROJECT</a><br><br>
                            <button class="save-button">
                                <i class="fa fa-heart" aria-hidden="true"></i> SAVE PROJECT
                            </button>
                        @else
                            <a href="{{route('frontend.auth.login')}}" class="apply-button" style="margin: 10px 0;">APPLY TO THIS PROJECT</a>
                        @endauth


                        <div class="right-card">
                            @include('projects::includes.project_page.estimete_projects')
                        </div>

                        @auth
                            @include('projects::includes.project_page.company_details')
                        @else

                        @endauth

                        <div class="bottum-buttons">
                            <button class="button">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Report this project
                            </button>
                            <button class="button">
                                <i class="fa fa-share-alt" aria-hidden="true"></i> Share this project
                            </button>
                        </div>
                    </div>
                </div>
                @include('projects::includes.project_page.suggest_more_project')
            </div>
        </div>
    </div>


@push('after-scripts')
    <script>
        // time countdown
            const daysEl = document.getElementById("days");
            const hoursEl = document.getElementById("hours");
            const minutesEl = document.getElementById("minutes");
            const secondsEl = document.getElementById("seconds");

            const date = "7 march 2022";
            function countdown() {
                const newYearsDate = new Date(date);
                const currentDate = new Date();

                const totalSeconds = (newYearsDate - currentDate) / 1000;

                const days = Math.floor(totalSeconds / 3600 / 24);
                const hours = Math.floor(totalSeconds / 3600) % 24;
                const minutes = Math.floor(totalSeconds / 60) % 60;
                const seconds = Math.floor(totalSeconds) % 60;

                daysEl.innerHTML = formatTime(days);
                hoursEl.innerHTML = formatTime(hours);
                minutesEl.innerHTML = formatTime(minutes);
                secondsEl.innerHTML = formatTime(seconds);
            }
            function formatTime(time) {
                return time < 10 ? `0${time}`:time;
            }
            countdown();
            setInterval(countdown, 1000);
    </script>
@endpush