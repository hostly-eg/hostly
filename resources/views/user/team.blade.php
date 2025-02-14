@extends('layouts.app')

@section('head')

@endsection

@section('content')

        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb-1.jpg');">
            <div class="container">
                <div class="page-heading">
                    <div class="page-header-left">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Team</h1>
                        <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                            <li>
                                <a href="index.html">
                                    Home
                                </a>
                            </li>
                            <li>
                                <i class="fa-regular fa-chevrons-right"></i>
                            </li>
                            <li>
                                Team
                            </li>
                        </ul>
                    </div>
                    <div class="breadcrumb-image wow fadeInUp" data-wow-delay=".4s">
                        <img src="assets/img/breadcrumb.png" alt="img">
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Section Start -->
        <section class="team-section fix section-padding">
            <div class="container">
                <div class="row g-4">
                    @foreach ($team_members as $team_member)
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{$loop->index * 0.2}}s">
                        <div class="team-card-item mt-0">
                            <div class="team-image">
                                <img src="{{asset('images/team_members/'.$team_member->image)}}" alt="{{$team_member->name}}">
                            </div>
                            <div class="team-content bg-cover" style="background-image: url('assets/img/team/team-shape.png');">
                               <h5><a href="team-details.html">{{$team_member->name}}</a></h5>
                               <p>{{$team_member->job}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

@endsection
@section('script')
@endsection
