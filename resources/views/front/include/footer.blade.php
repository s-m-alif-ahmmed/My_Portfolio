<footer class="p-half bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <ul class="footer-icons mb-4">
                    @foreach($links as $link)
                    <li>
                        <a href="{{$link->link}}" target="_blank" class="wow fadeInUp facebook">
                            <span class="icon">
                            {!! $link->icon !!}
                            </span>
                        </a>
                    </li>
                    @endforeach
                </ul>
                @if($copyright)
                    @if($copyright->status == 'show')
                        <p class="copyrights mt-2 mb-2">&copy;copyright 2023 Made with love by <a href="https://www.smalifahmmed.com" target="_blank">S M Alif Ahmmed.</a></p>
                    @else
                    @endif
                @else
                @endif
            </div>
        </div>
    </div>
</footer>


