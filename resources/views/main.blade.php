@extends('master')

@section('content')

<div class="container">
    <p>
        Welcome to Unit 13 Music Productions, we are a small recording studio situated in Tredegar, South Wales. We have a full range of services ranging from recording to rehearsals sessions. Please do check out the rest of the site for further information on our services &amp; pricing.
    </p>
    <div class="row">
        {{-- main image --}}
        <img src="{{ asset('img/studio.jpg') }}" alt="Unit 13 Studio" class="main-image" />
    </div>
    <div class="row">
            <div class="card-deck mt-4 mx-auto">
                    <div class="card  shadow-sm">
                      <div class="card-header">
                        <h4 class="my-0 font-weight-normal text-center">Rehearsal</h4>
                      </div>
                      <div class="card-body">
                        <h2 class="card-title pricing-card-title text-center">£7.50 <small class="text-muted">per hour</small></h2>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>- Two rooms available</li>
                            <li>- Fully Equipt</li>
                            <li>- £2 amp head rental per session</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">More information</button>
                      </div>
                    </div>
                    <div class="card shadow-sm">
                            <div class="card-header">
                              <h4 class="my-0 font-weight-normal text-center">Recording</h4>
                            </div>
                            <div class="card-body">
                              <h2 class="card-title pricing-card-title text-center">We can offer<small class="text-muted"></small></h2>
                              <ul class="list-unstyled mt-3 mb-4">
                                <li>- We offer recording for you or your band</li>
                                <li>- Record from basic programming instruments to recording live sessions</li>
                              </ul>
                              <button type="button" class="btn btn-lg btn-block btn-outline-primary">Get a quote</button>
                            </div>
                          </div>
                          <div class="card  shadow-sm">
                                <div class="card-header">
                                  <h4 class="my-0 font-weight-normal text-center">Guitar Lessons</h4>
                                </div>
                                <div class="card-body">
                                  <h2 class="card-title pricing-card-title text-center">From £9 <small class="text-muted"></small></h2>
                                  <ul class="list-unstyled mt-3 mb-4">
                                    <li>- Wanting to learn, but never knew where to start?</li>
                                    <li>- Book from half hour to hour sessions</li>
                                  </ul>
                                  <button type="button" class="btn btn-lg btn-block btn-outline-primary">Book a Lesson</button>
                                </div>
                              </div>
            </div>
    </div>
</div>

@endsection
