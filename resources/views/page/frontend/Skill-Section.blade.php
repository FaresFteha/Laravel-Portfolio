<section class="skill-section section-block" id="skill-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 content-block" data-aos="fade-down" data-aos-duration="2000">
                <h2><span>My Skills</span>{{ $Skill['title'] }}</h2>
                <p class="lead">
                    {{ $Skill['descripsion'] }}
                </p>
            </div>
            <div class="col-xl-6 progress-block">
                <div class="progress-wrapper">
                    <h4>{{ $Skill['skill-1'] }}</h4>
                    <p class="progress-value">{{ $Skill['prog-1'] }}%</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="{{ $Skill['prog-1'] }}"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-wrapper">
                    <h4>{{ $Skill['skill-2'] }}</h4>
                    <p class="progress-value">{{ $Skill['prog-2'] }}%</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="{{ $Skill['prog-2'] }}"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-wrapper">
                    <h4>{{ $Skill['skill-3'] }}</h4>
                    <p class="progress-value">{{ $Skill['prog-3'] }}%</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="{{ $Skill['prog-3'] }}"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-wrapper">
                    <h4>{{ $Skill['skill-4'] }}</h4>
                    <p class="progress-value">{{ $Skill['prog-3'] }}%</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="{{ $Skill['prog-3'] }}"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</section>