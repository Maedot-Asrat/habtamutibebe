<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="section-title text-center eng">
            <h1>News</h1>
            <p>Check our News</p>
        </div>
        <div class="section-title text-center amh">
            <h1>ዜና</h1>
            <p>የተመረጡ ዜናዎች</p>
        </div>
{{--   
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-week">This Week</li>
                    <li data-filter=".filter-month">This Month</li>
                    <li data-filter=".filter-year">This Year</li>
                </ul>
            </div>
        </div> --}}
  
        <div class="row portfolio-container justify-content-center">
            @foreach($news->where('status','active') as $news)
                @foreach($newsdetails->where('news_id', $news->id) as $index => $newsdetail)
                    <?php
                    $publishDate = \Carbon\Carbon::parse($newsdetail->publish_date);
                    $currentDate = \Carbon\Carbon::now();
  
                    $isThisWeek = $publishDate->isSameWeek($currentDate);
                    $isThisMonth = $publishDate->isSameMonth($currentDate);
                    $isThisYear = $publishDate->isSameYear($currentDate);
  
                    $dateClass = '';
                    if ($isThisWeek) $dateClass .= 'filter-week ';
                    if ($isThisMonth) $dateClass .= 'filter-month ';
                    if ($isThisYear) $dateClass .= 'filter-year ';
                    ?>
  
                    <div class="col-lg-4 col-md-6 portfolio-item {{ $dateClass }}">
                        <div class="fh5co-blog animate-box">
                            <a href="{{ url('/newsdetails/' . $news->id . '/' . $newsdetail->id) }}" class="image">
                                <img class="img-responsive"
                                     src="{{ $news->thumbnail ? asset($news->thumbnail) : asset('frontend/assets/img/default.jpg') }}"
                                     alt="">
                            </a>
                            <div class="blog-text">
                                <div class="prod-title">
                                    <h3>{{ $news->Heading }}</h3>
                                    <p>
                                        <?php
                                        $summaryWords = explode(' ', $news->short_description);
                                        $trimmedSummary = implode(' ', array_slice($summaryWords, 0, 10));
                                        echo $trimmedSummary;
                                        if (count($summaryWords) > 10) {
                                            echo '...';
                                        }
                                        ?>
                                    </p>
                                    <div class="meta-post d-flex flex-wrap justify-content-between mt-auto">
                                        <span class="meta-user">{{ $newsdetail->publish_date }}</span>
                                        <div class="float-right px-5 service-detail"
                                             data-url="{{ url('/newsdetails/' . $news->id . '/' . $newsdetail->id) }}">
                                            <a href="{{ url('/newsdetails/' . $news->id . '/' . $newsdetail->id) }}"
                                               class="read-more">Read More...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
  </section>
  