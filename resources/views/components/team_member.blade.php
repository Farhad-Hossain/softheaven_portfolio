<div class="single-item col-lg-4 col-md-6">
    <div class="item">
        <div class="thumb">
            <img src="{{asset('uploaded_images/'.$member->photo_url)}}"
                style="width: 100%; height: 350px;" alt="Thumb">
            <div class="social">
                <input type="checkbox" id="toggle{{$index}}" class="share-toggle" hidden>
                <label for="toggle{{$index}}" class="share-button">
                    <i class="fas fa-plus"></i>
                </label>
                <a href="{{$member->facebook ?? ''}}" class="share-icon facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="{{$member->x ?? ''}}" class="share-icon twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="{{$member->linkedin ?? ''}}" class="share-icon linkedin">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
        <div class="info">
            <h4>{{$member->name}}</h4>
            <span>{{$member->designation}}</span>
        </div>
    </div>
</div>