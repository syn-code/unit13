@extends('master')

@section('content')

<div class="container">



    <div class="row">

        <div class="alert alert-dark">
                <p>
                        For all enquiries regarding recordings, rehearsals, lessons or require any further information, please get in touch with us. We will repsond to your email as soon as possible.
                </p>

                <form action="" method="POST">
                        <div class="row">
                            <div class="col form-group">
                                <label for="fullname">Full Name</label>
                                <input type="text" id="fullname" name="fullname" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                                <div class="col form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control">
                                </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="information">Information on</label>
                                <select type="text" id="information" name="information" class="form-control">
                                    <option value="" selected disabled>Please select</option>
                                    <?php foreach($information as $info) : ?>
                                        <option value="<?= $info; ?>"><?= $info; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                                <div class="col form-group">
                                    <label for="message">Enquiry</label>
                                    <textarea name="message" id="message" class="form-control" placeholder="Please enter your message"></textarea>
                                </div>
                        </div>

                        <div class="row">
                                <div class="col form-group">
                                    <button class="btn btn-dark" type="submit">Submit</button>
                                    <button class="btn btn-dark" type="reset">Reset</button>
                                </div>
                        </div>


                </form>
        </div>

    </div>
</div>


@endsection
