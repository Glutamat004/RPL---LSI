@extends('index')
@section('template')
    <main style="background-image: url('image/bg-index.jpeg'); background-size : cover;">

        <div style="margin: 69px 300px; box-shadow : 3px 3px 3px gray">
                <div style="padding : 20px 40px; background-color : white">
                    <center>
                        <h1 style="color: #0D67B5">Reservation List</h1>
                        <table cellpadding="15">
                            <thead>
                                <tr align="center" style="border-bottom: 2px solid #0D67B5; color : #0D67B5;">
                                    <th>No</th>
                                    <th>Seat</th>
                                    <th>Time Slot</th>
                                    <th>Book Category</th>
                                    <th>Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach($reservations as $reservation) --}}
                                <tr>
                                    <td>1</td>
                                    <td>A21</td>
                                    <td>07.00 - 09.00</td>
                                    <td>Biology</td>
                                    <td>
                                        <button href="/reservations/edit" class="badge  text-decoration-none p-2"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <form action="/reservations" class="d-inline" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="badge bg-danger text-decoration-none p-2 border-0" onclick="return confirm('Hapus postingan?')"><i class="bi bi-trash"></i>Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                {{-- @endforeach --}}
                            </tbody>
                            
                        </table>

                        {{-- <h1 style="color : gray; font-size : 40px">NO RESERVATON</h1> --}}
                        
                        <br><br><br>
                        <a href="./tambah-reservasi.html" class="btn-index" style="background-color : #8ABFEE ">Make new reservation</a>
                    </center>
                </div>
        </div>
    </main>
@endsection





