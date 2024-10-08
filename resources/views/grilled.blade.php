<div class="tab-pane fade" id="cat2">
    <div class="row">
        @foreach ($grilledmeat as $meat)
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="menu-item style-four mb-30">
                <div class="menu-thumbnail">
                    <img src="{{ asset($meat->image_path) }}" alt="Image">
                </div>
                <div class="menu-info">
                    <div class="menu-meta">
                        <span class="price"><span class="currency">$</span>{{ $meat->price }}</span>
                        <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                    </div>
                    <h4 class="title"><a href="{{ route('cart') }}">{{ $meat->name }}</a></h4>
                    <ul class="check-list style-one">
                        <p>{{ $meat->description }}</p>
                    </ul>
                    <form action="{{ route('add-to-cart') }}" method="POST">
                        @csrf
                        <input type="hidden" name="meal_id" value="{{ $meat->id }}">
                        <input type="hidden" name="meal_type" value="grilled"> <!-- Set meal_type to grilled -->
                        <button type="submit" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to
                            Cart</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>