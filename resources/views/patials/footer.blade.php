<div class="container">
    <div class="row">
        <div class="col-md-3 col-md-push-1 animate-box">
            <h3>Our Address</h3>
            <ul class="contact-info">
                <li><i class="icon-location"></i>Address of yoursite location</li>
                <li><i class="icon-old-phone"></i>+668 123 4567</li>
                <li><i class="icon-mail22"></i><a href="#">info@yoursite.com</a></li>
                <li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li>
            </ul>
        </div>
        <form method="post" action="{{ route('contact') }}">
            @csrf
            <div class="col-md-7 col-md-push-1 animate-box">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" name="email" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="" cols="30" rows="7"
                                      placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
