<div class="tab-pane fade" id="cat4">
    <div class="row justify-content-center">
        @foreach($steakmeat as $steakfoods)
        <div class="col-xl-4 col-md-6 col-sm-12">
            <!--=== Menu Item ===-->
            <div class="menu-item style-one mb-40">
                <div class="menu-thumbnail">
                    <img src="{{ asset($steakfoods->image_path) }}" alt="{{ $steakfoods->name }}">
                </div>
                <form action="{{ route('add-to-cart') }}" method="POST">
                    <div class="menu-info">
                        <h4><a href="menu-details.html">{{ $steakfoods->name }}</a></h4>
                        <p>{{ $steakfoods->description }}</p>
                        <p class="price">${{ $steakfoods->price }}</p>
                        @csrf
                        <input type="hidden" name="meal_id" value="{{ $steakfoods->id }}">
                        <input type="hidden" name="meal_type" value="steak"> <!-- Change from 'burger' to 'steak' -->
                        <button type="submit" class="theme-btn style-two">Add To Cart</button>
                    </div>
                </form>
            </div>
        </div>
        @endforeach

    </div>
</div>