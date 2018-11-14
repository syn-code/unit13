@extends('master')

@section('content')

<div class="container">

<div class="row">

        <div class="jumbotron">
            <h3 class="text-dark" id="rehersal">Rehearsal</h3>


<p>
    We have two rooms available to rehearse. Rooms both come with drum shells, guitar cabs, bass cabs, PA and microphones.
    <ul>
        <li>£7.50 per hour</li>
        <li>£2 amp head rental per session.</li>
    </ul>
</p>

<p>
    <h3 class="text-dark" id="recording">Recording</h3>

    We can offer recording for you/your band.
    We can record anything from basic programming instruments (drums, bass, synths, pads etc) to recording live sessions.
    We can also add in mixing and mastering for a additional fee.
    If you want us to mix and master pre recorded tracks, we can also do that for you! Along with re-amping guitars, vocal editing and editing drums.
    If you’re also a producer who is looking to hire a place to record, we can let out the studio for as long as you need it with full access to all our programmes, microphones, and any additional equipment.
</p>

<p>
        <h3 class="text-dark" id="recording">Mixing/Editing. </h3>

        We can mix, and edit your songs.


        Do you feel your drums are slightly out of time? Or your bass/guitars/vocals are slightly out of tune? We can fix that for you. Do you want your song/songs mixed that you’ve recorded, and do you want them to sound them to sound album ready? Then we’re here for you.

            <a href="{{ url('contact') }}">Enquire here for more information.</a>

    </p>

    <p>
            <h3 class="text-dark" id="recording">Mastering. </h3>

            Mastering is important. Do you want that final polish to make your recording shine, and sound huge? We can master your tracks for you, at a excellent rate.

                <a href="{{ url('contact') }}">Enquire here for more information.</a>

    </p>
        <h3>Recent Clients</h3>

            @include('bands')

        </div>

    </div>
</div>


@endsection
