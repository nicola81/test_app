@extends('layouts.app')

@section('content')
<?php

use App\Question_option;

$question_options = Question_option::all();

?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Questions</div>

                <div class="card-body">
                  <?php
                    var_dump($question_options->toArray());
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
