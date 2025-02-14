<div class="container-fluid footer position-relative text-white-50 py-5 wow fadeIn eng" data-wow-delay="0.1s" id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <div id="text-2" class="widget widget_text">
          <div class="textwidget">
            @foreach($logos as $logo)
              <img src={{$logo->logo}} alt="" class="logo">
            @endforeach
            <p>
              Habtamu Tibebe is a passionate young artist born and raised in Ethiopia; the general theme of my artworks reflects the ancient world, and as an inspiration history, nature, and beauty are the main sources of ideas. The concept behind his work is to magnify the bright time of the golden age of the ancient world by combining the current one.
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-4">
        <div id="recent-posts-2" class="widget widget_recent_entries">
          <h3>LATEST NEWS</h3>
          <ul>
            <li>
              <a href="https://new.habtamutibebe.com/2024/06/19/%e1%88%b5%e1%88%ab%e1%8b%8e%e1%89%bc-%e1%89%a0%e1%89%a5%e1%8b%9b%e1%89%b5-%e1%8b%a8%e1%88%9a%e1%8b%ab%e1%89%b0%e1%8a%a9%e1%88%a9%e1%89%b5-%e1%89%b3%e1%88%aa%e1%8a%ad-%e1%8d%a3-%e1%8b%8d%e1%89%a0/">“ስራዎቼ በብዛት የሚያተኩሩት ታሪክ ፣ ውበት እና ተፈጥሮ ላይ ነው “.. ሰዓሊ ሀብታሙ ጥበበ// በጥበብ ሰአት // በእሁድን በ ኢቢኤስ //</a>
            </li>
          </ul>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-4">
        <div id="text-3" class="widget widget_text">
          <h3>Contact Us</h3>
          <div class="textwidget">
            <address>
              <span>Addis Ababa, Ethiopia</span>
              <span><strong>Phone:</strong>+251 913625178 / +251 941139613</span>
              <span><strong>Email 1:</strong><a href="mailto:info@habtamutibebe.com">info@habtamutibebe.com</a></span>
              <span><strong>Email 2:</strong><a href="mailto:Habtamutibebe4@gmail.com">Habtamutibebe4@gmail.com</a></span>
              <span><strong>Email 3:</strong><a href="mailto:habteart@gmail.com">habteart@gmail.com</a></span>
              <span><strong>Web:</strong><a target="_blank" href="www.habtamutibebe.com">http://www.habtamutibebe.com/</a></span>
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col text-center">
        <h4>Subscribe to Our Newsletter</h4>
        <form class="justify-content-center d-flex flex-col mt-2" action="/subscribe" method="POST">
          <input type="email" name="email" class="form-control w-50 me-2" placeholder="Enter Email" required>
          <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
      </div>
    </div>
  </div>
</div>
