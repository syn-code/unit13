@extends('master')

@section('content')

<div class="container">

    <p>
            Unit 13 Music Studio is based in Tredegar, South Wales. Ran by Aled Davies and Samuel Kilby.

            We offer two rehearsal rooms, each room have:
            Drums, Cabs, Bass combos and PAs
            Head rental is currently £2 a session for a EVH 5150iii, Peavey 6505 and a Peavey Valveking.
            Rehearsal is £7.50 an hour, and we can work on deals for full day bookings.
    </p>

    <div class="row">
            <div class="col">
                <img src="{{ asset('img/bass.jpg') }}" alt="Bass Session in the Unit" class="img-thumbnail" id="image1" />
            </div>
            <div class="col">
                <img src="{{ asset('img/guitars.jpg') }}" alt="Studio" class="img-thumbnail" id="image2"/>
            </div>
            <div class="col">
                <img src="{{ asset('img/equipment2.jpg') }}" alt="Drum Set" class="img-thumbnail" id="image3" />
            </div>
    </div>
</div>


@endsection
