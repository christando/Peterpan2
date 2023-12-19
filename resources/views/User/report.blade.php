@extends('')
@section('title', 'Report')
@section('content')
@section('content')
    <div class="container">
        <form action="{{ route('report.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="report">Report:</label>
                <textarea name="report" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="star_rating">Star Rating:</label>
                <select name="star_rating" class="form-control" required>
                    <option value="1">1 star</option>
                    <option value="2">2 stars</option>
                    <option value="3">3 stars</option>
                    <option value="4">4 stars</option>
                    <option value="5">5 stars</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit Report</button>
        </form>
    </div>
@endsection
