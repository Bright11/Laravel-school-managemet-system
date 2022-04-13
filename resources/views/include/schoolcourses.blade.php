<div class="container">
    <div class="row">
       @forelse ($courses as $schoolc)
       <div class="col-md-3 schoolc">
           <a href="">
               <img src="{{ asset('courses/'.$schoolc['cours_img']) }}" alt="" class="coursimg img-fluid">
               <h3>{{ $schoolc['cours_name'] }}</h3>
           </a>
       </div>
       @empty

       @endforelse


    </div>
</div>
<style>
    .schoolc .coursimg{
        height: 200px;
    }
</style>
