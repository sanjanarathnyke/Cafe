<div class="tab-pane fade" id="cat4">
    <div class="row">
        @foreach ($steakmeal as $steak)
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="menu-item style-four mb-30">
                <div class="menu-thumbnail">
                    <img src="{{ asset($steak->image_path) }}" alt="{{ $steak->name }}">
                </div>
                <div class="menu-info">
                    <div class="menu-meta">
                        <span class="price"><span class="currency">$</span>{{ $steak->price }}</span>
                        <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                    </div>
                    <h4 class="title"><a href="{{ route('cart') }}">{{ $steak->name }}</a></h4>
                    <ul class="check-list style-one">
                        <p>{{ $steak->description }}</p>
                    </ul>
                    <form action="{{ route('add-to-cart') }}" method="POST">
                        @csrf
                        <input type="hidden" name="meal_id" value="{{ $steak->id }}">
                        <input type="hidden" name="meal_type" value="steakbliss"> <!-- Set meal_type to grilled -->
                        <button type="submit" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to
                            Cart</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
