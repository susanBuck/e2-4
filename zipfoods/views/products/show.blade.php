@extends('templates/master')

@section('title')
    {{ $product['name'] }}
@endsection

@section('content')
    {{-- add the variable for reviewSaved from the ProductsController with an alert message and class from Bootstrap css --}}
    @if ($reviewSaved)
        <div test='review-confirmation' class='alert alert-success'>Thank you, your review was submitted!</div>
    @endif

    @if ($app->errorsExist())
        <div class='alert alert-danger'>Please correct the errors below</div>
    @endif

    <div id='product-show'>
        <h2>{{ $product['name'] }}</h2>

        <img src='/images/products/{{ $product['sku'] }}.jpg' class='product-thumb'>

        <p class='product-description'>{{ $product['description'] }}
        </p>

        <div test='product-price' class='product-price {{ $product['price'] < 10 ? 'product-price-sale' : '' }}'>${{ $product['price'] }}
        </div>
    </div>

    <form method='POST' id='product-review' action='/products/save-review'>
        <h3>Review {{ $product['name'] }}</h3>
        <input type='hidden' name='product_id' value='{{ $product['id'] }}'>
        <input test='required' type='hidden' name='sku' value='{{ $product['sku'] }}'>
        <div class='form-group'>
            <label for='name'>Name</label>
            <input test='reviewer-name-input' type='text' class='form-control' name='name' id='name' value='{{ $app->old('name') }}'>
        </div>

        <div class='form-group'>
            <label for='review'>Review</label>
            <textarea test='review-textarea' name='review' id='review' class='form-control'>{{ $app->old('review') }}</textarea>(Min: 200
            characters / Max: 300 characters)
        </div>

        <button test='review-submit-button' type='submit' class='btn btn-primary'>Submit Review</button>
    </form>

    @if ($app->errorsExist())
        <ul class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div id='reviews'>
        <h3>Customer Reviews</h3>
        @if (!$reviews)
            There are no reviews for this product yet.
        @endif

        @foreach ($reviews as $review)
            <div>
                <div test='review-name' class='review-name'>{{ $review['name'] }}</div>
                <div test='review-content' class='review-content'>{{ $review['review'] }}</div>
            </div>
        @endforeach
    </div>

    <a href='/products'>&larr; Return to all products</a>

@endsection
