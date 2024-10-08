<div class="tab-pane fade" id="cat5">
    <div class="row justify-content-center">
        @foreach($chickenmeals as $meal)
        <div class="col-xl-4 col-md-6 col-sm-12">
            <!--=== Menu Item ===-->
            <div class="menu-item style-one mb-40">
                <div class="menu-thumbnail">
                    <img src="{{ asset($meal->image_path) }}" alt="Menu Image">
                </div>
                <form action="{{ route('add-to-cart') }}" method="POST">
                    <div class="menu-info">
                        <h4><a href="menu-details.html">{{ $meal->name }}</a></h4>
                        <p>{{ $meal->description }}</p>
                        <p class="price">${{($meal->price)}}</p>
                        @csrf
                        <input type="hidden" name="meal_id" value="{{ $meal->id }}">
                        <button type="submit" class="theme-btn style-two">Add To Cart</button>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>