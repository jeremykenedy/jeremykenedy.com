@php
    $class = '';
    if (isset($sectionClass)) {
        $class = $sectionClass;
    }
@endphp

<section section id=timeline>
    <div class="section--basic {{ $class }}">
        <div class="container">
            <div class="headline">
                <h2>
                    {!! $title !!}
                </h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline">
                        @foreach($items as $item)
                            @if($item->enabled)
                                <div class="timeline" data-aos="fade" data-aos-offset="100" data-aos-delay="100">
                                    <div class="timeline-icon">
                                        <i class="fa {{ $item->icon }}"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h3 class="title">
                                            {{ $item->dates }}
                                        </h3>
                                        <h5 class="subtitle">
                                            {{ $item->title }}
                                        </h5>
                                        <p class="description">
                                            {{ $item->subtitle }}
                                        </p>
                                        @if($item->text)
                                            <p class="timeline-text text-muted">
                                                {{ $item->text }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
