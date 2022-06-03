@extends('index')
@section('template')
<main style="background-image: url('/image/bg-index.jpeg'); background-size : cover;">
    <div style="margin: 50px 200px; box-shadow : 3px 3px 3px gray">
        <div class="disp" >
            <div class="flex" style="width: 40%; padding : 70px 1px; background-color : #8ABFEE; color : white">
                <img src="/image/logo.png" alt="" width="400" height="300">
            </div>
            <div class="flex" style="width: 60%; padding : 20px 40px; background-color : white">
                <center>
                    <h1 style="color: #0D67B5">Edit Reservasi</h1>
                    <form action="/reservation/{{ $reservation->slug }}" method="post">
                    @method('put')
                    @csrf
                        <label for="category_id">Book Category</label><br>
                        <select name="category_id" id="category_id">
                            @foreach ($categories as $category)
                                @if(old('category_id',$reservation->category_id)==$category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        <br>
                        <label for="seat_id">Seat</label><br>
                        <select name="seat_id" id="seat_id">
                            @foreach ($seats as $seat)
                                @if(old('seat_id',$reservation->seat_id)==$seat->id)
                                    <option value="{{ $seat->id }}" selected>{{ $seat->name }}</option>
                                @else
                                    <option value="{{ $seat->id }}">{{ $seat->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        <br>
                        <label for="timeslot_id">Time Slot</label><br>
                        <select name="timeslot_id" id="timeslot_id">
                            @foreach ($timeslots as $timeslot)
                                @if(old('timeslot_id',$reservation->timeslot_id)==$timeslot->id)
                                    <option value="{{ $timeslot->id }}" selected>{{ $timeslot->name }}</option>
                                @else
                                    <option value="{{ $timeslot->id }}">{{ $timeslot->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        <br><br>
                        <input type="hidden" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" required value="{{ old('slug') }}" disabled readonly>
                        @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <button type="submit" class="btn" style="background-color : #8ABFEE; color : white; border-radius : 15px">Edit Reservation</button>
                    </form>
                </center>
            </div>
        </div>
    </div>
</main>
<script>
    const seat_id = document.querySelector('#seat_id');
    const timeslot_id = document.querySelector('#timeslot_id');
    const slug = document.querySelector('#slug');
    title.addEventListener('change',function(){
        fetch('/reservation/checkSlug?title='+ seat_id.value +'&timeslot_id='+timeslot_id.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    jQuery(document).ready(function ()
    {
            jQuery('select[name="category_id"]').on('change',function(){
               var categoryID = jQuery(this).val();
               if(categoryID)
               {
                  jQuery.ajax({
                     url : 'reservation/getstates/' +categoryID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="seat_id"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="seat_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="seat_id"]').empty();
               }
            });
    });
</script>
@endsection