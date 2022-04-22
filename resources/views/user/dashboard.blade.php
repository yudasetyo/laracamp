@extends('layouts.app')

@section('content')
    <section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        My Bootcamps
                    </h2>
                </div>
            </div>
            <div class="row my-5">
                @include('components.alert')
                @forelse ($checkouts as $checkout)
                    <table class="table">
                        <tbody>
                            <tr class="align-middle">
                                <td width="18%">
                                    <img src="{{ asset('images/item_bootcamp.png') }}" height="120" alt="">
                                </td>
                                <td>
                                    <p class="mb-2">
                                        <strong>{{ $checkout->Camp->title }}</strong>
                                    </p>
                                    <p>
                                        {{ $checkout->created_at->format('M d, Y') }}
                                    </p>
                                </td>
                                <td>
                                    <strong>${{ $checkout->Camp->price }}K</strong>
                                </td>
                                <td>
                                    @if ($checkout->is_paid)
                                        <strong class="text-success">Payment Success</strong>
                                    @else
                                        <strong>Waiting For Payment</strong>
                                    @endif
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary">
                                        Get Invoice
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                @empty
                    <tr>
                        <td colspan="5">
                            <h3>No Data</h3>
                        </td>
                    </tr>
                @endforelse
            </div>
        </div>
    </section>
@endsection