<!-- resources/views/layouts/main-footer.blade.php -->

<footer>
    <div class="info-bar">
      @foreach($infoItems as $item)
        <div class="info-item">
          <img src="{{ $item['icon'] }}" alt="{{ $item['alt'] }}" />
          <span>{{ $item['text'] }}</span>
        </div>
      @endforeach
    </div>

    <div class="footer-content">
      @foreach($footerSections as $section)
        <div class="footer-section">
          <h4>{{ $section['title'] }}</h4>
          <ul>
            @foreach($section['items'] as $item)
              <li>{{ $item }}</li>
            @endforeach
          </ul>
        </div>
      @endforeach
    </div>

    <div class="signup flex-follow">
      <button>SIGN-UP NOW!</button>

      <div class="social-media flex-social">
        <span>FOLLOW US</span>

        <img src="../assets/img/footer-twitter.png" alt="Twitter" class="SocialIcon">
        <img src="../assets/img/footer-facebook.png" alt="Facebook" class="SocialIcon">
        <img src="../assets/img/footer-youtube.png" alt="Youtube" class="SocialIcon">
      </div>
    </div>
  </footer>
