@extends('include.fmaster')

@section('fbody')
<div class="container pdfcontainer mt-5">
   <embed class="embedpdf" src="{{ asset('tutorialpdf/'.$read->notes) }}#toolbar=0" type="application/pdf">
</div>
@endsection
