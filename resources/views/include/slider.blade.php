
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @forelse ($courses as $newslid)

                    <div class="carousel-item @if ($newslid->id==1)
                        active
                    @endif">
                    <a href="">
                    <img src="{{ asset('courses/'.$newslid['cours_img']) }}" class="d-block w-100 sliderimg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>{{ $newslid['cours_name'] }}</h5>
                      <p>{{ Str::limit($newslid->cours_description,50,$end="...") }}</p>
                      <button class="mybutton">View Course</button>
                    </div>
                </a>
                  </div>

                @empty

                @endforelse
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
