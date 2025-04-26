@extends('layouts.template')

@section('content')
    <!-- News Section -->
    <div class="actualites-container">
        <h1>Latest News</h1>

        <!-- New Training Course -->
        <div class="actualite">
            <h2>New Business Management Course</h2>
            <p>We are excited to announce the launch of a new Business Management course starting on May 15, 2025. Register now!</p>
            <a href="{{ route('courses.show', ['id' => 1]) }}" class="btn btn-primary">Learn More</a>
        </div>

        <!-- Upcoming Event -->
        <div class="actualite">
            <h2>Digital Marketing Workshop</h2>
            <p>We are organizing a Digital Marketing workshop next Saturday. Don't miss it!</p>
            <a href="{{ route('events.show', ['id' => 2]) }}" class="btn btn-primary">More Details</a>
        </div>

        <!-- Student Testimonial -->
        <div class="actualite">
            <h2>Student Success Story</h2>
            <p>Our student Ahmed Ali has earned a distinction in the Advanced Programming course. Congratulations to him!</p>
            <a href="{{ route('testimonials.index') }}" class="btn btn-primary">Read More</a>
        </div>

    </div>
@endsection
