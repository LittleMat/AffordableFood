@extends('layouts.app')

@section('content')

        <main role="main" class="asd">
            <!-- maincontent stuff here -->
            <div class="container">
            <table class="table table-sm">
              <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Supermarket</th>
                      <th scope="col">Location</th>
                      <th scope="col">Openingshours</th>
                    </tr>
                  </thead>

                <tbody>
                    <tr>
                      <td><img src="{{asset('image/supermarkets/rema1000.jpg')}}" alt="rema1000"></td>
                      <td>Rema1000</td>
                      <td>location1</td>
                      <td>08:00 - 15:00</td>
                    </tr>
                    <tr>
                      <td><img src="{{asset('image/supermarkets/aldi.jpg')}}" alt="aldi"></td>
                      <td>Aldi</td>
                      <td>location2</td>
                      <td>05:00 - 15:00</td>
                    </tr>
                    <tr>
                      <td><img src="{{asset('image/supermarkets/fakta.jpg')}}" alt="fakta"></td>
                      <td>Fakta</td>
                      <td>location3</td>
                      <td>07:00 - 15:00</td>
                    </tr>
                </tbody>

            </table>
   

            </div>

        </main>

@stop